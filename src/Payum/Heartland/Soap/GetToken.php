<?php
namespace Payum\Heartland\Soap;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("GetToken")
 */
class GetToken
{
    /**
     * @var array
     * @Serializer\XmlAttributeMap
     */
    protected $xmlns = array(
        'xmlns' => 'https://test.heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService'
    );

    /**
     * @var Object
     * @Serializer\SerializedName("GetTokenRequest")
     */
    protected $value;

    /**
     * @param $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return Object
     */
    public function getValue()
    {
        return $this->value;
    }
}
