# AnketologClient\PersonalPageManageApi

All URIs are relative to *https://${app.apiv2.domain}/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**personalpageManageArchive**](PersonalPageManageApi.md#personalpageManageArchive) | **POST** /personalpage/manage/archive | 
[**personalpageManageCreate**](PersonalPageManageApi.md#personalpageManageCreate) | **POST** /personalpage/manage/create | 
[**personalpageManageInfo**](PersonalPageManageApi.md#personalpageManageInfo) | **POST** /personalpage/manage/info | 
[**personalpageManageList**](PersonalPageManageApi.md#personalpageManageList) | **POST** /personalpage/manage/list | 
[**personalpageManageRestore**](PersonalPageManageApi.md#personalpageManageRestore) | **POST** /personalpage/manage/restore | 
[**personalpageManageUpdate**](PersonalPageManageApi.md#personalpageManageUpdate) | **POST** /personalpage/manage/update | 


# **personalpageManageArchive**
> \AnketologClient\Model\PersonalPagePersonalPage personalpageManageArchive($personal_page_manage_archive_body)



Архивирование персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalPageManageApi();
$personal_page_manage_archive_body = new \AnketologClient\Model\PersonalPageManageArchiveBody(); // \AnketologClient\Model\PersonalPageManageArchiveBody | 

try {
    $result = $api_instance->personalpageManageArchive($personal_page_manage_archive_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalPageManageApi->personalpageManageArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personal_page_manage_archive_body** | [**\AnketologClient\Model\PersonalPageManageArchiveBody**](../Model/\AnketologClient\Model\PersonalPageManageArchiveBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageCreate**
> \AnketologClient\Model\PersonalPagePersonalPage personalpageManageCreate($personal_page_manage_create_body)



Создание персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalPageManageApi();
$personal_page_manage_create_body = new \AnketologClient\Model\PersonalPageManageCreateBody(); // \AnketologClient\Model\PersonalPageManageCreateBody | 

try {
    $result = $api_instance->personalpageManageCreate($personal_page_manage_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalPageManageApi->personalpageManageCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personal_page_manage_create_body** | [**\AnketologClient\Model\PersonalPageManageCreateBody**](../Model/\AnketologClient\Model\PersonalPageManageCreateBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageInfo**
> \AnketologClient\Model\PersonalPagePersonalPage personalpageManageInfo($personal_page_manage_info_body)



Информация о персональной странице

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalPageManageApi();
$personal_page_manage_info_body = new \AnketologClient\Model\PersonalPageManageInfoBody(); // \AnketologClient\Model\PersonalPageManageInfoBody | 

try {
    $result = $api_instance->personalpageManageInfo($personal_page_manage_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalPageManageApi->personalpageManageInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personal_page_manage_info_body** | [**\AnketologClient\Model\PersonalPageManageInfoBody**](../Model/\AnketologClient\Model\PersonalPageManageInfoBody.md)|  |

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

$api_instance = new AnketologClient\Api\PersonalPageManageApi();

try {
    $result = $api_instance->personalpageManageList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalPageManageApi->personalpageManageList: ', $e->getMessage(), PHP_EOL;
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
> \AnketologClient\Model\PersonalPagePersonalPage personalpageManageRestore($personal_page_manage_restore_body)



Восстановление персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalPageManageApi();
$personal_page_manage_restore_body = new \AnketologClient\Model\PersonalPageManageRestoreBody(); // \AnketologClient\Model\PersonalPageManageRestoreBody | 

try {
    $result = $api_instance->personalpageManageRestore($personal_page_manage_restore_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalPageManageApi->personalpageManageRestore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personal_page_manage_restore_body** | [**\AnketologClient\Model\PersonalPageManageRestoreBody**](../Model/\AnketologClient\Model\PersonalPageManageRestoreBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageUpdate**
> \AnketologClient\Model\PersonalPagePersonalPage personalpageManageUpdate($personal_page_manage_update_body)



Редактирование персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalPageManageApi();
$personal_page_manage_update_body = new \AnketologClient\Model\PersonalPageManageUpdateBody(); // \AnketologClient\Model\PersonalPageManageUpdateBody | 

try {
    $result = $api_instance->personalpageManageUpdate($personal_page_manage_update_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalPageManageApi->personalpageManageUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personal_page_manage_update_body** | [**\AnketologClient\Model\PersonalPageManageUpdateBody**](../Model/\AnketologClient\Model\PersonalPageManageUpdateBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

