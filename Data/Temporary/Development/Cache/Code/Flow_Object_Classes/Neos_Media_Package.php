<?php 
namespace Neos\Media;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Configuration\ConfigurationManager;
use Neos\Flow\Core\Bootstrap;
use Neos\Flow\Package\Package as BasePackage;
use Neos\Media\Domain\Model\AssetInterface;
use Neos\Media\Domain\Model\ImportedAssetManager;
use Neos\Media\Domain\Service\AssetService;
use Neos\Media\Domain\Service\AssetVariantGenerator;
use Neos\Media\Domain\Service\ThumbnailGenerator;

/**
 * The Media Package
 */
class Package_Original extends BasePackage
{
    /**
     * @param Bootstrap $bootstrap The current bootstrap
     * @return void
     */
    public function boot(Bootstrap $bootstrap)
    {
        $dispatcher = $bootstrap->getSignalSlotDispatcher();
        $dispatcher->connect(AssetService::class, 'assetCreated', function (AssetInterface $asset) use ($bootstrap) {
            $configurationManager = $bootstrap->getObjectManager()->get(ConfigurationManager::class);
            if ($configurationManager->getConfiguration(ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'Neos.Media.autoCreateImageVariantPresets')) {
                $bootstrap->getObjectManager()->get(AssetVariantGenerator::class)->createVariants($asset);
            }
        });
        $dispatcher->connect(AssetService::class, 'assetCreated', ThumbnailGenerator::class, 'createThumbnails');
        $dispatcher->connect(AssetService::class, 'assetCreated', ImportedAssetManager::class, 'registerCreatedAsset');
        $dispatcher->connect(AssetService::class, 'assetRemoved', ImportedAssetManager::class, 'registerRemovedAsset');
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * The Media Package
 * @codeCoverageIgnore
 */
class Package extends Package_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor
     *
     * @param string $packageKey Key of this package
     * @param string $composerName
     * @param string $packagePath Absolute path to the location of the package's composer manifest
     * @param array $autoloadConfiguration
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $packageKey in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $composerName in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $packagePath in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'packageKey' => 'string',
  'composerName' => 'string',
  'packagePath' => 'string',
  'namespaces' => 'array<string>',
  'autoloadTypes' => 'array<string>',
  'autoloadConfiguration' => 'array',
  'flattenedAutoloadConfiguration' => 'array',
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
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Media/Classes/Package.php
#