<?php 
namespace Neos\Flow\Security\Authorization;

use Neos\Flow\Security\Authorization\Privilege\Parameter\PrivilegeParameterInterface;
use Neos\Flow\Security\Authorization\Privilege\PrivilegeInterface;

/**
 *
 */
class PrivilegePermissionResult_Original
{
    /**
     * @var int
     */
    protected $denies = 0;

    /**
     * @var int
     */
    protected $grants = 0;

    /**
     * @var int
     */
    protected $abstains = 0;

    /**
     * @var array
     */
    protected $effectivePrivilegeIdentifiersWithPermission = [];

    /**
     * PrivilegePermissionResult constructor.
     *
     * @param int $denies
     * @param int $grants
     * @param int $abstains
     */
    public function __construct(int $denies = 0, int $grants = 0, int $abstains = 0)
    {
        $this->denies = $denies;
        $this->grants = $grants;
        $this->abstains = $abstains;
    }

    /**
     * @param PrivilegeInterface $privilege
     * @return PrivilegePermissionResult
     */
    public function withPrivilege(PrivilegeInterface $privilege = null): PrivilegePermissionResult
    {
        $newResult = clone $this;
        if ($privilege === null) {
            return $newResult;
        }

        if ($privilege->isGranted()) {
            $newResult->grants++;
        }

        if ($privilege->isDenied()) {
            $newResult->denies++;
        }

        if ($privilege->isAbstained()) {
            $newResult->abstains++;
        }

        $parameterStrings = array_map(function (PrivilegeParameterInterface $parameter) {
            return sprintf('%s: "%s"', $parameter->getName(), $parameter->getValue());
        }, $privilege->getParameters());

        $privilegeName = $privilege->getPrivilegeTargetIdentifier() . ($parameterStrings !== [] ? ' (with parameters: ' . implode(', ', $parameterStrings) . ')' : '');
        $newResult->effectivePrivilegeIdentifiersWithPermission[] = sprintf('"%s": %s', $privilegeName, strtoupper($privilege->getPermission()));

        return $newResult;
    }

    /**
     * @return int
     */
    public function getDenies(): int
    {
        return $this->denies;
    }

    /**
     * @return int
     */
    public function getGrants(): int
    {
        return $this->grants;
    }

    /**
     * @return int
     */
    public function getAbstains(): int
    {
        return $this->abstains;
    }

    /**
     * @return array
     */
    public function getEffectivePrivilegeIdentifiersWithPermission(): array
    {
        return $this->effectivePrivilegeIdentifiersWithPermission;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 *
 * @codeCoverageIgnore
 */
class PrivilegePermissionResult extends PrivilegePermissionResult_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'denies' => 'integer',
  'grants' => 'integer',
  'abstains' => 'integer',
  'effectivePrivilegeIdentifiersWithPermission' => 'array',
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
# PathAndFilename: /var/www/neos/Packages/Framework/Neos.Flow/Classes/Security/Authorization/PrivilegePermissionResult.php
#