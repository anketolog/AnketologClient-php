# AnketologClient\BillingTransferApi

All URIs are relative to *https://${app.apiv2.domain}/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billingTransferInfo**](BillingTransferApi.md#billingTransferInfo) | **POST** /billing/transfer/info | 
[**billingTransferList**](BillingTransferApi.md#billingTransferList) | **POST** /billing/transfer/list | 


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

$api_instance = new AnketologClient\Api\BillingTransferApi();
$billing_transfer_info_body = new \AnketologClient\Model\BillingTransferInfoBody(); // \AnketologClient\Model\BillingTransferInfoBody | 

try {
    $result = $api_instance->billingTransferInfo($billing_transfer_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingTransferApi->billingTransferInfo: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new AnketologClient\Api\BillingTransferApi();

try {
    $result = $api_instance->billingTransferList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingTransferApi->billingTransferList: ', $e->getMessage(), PHP_EOL;
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

