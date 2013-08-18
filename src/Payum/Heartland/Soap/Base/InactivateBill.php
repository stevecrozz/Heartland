<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class InactivateBill
{
    /**
     * InactivateBillRequest
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q17:InactivateBillRequest
     *
     * @var InactivateBillRequest
     */
    protected $InactivateBillRequest = null;

    /**
     * Constructor.
     *
     * @param InactivateBillRequest $inactivateBillRequest
     */
    public function __construct(InactivateBillRequest $inactivateBillRequest = null)
    {
        $this->InactivateBillRequest = $inactivateBillRequest;
    }

    /**
     * @param InactivateBillRequest $inactivateBillRequest
     *
     * @return InactivateBill
     */
    public function setInactivateBillRequest(InactivateBillRequest $inactivateBillRequest)
    {
        $this->InactivateBillRequest = $inactivateBillRequest;
        return $this;
    }

    /**
     * @return InactivateBillRequest
     */
    public function getInactivateBillRequest()
    {
        if (null === $this->InactivateBillRequest) {
            $this->InactivateBillRequest = new InactivateBillRequest();
        }
        return $this->InactivateBillRequest;
    }
}
