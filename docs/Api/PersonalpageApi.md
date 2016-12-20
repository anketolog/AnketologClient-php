# AnketologClient\PersonalpageApi

All URIs are relative to *https://apiv2.anketolog.loc/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listsManageArchive**](PersonalpageApi.md#listsManageArchive) | **POST** /personalpage/manage/archive | 
[**personalpageCollectorCreatealias**](PersonalpageApi.md#personalpageCollectorCreatealias) | **POST** /personalpage/collector/createalias | 
[**personalpageCollectorCreatewidget**](PersonalpageApi.md#personalpageCollectorCreatewidget) | **POST** /personalpage/collector/createwidget | 
[**personalpageCollectorList**](PersonalpageApi.md#personalpageCollectorList) | **POST** /personalpage/collector/list | 
[**personalpageCollectorUpdatealias**](PersonalpageApi.md#personalpageCollectorUpdatealias) | **POST** /personalpage/collector/updatealias | 
[**personalpageCollectorUpdatewidget**](PersonalpageApi.md#personalpageCollectorUpdatewidget) | **POST** /personalpage/collector/updatewidget | 
[**personalpageManageCreate**](PersonalpageApi.md#personalpageManageCreate) | **POST** /personalpage/manage/create | 
[**personalpageManageInfo**](PersonalpageApi.md#personalpageManageInfo) | **POST** /personalpage/manage/info | 
[**personalpageManageList**](PersonalpageApi.md#personalpageManageList) | **POST** /personalpage/manage/list | 
[**personalpageManageRestore**](PersonalpageApi.md#personalpageManageRestore) | **POST** /personalpage/manage/restore | 
[**personalpageManageUpdate**](PersonalpageApi.md#personalpageManageUpdate) | **POST** /personalpage/manage/update | 


# **listsManageArchive**
> \AnketologClient\Model\PersonalPagePersonalPage listsManageArchive($personalpage_manage_archive_body)



Архивирование персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageApi();
$personalpage_manage_archive_body = new \AnketologClient\Model\PersonalpageManageArchiveBody(); // \AnketologClient\Model\PersonalpageManageArchiveBody | 

try {
    $result = $api_instance->listsManageArchive($personalpage_manage_archive_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->listsManageArchive: ', $e->getMessage(), PHP_EOL;
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

# **personalpageCollectorCreatealias**
> \AnketologClient\Model\PersonalPageAliasCollector personalpageCollectorCreatealias($personalpage_collector_createalias_body)



Создание способа рапространения персональной страницы \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageApi();
$personalpage_collector_createalias_body = new \AnketologClient\Model\PersonalpageCollectorCreatealiasBody(); // \AnketologClient\Model\PersonalpageCollectorCreatealiasBody | 

try {
    $result = $api_instance->personalpageCollectorCreatealias($personalpage_collector_createalias_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageCollectorCreatealias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_collector_createalias_body** | [**\AnketologClient\Model\PersonalpageCollectorCreatealiasBody**](../Model/\AnketologClient\Model\PersonalpageCollectorCreatealiasBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageAliasCollector**](../Model/PersonalPageAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorCreatewidget**
> \AnketologClient\Model\PersonalPageWidgetCollector personalpageCollectorCreatewidget($personalpage_collector_createwidget_body)



Создание способа рапространения персональной страницы \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageApi();
$personalpage_collector_createwidget_body = new \AnketologClient\Model\PersonalpageCollectorCreatewidgetBody(); // \AnketologClient\Model\PersonalpageCollectorCreatewidgetBody | 

try {
    $result = $api_instance->personalpageCollectorCreatewidget($personalpage_collector_createwidget_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageCollectorCreatewidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_collector_createwidget_body** | [**\AnketologClient\Model\PersonalpageCollectorCreatewidgetBody**](../Model/\AnketologClient\Model\PersonalpageCollectorCreatewidgetBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageWidgetCollector**](../Model/PersonalPageWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorList**
> \AnketologClient\Model\PersonalPageCollector[] personalpageCollectorList($personalpage_collector_list_body)



Способы рапространения персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageApi();
$personalpage_collector_list_body = new \AnketologClient\Model\PersonalpageCollectorListBody(); // \AnketologClient\Model\PersonalpageCollectorListBody | 

try {
    $result = $api_instance->personalpageCollectorList($personalpage_collector_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageCollectorList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_collector_list_body** | [**\AnketologClient\Model\PersonalpageCollectorListBody**](../Model/\AnketologClient\Model\PersonalpageCollectorListBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageCollector[]**](../Model/PersonalPageCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorUpdatealias**
> \AnketologClient\Model\PersonalPageAliasCollector personalpageCollectorUpdatealias($personalpage_collector_updatealias_body)



Редактирование способа рапространения персональной страницы \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageApi();
$personalpage_collector_updatealias_body = new \AnketologClient\Model\PersonalpageCollectorUpdatealiasBody(); // \AnketologClient\Model\PersonalpageCollectorUpdatealiasBody | 

try {
    $result = $api_instance->personalpageCollectorUpdatealias($personalpage_collector_updatealias_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageCollectorUpdatealias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_collector_updatealias_body** | [**\AnketologClient\Model\PersonalpageCollectorUpdatealiasBody**](../Model/\AnketologClient\Model\PersonalpageCollectorUpdatealiasBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageAliasCollector**](../Model/PersonalPageAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorUpdatewidget**
> \AnketologClient\Model\PersonalPageWidgetCollector personalpageCollectorUpdatewidget($personalpage_collector_updatewidget_body)



Редактирование способа рапространения персональной страницы \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageApi();
$personalpage_collector_updatewidget_body = new \AnketologClient\Model\PersonalpageCollectorUpdatewidgetBody(); // \AnketologClient\Model\PersonalpageCollectorUpdatewidgetBody | 

try {
    $result = $api_instance->personalpageCollectorUpdatewidget($personalpage_collector_updatewidget_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageCollectorUpdatewidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **personalpage_collector_updatewidget_body** | [**\AnketologClient\Model\PersonalpageCollectorUpdatewidgetBody**](../Model/\AnketologClient\Model\PersonalpageCollectorUpdatewidgetBody.md)|  |

### Return type

[**\AnketologClient\Model\PersonalPageWidgetCollector**](../Model/PersonalPageWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageCreate**
> \AnketologClient\Model\PersonalPagePersonalPage personalpageManageCreate()



Создание персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\PersonalpageApi();

try {
    $result = $api_instance->personalpageManageCreate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageManageCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

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

$api_instance = new AnketologClient\Api\PersonalpageApi();
$personalpage_manage_info_body = new \AnketologClient\Model\PersonalpageManageInfoBody(); // \AnketologClient\Model\PersonalpageManageInfoBody | 

try {
    $result = $api_instance->personalpageManageInfo($personalpage_manage_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageManageInfo: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new AnketologClient\Api\PersonalpageApi();

try {
    $result = $api_instance->personalpageManageList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageManageList: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new AnketologClient\Api\PersonalpageApi();
$personalpage_manage_restore_body = new \AnketologClient\Model\PersonalpageManageRestoreBody(); // \AnketologClient\Model\PersonalpageManageRestoreBody | 

try {
    $result = $api_instance->personalpageManageRestore($personalpage_manage_restore_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageManageRestore: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new AnketologClient\Api\PersonalpageApi();
$personalpage_manage_update_body = new \AnketologClient\Model\PersonalpageManageUpdateBody(); // \AnketologClient\Model\PersonalpageManageUpdateBody | 

try {
    $result = $api_instance->personalpageManageUpdate($personalpage_manage_update_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageManageUpdate: ', $e->getMessage(), PHP_EOL;
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

