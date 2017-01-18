# AnketologClient\SurveyTemplateApi

All URIs are relative to *https://apiv2.anketolog.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveyTemplateList**](SurveyTemplateApi.md#surveyTemplateList) | **POST** /survey/template/list | 


# **surveyTemplateList**
> \AnketologClient\Model\SurveyTemplate surveyTemplateList()



Список шаблонов опросов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyTemplateApi();

try {
    $result = $api_instance->surveyTemplateList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyTemplateApi->surveyTemplateList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AnketologClient\Model\SurveyTemplate**](../Model/SurveyTemplate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

