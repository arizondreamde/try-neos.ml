<?php 

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

namespace TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression;

use TYPO3Fluid\Fluid\Core\Compiler\TemplateCompiler;
use TYPO3Fluid\Fluid\Core\Parser\BooleanParser;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * Ternary Condition Node - allows the shorthand version
 * of a condition to be written as `{var ? thenvar : elsevar}`
 */
class TernaryExpressionNode_Original extends AbstractExpressionNode
{

    /**
     * Pattern which detects ternary conditions written in shorthand
     * syntax, e.g. {checkvar ? thenvar : elsevar}.
     */
    public static $detectionExpression = '/
		(
			{                                                               # Start of shorthand syntax
				(?:                                                         # Math expression is composed of...
					[\\!_a-zA-Z0-9.\(\)\!\|\&\\\'\'\"\=\<\>\%\s\{\}\:\,]+    # Check variable side
					[\s]?\?[\s]?
					[_a-zA-Z0-9.\s\'\"\\.]*                                  # Then variable side, optional
					[\s]?:[\s]?
					[_a-zA-Z0-9.\s\'\"\\.]+                                  # Else variable side
				)
			}                                                               # End of shorthand syntax
		)/x';

    /**
     * Filter out variable names form expression
     */
    protected static $variableDetection = '/[^\'_a-zA-Z0-9\.\\\\]{0,1}([_a-zA-Z0-9\.\\\\]*)[^\']{0,1}/';

    /**
     * @param RenderingContextInterface $renderingContext
     * @param string $expression
     * @param array $matches
     * @return mixed
     */
    public static function evaluateExpression(RenderingContextInterface $renderingContext, $expression, array $matches)
    {
        $parts = preg_split('/([\?:])/s', $expression);
        $parts = array_map([__CLASS__, 'trimPart'], $parts);
        list($check, $then, $else) = $parts;

        if ($then === '') {
            $then = $check[0] === '!' ? $else : $check;
        }

        $context = static::gatherContext($renderingContext, $expression);

        $parser = new BooleanParser();
        $checkResult = $parser->evaluate($check, $context);

        if ($checkResult) {
            return static::getTemplateVariableOrValueItself($renderingContext->getTemplateParser()->unquoteString($then), $renderingContext);
        }
        return static::getTemplateVariableOrValueItself($renderingContext->getTemplateParser()->unquoteString($else), $renderingContext);
    }

    /**
     * @param mixed $candidate
     * @param RenderingContextInterface $renderingContext
     * @return mixed
     */
    public static function getTemplateVariableOrValueItself($candidate, RenderingContextInterface $renderingContext)
    {
        $suspect = parent::getTemplateVariableOrValueItself($candidate, $renderingContext);
        if ($suspect === $candidate) {
            return $renderingContext->getTemplateParser()->unquoteString($suspect);
        }
        return $suspect;
    }

    /**
     * Gather all context variables used in the expression
     *
     * @param RenderingContextInterface $renderingContext
     * @param string $expression
     * @return array
     */
    public static function gatherContext($renderingContext, $expression)
    {
        $context = [];
        if (preg_match_all(static::$variableDetection, $expression, $matches) > 0) {
            foreach ($matches[1] as $variable) {
                if (strtolower($variable) == 'true' || strtolower($variable) == 'false' || empty($variable) === true) {
                    continue;
                }
                $context[$variable] = static::getTemplateVariableOrValueItself($variable, $renderingContext);
            }
        }
        return $context;
    }

    /**
     * Compiles the ExpressionNode, returning an array with
     * exactly two keys which contain strings:
     *
     * - "initialization" which contains variable initializations
     * - "execution" which contains the execution (that uses the variables)
     *
     * The expression and matches can be read from the local
     * instance - and the RenderingContext and other APIs
     * can be accessed via the TemplateCompiler.
     *
     * @param TemplateCompiler $templateCompiler
     * @return string
     */
    public function compile(TemplateCompiler $templateCompiler)
    {
        $parts = preg_split('/([\?:])/s', $this->getExpression());
        $parts = array_map([__CLASS__, 'trimPart'], $parts);
        list($check, $then, $else) = $parts;

        if ($then === '') {
            $then = $check[0] === '!' ? $else : $check;
        }

        $matchesVariable = $templateCompiler->variableName('array');
        $initializationPhpCode = '// Rendering TernaryExpression node' . chr(10);
        $initializationPhpCode .= sprintf('%s = %s;', $matchesVariable, var_export($this->getMatches(), true)) . chr(10);

        $functionName = $templateCompiler->variableName('ternaryExpression');
        $initializationPhpCode .= sprintf(
            '%s = function($context, $renderingContext) {
                $check = %s;
                $parser = new \TYPO3Fluid\Fluid\Core\Parser\BooleanParser();
                $checkResult = $parser->evaluate($check, $context);
                if ($checkResult) {
                    return %s::getTemplateVariableOrValueItself(%s, $renderingContext);
                }
                return %s::getTemplateVariableOrValueItself(%s, $renderingContext);
			};' . chr(10),
            $functionName,
            var_export($check, true),
            static::class,
            var_export($then, true),
            static::class,
            var_export($else, true)
        );

        return [
            'initialization' => $initializationPhpCode,
            'execution' => sprintf(
                '%s(%s::gatherContext($renderingContext, %s[1]), $renderingContext)',
                $functionName,
                static::class,
                $matchesVariable
            )
        ];
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Ternary Condition Node - allows the shorthand version
 * of a condition to be written as `{var ? thenvar : elsevar}`
 * @codeCoverageIgnore
 */
class TernaryExpressionNode extends TernaryExpressionNode_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
# PathAndFilename: /var/www/neos/Packages/Libraries/typo3fluid/fluid/src/Core/Parser/SyntaxTree/Expression/TernaryExpressionNode.php
#