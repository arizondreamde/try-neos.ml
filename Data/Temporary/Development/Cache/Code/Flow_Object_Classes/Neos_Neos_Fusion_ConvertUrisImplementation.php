<?php 
namespace Neos\Neos\Fusion;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Neos\Domain\Exception;
use Neos\Neos\Fusion\Helper\CachingHelper;
use Neos\Neos\Service\LinkingService;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\Fusion\FusionObjects\AbstractFusionObject;

/**
 * A Fusion Object that converts link references in the format "<type>://<UUID>" to proper URIs
 *
 * Right now node://<UUID> and asset://<UUID> are supported URI schemes.
 *
 * Usage::
 *
 *   someTextProperty.@process.1 = Neos.Neos:ConvertUris
 *
 * The optional property ``forceConversion`` can be used to have the links converted even when not
 * rendering the live workspace. This is used for links that are not inline editable (for
 * example links on images)::
 *
 *   someTextProperty.@process.1 = Neos.Neos:ConvertUris {
 *     forceConversion = true
 *   }
 *
 * The optional property ``externalLinkTarget`` can be modified to disable or change the target attribute of the
 * link tag for links to external targets::
 *
 *   prototype(Neos.Neos:ConvertUris) {
 *     externalLinkTarget = '_blank'
 *     resourceLinkTarget = '_blank'
 *   }
 *
 * The optional property ``absolute`` can be used to convert node uris to absolute links::
 *
 *   someTextProperty.@process.1 = Neos.Neos:ConvertUris {
 *     absolute = true
 *   }
 */
class ConvertUrisImplementation_Original extends AbstractFusionObject
{
    /**
     * @Flow\Inject
     * @var LinkingService
     */
    protected $linkingService;

    /**
     * @Flow\Inject
     * @var CachingHelper
     */
    protected $cachingHelper;

    /**
     * Convert URIs matching a supported scheme with generated URIs
     *
     * If the workspace of the current node context is not live, no replacement will be done unless forceConversion is
     * set. This is needed to show the editable links with metadata in the content module.
     *
     * @return string
     * @throws Exception
     */
    public function evaluate()
    {
        $text = $this->fusionValue('value');

        if ($text === '' || $text === null) {
            return '';
        }

        if (!is_string($text)) {
            throw new Exception(sprintf('Only strings can be processed by this Fusion object, given: "%s".', gettype($text)), 1382624080);
        }

        $node = $this->fusionValue('node');

        if (!$node instanceof NodeInterface) {
            throw new Exception(sprintf('The current node must be an instance of NodeInterface, given: "%s".', gettype($text)), 1382624087);
        }

        if (!($this->fusionValue('forceConversion')) && $node->getContext()->getWorkspace()->getName() !== 'live') {
            return $text;
        }

        $unresolvedUris = [];
        $linkingService = $this->linkingService;
        $controllerContext = $this->runtime->getControllerContext();

        $absolute = $this->fusionValue('absolute');

        $processedContent = preg_replace_callback(LinkingService::PATTERN_SUPPORTED_URIS, function (array $matches) use ($node, $linkingService, $controllerContext, &$unresolvedUris, $absolute) {
            switch ($matches[1]) {
                case 'node':
                    $resolvedUri = $linkingService->resolveNodeUri($matches[0], $node, $controllerContext, $absolute);
                    $cacheTagIdentifier = sprintf('%s_%s', $this->cachingHelper->renderWorkspaceTagForContextNode($node->getContext()->getWorkspaceName()), $matches[2]);
                    $this->runtime->addCacheTag('node', $cacheTagIdentifier);
                    break;
                case 'asset':
                    $resolvedUri = $linkingService->resolveAssetUri($matches[0]);
                    $cacheTagIdentifier = sprintf('%s_%s', $this->cachingHelper->renderWorkspaceTagForContextNode($node->getContext()->getWorkspaceName()), $matches[2]);
                    $this->runtime->addCacheTag('asset', $cacheTagIdentifier);
                    break;
                default:
                    $resolvedUri = null;
            }

            if ($resolvedUri === null) {
                $unresolvedUris[] = $matches[0];
                return $matches[0];
            }

            return $resolvedUri;
        }, $text);

        if ($unresolvedUris !== []) {
            $processedContent = preg_replace('/<a(?:\s+[^>]*)?\s+href="(node|asset):\/\/[^"]+"[^>]*>(.*?)<\/a>/', '$2', $processedContent);
            $processedContent = preg_replace(LinkingService::PATTERN_SUPPORTED_URIS, '', $processedContent);
        }

        $processedContent = $this->replaceLinkTargets($processedContent);

        return $processedContent;
    }

