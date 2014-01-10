<?php
namespace Payum\Heartland\Soap;

use Payum\Heartland\Soap\Base\Client as Base;

class Client extends Base
{
    /**
     * Custom mapping here
     *
     * @return array
     */
    public function getClassMap()
    {
        $map = parent::getClassMap();
//        $map['MakePaymentResponse'] = '\Payum\Heartland\Soap\MakePaymentResponse'; // Example
        return $map;
    }
} 
