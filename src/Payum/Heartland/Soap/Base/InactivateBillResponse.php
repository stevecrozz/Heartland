<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class InactivateBillResponse
{
    /**
     * InactivateBillResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q18:Response
     *
     * @var Response
     */
    protected $InactivateBillResult = null;

    /**
     * Constructor.
     *
     * @param Response $inactivateBillResult
     */
    public function __construct(Response $inactivateBillResult = null)
    {
        $this->InactivateBillResult = $inactivateBillResult;
    }

    /**
     * @param Response $inactivateBillResult
     *
     * @return InactivateBillResponse
     */
    public function setInactivateBillResult(Response $inactivateBillResult)
    {
        $this->InactivateBillResult = $inactivateBillResult;
        return $this;
    }

    /**
     * @return Response
     */
    public function getInactivateBillResult()
    {
        if (null === $this->InactivateBillResult) {
            $this->InactivateBillResult = new Response();
        }
        return $this->InactivateBillResult;
    }
}
