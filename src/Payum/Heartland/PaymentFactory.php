<?php
namespace Payum\Heartland;

use Payum\Payment;
use Payum\Heartland\Api;
use Payum\Heartland\Action\MakeBlindPaymentAction;
use Payum\Heartland\Action\GetTokenAction;
use Payum\Heartland\Action\StatusAction;

abstract class PaymentFactory
{
    /**
     * @param Api $api
     *
     * @return Payment
     */
    public static function create(Api $api)
    {
        $payment = new Payment;

        $payment->addApi($api);
//
//        $payment->addExtension(new EndlessCycleDetectorExtension);4
//
        $payment->addAction(new MakeBlindPaymentAction);
        $payment->addAction(new GetTokenAction);
        $payment->addAction(new StatusAction);
//        $payment->addAction(new CaptureDetailsAggregatedModelAction);
//        $payment->addAction(new SyncDetailsAggregatedModelAction);
//        $payment->addAction(new StatusDetailsAggregatedModelAction);

        return $payment;
    }

    /**
     */
    private function __construct()
    {
    }
}
