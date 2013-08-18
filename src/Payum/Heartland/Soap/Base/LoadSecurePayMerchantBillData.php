<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class LoadSecurePayMerchantBillData
{
    /**
     * request
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q37:LoadSecurePayMerchantBillDataRequest
     *
     * @var LoadSecurePayMerchantBillDataRequest
     */
    protected $request = null;

    /**
     * Constructor.
     *
     * @param LoadSecurePayMerchantBillDataRequest $request
     */
    public function __construct(LoadSecurePayMerchantBillDataRequest $request = null)
    {
        $this->request = $request;
    }

    /**
     * @param LoadSecurePayMerchantBillDataRequest $request
     *
     * @return LoadSecurePayMerchantBillData
     */
    public function setRequest(LoadSecurePayMerchantBillDataRequest $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * @return LoadSecurePayMerchantBillDataRequest
     */
    public function getRequest()
    {
        if (null === $this->request) {
            $this->request = new LoadSecurePayMerchantBillDataRequest();
        }
        return $this->request;
    }
}
