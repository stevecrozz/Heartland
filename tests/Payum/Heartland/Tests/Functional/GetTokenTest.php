<?php
namespace Payum\Heartland\Tests\Functional;

use \DateTime;
use Payum\Heartland\Model\PaymentDetails;
use Payum\Heartland\Soap\Base\ACHAccountType;
use Payum\Heartland\Soap\Base\ACHDepositType;
use Payum\Heartland\Soap\Base\GetTokenRequest;
use Payum\Heartland\Soap\Base\GetTokenResponse;
use Payum\Heartland\Soap\Base\TokenPaymentMethod;
use Payum\Request\CaptureRequest;
use Payum\Request\BinaryMaskStatusRequest;

class GetTokenTest extends BaseTestCase
{
    /**
     * @test
     */
    public function shouldAllowCaptureGetTokenRequest()
    {
        $payment = $this->getPayment();

        $request = new GetTokenRequest();
        $request->setACHAccountType(ACHAccountType::PERSONAL);
        $request->setACHDepositType(ACHDepositType::CHECKING);
        $request->getAccountHolderData()->setAddress('123 Main Street');
        $request->getAccountHolderData()->setCity('Washington');
        $request->getAccountHolderData()->setEmail('JQAdams@gmail.com');
        $request->getAccountHolderData()->setFirstName('John');
        $request->getAccountHolderData()->setLastName('Adams');
        $request->getAccountHolderData()->setPhone('1112223333');
        $request->getAccountHolderData()->setState('DC');
        $request->getAccountHolderData()->setZip('12321');
        $request->setAccountNumber('5473500000000014');
        $now = new DateTime('+1 year');
        $request->setExpirationMonth($now->format('m'));
        $request->setExpirationYear($now->format('Y'));
        $request->setPaymentMethod(TokenPaymentMethod::ACH);
        $request->setRoutingNumber('062202574');

        $paymentDetails = new PaymentDetails();
        $paymentDetails->setMerchantName($GLOBALS['__PAYUM_HEARTLAND_MERCHANT_NAME']);
        $paymentDetails->setRequest($request);

        $captureRequest = new CaptureRequest($paymentDetails);
        $payment->execute($captureRequest);

        $statusRequest = new BinaryMaskStatusRequest($captureRequest->getModel());
        $payment->execute($statusRequest);

        /** @var GetTokenResponse $response */
        $response = $statusRequest->getModel()->getResponse();

        $this->assertTrue($statusRequest->isSuccess());
        $this->assertNotEmpty($response->getToken());
    }
}
