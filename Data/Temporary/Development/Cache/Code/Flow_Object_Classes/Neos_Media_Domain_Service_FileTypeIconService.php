<?php 
namespace Neos\Media\Domain\Service;

/*
 * This file is part of the Neos.Media package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Media\Domain\Model\FileTypeIcon;

/**
 * Service that retrieves an icon for the file type of a given filename
 */
class FileTypeIconService_Original
{
    protected static $cache = [];

    /**
     * Returns an icon for a file type within given dimensions
     *
     * @param string $filename
     * @return array
     */
    public static function getIcon($filename): array
    {
        $fileExtention = self::extractFileExtension($filename);
        if (isset(self::$cache[$fileExtention])) {
            return self::$cache[$fileExtention];
        }

        $fileTypeIcon = new FileTypeIcon($fileExtention);

        self::$cache[$fileExtention] = [
            'src' => $fileTypeIcon->path(),
            'alt' => $fileTypeIcon->alt()
        ];

        return self::$cache[$fileExtention];
    }

    protected static function extractFileExtension(string $filename): string
    {
        $pathInfo = pathinfo($filename);
        return isset($pathInfo['extension']) ? $pathInfo['extension'] : 'blank';
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Service that retrieves an icon for the file type of a given filename
 * @codeCoverageIgnore
 */
class FileTypeIconService extends FileTypeIconService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Media/Classes/Domain/Service/FileTypeIconService.php
#