<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class PreAuthorizePaymentRequest extends MerchantRequest
{
    /**
     * AESCreditCardToAuthorize
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:AESCardToCharge
     *
     * @var AESCardToCharge
     */
    protected $AESCreditCardToAuthorize = null;

    /**
     * Amount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $Amount;

    /**
     * ClearTextCreditCardToAuthorize
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ClearTextCardToCharge
     *
     * @var ClearTextCardToCharge
     */
    protected $ClearTextCreditCardToAuthorize = null;

    /**
     * E3CreditCardToAuthorize
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:E3CardToCharge
     *
     * @var E3CardToCharge
     */
    protected $E3CreditCardToAuthorize = null;

    /**
     * FeeAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $FeeAmount = null;

    /**
     * Constructor.
     *
     * @param float $amount
     * @param AESCardToCharge $aESCreditCardToAuthorize
     * @param ClearTextCardToCharge $clearTextCreditCardToAuthorize
     * @param E3CardToCharge $e3CreditCardToAuthorize
     * @param float $feeAmount
     */
    public function __construct($amount, AESCardToCharge $aESCreditCardToAuthorize = null, ClearTextCardToCharge $clearTextCreditCardToAuthorize = null, E3CardToCharge $e3CreditCardToAuthorize = null, $feeAmount = null)
    {
        $this->Amount = $amount;
        $this->AESCreditCardToAuthorize = $aESCreditCardToAuthorize;
        $this->ClearTextCreditCardToAuthorize = $clearTextCreditCardToAuthorize;
        $this->E3CreditCardToAuthorize = $e3CreditCardToAuthorize;
        $this->FeeAmount = $feeAmount;
    }

    /**
     * @param AESCardToCharge $aESCreditCardToAuthorize
     *
     * @return PreAuthorizePaymentRequest
     */
    public function setAESCreditCardToAuthorize(AESCardToCharge $aESCreditCardToAuthorize)
    {
        $this->AESCreditCardToAuthorize = $aESCreditCardToAuthorize;
        return $this;
    }

    /**
     * @return AESCardToCharge
     */
    public function getAESCreditCardToAuthorize()
    {
        if (null === $this->AESCreditCardToAuthorize) {
            $this->AESCreditCardToAuthorize = new AESCardToCharge();
        }
        return $this->AESCreditCardToAuthorize;
    }

    /**
     * @param float $amount
     *
     * @return PreAuthorizePaymentRequest
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param ClearTextCardToCharge $clearTextCreditCardToAuthorize
     *
     * @return PreAuthorizePaymentRequest
     */
    public function setClearTextCreditCardToAuthorize(ClearTextCardToCharge $clearTextCreditCardToAuthorize)
    {
        $this->ClearTextCreditCardToAuthorize = $clearTextCreditCardToAuthorize;
        return $this;
    }

    /**
     * @return ClearTextCardToCharge
     */
    public function getClearTextCreditCardToAuthorize()
    {
        if (null === $this->ClearTextCreditCardToAuthorize) {
            $this->ClearTextCreditCardToAuthorize = new ClearTextCardToCharge();
        }
        return $this->ClearTextCreditCardToAuthorize;
    }

    /**
     * @param E3CardToCharge $e3CreditCardToAuthorize
     *
     * @return PreAuthorizePaymentRequest
     */
    public function setE3CreditCardToAuthorize(E3CardToCharge $e3CreditCardToAuthorize)
    {
        $this->E3CreditCardToAuthorize = $e3CreditCardToAuthorize;
        return $this;
    }

    /**
     * @return E3CardToCharge
     */
    public function getE3CreditCardToAuthorize()
    {
        if (null === $this->E3CreditCardToAuthorize) {
            $this->E3CreditCardToAuthorize = new E3CardToCharge();
        }
        return $this->E3CreditCardToAuthorize;
    }

    /**
     * @param float $feeAmount
     *
     * @return PreAuthorizePaymentRequest
     */
    public function setFeeAmount($feeAmount)
    {
        $this->FeeAmount = $feeAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getFeeAmount()
    {
        return $this->FeeAmount;
    }
}
