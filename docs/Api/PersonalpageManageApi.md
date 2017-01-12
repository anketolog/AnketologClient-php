# AnketologClient\PersonalpageManageApi

All URIs are relative to *https://${app.apiv2.domain}/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**personalpageManageArchive**](PersonalpageManageApi.md#personalpageManageArchive) | **POST** /personalpage/manage/archive | 
[**personalpageManageCreate**](PersonalpageManageApi.md#personalpageManageCreate) | **POST** /personalpage/manage/create | 
[**personalpageManageInfo**](PersonalpageManageApi.md#personalpageManageInfo) | **POST** /personalpage/manage/info | 
[**personalpageManageList**](PersonalpageManageApi.md#personalpageManageList) | **POST** /personalpage/manage/list | 
[**personalpageManageRestore**](PersonalpageManageApi.md#personalpageManageRestore) | **POST** /personalpage/manage/restore | 
[**personalpageManageUpdate**](PersonalpageManageApi.md#personalpageManageUpdate) | **POST** /personalpage/manage/update | 


# **personalpageManageArchive**
> \AnketologClient\Model\PersonalPagePersonalPage personalpageManageArchive($personalpage_manage_archive_body)



Архивирование персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageManageApi();
$personalpage_manage_archive_body = new \AnketologClient\Model\PersonalpageManageArchiveBody(); // \AnketologClient\Model\PersonalpageManageArchiveBody | 

try {
    $result = $api_instance->personalpageManageArchive($personalpage_manage_archive_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageManageApi->personalpageManageArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_manage_archive_body** | [**\AnketologClient\Model\PersonalpageManageArchiveBody**](../Model/\AnketologClient\Model\PersonalpageManageArchiveBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageCreate**
> \AnketologClient\Model\PersonalPagePersonalPage personalpageManageCreate($personalpage_manage_create_body)



Создание персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageManageApi();
$personalpage_manage_create_body = new \AnketologClient\Model\PersonalpageManageCreateBody(); // \AnketologClient\Model\PersonalpageManageCreateBody | 

try {
    $result = $api_instance->personalpageManageCreate($personalpage_manage_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageManageApi->personalpageManageCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_manage_create_body** | [**\AnketologClient\Model\PersonalpageManageCreateBody**](../Model/\AnketologClient\Model\PersonalpageManageCreateBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageInfo**
> \AnketologClient\Model\PersonalPagePersonalPage personalpageManageInfo($personalpage_manage_info_body)



Информация о персональной странице

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageManageApi();
$personalpage_manage_info_body = new \AnketologClient\Model\PersonalpageManageInfoBody(); // \AnketologClient\Model\PersonalpageManageInfoBody | 

try {
    $result = $api_instance->personalpageManageInfo($personalpage_manage_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageManageApi->personalpageManageInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_manage_info_body** | [**\AnketologClient\Model\PersonalpageManageInfoBody**](../Model/\AnketologClient\Model\PersonalpageManageInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageList**
> \AnketologClient\Model\PersonalPagePersonalPage[] personalpageManageList()



Список персональных страниц

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageManageApi();

try {
    $result = $api_instance->personalpageManageList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageManageApi->personalpageManageList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\AnketologClient\Model\PersonalPagePersonalPage[]**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageRestore**
> \AnketologClient\Model\PersonalPagePersonalPage personalpageManageRestore($personalpage_manage_restore_body)



Восстановление персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageManageApi();
$personalpage_manage_restore_body = new \AnketologClient\Model\PersonalpageManageRestoreBody(); // \AnketologClient\Model\PersonalpageManageRestoreBody | 

try {
    $result = $api_instance->personalpageManageRestore($personalpage_manage_restore_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageManageApi->personalpageManageRestore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_manage_restore_body** | [**\AnketologClient\Model\PersonalpageManageRestoreBody**](../Model/\AnketologClient\Model\PersonalpageManageRestoreBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageUpdate**
> \AnketologClient\Model\PersonalPagePersonalPage personalpageManageUpdate($personalpage_manage_update_body)



Редактирование персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageManageApi();
$personalpage_manage_update_body = new \AnketologClient\Model\PersonalpageManageUpdateBody(); // \AnketologClient\Model\PersonalpageManageUpdateBody | 

try {
    $result = $api_instance->personalpageManageUpdate($personalpage_manage_update_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageManageApi->personalpageManageUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_manage_update_body** | [**\AnketologClient\Model\PersonalpageManageUpdateBody**](../Model/\AnketologClient\Model\PersonalpageManageUpdateBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

