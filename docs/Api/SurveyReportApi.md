# AnketologClient\SurveyReportApi

All URIs are relative to *https://apiv2.anketolog.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveyReportAggregate**](SurveyReportApi.md#surveyReportAggregate) | **POST** /survey/report/aggregate | 
[**surveyReportCreate**](SurveyReportApi.md#surveyReportCreate) | **POST** /survey/report/create | 
[**surveyReportDetail**](SurveyReportApi.md#surveyReportDetail) | **POST** /survey/report/detail | 
[**surveyReportInfo**](SurveyReportApi.md#surveyReportInfo) | **POST** /survey/report/info | 
[**surveyReportList**](SurveyReportApi.md#surveyReportList) | **POST** /survey/report/list | 


# **surveyReportAggregate**
> \AnketologClient\Model\SurveyReportAggregate surveyReportAggregate($survey_report_aggregate_body)



Сгруппированная статистика по опросу

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyReportApi();
$survey_report_aggregate_body = new \AnketologClient\Model\SurveyReportAggregateBody(); // \AnketologClient\Model\SurveyReportAggregateBody | 

try {
    $result = $api_instance->surveyReportAggregate($survey_report_aggregate_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyReportApi->surveyReportAggregate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_report_aggregate_body** | [**\AnketologClient\Model\SurveyReportAggregateBody**](../Model/\AnketologClient\Model\SurveyReportAggregateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyReportAggregate**](../Model/SurveyReportAggregate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportCreate**
> \AnketologClient\Model\SurveyReport surveyReportCreate($survey_report_create_body)



Создание запроса на формирование файла отчета

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyReportApi();
$survey_report_create_body = new \AnketologClient\Model\SurveyReportCreateBody(); // \AnketologClient\Model\SurveyReportCreateBody | 

try {
    $result = $api_instance->surveyReportCreate($survey_report_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyReportApi->surveyReportCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_report_create_body** | [**\AnketologClient\Model\SurveyReportCreateBody**](../Model/\AnketologClient\Model\SurveyReportCreateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyReport**](../Model/SurveyReport.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportDetail**
> \AnketologClient\Model\SurveyReportDetail surveyReportDetail($survey_report_detail_body)



Детальная статистика по опросу

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyReportApi();
$survey_report_detail_body = new \AnketologClient\Model\SurveyReportDetailBody(); // \AnketologClient\Model\SurveyReportDetailBody | 

try {
    $result = $api_instance->surveyReportDetail($survey_report_detail_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyReportApi->surveyReportDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_report_detail_body** | [**\AnketologClient\Model\SurveyReportDetailBody**](../Model/\AnketologClient\Model\SurveyReportDetailBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyReportDetail**](../Model/SurveyReportDetail.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportInfo**
> \AnketologClient\Model\SurveyReport surveyReportInfo($survey_report_info_body)



Информация об отчете

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyReportApi();
$survey_report_info_body = new \AnketologClient\Model\SurveyReportInfoBody(); // \AnketologClient\Model\SurveyReportInfoBody | 

try {
    $result = $api_instance->surveyReportInfo($survey_report_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyReportApi->surveyReportInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_report_info_body** | [**\AnketologClient\Model\SurveyReportInfoBody**](../Model/\AnketologClient\Model\SurveyReportInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyReport**](../Model/SurveyReport.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportList**
> \AnketologClient\Model\SurveyReport[] surveyReportList($survey_report_list_body)



Список ответов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyReportApi();
$survey_report_list_body = new \AnketologClient\Model\SurveyReportListBody(); // \AnketologClient\Model\SurveyReportListBody | 

try {
    $result = $api_instance->surveyReportList($survey_report_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyReportApi->surveyReportList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_report_list_body** | [**\AnketologClient\Model\SurveyReportListBody**](../Model/\AnketologClient\Model\SurveyReportListBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyReport[]**](../Model/SurveyReport.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

