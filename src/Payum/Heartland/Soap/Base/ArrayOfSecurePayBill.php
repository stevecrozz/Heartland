<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfSecurePayBill
{
    /**
     * SecurePayBill
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:SecurePayBill
     *
     * @var array(SecurePayBill)
     */
    protected $SecurePayBill = null;

    /**
     * Constructor.
     *
     * @param array(SecurePayBill) $securePayBill
     */
    public function __construct(array(SecurePayBill) $securePayBill = null)
    {
        $this->SecurePayBill = $securePayBill;
    }

    /**
     * @param array(SecurePayBill) $securePayBill
     *
     * @return ArrayOfSecurePayBill
     */
    public function setSecurePayBill(array(SecurePayBill) $securePayBill)
    {
        $this->SecurePayBill = $securePayBill;
        return $this;
    }

    /**
     * @return array(SecurePayBill)
     */
    public function getSecurePayBill()
    {
        if (null === $this->SecurePayBill) {
            $this->SecurePayBill = new array(SecurePayBill)();
        }
        return $this->SecurePayBill;
    }
}
