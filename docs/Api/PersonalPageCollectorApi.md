# AnketologClient\PersonalPageCollectorApi

All URIs are relative to *https://apiv2.anketolog.loc/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**personalpageCollectorCreateAlias**](PersonalPageCollectorApi.md#personalpageCollectorCreateAlias) | **POST** /personalpage/collector/createalias | 
[**personalpageCollectorCreateWidget**](PersonalPageCollectorApi.md#personalpageCollectorCreateWidget) | **POST** /personalpage/collector/createwidget | 
[**personalpageCollectorList**](PersonalPageCollectorApi.md#personalpageCollectorList) | **POST** /personalpage/collector/list | 
[**personalpageCollectorUpdateAlias**](PersonalPageCollectorApi.md#personalpageCollectorUpdateAlias) | **POST** /personalpage/collector/updatealias | 
[**personalpageCollectorUpdateWidget**](PersonalPageCollectorApi.md#personalpageCollectorUpdateWidget) | **POST** /personalpage/collector/updatewidget | 


# **personalpageCollectorCreateAlias**
> \AnketologClient\Model\PersonalPageAliasCollector personalpageCollectorCreateAlias($personal_page_collector_create_alias_body)



Создание способа распространения персональной страницы \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalPageCollectorApi();
$personal_page_collector_create_alias_body = new \AnketologClient\Model\PersonalPageCollectorCreateAliasBody(); // \AnketologClient\Model\PersonalPageCollectorCreateAliasBody | 

try {
    $result = $api_instance->personalpageCollectorCreateAlias($personal_page_collector_create_alias_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalPageCollectorApi->personalpageCollectorCreateAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personal_page_collector_create_alias_body** | [**\AnketologClient\Model\PersonalPageCollectorCreateAliasBody**](../Model/\AnketologClient\Model\PersonalPageCollectorCreateAliasBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageAliasCollector**](../Model/PersonalPageAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorCreateWidget**
> \AnketologClient\Model\PersonalPageWidgetCollector personalpageCollectorCreateWidget($personal_page_collector_create_widget_body)



Создание способа распространения персональной страницы \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalPageCollectorApi();
$personal_page_collector_create_widget_body = new \AnketologClient\Model\PersonalPageCollectorCreateWidgetBody(); // \AnketologClient\Model\PersonalPageCollectorCreateWidgetBody | 

try {
    $result = $api_instance->personalpageCollectorCreateWidget($personal_page_collector_create_widget_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalPageCollectorApi->personalpageCollectorCreateWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personal_page_collector_create_widget_body** | [**\AnketologClient\Model\PersonalPageCollectorCreateWidgetBody**](../Model/\AnketologClient\Model\PersonalPageCollectorCreateWidgetBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageWidgetCollector**](../Model/PersonalPageWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorList**
> \AnketologClient\Model\PersonalPageCollector[] personalpageCollectorList($personal_page_collector_list_body)



Способы распространения персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalPageCollectorApi();
$personal_page_collector_list_body = new \AnketologClient\Model\PersonalPageCollectorListBody(); // \AnketologClient\Model\PersonalPageCollectorListBody | 

try {
    $result = $api_instance->personalpageCollectorList($personal_page_collector_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalPageCollectorApi->personalpageCollectorList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personal_page_collector_list_body** | [**\AnketologClient\Model\PersonalPageCollectorListBody**](../Model/\AnketologClient\Model\PersonalPageCollectorListBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageCollector[]**](../Model/PersonalPageCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorUpdateAlias**
> \AnketologClient\Model\PersonalPageAliasCollector personalpageCollectorUpdateAlias($personal_page_collector_update_alias_body)



Редактирование способа распространения персональной страницы \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalPageCollectorApi();
$personal_page_collector_update_alias_body = new \AnketologClient\Model\PersonalPageCollectorUpdateAliasBody(); // \AnketologClient\Model\PersonalPageCollectorUpdateAliasBody | 

try {
    $result = $api_instance->personalpageCollectorUpdateAlias($personal_page_collector_update_alias_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalPageCollectorApi->personalpageCollectorUpdateAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personal_page_collector_update_alias_body** | [**\AnketologClient\Model\PersonalPageCollectorUpdateAliasBody**](../Model/\AnketologClient\Model\PersonalPageCollectorUpdateAliasBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageAliasCollector**](../Model/PersonalPageAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorUpdateWidget**
> \AnketologClient\Model\PersonalPageWidgetCollector personalpageCollectorUpdateWidget($personal_page_collector_update_widget_body)



Редактирование способа распространения персональной страницы \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalPageCollectorApi();
$personal_page_collector_update_widget_body = new \AnketologClient\Model\PersonalPageCollectorUpdateWidgetBody(); // \AnketologClient\Model\PersonalPageCollectorUpdateWidgetBody | 

try {
    $result = $api_instance->personalpageCollectorUpdateWidget($personal_page_collector_update_widget_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalPageCollectorApi->personalpageCollectorUpdateWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personal_page_collector_update_widget_body** | [**\AnketologClient\Model\PersonalPageCollectorUpdateWidgetBody**](../Model/\AnketologClient\Model\PersonalPageCollectorUpdateWidgetBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageWidgetCollector**](../Model/PersonalPageWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

