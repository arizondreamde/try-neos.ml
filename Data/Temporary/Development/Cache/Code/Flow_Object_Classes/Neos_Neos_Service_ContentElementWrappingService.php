<?php 
namespace Neos\Neos\Service;

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
use Neos\Flow\Security\Authorization\PrivilegeManagerInterface;
use Neos\Neos\Domain\Service\ContentContext;
use Neos\ContentRepository\Domain\Model\Node;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\ContentRepository\Service\AuthorizationService;
use Neos\Fusion\Service\HtmlAugmenter as FusionHtmlAugmenter;

/**
 * The content element wrapping service adds the necessary markup around
 * a content element such that it can be edited using the Content Module
 * of the Neos Backend.
 *
 * @Flow\Scope("singleton")
 */
class ContentElementWrappingService_Original
{
    /**
     * @Flow\Inject
     * @var PrivilegeManagerInterface
     */
    protected $privilegeManager;

    /**
     * @Flow\Inject
     * @var AuthorizationService
     */
    protected $nodeAuthorizationService;

    /**
     * @Flow\Inject
     * @var FusionHtmlAugmenter
     */
    protected $htmlAugmenter;

    /**
     * This is an extensibility point for other packages to add additional attributes to the wrapping tag.
     * This method is replaced by the Neos.Ui package via an aspect to add the needed markup for selection.
     *
     * @param array $additionalAttributes additional attributes in the form ['<attribute-name>' => '<attibute-value>', ...] to be rendered in the element wrapping
     */
    public function wrapContentObject(NodeInterface $node, string $content, string $fusionPath, array $additionalAttributes = []): string
    {
        return $content;
    }

    /**
     * @param array $additionalAttributes additional attributes in the form ['<attribute-name>' => '<attibute-value>', ...] to be rendered in the element wrapping
     */
    public function wrapCurrentDocumentMetadata(NodeInterface $node, string $content, string $fusionPath, array $additionalAttributes = []): string
    {
        if ($this->needsMetadata($node, true) === false) {
            return $content;
        }

        $attributes = $additionalAttributes;
        $attributes['data-node-__fusion-path'] = $fusionPath;
        $attributes = $this->addCssClasses($attributes, $node, []);

        return $this->htmlAugmenter->addAttributes($content, $attributes, 'div', ['typeof']);
    }

    /**
     * Add required CSS classes to the attributes.
     */
    protected function addCssClasses(array $attributes, NodeInterface $node, array $initialClasses = []): array
    {
        $classNames = $initialClasses;
        // FIXME: The `dimensionsAreMatchingTargetDimensionValues` method should become part of the NodeInterface if it is used here .
        if ($node instanceof Node && !$node->dimensionsAreMatchingTargetDimensionValues()) {
            $classNames[] = 'neos-contentelement-shine-through';
        }

        if ($classNames !== []) {
            $attributes['class'] = implode(' ', $classNames);
        }

        return $attributes;
    }

    /**
     * Collects CSS class names used for styling editable elements in the Neos backend.
     */
    protected function collectEditingClassNames(NodeInterface $node): array
    {
        $classNames = [];

        if ($node->getNodeType()->isOfType('Neos.Neos:ContentCollection')) {
            // This is needed since the backend relies on this class (should not be necessary)
            $classNames[] = 'neos-contentcollection';
        } else {
            $classNames[] = 'neos-contentelement';
        }

        if ($node->isRemoved()) {
            $classNames[] = 'neos-contentelement-removed';
        }

        if ($node->isHidden()) {
            $classNames[] = 'neos-contentelement-hidden';
        }

        if ($this->isInlineEditable($node) === false) {
            $classNames[] = 'neos-not-inline-editable';
        }

        return $classNames;
    }

    /**
     * Determine if the Node or one of it's properties is inline editable.
            $parsedType = TypeHandling::parseType($dataType);
     */
    protected function isInlineEditable(NodeInterface $node): bool
    {
        $uiConfiguration = $node->getNodeType()->hasConfiguration('ui') ? $node->getNodeType()->getConfiguration('ui') : [];
        return (
            (isset($uiConfiguration['inlineEditable']) && $uiConfiguration['inlineEditable'] === true) ||
            $this->hasInlineEditableProperties($node)
        );
    }

