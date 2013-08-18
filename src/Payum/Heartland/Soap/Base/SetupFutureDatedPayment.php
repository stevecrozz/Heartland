<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class SetupFutureDatedPayment
{
    /**
     * SetupFutureDatedPaymentRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q45:SetupFutureDatedPaymentRequest
     *
     * @var SetupFutureDatedPaymentRequest
     */
    protected $SetupFutureDatedPaymentRequest = null;

    /**
     * Constructor.
     *
     * @param SetupFutureDatedPaymentRequest $setupFutureDatedPaymentRequest
     */
    public function __construct(SetupFutureDatedPaymentRequest $setupFutureDatedPaymentRequest = null)
    {
        $this->SetupFutureDatedPaymentRequest = $setupFutureDatedPaymentRequest;
    }

    /**
     * @param SetupFutureDatedPaymentRequest $setupFutureDatedPaymentRequest
     *
     * @return SetupFutureDatedPayment
     */
    public function setSetupFutureDatedPaymentRequest(SetupFutureDatedPaymentRequest $setupFutureDatedPaymentRequest)
    {
        $this->SetupFutureDatedPaymentRequest = $setupFutureDatedPaymentRequest;
        return $this;
    }

    /**
     * @return SetupFutureDatedPaymentRequest
     */
    public function getSetupFutureDatedPaymentRequest()
    {
        if (null === $this->SetupFutureDatedPaymentRequest) {
            $this->SetupFutureDatedPaymentRequest = new SetupFutureDatedPaymentRequest();
        }
        return $this->SetupFutureDatedPaymentRequest;
    }
}
