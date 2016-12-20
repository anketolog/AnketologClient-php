# Swagger\Client\FileApi

All URIs are relative to *https://apiv2.anketolog.loc/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fileManageInfo**](FileApi.md#fileManageInfo) | **POST** /file/manage/info | 
[**fileManageList**](FileApi.md#fileManageList) | **POST** /file/manage/list | 
[**fileManageUpload**](FileApi.md#fileManageUpload) | **POST** /file/manage/upload | 


# **fileManageInfo**
> \Swagger\Client\Model\FileFile fileManageInfo($body)



Информация о файле

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x_anketolog_apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x_anketolog_apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\FileApi();
$body = new \Swagger\Client\Model\Body10(); // \Swagger\Client\Model\Body10 | 

try {
    $result = $api_instance->fileManageInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileManageInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body10**](../Model/\Swagger\Client\Model\Body10.md)|  |

### Return type

[**\Swagger\Client\Model\FileFile**](../Model/FileFile.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileManageList**
> \Swagger\Client\Model\FileFile[] fileManageList()



Список файлов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x_anketolog_apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x_anketolog_apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\FileApi();

try {
    $result = $api_instance->fileManageList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileManageList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\FileFile[]**](../Model/FileFile.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fileManageUpload**
> \Swagger\Client\Model\FileFile fileManageUpload($body)



Загрузка файла

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x_anketolog_apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x_anketolog_apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\FileApi();
$body = new \Swagger\Client\Model\Body11(); // \Swagger\Client\Model\Body11 | 

try {
    $result = $api_instance->fileManageUpload($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->fileManageUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body11**](../Model/\Swagger\Client\Model\Body11.md)|  |

### Return type

[**\Swagger\Client\Model\FileFile**](../Model/FileFile.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