    /**
     * Checks if the given Node has any properties configured as 'inlineEditable'
     */
    protected function hasInlineEditableProperties(NodeInterface $node): bool
    {
        return array_reduce(array_values($node->getNodeType()->getProperties()), static function ($hasInlineEditableProperties, $propertyConfiguration) {
            return ($hasInlineEditableProperties || (isset($propertyConfiguration['ui']['inlineEditable']) && $propertyConfiguration['ui']['inlineEditable'] === true));
        }, false);
    }

    protected function needsMetadata(NodeInterface $node, bool $renderCurrentDocumentMetadata): bool
    {
        /** @var $contentContext ContentContext */
        $contentContext = $node->getContext();
        return ($contentContext->isInBackend() === true && ($renderCurrentDocumentMetadata === true || $this->nodeAuthorizationService->isGrantedToEditNode($node) === true));
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * The content element wrapping service adds the necessary markup around
 * a content element such that it can be edited using the Content Module
 * of the Neos Backend.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class ContentElementWrappingService extends ContentElementWrappingService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\Aop\AdvicesTrait, \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\Neos\Service\ContentElementWrappingService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Service\ContentElementWrappingService', $this);
        if ('Neos\Neos\Service\ContentElementWrappingService' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    protected function Flow_Aop_Proxy_buildMethodsAndAdvicesArray()
    {
        if (method_exists(get_parent_class(), 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray') && is_callable([parent::class, 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray'])) parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        $objectManager = \Neos\Flow\Core\Bootstrap::$staticObjectManager;
        $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array(
            'wrapContentObject' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Neos\Ui\Aspects\AugmentationAspect', 'contentElementAugmentation', $objectManager, NULL),
                ),
            ),
        );
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\Neos\Service\ContentElementWrappingService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Service\ContentElementWrappingService', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;
        if (method_exists(get_parent_class(), '__wakeup') && is_callable([parent::class, '__wakeup'])) parent::__wakeup();
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __clone()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
    }

    /**
     * Autogenerated Proxy Method
     *
     * This is an extensibility point for other packages to add additional attributes to the wrapping tag.
     * This method is replaced by the Neos.Ui package via an aspect to add the needed markup for selection.
     *
     * @param array $additionalAttributes additional attributes in the form ['<attribute-name>' => '<attibute-value>', ...] to be rendered in the element wrapping
     */
    public function wrapContentObject(\Neos\ContentRepository\Domain\Model\NodeInterface $node, string $content, string $fusionPath, array $additionalAttributes = array()) : string
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['wrapContentObject'])) {
            $result = parent::wrapContentObject($node, $content, $fusionPath, $additionalAttributes);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['wrapContentObject'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['node'] = $node;
                $methodArguments['content'] = $content;
                $methodArguments['fusionPath'] = $fusionPath;
                $methodArguments['additionalAttributes'] = $additionalAttributes;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('wrapContentObject');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Service\ContentElementWrappingService', 'wrapContentObject', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['wrapContentObject']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['wrapContentObject']);
        }
        return $result;
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
  'privilegeManager' => 'Neos\\Flow\\Security\\Authorization\\PrivilegeManagerInterface',
  'nodeAuthorizationService' => 'Neos\\ContentRepository\\Service\\AuthorizationService',
  'htmlAugmenter' => 'Neos\\Fusion\\Service\\HtmlAugmenter',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Authorization\PrivilegeManagerInterface', 'Neos\Flow\Security\Authorization\PrivilegeManager', 'privilegeManager', '68ada25ea2828278e185a684d1c86739', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Authorization\PrivilegeManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Service\AuthorizationService', 'Neos\ContentRepository\Service\AuthorizationService', 'nodeAuthorizationService', 'be5161f8650c76e42dacce00c340510b', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Service\AuthorizationService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Fusion\Service\HtmlAugmenter', 'Neos\Fusion\Service\HtmlAugmenter', 'htmlAugmenter', 'e86465d15d3ea464979563a77314bbba', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Fusion\Service\HtmlAugmenter'); });
        $this->Flow_Injected_Properties = array (
  0 => 'privilegeManager',
  1 => 'nodeAuthorizationService',
  2 => 'htmlAugmenter',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Neos/Classes/Service/ContentElementWrappingService.php
#