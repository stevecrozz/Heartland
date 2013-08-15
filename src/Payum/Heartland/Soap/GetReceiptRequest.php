<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class GetReceiptRequest extends MerchantRequest
{
    /**
     * ReceiptFileType
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ReceiptFileType
     *
     * @var ReceiptFileType
     */
    public $ReceiptFileType;

    /**
     * Transaction_ID
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $Transaction_ID;
}
