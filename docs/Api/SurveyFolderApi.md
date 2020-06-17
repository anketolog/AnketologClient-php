# AnketologClient\SurveyFolderApi

All URIs are relative to *https://apiv2.anketolog.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveyFolderCreate**](SurveyFolderApi.md#surveyFolderCreate) | **POST** /survey/folder/create | 
[**surveyFolderList**](SurveyFolderApi.md#surveyFolderList) | **POST** /survey/folder/list | 
[**surveyFolderMoveSurveys**](SurveyFolderApi.md#surveyFolderMoveSurveys) | **POST** /survey/folder/moveSurveys | 
[**surveyFolderRemove**](SurveyFolderApi.md#surveyFolderRemove) | **POST** /survey/folder/remove | 
[**surveyFolderRename**](SurveyFolderApi.md#surveyFolderRename) | **POST** /survey/folder/rename | 


# **surveyFolderCreate**
> \AnketologClient\Model\SurveyFolder surveyFolderCreate($survey_filter_create_body)



Создание папки

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyFolderApi();
$survey_filter_create_body = new \AnketologClient\Model\SurveyFilterCreateBody1(); // \AnketologClient\Model\SurveyFilterCreateBody1 | 

try {
    $result = $api_instance->surveyFolderCreate($survey_filter_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyFolderApi->surveyFolderCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_filter_create_body** | [**\AnketologClient\Model\SurveyFilterCreateBody1**](../Model/\AnketologClient\Model\SurveyFilterCreateBody1.md)|  |

### Return type

[**\AnketologClient\Model\SurveyFolder**](../Model/SurveyFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyFolderList**
> \AnketologClient\Model\SurveyFolder[] surveyFolderList()



Список папок

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyFolderApi();

try {
    $result = $api_instance->surveyFolderList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyFolderApi->surveyFolderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AnketologClient\Model\SurveyFolder[]**](../Model/SurveyFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyFolderMoveSurveys**
> \AnketologClient\Model\InlineResponse200 surveyFolderMoveSurveys($survey_filter_create_body)



Перемещение анкет

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyFolderApi();
$survey_filter_create_body = new \AnketologClient\Model\SurveyFilterCreateBody2(); // \AnketologClient\Model\SurveyFilterCreateBody2 | 

try {
    $result = $api_instance->surveyFolderMoveSurveys($survey_filter_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyFolderApi->surveyFolderMoveSurveys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_filter_create_body** | [**\AnketologClient\Model\SurveyFilterCreateBody2**](../Model/\AnketologClient\Model\SurveyFilterCreateBody2.md)|  |

### Return type

[**\AnketologClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyFolderRemove**
> \AnketologClient\Model\InlineResponse200 surveyFolderRemove($survey_filter_create_body)



Удаление папки

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyFolderApi();
$survey_filter_create_body = new \AnketologClient\Model\SurveyFilterCreateBody3(); // \AnketologClient\Model\SurveyFilterCreateBody3 | 

try {
    $result = $api_instance->surveyFolderRemove($survey_filter_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyFolderApi->surveyFolderRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_filter_create_body** | [**\AnketologClient\Model\SurveyFilterCreateBody3**](../Model/\AnketologClient\Model\SurveyFilterCreateBody3.md)|  |

### Return type

[**\AnketologClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyFolderRename**
> \AnketologClient\Model\SurveyFolder surveyFolderRename($survey_filter_create_body)



Переименование папки

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyFolderApi();
$survey_filter_create_body = new \AnketologClient\Model\SurveyFilterCreateBody4(); // \AnketologClient\Model\SurveyFilterCreateBody4 | 

try {
    $result = $api_instance->surveyFolderRename($survey_filter_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyFolderApi->surveyFolderRename: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_filter_create_body** | [**\AnketologClient\Model\SurveyFilterCreateBody4**](../Model/\AnketologClient\Model\SurveyFilterCreateBody4.md)|  |

### Return type

[**\AnketologClient\Model\SurveyFolder**](../Model/SurveyFolder.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

