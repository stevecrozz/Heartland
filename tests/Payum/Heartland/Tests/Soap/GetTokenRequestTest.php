<?php
namespace Payum\Heartland\Tests\Soap;

use Payum\Heartland\Soap\Envelope;
use Payum\Heartland\Soap\GetToken;
use Payum\Heartland\Soap\GetTokenRequest;
use JMS\Serializer\SerializerBuilder;

class GetTokenRequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function serialize()
    {
        $serializer = SerializerBuilder::create()->build();

        $request = new GetTokenRequest();

        $token = new GetToken();
        $token->setValue($request);

        $data = new Envelope();
        $data->setBody($token);

        $this->assertEquals(
            file_get_contents(__DIR__ . '/xml/GetTokenRequest.xml'),
            $serializer->serialize($data, 'json')
        );
    }
}
