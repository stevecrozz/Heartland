<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class GetTokenRequest extends MerchantRequest
{
    /**
     * ACHAccountType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q7:ACHAccountType
     *
     * @var ACHAccountType
     */
    protected $ACHAccountType;

    /**
     * ACHDepositType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q8:ACHDepositType
     *
     * @var ACHDepositType
     */
    protected $ACHDepositType;

    /**
     * AccountHolderData
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q9:CardHolderData
     *
     * @var CardHolderData
     */
    protected $AccountHolderData = null;

    /**
     * AccountNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $AccountNumber = null;

    /**
     * ExpirationMonth
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $ExpirationMonth;

    /**
     * ExpirationYear
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $ExpirationYear;

    /**
     * PaymentMethod
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:TokenPaymentMethod
     *
     * @var TokenPaymentMethod
     */
    protected $PaymentMethod;

    /**
     * RoutingNumber
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $RoutingNumber = null;

    /**
     * SkipAccountVerify
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    protected $SkipAccountVerify;

    /**
     * Constructor.
     *
     * @param ACHAccountType $aCHAccountType
     * @param ACHDepositType $aCHDepositType
     * @param int $expirationMonth
     * @param int $expirationYear
     * @param TokenPaymentMethod $paymentMethod
     * @param boolean $skipAccountVerify
     * @param CardHolderData $accountHolderData
     * @param string $accountNumber
     * @param string $routingNumber
     */
    public function __construct(ACHAccountType $aCHAccountType, ACHDepositType $aCHDepositType, $expirationMonth, $expirationYear, TokenPaymentMethod $paymentMethod, $skipAccountVerify, CardHolderData $accountHolderData = null, $accountNumber = null, $routingNumber = null)
    {
        $this->ACHAccountType = $aCHAccountType;
        $this->ACHDepositType = $aCHDepositType;
        $this->ExpirationMonth = $expirationMonth;
        $this->ExpirationYear = $expirationYear;
        $this->PaymentMethod = $paymentMethod;
        $this->SkipAccountVerify = $skipAccountVerify;
        $this->AccountHolderData = $accountHolderData;
        $this->AccountNumber = $accountNumber;
        $this->RoutingNumber = $routingNumber;
    }

    /**
     * @param ACHAccountType $aCHAccountType
     *
     * @return GetTokenRequest
     */
    public function setACHAccountType(ACHAccountType $aCHAccountType)
    {
        $this->ACHAccountType = $aCHAccountType;
        return $this;
    }

    /**
     * @return ACHAccountType
     */
    public function getACHAccountType()
    {
        if (null === $this->ACHAccountType) {
            $this->ACHAccountType = new ACHAccountType();
        }
        return $this->ACHAccountType;
    }

    /**
     * @param ACHDepositType $aCHDepositType
     *
     * @return GetTokenRequest
     */
    public function setACHDepositType(ACHDepositType $aCHDepositType)
    {
        $this->ACHDepositType = $aCHDepositType;
        return $this;
    }

    /**
     * @return ACHDepositType
     */
    public function getACHDepositType()
    {
        if (null === $this->ACHDepositType) {
            $this->ACHDepositType = new ACHDepositType();
        }
        return $this->ACHDepositType;
    }

    /**
     * @param CardHolderData $accountHolderData
     *
     * @return GetTokenRequest
     */
    public function setAccountHolderData(CardHolderData $accountHolderData)
    {
        $this->AccountHolderData = $accountHolderData;
        return $this;
    }

    /**
     * @return CardHolderData
     */
    public function getAccountHolderData()
    {
        if (null === $this->AccountHolderData) {
            $this->AccountHolderData = new CardHolderData();
        }
        return $this->AccountHolderData;
    }

    /**
     * @param string $accountNumber
     *
     * @return GetTokenRequest
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * @param int $expirationMonth
     *
     * @return GetTokenRequest
     */
    public function setExpirationMonth($expirationMonth)
    {
        $this->ExpirationMonth = $expirationMonth;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationMonth()
    {
        return $this->ExpirationMonth;
    }

    /**
     * @param int $expirationYear
     *
     * @return GetTokenRequest
     */
    public function setExpirationYear($expirationYear)
    {
        $this->ExpirationYear = $expirationYear;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationYear()
    {
        return $this->ExpirationYear;
    }

    /**
     * @param TokenPaymentMethod $paymentMethod
     *
     * @return GetTokenRequest
     */
    public function setPaymentMethod(TokenPaymentMethod $paymentMethod)
    {
        $this->PaymentMethod = $paymentMethod;
        return $this;
    }

    /**
     * @return TokenPaymentMethod
     */
    public function getPaymentMethod()
    {
        if (null === $this->PaymentMethod) {
            $this->PaymentMethod = new TokenPaymentMethod();
        }
        return $this->PaymentMethod;
    }

    /**
     * @param string $routingNumber
     *
     * @return GetTokenRequest
     */
    public function setRoutingNumber($routingNumber)
    {
        $this->RoutingNumber = $routingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->RoutingNumber;
    }

    /**
     * @param boolean $skipAccountVerify
     *
     * @return GetTokenRequest
     */
    public function setSkipAccountVerify($skipAccountVerify)
    {
        $this->SkipAccountVerify = $skipAccountVerify;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSkipAccountVerify()
    {
        return $this->SkipAccountVerify;
    }
}
