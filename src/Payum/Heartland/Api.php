<?php
namespace Payum\Heartland;

use Buzz\Client\ClientInterface;
use Payum\Exception\Http\HttpException;
use Payum\Exception\InvalidArgumentException;

/**
 * @author Ton Sharp <Forma-PRO@66ton99.org.ua>
 */
class Api
{
    /**
     * @var array
     */
    protected $options = array(
        'env' => '',
        'username' => null,
        'password' => null,
        'partner' => null,
        'vendor' => null,
        'tender' => 'C',
        'trxtype' => 'S',
    );

    /**
     * @param array $options
     *
     * @throw InvalidArgumentException
     */
    public function __construct(array $options)
    {
        $this->options = array_replace($this->options, $options);

        if (true == empty($this->options['username'])) {
            throw new InvalidArgumentException('The username option must be set.');
        }
        if (true == empty($this->options['password'])) {
            throw new InvalidArgumentException('The password option must be set.');
        }
        if (true == empty($this->options['partner'])) {
            throw new InvalidArgumentException('The partner option must be set.');
        }
        if (true == empty($this->options['vendor'])) {
            throw new InvalidArgumentException('The vendor option must be set.');
        }
        if (!in_array($this->options['env'], array('', 'testing.', 'staging.'))) {
            throw new InvalidArgumentException('The env option invalid: ' . var_export($this->options['env'], true));
        }
    }

    /**
     * @return string
     */
    protected function getApiEndpoint()
    {
        $host = 'heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc';
        $env = $this->options['env'];

        return sprintf(
            'https://%s%s',
            $env,
            $host
        );
    }
}
