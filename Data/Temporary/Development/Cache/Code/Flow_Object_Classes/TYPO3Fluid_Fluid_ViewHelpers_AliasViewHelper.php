<?php 

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

namespace TYPO3Fluid\Fluid\ViewHelpers;

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

/**
 * Declares new variables which are aliases of other variables.
 * Takes a "map"-Parameter which is an associative array which defines the shorthand mapping.
 *
 * The variables are only declared inside the ``<f:alias>...</f:alias>`` tag. After the
 * closing tag, all declared variables are removed again.
 *
 * Using this ViewHelper can be a sign of weak architecture. If you end up
 * using it extensively you might want to fine-tune your "view model" (the
 * data you assign to the view).
 *
 * Examples
 * ========
 *
 * Single alias
 * ------------
 *
 * ::
 *
 *     <f:alias map="{x: 'foo'}">{x}</f:alias>
 *
 * Output::
 *
 *     foo
 *
 * Multiple mappings
 * -----------------
 *
 * ::
 *
 *     <f:alias map="{x: foo.bar.baz, y: foo.bar.baz.name}">
 *         {x.name} or {y}
 *     </f:alias>
 *
 * Output::
 *
 *     [name] or [name]
 *
 * Depending on ``{foo.bar.baz}``.
 *
 *
 * @api
 */
class AliasViewHelper_Original extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    /**
     * @var bool
     */
    protected $escapeOutput = false;

    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('map', 'array', 'Array that specifies which variables should be mapped to which alias', true);
    }

    /**
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @return mixed
     */
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $templateVariableContainer = $renderingContext->getVariableProvider();
        $map = $arguments['map'];
        foreach ($map as $aliasName => $value) {
            $templateVariableContainer->add($aliasName, $value);
        }
        $output = $renderChildrenClosure();
        foreach ($map as $aliasName => $value) {
            $templateVariableContainer->remove($aliasName);
        }
        return $output;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Declares new variables which are aliases of other variables.
 * Takes a "map"-Parameter which is an associative array which defines the shorthand mapping.
 *
 * The variables are only declared inside the ``<f:alias>...</f:alias>`` tag. After the
 * closing tag, all declared variables are removed again.
 *
 * Using this ViewHelper can be a sign of weak architecture. If you end up
 * using it extensively you might want to fine-tune your "view model" (the
 * data you assign to the view).
 *
 * Examples
 * ========
 *
 * Single alias
 * ------------
 *
 * ::
 *
 *     <f:alias map="{x: 'foo'}">{x}</f:alias>
 *
 * Output::
 *
 *     foo
 *
 * Multiple mappings
 * -----------------
 *
 * ::
 *
 *     <f:alias map="{x: foo.bar.baz, y: foo.bar.baz.name}">
 *         {x.name} or {y}
 *     </f:alias>
 *
 * Output::
 *
 *     [name] or [name]
 *
 * Depending on ``{foo.bar.baz}``.
 *
 *
 * @api
 * @codeCoverageIgnore
 */
class AliasViewHelper extends AliasViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'escapeOutput' => 'boolean',
  'argumentDefinitions' => 'array<TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ArgumentDefinition>',
  'viewHelperNode' => 'TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\ViewHelperNode',
  'arguments' => 'array<string, mixed>',
  'childNodes' => 'NodeInterface[] array',
  'templateVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\Variables\\VariableProviderInterface',
  'renderingContext' => 'TYPO3Fluid\\Fluid\\Core\\Rendering\\RenderingContextInterface',
  'renderChildrenClosure' => '\\Closure',
  'viewHelperVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperVariableContainer',
  'escapeChildren' => 'boolean',
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
# PathAndFilename: /var/www/neos/Packages/Libraries/typo3fluid/fluid/src/ViewHelpers/AliasViewHelper.php
#