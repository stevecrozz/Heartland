<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class AddBillRequest extends MerchantRequest
{
    /**
     * Bill
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Bill
     *
     * @var Bill
     */
    public $Bill;

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