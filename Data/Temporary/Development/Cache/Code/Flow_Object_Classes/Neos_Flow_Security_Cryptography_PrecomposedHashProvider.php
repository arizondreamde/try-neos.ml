<?php 
declare(strict_types=1);

namespace Neos\Flow\Security\Cryptography;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Cache\Frontend\StringFrontend;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Utility\Algorithms as UtilityAlgorithms;

/**
 * Precomposes a hash to be used to prevent timing attacks
 *
 * @Flow\Scope("singleton")
 */
class PrecomposedHashProvider_Original
{
    /**
     * @var HashService
     * @Flow\Inject
     */
    protected $hashService;

    /**
     * The Cache have to be injected non-lazy to prevent timing differences
     *
     * @var StringFrontend
     * @Flow\Inject(lazy=false)
     */
    protected $cache;

    public function getPrecomposedHash(): string
    {
        $hash = $this->cache->get('precomposed_hash');
        if (!$hash) {
            $hash = $this->precomposeHash();
        }

        return $hash;
    }

    public function precomposeHash(): string
    {
        $randomPassword = UtilityAlgorithms::generateRandomString(16, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789./');
        $hash = $this->hashService->hashPassword($randomPassword);
        $this->cache->set('precomposed_hash', $hash);
        return $hash;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Precomposes a hash to be used to prevent timing attacks
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class PrecomposedHashProvider extends PrecomposedHashProvider_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Security\Cryptography\PrecomposedHashProvider') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Cryptography\PrecomposedHashProvider', $this);
        if ('Neos\Flow\Security\Cryptography\PrecomposedHashProvider' === get_class($this)) {
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
  'hashService' => 'Neos\\Flow\\Security\\Cryptography\\HashService',
  'cache' => 'Neos\\Cache\\Frontend\\StringFrontend',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Security\Cryptography\PrecomposedHashProvider') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Cryptography\PrecomposedHashProvider', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('', '', 'cache', '7eb0ebb80a905ec45ad989f67c3697e2', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cache\CacheManager')->getCache('Flow_Security_Cryptography_PrecomposedHashProvider'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Cryptography\HashService', 'Neos\Flow\Security\Cryptography\HashService', 'hashService', '62d57ff7e7ce903303c867dd468c12fd', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Cryptography\HashService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'cache',
  1 => 'hashService',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Framework/Neos.Flow/Classes/Security/Cryptography/PrecomposedHashProvider.php
#