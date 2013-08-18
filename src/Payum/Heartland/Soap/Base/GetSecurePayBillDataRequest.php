<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class GetSecurePayBillDataRequest extends MerchantRequest
{
    /**
     * GUID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $GUID = null;

    /**
     * Constructor.
     *
     * @param string $gUID
     */
    public function __construct($gUID = null)
    {
        $this->GUID = $gUID;
    }

    /**
     * @param string $gUID
     *
     * @return GetSecurePayBillDataRequest
     */
    public function setGUID($gUID)
    {
        $this->GUID = $gUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getGUID()
    {
        return $this->GUID;
    }
}
