<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class CardToCharge
{
    /**
     * Amount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    public $Amount;

    /**
     * CardProcessingMethod
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:CardProcessingMethod
     *
     * @var CardProcessingMethod
     */
    public $CardProcessingMethod;

    /**
     * ExpectedFeeAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    public $ExpectedFeeAmount;
}
