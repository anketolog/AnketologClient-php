# AnketologClient\PlanApi

All URIs are relative to *https://apiv2.anketolog.loc/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**planManageChange**](PlanApi.md#planManageChange) | **POST** /plan/manage/change | 
[**planManageCurrent**](PlanApi.md#planManageCurrent) | **POST** /plan/manage/current | 
[**planManageList**](PlanApi.md#planManageList) | **POST** /plan/manage/list | 


# **planManageChange**
> \AnketologClient\Model\PlanUserPlan planManageChange($plan_manage_change_body)



Изменения тарифного плана пользователя

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PlanApi();
$plan_manage_change_body = new \AnketologClient\Model\PlanManageChangeBody(); // \AnketologClient\Model\PlanManageChangeBody | 

try {
    $result = $api_instance->planManageChange($plan_manage_change_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->planManageChange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_manage_change_body** | [**\AnketologClient\Model\PlanManageChangeBody**](../Model/\AnketologClient\Model\PlanManageChangeBody.md)|  |

### Return type

[**\AnketologClient\Model\PlanUserPlan**](../Model/PlanUserPlan.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planManageCurrent**
> \AnketologClient\Model\PlanUserPlan planManageCurrent()



Текущий тарифный план пользователя

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PlanApi();

try {
    $result = $api_instance->planManageCurrent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->planManageCurrent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AnketologClient\Model\PlanUserPlan**](../Model/PlanUserPlan.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **planManageList**
> \AnketologClient\Model\PlanPlan[] planManageList()



Список тарифных планов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PlanApi();

try {
    $result = $api_instance->planManageList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanApi->planManageList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AnketologClient\Model\PlanPlan[]**](../Model/PlanPlan.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

