<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetSecurePayBillDataResponse
{
    /**
     * GetSecurePayBillDataResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q42:GetSecurePayBillDataResponse
     *
     * @var GetSecurePayBillDataResponse
     */
    protected $GetSecurePayBillDataResult = null;

    /**
     * @param GetSecurePayBillDataResponse $getSecurePayBillDataResult
     *
     * @return GetSecurePayBillDataResponse
     */
    public function setGetSecurePayBillDataResult(GetSecurePayBillDataResponse $getSecurePayBillDataResult)
    {
        $this->GetSecurePayBillDataResult = $getSecurePayBillDataResult;
        return $this;
    }

    /**
     * @return GetSecurePayBillDataResponse
     */
    public function getGetSecurePayBillDataResult()
    {
        if (null === $this->GetSecurePayBillDataResult) {
            $this->GetSecurePayBillDataResult = new GetSecurePayBillDataResponse();
        }
        return $this->GetSecurePayBillDataResult;
    }
}
