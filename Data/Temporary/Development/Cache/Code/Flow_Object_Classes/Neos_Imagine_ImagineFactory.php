<?php 
namespace Neos\Imagine;

/*
 * This file is part of the Neos.Imagine package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Imagine\Image\ImagineInterface;
use Neos\Flow\Annotations as Flow;

/**
 * Imagine factory for Imagine package
 *
 * @Flow\Scope("singleton")
 */
class ImagineFactory_Original extends AbstractImagineFactory
{
    /**
     * @var \Neos\Flow\ObjectManagement\ObjectManagerInterface
     * @Flow\Inject
     */
    protected $objectManager;

    /**
     * Factory method which creates an Imagine instance.
     *
     * By default this factory creates an Imagine service according to the currently configured driver (for example GD
     * or ImageMagick).
     *
     * You may alternatively specify a class name of a driver-dependent class you need an instance of. For example,
     * specifying "Image" with the currently configured driver "Gd" will return an instance of the class
     * \Imagine\Gd\Image.
     *
     * @param string $className If specified, this factory will create an instance of the driver dependent class
     * @param mixed ...$arguments
     * @return \Imagine\Image\ImagineInterface This is not necessarily true depending if you give another className
     * @api
     * @deprecated Use createDriver or createImagineClass as needed
     * @see createDriver
     * @see createImagineClass
     */
    public function create($className = 'Imagine', ...$arguments)
    {
        $this->configureDriverSpecificSettings($this->settings['driver']);
        return $this->createImagineClass($this->settings['driver'], $className, ...$arguments);
    }

    /**
     * Factory method to create a ImagineInterface driver instance, if you just want the currently configured one,
     * inject the \Imagine\Image\ImagineInterface which will use this factory method with the configured driver class.
     *
     * This will also apply driver specific settings.
     *
     * @param string $driverName
     * @param string $className
     * @param mixed ...$arguments
     * @return \Imagine\Image\ImagineInterface
     * @api
     */
    public function createDriver(string $driverName, ...$arguments): ImagineInterface
    {
        $this->configureDriverSpecificSettings($driverName);
        $className = $this->buildImagineClassName($driverName);

        return new $className(...$arguments);
    }

    /**
     * Create an instance of a driver-dependent imagine class. For example, specifying
     * "Image" with a driverName "Gd" will return an instance of the class
     * \Imagine\Gd\Image.
     *
     * This will not set any driver specific settings.
     *
     * @param string $driverName
     * @param string $className
     * @param mixed ...$arguments
     * @return object
     * @api
     */
    public function createImagineClass(string $driverName, $className, ...$arguments): object
    {
        $className = $this->buildImagineClassName($driverName, $className);
        return new $className(...$arguments);
    }

    /**
     * @param string $driverName
     * @return bool
     * @api
     */
    public function isDriverAvailable(string $driverName): bool
    {
        return class_exists($this->buildImagineClassName($driverName));
    }

    /**
     * @param string $driverName
     * @param string $className This should be a class that any imagine implementation provides, and defaults to the primary driver className
     * @return string
     */
    private function buildImagineClassName(string $driverName, $className = 'Imagine'): string
    {
        return 'Imagine\\' . $driverName . '\\' . $className;
    }

    /**
     * Set driver specific settings.
     *
     * @return void
     */
    protected function configureDriverSpecificSettings(string $driverName)
    {
        if ($driverName === 'Imagick') {
            $this->configureImagickSettings();
        }
    }

    /**
     * Sets limits for the Imagick driver.
     *
     * @return void
     */
    protected function configureImagickSettings()
    {
        if (!isset($this->settings['driverSpecific']['Imagick'])) {
            return;
        }

        $limits = $this->settings['driverSpecific']['Imagick']['limits'] ? $this->settings['driverSpecific']['Imagick']['limits'] : [];
        foreach ($limits as $resourceType => $limit) {
            \Imagick::setResourceLimit($resourceType, $limit);
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Imagine factory for Imagine package
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class ImagineFactory extends ImagineFactory_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Imagine\ImagineFactory') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Imagine\ImagineFactory', $this);
        if ('Neos\Imagine\ImagineFactory' === get_class($this)) {
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
  'objectManager' => '\\Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'settings' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Imagine\ImagineFactory') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Imagine\ImagineFactory', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectSettings(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Imagine'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'settings',
  1 => 'objectManager',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Imagine/Classes/ImagineFactory.php
#