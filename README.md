Heartland
=========
[![Build Status](https://travis-ci.org/66Ton99/Heartland.png?branch=master)](https://travis-ci.org/66Ton99/Heartland)

Its provide API connection to http://www.heartlandpaymentsystems.com

Install Dependencies
--------------------

``` bash
$> curl http://getcomposer.org/installer | php
$> php composer.phar install # --dev # for dev dependencies
```

To regenerate SOAP classes

```
php vendor/besimple/wsdl2php/bin/wsdl2php.php \
    -w"https://heartlandpaymentservices.net/BillingDataManagement/v3/BillingDataManagementService.svc?wsdl" \
    -v2 \
    -nPayum\\Heartland\\Soap\\Base \
    -cClient \
    -osrc \
    --backup \
    --instance_on_getter \
    --access=protected
```
