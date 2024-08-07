<?php 
declare(strict_types=1);

namespace Neos\Fusion\Core;

/*
 * This file is part of the Neos.Fusion package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

/**
 * This holds the parsed Fusion Configuration and can be used to pass it to the Runtime via
 * {@see RuntimeFactory::createFromConfiguration()}
 * The contents of this DTO are internal and can change at any time!
 */
class FusionConfiguration_Original
{
    /**
     * @internal
     * @param array<int|string, mixed> $fusionConfiguration
     */
    protected function __construct(
        private array $fusionConfiguration
    ) {
    }

    /**
     * @internal
     * @param array<int|string, mixed> $fusionConfiguration
     */
    public static function fromArray(array $fusionConfiguration): self
    {
        return new static($fusionConfiguration);
    }

    /**
     * @internal
     * @return array<int|string, mixed>
     */
    public function toArray(): array
    {
        return $this->fusionConfiguration;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * This holds the parsed Fusion Configuration and can be used to pass it to the Runtime via
 * {@see RuntimeFactory::createFromConfiguration()}
 * The contents of this DTO are internal and can change at any time!
 * @codeCoverageIgnore
 */
final class FusionConfiguration extends FusionConfiguration_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * @internal
     * @param array<int|string, mixed> $fusionConfiguration
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $fusionConfiguration in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Fusion/Classes/Core/FusionConfiguration.php
#