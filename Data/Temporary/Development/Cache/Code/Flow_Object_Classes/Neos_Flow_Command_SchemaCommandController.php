<?php 
namespace Neos\Flow\Command;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Error\Messages\Result;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Package\PackageManager;
use Neos\Flow\Cli\CommandController;
use Neos\Utility\SchemaValidator;
use Symfony\Component\Yaml\Yaml;
use Neos\Utility\Files;

/**
 * Configuration command controller for the Neos.Flow package
 *
 * @Flow\Scope("singleton")
 */
class SchemaCommandController_Original extends CommandController
{
    /**
     * @Flow\Inject(lazy = false)
     * @var SchemaValidator
     */
    protected $schemaValidator;

    /**
     * @Flow\Inject
     * @var PackageManager
     */
    protected $packageManager;

    /**
     * Validate the given configurationfile againt a schema file
     *
     * @param string $configurationFile path to the validated configuration file
     * @param string $schemaFile path to the schema file
     * @param boolean $verbose if true, output more verbose information on the schema files which were used
     * @return void
     */
    public function validateCommand(string $configurationFile = null, string $schemaFile = 'resource://Neos.Flow/Private/Schema/Schema.schema.yaml', bool $verbose = false)
    {
        $this->outputLine('Validating <b>' . $configurationFile . '</b> with schema  <b>' . $schemaFile . '</b>');
        $this->outputLine();

        $schema = Yaml::parseFile($schemaFile);

        if (is_null($configurationFile)) {
            $result = new Result();
            $activeFlowPackages = $this->packageManager->getFlowPackages();
            foreach ($activeFlowPackages as $package) {
                $packageKey = $package->getPackageKey();
                $packageSchemaPath = Files::concatenatePaths([$package->getResourcesPath(), 'Private/Schema']);
                if (is_dir($packageSchemaPath) && $packageKey !== 'Neos.Utility.Schema') {
                    foreach (Files::getRecursiveDirectoryGenerator($packageSchemaPath, '.schema.yaml') as $schemaFile) {
                        $configuration = Yaml::parseFile($schemaFile);
                        $schemaPath = str_replace(FLOW_PATH_ROOT, '', $schemaFile);
                        $configurationResult = $this->schemaValidator->validate($configuration, $schema);
                        $result->forProperty($schemaPath)->merge($configurationResult);
                    }
                }
            }
        } else {
            $configuration = Yaml::parseFile($configurationFile);
            $result = $this->schemaValidator->validate($configuration, $schema);
        }

        if ($verbose) {
            $this->outputLine();
            if ($result->hasNotices()) {
                $notices = $result->getFlattenedNotices();
                $this->outputLine('<b>%d notices:</b>', [count($notices)]);
                foreach ($notices as $path => $pathNotices) {
                    foreach ($pathNotices as $notice) {
                        $this->outputLine(' - %s -> %s', [$path, $notice->render()]);
                    }
                }
                $this->outputLine();
            }
        }

        if ($result->hasErrors()) {
            $errors = $result->getFlattenedErrors();
            $this->outputLine('<b>%d errors were found:</b>', [count($errors)]);
            foreach ($errors as $path => $pathErrors) {
                foreach ($pathErrors as $error) {
                    $this->outputLine(' - %s -> %s', [$path, $error->render()]);
                }
            }
            $this->quit(1);
        } else {
            $this->outputLine('<b>All Valid!</b>');
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Configuration command controller for the Neos.Flow package
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class SchemaCommandController extends SchemaCommandController_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructs the command controller
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Command\SchemaCommandController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Command\SchemaCommandController', $this);
        parent::__construct();
        if ('Neos\Flow\Command\SchemaCommandController' === get_class($this)) {
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
  'schemaValidator' => 'Neos\\Utility\\SchemaValidator',
  'packageManager' => 'Neos\\Flow\\Package\\PackageManager',
  'request' => 'Neos\\Flow\\Cli\\Request',
  'response' => 'Neos\\Flow\\Cli\\Response',
  'arguments' => 'Neos\\Flow\\Mvc\\Controller\\Arguments',
  'commandMethodName' => 'string',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'commandManager' => 'Neos\\Flow\\Cli\\CommandManager',
  'output' => 'Neos\\Flow\\Cli\\ConsoleOutput',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Command\SchemaCommandController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Command\SchemaCommandController', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectCommandManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cli\CommandManager'));
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->schemaValidator = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Utility\SchemaValidator');
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Package\PackageManager', 'Neos\Flow\Package\PackageManager', 'packageManager', '5969f0154592264b520c05738a0c9f97', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Package\PackageManager'); });
        $this->Flow_Injected_Properties = array (
  0 => 'commandManager',
  1 => 'objectManager',
  2 => 'schemaValidator',
  3 => 'packageManager',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Framework/Neos.Flow/Classes/Command/SchemaCommandController.php
#