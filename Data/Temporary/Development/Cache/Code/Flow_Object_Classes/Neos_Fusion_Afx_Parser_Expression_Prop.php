<?php 
declare(strict_types=1);

namespace Neos\Fusion\Afx\Parser\Expression;

/*
 * This file is part of the Neos.Fusion.Afx package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Fusion\Afx\Parser\AfxParserException;
use Neos\Fusion\Afx\Parser\Lexer;

/**
 * Class Prop
 * @package Neos\Fusion\Afx\Parser\Expression
 */
class Prop_Original
{
    /**
     * @param Lexer $lexer
     * @return array
     * @throws AfxParserException
     */
    public static function parse(Lexer $lexer): array
    {
        $identifier = Identifier::parse($lexer);

        if ($lexer->isEqualSign()) {
            $lexer->consume();
            switch (true) {
                case $lexer->isSingleQuote():
                case $lexer->isDoubleQuote():
                    $value = [
                        'type' => 'string',
                        'payload' => StringLiteral::parse($lexer),
                        'identifier' => $identifier
                    ];
                    break;

                case $lexer->isOpeningBrace():
                    $value = [
                        'type' => 'expression',
                        'payload' => Expression::parse($lexer),
                        'identifier' => $identifier
                    ];
                    break;
                default:
                    throw new AfxParserException(sprintf(
                        'Prop-assignment "%s" was not followed by quotes or braces',
                        $identifier
                    ), 1557860545);
            }
        } elseif ($lexer->isWhiteSpace() || $lexer->isForwardSlash() || $lexer->isClosingBracket()) {
            $value = [
                'type' => 'boolean',
                'payload' => true,
                'identifier' => $identifier
            ];
        } else {
            throw new AfxParserException(sprintf('Prop identifier "%s" is neither assignment nor boolean', $identifier), 1557860552);
        }

        return $value;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Class Prop
 * @package Neos\Fusion\Afx\Parser\Expression
 * @codeCoverageIgnore
 */
class Prop extends Prop_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


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
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Fusion.Afx/Classes/Parser/Expression/Prop.php
#