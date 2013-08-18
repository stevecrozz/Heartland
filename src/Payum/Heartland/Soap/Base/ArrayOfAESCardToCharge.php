<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfAESCardToCharge
{
    /**
     * AESCardToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:AESCardToCharge
     *
     * @var array(AESCardToCharge)
     */
    protected $AESCardToCharge = null;

    /**
     * Constructor.
     *
     * @param array(AESCardToCharge) $aESCardToCharge
     */
    public function __construct(array(AESCardToCharge) $aESCardToCharge = null)
    {
        $this->AESCardToCharge = $aESCardToCharge;
    }

    /**
     * @param array(AESCardToCharge) $aESCardToCharge
     *
     * @return ArrayOfAESCardToCharge
     */
    public function setAESCardToCharge(array(AESCardToCharge) $aESCardToCharge)
    {
        $this->AESCardToCharge = $aESCardToCharge;
        return $this;
    }

    /**
     * @return array(AESCardToCharge)
     */
    public function getAESCardToCharge()
    {
        if (null === $this->AESCardToCharge) {
            $this->AESCardToCharge = new array(AESCardToCharge)();
        }
        return $this->AESCardToCharge;
    }
}
