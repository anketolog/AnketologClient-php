# AnketologClient\WebhookUrlApi

All URIs are relative to *https://apiv2.anketolog.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhookUrlAdd**](WebhookUrlApi.md#webhookUrlAdd) | **POST** /webhook/url/add | 
[**webhookUrlInfo**](WebhookUrlApi.md#webhookUrlInfo) | **POST** /webhook/url/info | 
[**webhookUrlList**](WebhookUrlApi.md#webhookUrlList) | **POST** /webhook/url/list | 
[**webhookUrlRemove**](WebhookUrlApi.md#webhookUrlRemove) | **POST** /webhook/url/remove | 
[**webhookUrlUpdate**](WebhookUrlApi.md#webhookUrlUpdate) | **POST** /webhook/url/update | 


# **webhookUrlAdd**
> \AnketologClient\Model\WebhookUrl webhookUrlAdd($webhook_url_add_body)



Добавление url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookUrlApi();
$webhook_url_add_body = new \AnketologClient\Model\WebhookUrlAddBody(); // \AnketologClient\Model\WebhookUrlAddBody | 

try {
    $result = $api_instance->webhookUrlAdd($webhook_url_add_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookUrlApi->webhookUrlAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_url_add_body** | [**\AnketologClient\Model\WebhookUrlAddBody**](../Model/\AnketologClient\Model\WebhookUrlAddBody.md)|  |

### Return type

[**\AnketologClient\Model\WebhookUrl**](../Model/WebhookUrl.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookUrlInfo**
> \AnketologClient\Model\WebhookUrl webhookUrlInfo($webhook_url_info_body)



Информация о webhook url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookUrlApi();
$webhook_url_info_body = new \AnketologClient\Model\WebhookUrlInfoBody(); // \AnketologClient\Model\WebhookUrlInfoBody | 

try {
    $result = $api_instance->webhookUrlInfo($webhook_url_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookUrlApi->webhookUrlInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_url_info_body** | [**\AnketologClient\Model\WebhookUrlInfoBody**](../Model/\AnketologClient\Model\WebhookUrlInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\WebhookUrl**](../Model/WebhookUrl.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookUrlList**
> \AnketologClient\Model\WebhookUrl[] webhookUrlList($webhook_url_list_body)



Список webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookUrlApi();
$webhook_url_list_body = new \AnketologClient\Model\WebhookUrlListBody(); // \AnketologClient\Model\WebhookUrlListBody | 

try {
    $result = $api_instance->webhookUrlList($webhook_url_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookUrlApi->webhookUrlList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_url_list_body** | [**\AnketologClient\Model\WebhookUrlListBody**](../Model/\AnketologClient\Model\WebhookUrlListBody.md)|  |

### Return type

[**\AnketologClient\Model\WebhookUrl[]**](../Model/WebhookUrl.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookUrlRemove**
> \AnketologClient\Model\WebhookUrl webhookUrlRemove($webhook_url_remove_body)



Удаление url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookUrlApi();
$webhook_url_remove_body = new \AnketologClient\Model\WebhookUrlRemoveBody(); // \AnketologClient\Model\WebhookUrlRemoveBody | 

try {
    $result = $api_instance->webhookUrlRemove($webhook_url_remove_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookUrlApi->webhookUrlRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_url_remove_body** | [**\AnketologClient\Model\WebhookUrlRemoveBody**](../Model/\AnketologClient\Model\WebhookUrlRemoveBody.md)|  |

### Return type

[**\AnketologClient\Model\WebhookUrl**](../Model/WebhookUrl.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookUrlUpdate**
> \AnketologClient\Model\WebhookUrl webhookUrlUpdate($webhook_url_update_body)



Обновление Url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookUrlApi();
$webhook_url_update_body = new \AnketologClient\Model\WebhookUrlUpdateBody(); // \AnketologClient\Model\WebhookUrlUpdateBody | 

try {
    $result = $api_instance->webhookUrlUpdate($webhook_url_update_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookUrlApi->webhookUrlUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_url_update_body** | [**\AnketologClient\Model\WebhookUrlUpdateBody**](../Model/\AnketologClient\Model\WebhookUrlUpdateBody.md)|  |

### Return type

[**\AnketologClient\Model\WebhookUrl**](../Model/WebhookUrl.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

