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

use Neos\Flow\Aop\JoinPointInterface;
use Neos\ContentRepository\Domain\Model\NodeInterface;

/**
 * A node privilege subject which can restricted to a single node property
 */
class PropertyAwareNodePrivilegeSubject_Original extends NodePrivilegeSubject
{
    /**
     * @var NodeInterface
     */
    protected $node;

    /**
     * @var string
     */
    protected $propertyName = null;

    /**
     * @var JoinPointInterface
     */
    protected $joinPoint = null;

    /**
     * @param NodeInterface $node
     * @param JoinPointInterface $joinPoint
     * @param string $propertyName
     */
    public function __construct(NodeInterface $node, JoinPointInterface $joinPoint = null, $propertyName = null)
    {
        $this->propertyName = $propertyName;
        parent::__construct($node, $joinPoint);
    }

    /**
     * @return string
     */
    public function getPropertyName()
    {
        return $this->propertyName;
    }

    /**
     * @return boolean
     */
    public function hasPropertyName()
    {
        return $this->propertyName !== null;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A node privilege subject which can restricted to a single node property
 * @codeCoverageIgnore
 */
class PropertyAwareNodePrivilegeSubject extends PropertyAwareNodePrivilegeSubject_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * @param NodeInterface $node
     * @param JoinPointInterface $joinPoint
     * @param string $propertyName
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Model\NodeInterface');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $node in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
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
  'node' => 'Neos\\ContentRepository\\Domain\\Model\\NodeInterface',
  'propertyName' => 'string',
  'joinPoint' => 'Neos\\Flow\\Aop\\JoinPointInterface',
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
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.ContentRepository/Classes/Security/Authorization/Privilege/Node/PropertyAwareNodePrivilegeSubject.php
#