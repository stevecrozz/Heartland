<?php
namespace Payum\Heartland\Action;

use Payum\Action\ActionInterface;
use Payum\ApiAwareInterface;
use Payum\Heartland\Api;
use Payum\Bridge\Spl\ArrayObject;
use Payum\Exception\UnsupportedApiException;
use Payum\Request\CaptureRequest;
use Payum\Request\UserInputRequiredInteractiveRequest;
use Payum\Exception\RequestNotSupportedException;

abstract class BaseAction implements ActionInterface, ApiAwareInterface
{
    /**
     * @var Api
     */
    protected $api;

    /**
     * {@inheritdoc}
     */
    public function setApi($api)
    {
        if (false == $api instanceof Api) {
            throw new UnsupportedApiException('Not supported.');
        }

        $this->api = $api;
    }
}
