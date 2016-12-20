# Swagger\Client\PersonalpageApi

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
> \Swagger\Client\Model\PersonalPagePersonalPage listsManageArchive($body)



Архивирование персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\PersonalpageApi();
$body = new \Swagger\Client\Model\Body19(); // \Swagger\Client\Model\Body19 | 

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
 **body** | [**\Swagger\Client\Model\Body19**](../Model/\Swagger\Client\Model\Body19.md)|  |

### Return type

[**\Swagger\Client\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorCreatealias**
> \Swagger\Client\Model\PersonalPageAliasCollector personalpageCollectorCreatealias($body)



Создание способа рапространения персональной страницы \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\PersonalpageApi();
$body = new \Swagger\Client\Model\Body14(); // \Swagger\Client\Model\Body14 | 

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
 **body** | [**\Swagger\Client\Model\Body14**](../Model/\Swagger\Client\Model\Body14.md)|  |

### Return type

[**\Swagger\Client\Model\PersonalPageAliasCollector**](../Model/PersonalPageAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorCreatewidget**
> \Swagger\Client\Model\PersonalPageWidgetCollector personalpageCollectorCreatewidget($body)



Создание способа рапространения персональной страницы \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\PersonalpageApi();
$body = new \Swagger\Client\Model\Body15(); // \Swagger\Client\Model\Body15 | 

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
 **body** | [**\Swagger\Client\Model\Body15**](../Model/\Swagger\Client\Model\Body15.md)|  |

### Return type

[**\Swagger\Client\Model\PersonalPageWidgetCollector**](../Model/PersonalPageWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorList**
> \Swagger\Client\Model\PersonalPageCollector[] personalpageCollectorList($body)



Способы рапространения персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\PersonalpageApi();
$body = new \Swagger\Client\Model\Body16(); // \Swagger\Client\Model\Body16 | 

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
 **body** | [**\Swagger\Client\Model\Body16**](../Model/\Swagger\Client\Model\Body16.md)|  |

### Return type

[**\Swagger\Client\Model\PersonalPageCollector[]**](../Model/PersonalPageCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorUpdatealias**
> \Swagger\Client\Model\PersonalPageAliasCollector personalpageCollectorUpdatealias($body)



Редактирование способа рапространения персональной страницы \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\PersonalpageApi();
$body = new \Swagger\Client\Model\Body17(); // \Swagger\Client\Model\Body17 | 

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
 **body** | [**\Swagger\Client\Model\Body17**](../Model/\Swagger\Client\Model\Body17.md)|  |

### Return type

[**\Swagger\Client\Model\PersonalPageAliasCollector**](../Model/PersonalPageAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageCollectorUpdatewidget**
> \Swagger\Client\Model\PersonalPageWidgetCollector personalpageCollectorUpdatewidget($body)



Редактирование способа рапространения персональной страницы \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\PersonalpageApi();
$body = new \Swagger\Client\Model\Body18(); // \Swagger\Client\Model\Body18 | 

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
 **body** | [**\Swagger\Client\Model\Body18**](../Model/\Swagger\Client\Model\Body18.md)|  |

### Return type

[**\Swagger\Client\Model\PersonalPageWidgetCollector**](../Model/PersonalPageWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageCreate**
> \Swagger\Client\Model\PersonalPagePersonalPage personalpageManageCreate()



Создание персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\PersonalpageApi();

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

[**\Swagger\Client\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageInfo**
> \Swagger\Client\Model\PersonalPagePersonalPage personalpageManageInfo($body)



Информация о персональной странице

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\PersonalpageApi();
$body = new \Swagger\Client\Model\Body20(); // \Swagger\Client\Model\Body20 | 

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
 **body** | [**\Swagger\Client\Model\Body20**](../Model/\Swagger\Client\Model\Body20.md)|  |

### Return type

[**\Swagger\Client\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageList**
> \Swagger\Client\Model\PersonalPagePersonalPage[] personalpageManageList()



Список персональных страниц

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\PersonalpageApi();

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

[**\Swagger\Client\Model\PersonalPagePersonalPage[]**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageRestore**
> \Swagger\Client\Model\PersonalPagePersonalPage personalpageManageRestore($body)



Восстановление персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\PersonalpageApi();
$body = new \Swagger\Client\Model\Body21(); // \Swagger\Client\Model\Body21 | 

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
 **body** | [**\Swagger\Client\Model\Body21**](../Model/\Swagger\Client\Model\Body21.md)|  |

### Return type

[**\Swagger\Client\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personalpageManageUpdate**
> \Swagger\Client\Model\PersonalPagePersonalPage personalpageManageUpdate($body)



Редактирование персональной страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\PersonalpageApi();
$body = new \Swagger\Client\Model\Body22(); // \Swagger\Client\Model\Body22 | 

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
 **body** | [**\Swagger\Client\Model\Body22**](../Model/\Swagger\Client\Model\Body22.md)|  |

### Return type

[**\Swagger\Client\Model\PersonalPagePersonalPage**](../Model/PersonalPagePersonalPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

