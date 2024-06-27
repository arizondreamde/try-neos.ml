<?php 
namespace Neos\Neos\Ui\FlowQueryOperations;

/*
 * This file is part of the Neos.Neos.Ui package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\ContentRepository\Domain\NodeType\NodeTypeConstraintFactory;
use Neos\ContentRepository\Domain\Projection\Content\TraversableNodeInterface;
use Neos\Eel\FlowQuery\FlowQuery;
use Neos\Eel\FlowQuery\Operations\AbstractOperation;

/**
 * "children" operation working on ContentRepository nodes. It iterates over all
 * context elements and returns all child nodes or only those matching
 * the filter expression specified as optional argument.
 */
class NeosUiFilteredChildrenOperation_Original extends AbstractOperation
{
    /**
     * {@inheritdoc}
     *
     * @var string
     */
    protected static $shortName = 'neosUiFilteredChildren';

    /**
     * {@inheritdoc}
     *
     * @var integer
     */
    protected static $priority = 100;

    /**
     * @Flow\Inject
     * @var NodeTypeConstraintFactory
     */
    protected $nodeTypeConstraintFactory;

    /**
     * {@inheritdoc}
     *
     * @param array (or array-like object) $context onto which this operation should be applied
     * @return boolean TRUE if the operation can be applied onto the $context, FALSE otherwise
     */
    public function canEvaluate($context)
    {
        return isset($context[0]) && ($context[0] instanceof TraversableNodeInterface);
    }

    /**
     * {@inheritdoc}
     *
     * @param FlowQuery $flowQuery the FlowQuery object
     * @param array $arguments the arguments for this operation
     * @return void
     */
    public function evaluate(FlowQuery $flowQuery, array $arguments)
    {
        $output = [];
        $outputNodeIdentifiers = [];

        $filter = isset($arguments[0]) ? $arguments[0] : null;

        /** @var TraversableNodeInterface $contextNode */
        foreach ($flowQuery->getContext() as $contextNode) {
            /** @var TraversableNodeInterface $childNode */
            foreach ($contextNode->findChildNodes($this->nodeTypeConstraintFactory->parseFilterString($filter)) as $childNode) {
                if (!isset($outputNodeIdentifiers[(string)$childNode->getNodeAggregateIdentifier()])) {
                    $output[] = $childNode;
                    $outputNodeIdentifiers[(string)$childNode->getNodeAggregateIdentifier()] = true;
                }
            }
        }
        $flowQuery->setContext($output);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * "children" operation working on ContentRepository nodes. It iterates over all
 * context elements and returns all child nodes or only those matching
 * the filter expression specified as optional argument.
 * @codeCoverageIgnore
 */
class NeosUiFilteredChildrenOperation extends NeosUiFilteredChildrenOperation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\Ui\FlowQueryOperations\NeosUiFilteredChildrenOperation' === get_class($this)) {
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
  'shortName' => 'string',
  'priority' => 'integer',
  'nodeTypeConstraintFactory' => 'Neos\\ContentRepository\\Domain\\NodeType\\NodeTypeConstraintFactory',
  'final' => 'boolean',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\NodeType\NodeTypeConstraintFactory', 'Neos\ContentRepository\Domain\NodeType\NodeTypeConstraintFactory', 'nodeTypeConstraintFactory', '29b2ed34631ed7e636b598b2e2aa35e6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\NodeType\NodeTypeConstraintFactory'); });
        $this->Flow_Injected_Properties = array (
  0 => 'nodeTypeConstraintFactory',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Neos.Ui/Classes/FlowQueryOperations/NeosUiFilteredChildrenOperation.php
#