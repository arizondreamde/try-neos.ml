<?php 
namespace Neos\Flow\Cli;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

/**
 * Represents a CommandArgumentDefinition
 *
 */
class CommandArgumentDefinition_Original
{
    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var boolean
     */
    protected $required = false;

    /**
     * @var string
     */
    protected $description = '';

    /**
     * Constructor
     *
     * @param string $name name of the command argument (= parameter name)
     * @param boolean $required defines whether this argument is required or optional
     * @param string $description description of the argument
     */
    public function __construct(string $name, bool $required, string $description)
    {
        $this->name = $name;
        $this->required = $required;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns the lowercased name with dashes as word separator
     *
     * @return string
     */
    public function getDashedName(): string
    {
        $dashedName = ucfirst($this->name);
        $dashedName = preg_replace('/([A-Z][a-z0-9]+)/', '$1-', $dashedName);
        return '--' . strtolower(substr($dashedName, 0, -1));
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->required;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Represents a CommandArgumentDefinition
 *
 * @codeCoverageIgnore
 */
class CommandArgumentDefinition extends CommandArgumentDefinition_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor
     *
     * @param string $name name of the command argument (= parameter name)
     * @param boolean $required defines whether this argument is required or optional
     * @param string $description description of the argument
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $name in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $required in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $description in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'name' => 'string',
  'required' => 'boolean',
  'description' => 'string',
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
# PathAndFilename: /var/www/neos/Packages/Framework/Neos.Flow/Classes/Cli/CommandArgumentDefinition.php
#