<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://testing.heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class AddBillResponse
{
    /**
     * AddBillResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q12:Response
     *
     * @var Response
     */
    protected $AddBillResult = null;

    /**
     * @param Response $addBillResult
     *
     * @return AddBillResponse
     */
    public function setAddBillResult(Response $addBillResult)
    {
        $this->AddBillResult = $addBillResult;

        return $this;
    }

    /**
     * @return Response
     */
    public function getAddBillResult()
    {
        if (null === $this->AddBillResult) {
            $this->AddBillResult = new Response();
        }

        return $this->AddBillResult;
    }
}
