# AnketologClient\SurveyFilterApi

All URIs are relative to *https://${app.apiv2.domain}/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveyFilterCreate**](SurveyFilterApi.md#surveyFilterCreate) | **POST** /survey/filter/create | 
[**surveyFilterInfo**](SurveyFilterApi.md#surveyFilterInfo) | **POST** /survey/filter/info | 
[**surveyFilterList**](SurveyFilterApi.md#surveyFilterList) | **POST** /survey/filter/list | 


# **surveyFilterCreate**
> \AnketologClient\Model\SurveyFilter surveyFilterCreate($survey_filter_create_body)



Создание фильтра ответов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyFilterApi();
$survey_filter_create_body = new \AnketologClient\Model\SurveyFilterCreateBody(); // \AnketologClient\Model\SurveyFilterCreateBody | 

try {
    $result = $api_instance->surveyFilterCreate($survey_filter_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyFilterApi->surveyFilterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_filter_create_body** | [**\AnketologClient\Model\SurveyFilterCreateBody**](../Model/\AnketologClient\Model\SurveyFilterCreateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyFilter**](../Model/SurveyFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyFilterInfo**
> \AnketologClient\Model\SurveyFilter surveyFilterInfo($survey_filter_info_body)



Информация о фильтре ответов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyFilterApi();
$survey_filter_info_body = new \AnketologClient\Model\SurveyFilterInfoBody(); // \AnketologClient\Model\SurveyFilterInfoBody | 

try {
    $result = $api_instance->surveyFilterInfo($survey_filter_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyFilterApi->surveyFilterInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_filter_info_body** | [**\AnketologClient\Model\SurveyFilterInfoBody**](../Model/\AnketologClient\Model\SurveyFilterInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyFilter**](../Model/SurveyFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyFilterList**
> \AnketologClient\Model\SurveyFilter[] surveyFilterList($survey_filter_list_body)



Список фильтров ответов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyFilterApi();
$survey_filter_list_body = new \AnketologClient\Model\SurveyFilterListBody(); // \AnketologClient\Model\SurveyFilterListBody | 

try {
    $result = $api_instance->surveyFilterList($survey_filter_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyFilterApi->surveyFilterList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_filter_list_body** | [**\AnketologClient\Model\SurveyFilterListBody**](../Model/\AnketologClient\Model\SurveyFilterListBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyFilter[]**](../Model/SurveyFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

