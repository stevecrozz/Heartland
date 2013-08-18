<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class MerchantRequest
{
    /**
     * Credential
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:MerchantCredentials
     *
     * @var MerchantCredentials
     */
    protected $Credential = null;

    /**
     * Constructor.
     *
     * @param MerchantCredentials $credential
     */
    public function __construct(MerchantCredentials $credential = null)
    {
        $this->Credential = $credential;
    }

    /**
     * @param MerchantCredentials $credential
     *
     * @return MerchantRequest
     */
    public function setCredential(MerchantCredentials $credential)
    {
        $this->Credential = $credential;
        return $this;
    }

    /**
     * @return MerchantCredentials
     */
    public function getCredential()
    {
        if (null === $this->Credential) {
            $this->Credential = new MerchantCredentials();
        }
        return $this->Credential;
    }
}
