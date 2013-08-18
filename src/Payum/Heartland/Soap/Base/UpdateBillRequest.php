<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class UpdateBillRequest extends MerchantRequest
{
    /**
     * Bill
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Bill
     *
     * @var Bill
     */
    protected $Bill = null;

    /**
     * TimeZone
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:Timezone
     *
     * @var Timezone
     */
    protected $TimeZone;

    /**
     * Constructor.
     *
     * @param Timezone $timeZone
     * @param Bill $bill
     */
    public function __construct(Timezone $timeZone, Bill $bill = null)
    {
        $this->TimeZone = $timeZone;
        $this->Bill = $bill;
    }

    /**
     * @param Bill $bill
     *
     * @return UpdateBillRequest
     */
    public function setBill(Bill $bill)
    {
        $this->Bill = $bill;
        return $this;
    }

    /**
     * @return Bill
     */
    public function getBill()
    {
        if (null === $this->Bill) {
            $this->Bill = new Bill();
        }
        return $this->Bill;
    }

    /**
     * @param Timezone $timeZone
     *
     * @return UpdateBillRequest
     */
    public function setTimeZone(Timezone $timeZone)
    {
        $this->TimeZone = $timeZone;
        return $this;
    }

    /**
     * @return Timezone
     */
    public function getTimeZone()
    {
        if (null === $this->TimeZone) {
            $this->TimeZone = new Timezone();
        }
        return $this->TimeZone;
    }
}
