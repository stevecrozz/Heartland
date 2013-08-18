<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetToken
{
    /**
     * GetTokenRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q33:GetTokenRequest
     *
     * @var GetTokenRequest
     */
    protected $GetTokenRequest = null;

    /**
     * Constructor.
     *
     * @param GetTokenRequest $getTokenRequest
     */
    public function __construct(GetTokenRequest $getTokenRequest = null)
    {
        $this->GetTokenRequest = $getTokenRequest;
    }

    /**
     * @param GetTokenRequest $getTokenRequest
     *
     * @return GetToken
     */
    public function setGetTokenRequest(GetTokenRequest $getTokenRequest)
    {
        $this->GetTokenRequest = $getTokenRequest;
        return $this;
    }

    /**
     * @return GetTokenRequest
     */
    public function getGetTokenRequest()
    {
        if (null === $this->GetTokenRequest) {
            $this->GetTokenRequest = new GetTokenRequest();
        }
        return $this->GetTokenRequest;
    }
}
