<?php 
declare(strict_types=1);

namespace Neos\Flow\Http\Middleware;

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Configuration\ConfigurationManager;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Package\PackageManager;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Adds the "X-Flow-Powered" to the response.
 */
class PoweredByMiddleware_Original implements MiddlewareInterface
{
    /**
     * @Flow\Inject
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @inheritDoc
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $next): ResponseInterface
    {
        $response = $next->handle($request);
        $token = static::prepareApplicationToken($this->objectManager);
        if ($token === '') {
            return $response;
        }

        return $response->withAddedHeader('X-Flow-Powered', $token);
    }

    /**
     * Renders a major version out of a full version string
     *
     * @param string $version For example "2.3.7"
     * @return string For example "2"
     */
    protected static function renderMajorVersion($version)
    {
        preg_match('/^(\d+)/', $version, $versionMatches);

        return $versionMatches[1] ?? '';
    }

    /**
     * Renders a minor version out of a full version string
     *
     * @param string $version For example "2.3.7"
     * @return string For example "2.3"
     */
    protected static function renderMinorVersion($version)
    {
        preg_match('/^(\d+\.\d+)/', $version, $versionMatches);

        return $versionMatches[1] ?? '';
    }

    /**
     * Generate an application information header for the response based on settings and package versions.
     * Will statically compile in production for performance benefits.
     *
     * @param ObjectManagerInterface $objectManager
     * @return string
     * @throws \Neos\Flow\Configuration\Exception\InvalidConfigurationTypeException
     * @Flow\CompileStatic
     */
    public static function prepareApplicationToken(ObjectManagerInterface $objectManager): string
    {
        $configurationManager = $objectManager->get(ConfigurationManager::class);
        $tokenSetting = $configurationManager->getConfiguration(ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'Neos.Flow.http.applicationToken');

        if (!in_array($tokenSetting, ['ApplicationName', 'MinorVersion', 'MajorVersion'])) {
            return '';
        }

        $applicationPackageKey = $configurationManager->getConfiguration(ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'Neos.Flow.core.applicationPackageKey');
        $applicationName = $configurationManager->getConfiguration(ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'Neos.Flow.core.applicationName');
        $applicationIsNotFlow = ($applicationPackageKey !== 'Neos.Flow');

        if ($tokenSetting === 'ApplicationName') {
            return 'Flow' . ($applicationIsNotFlow ? ' ' . $applicationName : '');
        }

        // At this point the $tokenSetting must be either "MinorVersion" or "MajorVersion" so lets use it.
        $versionRenderer = 'render' . $tokenSetting;

        $packageManager = $objectManager->get(PackageManager::class);
        $flowPackage = $packageManager->getPackage('Neos.Flow');
        $flowVersion = static::$versionRenderer($flowPackage->getInstalledVersion());

        $applicationPackage = $applicationIsNotFlow ? $packageManager->getPackage($applicationPackageKey) : null;
        $applicationVersion = ($applicationIsNotFlow && $applicationPackage !== null) ? static::$versionRenderer($applicationPackage->getInstalledVersion()) : null;

        return 'Flow/' . ($flowVersion ?: 'dev') . ($applicationIsNotFlow ? ' ' . $applicationName . '/' . ($applicationVersion ?: 'dev') : '');
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Adds the "X-Flow-Powered" to the response.
 * @codeCoverageIgnore
 */
class PoweredByMiddleware extends PoweredByMiddleware_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Flow\Http\Middleware\PoweredByMiddleware' === get_class($this)) {
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

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Framework/Neos.Flow/Classes/Http/Middleware/PoweredByMiddleware.php
#