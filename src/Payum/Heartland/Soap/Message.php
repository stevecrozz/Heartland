<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class Message
{
    /**
     * Code
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $Code;

    /**
     * Level
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:MessageLevels
     *
     * @var MessageLevels
     */
    public $Level;

    /**
     * MessageDescription
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $MessageDescription;
}