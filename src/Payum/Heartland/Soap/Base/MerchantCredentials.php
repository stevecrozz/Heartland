<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class MerchantCredentials extends Credentials
{
    /**
     * MerchantName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $MerchantName = null;

    /**
     * Constructor.
     *
     * @param string $merchantName
     */
    public function __construct($merchantName = null)
    {
        $this->MerchantName = $merchantName;
    }

    /**
     * @param string $merchantName
     *
     * @return MerchantCredentials
     */
    public function setMerchantName($merchantName)
    {
        $this->MerchantName = $merchantName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantName()
    {
        return $this->MerchantName;
    }
}
