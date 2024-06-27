<?php 
namespace Neos\Neos\ViewHelpers\Backend;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;

/**
 * Generates a color code for a given string
 */
class ColorOfStringViewHelper_Original extends AbstractViewHelper
{
    /**
     * @return void
     * @throws \Neos\FluidAdaptor\Core\ViewHelper\Exception
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('string', 'string', 'This is hashed (MD%) and then used as base for the resulting color, if not given the children are used');
        $this->registerArgument('minimalBrightness', 'integer', 'Brightness, from 0 to 255', false, '50');
    }

    /**
     * Outputs a hex color code (#000000) based on $text
     *
     * @return string
     * @throws \InvalidArgumentException
     */
    public function render(): string
    {
        $minimalBrightness = $this->arguments['minimalBrightness'];

        if ($minimalBrightness < 0 or $minimalBrightness > 255) {
            throw new \InvalidArgumentException('Minimal brightness should be between 0 and 255', 1417553921);
        }

        if ($this->hasArgument('string')) {
            $string = $this->arguments['string'];
        } else {
            $string = $this->renderChildren();
        }

        $hash = md5($string);

        $rgbValues = [];
        for ($i = 0; $i < 3; $i++) {
            $rgbValues[$i] = max([
                round(hexdec(substr($hash, 10 * $i, 10)) / hexdec('FFFFFFFFFF') * 255),
                $minimalBrightness
            ]);
        }

        $output = '#';
        for ($i = 0; $i < 3; $i++) {
            $output .= str_pad(dechex($rgbValues[$i]), 2, 0, STR_PAD_LEFT);
        }

        return $output;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Generates a color code for a given string
 * @codeCoverageIgnore
 */
class ColorOfStringViewHelper extends ColorOfStringViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\ViewHelpers\Backend\ColorOfStringViewHelper' === get_class($this)) {
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
  'renderingContext' => 'FlowAwareRenderingContextInterface&RenderingContextInterface',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'logger' => 'Psr\\Log\\LoggerInterface',
  'argumentDefinitions' => 'array<TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ArgumentDefinition>',
  'viewHelperNode' => 'TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\ViewHelperNode',
  'arguments' => 'array<string, mixed>',
  'childNodes' => 'NodeInterface[] array',
  'templateVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\Variables\\VariableProviderInterface',
  'renderChildrenClosure' => '\\Closure',
  'viewHelperVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperVariableContainer',
  'escapeChildren' => 'boolean',
  'escapeOutput' => 'boolean',
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
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'logger',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Neos/Classes/ViewHelpers/Backend/ColorOfStringViewHelper.php
#