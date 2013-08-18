<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd1
 */
class guid
{
    /**
     * _
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     *
     * @var string
     */
    protected $_;

    /**
     * Constructor.
     *
     * @param string $_
     */
    public function __construct($_)
    {
        $this->_ = $_;
    }

    /**
     * @param string $_
     *
     * @return guid
     */
    public function set_($_)
    {
        $this->_ = $_;
        return $this;
    }

    /**
     * @return string
     */
    public function get_()
    {
        return $this->_;
    }
}
