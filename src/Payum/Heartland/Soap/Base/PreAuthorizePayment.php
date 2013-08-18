<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class PreAuthorizePayment
{
    /**
     * PreAuthorizePaymentRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q47:PreAuthorizePaymentRequest
     *
     * @var PreAuthorizePaymentRequest
     */
    protected $PreAuthorizePaymentRequest = null;

    /**
     * Constructor.
     *
     * @param PreAuthorizePaymentRequest $preAuthorizePaymentRequest
     */
    public function __construct(PreAuthorizePaymentRequest $preAuthorizePaymentRequest = null)
    {
        $this->PreAuthorizePaymentRequest = $preAuthorizePaymentRequest;
    }

    /**
     * @param PreAuthorizePaymentRequest $preAuthorizePaymentRequest
     *
     * @return PreAuthorizePayment
     */
    public function setPreAuthorizePaymentRequest(PreAuthorizePaymentRequest $preAuthorizePaymentRequest)
    {
        $this->PreAuthorizePaymentRequest = $preAuthorizePaymentRequest;
        return $this;
    }

    /**
     * @return PreAuthorizePaymentRequest
     */
    public function getPreAuthorizePaymentRequest()
    {
        if (null === $this->PreAuthorizePaymentRequest) {
            $this->PreAuthorizePaymentRequest = new PreAuthorizePaymentRequest();
        }
        return $this->PreAuthorizePaymentRequest;
    }
}
