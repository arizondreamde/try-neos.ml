<?php 

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

namespace TYPO3Fluid\Fluid\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\ParserRuntimeOnly;

/**
 * This ViewHelper prevents rendering of any content inside the tag.
 *
 * Contents of the comment will still be **parsed** thus throwing an
 * Exception if it contains syntax errors. You can put child nodes in
 * CDATA tags to avoid this.
 *
 * Using this ViewHelper won't have a notable effect on performance,
 * especially once the template is parsed.  However it can lead to reduced
 * readability. You can use layouts and partials to split a large template
 * into smaller parts. Using self-descriptive names for the partials can
 * make comments redundant.
 *
 * Examples
 * ========
 *
 * Commenting out fluid code
 * -------------------------
 *
 * ::
 *
 *     Before
 *     <f:comment>
 *         This is completely hidden.
 *         <f:debug>This does not get rendered</f:debug>
 *     </f:comment>
 *     After
 *
 * Output::
 *
 *     Before
 *     After
 *
 * Prevent parsing
 * ---------------
 *
 * ::
 *
 *     <f:comment><![CDATA[
 *        <f:some.invalid.syntax />
 *     ]]></f:comment>
 *
 * Output:
 *
 * Will be nothing.
 *
 * @api
 */
class CommentViewHelper_Original extends AbstractViewHelper
{
    use ParserRuntimeOnly;

    /**
     * @var bool
     */
    protected $escapeChildren = false;

    /**
     * @var bool
     */
    protected $escapeOutput = false;
}

#
# Start of Flow generated Proxy code
#
/**
 * This ViewHelper prevents rendering of any content inside the tag.
 *
 * Contents of the comment will still be **parsed** thus throwing an
 * Exception if it contains syntax errors. You can put child nodes in
 * CDATA tags to avoid this.
 *
 * Using this ViewHelper won't have a notable effect on performance,
 * especially once the template is parsed.  However it can lead to reduced
 * readability. You can use layouts and partials to split a large template
 * into smaller parts. Using self-descriptive names for the partials can
 * make comments redundant.
 *
 * Examples
 * ========
 *
 * Commenting out fluid code
 * -------------------------
 *
 * ::
 *
 *     Before
 *     <f:comment>
 *         This is completely hidden.
 *         <f:debug>This does not get rendered</f:debug>
 *     </f:comment>
 *     After
 *
 * Output::
 *
 *     Before
 *     After
 *
 * Prevent parsing
 * ---------------
 *
 * ::
 *
 *     <f:comment><![CDATA[
 *        <f:some.invalid.syntax />
 *     ]]></f:comment>
 *
 * Output:
 *
 * Will be nothing.
 *
 * @api
 * @codeCoverageIgnore
 */
class CommentViewHelper extends CommentViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'escapeChildren' => 'boolean',
  'escapeOutput' => 'boolean',
  'argumentDefinitions' => 'array<TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ArgumentDefinition>',
  'viewHelperNode' => 'TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\ViewHelperNode',
  'arguments' => 'array<string, mixed>',
  'childNodes' => 'NodeInterface[] array',
  'templateVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\Variables\\VariableProviderInterface',
  'renderingContext' => 'TYPO3Fluid\\Fluid\\Core\\Rendering\\RenderingContextInterface',
  'renderChildrenClosure' => '\\Closure',
  'viewHelperVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperVariableContainer',
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
# PathAndFilename: /var/www/neos/Packages/Libraries/typo3fluid/fluid/src/ViewHelpers/CommentViewHelper.php
#