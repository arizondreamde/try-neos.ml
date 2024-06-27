<?php 
namespace Neos\ContentRepository\Security\Authorization\Privilege\Node;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */
use Neos\ContentRepository\Domain\Model\NodeInterface;

/**
 * A privilege to restrict reading of node properties.
 *
 * This is needed, as the technical implementation is not based on the entity privilege type, that
 * the read node privilege (retrieving the node at all) ist based on.
 */
class ReadNodePropertyPrivilege_Original extends AbstractNodePropertyPrivilege
{
    /**
     * @var array
     */
    protected $methodNameToPropertyMapping = [
        'getName' => 'name',
        'isHidden' => 'hidden',
        'isHiddenInIndex' => 'hiddenInIndex',
        'getHiddenBeforeDateTime' => 'hiddenBeforeDateTime',
        'getHiddenAfterDateTime' => 'hiddenAfterDateTime',
        'getAccessRoles' => 'accessRoles',
    ];

    /**
     * @return string
     */
    protected function buildMethodPrivilegeMatcher()
    {
        return 'within(' . NodeInterface::class . ') && method(.*->(getProperty|getName|isHidden|getHiddenBeforeDateTime|getHiddenAfterDateTime|isHiddenInIndex|getAccessRoles)())';
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A privilege to restrict reading of node properties.
 *
 * This is needed, as the technical implementation is not based on the entity privilege type, that
 * the read node privilege (retrieving the node at all) ist based on.
 * @codeCoverageIgnore
 */
class ReadNodePropertyPrivilege extends ReadNodePropertyPrivilege_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor
     *
     * @param PrivilegeTarget $privilegeTarget
     * @param string $matcher
     * @param string $permission
     * @param $parameters
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Authorization\Privilege\PrivilegeTarget');
        if (!array_key_exists(3, $arguments)) $arguments[3] = NULL;
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $privilegeTarget in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $matcher in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $permission in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(3, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $parameters in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
        if ('Neos\ContentRepository\Security\Authorization\Privilege\Node\ReadNodePropertyPrivilege' === get_class($this)) {
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
  'methodNameToPropertyMapping' => 'array',
  'nodeContext' => 'Neos\\ContentRepository\\Security\\Authorization\\Privilege\\Node\\PropertyAwareNodePrivilegeContext',
  'nodeContextClassName' => 'string',
  'eelCompilingEvaluator' => 'Neos\\Eel\\CompilingEvaluator',
  'methodPrivilege' => 'Neos\\Flow\\Security\\Authorization\\Privilege\\Method\\MethodPrivilegeInterface',
  'initialized' => 'boolean',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'cacheEntryIdentifier' => 'string',
  'privilegeTarget' => 'Neos\\Flow\\Security\\Authorization\\Privilege\\PrivilegeTarget',
  'parameters' => 'array<Neos\\Flow\\Security\\Authorization\\Privilege\\Parameter\\PrivilegeParameterInterface>',
  'matcher' => 'string',
  'parsedMatcher' => 'string',
  'permission' => 'string One of the constants ABSTAIN, GRANT or DENY',
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
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.ContentRepository/Classes/Security/Authorization/Privilege/Node/ReadNodePropertyPrivilege.php
#