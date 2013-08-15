<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ACHAccountToCharge extends CardToCharge
{
    /**
     * AccountNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $AccountNumber;

    /**
     * AccountType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q1:ACHAccountType
     *
     * @var ACHAccountType
     */
    public $AccountType;

    /**
     * DepositType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q2:ACHDepositType
     *
     * @var ACHDepositType
     */
    public $DepositType;

    /**
     * DocumentID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $DocumentID;

    /**
     * InternalAccountNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $InternalAccountNumber;

    /**
     * PayorName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $PayorName;

    /**
     * RoutingNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:long
     *
     * @var int
     */
    public $RoutingNumber;

    /**
     * SubmitDate
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    public $SubmitDate;

    /**
     * TrackingNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:long
     *
     * @var int
     */
    public $TrackingNumber;
}
