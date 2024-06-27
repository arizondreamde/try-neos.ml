<?php 

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

namespace TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * Type Casting Expression
 * Allows casting variables to specific types, for example `{myVariable as boolean}`
 */
class CastingExpressionNode_Original extends AbstractExpressionNode
{

    /**
     * @var array
     */
    protected static $validTypes = [
        'integer', 'boolean', 'string', 'float', 'array', 'DateTime'
    ];

    /**
     * Pattern which detects ternary conditions written in shorthand
     * syntax, e.g. {some.variable as integer}. The right-hand side
     * of the expression can also be a variable containing the type
     * of the variable.
     */
    public static $detectionExpression = '/
		(
			{                                # Start of shorthand syntax
				(?:                          # Math expression is composed of...
					[_a-zA-Z0-9.]+            # Template variable object access path
					[\s]+as[\s]+             # A single space, then "as", then a single space
					[_a-zA-Z0-9.\s]+          # Casting-to-type side
				)
			}                                # End of shorthand syntax
		)/x';

    /**
     * @param RenderingContextInterface $renderingContext
     * @param string $expression
     * @param array $matches
     * @return int|float
     */
    public static function evaluateExpression(RenderingContextInterface $renderingContext, $expression, array $matches)
    {
        $expression = trim($expression, '{}');
        list($variable, $type) = explode(' as ', $expression);
        $variable = static::getTemplateVariableOrValueItself($variable, $renderingContext);
        if (!in_array($type, self::$validTypes)) {
            $type = static::getTemplateVariableOrValueItself($type, $renderingContext);
        }
        if (!in_array($type, self::$validTypes)) {
            throw new ExpressionException(
                sprintf(
                    'Invalid target conversion type "%s" specified in casting expression "{%s}".',
                    $type,
                    $expression
                )
            );
        }
        return self::convert($variable, $type);
    }

    /**
     * @param mixed $variable
     * @param string $type
     * @return mixed
     */
    protected static function convert($variable, $type)
    {
        $value = null;
        if ($type === 'integer') {
            $value = (integer)$variable;
        } elseif ($type === 'boolean') {
            $value = (boolean)$variable;
        } elseif ($type === 'string') {
            $value = (string)$variable;
        } elseif ($type === 'float') {
            $value = (float)$variable;
        } elseif ($type === 'DateTime') {
            $value = self::convertToDateTime($variable);
        } elseif ($type === 'array') {
            $value = (array)self::convertToArray($variable);
        }
        return $value;
    }

    /**
     * @param mixed $variable
     * @return \DateTime|false
     */
    protected static function convertToDateTime($variable)
    {
        if (preg_match_all('/[a-z]+/i', $variable)) {
            return new \DateTime($variable);
        }
        return \DateTime::createFromFormat('U', (integer)$variable);
    }

    /**
     * @param mixed $variable
     * @return array
     */
    protected static function convertToArray($variable)
    {
        if (is_array($variable)) {
            return $variable;
        }
        if (is_string($variable) && strpos($variable, ',')) {
            return array_map('trim', explode(',', $variable));
        }
        if (is_object($variable) && $variable instanceof \Iterator) {
            $array = [];
            foreach ($variable as $key => $value) {
                $array[$key] = $value;
            }
            return $array;
        }
        if (is_object($variable) && method_exists($variable, 'toArray')) {
            return $variable->toArray();
        }
        if (is_bool($variable)) {
            return [];
        }
        return [$variable];
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Type Casting Expression
 * Allows casting variables to specific types, for example `{myVariable as boolean}`
 * @codeCoverageIgnore
 */
class CastingExpressionNode extends CastingExpressionNode_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor.
     *
     * @param string $expression The original expression that created this node.
     * @param array $matches Matches extracted from expression
     * @throws Parser\Exception
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $expression in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $matches in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'validTypes' => 'array',
  'expression' => 'string',
  'matches' => 'array',
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
# PathAndFilename: /var/www/neos/Packages/Libraries/typo3fluid/fluid/src/Core/Parser/SyntaxTree/Expression/CastingExpressionNode.php
#