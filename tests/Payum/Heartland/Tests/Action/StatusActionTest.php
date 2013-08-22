<?php
namespace Payum\Heartland\Tests\Action;

use Payum\Heartland\Action\StatusAction;
use Payum\Heartland\Bridge\AuthorizeNet\AuthorizeNetAIM;
use Payum\Heartland\Model\PaymentDetails;
use Payum\Bridge\Spl\ArrayObject;
use Payum\Request\BinaryMaskStatusRequest;
use Payum\Request\StatusRequestInterface;

class StatusActionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldImplementActionInterface()
    {
        $rc = new \ReflectionClass('Payum\Heartland\Action\StatusAction');
        
        $this->assertTrue($rc->implementsInterface('Payum\Action\ActionInterface'));
    }

    /**
     * @test
     */
    public function couldBeConstructedWithoutAnyArguments()   
    {
        new StatusAction();
    }

    /**
     * @test
     */
    public function shouldSupportStatusRequestAndArrayAccessAsModel()
    {
        $action = new StatusAction();

        $request = $this->createStatusRequestStub($this->getMock('ArrayAccess'));

        $this->assertTrue($action->supports($request));
    }

    /**
     * @test
     */
    public function shouldSupportStatusRequestWithPaymentDetailsAsModel()
    {
        $action = new StatusAction();

        $request = $this->createStatusRequestStub(new PaymentDetails);

        $this->assertTrue($action->supports($request));
    }

    /**
     * @test
     */
    public function shouldNotSupportNotStatusRequest()
    {
        $action = new StatusAction();

        $request = new \stdClass();

        $this->assertFalse($action->supports($request));
    }

    /**
     * @test
     */
    public function shouldNotSupportStatusRequestAndNotArrayAccessAsModel()
    {
        $action = new StatusAction();

        $request = $this->createStatusRequestStub(new \stdClass());

        $this->assertFalse($action->supports($request));
    }

    /**
     * @test
     *
     * @expectedException \Payum\Exception\RequestNotSupportedException
     */
    public function throwIfNotSupportedRequestGivenAsArgumentForExecute()
    {
        $action = new StatusAction();

        $action->execute(new \stdClass());
    }

    /**
     * @test
     */
    public function shouldMarkNewIfResponseCodeNotSetInModel()
    {
        $action = new StatusAction();

        $request = new BinaryMaskStatusRequest(new ArrayObject());

        $action->execute($request);
        
        $this->assertTrue($request->isNew());
    }

    /**
     * @test
     */
    public function shouldMarkSuccessStatusIfArrayObjectHasResponseCodeApproved()
    {
        $action = new StatusAction();

        $model = new ArrayObject();
        $model['isSuccessful'] = true;

        $request = new BinaryMaskStatusRequest($model);

        $action->execute($request);

        $this->assertTrue($request->isSuccess());
    }

    /**
     * @test
     */
    public function shouldMarkFailedStatusIfArrayObjectHasResponseCodeError()
    {
        $action = new StatusAction();

        $model = new ArrayObject();
        $model['isSuccessful'] = false;

        $request = new BinaryMaskStatusRequest($model);

        $action->execute($request);

        $this->assertTrue($request->isFailed());
    }
    
    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|StatusRequestInterface
     */
    protected function createStatusRequestStub($model)
    {
        $status = $this->getMock('Payum\Request\StatusRequestInterface');

        $status
            ->expects($this->any())
            ->method('getModel')
            ->will($this->returnValue($model))
        ;
        
        return $status;
    }
}
