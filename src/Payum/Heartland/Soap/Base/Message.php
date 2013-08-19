<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class Message
{
    /**
     * Code
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $Code;

    /**
     * Level
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:MessageLevels
     *
     * @var MessageLevels
     */
    protected $Level;

    /**
     * MessageDescription
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    protected $MessageDescription = null;

    /**
     * @param int $code
     *
     * @return Message
     */
    public function setCode($code)
    {
        $this->Code = $code;
        return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param MessageLevels $level
     *
     * @return Message
     */
    public function setLevel($level)
    {
        $this->Level = $level;
        return $this;
    }

    /**
     * @return MessageLevels
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * @param string $messageDescription
     *
     * @return Message
     */
    public function setMessageDescription($messageDescription)
    {
        $this->MessageDescription = $messageDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessageDescription()
    {
        return $this->MessageDescription;
    }
}
