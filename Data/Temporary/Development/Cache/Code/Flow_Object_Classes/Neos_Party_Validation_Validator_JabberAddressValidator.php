<?php 
namespace Neos\Party\Validation\Validator;

/*
 * This file is part of the Neos.Party package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Validation\Validator\AbstractValidator;

/**
 * Validator for Jabber addresses.
 *
 * @api
 * @Flow\Scope("singleton")
 */
class JabberAddressValidator_Original extends AbstractValidator
{
    /**
     * Checks if the given value is a valid Jabber name.
     *
     * The Jabber address has the following structure: "name@jabber.org"
     * More information is found on:
     * http://tracker.phpbb.com/browse/PHPBB3-3832
     *
     * @param mixed $value The value that should be validated
     * @return void
     * @api
     */
    protected function isValid($value)
    {
        if (!is_string($value) || preg_match('#^[a-z0-9\.\-_\+]+?@(.*?\.)*?[a-z0-9\-_]+?\.[a-z]{2,4}(/.*)?$#i', $value) !== 1) {
            $this->addError('Please specify a valid Jabber address.', 1343235498);
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Validator for Jabber addresses.
 *
 * @api
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class JabberAddressValidator extends JabberAddressValidator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
        if (get_class($this) === 'Neos\Party\Validation\Validator\JabberAddressValidator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Party\Validation\Validator\JabberAddressValidator', $this);
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
        if (get_class($this) === 'Neos\Party\Validation\Validator\JabberAddressValidator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Party\Validation\Validator\JabberAddressValidator', $this);

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Party/Classes/Validation/Validator/JabberAddressValidator.php
#