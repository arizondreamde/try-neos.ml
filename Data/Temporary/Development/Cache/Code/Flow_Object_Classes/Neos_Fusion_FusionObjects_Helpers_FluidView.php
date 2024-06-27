<?php 
namespace Neos\Fusion\FusionObjects\Helpers;

/*
 * This file is part of the Neos.Fusion package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Mvc\ActionRequest;
use Neos\FluidAdaptor\View\StandaloneView;
use Neos\Fusion\FusionObjects\AbstractFusionObject;

/**
 * Extended Fluid Template View for use in Fusion.
 */
class FluidView_Original extends StandaloneView implements FusionAwareViewInterface
{
    /**
     * @var string
     */
    protected $resourcePackage;

    /**
     * @var AbstractFusionObject
     */
    protected $fusionObject;

    /**
     * @param AbstractFusionObject $fusionObject
     * @param ActionRequest $request The current action request. If none is specified it will be created from the environment.
     * @throws \Neos\FluidAdaptor\Exception
     */
    public function __construct(AbstractFusionObject $fusionObject, ActionRequest $request = null)
    {
        parent::__construct($request);
        $this->fusionObject = $fusionObject;
    }

    /**
     * @param string $resourcePackage
     */
    public function setResourcePackage($resourcePackage)
    {
        $this->resourcePackage = $resourcePackage;
    }

    /**
     * @return string
     */
    public function getResourcePackage()
    {
        return $this->resourcePackage;
    }

    /**
     * @return AbstractFusionObject
     */
    public function getFusionObject()
    {
        return $this->fusionObject;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Extended Fluid Template View for use in Fusion.
 * @codeCoverageIgnore
 */
class FluidView extends FluidView_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * @param AbstractFusionObject $fusionObject
     * @param ActionRequest $request The current action request. If none is specified it will be created from the environment.
     * @throws \Neos\FluidAdaptor\Exception
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Fusion\FusionObjects\AbstractFusionObject');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $fusionObject in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
        if ('Neos\Fusion\FusionObjects\Helpers\FluidView' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\Fusion\FusionObjects\Helpers\FluidView';
        if ($isSameClass) {
            $this->initializeObject(1);
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
  'resourcePackage' => 'string',
  'fusionObject' => 'Neos\\Fusion\\FusionObjects\\AbstractFusionObject',
  'templateSource' => 'string',
  'templatePathAndFilename' => 'string',
  'environment' => '\\Neos\\Flow\\Utility\\Environment',
  'request' => 'Neos\\Flow\\Mvc\\ActionRequest',
  'bootstrap' => 'Neos\\Flow\\Core\\Bootstrap',
  'supportedOptions' => 'array',
  'options' => 'array',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'baseRenderingContext' => 'TYPO3Fluid\\Fluid\\Core\\Rendering\\RenderingContextInterface',
  'renderingStack' => 'array',
  'variables' => 'array',
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
            $result = NULL;

        $isSameClass = get_class($this) === 'Neos\Fusion\FusionObjects\Helpers\FluidView';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Fusion\FusionObjects\Helpers\FluidView', $classParents) !== false && array_search('Doctrine\Persistence\Proxy', $classImplements) !== false;

        if ($isSameClass || $isClassProxy) {
            $this->initializeObject(2);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Utility\Environment', 'Neos\Flow\Utility\Environment', 'environment', 'cce2af5ed9f80b598c497d98c35a5eb3', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Utility\Environment'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Core\Bootstrap', 'Neos\Flow\Core\Bootstrap', 'bootstrap', 'aed14e789673142988a77dfdf496f415', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Core\Bootstrap'); });
        $this->Flow_Injected_Properties = array (
  0 => 'environment',
  1 => 'bootstrap',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Fusion/Classes/FusionObjects/Helpers/FluidView.php
#