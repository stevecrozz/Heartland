<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class ReversePaymentResponse
{
    /**
     * ReversePaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q26:ReversePaymentResponse
     *
     * @var ReversePaymentResponse
     */
    protected $ReversePaymentResult = null;

    /**
     * @param ReversePaymentResponse $reversePaymentResult
     *
     * @return ReversePaymentResponse
     */
    public function setReversePaymentResult(ReversePaymentResponse $reversePaymentResult)
    {
        $this->ReversePaymentResult = $reversePaymentResult;
        return $this;
    }

    /**
     * @return ReversePaymentResponse
     */
    public function getReversePaymentResult()
    {
        if (null === $this->ReversePaymentResult) {
            $this->ReversePaymentResult = new ReversePaymentResponse();
        }
        return $this->ReversePaymentResult;
    }
}
