<?php
namespace Payum\Heartland\Tests;

use Payum\Heartland\PaymentFactory;

class PaymentFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function couldNotBeInstantiated()
    {
        $rc = new \ReflectionClass('Payum\Heartland\PaymentFactory');

        $this->assertFalse($rc->isInstantiable());
    }

    /**
     * @test
     */
    public function shouldAllowCreatePaymentWithStandardActionsAdded()
    {
        $apiMock = $this->createApiMock();

        $payment = PaymentFactory::create($apiMock);

        $this->assertInstanceOf('Payum\Payment', $payment);

        $this->assertAttributeCount(1, 'apis', $payment);

        $actions = $this->readAttribute($payment, 'actions');
        $this->assertInternalType('array', $actions);
        $this->assertNotEmpty($actions);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject | \Payum\Heartland\Api
     */
    protected function createApiMock()
    {
        return $this->getMock('Payum\Heartland\Api', array(), array(), '', false);
    }
}
