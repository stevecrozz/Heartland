Heartland
=========


To regenerate SOAP classes

```
php vendor/besimple/wsdl2php/bin/wsdl2php.php \
    -w "https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?wsdl" \
    -v 1.2 \
    -n Payum\\Heartland\\Soap \
    -c Client \
    -o src
```
