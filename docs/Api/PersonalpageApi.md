# Anketolog\PersonalpageApi

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
> \Anketolog\Model\PersonalPagePersonalPage listsManageArchive($body)



Архивирование персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\PersonalpageApi();
$body = new \Anketolog\Model\Body19(); // \Anketolog\Model\Body19 | 

try {
    $result = $api_instance->listsManageArchive($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->listsManageArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Anketolog\Model\Body19**](../Model/\Anketolog\Model\Body19.md)|  |

### Return type

[**\Anketolog\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorCreatealias**
> \Anketolog\Model\PersonalPageAliasCollector personalpageCollectorCreatealias($body)



Создание способа рапространения персональной страницы \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\PersonalpageApi();
$body = new \Anketolog\Model\Body14(); // \Anketolog\Model\Body14 | 

try {
    $result = $api_instance->personalpageCollectorCreatealias($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageCollectorCreatealias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Anketolog\Model\Body14**](../Model/\Anketolog\Model\Body14.md)|  |

### Return type

[**\Anketolog\Model\PersonalPageAliasCollector**](../Model/PersonalPageAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorCreatewidget**
> \Anketolog\Model\PersonalPageWidgetCollector personalpageCollectorCreatewidget($body)



Создание способа рапространения персональной страницы \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\PersonalpageApi();
$body = new \Anketolog\Model\Body15(); // \Anketolog\Model\Body15 | 

try {
    $result = $api_instance->personalpageCollectorCreatewidget($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageCollectorCreatewidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Anketolog\Model\Body15**](../Model/\Anketolog\Model\Body15.md)|  |

### Return type

[**\Anketolog\Model\PersonalPageWidgetCollector**](../Model/PersonalPageWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorList**
> \Anketolog\Model\PersonalPageCollector[] personalpageCollectorList($body)



Способы рапространения персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\PersonalpageApi();
$body = new \Anketolog\Model\Body16(); // \Anketolog\Model\Body16 | 

try {
    $result = $api_instance->personalpageCollectorList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageCollectorList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Anketolog\Model\Body16**](../Model/\Anketolog\Model\Body16.md)|  |

### Return type

[**\Anketolog\Model\PersonalPageCollector[]**](../Model/PersonalPageCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorUpdatealias**
> \Anketolog\Model\PersonalPageAliasCollector personalpageCollectorUpdatealias($body)



Редактирование способа рапространения персональной страницы \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\PersonalpageApi();
$body = new \Anketolog\Model\Body17(); // \Anketolog\Model\Body17 | 

try {
    $result = $api_instance->personalpageCollectorUpdatealias($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageCollectorUpdatealias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Anketolog\Model\Body17**](../Model/\Anketolog\Model\Body17.md)|  |

### Return type

[**\Anketolog\Model\PersonalPageAliasCollector**](../Model/PersonalPageAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorUpdatewidget**
> \Anketolog\Model\PersonalPageWidgetCollector personalpageCollectorUpdatewidget($body)



Редактирование способа рапространения персональной страницы \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\PersonalpageApi();
$body = new \Anketolog\Model\Body18(); // \Anketolog\Model\Body18 | 

try {
    $result = $api_instance->personalpageCollectorUpdatewidget($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageCollectorUpdatewidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Anketolog\Model\Body18**](../Model/\Anketolog\Model\Body18.md)|  |

### Return type

[**\Anketolog\Model\PersonalPageWidgetCollector**](../Model/PersonalPageWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageCreate**
> \Anketolog\Model\PersonalPagePersonalPage personalpageManageCreate()



Создание персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\PersonalpageApi();

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

[**\Anketolog\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageInfo**
> \Anketolog\Model\PersonalPagePersonalPage personalpageManageInfo($body)



Информация о персональной странице

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\PersonalpageApi();
$body = new \Anketolog\Model\Body20(); // \Anketolog\Model\Body20 | 

try {
    $result = $api_instance->personalpageManageInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageManageInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Anketolog\Model\Body20**](../Model/\Anketolog\Model\Body20.md)|  |

### Return type

[**\Anketolog\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageList**
> \Anketolog\Model\PersonalPagePersonalPage[] personalpageManageList()



Список персональных страниц

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\PersonalpageApi();

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

[**\Anketolog\Model\PersonalPagePersonalPage[]**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageRestore**
> \Anketolog\Model\PersonalPagePersonalPage personalpageManageRestore($body)



Восстановление персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\PersonalpageApi();
$body = new \Anketolog\Model\Body21(); // \Anketolog\Model\Body21 | 

try {
    $result = $api_instance->personalpageManageRestore($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageManageRestore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Anketolog\Model\Body21**](../Model/\Anketolog\Model\Body21.md)|  |

### Return type

[**\Anketolog\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageUpdate**
> \Anketolog\Model\PersonalPagePersonalPage personalpageManageUpdate($body)



Редактирование персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Anketolog\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Anketolog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Anketolog\Api\PersonalpageApi();
$body = new \Anketolog\Model\Body22(); // \Anketolog\Model\Body22 | 

try {
    $result = $api_instance->personalpageManageUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonalpageApi->personalpageManageUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Anketolog\Model\Body22**](../Model/\Anketolog\Model\Body22.md)|  |

### Return type

[**\Anketolog\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

