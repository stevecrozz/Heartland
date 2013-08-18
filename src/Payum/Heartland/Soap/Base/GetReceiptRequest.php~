<?php

namespace Payum\Heartland\Soap\Base;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class GetReceiptRequest extends MerchantRequest
{
    /**
     * ReceiptFileType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ReceiptFileType
     *
     * @var ReceiptFileType
     */
    protected $ReceiptFileType;

    /**
     * Transaction_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    protected $Transaction_ID;

    /**
     * Constructor.
     *
     * @param ReceiptFileType $receiptFileType
     * @param int $transaction_ID
     */
    public function __construct(ReceiptFileType $receiptFileType, $transaction_ID)
    {
        $this->ReceiptFileType = $receiptFileType;
        $this->Transaction_ID = $transaction_ID;
    }

    /**
     * @param ReceiptFileType $receiptFileType
     *
     * @return GetReceiptRequest
     */
    public function setReceiptFileType(ReceiptFileType $receiptFileType)
    {
        $this->ReceiptFileType = $receiptFileType;
        return $this;
    }

    /**
     * @return ReceiptFileType
     */
    public function getReceiptFileType()
    {
        if (null === $this->ReceiptFileType) {
            $this->ReceiptFileType = new ReceiptFileType();
        }
        return $this->ReceiptFileType;
    }

    /**
     * @param int $transaction_ID
     *
     * @return GetReceiptRequest
     */
    public function setTransaction_ID($transaction_ID)
    {
        $this->Transaction_ID = $transaction_ID;
        return $this;
    }

    /**
     * @return int
     */
    public function getTransaction_ID()
    {
        return $this->Transaction_ID;
    }
}
