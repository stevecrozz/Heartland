<?php
namespace Payum\Heartland\Soap;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot('s:Envelope')
 */
class Envelope
{
    /**
     * @var array
     * @Serializer\XmlAttributeMap
     */
    protected $xmlns = array(
        'xmlns:s' => 'http://schemas.xmlsoap.org/soap/envelope/'
    );

    /**
     * @var Object
     * @Serializer\SerializedName('s:Body')
     */
    protected $body;

    /**
     * @param $body
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return Object
     */
    public function getBody()
    {
        return $this->body;
    }
}
