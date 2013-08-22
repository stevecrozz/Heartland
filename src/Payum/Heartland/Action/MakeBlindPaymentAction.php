<?php
namespace Payum\Heartland\Action;

use Payum\Action\ActionInterface;
use Payum\ApiAwareInterface;
use Payum\Bridge\Spl\ArrayObject;
use Payum\Exception\UnsupportedApiException;
use Payum\Heartland\Soap\Base\MakePaymentRequest;
use Payum\Request\CaptureRequest;
use Payum\Request\UserInputRequiredInteractiveRequest;
use Payum\Exception\RequestNotSupportedException;

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

        $model = $request->getModel();
//
//        if (null != $model['response_code']) {
//            return;
//        }
//
//        if (false == ($model['amount'] && $model['card_num'] && $model['exp_date'])) {
//            throw new UserInputRequiredInteractiveRequest(array('amount', 'card_num', 'exp_date'));
//        }

        $response = $this->api->getSoapClient()->MakeBlindPayment($model->getRequest());
        $model->setResponse($response->getMakeBlindPaymentResult());
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
