<?php

namespace Payum\Heartland\Model;

use Payum\Heartland\Model\HeartlandModel;

class TokenReregistration extends HeartlandModel
{
    /**
     * Set oldMerchantName
     *
     * @param string $oldMerchantName
     * @return PaymentDetails
     */
    public function setOldMerchantName($oldMerchantName)
    {
        $this->oldMerchantName = $oldMerchantName;
        return $this;
    }

    /**
     * Get oldMerchantName
     *
     * @return string
     */
    public function getOldMerchantName()
    {
        return $this->oldMerchantName;
    }

    /**
     * Set newMerchantName
     *
     * @param string $newMerchantName
     * @return PaymentDetails
     */
    public function setNewMerchantName($newMerchantName)
    {
        $this->newMerchantName = $newMerchantName;
        return $this;
    }

    /**
     * Get newMerchantName
     *
     * @return string
     */
    public function getNewMerchantName()
    {
        return $this->newMerchantName;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return PaymentDetails
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
