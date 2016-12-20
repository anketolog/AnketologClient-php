# Swagger\Client\BillingApi

All URIs are relative to *https://apiv2.anketolog.loc/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingPaymentCreate**](BillingApi.md#billingPaymentCreate) | **POST** /billing/payment/create | 
[**billingPaymentInfo**](BillingApi.md#billingPaymentInfo) | **POST** /billing/payment/info | 
[**billingPaymentList**](BillingApi.md#billingPaymentList) | **POST** /billing/payment/list | 
[**billingTransferInfo**](BillingApi.md#billingTransferInfo) | **POST** /billing/transfer/info | 
[**billingTransferList**](BillingApi.md#billingTransferList) | **POST** /billing/transfer/list | 


# **billingPaymentCreate**
> \Swagger\Client\Model\BillingPayment billingPaymentCreate($body)



Создание счета на оплату

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\BillingApi();
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $api_instance->billingPaymentCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingPaymentCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/\Swagger\Client\Model\Body.md)|  |

### Return type

[**\Swagger\Client\Model\BillingPayment**](../Model/BillingPayment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentInfo**
> \Swagger\Client\Model\BillingPayment billingPaymentInfo($body)



Счет на оплату

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\BillingApi();
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | 

try {
    $result = $api_instance->billingPaymentInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingPaymentInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/\Swagger\Client\Model\Body1.md)|  |

### Return type

[**\Swagger\Client\Model\BillingPayment**](../Model/BillingPayment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingPaymentList**
> \Swagger\Client\Model\BillingPayment[] billingPaymentList()



Счета на оплату

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\BillingApi();

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

[**\Swagger\Client\Model\BillingPayment[]**](../Model/BillingPayment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingTransferInfo**
> \Swagger\Client\Model\BillingTransfer billingTransferInfo($body)



Внутренний перевод

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\BillingApi();
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | 

try {
    $result = $api_instance->billingTransferInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->billingTransferInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body2**](../Model/\Swagger\Client\Model\Body2.md)|  |

### Return type

[**\Swagger\Client\Model\BillingTransfer**](../Model/BillingTransfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billingTransferList**
> \Swagger\Client\Model\BillingTransfer[] billingTransferList()



Внутренние переводы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\BillingApi();

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

[**\Swagger\Client\Model\BillingTransfer[]**](../Model/BillingTransfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

