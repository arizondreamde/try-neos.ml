<?php 
declare(strict_types=1);

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
use Neos\Flow\Property\Exception\InvalidSourceException;
use Neos\Flow\Property\PropertyMappingConfigurationInterface;

/**
 * Converter which transforms ArrayObjects to arrays.
 *
 * @api
 * @Flow\Scope("singleton")
 */
class ArrayObjectConverter_Original extends AbstractTypeConverter
{
    /**
     * @var array<string>
     */
    protected $sourceTypes = [\ArrayObject::class];

    /**
     * @var string
     */
    protected $targetType = 'array';

    /**
     * @var integer
     */
    protected $priority = 1;

    /**
     * Convert from $source to $targetType.
     *
     * @param mixed $source
     * @param string $targetType
     * @param array $convertedChildProperties
     * @param PropertyMappingConfigurationInterface|null $configuration
     * @return array
     * @throws InvalidSourceException
     * @api
     */
    public function convertFrom($source, $targetType, array $convertedChildProperties = [], PropertyMappingConfigurationInterface $configuration = null): array
    {
        if (!($source instanceof \ArrayObject)) {
            throw new InvalidSourceException('Source was not an instance of ArrayObject.', 1648456200);
        }

        return $source->getArrayCopy();
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Converter which transforms ArrayObjects to arrays.
 *
 * @api
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class ArrayObjectConverter extends ArrayObjectConverter_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Property\TypeConverter\ArrayObjectConverter') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Property\TypeConverter\ArrayObjectConverter', $this);
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
  'sourceTypes' => 'array<string>',
  'targetType' => 'string',
  'priority' => 'integer',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Property\TypeConverter\ArrayObjectConverter') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Property\TypeConverter\ArrayObjectConverter', $this);

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /var/www/neos/Packages/Framework/Neos.Flow/Classes/Property/TypeConverter/ArrayObjectConverter.php
#