<?php 
declare(strict_types=1);

namespace Neos\Media\Domain\ValueObject\Configuration;

/*
 * This file is part of the Neos.Media package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

class Variant_Original
{
    /**
     * @var string
     */
    private $identifier;

    /**
     * @var Label
     */
    private $label;

    /**
     * @var string
     */
    private $description;

    /**
     * @var array
     */
    private $adjustments = [];

    /**
     * @param string $identifier
     * @param Label $label
     * @param string $description
     */
    public function __construct(string $identifier, Label $label, string $description = null)
    {
        $this->setIdentifier($identifier);
        $this->label = $label;
        $this->description = $description;
    }

    /**
     * @param string $identifier
     * @param array $configuration
     * @return Variant
     */
    public static function fromConfiguration(string $identifier, array $configuration): Variant
    {
        $variant = new static(
            $identifier,
            new Label($configuration['label']),
            $configuration['description'] ?? null
        );

        if (isset($configuration['adjustments'])) {
            foreach ($configuration['adjustments'] as $adjustmentIdentifier => $adjustmentConfiguration) {
                $variant->adjustments[$adjustmentIdentifier] = Adjustment::fromConfiguration($adjustmentIdentifier, $adjustmentConfiguration);
            }
        }

        return $variant;
    }

    /**
     * @param string $identifier
     */
    private function setIdentifier(string $identifier): void
    {
        if (preg_match('/^[a-zA-Z0-9-]+$/', $identifier) !== 1) {
            throw new \InvalidArgumentException(sprintf('Invalid variant identifier "%s".', $identifier), 1546958006);
        }
        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function identifier(): string
    {
        return $this->identifier;
    }

    /**
     * @return Label
     */
    public function label(): Label
    {
        return $this->label;
    }

    /**
     * @return Label
     */
    public function description(): ?string
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function adjustments(): array
    {
        return $this->adjustments;
    }
}

#
# Start of Flow generated Proxy code
#

final class Variant extends Variant_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * @param string $identifier
     * @param Label $label
     * @param string $description
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(1, $arguments)) $arguments[1] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\ValueObject\Configuration\Label');
        if (!array_key_exists(2, $arguments)) $arguments[2] = NULL;
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $identifier in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $label in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'identifier' => 'string',
  'label' => 'Neos\\Media\\Domain\\ValueObject\\Configuration\\Label',
  'description' => 'string',
  'adjustments' => 'array',
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
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Media/Classes/Domain/ValueObject/Configuration/Variant.php
#