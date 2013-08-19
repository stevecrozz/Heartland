<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd0
 */
class EndOfDayReportResponse
{
    /**
     * EndOfDayReportResult
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: q20:EndOfDayReportResponse
     *
     * @var EndOfDayReportResponse
     */
    protected $EndOfDayReportResult = null;

    /**
     * @param EndOfDayReportResponse $endOfDayReportResult
     *
     * @return EndOfDayReportResponse
     */
    public function setEndOfDayReportResult(EndOfDayReportResponse $endOfDayReportResult)
    {
        $this->EndOfDayReportResult = $endOfDayReportResult;
        return $this;
    }

    /**
     * @return EndOfDayReportResponse
     */
    public function getEndOfDayReportResult()
    {
        if (null === $this->EndOfDayReportResult) {
            $this->EndOfDayReportResult = new EndOfDayReportResponse();
        }
        return $this->EndOfDayReportResult;
    }
}
