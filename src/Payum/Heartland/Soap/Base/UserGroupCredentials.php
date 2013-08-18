<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class UserGroupCredentials extends Credentials
{
    /**
     * UserGroupName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $UserGroupName = null;

    /**
     * Constructor.
     *
     * @param string $userGroupName
     */
    public function __construct($userGroupName = null)
    {
        $this->UserGroupName = $userGroupName;
    }

    /**
     * @param string $userGroupName
     *
     * @return UserGroupCredentials
     */
    public function setUserGroupName($userGroupName)
    {
        $this->UserGroupName = $userGroupName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserGroupName()
    {
        return $this->UserGroupName;
    }
}
