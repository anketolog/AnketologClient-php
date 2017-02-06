# AnketologClient\BillingPaymentApi

All URIs are relative to *https://apiv2.anketolog.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingPaymentCreate**](BillingPaymentApi.md#billingPaymentCreate) | **POST** /billing/payment/create | 
[**billingPaymentInfo**](BillingPaymentApi.md#billingPaymentInfo) | **POST** /billing/payment/info | 
[**billingPaymentList**](BillingPaymentApi.md#billingPaymentList) | **POST** /billing/payment/list | 


# **billingPaymentCreate**
> \AnketologClient\Model\BillingPayment billingPaymentCreate($billing_payment_create_body)



Создание счета на оплату

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\BillingPaymentApi();
$billing_payment_create_body = new \AnketologClient\Model\BillingPaymentCreateBody(); // \AnketologClient\Model\BillingPaymentCreateBody | 

try {
    $result = $api_instance->billingPaymentCreate($billing_payment_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingPaymentApi->billingPaymentCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_payment_create_body** | [**\AnketologClient\Model\BillingPaymentCreateBody**](../Model/\AnketologClient\Model\BillingPaymentCreateBody.md)|  |

### Return type

[**\AnketologClient\Model\BillingPayment**](../Model/BillingPayment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentInfo**
> \AnketologClient\Model\BillingPayment billingPaymentInfo($billing_payment_info_body)



Информация о счете

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\BillingPaymentApi();
$billing_payment_info_body = new \AnketologClient\Model\BillingPaymentInfoBody(); // \AnketologClient\Model\BillingPaymentInfoBody | 

try {
    $result = $api_instance->billingPaymentInfo($billing_payment_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingPaymentApi->billingPaymentInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_payment_info_body** | [**\AnketologClient\Model\BillingPaymentInfoBody**](../Model/\AnketologClient\Model\BillingPaymentInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\BillingPayment**](../Model/BillingPayment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentList**
> \AnketologClient\Model\BillingPayment[] billingPaymentList()



Список счетов на оплату

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\BillingPaymentApi();

try {
    $result = $api_instance->billingPaymentList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingPaymentApi->billingPaymentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AnketologClient\Model\BillingPayment[]**](../Model/BillingPayment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

