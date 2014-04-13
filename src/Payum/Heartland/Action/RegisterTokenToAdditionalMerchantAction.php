<?php
namespace Payum\Heartland\Action;

use Payum\Action\ActionInterface;
use Payum\ApiAwareInterface;
use Payum\Bridge\Spl\ArrayObject;
use Payum\Exception\UnsupportedApiException;
use Payum\Heartland\Model\TokenReregistration;
use Payum\Heartland\Soap\Base\RegisterTokenToAdditionalMerchantRequest;
use Payum\Heartland\Soap\Base\Response;
use Payum\Request\CaptureRequest;
use Payum\Request\UserInputRequiredInteractiveRequest;
use Payum\Exception\RequestNotSupportedException;

class RegisterTokenToAdditionalMerchantAction extends BaseAction
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

        /** @var TokenReregistration $model */
        $model = $request->getModel();

        /**
         * Information needed for the SOAP request
         */
        $oldMerchantCredentials = $this->api->getMerchantCredentials($model->getOldMerchantName());
        $newMerchantCredentials = $this->api->getMerchantCredentials($model->getnewMerchantName());
        $token = $model->getToken();

        /** @var RegisterTokenToAdditionalMerchantRequest $soapRequest */
        $soapRequest = $model->getRequest();
        $soapRequest->setCredential($oldMerchantCredentials);
        $soapRequest->setRegisterToMerchantCredential($newMerchantCredentials);
        $soapRequest->setToken($token);

        $response = $this->api->getSoapClient()->RegisterTokenToAdditionalMerchant($soapRequest);

        // TODO: response is successful, but I don't see the new token
        $model->setResponse($response->getRegisterTokenToAdditionalMerchantResult());
        return;
    }

    /**
     * {@inheritdoc}
     */
    public function supports($request)
    {
        return
            $request instanceof CaptureRequest &&
            $request->getModel()->getRequest() instanceof RegisterTokenToAdditionalMerchantRequest
        ;
    }
}
