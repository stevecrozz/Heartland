<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class GetConvenienceFeeRequest extends MerchantRequest
{
    /**
     * BaseAmount
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:decimal
     *
     * @var float
     */
    protected $BaseAmount;

    /**
     * CardNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $CardNumber = null;

    /**
     * CardProcessingMethod
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:CardProcessingMethod
     *
     * @var CardProcessingMethod
     */
    protected $CardProcessingMethod;

    /**
     * PaymentMethod
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:PaymentMethod
     *
     * @var PaymentMethod
     */
    protected $PaymentMethod;

    /**
     * Constructor.
     *
     * @param float $baseAmount
     * @param CardProcessingMethod $cardProcessingMethod
     * @param PaymentMethod $paymentMethod
     * @param string $cardNumber
     */
    public function __construct($baseAmount, CardProcessingMethod $cardProcessingMethod, PaymentMethod $paymentMethod, $cardNumber = null)
    {
        $this->BaseAmount = $baseAmount;
        $this->CardProcessingMethod = $cardProcessingMethod;
        $this->PaymentMethod = $paymentMethod;
        $this->CardNumber = $cardNumber;
    }

    /**
     * @param float $baseAmount
     *
     * @return GetConvenienceFeeRequest
     */
    public function setBaseAmount($baseAmount)
    {
        $this->BaseAmount = $baseAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseAmount()
    {
        return $this->BaseAmount;
    }

    /**
     * @param string $cardNumber
     *
     * @return GetConvenienceFeeRequest
     */
    public function setCardNumber($cardNumber)
    {
        $this->CardNumber = $cardNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    /**
     * @param CardProcessingMethod $cardProcessingMethod
     *
     * @return GetConvenienceFeeRequest
     */
    public function setCardProcessingMethod(CardProcessingMethod $cardProcessingMethod)
    {
        $this->CardProcessingMethod = $cardProcessingMethod;
        return $this;
    }

    /**
     * @return CardProcessingMethod
     */
    public function getCardProcessingMethod()
    {
        if (null === $this->CardProcessingMethod) {
            $this->CardProcessingMethod = new CardProcessingMethod();
        }
        return $this->CardProcessingMethod;
    }

    /**
     * @param PaymentMethod $paymentMethod
     *
     * @return GetConvenienceFeeRequest
     */
    public function setPaymentMethod(PaymentMethod $paymentMethod)
    {
        $this->PaymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @return PaymentMethod
     */
    public function getPaymentMethod()
    {
        if (null === $this->PaymentMethod) {
            $this->PaymentMethod = new PaymentMethod();
        }
        return $this->PaymentMethod;
    }
}