    /**
     * Replace the target attribute of link tags in processedContent with the target
     * specified by externalLinkTarget and resourceLinkTarget options.
     * Additionally set rel="noopener external" for external links.
     *
     * @param string $processedContent
     * @return string
     */
    protected function replaceLinkTargets($processedContent)
    {
        $setNoOpener = $this->fusionValue('setNoOpener');
        $setExternal = $this->fusionValue('setExternal');
        $externalLinkTarget = \trim((string)$this->fusionValue('externalLinkTarget'));
        $resourceLinkTarget = \trim((string)$this->fusionValue('resourceLinkTarget'));
        $controllerContext = $this->runtime->getControllerContext();
        $host = $controllerContext->getRequest()->getHttpRequest()->getUri()->getHost();
        $processedContent = \preg_replace_callback(
            '~<a\s+.*?href="(.*?)".*?>~i',
            static function ($matches) use ($externalLinkTarget, $resourceLinkTarget, $host, $setNoOpener, $setExternal) {
                [$linkText, $linkHref] = $matches;
                $uriHost = \parse_url($linkHref, PHP_URL_HOST);
                $target = null;
                $isExternalLink = \is_string($uriHost) && $uriHost !== $host;

                if ($externalLinkTarget && $externalLinkTarget !== '' && $isExternalLink) {
                    $target = $externalLinkTarget;
                }
                if ($resourceLinkTarget && $resourceLinkTarget !== '' && str_contains($linkHref, '_Resources')) {
                    $target = $resourceLinkTarget;
                }
                if ($isExternalLink && $setNoOpener) {
                    $linkText = self::setAttribute('rel', 'noopener', $linkText);
                }
                if ($isExternalLink && $setExternal) {
                    $linkText = self::setAttribute('rel', 'external', $linkText);
                }
                if (is_string($target) && $target !== '') {
                    return self::setAttribute('target', $target, $linkText);
                }
                return $linkText;
            },
            $processedContent
        );
        return $processedContent;
    }


    /**
     * Set or add value to the a attribute
     *
     * @param string $attribute The attribute, ('target' or 'rel')
     * @param string $value The value of the attribute to add
     * @param string $content The content to parse
     * @return string
     */
    private static function setAttribute(string $attribute, string $value, string $content): string
    {
        // The attribute is already set
        if (\preg_match_all('~\s+' . $attribute . '="(.*?)~i', $content, $matches)) {
            // If the attribute is target or the value is already set, leave the attribute as it is
            if ($attribute === 'target' || \preg_match('~' . $attribute . '=".*?' . $value . '.*?"~i', $content)) {
                return $content;
            }
            // Add the attribute to the list
            return \preg_replace('/' . $attribute . '="(.*?)"/', sprintf('%s="$1 %s"', $attribute, $value), $content);
        }

        // Add the missing attribute with the value
        return \str_replace('<a', sprintf('<a %s="%s"', $attribute, $value), $content);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A Fusion Object that converts link references in the format "<type>://<UUID>" to proper URIs
 *
 * Right now node://<UUID> and asset://<UUID> are supported URI schemes.
 *
 * Usage::
 *
 *   someTextProperty.@process.1 = Neos.Neos:ConvertUris
 *
 * The optional property ``forceConversion`` can be used to have the links converted even when not
 * rendering the live workspace. This is used for links that are not inline editable (for
 * example links on images)::
 *
 *   someTextProperty.@process.1 = Neos.Neos:ConvertUris {
 *     forceConversion = true
 *   }
 *
 * The optional property ``externalLinkTarget`` can be modified to disable or change the target attribute of the
 * link tag for links to external targets::
 *
 *   prototype(Neos.Neos:ConvertUris) {
 *     externalLinkTarget = '_blank'
 *     resourceLinkTarget = '_blank'
 *   }
 *
 * The optional property ``absolute`` can be used to convert node uris to absolute links::
 *
 *   someTextProperty.@process.1 = Neos.Neos:ConvertUris {
 *     absolute = true
 *   }
 * @codeCoverageIgnore
 */
class ConvertUrisImplementation extends ConvertUrisImplementation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor
     *
     * @param Runtime $runtime
     * @param string $path
     * @param string $fusionObjectName
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Fusion\Core\Runtime');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $runtime in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $path in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $fusionObjectName in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
        if ('Neos\Neos\Fusion\ConvertUrisImplementation' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __sleep()
    {
            $result = NULL;
        $this->Flow_Object_PropertiesToSerialize = array();
        unset($this->Flow_Persistence_RelatedEntities);

        $transientProperties = array (
);
        $propertyVarTags = array (
  'linkingService' => 'Neos\\Neos\\Service\\LinkingService',
  'cachingHelper' => 'Neos\\Neos\\Fusion\\Helper\\CachingHelper',
  'runtime' => 'Neos\\Fusion\\Core\\Runtime',
  'path' => 'string',
  'fusionObjectName' => 'string',
  'fusionValueCache' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Service\LinkingService', 'Neos\Neos\Service\LinkingService', 'linkingService', '4473b90cfba243c7f02dd86c13d56fd2', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Service\LinkingService'); });
        $this->cachingHelper = new \Neos\Neos\Fusion\Helper\CachingHelper();
        $this->Flow_Injected_Properties = array (
  0 => 'linkingService',
  1 => 'cachingHelper',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Neos/Classes/Fusion/ConvertUrisImplementation.php
#