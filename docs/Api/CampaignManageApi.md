# AnketologClient\CampaignManageApi

All URIs are relative to *https://apiv2.anketolog.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignManageCalculate**](CampaignManageApi.md#campaignManageCalculate) | **POST** /campaign/manage/calculate | 
[**campaignManageCreate**](CampaignManageApi.md#campaignManageCreate) | **POST** /campaign/manage/create | 
[**campaignManageFinish**](CampaignManageApi.md#campaignManageFinish) | **POST** /campaign/manage/finish | 
[**campaignManageInfo**](CampaignManageApi.md#campaignManageInfo) | **POST** /campaign/manage/info | 
[**campaignManageList**](CampaignManageApi.md#campaignManageList) | **POST** /campaign/manage/list | 
[**campaignManageStart**](CampaignManageApi.md#campaignManageStart) | **POST** /campaign/manage/start | 
[**campaignManageUpdate**](CampaignManageApi.md#campaignManageUpdate) | **POST** /campaign/manage/update | 


# **campaignManageCalculate**
> \AnketologClient\Model\CampaignCalculate campaignManageCalculate($campaign_manage_calculate_body)



Подсчет целевой аудитории

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\CampaignManageApi();
$campaign_manage_calculate_body = new \AnketologClient\Model\CampaignManageCalculateBody(); // \AnketologClient\Model\CampaignManageCalculateBody | 

try {
    $result = $api_instance->campaignManageCalculate($campaign_manage_calculate_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignManageApi->campaignManageCalculate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_manage_calculate_body** | [**\AnketologClient\Model\CampaignManageCalculateBody**](../Model/\AnketologClient\Model\CampaignManageCalculateBody.md)|  |

### Return type

[**\AnketologClient\Model\CampaignCalculate**](../Model/CampaignCalculate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageCreate**
> \AnketologClient\Model\CampaignCampaign campaignManageCreate($campaign_manage_create_body)



Создание кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\CampaignManageApi();
$campaign_manage_create_body = new \AnketologClient\Model\CampaignManageCreateBody(); // \AnketologClient\Model\CampaignManageCreateBody | 

try {
    $result = $api_instance->campaignManageCreate($campaign_manage_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignManageApi->campaignManageCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_manage_create_body** | [**\AnketologClient\Model\CampaignManageCreateBody**](../Model/\AnketologClient\Model\CampaignManageCreateBody.md)|  |

### Return type

[**\AnketologClient\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageFinish**
> \AnketologClient\Model\CampaignCampaign campaignManageFinish($campaign_manage_finish_body)



Завершение кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\CampaignManageApi();
$campaign_manage_finish_body = new \AnketologClient\Model\CampaignManageFinishBody(); // \AnketologClient\Model\CampaignManageFinishBody | 

try {
    $result = $api_instance->campaignManageFinish($campaign_manage_finish_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignManageApi->campaignManageFinish: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_manage_finish_body** | [**\AnketologClient\Model\CampaignManageFinishBody**](../Model/\AnketologClient\Model\CampaignManageFinishBody.md)|  |

### Return type

[**\AnketologClient\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageInfo**
> \AnketologClient\Model\CampaignCampaign campaignManageInfo($campaign_manage_info_body)



Информация о кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\CampaignManageApi();
$campaign_manage_info_body = new \AnketologClient\Model\CampaignManageInfoBody(); // \AnketologClient\Model\CampaignManageInfoBody | 

try {
    $result = $api_instance->campaignManageInfo($campaign_manage_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignManageApi->campaignManageInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_manage_info_body** | [**\AnketologClient\Model\CampaignManageInfoBody**](../Model/\AnketologClient\Model\CampaignManageInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageList**
> \AnketologClient\Model\CampaignCampaign[] campaignManageList()



Список кампаний

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\CampaignManageApi();

try {
    $result = $api_instance->campaignManageList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignManageApi->campaignManageList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AnketologClient\Model\CampaignCampaign[]**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageStart**
> \AnketologClient\Model\CampaignCampaign campaignManageStart($campaign_manage_start_body)



Запуск кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\CampaignManageApi();
$campaign_manage_start_body = new \AnketologClient\Model\CampaignManageStartBody(); // \AnketologClient\Model\CampaignManageStartBody | 

try {
    $result = $api_instance->campaignManageStart($campaign_manage_start_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignManageApi->campaignManageStart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_manage_start_body** | [**\AnketologClient\Model\CampaignManageStartBody**](../Model/\AnketologClient\Model\CampaignManageStartBody.md)|  |

### Return type

[**\AnketologClient\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageUpdate**
> \AnketologClient\Model\CampaignCampaign campaignManageUpdate($campaign_manage_update_body)



Редактирование кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\CampaignManageApi();
$campaign_manage_update_body = new \AnketologClient\Model\CampaignManageUpdateBody(); // \AnketologClient\Model\CampaignManageUpdateBody | 

try {
    $result = $api_instance->campaignManageUpdate($campaign_manage_update_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignManageApi->campaignManageUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_manage_update_body** | [**\AnketologClient\Model\CampaignManageUpdateBody**](../Model/\AnketologClient\Model\CampaignManageUpdateBody.md)|  |

### Return type

[**\AnketologClient\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

