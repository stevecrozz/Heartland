<?php
namespace Payum\Heartland\Soap;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("GetTokenRequest")
 */
class GetTokenRequest
{
    /**
     * @var array
     * @Serializer\XmlAttributeMap
     */
    protected $xmlns = array(
        'xmlns:a' => 'http://schemas.datacontract.org/2004/07/BDMS.NewModel',
        'xmlns:i' => 'http://www.w3.org/2001/XMLSchema-instance'
    );
}
