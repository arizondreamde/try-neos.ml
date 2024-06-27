<?php 
declare(strict_types=1);

namespace Neos\Neos\Domain\Service;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\ContentRepository\Domain\Projection\Content\TraversableNodeInterface;
use Neos\Flow\Mvc\Controller\ControllerContext;
use Neos\Fusion\Core\FusionConfiguration;
use Neos\Flow\Annotations as Flow;
use Neos\Fusion\Core\FusionSourceCode;
use Neos\Fusion\Core\FusionSourceCodeCollection;
use Neos\Fusion\Core\Parser;
use Neos\Fusion\Core\Runtime;
use Neos\Fusion\Core\RuntimeFactory;
use Neos\Neos\Domain\Model\Site;
use Neos\Neos\Domain\Repository\SiteRepository;

/**
 * @todo currently scope prototype will change with the removal of the internal state to singleton in Neos 9.0
 *
 * @Flow\Scope("prototype")
 * @api
 */
class FusionService_Original
{
    /**
     * Pattern used for determining the Fusion root file for a site
     *
     * @deprecated with Neos 8.3, will be immutable with 9.0
     * @var string
     */
    protected $siteRootFusionPattern = 'resource://%s/Private/Fusion/Root.fusion';

    /**
     * Array of Fusion files to include before the site Fusion
     *
     * Example:
     *
     *     array(
     *         'resources://MyVendor.MyPackageKey/Private/Fusion/Root.fusion',
     *         'resources://SomeVendor.OtherPackage/Private/Fusion/Root.fusion'
     *     )
     *
     * @deprecated with Neos 8.3, will be removed with 9.0
     * @var array
     */
    protected $prependFusionIncludes = [];

    /**
     * Array of Fusion files to include after the site Fusion
     *
     * Example:
     *
     *     array(
     *         'resources://MyVendor.MyPackageKey/Private/Fusion/Root.fusion',
     *         'resources://SomeVendor.OtherPackage/Private/Fusion/Root.fusion'
     *     )
     *
     * @deprecated with Neos 8.3, will be removed with 9.0
     * @var array
     */
    protected $appendFusionIncludes = [];

    /**
     * @Flow\Inject
     * @var SiteRepository
     */
    protected $siteRepository;

    /**
     * @Flow\Inject
     * @var Parser
     */
    protected $fusionParser;

    /**
     * @Flow\Inject
     * @var RuntimeFactory
     */
    protected $runtimeFactory;

    /**
     * @Flow\Inject
     * @var FusionSourceCodeFactory
     */
    protected $fusionSourceCodeFactory;

    /**
     * @Flow\Inject
     * @var FusionConfigurationCache
     */
    protected $fusionConfigurationCache;

    public function createFusionConfigurationFromSite(Site $site): FusionConfiguration
    {
        return $this->fusionConfigurationCache->cacheFusionConfigurationBySite($site, function () use ($site) {
            $siteResourcesPackageKey = $site->getSiteResourcesPackageKey();

            $siteRootFusionPathAndFilename = sprintf($this->siteRootFusionPattern, $siteResourcesPackageKey);

            return $this->fusionParser->parseFromSource(
                $this->fusionSourceCodeFactory->createFromNodeTypeDefinitions()
                    ->union(
                        $this->fusionSourceCodeFactory->createFromAutoIncludes()
                    )
                    ->union(
                        $this->createSourceCodeFromLegacyFusionIncludes($this->prependFusionIncludes, $siteRootFusionPathAndFilename)
                    )
                    ->union(
                        FusionSourceCodeCollection::tryFromFilePath($siteRootFusionPathAndFilename)
                    )
                    ->union(
                        $this->createSourceCodeFromLegacyFusionIncludes($this->appendFusionIncludes, $siteRootFusionPathAndFilename)
                    )
            );
        });
    }

    /**
     * Returns a merged Fusion object tree in the context of the given nodes
     *
     * @deprecated with Neos 8.3, will be removed with 9.0 {@link createFusionConfigurationFromSite}
     *
     * @param TraversableNodeInterface $startNode Node marking the starting point (i.e. the "Site" node)
     * @return array The merged object tree as of the given node
     */
    public function getMergedFusionObjectTree(TraversableNodeInterface $startNode)
    {
        return $this->createFusionConfigurationFromSite($this->findSiteBySiteNode($startNode))->toArray();
    }

    /**
     * Create a runtime for the given site node
     *
     * @deprecated with Neos 8.3, will be removed with 9.0 use {@link createFusionConfigurationFromSite} and {@link RuntimeFactory::createFromConfiguration} instead
     *
     * @return Runtime
     */
    public function createRuntime(
        TraversableNodeInterface $currentSiteNode,
        ControllerContext $controllerContext
    ) {
        return $this->runtimeFactory->createFromConfiguration(
            $this->createFusionConfigurationFromSite($this->findSiteBySiteNode($currentSiteNode)),
            $controllerContext
        );
    }

    /**
     * Set the pattern for including the site root Fusion
     *
     * @deprecated with Neos 8.3, will be removed with 9.0
     * use {@link FusionSourceCodeFactory} in combination with {@link RuntimeFactory::createRuntimeFromSourceCode()} instead
     *
     * @param string $siteRootFusionPattern A string for the sprintf format that takes the site package key as a single placeholder
     * @return void
     */
    public function setSiteRootFusionPattern($siteRootFusionPattern)
    {
        $this->siteRootFusionPattern = $siteRootFusionPattern;
    }

