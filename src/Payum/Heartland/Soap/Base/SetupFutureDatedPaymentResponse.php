<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class SetupFutureDatedPaymentResponse
{
    /**
     * SetupFutureDatedPaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q46:SetupFutureDatedPaymentResponse
     *
     * @var SetupFutureDatedPaymentResponse
     */
    protected $SetupFutureDatedPaymentResult = null;

    /**
     * @param SetupFutureDatedPaymentResponse $setupFutureDatedPaymentResult
     *
     * @return SetupFutureDatedPaymentResponse
     */
    public function setSetupFutureDatedPaymentResult(SetupFutureDatedPaymentResponse $setupFutureDatedPaymentResult)
    {
        $this->SetupFutureDatedPaymentResult = $setupFutureDatedPaymentResult;
        return $this;
    }

    /**
     * @return SetupFutureDatedPaymentResponse
     */
    public function getSetupFutureDatedPaymentResult()
    {
        if (null === $this->SetupFutureDatedPaymentResult) {
            $this->SetupFutureDatedPaymentResult = new SetupFutureDatedPaymentResponse();
        }
        return $this->SetupFutureDatedPaymentResult;
    }
}
