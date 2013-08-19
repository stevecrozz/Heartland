<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class DisburseFundsResponse
{
    /**
     * DisburseFundsResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q56:DisburseFundsResponse
     *
     * @var DisburseFundsResponse
     */
    protected $DisburseFundsResult = null;

    /**
     * @param DisburseFundsResponse $disburseFundsResult
     *
     * @return DisburseFundsResponse
     */
    public function setDisburseFundsResult(DisburseFundsResponse $disburseFundsResult)
    {
        $this->DisburseFundsResult = $disburseFundsResult;
        return $this;
    }

    /**
     * @return DisburseFundsResponse
     */
    public function getDisburseFundsResult()
    {
        if (null === $this->DisburseFundsResult) {
            $this->DisburseFundsResult = new DisburseFundsResponse();
        }
        return $this->DisburseFundsResult;
    }
}
