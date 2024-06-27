<?php 
namespace Neos\ContentRepository\Domain\Service;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;

/**
 * Generates dimension combinations.
 *
 * @Flow\Scope("singleton")
 */
class ContentDimensionCombinator_Original
{
    /**
     * @Flow\Inject
     * @var ContentDimensionPresetSourceInterface
     */
    protected $contentDimensionPresetSource;

    /**
     * Array of all possible dimension configurations allowed by configured presets.
     *
     * @return array
     */
    public function getAllAllowedCombinations()
    {
        $configuration = $this->contentDimensionPresetSource->getAllPresets();
        $dimensionCombinations = [];
        $dimensionNames = array_keys($configuration);
        $dimensionCount = count($dimensionNames);

        if ($dimensionCount === 0) {
            // This is correct, we have one allowed combination which is no dimension values (empty array).
            return [[]];
        }

        // Reset all presets first just to be sure
        foreach ($configuration as $dimensionName => &$dimensionConfiguration) {
            reset($dimensionConfiguration['presets']);
        }
        unset($dimensionConfiguration);

        while (true) {
            $skipCurrentCombination = false;
            $currentPresetCombination = [
                'withPresetIdentifiers' => [],
                'withDimensionValues' => []
            ];
            foreach ($dimensionNames as $dimensionName) {
                $presetIdentifierForDimension = key($configuration[$dimensionName]['presets']);
                $presetForDimension = current($configuration[$dimensionName]['presets']);

                if (!is_array($presetForDimension) || !isset($presetForDimension['values'])) {
                    $skipCurrentCombination = true;
                }

                $currentPresetCombination['withPresetIdentifiers'][$dimensionName] = $presetIdentifierForDimension;
                $currentPresetCombination['withDimensionValues'][$dimensionName] = $presetForDimension['values'];
            }

            if ($skipCurrentCombination === false && $this->contentDimensionPresetSource->isPresetCombinationAllowedByConstraints($currentPresetCombination['withPresetIdentifiers'])) {
                $dimensionCombinations[] = $currentPresetCombination['withDimensionValues'];
            }

            $nextDimension = 0;
            $hasValue = next($configuration[$dimensionNames[$nextDimension]]['presets']);
            while ($hasValue === false) {
                reset($configuration[$dimensionNames[$nextDimension]]['presets']);
                $nextDimension++;
                if (!isset($dimensionNames[$nextDimension])) {
                    // we have gone through all dimension combinations now.
                    return $dimensionCombinations;
                }
                $hasValue = next($configuration[$dimensionNames[$nextDimension]]['presets']);
            }
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Generates dimension combinations.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class ContentDimensionCombinator extends ContentDimensionCombinator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\ContentRepository\Domain\Service\ContentDimensionCombinator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\ContentRepository\Domain\Service\ContentDimensionCombinator', $this);
        if ('Neos\ContentRepository\Domain\Service\ContentDimensionCombinator' === get_class($this)) {
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
  'contentDimensionPresetSource' => 'Neos\\ContentRepository\\Domain\\Service\\ContentDimensionPresetSourceInterface',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\ContentRepository\Domain\Service\ContentDimensionCombinator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\ContentRepository\Domain\Service\ContentDimensionCombinator', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\ContentDimensionPresetSourceInterface', 'Neos\Neos\Domain\Service\ConfigurationContentDimensionPresetSource', 'contentDimensionPresetSource', '33404cce491062aa2636da962a6cf674', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\ContentDimensionPresetSourceInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'contentDimensionPresetSource',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.ContentRepository/Classes/Domain/Service/ContentDimensionCombinator.php
#