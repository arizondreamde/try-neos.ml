<?php 
namespace Neos\Flow\Validation\Validator;

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

/**
 * Validator for integers.
 *
 * @api
 * @Flow\Scope("singleton")
 */
class IntegerValidator_Original extends AbstractValidator
{
    /**
     * Checks if the given value is a valid integer.
     *
     * @param mixed $value The value that should be validated
     * @return void
     * @api
     */
    protected function isValid($value)
    {
        if (filter_var($value, FILTER_VALIDATE_INT) === false) {
            $this->addError('A valid integer number is expected.', 1221560494);
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Validator for integers.
 *
 * @api
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class IntegerValidator extends IntegerValidator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructs the validator and sets validation options
     *
     * @param array $options Options for the validator
     * @throws InvalidValidationOptionsException if unsupported options are found
     * @api
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (get_class($this) === 'Neos\Flow\Validation\Validator\IntegerValidator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Validation\Validator\IntegerValidator', $this);
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
  'acceptsEmptyValues' => 'boolean',
  'supportedOptions' => 'array',
  'options' => 'array',
  'resultStack' => 'array<Neos\\Error\\Messages\\Result>',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Validation\Validator\IntegerValidator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Validation\Validator\IntegerValidator', $this);

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /var/www/neos/Packages/Framework/Neos.Flow/Classes/Validation/Validator/IntegerValidator.php
#