<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd1
 */
class char
{
    /**
     * _
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $_;

    /**
     * Constructor.
     *
     * @param int $_
     */
    public function __construct($_)
    {
        $this->_ = $_;
    }

    /**
     * @param int $_
     *
     * @return char
     */
    public function set_($_)
    {
        $this->_ = $_;
        return $this;
    }

    /**
     * @return int
     */
    public function get_()
    {
        return $this->_;
    }
}
