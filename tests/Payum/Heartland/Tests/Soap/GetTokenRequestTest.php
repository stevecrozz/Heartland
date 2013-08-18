<?php
namespace Payum\Heartland\Tests\Soap;

use Payum\Heartland\Soap\Base as Soap;
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

        $request = new Soap\GetTokenRequest();
        $request->Credential = new Soap\MerchantCredentials();
        $request->Credential->ApplicationID = 3;
        $request->Credential->Password = '{$RJ_PASSWORD}';
        $request->Credential->UserName = '{$RJ_USER}';
        $request->Credential->MerchantName = '{$MERCHANT_NAME}';
        $request->ACHAccountType = Soap\ACHAccountType::UNASSIGNED;
        $request->ACHDepositType = Soap\ACHDepositType::UNASSIGNED;
        $request->AccountHolderData = new Soap\CardHolderData();
        $request->AccountHolderData->Address = '{$T_ADDRESS}';
        $request->AccountHolderData->City = '{$T_CITY}';
        $request->AccountHolderData->FirstName = '{$T_FIRST_NAME}';
        $request->AccountHolderData->LastName = '{$T_LAST_NAME}';
        $request->AccountHolderData->State = '{$T_STATE}';
        $request->AccountHolderData->Zip = '{$T_ZIP}';
        $request->AccountNumber = '{$T_CREDIT_CARD_NUMBER}';
        $request->ExpirationMonth = '{$T_CREDIT_CARD_EXPIRATION_MONTH}';
        $request->ExpirationYear = '{$T_CREDIT_CARD_EXPIRATION_MONTH}';
        $request->PaymentMethod = Soap\TokenPaymentMethod::CREDIT;

        try {
            var_dump($client->GetToken($request));
//            var_dump($client->__getLastResponse());
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
