<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class AddPayment
{
    /**
     * AddPaymentRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q3:AddPaymentRequest
     *
     * @var AddPaymentRequest
     */
    protected $AddPaymentRequest = null;

    /**
     * @param AddPaymentRequest $addPaymentRequest
     *
     * @return AddPayment
     */
    public function setAddPaymentRequest($addPaymentRequest)
    {
        $this->AddPaymentRequest = $addPaymentRequest;

        return $this;
    }

    /**
     * @return AddPaymentRequest
     */
    public function getAddPaymentRequest()
    {
        return $this->AddPaymentRequest;
    }
}
