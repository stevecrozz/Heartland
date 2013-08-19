<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class MakePaymentResponse
{
    /**
     * MakePaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q22:MakePaymentResponse
     *
     * @var MakePaymentResponse
     */
    protected $MakePaymentResult = null;

    /**
     * @param MakePaymentResponse $makePaymentResult
     *
     * @return MakePaymentResponse
     */
    public function setMakePaymentResult(MakePaymentResponse $makePaymentResult)
    {
        $this->MakePaymentResult = $makePaymentResult;
        return $this;
    }

    /**
     * @return MakePaymentResponse
     */
    public function getMakePaymentResult()
    {
        if (null === $this->MakePaymentResult) {
            $this->MakePaymentResult = new MakePaymentResponse();
        }
        return $this->MakePaymentResult;
    }
}
