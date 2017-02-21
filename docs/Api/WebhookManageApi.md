# AnketologClient\WebhookManageApi

All URIs are relative to *https://apiv2.anketolog.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhookManageCreate**](WebhookManageApi.md#webhookManageCreate) | **POST** /webhook/manage/create | 
[**webhookManageInfo**](WebhookManageApi.md#webhookManageInfo) | **POST** /webhook/manage/info | 
[**webhookManageList**](WebhookManageApi.md#webhookManageList) | **POST** /webhook/manage/list | 
[**webhookManageRemove**](WebhookManageApi.md#webhookManageRemove) | **POST** /webhook/manage/remove | 
[**webhookManageUpdate**](WebhookManageApi.md#webhookManageUpdate) | **POST** /webhook/manage/update | 
[**webhookUrlAdd**](WebhookManageApi.md#webhookUrlAdd) | **POST** /webhook/url/add | 
[**webhookUrlInfo**](WebhookManageApi.md#webhookUrlInfo) | **POST** /webhook/url/info | 
[**webhookUrlList**](WebhookManageApi.md#webhookUrlList) | **POST** /webhook/url/list | 
[**webhookUrlRemove**](WebhookManageApi.md#webhookUrlRemove) | **POST** /webhook/url/remove | 
[**webhookUrlUpdate**](WebhookManageApi.md#webhookUrlUpdate) | **POST** /webhook/url/update | 


# **webhookManageCreate**
> \AnketologClient\Model\Webhook webhookManageCreate($webhook_manage_create_body)



Создание Webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookManageApi();
$webhook_manage_create_body = new \AnketologClient\Model\WebhookManageCreateBody(); // \AnketologClient\Model\WebhookManageCreateBody | 

try {
    $result = $api_instance->webhookManageCreate($webhook_manage_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookManageApi->webhookManageCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_manage_create_body** | [**\AnketologClient\Model\WebhookManageCreateBody**](../Model/\AnketologClient\Model\WebhookManageCreateBody.md)|  |

### Return type

[**\AnketologClient\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookManageInfo**
> \AnketologClient\Model\Webhook webhookManageInfo($webhook_manage_info_body)



Информация о Webhookе

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookManageApi();
$webhook_manage_info_body = new \AnketologClient\Model\WebhookManageInfoBody(); // \AnketologClient\Model\WebhookManageInfoBody | 

try {
    $result = $api_instance->webhookManageInfo($webhook_manage_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookManageApi->webhookManageInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_manage_info_body** | [**\AnketologClient\Model\WebhookManageInfoBody**](../Model/\AnketologClient\Model\WebhookManageInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookManageList**
> \AnketologClient\Model\Webhook[] webhookManageList()



Список Webhookов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookManageApi();

try {
    $result = $api_instance->webhookManageList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookManageApi->webhookManageList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AnketologClient\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookManageRemove**
> \AnketologClient\Model\InlineResponse200 webhookManageRemove($webhook_manage_remove_body)



Удаление Webhookа

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookManageApi();
$webhook_manage_remove_body = new \AnketologClient\Model\WebhookManageRemoveBody(); // \AnketologClient\Model\WebhookManageRemoveBody | 

try {
    $result = $api_instance->webhookManageRemove($webhook_manage_remove_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookManageApi->webhookManageRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_manage_remove_body** | [**\AnketologClient\Model\WebhookManageRemoveBody**](../Model/\AnketologClient\Model\WebhookManageRemoveBody.md)|  |

### Return type

[**\AnketologClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookManageUpdate**
> \AnketologClient\Model\Webhook webhookManageUpdate($webhook_manage_update_body)



Изменение Webhookа

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookManageApi();
$webhook_manage_update_body = new \AnketologClient\Model\WebhookManageUpdateBody(); // \AnketologClient\Model\WebhookManageUpdateBody | 

try {
    $result = $api_instance->webhookManageUpdate($webhook_manage_update_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookManageApi->webhookManageUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_manage_update_body** | [**\AnketologClient\Model\WebhookManageUpdateBody**](../Model/\AnketologClient\Model\WebhookManageUpdateBody.md)|  |

### Return type

[**\AnketologClient\Model\Webhook**](../Model/Webhook.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookUrlAdd**
> \AnketologClient\Model\WebhookUrl[] webhookUrlAdd($webhook_url_add_body)



Добавление URL для уведомления о событие

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookManageApi();
$webhook_url_add_body = new \AnketologClient\Model\WebhookUrlAddBody(); // \AnketologClient\Model\WebhookUrlAddBody | 

try {
    $result = $api_instance->webhookUrlAdd($webhook_url_add_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookManageApi->webhookUrlAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_url_add_body** | [**\AnketologClient\Model\WebhookUrlAddBody**](../Model/\AnketologClient\Model\WebhookUrlAddBody.md)|  |

### Return type

[**\AnketologClient\Model\WebhookUrl[]**](../Model/WebhookUrl.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookUrlInfo**
> \AnketologClient\Model\WebhookUrl webhookUrlInfo($webhook_url_info_body)



URL для уведомления о событие

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookManageApi();
$webhook_url_info_body = new \AnketologClient\Model\WebhookUrlInfoBody(); // \AnketologClient\Model\WebhookUrlInfoBody | 

try {
    $result = $api_instance->webhookUrlInfo($webhook_url_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookManageApi->webhookUrlInfo: ', $e->getMessage(), PHP_EOL;
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



Список URL для уведомления о событие

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookManageApi();
$webhook_url_list_body = new \AnketologClient\Model\WebhookUrlListBody(); // \AnketologClient\Model\WebhookUrlListBody | 

try {
    $result = $api_instance->webhookUrlList($webhook_url_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookManageApi->webhookUrlList: ', $e->getMessage(), PHP_EOL;
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
> \AnketologClient\Model\InlineResponse200 webhookUrlRemove($webhook_url_remove_body)



Удаление URL для уведомления о событие

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookManageApi();
$webhook_url_remove_body = new \AnketologClient\Model\WebhookUrlRemoveBody(); // \AnketologClient\Model\WebhookUrlRemoveBody | 

try {
    $result = $api_instance->webhookUrlRemove($webhook_url_remove_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookManageApi->webhookUrlRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_url_remove_body** | [**\AnketologClient\Model\WebhookUrlRemoveBody**](../Model/\AnketologClient\Model\WebhookUrlRemoveBody.md)|  |

### Return type

[**\AnketologClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookUrlUpdate**
> \AnketologClient\Model\WebhookUrl webhookUrlUpdate($webhook_url_update_body)



Обновление URL для уведомления о событие

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\WebhookManageApi();
$webhook_url_update_body = new \AnketologClient\Model\WebhookUrlUpdateBody(); // \AnketologClient\Model\WebhookUrlUpdateBody | 

try {
    $result = $api_instance->webhookUrlUpdate($webhook_url_update_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookManageApi->webhookUrlUpdate: ', $e->getMessage(), PHP_EOL;
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

