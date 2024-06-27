<?php 
namespace Neos\Media\Domain\Strategy;

/*
 * This file is part of the Neos.Media package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Configuration\ConfigurationManager;
use Neos\Flow\Log\ThrowableStorageInterface;
use Neos\Flow\Log\Utility\LogEnvironment;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Reflection\ReflectionService;
use Neos\Media\Domain\Model\Thumbnail;
use Neos\Media\Domain\Model\ThumbnailGenerator\ThumbnailGeneratorInterface;
use Neos\Media\Exception\NoThumbnailAvailableException;
use Neos\Utility\PositionalArraySorter;
use Psr\Log\LoggerInterface;

/**
 * A strategy to detect the correct thumbnail generator
 *
 * @Flow\Scope("singleton")
 */
class ThumbnailGeneratorStrategy_Original
{
    /**
     * @Flow\Inject
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @Flow\Inject
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @Flow\Inject
     * @var ThrowableStorageInterface
     */
    protected $throwableStorage;

    /**
     * Refresh the given thumbnail
     *
     * @param Thumbnail $thumbnail
     * @return void
     */
    public function refresh(Thumbnail $thumbnail)
    {
        $generatorClassNames = static::getThumbnailGeneratorClassNames($this->objectManager);
        foreach ($generatorClassNames as $generator) {
            $className = $generator['className'];
            $generator = $this->objectManager->get($className);
            if (!$generator->canRefresh($thumbnail)) {
                continue;
            }
            try {
                $generator->refresh($thumbnail);
                return;
            } catch (NoThumbnailAvailableException $exception) {
                $message = $this->throwableStorage->logThrowable($exception);
                $this->logger->error(sprintf('%s.refresh() failed, trying next generator. %s', $className, $message), LogEnvironment::fromMethodName(__METHOD__));
            }
        }

        $this->logger->error(sprintf('All thumbnail generators failed to generate a thumbnail for asset %s (%s)', $thumbnail->getOriginalAsset()->getResource()->getSha1(), $thumbnail->getOriginalAsset()->getResource()->getFilename()), LogEnvironment::fromMethodName(__METHOD__));
    }

    /**
     * Returns all class names implementing the ThumbnailGeneratorInterface.
     *
     * @Flow\CompileStatic
     * @param ObjectManagerInterface $objectManager
     * @return ThumbnailGeneratorInterface[]
     */
    public static function getThumbnailGeneratorClassNames($objectManager)
    {
        /** @var ReflectionService $reflectionService */
        $reflectionService = $objectManager->get(ReflectionService::class);
        $generatorClassNames = $reflectionService->getAllImplementationClassNamesForInterface(ThumbnailGeneratorInterface::class);
        $configurationManager = $objectManager->get(ConfigurationManager::class);
        $generatorOptions = $configurationManager->getConfiguration('Settings', 'Neos.Media.thumbnailGenerators');
        $generators = [];
        foreach ($generatorClassNames as $generatorClassName) {
            if (isset($generatorOptions[$generatorClassName]['disable']) && $generatorOptions[$generatorClassName]['disable'] === true) {
                continue;
            }
            if (isset($generatorOptions[$generatorClassName]['priority'])) {
                $priority = $generatorOptions[$generatorClassName]['priority'];
            } else {
                $priority = $generatorClassName::getPriority();
            }
            $generators[] = [
                'priority' => (integer)$priority,
                'className' => $generatorClassName
            ];
        }

        $sorter = new PositionalArraySorter($generators, 'priority');
        return array_reverse($sorter->toArray());
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A strategy to detect the correct thumbnail generator
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class ThumbnailGeneratorStrategy extends ThumbnailGeneratorStrategy_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Media\Domain\Strategy\ThumbnailGeneratorStrategy') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Domain\Strategy\ThumbnailGeneratorStrategy', $this);
        if ('Neos\Media\Domain\Strategy\ThumbnailGeneratorStrategy' === get_class($this)) {
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
  'logger' => 'Psr\\Log\\LoggerInterface',
  'throwableStorage' => 'Neos\\Flow\\Log\\ThrowableStorageInterface',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Media\Domain\Strategy\ThumbnailGeneratorStrategy') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Domain\Strategy\ThumbnailGeneratorStrategy', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Psr\Log\LoggerInterface', 'Psr\Log\LoggerInterface', 'logger', '4ecd65bb9ffe02221f8576f7ca2cf401', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Log\ThrowableStorageInterface', 'Neos\Flow\Log\ThrowableStorage\FileStorage', 'throwableStorage', '8fa316b494492f1b982d3503d39ddfc4', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\ThrowableStorageInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'logger',
  2 => 'throwableStorage',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Media/Classes/Domain/Strategy/ThumbnailGeneratorStrategy.php
#