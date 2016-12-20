# Swagger\Client\CampaignApi

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
> \Swagger\Client\Model\CampaignCalculate campaignManageCalculate($body)



Подсчет целевой аудитории

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x_anketolog_apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x_anketolog_apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\CampaignApi();
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | 

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
 **body** | [**\Swagger\Client\Model\Body3**](../Model/\Swagger\Client\Model\Body3.md)|  |

### Return type

[**\Swagger\Client\Model\CampaignCalculate**](../Model/CampaignCalculate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageCreate**
> \Swagger\Client\Model\CampaignCampaign campaignManageCreate($body)



Создание кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x_anketolog_apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x_anketolog_apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\CampaignApi();
$body = new \Swagger\Client\Model\Body4(); // \Swagger\Client\Model\Body4 | 

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
 **body** | [**\Swagger\Client\Model\Body4**](../Model/\Swagger\Client\Model\Body4.md)|  |

### Return type

[**\Swagger\Client\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageFinish**
> \Swagger\Client\Model\CampaignCampaign campaignManageFinish($body)



Завершение кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x_anketolog_apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x_anketolog_apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\CampaignApi();
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | 

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
 **body** | [**\Swagger\Client\Model\Body5**](../Model/\Swagger\Client\Model\Body5.md)|  |

### Return type

[**\Swagger\Client\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageInfo**
> \Swagger\Client\Model\CampaignCampaign campaignManageInfo($body)



Информация о кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x_anketolog_apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x_anketolog_apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\CampaignApi();
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | 

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
 **body** | [**\Swagger\Client\Model\Body6**](../Model/\Swagger\Client\Model\Body6.md)|  |

### Return type

[**\Swagger\Client\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageList**
> \Swagger\Client\Model\CampaignCampaign[] campaignManageList()



Список кампаний

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x_anketolog_apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x_anketolog_apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\CampaignApi();

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

[**\Swagger\Client\Model\CampaignCampaign[]**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageStart**
> \Swagger\Client\Model\CampaignCampaign campaignManageStart($body)



Запуск кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x_anketolog_apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x_anketolog_apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\CampaignApi();
$body = new \Swagger\Client\Model\Body7(); // \Swagger\Client\Model\Body7 | 

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
 **body** | [**\Swagger\Client\Model\Body7**](../Model/\Swagger\Client\Model\Body7.md)|  |

### Return type

[**\Swagger\Client\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignManageUpdate**
> \Swagger\Client\Model\CampaignCampaign campaignManageUpdate($body)



Редактирование кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x_anketolog_apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x_anketolog_apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\CampaignApi();
$body = new \Swagger\Client\Model\Body8(); // \Swagger\Client\Model\Body8 | 

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
 **body** | [**\Swagger\Client\Model\Body8**](../Model/\Swagger\Client\Model\Body8.md)|  |

### Return type

[**\Swagger\Client\Model\CampaignCampaign**](../Model/CampaignCampaign.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignTransferInfo**
> \Swagger\Client\Model\CampaignTransfer campaignTransferInfo($body)



Внутренний перевод кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x_anketolog_apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x_anketolog_apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\CampaignApi();
$body = new \Swagger\Client\Model\Body9(); // \Swagger\Client\Model\Body9 | 

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
 **body** | [**\Swagger\Client\Model\Body9**](../Model/\Swagger\Client\Model\Body9.md)|  |

### Return type

[**\Swagger\Client\Model\CampaignTransfer**](../Model/CampaignTransfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignTransferList**
> \Swagger\Client\Model\CampaignTransfer[] campaignTransferList()



Внутрениие переводы кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x_anketolog_apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x_anketolog_apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\CampaignApi();

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

[**\Swagger\Client\Model\CampaignTransfer[]**](../Model/CampaignTransfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

