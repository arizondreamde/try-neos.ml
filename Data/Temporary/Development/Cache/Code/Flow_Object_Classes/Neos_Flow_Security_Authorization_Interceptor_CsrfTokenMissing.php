<?php 
namespace Neos\Flow\Security\Authorization\Interceptor;

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
use Neos\Flow\Security\Authorization\InterceptorInterface;
use Neos\Flow\Security\Exception\AccessDeniedException;

/**
 * This security interceptor always denys access.
 *
 * @Flow\Scope("singleton")
 */
class CsrfTokenMissing_Original implements InterceptorInterface
{
    /**
     * Invokes nothing, always throws an AccessDenied Exception.
     *
     * @return boolean Always returns false
     * @throws AccessDeniedException
     */
    public function invoke()
    {
        throw new AccessDeniedException('The action could not be executed because you supplied no or the wrong CSRF protection token.', 1486500872);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * This security interceptor always denys access.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class CsrfTokenMissing extends CsrfTokenMissing_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Security\Authorization\Interceptor\CsrfTokenMissing') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Authorization\Interceptor\CsrfTokenMissing', $this);
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
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Security\Authorization\Interceptor\CsrfTokenMissing') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Authorization\Interceptor\CsrfTokenMissing', $this);

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /var/www/neos/Packages/Framework/Neos.Flow/Classes/Security/Authorization/Interceptor/CsrfTokenMissing.php
#