<?php 
namespace Neos\ContentRepository\Eel\FlowQueryOperations;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\ContentRepository\Domain\Projection\Content\TraversableNodeInterface;
use Neos\Eel\FlowQuery\FlowQuery;
use Neos\Eel\FlowQuery\FlowQueryException;
use Neos\Eel\FlowQuery\Operations\AbstractOperation;

/**
 * "closest" operation working on ContentRepository nodes. For each node in the context,
 * get the first node that matches the selector by testing the node itself and
 * traversing up through its ancestors.
 */
class ClosestOperation_Original extends AbstractOperation
{
    /**
     * {@inheritdoc}
     *
     * @var string
     */
    protected static $shortName = 'closest';

    /**
     * {@inheritdoc}
     *
     * @var integer
     */
    protected static $priority = 100;

    /**
     * {@inheritdoc}
     *
     * @param array $context $context onto which this operation should be applied (array or array-like object)
     * @return boolean true if the operation can be applied onto the $context, false otherwise
     */
    public function canEvaluate($context)
    {
        return count($context) === 0 || (isset($context[0]) && ($context[0] instanceof TraversableNodeInterface));
    }

    /**
     * {@inheritdoc}
     *
     * @param FlowQuery $flowQuery the FlowQuery object
     * @param array $arguments the arguments for this operation
     * @return void
     * @throws FlowQueryException
     * @throws \Neos\Eel\Exception
     */
    public function evaluate(FlowQuery $flowQuery, array $arguments)
    {
        if (!isset($arguments[0]) || empty($arguments[0])) {
            throw new FlowQueryException('closest() requires a filter argument', 1332492263);
        }

        $output = [];
        foreach ($flowQuery->getContext() as $contextNode) {
            $contextNodeQuery = new FlowQuery([$contextNode]);
            $contextNodeQuery->pushOperation('first', []);
            $contextNodeQuery->pushOperation('filter', $arguments);

            $parentsQuery = new FlowQuery([$contextNode]);
            $contextNodeQuery->pushOperation('add', [$parentsQuery->parents($arguments[0])->get()]);

            foreach ($contextNodeQuery as $result) {
                /* @var TraversableNodeInterface $result */
                $output[(string)$result->getNodeAggregateIdentifier()] = $result;
            }
        }

        $flowQuery->setContext(array_values($output));
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * "closest" operation working on ContentRepository nodes. For each node in the context,
 * get the first node that matches the selector by testing the node itself and
 * traversing up through its ancestors.
 * @codeCoverageIgnore
 */
class ClosestOperation extends ClosestOperation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


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
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.ContentRepository/Classes/Eel/FlowQueryOperations/ClosestOperation.php
#