<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ReversePaymentRequest extends MerchantRequest
{
    /**
     * BaseAmountToRefund
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    public $BaseAmountToRefund;

    /**
     * E3DebitCardsWithPINToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfE3DebitCardWithPINToCharge
     *
     * @var array<E3DebitCardWithPINToCharge>
     */
    public $E3DebitCardsWithPINToCharge;

    /**
     * ExpectedFeeAmountToRefund
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    public $ExpectedFeeAmountToRefund;

    /**
     * IncludeReceiptInResponse
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    public $IncludeReceiptInResponse;

    /**
     * Transaction_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $Transaction_ID;
}
