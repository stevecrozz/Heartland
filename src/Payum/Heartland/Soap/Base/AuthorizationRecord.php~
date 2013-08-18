<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class AuthorizationRecord extends Authorization
{
    /**
     * AuthorizationID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $AuthorizationID;

    /**
     * NetAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $NetAmount;

    /**
     * OriginalAuthorizationID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $OriginalAuthorizationID = null;

    /**
     * Constructor.
     *
     * @param int $authorizationID
     * @param float $netAmount
     * @param int $originalAuthorizationID
     */
    public function __construct($authorizationID, $netAmount, $originalAuthorizationID = null)
    {
        $this->AuthorizationID = $authorizationID;
        $this->NetAmount = $netAmount;
        $this->OriginalAuthorizationID = $originalAuthorizationID;
    }

    /**
     * @param int $authorizationID
     *
     * @return AuthorizationRecord
     */
    public function setAuthorizationID($authorizationID)
    {
        $this->AuthorizationID = $authorizationID;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthorizationID()
    {
        return $this->AuthorizationID;
    }

    /**
     * @param float $netAmount
     *
     * @return AuthorizationRecord
     */
    public function setNetAmount($netAmount)
    {
        $this->NetAmount = $netAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }

    /**
     * @param int $originalAuthorizationID
     *
     * @return AuthorizationRecord
     */
    public function setOriginalAuthorizationID($originalAuthorizationID)
    {
        $this->OriginalAuthorizationID = $originalAuthorizationID;
        return $this;
    }

    /**
     * @return int
     */
    public function getOriginalAuthorizationID()
    {
        return $this->OriginalAuthorizationID;
    }
}
