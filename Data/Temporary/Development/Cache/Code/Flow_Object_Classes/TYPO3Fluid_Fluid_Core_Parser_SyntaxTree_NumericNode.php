<?php 

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

namespace TYPO3Fluid\Fluid\Core\Parser\SyntaxTree;

use TYPO3Fluid\Fluid\Core\Parser;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * Numeric Syntax Tree Node - is a container for numeric values.
 */
class NumericNode_Original extends AbstractNode
{

    /**
     * Contents of the numeric node
     * @var number
     */
    protected $value;

    /**
     * Constructor.
     *
     * @param string|number $value value to store in this numericNode
     * @throws Parser\Exception
     */
    public function __construct($value)
    {
        if (!is_numeric($value)) {
            throw new Parser\Exception('Numeric node requires an argument of type number, "' . gettype($value) . '" given.');
        }
        $this->value = $value + 0;
    }

    /**
     * Return the value associated to the syntax tree.
     *
     * @param RenderingContextInterface $renderingContext
     * @return number the value stored in this node/subtree.
     */
    public function evaluate(RenderingContextInterface $renderingContext)
    {
        return $this->value;
    }

    /**
     * Getter for value
     *
     * @return number The value of this node
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * NumericNode does not allow adding child nodes, so this will always throw an exception.
     *
     * @param NodeInterface $childNode The sub node to add
     * @throws Parser\Exception
     */
    public function addChildNode(NodeInterface $childNode)
    {
        throw new Parser\Exception('Numeric nodes may not contain child nodes, tried to add "' . get_class($childNode) . '".');
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Numeric Syntax Tree Node - is a container for numeric values.
 * @codeCoverageIgnore
 */
class NumericNode extends NumericNode_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor.
     *
     * @param string|number $value value to store in this numericNode
     * @throws Parser\Exception
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $value in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'value' => 'number',
  'childNodes' => 'array<TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\NodeInterface>',
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
# PathAndFilename: /var/www/neos/Packages/Libraries/typo3fluid/fluid/src/Core/Parser/SyntaxTree/NumericNode.php
#