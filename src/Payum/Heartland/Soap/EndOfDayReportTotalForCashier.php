<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class EndOfDayReportTotalForCashier
{
    /**
     * Firstname
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $Firstname;

    /**
     * Lastname
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $Lastname;

    /**
     * RowID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $RowID;

    /**
     * Totals
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:EndOfDayReportTotals
     *
     * @var EndOfDayReportTotals
     */
    public $Totals;

    /**
     * Username
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $Username;
}
