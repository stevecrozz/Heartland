<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class LogTermsAcceptanceResponse
{
    /**
     * LogTermsAcceptanceResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q54:Response
     *
     * @var Response
     */
    protected $LogTermsAcceptanceResult = null;

    /**
     * Constructor.
     *
     * @param Response $logTermsAcceptanceResult
     */
    public function __construct(Response $logTermsAcceptanceResult = null)
    {
        $this->LogTermsAcceptanceResult = $logTermsAcceptanceResult;
    }

    /**
     * @param Response $logTermsAcceptanceResult
     *
     * @return LogTermsAcceptanceResponse
     */
    public function setLogTermsAcceptanceResult(Response $logTermsAcceptanceResult)
    {
        $this->LogTermsAcceptanceResult = $logTermsAcceptanceResult;
        return $this;
    }

    /**
     * @return Response
     */
    public function getLogTermsAcceptanceResult()
    {
        if (null === $this->LogTermsAcceptanceResult) {
            $this->LogTermsAcceptanceResult = new Response();
        }
        return $this->LogTermsAcceptanceResult;
    }
}
