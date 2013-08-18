<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class AddReversalRequest extends AddTransactionRequest
{
    /**
     * ReversalCode
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ReversalCode
     *
     * @var ReversalCode
     */
    protected $ReversalCode;

    /**
     * Constructor.
     *
     * @param ReversalCode $reversalCode
     */
    public function __construct(ReversalCode $reversalCode)
    {
        $this->ReversalCode = $reversalCode;
    }

    /**
     * @param ReversalCode $reversalCode
     *
     * @return AddReversalRequest
     */
    public function setReversalCode(ReversalCode $reversalCode)
    {
        $this->ReversalCode = $reversalCode;
        return $this;
    }

    /**
     * @return ReversalCode
     */
    public function getReversalCode()
    {
        if (null === $this->ReversalCode) {
            $this->ReversalCode = new ReversalCode();
        }
        return $this->ReversalCode;
    }
}
