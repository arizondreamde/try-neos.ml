<?php 
namespace Neos\Setup\Infrastructure\Healthcheck;

use Neos\Flow\Configuration\ConfigurationManager;
use Neos\Flow\Core\Booting\Exception\SubProcessException;
use Neos\Flow\Core\Booting\Scripts;
use Neos\Flow\Core\Bootstrap;
use Neos\Setup\Domain\CliEnvironment;
use Neos\Setup\Domain\EarlyBootTimeHealthcheckInterface;
use Neos\Setup\Domain\Health;
use Neos\Setup\Domain\HealthcheckEnvironment;
use Neos\Setup\Domain\Status;
use Neos\Utility\Files;
use Neos\Setup\Infrastructure\HealthcheckFailedError;

class BasicRequirementsHealthcheck_Original implements EarlyBootTimeHealthcheckInterface
{
    private HealthcheckEnvironment $environment;

    public function __construct(
        private ConfigurationManager $configurationManager
    ) {
    }

    public static function fromBootstrap(Bootstrap $bootstrap): self
    {
        return new self(
            $bootstrap->getEarlyInstance(ConfigurationManager::class)
        );
    }

    public function getTitle(): string
    {
        return 'Basic system requirements';
    }

    /**
     * Additional checks to {@see Bootstrap::ensureRequiredEnvironment()}
     */
    public function execute(HealthcheckEnvironment $environment): Health
    {
        $this->environment = $environment;
        try {
            $this->checkPhpBinaryVersion();
            $this->requiredFunctionsAvailable();
            $this->checkFilePermissions();
            $this->checkSessionAutostart();
        } catch (HealthcheckFailedError $error) {
            return new Health($error->getMessage(), Status::ERROR());
        }

        if ($environment->executionEnvironment->isWindows && !$this->canCreateSymlinks()) {
            return new Health(
                'Unable to create symlinks. The current user might not be allowed to create symlinks, please ensure that the privilege "SeCreateSymbolicLinkPrivilege" is set. Alternatively you need to publish the resources via an admin shell: <code>{{flowCommand}} resource:publish</code>.',
                Status::WARNING()
            );
        }

        return new Health('All basic requirements are fullfilled.', Status::OK());
    }

    private function canCreateSymlinks(): bool
    {
        $testFile = FLOW_PATH_TEMPORARY . '/neos-setup-test-file';
        $testLink = FLOW_PATH_TEMPORARY . '/neos-setup-test-link';
        touch($testFile);
        $success = symlink($testFile, $testLink);
        if ($success) {
            unlink($testLink);
        }
        unlink($testFile);
        return $success;
    }

    private function checkFilePermissions(): void
    {
        $requiredWritableFolders = ['Configuration', 'Data', 'Packages', 'Web/_Resources'];

        foreach ($requiredWritableFolders as $folder) {
            $folderPath = FLOW_PATH_ROOT . $folder;
            if (!is_dir($folderPath) && !Files::is_link($folderPath)) {
                try {
                    Files::createDirectoryRecursively($folderPath);
                } catch (\Neos\Flow\Utility\Exception) {
                    throw new HealthcheckFailedError('The folder "' . $folder . '" does not exist and could not be created but we need it.');
                }
            }

            if (!is_writable($folderPath)) {
                throw new HealthcheckFailedError('The folder "' . $folder . '" is not writeable but should be.');
            }
        }
    }

    private function requiredFunctionsAvailable(): void
    {
        $requiredFunctions = [
            'exec',
            'shell_exec',
            'escapeshellcmd',
            'escapeshellarg'
        ];

        foreach ($requiredFunctions as $requiredFunction) {
            if (!is_callable($requiredFunction)) {
                throw new HealthcheckFailedError('Function "' . $requiredFunction . '" is not callable but required.');
            }
        }
    }

    private function checkSessionAutostart(): void
    {
        if (ini_get('session.auto_start')) {
            throw new HealthcheckFailedError('"session.auto_start" is enabled in your php.ini. This is not supported and will cause problems.');
        }
    }

    /**
     * Checks if the configured PHP binary is executable and the same version as the one
     * running the current (web server) PHP process.
     *
     * @throws HealthcheckFailedError
     */
    private function checkPhpBinaryVersion(): void
    {
        $flowSettings = $this->configurationManager->getConfiguration(
            ConfigurationManager::CONFIGURATION_TYPE_SETTINGS,
            'Neos.Flow'
        );

        $phpBinaryPathAndFilename = $flowSettings['core']['phpBinaryPathAndFilename'] ?? '';

        try {
            Scripts::buildPhpCommand($flowSettings);
        } catch (SubProcessException $subProcessException) {
            $possiblePhpBinary = '';
            if ($this->environment->executionEnvironment instanceof CliEnvironment && defined('PHP_BINARY') && PHP_BINARY !== '') {
                $possiblePhpBinary = sprintf(' You might want to configure it to: "%s".', PHP_BINARY);
            }
            throw new HealthcheckFailedError(
                $this->environment->isSafeToLeakTechnicalDetails()
                ? sprintf(
                    'Could not start a flow subprocess. Maybe your PHP binary "%s" (see Configuration/Settings.yaml) is incorrect: "%s".%s Open <b>Data/Logs/Exceptions/%s.txt</b> for a full stack trace.',
                    $phpBinaryPathAndFilename,
                    $subProcessException->getMessage(),
                    $possiblePhpBinary,
                    $subProcessException->getReferenceCode(),
                )
                : 'Could not start a flow subprocess. Maybe your PHP binary (see Configuration/Settings.yaml) is incorrect. Please check your log for more details.'
            );
        }
    }
}

#
# Start of Flow generated Proxy code
#

class BasicRequirementsHealthcheck extends BasicRequirementsHealthcheck_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Configuration\ConfigurationManager');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $configurationManager in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Setup/Classes/Infrastructure/Healthcheck/BasicRequirementsHealthcheck.php
#