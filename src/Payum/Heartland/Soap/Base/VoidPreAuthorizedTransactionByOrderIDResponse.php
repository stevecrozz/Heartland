<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class VoidPreAuthorizedTransactionByOrderIDResponse
{
    /**
     * VoidPreAuthorizedTransactionByOrderIDResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q80:VoidPreAuthorizedTransactionResponse
     *
     * @var VoidPreAuthorizedTransactionResponse
     */
    protected $VoidPreAuthorizedTransactionByOrderIDResult = null;

    /**
     * @param VoidPreAuthorizedTransactionResponse $voidPreAuthorizedTransactionByOrderIDResult
     *
     * @return VoidPreAuthorizedTransactionByOrderIDResponse
     */
    public function setVoidPreAuthorizedTransactionByOrderIDResult($voidPreAuthorizedTransactionByOrderIDResult)
    {
        $this->VoidPreAuthorizedTransactionByOrderIDResult = $voidPreAuthorizedTransactionByOrderIDResult;

        return $this;
    }

    /**
     * @return VoidPreAuthorizedTransactionResponse
     */
    public function getVoidPreAuthorizedTransactionByOrderIDResult()
    {
        return $this->VoidPreAuthorizedTransactionByOrderIDResult;
    }
}
