<?php 
namespace Neos\Neos\Domain\Strategy;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\ContentRepository\Domain\Model\NodeData;
use Neos\ContentRepository\Domain\Repository\NodeDataRepository;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Persistence\PersistenceManagerInterface;
use Neos\Media\Domain\Model\AssetInterface;
use Neos\Media\Domain\Model\Image;
use Neos\Media\Domain\Strategy\AbstractAssetUsageStrategy;
use Neos\Neos\Controller\CreateContentContextTrait;
use Neos\Neos\Domain\Model\Dto\AssetUsageInNodeProperties;
use Neos\Neos\Domain\Service\SiteService;
use Neos\Utility\TypeHandling;

/**
 * @Flow\Scope("singleton")
 */
class AssetUsageInNodePropertiesStrategy_Original extends AbstractAssetUsageStrategy
{
    use CreateContentContextTrait;

    /**
     * @Flow\Inject
     * @var NodeDataRepository
     */
    protected $nodeDataRepository;

    /**
     * @var array
     */
    protected $firstlevelCache = [];

    /**
     * @Flow\Inject
     * @var PersistenceManagerInterface
     */
    protected $persistenceManager;

    /**
     * Returns an array of usage reference objects.
     *
     * @param AssetInterface $asset
     * @return array<\Neos\Neos\Domain\Model\Dto\AssetUsageInNodeProperties>
     * @throws \Neos\ContentRepository\Exception\NodeConfigurationException
     */
    public function getUsageReferences(AssetInterface $asset)
    {
        $assetIdentifier = $this->persistenceManager->getIdentifierByObject($asset);
        if (isset($this->firstlevelCache[$assetIdentifier])) {
            return $this->firstlevelCache[$assetIdentifier];
        }

        $relatedNodes = array_map(function (NodeData $relatedNodeData) use ($asset) {
            return new AssetUsageInNodeProperties(
                $asset,
                $relatedNodeData->getIdentifier(),
                $relatedNodeData->getWorkspace()->getName(),
                $relatedNodeData->getDimensionValues(),
                $relatedNodeData->getNodeType()->getName()
            );
        }, $this->getRelatedNodes($asset));

        $this->firstlevelCache[$assetIdentifier] = $relatedNodes;
        return $this->firstlevelCache[$assetIdentifier];
    }

    /**
     * Returns all nodes that use the asset in a node property.
     *
     * @param AssetInterface $asset
     * @return array
     */
    public function getRelatedNodes(AssetInterface $asset)
    {
        $relationMap = [];
        $relationMap[TypeHandling::getTypeForValue($asset)] = [$this->persistenceManager->getIdentifierByObject($asset)];

        if ($asset instanceof Image) {
            foreach ($asset->getVariants() as $variant) {
                $type = TypeHandling::getTypeForValue($variant);
                if (!isset($relationMap[$type])) {
                    $relationMap[$type] = [];
                }
                $relationMap[$type][] = $this->persistenceManager->getIdentifierByObject($variant);
            }
        }

        return $this->nodeDataRepository->findNodesByPathPrefixAndRelatedEntities(SiteService::SITES_ROOT_PATH, $relationMap);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class AssetUsageInNodePropertiesStrategy extends AssetUsageInNodePropertiesStrategy_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Neos\Domain\Strategy\AssetUsageInNodePropertiesStrategy') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Domain\Strategy\AssetUsageInNodePropertiesStrategy', $this);
        if (get_class($this) === 'Neos\Neos\Domain\Strategy\AssetUsageInNodePropertiesStrategy') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Domain\Strategy\AssetUsageStrategyInterface', $this);
        if ('Neos\Neos\Domain\Strategy\AssetUsageInNodePropertiesStrategy' === get_class($this)) {
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
  'nodeDataRepository' => 'Neos\\ContentRepository\\Domain\\Repository\\NodeDataRepository',
  'firstlevelCache' => 'array',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  '_contextFactory' => '\\Neos\\Neos\\Domain\\Service\\ContentContextFactory',
  '_siteRepository' => '\\Neos\\Neos\\Domain\\Repository\\SiteRepository',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Neos\Domain\Strategy\AssetUsageInNodePropertiesStrategy') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Domain\Strategy\AssetUsageInNodePropertiesStrategy', $this);
        if (get_class($this) === 'Neos\Neos\Domain\Strategy\AssetUsageInNodePropertiesStrategy') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Domain\Strategy\AssetUsageStrategyInterface', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Repository\NodeDataRepository', 'Neos\ContentRepository\Domain\Repository\NodeDataRepository', 'nodeDataRepository', '6d07985e92d364413ac81acd8f47b11b', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Repository\NodeDataRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Service\ContentContextFactory', 'Neos\Neos\Domain\Service\ContentContextFactory', '_contextFactory', 'bf6447fb48e80589ca3a024bc3882005', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Service\ContentContextFactory'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Repository\SiteRepository', 'Neos\Neos\Domain\Repository\SiteRepository', '_siteRepository', '42785f5eca4dff104f1860b84f531a9f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Repository\SiteRepository'); });
        $this->Flow_Injected_Properties = array (
  0 => 'nodeDataRepository',
  1 => 'persistenceManager',
  2 => '_contextFactory',
  3 => '_siteRepository',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Neos/Classes/Domain/Strategy/AssetUsageInNodePropertiesStrategy.php
#