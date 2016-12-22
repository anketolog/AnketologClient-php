# AnketologClient\CampaignApi

All URIs are relative to *https://apiv2.anketolog.loc/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignManageCalculate**](CampaignApi.md#campaignManageCalculate) | **POST** /campaign/manage/calculate | 
[**campaignManageCreate**](CampaignApi.md#campaignManageCreate) | **POST** /campaign/manage/create | 
[**campaignManageFinish**](CampaignApi.md#campaignManageFinish) | **POST** /campaign/manage/finish | 
[**campaignManageInfo**](CampaignApi.md#campaignManageInfo) | **POST** /campaign/manage/info | 
[**campaignManageList**](CampaignApi.md#campaignManageList) | **POST** /campaign/manage/list | 
[**campaignManageStart**](CampaignApi.md#campaignManageStart) | **POST** /campaign/manage/start | 
[**campaignManageUpdate**](CampaignApi.md#campaignManageUpdate) | **POST** /campaign/manage/update | 
[**campaignTransferInfo**](CampaignApi.md#campaignTransferInfo) | **POST** /campaign/transfer/info | 
[**campaignTransferList**](CampaignApi.md#campaignTransferList) | **POST** /campaign/transfer/list | 


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

$api_instance = new AnketologClient\Api\CampaignApi();
$campaign_manage_calculate_body = new \AnketologClient\Model\CampaignManageCalculateBody(); // \AnketologClient\Model\CampaignManageCalculateBody | 

try {
    $result = $api_instance->campaignManageCalculate($campaign_manage_calculate_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignManageCalculate: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new AnketologClient\Api\CampaignApi();
$campaign_manage_create_body = new \AnketologClient\Model\CampaignManageCreateBody(); // \AnketologClient\Model\CampaignManageCreateBody | 

try {
    $result = $api_instance->campaignManageCreate($campaign_manage_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignManageCreate: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new AnketologClient\Api\CampaignApi();
$campaign_manage_finish_body = new \AnketologClient\Model\CampaignManageFinishBody(); // \AnketologClient\Model\CampaignManageFinishBody | 

try {
    $result = $api_instance->campaignManageFinish($campaign_manage_finish_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignManageFinish: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new AnketologClient\Api\CampaignApi();
$campaign_manage_info_body = new \AnketologClient\Model\CampaignManageInfoBody(); // \AnketologClient\Model\CampaignManageInfoBody | 

try {
    $result = $api_instance->campaignManageInfo($campaign_manage_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignManageInfo: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new AnketologClient\Api\CampaignApi();

try {
    $result = $api_instance->campaignManageList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignManageList: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new AnketologClient\Api\CampaignApi();
$campaign_manage_start_body = new \AnketologClient\Model\CampaignManageStartBody(); // \AnketologClient\Model\CampaignManageStartBody | 

try {
    $result = $api_instance->campaignManageStart($campaign_manage_start_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignManageStart: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new AnketologClient\Api\CampaignApi();
$campaign_manage_update_body = new \AnketologClient\Model\CampaignManageUpdateBody(); // \AnketologClient\Model\CampaignManageUpdateBody | 

try {
    $result = $api_instance->campaignManageUpdate($campaign_manage_update_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignManageUpdate: ', $e->getMessage(), PHP_EOL;
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

# **campaignTransferInfo**
> \AnketologClient\Model\CampaignTransfer campaignTransferInfo($campaign_transfer_info_body)



Внутренний перевод кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\CampaignApi();
$campaign_transfer_info_body = new \AnketologClient\Model\CampaignTransferInfoBody(); // \AnketologClient\Model\CampaignTransferInfoBody | 

try {
    $result = $api_instance->campaignTransferInfo($campaign_transfer_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignTransferInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_transfer_info_body** | [**\AnketologClient\Model\CampaignTransferInfoBody**](../Model/\AnketologClient\Model\CampaignTransferInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\CampaignTransfer**](../Model/CampaignTransfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignTransferList**
> \AnketologClient\Model\CampaignTransfer[] campaignTransferList($campaign_transfer_list_body)



Внутрениие переводы кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\CampaignApi();
$campaign_transfer_list_body = new \AnketologClient\Model\CampaignTransferListBody(); // \AnketologClient\Model\CampaignTransferListBody | 

try {
    $result = $api_instance->campaignTransferList($campaign_transfer_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignTransferList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_transfer_list_body** | [**\AnketologClient\Model\CampaignTransferListBody**](../Model/\AnketologClient\Model\CampaignTransferListBody.md)|  |

### Return type

[**\AnketologClient\Model\CampaignTransfer[]**](../Model/CampaignTransfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

