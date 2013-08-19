<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class AddSignatureRequest extends MerchantRequest
{
    /**
     * SignatureImageInBase64
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $SignatureImageInBase64 = null;

    /**
     * Transaction_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $Transaction_ID;

    /**
     * @param string $signatureImageInBase64
     *
     * @return AddSignatureRequest
     */
    public function setSignatureImageInBase64($signatureImageInBase64)
    {
        $this->SignatureImageInBase64 = $signatureImageInBase64;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureImageInBase64()
    {
        return $this->SignatureImageInBase64;
    }

    /**
     * @param int $transaction_ID
     *
     * @return AddSignatureRequest
     */
    public function setTransaction_ID($transaction_ID)
    {
        $this->Transaction_ID = $transaction_ID;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransaction_ID()
    {
        return $this->Transaction_ID;
    }
}
