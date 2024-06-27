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
 * Class Expression
 * @package Neos\Fusion\Afx\Parser\Expression
 */
class Expression_Original
{
    /**
     * @param Lexer $lexer
     * @return string
     * @throws AfxParserException
     */
    public static function parse(Lexer $lexer): string
    {
        $contents = '';
        $braceCount = 0;

        if ($lexer->isOpeningBrace()) {
            $lexer->consume();
        } else {
            throw new AfxParserException('Expression without braces', 1557860467);
        }

        while (true) {
            if ($lexer->isEnd()) {
                throw new AfxParserException(sprintf('Unfinished Expression "%s"', $contents), 1557860496);
            }

            if ($lexer->isOpeningBrace()) {
                $braceCount++;
            }

            if ($lexer->isClosingBrace()) {
                if ($braceCount === 0) {
                    $lexer->consume();
                    return $contents;
                }

                $braceCount--;
            }

            $contents .= $lexer->consume();
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Class Expression
 * @package Neos\Fusion\Afx\Parser\Expression
 * @codeCoverageIgnore
 */
class Expression extends Expression_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Fusion.Afx/Classes/Parser/Expression/Expression.php
#