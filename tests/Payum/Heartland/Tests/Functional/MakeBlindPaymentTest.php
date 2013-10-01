<?php
namespace Payum\Heartland\Tests\Functional;

use \DateTime;
use Payum\Heartland\Model\PaymentDetails;
use Payum\Heartland\Soap\Base\BillTransaction;
use Payum\Heartland\Soap\Base\ClearTextCardToCharge;
use Payum\Heartland\Soap\Base\MakePaymentRequest;
use Payum\Heartland\Soap\Base\CardProcessingMethod;
use Payum\Request\CaptureRequest;
use Payum\Request\BinaryMaskStatusRequest;

class MakeBlindPaymentTest extends BaseTestCase
{
    /**
     * @test
     */
    public function shouldAllowCaptureMakePaymentRequest()
    {
        $payment = $this->getPayment();

        $request = new MakePaymentRequest();
        $billTransaction = new BillTransaction();
//        $billTransaction->setBillType('Bill Payment');
        $billTransaction->setID1(1);
        $billTransaction->setAmountToApplyToBill(1.00);
        $request->getBillTransactions()->setBillTransaction(array($billTransaction));

        $blearTextCardToCharge = new ClearTextCardToCharge();
        $blearTextCardToCharge->setAmount(1.00);
        $blearTextCardToCharge->setCardProcessingMethod(CardProcessingMethod::CREDIT);
        $blearTextCardToCharge->setExpectedFeeAmount(0.03);
        $blearTextCardToCharge->getClearTextCreditCard()->setCardNumber('5473500000000014');
        $now = new DateTime('+1 year');
        $blearTextCardToCharge->getClearTextCreditCard()->setExpirationMonth($now->format('m'));
        $blearTextCardToCharge->getClearTextCreditCard()->setExpirationYear($now->format('Y'));
        $blearTextCardToCharge->getClearTextCreditCard()->setVerificationCode(123);
        $request->getClearTextCreditCardsToCharge()->setClearTextCardToCharge(array($blearTextCardToCharge));
        $request->setIncludeReceiptInResponse(false);
        $request->getTransaction()->setAmount(1.00);
        $request->getTransaction()->setFeeAmount(0.03);
        $request->getTransaction()->setTransactionDate(null);

        $paymentDetails = new PaymentDetails();
        $paymentDetails->setMerchantName($GLOBALS['__PAYUM_HEARTLAND_MERCHANT_NAME']);
        $paymentDetails->setRequest($request);

        $captureRequest = new CaptureRequest($paymentDetails);
        $payment->execute($captureRequest);

        $statusRequest = new BinaryMaskStatusRequest($captureRequest->getModel());
        $payment->execute($statusRequest);

        $model = $statusRequest->getModel();

        $this->assertTrue($statusRequest->isSuccess());
        $this->assertNotEmpty($model['transactionId']);
    }

    /**
     * @test
     */
    public function checkErrorResponse()
    {

        $payment = $this->getPayment();
        $request = new MakePaymentRequest();
        $request->setIncludeReceiptInResponse(false);
        $request->getCredential();

        $paymentDetails = new PaymentDetails();
        $paymentDetails->setRequest($request);

        $captureRequest = new CaptureRequest($paymentDetails);
        $payment->execute($captureRequest);

        $statusRequest = new BinaryMaskStatusRequest($captureRequest->getModel());
        $payment->execute($statusRequest);

        $model = $statusRequest->getModel();

        $this->assertFalse($statusRequest->isSuccess());
        $this->assertEmpty($model['transactionId']);
        $this->assertNotEmpty($model['messages']);
        $this->assertTrue(is_string($model['messages']));


    }
}
