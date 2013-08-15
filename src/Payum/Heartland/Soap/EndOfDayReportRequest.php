<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class EndOfDayReportRequest extends MerchantRequest
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
     * EndDay
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $EndDay;

    /**
     * EndHour
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $EndHour;

    /**
     * EndMinute
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $EndMinute;

    /**
     * EndMonth
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $EndMonth;

    /**
     * EndYear
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $EndYear;

    /**
     * IncludePDFInResponse
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    public $IncludePDFInResponse;

    /**
     * SortBy
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Sortable
     *
     * @var Sortable
     */
    public $SortBy;

    /**
     * StartDay
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $StartDay;

    /**
     * StartHour
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $StartHour;

    /**
     * StartMinute
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $StartMinute;

    /**
     * StartMonth
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $StartMonth;

    /**
     * StartYear
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $StartYear;

    /**
     * TimeZone
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Timezone
     *
     * @var Timezone
     */
    public $TimeZone;
}
