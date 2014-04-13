<?php

namespace Payum\Heartland\Model;

use Payum\Heartland\Model\HeartlandModel;

class PaymentDetails extends HeartlandModel
{
    /**
     * @var double
     */
    protected $amount;

    /**
     * @var int
     */
    protected $transactionId;

    /**
     * @var string
     */
    protected $merchantName;

    /**
     * Set Amount
     *
     * @param double $amount
     * @return PaymentDetails
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set transactionId
     *
     * @param int $transactionId
     * @return PaymentDetails
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * Get transactionId
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set merchantName
     *
     * @param string $merchantName
     * @return PaymentDetails
     */
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;
        return $this;
    }

    /**
     * Get merchantName
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }
}
