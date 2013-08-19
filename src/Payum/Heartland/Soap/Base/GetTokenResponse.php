<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetTokenResponse
{
    /**
     * GetTokenResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q34:GetTokenResponse
     *
     * @var GetTokenResponse
     */
    protected $GetTokenResult = null;

    /**
     * @param GetTokenResponse $getTokenResult
     *
     * @return GetTokenResponse
     */
    public function setGetTokenResult(GetTokenResponse $getTokenResult)
    {
        $this->GetTokenResult = $getTokenResult;
        return $this;
    }

    /**
     * @return GetTokenResponse
     */
    public function getGetTokenResult()
    {
        if (null === $this->GetTokenResult) {
            $this->GetTokenResult = new GetTokenResponse();
        }
        return $this->GetTokenResult;
    }
}
