<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetReversalTypeResponse
{
    /**
     * GetReversalTypeResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q30:GetReversalTypeResponse
     *
     * @var GetReversalTypeResponse
     */
    protected $GetReversalTypeResult = null;

    /**
     * @param GetReversalTypeResponse $getReversalTypeResult
     *
     * @return GetReversalTypeResponse
     */
    public function setGetReversalTypeResult(GetReversalTypeResponse $getReversalTypeResult)
    {
        $this->GetReversalTypeResult = $getReversalTypeResult;
        return $this;
    }

    /**
     * @return GetReversalTypeResponse
     */
    public function getGetReversalTypeResult()
    {
        if (null === $this->GetReversalTypeResult) {
            $this->GetReversalTypeResult = new GetReversalTypeResponse();
        }
        return $this->GetReversalTypeResult;
    }
}
