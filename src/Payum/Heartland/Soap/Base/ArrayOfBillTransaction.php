<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfBillTransaction
{
    /**
     * BillTransaction
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:BillTransaction
     *
     * @var array(BillTransaction)
     */
    protected $BillTransaction = null;

    /**
     * Constructor.
     *
     * @param array(BillTransaction) $billTransaction
     */
    public function __construct(array(BillTransaction) $billTransaction = null)
    {
        $this->BillTransaction = $billTransaction;
    }

    /**
     * @param array(BillTransaction) $billTransaction
     *
     * @return ArrayOfBillTransaction
     */
    public function setBillTransaction(array(BillTransaction) $billTransaction)
    {
        $this->BillTransaction = $billTransaction;
        return $this;
    }

    /**
     * @return array(BillTransaction)
     */
    public function getBillTransaction()
    {
        if (null === $this->BillTransaction) {
            $this->BillTransaction = new array(BillTransaction)();
        }
        return $this->BillTransaction;
    }
}
