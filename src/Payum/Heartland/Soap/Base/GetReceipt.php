<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class GetReceipt
{
    /**
     * GetReceiptRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q27:GetReceiptRequest
     *
     * @var GetReceiptRequest
     */
    protected $GetReceiptRequest = null;

    /**
     * Constructor.
     *
     * @param GetReceiptRequest $getReceiptRequest
     */
    public function __construct(GetReceiptRequest $getReceiptRequest = null)
    {
        $this->GetReceiptRequest = $getReceiptRequest;
    }

    /**
     * @param GetReceiptRequest $getReceiptRequest
     *
     * @return GetReceipt
     */
    public function setGetReceiptRequest(GetReceiptRequest $getReceiptRequest)
    {
        $this->GetReceiptRequest = $getReceiptRequest;
        return $this;
    }

    /**
     * @return GetReceiptRequest
     */
    public function getGetReceiptRequest()
    {
        if (null === $this->GetReceiptRequest) {
            $this->GetReceiptRequest = new GetReceiptRequest();
        }
        return $this->GetReceiptRequest;
    }
}
