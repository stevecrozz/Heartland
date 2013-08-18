<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class Credentials
{
    /**
     * ApplicationID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $ApplicationID = null;

    /**
     * Password
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $Password = null;

    /**
     * UserName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $UserName = null;

    /**
     * Constructor.
     *
     * @param int $applicationID
     * @param string $password
     * @param string $userName
     */
    public function __construct($applicationID = null, $password = null, $userName = null)
    {
        $this->ApplicationID = $applicationID;
        $this->Password = $password;
        $this->UserName = $userName;
    }

    /**
     * @param int $applicationID
     *
     * @return Credentials
     */
    public function setApplicationID($applicationID)
    {
        $this->ApplicationID = $applicationID;
        return $this;
    }

    /**
     * @return int
     */
    public function getApplicationID()
    {
        return $this->ApplicationID;
    }

    /**
     * @param string $password
     *
     * @return Credentials
     */
    public function setPassword($password)
    {
        $this->Password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $userName
     *
     * @return Credentials
     */
    public function setUserName($userName)
    {
        $this->UserName = $userName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }
}
