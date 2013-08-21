<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class PreAuthorizePaymentResponse extends Response
{
    /**
     * PreAuthorizations
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfAuthorization
     *
     * @var ArrayOfAuthorization
     */
    protected $PreAuthorizations = null;

    /**
     * PreAuthorizedTransaction_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $PreAuthorizedTransaction_ID;

    /**
     * PreAuthorizePaymentResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q48:PreAuthorizePaymentResponse
     *
     * @var PreAuthorizePaymentResponse
     */
    protected $PreAuthorizePaymentResult = null;

    /**
     * @param ArrayOfAuthorization $preAuthorizations
     *
     * @return PreAuthorizePaymentResponse
     */
    public function setPreAuthorizations(ArrayOfAuthorization $preAuthorizations)
    {
        $this->PreAuthorizations = $preAuthorizations;
        return $this;
    }

    /**
     * @return ArrayOfAuthorization
     */
    public function getPreAuthorizations()
    {
        if (null === $this->PreAuthorizations) {
            $this->PreAuthorizations = new ArrayOfAuthorization();
        }
        return $this->PreAuthorizations;
    }

    /**
     * @param int $preAuthorizedTransaction_ID
     *
     * @return PreAuthorizePaymentResponse
     */
    public function setPreAuthorizedTransaction_ID($preAuthorizedTransaction_ID)
    {
        $this->PreAuthorizedTransaction_ID = $preAuthorizedTransaction_ID;
        return $this;
    }

    /**
     * @return int
     */
    public function getPreAuthorizedTransaction_ID()
    {
        return $this->PreAuthorizedTransaction_ID;
    }

    /**
     * @param PreAuthorizePaymentResponse $preAuthorizePaymentResult
     *
     * @return PreAuthorizePaymentResponse
     */
    public function setPreAuthorizePaymentResult(PreAuthorizePaymentResponse $preAuthorizePaymentResult)
    {
        $this->PreAuthorizePaymentResult = $preAuthorizePaymentResult;
        return $this;
    }

    /**
     * @return PreAuthorizePaymentResponse
     */
    public function getPreAuthorizePaymentResult()
    {
        if (null === $this->PreAuthorizePaymentResult) {
            $this->PreAuthorizePaymentResult = new PreAuthorizePaymentResponse();
        }
        return $this->PreAuthorizePaymentResult;
    }
}
