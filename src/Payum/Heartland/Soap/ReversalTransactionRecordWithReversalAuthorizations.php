<?php

namespace Payum\Heartland\Soap;

/**
 * This class is generated from the following WSDL:
 * https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?xsd=xsd2
 */
class ReversalTransactionRecordWithReversalAuthorizations extends TransactionRecord
{
    /**
     * ReversalAuthorizations
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:ArrayOfReversalAuthorizationRecord
     *
     * @var array<ReversalAuthorizationRecord>
     */
    public $ReversalAuthorizations;
}
