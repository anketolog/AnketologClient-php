# SwaggerClient-php

### Клиенты:  
* [**PHP**](https://github.com/anketolog/AnketologClient-php)  

### Клиенты на других языках:  
* Скачайте конфигурационный [swagger-файл](https://anketolog.ru/api/external/v2/docs/anketolog.yaml) 
* Воспользуйтесь официальным [генератором](http://swagger.io/swagger-codegen/)([список поддерживаемых языков](https://github.com/swagger-api/swagger-codegen#api-clients))

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0
- Build date: 2016-12-20T10:51:12.947Z
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/anketolog/AnketologClient-php.git"
    }
  ],
  "require": {
    "anketolog/AnketologClient-php": "^1.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');

$api_instance = new AnketologClient\Api\BillingApi();
$billing_payment_create_body = new \AnketologClient\Model\BillingPaymentCreateBody([
  "amount" => 100.00,
  "profile" => [
    "type" => "legal",
    "legal_name" => "IOM Anketolog",
  ]
]); // \AnketologClient\Model\BillingPaymentCreateBody | 

try {
    $result = $api_instance->billingPaymentCreate($billing_payment_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingPaymentCreate: ', $e->getMessage(), PHP_EOL;
}

?>
```

## apiKey

- **Type**: API key
- **API key parameter name**: x-anketolog-apikey
- **Location**: HTTP header


## Author

IOM Anketolog 

help@anketolog.ru

## Generate Command

```bash
java -jar /vagrant/swagger-codegen-cli.jar generate \
    -i v2/docs/anketolog.yaml \
    -o v2/AnketologClient-php \
    -l php \
    --invoker-package AnketologClient \
    --model-package AnketologClient\\Model \
    --api-package AnketologClient\\Api \
    --additional-properties composerVendorName=anketolog,composerProjectName=AnketologClient-php
```