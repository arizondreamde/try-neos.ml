<?php 
declare(strict_types=1);

namespace Neos\Fusion\Form\Runtime\FusionObjects;

/*
 * This file is part of the Neos.Fusion.Form package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\ActionResponse;
use Neos\Fusion\Form\Runtime\Domain\ActionResolver;
use Neos\Fusion\Form\Runtime\Domain\ActionInterface;
use Neos\Fusion\Form\Runtime\Domain\ConfigurableActionInterface;
use Neos\Fusion\FusionObjects\AbstractFusionObject;

class ActionImplementation_Original extends AbstractFusionObject implements ActionInterface
{
    /**
     * @var ActionResolver
     * @Flow\Inject
     */
    protected $actionResolver;

    /**
     * Return reference to self during fusion evaluation
     * @return $this
     */
    public function evaluate(): self
    {
        return $this;
    }

    /**
     * @return ActionResponse|null
     * @throws \Neos\Fusion\Form\Runtime\Domain\Exception\NoSuchActionException
     */
    public function perform(): ?ActionResponse
    {
        $type = $this->fusionValue('type');
        $options = $this->fusionValue('options');
        $action = $this->actionResolver->createAction($type);
        if ($action instanceof ConfigurableActionInterface) {
            $action = $action->withOptions($options);
        }
        return $action->perform();
    }
}

#
# Start of Flow generated Proxy code
#

class ActionImplementation extends ActionImplementation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
        if ('Neos\Fusion\Form\Runtime\FusionObjects\ActionImplementation' === get_class($this)) {
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
  'actionResolver' => 'Neos\\Fusion\\Form\\Runtime\\Domain\\ActionResolver',
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
        $this->actionResolver = new \Neos\Fusion\Form\Runtime\Domain\ActionResolver();
        $this->Flow_Injected_Properties = array (
  0 => 'actionResolver',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Fusion.Form/Classes/Runtime/FusionObjects/ActionImplementation.php
#