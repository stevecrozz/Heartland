<?php
namespace Payum\Heartland\Action;

use Payum\Action\ActionInterface;
use Payum\ApiAwareInterface;
use Payum\Bridge\Spl\ArrayObject;
use Payum\Exception\UnsupportedApiException;
use Payum\Heartland\Model\PaymentDetails;
use Payum\Heartland\Soap\Base\MakePaymentRequest;
use Payum\Request\CaptureRequest;
use Payum\Request\UserInputRequiredInteractiveRequest;
use Payum\Exception\RequestNotSupportedException;
use Payum\Heartland\Soap\Base\Response;

class MakeBlindPaymentAction extends BaseAction
{
    /**
     * {@inheritdoc}
     */
    public function execute($request)
    {
        /** @var $request CaptureRequest */
        if (false == $this->supports($request)) {
            throw RequestNotSupportedException::createActionNotSupported($this, $request);
        }

        /** @var PaymentDetails $model */
        $model = $request->getModel();

        /** @var MakePaymentRequest $soapRequest */
        $soapRequest = $model->getRequest();
        $soapRequest->setCredential($this->api->getMerchantCredentials($model->getMerchantName()));

        $response = $this->api->getSoapClient()->MakeBlindPayment($soapRequest);
        if ($response instanceof Response) {
            $model->setResponse($response);
        } else {
            $model->setResponse($response->getMakeBlindPaymentResult());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports($request)
    {
        return 
            $request instanceof CaptureRequest &&
            $request->getModel()->getRequest() instanceof MakePaymentRequest
        ;
    }
}
