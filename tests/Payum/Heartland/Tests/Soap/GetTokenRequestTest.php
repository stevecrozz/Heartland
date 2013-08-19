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
        $request->getCredential()->setApplicationID(3);
        $request->getCredential()->setPassword('{$RJ_PASSWORD}');
        $request->getCredential()->setUserName('{$RJ_USER}');
        $request->getCredential()->setMerchantName('{$MERCHANT_NAME}');
        $request->setACHAccountType(Soap\ACHAccountType::UNASSIGNED);
        $request->setACHDepositType(Soap\ACHDepositType::UNASSIGNED);
        $request->getAccountHolderData()->setAddress('{$T_ADDRESS}');
        $request->getAccountHolderData()->setCity('{$T_CITY}');
        $request->getAccountHolderData()->setFirstName('{$T_FIRST_NAME}');
        $request->getAccountHolderData()->setLastName('{$T_LAST_NAME}');
        $request->getAccountHolderData()->setState('{$T_STATE}');
        $request->getAccountHolderData()->setZip('{$T_ZIP}');
        $request->setAccountNumber('{$T_CREDIT_CARD_NUMBER}');
        $request->setExpirationMonth('{$T_CREDIT_CARD_EXPIRATION_MONTH}');
        $request->setExpirationYear('{$T_CREDIT_CARD_EXPIRATION_MONTH}');
        $request->setPaymentMethod(Soap\TokenPaymentMethod::CREDIT);

        try {
            $response = $client->GetToken($request);
//            var_dump($response);
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
