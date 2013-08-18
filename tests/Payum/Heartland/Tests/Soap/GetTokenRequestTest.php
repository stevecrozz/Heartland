<?php
namespace Payum\Heartland\Tests\Soap;

use Payum\Heartland\Soap;
use Payum\Heartland\SoapClient as SoapClient;

class GetTokenRequestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function serialize()
    {
        $client = new SoapClient(
            "https://testing.heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?wsdl",
            array('trace' => true, 'cache_wsdl' => WSDL_CACHE_NONE, 'soap_version' => SOAP_1_1)
        );
        $request = new Soap\GetToken();
        $request->GetTokenRequest = new Soap\GetTokenRequest();
        $request->GetTokenRequest->Credential = new Soap\MerchantCredentials();
        $request->GetTokenRequest->Credential->ApplicationID = 3;
        $request->GetTokenRequest->Credential->Password = '{$RJ_PASSWORD}';
        $request->GetTokenRequest->Credential->UserName = '{$RJ_USER}';
        $request->GetTokenRequest->Credential->MerchantName = '{$MERCHANT_NAME}';
        $request->GetTokenRequest->ACHAccountType = Soap\ACHAccountType::UNASSIGNED;
        $request->GetTokenRequest->ACHDepositType = Soap\ACHDepositType::UNASSIGNED;
        $request->GetTokenRequest->AccountHolderData = new Soap\CardHolderData();
        $request->GetTokenRequest->AccountHolderData->Address = '{$T_ADDRESS}';
        $request->GetTokenRequest->AccountHolderData->City = '{$T_CITY}';
        $request->GetTokenRequest->AccountHolderData->FirstName = '{$T_FIRST_NAME}';
        $request->GetTokenRequest->AccountHolderData->LastName = '{$T_LAST_NAME}';
        $request->GetTokenRequest->AccountHolderData->State = '{$T_STATE}';
        $request->GetTokenRequest->AccountHolderData->Zip = '{$T_ZIP}';
        $request->GetTokenRequest->AccountNumber = '{$T_CREDIT_CARD_NUMBER}';
        $request->GetTokenRequest->ExpirationMonth = '{$T_CREDIT_CARD_EXPIRATION_MONTH}';
        $request->GetTokenRequest->ExpirationYear = '{$T_CREDIT_CARD_EXPIRATION_MONTH}';
        $request->GetTokenRequest->PaymentMethod = Soap\TokenPaymentMethod::CREDIT;

        try {
            $client->GetToken($request);
        } catch (\SoapFault $e) {
            $this->fail($e->__toString());
        }
        $this->assertEquals(
            '<?xml version="1.0" encoding="UTF-8"?>' . "\n" .
            str_replace(
                array("\n", '    ', '   ', '   ', '  ', '> <'),
                array('', ' ', ' ', ' ', ' ', '><'),
                file_get_contents(__DIR__ . '/xml/GetTokenRequest.xml')) . "\n",
            $client->__getLastRequest()
        );
    }
}
