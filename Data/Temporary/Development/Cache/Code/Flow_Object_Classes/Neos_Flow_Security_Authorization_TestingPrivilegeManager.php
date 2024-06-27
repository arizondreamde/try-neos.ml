<?php 
namespace Neos\Flow\Security\Authorization;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;

/**
 * An access decision manager that can be overridden for tests
 *
 * @Flow\Scope("singleton")
 */
class TestingPrivilegeManager_Original extends PrivilegeManager
{
    /**
     * @var boolean
     */
    protected $overrideDecision = null;

    /**
     * Returns true, if the given privilege type is granted for the given subject based
     * on the current security context or if set based on the override decision value.
     *
     * @param string $privilegeType
     * @param mixed $subject
     * @param string $reason This variable will be filled by a message giving information about the reasons for the result of this method
     * @return boolean
     */
    public function isGranted($privilegeType, $subject, &$reason = '')
    {
        if ($this->overrideDecision === false) {
            $reason = 'Voting has been overriden to "DENY" by the testing privilege manager!';
            return false;
        } elseif ($this->overrideDecision === true) {
            $reason = 'Voting has been overriden to "GRANT" by the testing privilege manager!';
            return true;
        }
        return parent::isGranted($privilegeType, $subject, $reason);
    }

    /**
     * Returns true if access is granted on the given privilege target in the current security context
     * or if set based on the override decision value.
     *
     * @param string $privilegeTargetIdentifier The identifier of the privilege target to decide on
     * @param array $privilegeParameters Optional array of privilege parameters (simple key => value array)
     * @return boolean true if access is granted, false otherwise
     */
    public function isPrivilegeTargetGranted($privilegeTargetIdentifier, array $privilegeParameters = [])
    {
        if ($this->overrideDecision === false) {
            return false;
        } elseif ($this->overrideDecision === true) {
            return true;
        }
        return parent::isPrivilegeTargetGranted($privilegeTargetIdentifier, $privilegeParameters);
    }

    /**
     * Set the decision override
     *
     * @param boolean $overrideDecision true or false to override the decision, NULL to use the access decision voter manager
     * @return void
     */
    public function setOverrideDecision($overrideDecision)
    {
        $this->overrideDecision = $overrideDecision;
    }

    /**
     * Resets the AccessDecisionManager to behave transparently.
     *
     * @return void
     */
    public function reset()
    {
        $this->overrideDecision = null;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * An access decision manager that can be overridden for tests
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class TestingPrivilegeManager extends TestingPrivilegeManager_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * @param ObjectManagerInterface $objectManager The object manager
     * @param Context $securityContext The current security context
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (method_exists(get_parent_class(), 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray') && is_callable([parent::class, 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray'])) parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\Flow\Security\Authorization\TestingPrivilegeManager') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Authorization\TestingPrivilegeManager', $this);

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface');
        if (!array_key_exists(1, $arguments)) $arguments[1] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Context');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $objectManager in class ' . __CLASS__ . '. Please check your calling code and Dependency Injection configuration.', 1296143787);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $securityContext in class ' . __CLASS__ . '. Please check your calling code and Dependency Injection configuration.', 1296143787);
        parent::__construct(...$arguments);
        if ('Neos\Flow\Security\Authorization\TestingPrivilegeManager' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (method_exists(get_parent_class(), 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray') && is_callable([parent::class, 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray'])) parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\Flow\Security\Authorization\TestingPrivilegeManager') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Authorization\TestingPrivilegeManager', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
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
  'overrideDecision' => 'boolean',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'securityContext' => 'Neos\\Flow\\Security\\Context',
  'allowAccessIfAllAbstain' => 'boolean',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->allowAccessIfAllAbstain = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow.security.authorization.allowAccessIfAllVotersAbstain');
        $this->Flow_Injected_Properties = array (
  0 => 'allowAccessIfAllAbstain',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Framework/Neos.Flow/Classes/Security/Authorization/TestingPrivilegeManager.php
#