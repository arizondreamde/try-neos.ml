<?php 
namespace Neos\Flow\Property\TypeConverter;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Property\PropertyMappingConfigurationInterface;
use Neos\Flow\Session\Session;
use Neos\Flow\Session\SessionManagerInterface;

/**
 * This converter transforms a session identifier into a real session object.
 *
 * Given a session ID this will return an instance of Neos\Flow\Session\Session.
 *
 * @api
 * @Flow\Scope("singleton")
 */
class SessionConverter_Original extends AbstractTypeConverter
{
    /**
     * @var string
     */
    const PATTERN_MATCH_SESSIONIDENTIFIER = '/([a-zA-Z0-9]){32}/';

    /**
     * @var array
     */
    protected $sourceTypes = ['string'];

    /**
     * @var string
     */
    protected $targetType = Session::class;

    /**
     * @var integer
     */
    protected $priority = 1;

    /**
     * @Flow\Inject
     * @var SessionManagerInterface
     */
    protected $sessionManager;

    /**
     * This implementation always returns true for this method.
     *
     * @param mixed $source the source data
     * @param string $targetType the type to convert to.
     * @return boolean true if this TypeConverter can convert from $source to $targetType, false otherwise.
     * @api
     */
    public function canConvertFrom($source, $targetType)
    {
        return (preg_match(self::PATTERN_MATCH_SESSIONIDENTIFIER, $source) === 1) && ($targetType === $this->targetType);
    }

    /**
     * Convert a session identifier from $source to a Session object
     *
     * @param string $source
     * @param string $targetType
     * @param array $convertedChildProperties
     * @param PropertyMappingConfigurationInterface|null $configuration
     * @return object the target type
     */
    public function convertFrom($source, $targetType, array $convertedChildProperties = [], PropertyMappingConfigurationInterface $configuration = null)
    {
        return $this->sessionManager->getSession($source);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * This converter transforms a session identifier into a real session object.
 *
 * Given a session ID this will return an instance of Neos\Flow\Session\Session.
 *
 * @api
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class SessionConverter extends SessionConverter_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Property\TypeConverter\SessionConverter') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Property\TypeConverter\SessionConverter', $this);
        if ('Neos\Flow\Property\TypeConverter\SessionConverter' === get_class($this)) {
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
  'sourceTypes' => 'array',
  'targetType' => 'string',
  'priority' => 'integer',
  'sessionManager' => 'Neos\\Flow\\Session\\SessionManagerInterface',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Property\TypeConverter\SessionConverter') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Property\TypeConverter\SessionConverter', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Session\SessionManagerInterface', 'Neos\Flow\Session\SessionManager', 'sessionManager', '76e58e15e7015ece7292c22da877c6ac', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Session\SessionManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'sessionManager',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Framework/Neos.Flow/Classes/Property/TypeConverter/SessionConverter.php
#