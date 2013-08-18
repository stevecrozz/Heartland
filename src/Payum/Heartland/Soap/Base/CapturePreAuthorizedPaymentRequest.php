<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class CapturePreAuthorizedPaymentRequest extends MerchantRequest
{
    /**
     * BillTransactions
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfBillTransaction
     *
     * @var ArrayOfBillTransaction
     */
    protected $BillTransactions = null;

    /**
     * IncludeReceiptInResponse
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $IncludeReceiptInResponse;

    /**
     * Transaction
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Transaction
     *
     * @var Transaction
     */
    protected $Transaction = null;

    /**
     * TransactionAuthorization_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $TransactionAuthorization_ID;

    /**
     * Constructor.
     *
     * @param boolean $includeReceiptInResponse
     * @param int $transactionAuthorization_ID
     * @param ArrayOfBillTransaction $billTransactions
     * @param Transaction $transaction
     */
    public function __construct($includeReceiptInResponse, $transactionAuthorization_ID, ArrayOfBillTransaction $billTransactions = null, Transaction $transaction = null)
    {
        $this->IncludeReceiptInResponse = $includeReceiptInResponse;
        $this->TransactionAuthorization_ID = $transactionAuthorization_ID;
        $this->BillTransactions = $billTransactions;
        $this->Transaction = $transaction;
    }

    /**
     * @param ArrayOfBillTransaction $billTransactions
     *
     * @return CapturePreAuthorizedPaymentRequest
     */
    public function setBillTransactions(ArrayOfBillTransaction $billTransactions)
    {
        $this->BillTransactions = $billTransactions;
        return $this;
    }

    /**
     * @return ArrayOfBillTransaction
     */
    public function getBillTransactions()
    {
        if (null === $this->BillTransactions) {
            $this->BillTransactions = new ArrayOfBillTransaction();
        }
        return $this->BillTransactions;
    }

    /**
     * @param boolean $includeReceiptInResponse
     *
     * @return CapturePreAuthorizedPaymentRequest
     */
    public function setIncludeReceiptInResponse($includeReceiptInResponse)
    {
        $this->IncludeReceiptInResponse = $includeReceiptInResponse;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeReceiptInResponse()
    {
        return $this->IncludeReceiptInResponse;
    }

    /**
     * @param Transaction $transaction
     *
     * @return CapturePreAuthorizedPaymentRequest
     */
    public function setTransaction(Transaction $transaction)
    {
        $this->Transaction = $transaction;
        return $this;
    }

    /**
     * @return Transaction
     */
    public function getTransaction()
    {
        if (null === $this->Transaction) {
            $this->Transaction = new Transaction();
        }
        return $this->Transaction;
    }

    /**
     * @param int $transactionAuthorization_ID
     *
     * @return CapturePreAuthorizedPaymentRequest
     */
    public function setTransactionAuthorization_ID($transactionAuthorization_ID)
    {
        $this->TransactionAuthorization_ID = $transactionAuthorization_ID;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransactionAuthorization_ID()
    {
        return $this->TransactionAuthorization_ID;
    }
}
