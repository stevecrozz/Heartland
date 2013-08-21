<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetReceiptResponse extends GetFileResponse
{
    /**
     * GetReceiptResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q28:GetReceiptResponse
     *
     * @var GetReceiptResponse
     */
    protected $GetReceiptResult = null;

    /**
     * @param GetReceiptResponse $getReceiptResult
     *
     * @return GetReceiptResponse
     */
    public function setGetReceiptResult($getReceiptResult)
    {
        $this->GetReceiptResult = $getReceiptResult;
        return $this;
    }

    /**
     * @return GetReceiptResponse
     */
    public function getGetReceiptResult()
    {
        return $this->GetReceiptResult;
    }
}
