<?php
namespace Payum\Heartland\Bridge\Doctrine\Entity;

use Doctrine\ORM\Mapping as ORM;
use Payum\Heartland\Model\PaymentDetails as BasePaymentDetails;

class PaymentDetails extends BasePaymentDetails
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
