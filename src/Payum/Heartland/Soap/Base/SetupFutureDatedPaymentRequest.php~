<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class SetupFutureDatedPaymentRequest extends MerchantRequest
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
     * Constructor.
     *
     * @param ArrayOfACHAccountToCharge $aCHAccountsToCharge
     * @param ArrayOfBillTransaction $billTransactions
     * @param ArrayOfClearTextCardToCharge $clearTextCreditCardsToCharge
     * @param ArrayOfTokenToCharge $tokensToCharge
     * @param Transaction $transaction
     */
    public function __construct(ArrayOfACHAccountToCharge $aCHAccountsToCharge = null, ArrayOfBillTransaction $billTransactions = null, ArrayOfClearTextCardToCharge $clearTextCreditCardsToCharge = null, ArrayOfTokenToCharge $tokensToCharge = null, Transaction $transaction = null)
    {
        $this->ACHAccountsToCharge = $aCHAccountsToCharge;
        $this->BillTransactions = $billTransactions;
        $this->ClearTextCreditCardsToCharge = $clearTextCreditCardsToCharge;
        $this->TokensToCharge = $tokensToCharge;
        $this->Transaction = $transaction;
    }

    /**
     * @param ArrayOfACHAccountToCharge $aCHAccountsToCharge
     *
     * @return SetupFutureDatedPaymentRequest
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
     * @param ArrayOfBillTransaction $billTransactions
     *
     * @return SetupFutureDatedPaymentRequest
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
     * @return SetupFutureDatedPaymentRequest
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
     * @param ArrayOfTokenToCharge $tokensToCharge
     *
     * @return SetupFutureDatedPaymentRequest
     */
    public function setTokensToCharge(ArrayOfTokenToCharge $tokensToCharge)
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
     * @return SetupFutureDatedPaymentRequest
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
