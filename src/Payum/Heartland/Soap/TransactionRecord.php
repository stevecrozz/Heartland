<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class TransactionRecord extends Transaction
{
    /**
     * Application
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Application
     *
     * @var Application
     */
    public $Application;

    /**
     * BillTransactions
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfBillTransactionRecord
     *
     * @var array<BillTransactionRecord>
     */
    public $BillTransactions;

    /**
     * NetAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    public $NetAmount;

    /**
     * NetFeeAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    public $NetFeeAmount;

    /**
     * OriginalTransactionID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $OriginalTransactionID;

    /**
     * ReversalCode
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ReversalCode
     *
     * @var ReversalCode
     */
    public $ReversalCode;

    /**
     * TransactionID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $TransactionID;

    /**
     * TransactionType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:TransactionType
     *
     * @var TransactionType
     */
    public $TransactionType;

    /**
     * UserName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $UserName;
}
