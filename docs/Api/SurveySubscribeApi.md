# AnketologClient\SurveySubscribeApi

All URIs are relative to *https://apiv2.anketolog.loc/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveySubscribeCreate**](SurveySubscribeApi.md#surveySubscribeCreate) | **POST** /survey/subscribe/create | 
[**surveySubscribeDelete**](SurveySubscribeApi.md#surveySubscribeDelete) | **POST** /survey/subscribe/delete | 
[**surveySubscribeInfo**](SurveySubscribeApi.md#surveySubscribeInfo) | **POST** /survey/subscribe/info | 
[**surveySubscribeList**](SurveySubscribeApi.md#surveySubscribeList) | **POST** /survey/subscribe/list | 
[**surveySubscribeUpdate**](SurveySubscribeApi.md#surveySubscribeUpdate) | **POST** /survey/subscribe/update | 


# **surveySubscribeCreate**
> \AnketologClient\Model\SurveySubscribe surveySubscribeCreate($survey_subscribe_create_body)



Создание подписки на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveySubscribeApi();
$survey_subscribe_create_body = new \AnketologClient\Model\SurveySubscribeCreateBody(); // \AnketologClient\Model\SurveySubscribeCreateBody | 

try {
    $result = $api_instance->surveySubscribeCreate($survey_subscribe_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveySubscribeApi->surveySubscribeCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_subscribe_create_body** | [**\AnketologClient\Model\SurveySubscribeCreateBody**](../Model/\AnketologClient\Model\SurveySubscribeCreateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySubscribe**](../Model/SurveySubscribe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeDelete**
> string surveySubscribeDelete($survey_subscribe_delete_body)



Удаление подписки на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveySubscribeApi();
$survey_subscribe_delete_body = new \AnketologClient\Model\SurveySubscribeDeleteBody(); // \AnketologClient\Model\SurveySubscribeDeleteBody | 

try {
    $result = $api_instance->surveySubscribeDelete($survey_subscribe_delete_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveySubscribeApi->surveySubscribeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_subscribe_delete_body** | [**\AnketologClient\Model\SurveySubscribeDeleteBody**](../Model/\AnketologClient\Model\SurveySubscribeDeleteBody.md)|  |

### Return type

**string**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeInfo**
> \AnketologClient\Model\SurveySubscribe surveySubscribeInfo($survey_subscribe_info_body)



Информация о подписке на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveySubscribeApi();
$survey_subscribe_info_body = new \AnketologClient\Model\SurveySubscribeInfoBody(); // \AnketologClient\Model\SurveySubscribeInfoBody | 

try {
    $result = $api_instance->surveySubscribeInfo($survey_subscribe_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveySubscribeApi->surveySubscribeInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_subscribe_info_body** | [**\AnketologClient\Model\SurveySubscribeInfoBody**](../Model/\AnketologClient\Model\SurveySubscribeInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySubscribe**](../Model/SurveySubscribe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeList**
> \AnketologClient\Model\SurveySubscribe[] surveySubscribeList($survey_subscribe_list_body)



Список подписок на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveySubscribeApi();
$survey_subscribe_list_body = new \AnketologClient\Model\SurveySubscribeListBody(); // \AnketologClient\Model\SurveySubscribeListBody | 

try {
    $result = $api_instance->surveySubscribeList($survey_subscribe_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveySubscribeApi->surveySubscribeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_subscribe_list_body** | [**\AnketologClient\Model\SurveySubscribeListBody**](../Model/\AnketologClient\Model\SurveySubscribeListBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySubscribe[]**](../Model/SurveySubscribe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeUpdate**
> \AnketologClient\Model\SurveySubscribe surveySubscribeUpdate($survey_subscribe_update_body)



Редактирование подписки на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveySubscribeApi();
$survey_subscribe_update_body = new \AnketologClient\Model\SurveySubscribeUpdateBody(); // \AnketologClient\Model\SurveySubscribeUpdateBody | 

try {
    $result = $api_instance->surveySubscribeUpdate($survey_subscribe_update_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveySubscribeApi->surveySubscribeUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_subscribe_update_body** | [**\AnketologClient\Model\SurveySubscribeUpdateBody**](../Model/\AnketologClient\Model\SurveySubscribeUpdateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySubscribe**](../Model/SurveySubscribe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

