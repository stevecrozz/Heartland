<?php
namespace Payum\Heartland\Action;

use Payum\Action\ActionInterface;
use Payum\ApiAwareInterface;
use Payum\Bridge\Spl\ArrayObject;
use Payum\Exception\UnsupportedApiException;
use Payum\Heartland\Model\PaymentDetails;
use Payum\Heartland\Soap\Base\GetTokenRequest;
use Payum\Request\CaptureRequest;
use Payum\Request\UserInputRequiredInteractiveRequest;
use Payum\Exception\RequestNotSupportedException;

class GetTokenAction extends BaseAction
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
//
//        if (null != $model['response_code']) {
//            return;
//        }
//
//        if (false == ($model['amount'] && $model['card_num'] && $model['exp_date'])) {
//            throw new UserInputRequiredInteractiveRequest(array('amount', 'card_num', 'exp_date'));
//        }

        /** @var GetTokenRequest $soapRequest */
        $soapRequest = $model->getRequest();
        $soapRequest->setCredential($this->api->getMerchantCredentials($model->getMerchantName()));

        $response = $this->api->getSoapClient()->GetToken($soapRequest);
        $model->setResponse($response->getGetTokenResult());
    }

    /**
     * {@inheritdoc}
     */
    public function supports($request)
    {
        return 
            $request instanceof CaptureRequest &&
            $request->getModel()->getRequest() instanceof GetTokenRequest
        ;
    }
}
