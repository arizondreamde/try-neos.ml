<?php 
namespace Neos\Neos\NodeTypePostprocessor;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Configuration\ConfigurationManager;
use Neos\Neos\Service\PluginService;
use Neos\ContentRepository\Domain\Model\NodeType;
use Neos\ContentRepository\NodeTypePostprocessor\NodeTypePostprocessorInterface;

/**
 * This Processor updates the PluginViews NodeType with the existing
 * Plugins and it's corresponding available Views
 *
 * @deprecated will be removed with Neos 9
 */
class PluginNodeTypePostprocessor_Original implements NodeTypePostprocessorInterface
{
    /**
     * @var ConfigurationManager
     * @Flow\Inject
     */
    protected $configurationManager;

    /**
     * @var PluginService
     * @Flow\Inject
     */
    protected $pluginService;

    /**
     * Returns the processed Configuration
     *
     * @param \Neos\ContentRepository\Domain\Model\NodeType $nodeType (uninitialized) The node type to process
     * @param array $configuration input configuration
     * @param array $options The processor options
     * @return void
     */
    public function process(NodeType $nodeType, array &$configuration, array $options)
    {
        $pluginViewDefinitions = $this->pluginService->getPluginViewDefinitionsByPluginNodeType($nodeType);
        if ($pluginViewDefinitions === []) {
            return;
        }
        $configuration['ui']['inspector']['groups']['pluginViews'] = [
            'position' => '9999',
            'label' => 'Plugin Views'
        ];
        $configuration['properties']['views'] = [
            'type' => 'string',
            'ui' => [
                'inspector' => [
                    'group' => 'pluginViews',
                    'position' => '20',
                    'editor' => 'Neos.Neos/Inspector/Editors/PluginViewsEditor'
                ]
            ]
        ];
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * This Processor updates the PluginViews NodeType with the existing
 * Plugins and it's corresponding available Views
 *
 * @deprecated will be removed with Neos 9
 * @codeCoverageIgnore
 */
class PluginNodeTypePostprocessor extends PluginNodeTypePostprocessor_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\NodeTypePostprocessor\PluginNodeTypePostprocessor' === get_class($this)) {
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
  'configurationManager' => 'Neos\\Flow\\Configuration\\ConfigurationManager',
  'pluginService' => 'Neos\\Neos\\Service\\PluginService',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Configuration\ConfigurationManager', 'Neos\Flow\Configuration\ConfigurationManager', 'configurationManager', 'f559bc775c41b957515dc1c69b91d8b1', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Configuration\ConfigurationManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Service\PluginService', 'Neos\Neos\Service\PluginService', 'pluginService', '9a5e6d9c8043f9403867eb9224792c01', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Service\PluginService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'configurationManager',
  1 => 'pluginService',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Neos/Classes/NodeTypePostprocessor/PluginNodeTypePostprocessor.php
#