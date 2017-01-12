# AnketologClient\SurveyAnswerApi

All URIs are relative to *https://${app.apiv2.domain}/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveyAnswerInfo**](SurveyAnswerApi.md#surveyAnswerInfo) | **POST** /survey/answer/info | 
[**surveyAnswerList**](SurveyAnswerApi.md#surveyAnswerList) | **POST** /survey/answer/list | 


# **surveyAnswerInfo**
> \AnketologClient\Model\SurveyAnswer surveyAnswerInfo($survey_answer_info_body)



Информация об ответе на опрос

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyAnswerApi();
$survey_answer_info_body = new \AnketologClient\Model\SurveyAnswerInfoBody(); // \AnketologClient\Model\SurveyAnswerInfoBody | 

try {
    $result = $api_instance->surveyAnswerInfo($survey_answer_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyAnswerApi->surveyAnswerInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_answer_info_body** | [**\AnketologClient\Model\SurveyAnswerInfoBody**](../Model/\AnketologClient\Model\SurveyAnswerInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyAnswer**](../Model/SurveyAnswer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyAnswerList**
> \AnketologClient\Model\SurveyAnswer[] surveyAnswerList($survey_answer_list_body)



Список ответов на опрос

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyAnswerApi();
$survey_answer_list_body = new \AnketologClient\Model\SurveyAnswerListBody(); // \AnketologClient\Model\SurveyAnswerListBody | 

try {
    $result = $api_instance->surveyAnswerList($survey_answer_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyAnswerApi->surveyAnswerList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_answer_list_body** | [**\AnketologClient\Model\SurveyAnswerListBody**](../Model/\AnketologClient\Model\SurveyAnswerListBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyAnswer[]**](../Model/SurveyAnswer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

