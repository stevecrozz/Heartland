<?php
namespace Payum\Heartland;

use Payum\Payment;
use Payum\Heartland\Api;

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

//        $payment->addApi($api);
//
//        $payment->addExtension(new EndlessCycleDetectorExtension);
//
//        $payment->addAction(new CaptureAction);
//        $payment->addAction(new StatusAction);
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
