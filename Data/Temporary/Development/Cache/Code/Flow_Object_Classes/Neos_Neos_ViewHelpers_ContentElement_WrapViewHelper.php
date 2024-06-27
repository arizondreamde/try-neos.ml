<?php 
namespace Neos\Neos\ViewHelpers\ContentElement;

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
use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;
use Neos\FluidAdaptor\Core\ViewHelper\Exception as ViewHelperException;
use Neos\Neos\Service\ContentElementWrappingService;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\Fusion\FusionObjects\Helpers\FusionAwareViewInterface;

/**
 * A view helper for manually wrapping content editables.
 *
 * Note that using this view helper is usually not necessary as Neos will automatically wrap editables of content
 * elements.
 *
 * By explicitly wrapping template parts with node meta data that is required for the backend to show properties in the
 * inspector, this ViewHelper enables usage of the ``contentElement.editable`` ViewHelper outside of content element
 * templates. This is useful if you want to make properties of a custom document node inline-editable.
 *
 * = Examples =
 *
 * <code title="Defaults">
 * <neos:contentElement.wrap>
 *  <div>{neos:contentElement.editable(property: 'someProperty')}</div>
 * </neos:contentElement.wrap>
 * </code>
 */
class WrapViewHelper_Original extends AbstractViewHelper
{
    /**
     * @var boolean
     */
    protected $escapeOutput = false;

    /**
     * @Flow\Inject
     * @var ContentElementWrappingService
     */
    protected $contentElementWrappingService;

    /**
     * Initialize the arguments.
     *
     * @return void
     * @throws \Neos\FluidAdaptor\Core\ViewHelper\Exception
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('node', NodeInterface::class, 'Node');
    }

    /**
     * In live workspace this just renders a the content.
     * For logged in users with access to the Backend this also adds the attributes for the RTE to work.
     *
     * @return string The rendered property with a wrapping tag. In the user workspace this adds some required attributes for the RTE to work
     * @throws ViewHelperException
     */
    public function render(): string
    {
        $view = $this->viewHelperVariableContainer->getView();
        if (!$view instanceof FusionAwareViewInterface) {
            throw new ViewHelperException('This ViewHelper can only be used in a Fusion content element. You have to specify the "node" argument if it cannot be resolved from the Fusion context.', 1385737102);
        }
        $fusionObject = $view->getFusionObject();
        $currentContext = $fusionObject->getRuntime()->getCurrentContext();

        $node = $this->arguments['node'] ?? $currentContext['node'];
        return $this->contentElementWrappingService->wrapContentObject($node, (string)$this->renderChildren(), $fusionObject->getPath());
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A view helper for manually wrapping content editables.
 *
 * Note that using this view helper is usually not necessary as Neos will automatically wrap editables of content
 * elements.
 *
 * By explicitly wrapping template parts with node meta data that is required for the backend to show properties in the
 * inspector, this ViewHelper enables usage of the ``contentElement.editable`` ViewHelper outside of content element
 * templates. This is useful if you want to make properties of a custom document node inline-editable.
 *
 * = Examples =
 *
 * <code title="Defaults">
 * <neos:contentElement.wrap>
 *  <div>{neos:contentElement.editable(property: 'someProperty')}</div>
 * </neos:contentElement.wrap>
 * </code>
 * @codeCoverageIgnore
 */
class WrapViewHelper extends WrapViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
        if ('Neos\Neos\ViewHelpers\ContentElement\WrapViewHelper' === get_class($this)) {
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
            'setRenderingContext' => array(
                'Neos\Flow\Aop\Advice\BeforeAdvice' => array(
                    new \Neos\Flow\Aop\Advice\BeforeAdvice('Neos\Neos\Ui\Aspects\AugmentationAspect', 'setControllerContextFromWrapViewHelper', $objectManager, NULL),
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
     * @param RenderingContextInterface $renderingContext
     * @return void
     */
    public function setRenderingContext(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['setRenderingContext'])) {
            $result = parent::setRenderingContext($renderingContext);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['setRenderingContext'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['renderingContext'] = $renderingContext;
            
                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['setRenderingContext']['Neos\Flow\Aop\Advice\BeforeAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['setRenderingContext']['Neos\Flow\Aop\Advice\BeforeAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\ViewHelpers\ContentElement\WrapViewHelper', 'setRenderingContext', $methodArguments);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\ViewHelpers\ContentElement\WrapViewHelper', 'setRenderingContext', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['setRenderingContext']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['setRenderingContext']);
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
  'escapeOutput' => 'boolean',
  'contentElementWrappingService' => 'Neos\\Neos\\Service\\ContentElementWrappingService',
  'renderingContext' => 'FlowAwareRenderingContextInterface&RenderingContextInterface',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'logger' => 'Psr\\Log\\LoggerInterface',
  'argumentDefinitions' => 'array<TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ArgumentDefinition>',
  'viewHelperNode' => 'TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\ViewHelperNode',
  'arguments' => 'array<string, mixed>',
  'childNodes' => 'NodeInterface[] array',
  'templateVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\Variables\\VariableProviderInterface',
  'renderChildrenClosure' => '\\Closure',
  'viewHelperVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperVariableContainer',
  'escapeChildren' => 'boolean',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Service\ContentElementWrappingService', 'Neos\Neos\Service\ContentElementWrappingService', 'contentElementWrappingService', '5349aae33eae2b864859514294d80044', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Service\ContentElementWrappingService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'logger',
  2 => 'contentElementWrappingService',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Neos/Classes/ViewHelpers/ContentElement/WrapViewHelper.php
#