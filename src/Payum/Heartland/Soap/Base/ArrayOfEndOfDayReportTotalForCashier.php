<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ArrayOfEndOfDayReportTotalForCashier
{
    /**
     * EndOfDayReportTotalForCashier
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:EndOfDayReportTotalForCashier
     *
     * @var array(EndOfDayReportTotalForCashier)
     */
    protected $EndOfDayReportTotalForCashier = null;

    /**
     * Constructor.
     *
     * @param array(EndOfDayReportTotalForCashier) $endOfDayReportTotalForCashier
     */
    public function __construct(array(EndOfDayReportTotalForCashier) $endOfDayReportTotalForCashier = null)
    {
        $this->EndOfDayReportTotalForCashier = $endOfDayReportTotalForCashier;
    }

    /**
     * @param array(EndOfDayReportTotalForCashier) $endOfDayReportTotalForCashier
     *
     * @return ArrayOfEndOfDayReportTotalForCashier
     */
    public function setEndOfDayReportTotalForCashier(array(EndOfDayReportTotalForCashier) $endOfDayReportTotalForCashier)
    {
        $this->EndOfDayReportTotalForCashier = $endOfDayReportTotalForCashier;
        return $this;
    }

    /**
     * @return array(EndOfDayReportTotalForCashier)
     */
    public function getEndOfDayReportTotalForCashier()
    {
        if (null === $this->EndOfDayReportTotalForCashier) {
            $this->EndOfDayReportTotalForCashier = new array(EndOfDayReportTotalForCashier)();
        }
        return $this->EndOfDayReportTotalForCashier;
    }
}