    /**
     * Get the Fusion resources that are included before the site Fusion.
     *
     * @deprecated with Neos 8.3, will be removed with 9.0
     * use {@link FusionSourceCodeFactory} in combination with {@link RuntimeFactory::createRuntimeFromSourceCode()} instead
     *
     * @return array
     */
    public function getPrependFusionIncludes()
    {
        return $this->prependFusionIncludes;
    }

    /**
     * Set Fusion resources that should be prepended before the site Fusion,
     * it defaults to the Neos Root.fusion Fusion.
     *
     * @deprecated with Neos 8.3, will be removed with 9.0
     * use {@link FusionSourceCodeFactory} in combination with {@link RuntimeFactory::createRuntimeFromSourceCode()} instead
     *
     * @param array $prependFusionIncludes
     * @return void
     */
    public function setPrependFusionIncludes(array $prependFusionIncludes)
    {
        $this->prependFusionIncludes = $prependFusionIncludes;
    }


    /**
     * Get Fusion resources that will be appended after the site Fusion.
     *
     * @deprecated with Neos 8.3, will be removed with 9.0
     * use {@link FusionSourceCodeFactory} in combination with {@link RuntimeFactory::createRuntimeFromSourceCode()} instead
     *
     * @return array
     */
    public function getAppendFusionIncludes()
    {
        return $this->appendFusionIncludes;
    }

    /**
     * Set Fusion resources that should be appended after the site Fusion,
     * this defaults to an empty array.
     *
     * @deprecated with Neos 8.3, will be removed with 9.0
     * use {@link FusionSourceCodeFactory} in combination with {@link RuntimeFactory::createRuntimeFromSourceCode()} instead
     *
     * @param array $appendFusionIncludes An array of Fusion resource URIs
     * @return void
     */
    public function setAppendFusionIncludes(array $appendFusionIncludes)
    {
        $this->appendFusionIncludes = $appendFusionIncludes;
    }

    /** @deprecated with Neos 8.3, will be removed with 9.0 */
    private function createSourceCodeFromLegacyFusionIncludes(array $fusionIncludes, string $filePathForRelativeResolves): FusionSourceCodeCollection
    {
        return new FusionSourceCodeCollection(...array_map(
            function (string $fusionFile) use ($filePathForRelativeResolves) {
                if (str_starts_with($fusionFile, "resource://") === false) {
                    // legacy relative includes
                    $fusionFile = dirname($filePathForRelativeResolves) . '/' . $fusionFile;
                }
                return FusionSourceCode::fromFilePath($fusionFile);
            },
            $fusionIncludes
        ));
    }

    private function findSiteBySiteNode(TraversableNodeInterface $siteNode): Site
    {
        return $this->siteRepository->findOneByNodeName((string)$siteNode->getNodeName())
            ?? throw new \Neos\Neos\Domain\Exception(sprintf('No site found for nodeNodeName "%s"', $siteNode->getNodeName()), 1677245517);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * @todo currently scope prototype will change with the removal of the internal state to singleton in Neos 9.0
 *
 * @Flow\Scope("prototype")
 * @api
 * @codeCoverageIgnore
 */
class FusionService extends FusionService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\Domain\Service\FusionService' === get_class($this)) {
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
  'siteRootFusionPattern' => 'string',
  'prependFusionIncludes' => 'array',
  'appendFusionIncludes' => 'array',
  'siteRepository' => 'Neos\\Neos\\Domain\\Repository\\SiteRepository',
  'fusionParser' => 'Neos\\Fusion\\Core\\Parser',
  'runtimeFactory' => 'Neos\\Fusion\\Core\\RuntimeFactory',
  'fusionSourceCodeFactory' => 'Neos\\Neos\\Domain\\Service\\FusionSourceCodeFactory',
  'fusionConfigurationCache' => 'Neos\\Neos\\Domain\\Service\\FusionConfigurationCache',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Repository\SiteRepository', 'Neos\Neos\Domain\Repository\SiteRepository', 'siteRepository', '42785f5eca4dff104f1860b84f531a9f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Repository\SiteRepository'); });
        $this->fusionParser = new \Neos\Fusion\Core\Parser();
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Fusion\Core\RuntimeFactory', 'Neos\Fusion\Core\RuntimeFactory', 'runtimeFactory', '252f0e569d715a12c16bda57559d5723', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Fusion\Core\RuntimeFactory'); });
        $this->fusionSourceCodeFactory = new \Neos\Neos\Domain\Service\FusionSourceCodeFactory();
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Service\FusionConfigurationCache', 'Neos\Neos\Domain\Service\FusionConfigurationCache', 'fusionConfigurationCache', 'b106d7c366af09d7c182af99c705125d', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Service\FusionConfigurationCache'); });
        $this->Flow_Injected_Properties = array (
  0 => 'siteRepository',
  1 => 'fusionParser',
  2 => 'runtimeFactory',
  3 => 'fusionSourceCodeFactory',
  4 => 'fusionConfigurationCache',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Neos/Classes/Domain/Service/FusionService.php
#