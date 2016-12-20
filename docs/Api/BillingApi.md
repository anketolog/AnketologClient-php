# AnketologClient\BillingApi

All URIs are relative to *https://apiv2.anketolog.loc/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingPaymentCreate**](BillingApi.md#billingPaymentCreate) | **POST** /billing/payment/create | 
[**billingPaymentInfo**](BillingApi.md#billingPaymentInfo) | **POST** /billing/payment/info | 
[**billingPaymentList**](BillingApi.md#billingPaymentList) | **POST** /billing/payment/list | 
[**billingTransferInfo**](BillingApi.md#billingTransferInfo) | **POST** /billing/transfer/info | 
[**billingTransferList**](BillingApi.md#billingTransferList) | **POST** /billing/transfer/list | 


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

$api_instance = new AnketologClient\Api\BillingApi();
$billing_payment_create_body = new \AnketologClient\Model\BillingPaymentCreateBody(); // \AnketologClient\Model\BillingPaymentCreateBody | 

try {
    $result = $api_instance->billingPaymentCreate($billing_payment_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingPaymentCreate: ', $e->getMessage(), PHP_EOL;
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



Счет на оплату

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\BillingApi();
$billing_payment_info_body = new \AnketologClient\Model\BillingPaymentInfoBody(); // \AnketologClient\Model\BillingPaymentInfoBody | 

try {
    $result = $api_instance->billingPaymentInfo($billing_payment_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingPaymentInfo: ', $e->getMessage(), PHP_EOL;
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



Счета на оплату

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\BillingApi();

try {
    $result = $api_instance->billingPaymentList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingPaymentList: ', $e->getMessage(), PHP_EOL;
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

# **billingTransferInfo**
> \AnketologClient\Model\BillingTransfer billingTransferInfo($billing_transfer_info_body)



Внутренний перевод

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\BillingApi();
$billing_transfer_info_body = new \AnketologClient\Model\BillingTransferInfoBody(); // \AnketologClient\Model\BillingTransferInfoBody | 

try {
    $result = $api_instance->billingTransferInfo($billing_transfer_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingTransferInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **billing_transfer_info_body** | [**\AnketologClient\Model\BillingTransferInfoBody**](../Model/\AnketologClient\Model\BillingTransferInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\BillingTransfer**](../Model/BillingTransfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingTransferList**
> \AnketologClient\Model\BillingTransfer[] billingTransferList()



Внутренние переводы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\BillingApi();

try {
    $result = $api_instance->billingTransferList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingTransferList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AnketologClient\Model\BillingTransfer[]**](../Model/BillingTransfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

