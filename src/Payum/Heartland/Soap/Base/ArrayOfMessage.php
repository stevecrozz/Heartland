<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfMessage
{
    /**
     * Message
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Message
     *
     * @var array(Message)
     */
    protected $Message = null;

    /**
     * Constructor.
     *
     * @param array(Message) $message
     */
    public function __construct(array(Message) $message = null)
    {
        $this->Message = $message;
    }

    /**
     * @param array(Message) $message
     *
     * @return ArrayOfMessage
     */
    public function setMessage(array(Message) $message)
    {
        $this->Message = $message;
        return $this;
    }

    /**
     * @return array(Message)
     */
    public function getMessage()
    {
        if (null === $this->Message) {
            $this->Message = new array(Message)();
        }
        return $this->Message;
    }
}
