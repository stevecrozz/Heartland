<?php

namespace Payum\Heartland;

use Payum\Heartland\Soap\Base\Client;

class SoapClient extends Client
{
    public function getClassMap()
    {
        $map = parent::getClassMap();
//        $map['GetTokenResult'] = '\Payum\Heartland\Soap\GetTokenResult';
        return $map;
    }
}
