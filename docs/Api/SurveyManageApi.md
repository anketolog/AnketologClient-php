# AnketologClient\SurveyManageApi

All URIs are relative to *https://${app.apiv2.domain}/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveyManageArchive**](SurveyManageApi.md#surveyManageArchive) | **POST** /survey/manage/archive | 
[**surveyManageCopy**](SurveyManageApi.md#surveyManageCopy) | **POST** /survey/manage/copy | 
[**surveyManageCreate**](SurveyManageApi.md#surveyManageCreate) | **POST** /survey/manage/create | 
[**surveyManageDelete**](SurveyManageApi.md#surveyManageDelete) | **POST** /survey/manage/delete | 
[**surveyManageInfo**](SurveyManageApi.md#surveyManageInfo) | **POST** /survey/manage/info | 
[**surveyManageList**](SurveyManageApi.md#surveyManageList) | **POST** /survey/manage/list | 
[**surveyManageRestore**](SurveyManageApi.md#surveyManageRestore) | **POST** /survey/manage/restore | 
[**surveyManageUpdate**](SurveyManageApi.md#surveyManageUpdate) | **POST** /survey/manage/update | 


# **surveyManageArchive**
> \AnketologClient\Model\SurveySurvey surveyManageArchive($survey_manage_archive_body)



Архивирование опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyManageApi();
$survey_manage_archive_body = new \AnketologClient\Model\SurveyManageArchiveBody(); // \AnketologClient\Model\SurveyManageArchiveBody | 

try {
    $result = $api_instance->surveyManageArchive($survey_manage_archive_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyManageApi->surveyManageArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_archive_body** | [**\AnketologClient\Model\SurveyManageArchiveBody**](../Model/\AnketologClient\Model\SurveyManageArchiveBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageCopy**
> \AnketologClient\Model\SurveySurvey surveyManageCopy($survey_manage_copy_body)



Копирование опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyManageApi();
$survey_manage_copy_body = new \AnketologClient\Model\SurveyManageCopyBody(); // \AnketologClient\Model\SurveyManageCopyBody | 

try {
    $result = $api_instance->surveyManageCopy($survey_manage_copy_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyManageApi->surveyManageCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_copy_body** | [**\AnketologClient\Model\SurveyManageCopyBody**](../Model/\AnketologClient\Model\SurveyManageCopyBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageCreate**
> \AnketologClient\Model\SurveySurvey surveyManageCreate($survey_manage_create_body)



Создание опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyManageApi();
$survey_manage_create_body = new \AnketologClient\Model\SurveyManageCreateBody(); // \AnketologClient\Model\SurveyManageCreateBody | 

try {
    $result = $api_instance->surveyManageCreate($survey_manage_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyManageApi->surveyManageCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_create_body** | [**\AnketologClient\Model\SurveyManageCreateBody**](../Model/\AnketologClient\Model\SurveyManageCreateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageDelete**
> string surveyManageDelete($survey_manage_delete_body)



Удаление опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyManageApi();
$survey_manage_delete_body = new \AnketologClient\Model\SurveyManageDeleteBody(); // \AnketologClient\Model\SurveyManageDeleteBody | 

try {
    $result = $api_instance->surveyManageDelete($survey_manage_delete_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyManageApi->surveyManageDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_delete_body** | [**\AnketologClient\Model\SurveyManageDeleteBody**](../Model/\AnketologClient\Model\SurveyManageDeleteBody.md)|  |

### Return type

**string**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageInfo**
> \AnketologClient\Model\SurveySurvey surveyManageInfo($survey_manage_info_body)



Информация об опросе

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyManageApi();
$survey_manage_info_body = new \AnketologClient\Model\SurveyManageInfoBody(); // \AnketologClient\Model\SurveyManageInfoBody | 

try {
    $result = $api_instance->surveyManageInfo($survey_manage_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyManageApi->surveyManageInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_info_body** | [**\AnketologClient\Model\SurveyManageInfoBody**](../Model/\AnketologClient\Model\SurveyManageInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageList**
> \AnketologClient\Model\SurveySurvey[] surveyManageList()



Список опросов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyManageApi();

try {
    $result = $api_instance->surveyManageList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyManageApi->surveyManageList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AnketologClient\Model\SurveySurvey[]**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageRestore**
> \AnketologClient\Model\SurveySurvey surveyManageRestore($survey_manage_restore_body)



Восстановление опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyManageApi();
$survey_manage_restore_body = new \AnketologClient\Model\SurveyManageRestoreBody(); // \AnketologClient\Model\SurveyManageRestoreBody | 

try {
    $result = $api_instance->surveyManageRestore($survey_manage_restore_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyManageApi->surveyManageRestore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_restore_body** | [**\AnketologClient\Model\SurveyManageRestoreBody**](../Model/\AnketologClient\Model\SurveyManageRestoreBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageUpdate**
> \AnketologClient\Model\SurveySurvey surveyManageUpdate($survey_manage_update_body)



Редактирование опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyManageApi();
$survey_manage_update_body = new \AnketologClient\Model\SurveyManageUpdateBody(); // \AnketologClient\Model\SurveyManageUpdateBody | 

try {
    $result = $api_instance->surveyManageUpdate($survey_manage_update_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyManageApi->surveyManageUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_update_body** | [**\AnketologClient\Model\SurveyManageUpdateBody**](../Model/\AnketologClient\Model\SurveyManageUpdateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

