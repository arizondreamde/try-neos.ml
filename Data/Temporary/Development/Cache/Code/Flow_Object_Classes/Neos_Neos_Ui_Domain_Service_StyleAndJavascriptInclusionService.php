<?php 
namespace Neos\Neos\Ui\Domain\Service;

/*
 * This file is part of the Neos.Neos.Ui package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Eel\CompilingEvaluator;
use Neos\Eel\Utility;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\ResourceManagement\ResourceManager;
use Neos\Utility\PositionalArraySorter;

/**
 * @Flow\Scope("singleton")
 */
class StyleAndJavascriptInclusionService_Original
{
    /**
     * @Flow\Inject
     * @var ResourceManager
     */
    protected $resourceManager;

    /**
     * @Flow\Inject(lazy=false)
     * @var CompilingEvaluator
     */
    protected $eelEvaluator;

    /**
     * @Flow\InjectConfiguration(package="Neos.Fusion", path="defaultContext")
     * @var array
     */
    protected $fusionDefaultEelContext;

    /**
     * @Flow\InjectConfiguration(path="configurationDefaultEelContext")
     * @var array
     */
    protected $additionalEelDefaultContext;

    /**
     * @Flow\InjectConfiguration(path="resources.javascript")
     * @var array
     */
    protected $javascriptResources;

    /**
     * @Flow\InjectConfiguration(path="resources.stylesheets")
     * @var array
     */
    protected $stylesheetResources;

    public function getHeadScripts()
    {
        return $this->build($this->javascriptResources, function ($uri, $additionalAttributes) {
            return '<script src="' . $uri . '" ' . $additionalAttributes . '></script>';
        });
    }

    public function getHeadStylesheets()
    {
        return $this->build($this->stylesheetResources, function ($uri, $additionalAttributes) {
            return '<link rel="stylesheet" href="' . $uri . '" ' . $additionalAttributes . '/>';
        });
    }

    protected function build(array $resourceArrayToSort, \Closure $builderForLine)
    {
        $sortedResources = (new PositionalArraySorter($resourceArrayToSort))->toArray();

        $result = '';
        foreach ($sortedResources as $element) {
            $resourceExpression = $element['resource'];
            if (substr($resourceExpression, 0, 2) === '${' && substr($resourceExpression, -1) === '}') {
                $resourceExpression = Utility::evaluateEelExpression(
                    $resourceExpression,
                    $this->eelEvaluator,
                    [],
                    array_merge($this->fusionDefaultEelContext, $this->additionalEelDefaultContext)
                );
            }

            $hash = null;

            if (strpos($resourceExpression, 'resource://') === 0) {
                // Cache breaker
                $hash = substr(md5_file($resourceExpression), 0, 8);
                $resourceExpression = $this->resourceManager->getPublicPackageResourceUriByPath($resourceExpression);
            }
            $finalUri = $hash ? $resourceExpression . (str_contains($resourceExpression, '?') ? '&' : '?') . $hash : $resourceExpression;
            $additionalAttributes = array_merge(
                // legacy first level 'defer' attribute
                isset($element['defer']) ? ['defer' => $element['defer']] : [],
                $element['attributes'] ?? []
            );
            $result .= $builderForLine($finalUri, $this->htmlAttributesArrayToString($additionalAttributes));
        }
        return $result;
    }

    /**
     * @todo use helper like https://github.com/mficzel/neos-development-collection/blob/75e1feaed2e290b1d2ee3e500b82da42c3460aba/Neos.Fusion/Classes/Service/RenderAttributesTrait.php#L19 once its api
     *
     * @param array<string,string|bool> $attributes
     */
    private function htmlAttributesArrayToString(array $attributes): string
    {
        return join(' ', array_filter(array_map(function ($key, $value) {
            if (is_bool($value)) {
                return $value ? htmlspecialchars($key) : null;
            }
            return htmlspecialchars($key) . '="' . htmlspecialchars($value) . '"';
        }, array_keys($attributes), $attributes)));
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class StyleAndJavascriptInclusionService extends StyleAndJavascriptInclusionService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Neos\Ui\Domain\Service\StyleAndJavascriptInclusionService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Ui\Domain\Service\StyleAndJavascriptInclusionService', $this);
        if ('Neos\Neos\Ui\Domain\Service\StyleAndJavascriptInclusionService' === get_class($this)) {
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
  'resourceManager' => 'Neos\\Flow\\ResourceManagement\\ResourceManager',
  'eelEvaluator' => 'Neos\\Eel\\CompilingEvaluator',
  'fusionDefaultEelContext' => 'array',
  'additionalEelDefaultContext' => 'array',
  'javascriptResources' => 'array',
  'stylesheetResources' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Neos\Ui\Domain\Service\StyleAndJavascriptInclusionService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Ui\Domain\Service\StyleAndJavascriptInclusionService', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ResourceManagement\ResourceManager', 'Neos\Flow\ResourceManagement\ResourceManager', 'resourceManager', '5c4c2fb284addde18c78849a54b02875', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ResourceManagement\ResourceManager'); });
        $this->eelEvaluator = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Eel\CompilingEvaluator');
        $this->fusionDefaultEelContext = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Fusion.defaultContext');
        $this->additionalEelDefaultContext = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Neos.Ui.configurationDefaultEelContext');
        $this->javascriptResources = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Neos.Ui.resources.javascript');
        $this->stylesheetResources = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Neos.Ui.resources.stylesheets');
        $this->Flow_Injected_Properties = array (
  0 => 'resourceManager',
  1 => 'eelEvaluator',
  2 => 'fusionDefaultEelContext',
  3 => 'additionalEelDefaultContext',
  4 => 'javascriptResources',
  5 => 'stylesheetResources',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Neos.Ui/Classes/Domain/Service/StyleAndJavascriptInclusionService.php
#