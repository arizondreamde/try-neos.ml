<?php 

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

namespace TYPO3Fluid\Fluid\Core\Rendering;

/**
 * Class RenderableClosure
 */
class RenderableClosure_Original extends AbstractRenderable
{
    /**
     * @var \Closure
     */
    protected $closure;

    /**
     * @param \Closure $closure
     * @return RenderableClosure
     */
    public function setClosure(\Closure $closure)
    {
        $this->closure = $closure;
        return $this;
    }

    /**
     * @param RenderingContextInterface $renderingContext
     * @return mixed
     */
    public function render(RenderingContextInterface $renderingContext)
    {
        return call_user_func_array($this->closure, [$renderingContext, $this->node]);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Class RenderableClosure
 * @codeCoverageIgnore
 */
class RenderableClosure extends RenderableClosure_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'closure' => '\\Closure',
  'name' => 'string',
  'node' => 'TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\NodeInterface|null',
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
# PathAndFilename: /var/www/neos/Packages/Libraries/typo3fluid/fluid/src/Core/Rendering/RenderableClosure.php
#