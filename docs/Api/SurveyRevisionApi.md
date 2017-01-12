# AnketologClient\SurveyRevisionApi

All URIs are relative to *https://${app.apiv2.domain}/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveyRevisionInfo**](SurveyRevisionApi.md#surveyRevisionInfo) | **POST** /survey/revision/info | 
[**surveyRevisionList**](SurveyRevisionApi.md#surveyRevisionList) | **POST** /survey/revision/list | 


# **surveyRevisionInfo**
> \AnketologClient\Model\SurveyRevision surveyRevisionInfo($survey_revision_info_body)



Информация о ревизии опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyRevisionApi();
$survey_revision_info_body = new \AnketologClient\Model\SurveyRevisionInfoBody(); // \AnketologClient\Model\SurveyRevisionInfoBody | 

try {
    $result = $api_instance->surveyRevisionInfo($survey_revision_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyRevisionApi->surveyRevisionInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_revision_info_body** | [**\AnketologClient\Model\SurveyRevisionInfoBody**](../Model/\AnketologClient\Model\SurveyRevisionInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyRevision**](../Model/SurveyRevision.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyRevisionList**
> \AnketologClient\Model\SurveyRevision[] surveyRevisionList($survey_revision_list_body)



Список ревизий опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyRevisionApi();
$survey_revision_list_body = new \AnketologClient\Model\SurveyRevisionListBody(); // \AnketologClient\Model\SurveyRevisionListBody | 

try {
    $result = $api_instance->surveyRevisionList($survey_revision_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyRevisionApi->surveyRevisionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_revision_list_body** | [**\AnketologClient\Model\SurveyRevisionListBody**](../Model/\AnketologClient\Model\SurveyRevisionListBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyRevision[]**](../Model/SurveyRevision.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

