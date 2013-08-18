<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfBillTransactionRecord
{
    /**
     * BillTransactionRecord
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:BillTransactionRecord
     *
     * @var array(BillTransactionRecord)
     */
    protected $BillTransactionRecord = null;

    /**
     * Constructor.
     *
     * @param array(BillTransactionRecord) $billTransactionRecord
     */
    public function __construct(array(BillTransactionRecord) $billTransactionRecord = null)
    {
        $this->BillTransactionRecord = $billTransactionRecord;
    }

    /**
     * @param array(BillTransactionRecord) $billTransactionRecord
     *
     * @return ArrayOfBillTransactionRecord
     */
    public function setBillTransactionRecord(array(BillTransactionRecord) $billTransactionRecord)
    {
        $this->BillTransactionRecord = $billTransactionRecord;
        return $this;
    }

    /**
     * @return array(BillTransactionRecord)
     */
    public function getBillTransactionRecord()
    {
        if (null === $this->BillTransactionRecord) {
            $this->BillTransactionRecord = new array(BillTransactionRecord)();
        }
        return $this->BillTransactionRecord;
    }
}
