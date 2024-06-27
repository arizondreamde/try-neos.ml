<?php 
declare(strict_types=1);

namespace Neos\Fusion\Core\Cache;

/*
 * This file is part of the Neos.Fusion package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Cache\CacheManager;
use Neos\Flow\Monitor\ChangeDetectionStrategy\ChangeDetectionStrategyInterface;

/**
 * Helper around the ParsePartials Cache.
 * Connected in the boot to flush caches on file-change.
 *
 */
class ParserCacheFlusher_Original
{
    use ParserCacheIdentifierTrait;

    /**
     * @var CacheManager
     */
    protected $flowCacheManager;

    /**
     * @param CacheManager $flowCacheManager
     */
    public function __construct(CacheManager $flowCacheManager)
    {
        $this->flowCacheManager = $flowCacheManager;
    }

    /**
     * @param string $fileMonitorIdentifier
     * @param array<string, int> $changedFiles
     * @return void
     */
    public function flushPartialCacheOnFileChanges($fileMonitorIdentifier, array $changedFiles)
    {
        if ($fileMonitorIdentifier !== 'Fusion_Files') {
            return;
        }

        $identifiersToFlush = [];
        foreach ($changedFiles as $changedFile => $status) {
            // flow returns linux style file paths without directory traversal from the file monitor.
            // As discovered via https://github.com/neos/neos-development-collection/issues/4915 the paths will point to symlinks instead of the actual file.
            // Thus, we still need to invoke `realpath` as the cache invalidation otherwise would not work (due to a different hash)
            // But attempting to use realpath on removed/moved files fails because it surely cannot be resolved via file system.
            if ($status === ChangeDetectionStrategyInterface::STATUS_DELETED) {
                // Ignoring removed files means we cannot flush removed files, but this is a compromise for now.
                // See https://github.com/neos/neos-development-collection/issues/4415 as reminder that flushing is disabled for deleted files
                continue;
            }
            $fusionFileRealPath = realpath($changedFile);
            if ($fusionFileRealPath === false) {
                // should not happen as we ignored deleted files beforehand.
                throw new \RuntimeException("Couldn't resolve realpath for: '$changedFile'", 1709122619);
            }
            $identifiersToFlush[] = $this->getCacheIdentifierForAbsoluteUnixStyleFilePathWithoutDirectoryTraversal($fusionFileRealPath);
        }

        if ($identifiersToFlush !== []) {
            $partialsCache = $this->flowCacheManager->getCache('Neos_Fusion_ParsePartials');
            foreach ($identifiersToFlush as $identifierToFlush) {
                if ($partialsCache->has($identifierToFlush)) {
                    $partialsCache->remove($identifierToFlush);
                }
            }
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Helper around the ParsePartials Cache.
 * Connected in the boot to flush caches on file-change.
 *
 * @codeCoverageIgnore
 */
class ParserCacheFlusher extends ParserCacheFlusher_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * @param CacheManager $flowCacheManager
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cache\CacheManager');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $flowCacheManager in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'flowCacheManager' => 'Neos\\Flow\\Cache\\CacheManager',
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
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Fusion/Classes/Core/Cache/ParserCacheFlusher.php
#