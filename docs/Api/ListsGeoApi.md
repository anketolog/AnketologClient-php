# AnketologClient\ListsGeoApi

All URIs are relative to *https://apiv2.anketolog.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listsCityList**](ListsGeoApi.md#listsCityList) | **POST** /lists/geo/city | 
[**listsCountryList**](ListsGeoApi.md#listsCountryList) | **POST** /lists/geo/country | 
[**listsRegionList**](ListsGeoApi.md#listsRegionList) | **POST** /lists/geo/region | 


# **listsCityList**
> \AnketologClient\Model\CityItem[] listsCityList($lists_city_list_body)



Список городов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\ListsGeoApi();
$lists_city_list_body = new \AnketologClient\Model\ListsCityListBody(); // \AnketologClient\Model\ListsCityListBody | 

try {
    $result = $api_instance->listsCityList($lists_city_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsGeoApi->listsCityList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lists_city_list_body** | [**\AnketologClient\Model\ListsCityListBody**](../Model/\AnketologClient\Model\ListsCityListBody.md)|  |

### Return type

[**\AnketologClient\Model\CityItem[]**](../Model/CityItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsCountryList**
> \AnketologClient\Model\CountryItem[] listsCountryList()



Список стран

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\ListsGeoApi();

try {
    $result = $api_instance->listsCountryList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsGeoApi->listsCountryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AnketologClient\Model\CountryItem[]**](../Model/CountryItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listsRegionList**
> \AnketologClient\Model\RegionItem[] listsRegionList($lists_region_list_body)



Список регионов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\ListsGeoApi();
$lists_region_list_body = new \AnketologClient\Model\ListsRegionListBody(); // \AnketologClient\Model\ListsRegionListBody | 

try {
    $result = $api_instance->listsRegionList($lists_region_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsGeoApi->listsRegionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lists_region_list_body** | [**\AnketologClient\Model\ListsRegionListBody**](../Model/\AnketologClient\Model\ListsRegionListBody.md)|  |

### Return type

[**\AnketologClient\Model\RegionItem[]**](../Model/RegionItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

