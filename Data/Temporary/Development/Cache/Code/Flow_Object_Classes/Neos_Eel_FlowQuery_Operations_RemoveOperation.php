<?php 
namespace Neos\Eel\FlowQuery\Operations;

/*
 * This file is part of the Neos.Eel package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Eel\FlowQuery\FlowQuery;

/**
 * Removes the given items from the current context.
 * The operation accepts one argument that may be an Array, a FlowQuery
 * or an Object.
 */
class RemoveOperation_Original extends AbstractOperation
{
    /**
     * {@inheritdoc}
     *
     * @var string
     */
    protected static $shortName = 'remove';

    /**
     * {@inheritdoc}
     *
     * @param FlowQuery $flowQuery the FlowQuery object
     * @param array $arguments the elements to remove (as array in index 0)
     * @return void
     */
    public function evaluate(FlowQuery $flowQuery, array $arguments)
    {
        $valuesToRemove = [];
        if (isset($arguments[0])) {
            if (is_array($arguments[0])) {
                $valuesToRemove = $arguments[0];
            } elseif ($arguments[0] instanceof \Traversable) {
                $valuesToRemove = iterator_to_array($arguments[0]);
            } else {
                $valuesToRemove[] = $arguments[0];
            }
        }
        $filteredContext = array_filter(
            $flowQuery->getContext(),
            function ($item) use ($valuesToRemove) {
                return in_array($item, $valuesToRemove, true) === false;
            }
        );
        $flowQuery->setContext($filteredContext);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Removes the given items from the current context.
 * The operation accepts one argument that may be an Array, a FlowQuery
 * or an Object.
 * @codeCoverageIgnore
 */
class RemoveOperation extends RemoveOperation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
# PathAndFilename: /var/www/neos/Packages/Framework/Neos.Eel/Classes/FlowQuery/Operations/RemoveOperation.php
#