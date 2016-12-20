# Anketolog\ListsApi

All URIs are relative to *https://apiv2.anketolog.loc/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listsCityList**](ListsApi.md#listsCityList) | **POST** /lists/city/list | 
[**listsCountryList**](ListsApi.md#listsCountryList) | **POST** /lists/country/list | 
[**listsRegionList**](ListsApi.md#listsRegionList) | **POST** /lists/region/list | 


# **listsCityList**
> string listsCityList($body)



Список городов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\ListsApi();
$body = new \Anketolog\Model\Body12(); // \Anketolog\Model\Body12 | 

try {
    $result = $api_instance->listsCityList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsCityList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Anketolog\Model\Body12**](../Model/\Anketolog\Model\Body12.md)|  |

### Return type

**string**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsCountryList**
> \Anketolog\Model\RegionItem listsCountryList()



Список стран

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\ListsApi();

try {
    $result = $api_instance->listsCountryList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsCountryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Anketolog\Model\RegionItem**](../Model/RegionItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsRegionList**
> \Anketolog\Model\CityItem listsRegionList($body)



Список регионов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\ListsApi();
$body = new \Anketolog\Model\Body13(); // \Anketolog\Model\Body13 | 

try {
    $result = $api_instance->listsRegionList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->listsRegionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Anketolog\Model\Body13**](../Model/\Anketolog\Model\Body13.md)|  |

### Return type

[**\Anketolog\Model\CityItem**](../Model/CityItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

