<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class DisburseFunds
{
    /**
     * DisburseFundsRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q55:DisburseFundsRequest
     *
     * @var DisburseFundsRequest
     */
    protected $DisburseFundsRequest = null;

    /**
     * Constructor.
     *
     * @param DisburseFundsRequest $disburseFundsRequest
     */
    public function __construct(DisburseFundsRequest $disburseFundsRequest = null)
    {
        $this->DisburseFundsRequest = $disburseFundsRequest;
    }

    /**
     * @param DisburseFundsRequest $disburseFundsRequest
     *
     * @return DisburseFunds
     */
    public function setDisburseFundsRequest(DisburseFundsRequest $disburseFundsRequest)
    {
        $this->DisburseFundsRequest = $disburseFundsRequest;
        return $this;
    }

    /**
     * @return DisburseFundsRequest
     */
    public function getDisburseFundsRequest()
    {
        if (null === $this->DisburseFundsRequest) {
            $this->DisburseFundsRequest = new DisburseFundsRequest();
        }
        return $this->DisburseFundsRequest;
    }
}
