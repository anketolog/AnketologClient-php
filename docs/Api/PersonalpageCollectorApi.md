# AnketologClient\PersonalpageCollectorApi

All URIs are relative to *https://apiv2.anketolog.loc/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**personalpageCollectorCreateAlias**](PersonalpageCollectorApi.md#personalpageCollectorCreateAlias) | **POST** /personalpage/collector/createalias | 
[**personalpageCollectorCreateWidget**](PersonalpageCollectorApi.md#personalpageCollectorCreateWidget) | **POST** /personalpage/collector/createwidget | 
[**personalpageCollectorList**](PersonalpageCollectorApi.md#personalpageCollectorList) | **POST** /personalpage/collector/list | 
[**personalpageCollectorUpdateAlias**](PersonalpageCollectorApi.md#personalpageCollectorUpdateAlias) | **POST** /personalpage/collector/updatealias | 
[**personalpageCollectorUpdateWidget**](PersonalpageCollectorApi.md#personalpageCollectorUpdateWidget) | **POST** /personalpage/collector/updatewidget | 


# **personalpageCollectorCreateAlias**
> \AnketologClient\Model\PersonalPageAliasCollector personalpageCollectorCreateAlias($personalpage_collector_create_alias_body)



Создание способа распространения персональной страницы \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageCollectorApi();
$personalpage_collector_create_alias_body = new \AnketologClient\Model\PersonalpageCollectorCreateAliasBody(); // \AnketologClient\Model\PersonalpageCollectorCreateAliasBody | 

try {
    $result = $api_instance->personalpageCollectorCreateAlias($personalpage_collector_create_alias_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageCollectorApi->personalpageCollectorCreateAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_collector_create_alias_body** | [**\AnketologClient\Model\PersonalpageCollectorCreateAliasBody**](../Model/\AnketologClient\Model\PersonalpageCollectorCreateAliasBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageAliasCollector**](../Model/PersonalPageAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorCreateWidget**
> \AnketologClient\Model\PersonalPageWidgetCollector personalpageCollectorCreateWidget($personalpage_collector_create_widget_body)



Создание способа распространения персональной страницы \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageCollectorApi();
$personalpage_collector_create_widget_body = new \AnketologClient\Model\PersonalpageCollectorCreateWidgetBody(); // \AnketologClient\Model\PersonalpageCollectorCreateWidgetBody | 

try {
    $result = $api_instance->personalpageCollectorCreateWidget($personalpage_collector_create_widget_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageCollectorApi->personalpageCollectorCreateWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_collector_create_widget_body** | [**\AnketologClient\Model\PersonalpageCollectorCreateWidgetBody**](../Model/\AnketologClient\Model\PersonalpageCollectorCreateWidgetBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageWidgetCollector**](../Model/PersonalPageWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorList**
> \AnketologClient\Model\PersonalPageCollector[] personalpageCollectorList($personalpage_collector_list_body)



Способы распространения персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageCollectorApi();
$personalpage_collector_list_body = new \AnketologClient\Model\PersonalpageCollectorListBody(); // \AnketologClient\Model\PersonalpageCollectorListBody | 

try {
    $result = $api_instance->personalpageCollectorList($personalpage_collector_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageCollectorApi->personalpageCollectorList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_collector_list_body** | [**\AnketologClient\Model\PersonalpageCollectorListBody**](../Model/\AnketologClient\Model\PersonalpageCollectorListBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageCollector[]**](../Model/PersonalPageCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorUpdateAlias**
> \AnketologClient\Model\PersonalPageAliasCollector personalpageCollectorUpdateAlias($personalpage_collector_update_alias_body)



Редактирование способа распространения персональной страницы \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageCollectorApi();
$personalpage_collector_update_alias_body = new \AnketologClient\Model\PersonalpageCollectorUpdateAliasBody(); // \AnketologClient\Model\PersonalpageCollectorUpdateAliasBody | 

try {
    $result = $api_instance->personalpageCollectorUpdateAlias($personalpage_collector_update_alias_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageCollectorApi->personalpageCollectorUpdateAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_collector_update_alias_body** | [**\AnketologClient\Model\PersonalpageCollectorUpdateAliasBody**](../Model/\AnketologClient\Model\PersonalpageCollectorUpdateAliasBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageAliasCollector**](../Model/PersonalPageAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorUpdateWidget**
> \AnketologClient\Model\PersonalPageWidgetCollector personalpageCollectorUpdateWidget($personalpage_collector_update_widget_body)



Редактирование способа распространения персональной страницы \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageCollectorApi();
$personalpage_collector_update_widget_body = new \AnketologClient\Model\PersonalpageCollectorUpdateWidgetBody(); // \AnketologClient\Model\PersonalpageCollectorUpdateWidgetBody | 

try {
    $result = $api_instance->personalpageCollectorUpdateWidget($personalpage_collector_update_widget_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageCollectorApi->personalpageCollectorUpdateWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_collector_update_widget_body** | [**\AnketologClient\Model\PersonalpageCollectorUpdateWidgetBody**](../Model/\AnketologClient\Model\PersonalpageCollectorUpdateWidgetBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageWidgetCollector**](../Model/PersonalPageWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

