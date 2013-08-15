<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class Authorization
{
    /**
     * AddToBatchReferenceNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $AddToBatchReferenceNumber;

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
     * AuthCode
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $AuthCode;

    /**
     * AuthorizationType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:AuthorizationType
     *
     * @var AuthorizationType
     */
    public $AuthorizationType;

    /**
     * Gateway
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Gateway
     *
     * @var Gateway
     */
    public $Gateway;

    /**
     * GatewayBatchID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $GatewayBatchID;

    /**
     * GatewayDescription
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $GatewayDescription;

    /**
     * MaskedAccountNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $MaskedAccountNumber;

    /**
     * MaskedRoutingNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $MaskedRoutingNumber;

    /**
     * PaymentMethod
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:PaymentMethod
     *
     * @var PaymentMethod
     */
    public $PaymentMethod;

    /**
     * ReferenceAuthorizationID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $ReferenceAuthorizationID;

    /**
     * ReferenceNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $ReferenceNumber;
}
