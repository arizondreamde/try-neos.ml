<?php 
namespace Neos\Flow\Security\Authorization;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Security\Exception\NoInterceptorFoundException;

/**
 * The security interceptor resolver. It resolves the class name of a security interceptor based on names.
 *
 * @Flow\Scope("singleton")
 */
class InterceptorResolver_Original
{
    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * Constructor.
     *
     * @param ObjectManagerInterface $objectManager The object manager
     */
    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Resolves the class name of a security interceptor. If a valid interceptor class name is given, it is just returned.
     *
     * @param string $name The (short) name of the interceptor
     * @return string The class name of the security interceptor, NULL if no class was found.
     * @throws NoInterceptorFoundException
     */
    public function resolveInterceptorClass($name)
    {
        $resolvedClassName = $this->objectManager->getClassNameByObjectName($name);
        if ($resolvedClassName !== false) {
            return $resolvedClassName;
        }

        $resolvedClassName = $this->objectManager->getClassNameByObjectName('Neos\Flow\Security\Authorization\Interceptor\\' . $name);
        if ($resolvedClassName !== false) {
            return $resolvedClassName;
        }

        throw new NoInterceptorFoundException('A security interceptor with the name: "' . $name . '" could not be resolved.', 1217154134);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * The security interceptor resolver. It resolves the class name of a security interceptor based on names.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class InterceptorResolver extends InterceptorResolver_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor.
     *
     * @param ObjectManagerInterface $objectManager The object manager
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (get_class($this) === 'Neos\Flow\Security\Authorization\InterceptorResolver') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Authorization\InterceptorResolver', $this);

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $objectManager in class ' . __CLASS__ . '. Please check your calling code and Dependency Injection configuration.', 1296143787);
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
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Security\Authorization\InterceptorResolver') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Authorization\InterceptorResolver', $this);

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /var/www/neos/Packages/Framework/Neos.Flow/Classes/Security/Authorization/InterceptorResolver.php
#