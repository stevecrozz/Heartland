<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class Request
{
    /**
     * Credential
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Credentials
     *
     * @var Credentials
     */
    protected $Credential = null;

    /**
     * Constructor.
     *
     * @param Credentials $credential
     */
    public function __construct(Credentials $credential = null)
    {
        $this->Credential = $credential;
    }

    /**
     * @param Credentials $credential
     *
     * @return Request
     */
    public function setCredential(Credentials $credential)
    {
        $this->Credential = $credential;
        return $this;
    }

    /**
     * @return Credentials
     */
    public function getCredential()
    {
        if (null === $this->Credential) {
            $this->Credential = new Credentials();
        }
        return $this->Credential;
    }
}
