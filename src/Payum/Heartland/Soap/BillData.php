<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class BillData
{
    /**
     * BillIdentifier
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:BillIdentifier
     *
     * @var BillIdentifier
     */
    public $BillIdentifier;

    /**
     * BillPresentment
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:BillPresentment
     *
     * @var BillPresentment
     */
    public $BillPresentment;

    /**
     * CustomerAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Address
     *
     * @var Address
     */
    public $CustomerAddress;

    /**
     * DataElements
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:BillDataElements
     *
     * @var BillDataElements
     */
    public $DataElements;

    /**
     * DueDate
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    public $DueDate;

    /**
     * ObligorEmailAddress
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $ObligorEmailAddress;

    /**
     * ObligorFirstName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $ObligorFirstName;

    /**
     * ObligorLastName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $ObligorLastName;

    /**
     * ObligorMiddleName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $ObligorMiddleName;

    /**
     * ObligorPhoneNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $ObligorPhoneNumber;

    /**
     * OptionalAmounts
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:OptionalBillAmounts
     *
     * @var OptionalBillAmounts
     */
    public $OptionalAmounts;
}
