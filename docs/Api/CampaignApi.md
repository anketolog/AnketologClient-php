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
> \AnketologClient\Model\CampaignCalculate campaignManageCalculate($body)



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
$body = new \AnketologClient\Model\Body3(); // \AnketologClient\Model\Body3 | 

try {
    $result = $api_instance->campaignManageCalculate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignManageCalculate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AnketologClient\Model\Body3**](../Model/\AnketologClient\Model\Body3.md)|  |

### Return type

[**\AnketologClient\Model\CampaignCalculate**](../Model/CampaignCalculate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageCreate**
> \AnketologClient\Model\CampaignCampaign campaignManageCreate($body)



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
$body = new \AnketologClient\Model\Body4(); // \AnketologClient\Model\Body4 | 

try {
    $result = $api_instance->campaignManageCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignManageCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AnketologClient\Model\Body4**](../Model/\AnketologClient\Model\Body4.md)|  |

### Return type

[**\AnketologClient\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageFinish**
> \AnketologClient\Model\CampaignCampaign campaignManageFinish($body)



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
$body = new \AnketologClient\Model\Body5(); // \AnketologClient\Model\Body5 | 

try {
    $result = $api_instance->campaignManageFinish($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignManageFinish: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AnketologClient\Model\Body5**](../Model/\AnketologClient\Model\Body5.md)|  |

### Return type

[**\AnketologClient\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageInfo**
> \AnketologClient\Model\CampaignCampaign campaignManageInfo($body)



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
$body = new \AnketologClient\Model\Body6(); // \AnketologClient\Model\Body6 | 

try {
    $result = $api_instance->campaignManageInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignManageInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AnketologClient\Model\Body6**](../Model/\AnketologClient\Model\Body6.md)|  |

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
> \AnketologClient\Model\CampaignCampaign campaignManageStart($body)



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
$body = new \AnketologClient\Model\Body7(); // \AnketologClient\Model\Body7 | 

try {
    $result = $api_instance->campaignManageStart($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignManageStart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AnketologClient\Model\Body7**](../Model/\AnketologClient\Model\Body7.md)|  |

### Return type

[**\AnketologClient\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageUpdate**
> \AnketologClient\Model\CampaignCampaign campaignManageUpdate($body)



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
$body = new \AnketologClient\Model\Body8(); // \AnketologClient\Model\Body8 | 

try {
    $result = $api_instance->campaignManageUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignManageUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AnketologClient\Model\Body8**](../Model/\AnketologClient\Model\Body8.md)|  |

### Return type

[**\AnketologClient\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignTransferInfo**
> \AnketologClient\Model\CampaignTransfer campaignTransferInfo($body)



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
$body = new \AnketologClient\Model\Body9(); // \AnketologClient\Model\Body9 | 

try {
    $result = $api_instance->campaignTransferInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignTransferInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\AnketologClient\Model\Body9**](../Model/\AnketologClient\Model\Body9.md)|  |

### Return type

[**\AnketologClient\Model\CampaignTransfer**](../Model/CampaignTransfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignTransferList**
> \AnketologClient\Model\CampaignTransfer[] campaignTransferList()



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

try {
    $result = $api_instance->campaignTransferList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->campaignTransferList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AnketologClient\Model\CampaignTransfer[]**](../Model/CampaignTransfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

