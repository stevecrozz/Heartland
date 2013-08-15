<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ActivateMachineRequest extends AuthenticateRequest
{
    /**
     * ActivationKey
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $ActivationKey;

    /**
     * MachineName
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $MachineName;
}
