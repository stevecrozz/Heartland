<?php

namespace Payum\Heartland\Soap\Base;

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
     * @var ArrayOfACHAccountToCharge
     */
    protected $ACHAccountsToCharge = null;

    /**
     * AESCreditCardsToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfAESCardToCharge
     *
     * @var ArrayOfAESCardToCharge
     */
    protected $AESCreditCardsToCharge = null;

    /**
     * BillTransactions
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfBillTransaction
     *
     * @var ArrayOfBillTransaction
     */
    protected $BillTransactions = null;

    /**
     * ClearTextCreditCardsToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfClearTextCardToCharge
     *
     * @var ArrayOfClearTextCardToCharge
     */
    protected $ClearTextCreditCardsToCharge = null;

    /**
     * E3CreditCardsToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfE3CardToCharge
     *
     * @var ArrayOfE3CardToCharge
     */
    protected $E3CreditCardsToCharge = null;

    /**
     * E3DebitCardsWithPINToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfE3DebitCardWithPINToCharge
     *
     * @var ArrayOfE3DebitCardWithPINToCharge
     */
    protected $E3DebitCardsWithPINToCharge = null;

    /**
     * IncludeReceiptInResponse
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $IncludeReceiptInResponse;

    /**
     * TokensToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfTokenToCharge
     *
     * @var ArrayOfTokenToCharge
     */
    protected $TokensToCharge = null;

    /**
     * Transaction
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Transaction
     *
     * @var Transaction
     */
    protected $Transaction = null;

    /**
     * @param ArrayOfACHAccountToCharge $aCHAccountsToCharge
     *
     * @return MakePaymentRequest
     */
    public function setACHAccountsToCharge(ArrayOfACHAccountToCharge $aCHAccountsToCharge)
    {
        $this->ACHAccountsToCharge = $aCHAccountsToCharge;
        return $this;
    }

    /**
     * @return ArrayOfACHAccountToCharge
     */
    public function getACHAccountsToCharge()
    {
        if (null === $this->ACHAccountsToCharge) {
            $this->ACHAccountsToCharge = new ArrayOfACHAccountToCharge();
        }
        return $this->ACHAccountsToCharge;
    }

    /**
     * @param ArrayOfAESCardToCharge $aESCreditCardsToCharge
     *
     * @return MakePaymentRequest
     */
    public function setAESCreditCardsToCharge(ArrayOfAESCardToCharge $aESCreditCardsToCharge)
    {
        $this->AESCreditCardsToCharge = $aESCreditCardsToCharge;
        return $this;
    }

    /**
     * @return ArrayOfAESCardToCharge
     */
    public function getAESCreditCardsToCharge()
    {
        if (null === $this->AESCreditCardsToCharge) {
            $this->AESCreditCardsToCharge = new ArrayOfAESCardToCharge();
        }
        return $this->AESCreditCardsToCharge;
    }

    /**
     * @param ArrayOfBillTransaction $billTransactions
     *
     * @return MakePaymentRequest
     */
    public function setBillTransactions(ArrayOfBillTransaction $billTransactions)
    {
        $this->BillTransactions = $billTransactions;
        return $this;
    }

    /**
     * @return ArrayOfBillTransaction
     */
    public function getBillTransactions()
    {
        if (null === $this->BillTransactions) {
            $this->BillTransactions = new ArrayOfBillTransaction();
        }
        return $this->BillTransactions;
    }

    /**
     * @param ArrayOfClearTextCardToCharge $clearTextCreditCardsToCharge
     *
     * @return MakePaymentRequest
     */
    public function setClearTextCreditCardsToCharge(ArrayOfClearTextCardToCharge $clearTextCreditCardsToCharge)
    {
        $this->ClearTextCreditCardsToCharge = $clearTextCreditCardsToCharge;
        return $this;
    }

    /**
     * @return ArrayOfClearTextCardToCharge
     */
    public function getClearTextCreditCardsToCharge()
    {
        if (null === $this->ClearTextCreditCardsToCharge) {
            $this->ClearTextCreditCardsToCharge = new ArrayOfClearTextCardToCharge();
        }
        return $this->ClearTextCreditCardsToCharge;
    }

    /**
     * @param ArrayOfE3CardToCharge $e3CreditCardsToCharge
     *
     * @return MakePaymentRequest
     */
    public function setE3CreditCardsToCharge(ArrayOfE3CardToCharge $e3CreditCardsToCharge)
    {
        $this->E3CreditCardsToCharge = $e3CreditCardsToCharge;
        return $this;
    }

    /**
     * @return ArrayOfE3CardToCharge
     */
    public function getE3CreditCardsToCharge()
    {
        if (null === $this->E3CreditCardsToCharge) {
            $this->E3CreditCardsToCharge = new ArrayOfE3CardToCharge();
        }
        return $this->E3CreditCardsToCharge;
    }

    /**
     * @param ArrayOfE3DebitCardWithPINToCharge $e3DebitCardsWithPINToCharge
     *
     * @return MakePaymentRequest
     */
    public function setE3DebitCardsWithPINToCharge(ArrayOfE3DebitCardWithPINToCharge $e3DebitCardsWithPINToCharge)
    {
        $this->E3DebitCardsWithPINToCharge = $e3DebitCardsWithPINToCharge;
        return $this;
    }

    /**
     * @return ArrayOfE3DebitCardWithPINToCharge
     */
    public function getE3DebitCardsWithPINToCharge()
    {
        if (null === $this->E3DebitCardsWithPINToCharge) {
            $this->E3DebitCardsWithPINToCharge = new ArrayOfE3DebitCardWithPINToCharge();
        }
        return $this->E3DebitCardsWithPINToCharge;
    }

    /**
     * @param boolean $includeReceiptInResponse
     *
     * @return MakePaymentRequest
     */
    public function setIncludeReceiptInResponse($includeReceiptInResponse)
    {
        $this->IncludeReceiptInResponse = $includeReceiptInResponse;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeReceiptInResponse()
    {
        return $this->IncludeReceiptInResponse;
    }

    /**
     * @param ArrayOfTokenToCharge $tokensToCharge
     *
     * @return MakePaymentRequest
     */
    public function setTokensToCharge( $tokensToCharge)
    {
        $this->TokensToCharge = $tokensToCharge;
        return $this;
    }

    /**
     * @return ArrayOfTokenToCharge
     */
    public function getTokensToCharge()
    {
        if (null === $this->TokensToCharge) {
            $this->TokensToCharge = new ArrayOfTokenToCharge();
        }
        return $this->TokensToCharge;
    }

    /**
     * @param Transaction $transaction
     *
     * @return MakePaymentRequest
     */
    public function setTransaction(Transaction $transaction)
    {
        $this->Transaction = $transaction;
        return $this;
    }

    /**
     * @return Transaction
     */
    public function getTransaction()
    {
        if (null === $this->Transaction) {
            $this->Transaction = new Transaction();
        }
        return $this->Transaction;
    }
}
