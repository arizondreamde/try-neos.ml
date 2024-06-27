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

use Neos\Flow\Security\Authorization\Privilege\Method\MethodPrivilegeSubject;
use Neos\Flow\Security\Authorization\Privilege\PrivilegeSubjectInterface;
use Neos\Flow\Security\Exception\InvalidPrivilegeTypeException;
use Neos\ContentRepository\Domain\Model\NodeInterface;

/**
 * A privilege to remove nodes
 */
class RemoveNodePrivilege_Original extends AbstractNodePrivilege
{
    /**
     * @param PrivilegeSubjectInterface|NodePrivilegeSubject|MethodPrivilegeSubject $subject
     * @return boolean
     * @throws InvalidPrivilegeTypeException
     */
    public function matchesSubject(PrivilegeSubjectInterface $subject)
    {
        if ($subject instanceof NodePrivilegeSubject === false && $subject instanceof MethodPrivilegeSubject === false) {
            throw new InvalidPrivilegeTypeException(sprintf('Privileges of type "%s" only support subjects of type "%s" or "%s", but we got a subject of type: "%s".', RemoveNodePrivilege::class, NodePrivilegeSubject::class, MethodPrivilegeSubject::class, get_class($subject)), 1417017296);
        }

        if ($subject instanceof MethodPrivilegeSubject) {
            $this->initializeMethodPrivilege();
            if ($this->methodPrivilege->matchesSubject($subject) === false) {
                return false;
            }
            /** @var NodeInterface $node */
            $node = $subject->getJoinPoint()->getProxy();
            $nodePrivilegeSubject = new NodePrivilegeSubject($node);
            return parent::matchesSubject($nodePrivilegeSubject);
        }
        return parent::matchesSubject($subject);
    }

    /**
     * @return string
     */
    protected function buildMethodPrivilegeMatcher()
    {
        return 'within(' . NodeInterface::class . ') && method(.*->setRemoved(removed == true))';
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A privilege to remove nodes
 * @codeCoverageIgnore
 */
class RemoveNodePrivilege extends RemoveNodePrivilege_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
        if ('Neos\ContentRepository\Security\Authorization\Privilege\Node\RemoveNodePrivilege' === get_class($this)) {
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
  'eelCompilingEvaluator' => 'Neos\\Eel\\CompilingEvaluator',
  'nodeContextClassName' => 'string',
  'nodeContext' => 'Neos\\ContentRepository\\Security\\Authorization\\Privilege\\Node\\NodePrivilegeContext',
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
# PathAndFilename: /var/www/neos/Packages/Application/Neos.ContentRepository/Classes/Security/Authorization/Privilege/Node/RemoveNodePrivilege.php
#