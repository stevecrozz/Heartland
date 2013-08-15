<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class MakePaymentRequest extends MerchantRequest
{
    /**
     * ACHAccountsToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfACHAccountToCharge
     *
     * @var array<ACHAccountToCharge>
     */
    public $ACHAccountsToCharge;

    /**
     * AESCreditCardsToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfAESCardToCharge
     *
     * @var array<AESCardToCharge>
     */
    public $AESCreditCardsToCharge;

    /**
     * BillTransactions
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfBillTransaction
     *
     * @var array<BillTransaction>
     */
    public $BillTransactions;

    /**
     * ClearTextCreditCardsToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfClearTextCardToCharge
     *
     * @var array<ClearTextCardToCharge>
     */
    public $ClearTextCreditCardsToCharge;

    /**
     * E3CreditCardsToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfE3CardToCharge
     *
     * @var array<E3CardToCharge>
     */
    public $E3CreditCardsToCharge;

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
     * IncludeReceiptInResponse
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    public $IncludeReceiptInResponse;

    /**
     * TokensToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfTokenToCharge
     *
     * @var array<TokenToCharge>
     */
    public $TokensToCharge;

    /**
     * Transaction
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Transaction
     *
     * @var Transaction
     */
    public $Transaction;
}
