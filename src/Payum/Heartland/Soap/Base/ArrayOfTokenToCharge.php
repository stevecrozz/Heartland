<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfTokenToCharge
{
    /**
     * TokenToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:TokenToCharge
     *
     * @var array(TokenToCharge)
     */
    protected $TokenToCharge = null;

    /**
     * Constructor.
     *
     * @param array(TokenToCharge) $tokenToCharge
     */
    public function __construct(array(TokenToCharge) $tokenToCharge = null)
    {
        $this->TokenToCharge = $tokenToCharge;
    }

    /**
     * @param array(TokenToCharge) $tokenToCharge
     *
     * @return ArrayOfTokenToCharge
     */
    public function setTokenToCharge(array(TokenToCharge) $tokenToCharge)
    {
        $this->TokenToCharge = $tokenToCharge;
        return $this;
    }

    /**
     * @return array(TokenToCharge)
     */
    public function getTokenToCharge()
    {
        if (null === $this->TokenToCharge) {
            $this->TokenToCharge = new array(TokenToCharge)();
        }
        return $this->TokenToCharge;
    }
}
