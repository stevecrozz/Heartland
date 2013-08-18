<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class MakeBlindPaymentResponse
{
    /**
     * MakeBlindPaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q24:MakePaymentResponse
     *
     * @var MakePaymentResponse
     */
    protected $MakeBlindPaymentResult = null;

    /**
     * Constructor.
     *
     * @param MakePaymentResponse $makeBlindPaymentResult
     */
    public function __construct(MakePaymentResponse $makeBlindPaymentResult = null)
    {
        $this->MakeBlindPaymentResult = $makeBlindPaymentResult;
    }

    /**
     * @param MakePaymentResponse $makeBlindPaymentResult
     *
     * @return MakeBlindPaymentResponse
     */
    public function setMakeBlindPaymentResult(MakePaymentResponse $makeBlindPaymentResult)
    {
        $this->MakeBlindPaymentResult = $makeBlindPaymentResult;
        return $this;
    }

    /**
     * @return MakePaymentResponse
     */
    public function getMakeBlindPaymentResult()
    {
        if (null === $this->MakeBlindPaymentResult) {
            $this->MakeBlindPaymentResult = new MakePaymentResponse();
        }
        return $this->MakeBlindPaymentResult;
    }
}
