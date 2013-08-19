<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetConvenienceFeeResponse
{
    /**
     * GetConvenienceFeeResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q32:GetConvenienceFeeResponse
     *
     * @var GetConvenienceFeeResponse
     */
    protected $GetConvenienceFeeResult = null;

    /**
     * @param GetConvenienceFeeResponse $getConvenienceFeeResult
     *
     * @return GetConvenienceFeeResponse
     */
    public function setGetConvenienceFeeResult(GetConvenienceFeeResponse $getConvenienceFeeResult)
    {
        $this->GetConvenienceFeeResult = $getConvenienceFeeResult;
        return $this;
    }

    /**
     * @return GetConvenienceFeeResponse
     */
    public function getGetConvenienceFeeResult()
    {
        if (null === $this->GetConvenienceFeeResult) {
            $this->GetConvenienceFeeResult = new GetConvenienceFeeResponse();
        }
        return $this->GetConvenienceFeeResult;
    }
}
