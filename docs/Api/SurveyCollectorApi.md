# AnketologClient\SurveyCollectorApi

All URIs are relative to *https://apiv2.anketolog.loc/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveyCollectorCreateAlias**](SurveyCollectorApi.md#surveyCollectorCreateAlias) | **POST** /survey/collector/createalias | 
[**surveyCollectorCreateExtralink**](SurveyCollectorApi.md#surveyCollectorCreateExtralink) | **POST** /survey/collector/createextralink | 
[**surveyCollectorCreateWidget**](SurveyCollectorApi.md#surveyCollectorCreateWidget) | **POST** /survey/collector/createwidget | 
[**surveyCollectorList**](SurveyCollectorApi.md#surveyCollectorList) | **POST** /survey/collector/list | 
[**surveyCollectorRemoveextralink**](SurveyCollectorApi.md#surveyCollectorRemoveextralink) | **POST** /survey/collector/removeextralink | 
[**surveyCollectorUpdateAlias**](SurveyCollectorApi.md#surveyCollectorUpdateAlias) | **POST** /survey/collector/updatealias | 
[**surveyCollectorUpdateExtralink**](SurveyCollectorApi.md#surveyCollectorUpdateExtralink) | **POST** /survey/collector/updateextralink | 
[**surveyCollectorUpdateWidget**](SurveyCollectorApi.md#surveyCollectorUpdateWidget) | **POST** /survey/collector/updatewidget | 


# **surveyCollectorCreateAlias**
> \AnketologClient\Model\SurveyAliasCollector surveyCollectorCreateAlias($survey_collector_create_alias_body)



Создание способа распространения анкеты \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyCollectorApi();
$survey_collector_create_alias_body = new \AnketologClient\Model\SurveyCollectorCreateAliasBody(); // \AnketologClient\Model\SurveyCollectorCreateAliasBody | 

try {
    $result = $api_instance->surveyCollectorCreateAlias($survey_collector_create_alias_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyCollectorApi->surveyCollectorCreateAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_create_alias_body** | [**\AnketologClient\Model\SurveyCollectorCreateAliasBody**](../Model/\AnketologClient\Model\SurveyCollectorCreateAliasBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyAliasCollector**](../Model/SurveyAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorCreateExtralink**
> \AnketologClient\Model\SurveyExtralinkCollector surveyCollectorCreateExtralink($survey_collector_create_extralink_body)



Создание способа распространения анкеты \"доп. ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyCollectorApi();
$survey_collector_create_extralink_body = new \AnketologClient\Model\SurveyCollectorCreateExtralinkBody(); // \AnketologClient\Model\SurveyCollectorCreateExtralinkBody | 

try {
    $result = $api_instance->surveyCollectorCreateExtralink($survey_collector_create_extralink_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyCollectorApi->surveyCollectorCreateExtralink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_create_extralink_body** | [**\AnketologClient\Model\SurveyCollectorCreateExtralinkBody**](../Model/\AnketologClient\Model\SurveyCollectorCreateExtralinkBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyExtralinkCollector**](../Model/SurveyExtralinkCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorCreateWidget**
> \AnketologClient\Model\SurveyWidgetCollector surveyCollectorCreateWidget($survey_collector_create_widget_body)



Создание способа распространения анкеты \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyCollectorApi();
$survey_collector_create_widget_body = new \AnketologClient\Model\SurveyCollectorCreateWidgetBody(); // \AnketologClient\Model\SurveyCollectorCreateWidgetBody | 

try {
    $result = $api_instance->surveyCollectorCreateWidget($survey_collector_create_widget_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyCollectorApi->surveyCollectorCreateWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_create_widget_body** | [**\AnketologClient\Model\SurveyCollectorCreateWidgetBody**](../Model/\AnketologClient\Model\SurveyCollectorCreateWidgetBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyWidgetCollector**](../Model/SurveyWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorList**
> \AnketologClient\Model\SurveyCollector[] surveyCollectorList($survey_collector_list_body)



Способы распространения опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyCollectorApi();
$survey_collector_list_body = new \AnketologClient\Model\SurveyCollectorListBody(); // \AnketologClient\Model\SurveyCollectorListBody | 

try {
    $result = $api_instance->surveyCollectorList($survey_collector_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyCollectorApi->surveyCollectorList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_list_body** | [**\AnketologClient\Model\SurveyCollectorListBody**](../Model/\AnketologClient\Model\SurveyCollectorListBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyCollector[]**](../Model/SurveyCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorRemoveextralink**
> \AnketologClient\Model\InlineResponse200 surveyCollectorRemoveextralink($survey_collector_removeextralink_body)



Удаление способа распространения анкеты \"доп. ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyCollectorApi();
$survey_collector_removeextralink_body = new \AnketologClient\Model\SurveyCollectorRemoveextralinkBody(); // \AnketologClient\Model\SurveyCollectorRemoveextralinkBody | 

try {
    $result = $api_instance->surveyCollectorRemoveextralink($survey_collector_removeextralink_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyCollectorApi->surveyCollectorRemoveextralink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_removeextralink_body** | [**\AnketologClient\Model\SurveyCollectorRemoveextralinkBody**](../Model/\AnketologClient\Model\SurveyCollectorRemoveextralinkBody.md)|  |

### Return type

[**\AnketologClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorUpdateAlias**
> \AnketologClient\Model\SurveyAliasCollector surveyCollectorUpdateAlias($survey_collector_update_alias_body)



Редактирование способа распространения анкеты \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyCollectorApi();
$survey_collector_update_alias_body = new \AnketologClient\Model\SurveyCollectorUpdateAliasBody(); // \AnketologClient\Model\SurveyCollectorUpdateAliasBody | 

try {
    $result = $api_instance->surveyCollectorUpdateAlias($survey_collector_update_alias_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyCollectorApi->surveyCollectorUpdateAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_update_alias_body** | [**\AnketologClient\Model\SurveyCollectorUpdateAliasBody**](../Model/\AnketologClient\Model\SurveyCollectorUpdateAliasBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyAliasCollector**](../Model/SurveyAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorUpdateExtralink**
> \AnketologClient\Model\SurveyExtralinkCollector surveyCollectorUpdateExtralink($survey_collector_update_extralink_body)



Редактирование способа распространения анкеты \"доп. ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyCollectorApi();
$survey_collector_update_extralink_body = new \AnketologClient\Model\SurveyCollectorUpdateExtralinkBody(); // \AnketologClient\Model\SurveyCollectorUpdateExtralinkBody | 

try {
    $result = $api_instance->surveyCollectorUpdateExtralink($survey_collector_update_extralink_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyCollectorApi->surveyCollectorUpdateExtralink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_update_extralink_body** | [**\AnketologClient\Model\SurveyCollectorUpdateExtralinkBody**](../Model/\AnketologClient\Model\SurveyCollectorUpdateExtralinkBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyExtralinkCollector**](../Model/SurveyExtralinkCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorUpdateWidget**
> \AnketologClient\Model\SurveyWidgetCollector surveyCollectorUpdateWidget($survey_collector_update_widget_body)



Редактирование способа распространения анкеты \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyCollectorApi();
$survey_collector_update_widget_body = new \AnketologClient\Model\SurveyCollectorUpdateWidgetBody(); // \AnketologClient\Model\SurveyCollectorUpdateWidgetBody | 

try {
    $result = $api_instance->surveyCollectorUpdateWidget($survey_collector_update_widget_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyCollectorApi->surveyCollectorUpdateWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_update_widget_body** | [**\AnketologClient\Model\SurveyCollectorUpdateWidgetBody**](../Model/\AnketologClient\Model\SurveyCollectorUpdateWidgetBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyWidgetCollector**](../Model/SurveyWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

