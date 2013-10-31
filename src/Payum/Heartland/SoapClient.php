<?php
namespace Payum\Heartland;

use Payum\Heartland\Soap\Base\Client;

class SoapClient extends Client
{
    /**
     * @var bool
     */
    protected $isTrace = false;

    /**
     * @param string $wsdl
     * @param array $options
     */
    public function __construct($wsdl, array $options = array())
    {
        if (!empty($options['trace'])) {
            $this->isTrace = true;
        }
        return parent::__construct($wsdl, $options);
    }

    /**
     * Custom mapping here
     *
     * @return array
     */
    public function getClassMap()
    {
        $map = parent::getClassMap();
//        $map['GetTokenResult'] = '\Payum\Heartland\Soap\GetTokenResult'; // Example
        return $map;
    }

    /**
     * Debug (trace) info
     *
     * @param string $function_name
     * @param array $arguments
     * @param null $options
     * @param null $input_headers
     * @param null $output_headers
     *
     * @return mixed
     */
    public function __soapCall(
        $function_name,
        $arguments,
        $options = null,
        $input_headers = null,
        &$output_headers = null
    ) {
        $return = parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);

        if ($this->isTrace) {
            echo $this->__getLastRequest(), "\n\n", $this->__getLastResponse();
        }

        return $return;
    }
}
