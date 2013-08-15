<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class Response
{
    /**
     * Messages
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfMessage
     *
     * @var array<Message>
     */
    public $Messages;

    /**
     * isSuccessful
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    public $isSuccessful;
}
