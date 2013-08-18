<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfClearTextCardToCharge
{
    /**
     * ClearTextCardToCharge
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ClearTextCardToCharge
     *
     * @var array(ClearTextCardToCharge)
     */
    protected $ClearTextCardToCharge = null;

    /**
     * Constructor.
     *
     * @param array(ClearTextCardToCharge) $clearTextCardToCharge
     */
    public function __construct(array(ClearTextCardToCharge) $clearTextCardToCharge = null)
    {
        $this->ClearTextCardToCharge = $clearTextCardToCharge;
    }

    /**
     * @param array(ClearTextCardToCharge) $clearTextCardToCharge
     *
     * @return ArrayOfClearTextCardToCharge
     */
    public function setClearTextCardToCharge(array(ClearTextCardToCharge) $clearTextCardToCharge)
    {
        $this->ClearTextCardToCharge = $clearTextCardToCharge;
        return $this;
    }

    /**
     * @return array(ClearTextCardToCharge)
     */
    public function getClearTextCardToCharge()
    {
        if (null === $this->ClearTextCardToCharge) {
            $this->ClearTextCardToCharge = new array(ClearTextCardToCharge)();
        }
        return $this->ClearTextCardToCharge;
    }
}
