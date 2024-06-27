<?php 
namespace Neos\ContentRepository\Domain\Model;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\ContentRepository\Validation\Validator\NodeIdentifierValidator;
use Neos\ContentRepository\Domain\Utility\NodePaths;

/**
 * A container of properties which can be used as a template for generating new nodes.
 *
 * @api
 */
class NodeTemplate_Original extends AbstractNodeData
{
    /**
     * The UUID to use for the new node. Use with care.
     *
     * @var string
     */
    protected $identifier;

    /**
     * The node name which acts as a path segment for its node path
     *
     * @var string
     */
    protected $name;

    /**
     * Allows to set a UUID to use for the node that will be created from this
     * NodeTemplate. Use with care, usually identifier generation should be left
     * to the ContentRepository.
     *
     * @param string $identifier
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setIdentifier($identifier)
    {
        if (preg_match(NodeIdentifierValidator::PATTERN_MATCH_NODE_IDENTIFIER, $identifier) !== 1) {
            throw new \InvalidArgumentException(sprintf('Invalid UUID "%s" given.', $identifier), 1385026112);
        }
        $this->identifier = $identifier;
    }

    /**
     * Returns the UUID set in this NodeTemplate.
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set the name to $newName
     *
     * @param string $newName
     * @return void
     * @throws \InvalidArgumentException
     * @api
     */
    public function setName($newName)
    {
        if (!is_string($newName) || preg_match(NodeInterface::MATCH_PATTERN_NAME, $newName) !== 1) {
            throw new \InvalidArgumentException('Invalid node name "' . $newName . '" (a node name must only contain characters, numbers and the "-" sign).', 1364290839);
        }
        $this->name = $newName;
    }

    /**
     * Get the name of this node template.
     *
     * If a name has been set using setName(), it is returned. If not, but the
     * template has a (non-empty) title property, this property is used to
     * generate a valid name. As a last resort a random name is returned (in
     * the form "name-XXXXX").
     *
     * @return string
     * @api
     */
    public function getName()
    {
        if ($this->name !== null) {
            return $this->name;
        }

        return NodePaths::generateRandomNodeName();
    }

    /**
     * A NodeTemplate is not stored in any workspace, thus this method returns NULL.
     *
     * @return void
     */
    public function getWorkspace()
    {
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A container of properties which can be used as a template for generating new nodes.
 *
 * @api
 * @codeCoverageIgnore
 */
class NodeTemplate extends NodeTemplate_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructs this node data container
     */
    public function __construct()
    {
        parent::__construct();
        if ('Neos\ContentRepository\Domain\Model\NodeTemplate' === get_class($this)) {
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
  'identifier' => 'string',
  'name' => 'string',
  'properties' => 'array<mixed>',
  'contentObjectProxy' => 'Neos\\ContentRepository\\Domain\\Model\\ContentObjectProxy',
  'nodeType' => 'string',
  'creationDateTime' => '\\DateTimeInterface',
  'lastModificationDateTime' => '\\DateTimeInterface',
  'lastPublicationDateTime' => '\\DateTimeInterface',
  'hidden' => 'boolean',
  'hiddenBeforeDateTime' => '\\DateTimeInterface',
  'hiddenAfterDateTime' => '\\DateTimeInterface',
  'hiddenInIndex' => 'boolean',
  'accessRoles' => 'array<string>',
  'nodeDataRepository' => 'Neos\\ContentRepository\\Domain\\Repository\\NodeDataRepository',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'nodeTypeManager' => 'Neos\\ContentRepository\\Domain\\Service\\NodeTypeManager',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Repository\NodeDataRepository', 'Neos\ContentRepository\Domain\Repository\NodeDataRepository', 'nodeDataRepository', '6d07985e92d364413ac81acd8f47b11b', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Repository\NodeDataRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\NodeTypeManager', 'Neos\ContentRepository\Domain\Service\NodeTypeManager', 'nodeTypeManager', 'e525e2ecb65f7f9731d6537ddecd16d4', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\NodeTypeManager'); });
        $this->Flow_Injected_Properties = array (
  0 => 'nodeDataRepository',
  1 => 'persistenceManager',
  2 => 'nodeTypeManager',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.ContentRepository/Classes/Domain/Model/NodeTemplate.php
#