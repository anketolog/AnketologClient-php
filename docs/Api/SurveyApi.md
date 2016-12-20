# Swagger\Client\SurveyApi

All URIs are relative to *https://apiv2.anketolog.loc/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveyAnswerInfo**](SurveyApi.md#surveyAnswerInfo) | **POST** /survey/answer/info | 
[**surveyAnswerList**](SurveyApi.md#surveyAnswerList) | **POST** /survey/answer/list | 
[**surveyCollectorCreatealias**](SurveyApi.md#surveyCollectorCreatealias) | **POST** /survey/collector/createalias | 
[**surveyCollectorCreateextralink**](SurveyApi.md#surveyCollectorCreateextralink) | **POST** /survey/collector/createextralink | 
[**surveyCollectorCreatewidget**](SurveyApi.md#surveyCollectorCreatewidget) | **POST** /survey/collector/createwidget | 
[**surveyCollectorList**](SurveyApi.md#surveyCollectorList) | **POST** /survey/collector/list | 
[**surveyCollectorRemoveextralink**](SurveyApi.md#surveyCollectorRemoveextralink) | **POST** /survey/collector/removeextralink | 
[**surveyCollectorUpdatealias**](SurveyApi.md#surveyCollectorUpdatealias) | **POST** /survey/collector/updatealias | 
[**surveyCollectorUpdateextralink**](SurveyApi.md#surveyCollectorUpdateextralink) | **POST** /survey/collector/updateextralink | 
[**surveyCollectorUpdatewidget**](SurveyApi.md#surveyCollectorUpdatewidget) | **POST** /survey/collector/updatewidget | 
[**surveyFilterCreate**](SurveyApi.md#surveyFilterCreate) | **POST** /survey/filter/create | 
[**surveyFilterInfo**](SurveyApi.md#surveyFilterInfo) | **POST** /survey/filter/info | 
[**surveyFilterList**](SurveyApi.md#surveyFilterList) | **POST** /survey/filter/list | 
[**surveyManageArchive**](SurveyApi.md#surveyManageArchive) | **POST** /survey/manage/archive | 
[**surveyManageCopy**](SurveyApi.md#surveyManageCopy) | **POST** /survey/manage/copy | 
[**surveyManageCreate**](SurveyApi.md#surveyManageCreate) | **POST** /survey/manage/create | 
[**surveyManageDelete**](SurveyApi.md#surveyManageDelete) | **POST** /survey/manage/delete | 
[**surveyManageInfo**](SurveyApi.md#surveyManageInfo) | **POST** /survey/manage/info | 
[**surveyManageList**](SurveyApi.md#surveyManageList) | **POST** /survey/manage/list | 
[**surveyManageRestore**](SurveyApi.md#surveyManageRestore) | **POST** /survey/manage/restore | 
[**surveyManageUpdate**](SurveyApi.md#surveyManageUpdate) | **POST** /survey/manage/update | 
[**surveyReportAggregate**](SurveyApi.md#surveyReportAggregate) | **POST** /survey/report/aggregate | 
[**surveyReportCreate**](SurveyApi.md#surveyReportCreate) | **POST** /survey/report/create | 
[**surveyReportDetail**](SurveyApi.md#surveyReportDetail) | **POST** /survey/report/detail | 
[**surveyReportInfo**](SurveyApi.md#surveyReportInfo) | **POST** /survey/report/info | 
[**surveyReportList**](SurveyApi.md#surveyReportList) | **POST** /survey/report/list | 
[**surveyRevisionInfo**](SurveyApi.md#surveyRevisionInfo) | **POST** /survey/revision/info | 
[**surveyRevisionList**](SurveyApi.md#surveyRevisionList) | **POST** /survey/revision/list | 
[**surveySubscribeCreate**](SurveyApi.md#surveySubscribeCreate) | **POST** /survey/subscribe/create | 
[**surveySubscribeDelete**](SurveyApi.md#surveySubscribeDelete) | **POST** /survey/subscribe/delete | 
[**surveySubscribeInfo**](SurveyApi.md#surveySubscribeInfo) | **POST** /survey/subscribe/info | 
[**surveySubscribeList**](SurveyApi.md#surveySubscribeList) | **POST** /survey/subscribe/list | 
[**surveySubscribeUpdate**](SurveyApi.md#surveySubscribeUpdate) | **POST** /survey/subscribe/update | 
[**surveyTemplateList**](SurveyApi.md#surveyTemplateList) | **POST** /survey/template/list | 


# **surveyAnswerInfo**
> \Swagger\Client\Model\SurveyAnswer surveyAnswerInfo($body)



Информация об ответе на опрос

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body24(); // \Swagger\Client\Model\Body24 | 

try {
    $result = $api_instance->surveyAnswerInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyAnswerInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body24**](../Model/\Swagger\Client\Model\Body24.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyAnswer**](../Model/SurveyAnswer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyAnswerList**
> \Swagger\Client\Model\SurveyAnswer[] surveyAnswerList($body)



Список ответов на опрос

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body25(); // \Swagger\Client\Model\Body25 | 

try {
    $result = $api_instance->surveyAnswerList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyAnswerList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body25**](../Model/\Swagger\Client\Model\Body25.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyAnswer[]**](../Model/SurveyAnswer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorCreatealias**
> \Swagger\Client\Model\SurveyAliasCollector surveyCollectorCreatealias($body)



Создание способа рапространения анкеты \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body26(); // \Swagger\Client\Model\Body26 | 

try {
    $result = $api_instance->surveyCollectorCreatealias($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorCreatealias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body26**](../Model/\Swagger\Client\Model\Body26.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyAliasCollector**](../Model/SurveyAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorCreateextralink**
> \Swagger\Client\Model\SurveyExtralinkCollector surveyCollectorCreateextralink($body)



Создание способа рапространения анкеты \"доп. ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body27(); // \Swagger\Client\Model\Body27 | 

try {
    $result = $api_instance->surveyCollectorCreateextralink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorCreateextralink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body27**](../Model/\Swagger\Client\Model\Body27.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyExtralinkCollector**](../Model/SurveyExtralinkCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorCreatewidget**
> \Swagger\Client\Model\SurveyWidgetCollector surveyCollectorCreatewidget($body)



Создание способа рапространения анкеты \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body28(); // \Swagger\Client\Model\Body28 | 

try {
    $result = $api_instance->surveyCollectorCreatewidget($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorCreatewidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body28**](../Model/\Swagger\Client\Model\Body28.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyWidgetCollector**](../Model/SurveyWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorList**
> \Swagger\Client\Model\SurveyCollector surveyCollectorList($body)



Способы рапространения опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body29(); // \Swagger\Client\Model\Body29 | 

try {
    $result = $api_instance->surveyCollectorList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body29**](../Model/\Swagger\Client\Model\Body29.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyCollector**](../Model/SurveyCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorRemoveextralink**
> string surveyCollectorRemoveextralink($body)



Удаление способа рапространения анкеты \"доп. ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body30(); // \Swagger\Client\Model\Body30 | 

try {
    $result = $api_instance->surveyCollectorRemoveextralink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorRemoveextralink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body30**](../Model/\Swagger\Client\Model\Body30.md)|  |

### Return type

**string**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorUpdatealias**
> \Swagger\Client\Model\SurveyAliasCollector surveyCollectorUpdatealias($body)



Редактрование способа рапространения анкеты \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body31(); // \Swagger\Client\Model\Body31 | 

try {
    $result = $api_instance->surveyCollectorUpdatealias($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorUpdatealias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body31**](../Model/\Swagger\Client\Model\Body31.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyAliasCollector**](../Model/SurveyAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorUpdateextralink**
> \Swagger\Client\Model\SurveyExtralinkCollector surveyCollectorUpdateextralink($body)



Редактрование способа рапространения анкеты \"доп. ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body32(); // \Swagger\Client\Model\Body32 | 

try {
    $result = $api_instance->surveyCollectorUpdateextralink($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorUpdateextralink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body32**](../Model/\Swagger\Client\Model\Body32.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyExtralinkCollector**](../Model/SurveyExtralinkCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorUpdatewidget**
> \Swagger\Client\Model\SurveyWidgetCollector surveyCollectorUpdatewidget($body)



Редактрование способа рапространения анкеты \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body33(); // \Swagger\Client\Model\Body33 | 

try {
    $result = $api_instance->surveyCollectorUpdatewidget($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorUpdatewidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body33**](../Model/\Swagger\Client\Model\Body33.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyWidgetCollector**](../Model/SurveyWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyFilterCreate**
> \Swagger\Client\Model\SurveyFilter surveyFilterCreate($body)



Создание фильтра ответов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body34(); // \Swagger\Client\Model\Body34 | 

try {
    $result = $api_instance->surveyFilterCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyFilterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body34**](../Model/\Swagger\Client\Model\Body34.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyFilter**](../Model/SurveyFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyFilterInfo**
> \Swagger\Client\Model\SurveyFilter surveyFilterInfo($body)



Информация о фильтре ответов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body35(); // \Swagger\Client\Model\Body35 | 

try {
    $result = $api_instance->surveyFilterInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyFilterInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body35**](../Model/\Swagger\Client\Model\Body35.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyFilter**](../Model/SurveyFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyFilterList**
> \Swagger\Client\Model\SurveyFilter[] surveyFilterList()



Список фильтров ответов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();

try {
    $result = $api_instance->surveyFilterList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyFilterList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SurveyFilter[]**](../Model/SurveyFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageArchive**
> \Swagger\Client\Model\SurveySurvey surveyManageArchive($body)



Архивирование опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body36(); // \Swagger\Client\Model\Body36 | 

try {
    $result = $api_instance->surveyManageArchive($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body36**](../Model/\Swagger\Client\Model\Body36.md)|  |

### Return type

[**\Swagger\Client\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageCopy**
> \Swagger\Client\Model\SurveySurvey surveyManageCopy($body)



Копирование опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body37(); // \Swagger\Client\Model\Body37 | 

try {
    $result = $api_instance->surveyManageCopy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body37**](../Model/\Swagger\Client\Model\Body37.md)|  |

### Return type

[**\Swagger\Client\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageCreate**
> \Swagger\Client\Model\SurveySurvey surveyManageCreate($body)



Создание опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body38(); // \Swagger\Client\Model\Body38 | 

try {
    $result = $api_instance->surveyManageCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body38**](../Model/\Swagger\Client\Model\Body38.md)|  |

### Return type

[**\Swagger\Client\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageDelete**
> string surveyManageDelete($body)



Удаление опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body39(); // \Swagger\Client\Model\Body39 | 

try {
    $result = $api_instance->surveyManageDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body39**](../Model/\Swagger\Client\Model\Body39.md)|  |

### Return type

**string**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageInfo**
> \Swagger\Client\Model\SurveySurvey surveyManageInfo($body)



Информация об опросе

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body40(); // \Swagger\Client\Model\Body40 | 

try {
    $result = $api_instance->surveyManageInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body40**](../Model/\Swagger\Client\Model\Body40.md)|  |

### Return type

[**\Swagger\Client\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageList**
> \Swagger\Client\Model\SurveySurvey[] surveyManageList()



Список опросов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();

try {
    $result = $api_instance->surveyManageList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SurveySurvey[]**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageRestore**
> \Swagger\Client\Model\SurveySurvey surveyManageRestore($body)



Восстановление опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body41(); // \Swagger\Client\Model\Body41 | 

try {
    $result = $api_instance->surveyManageRestore($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageRestore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body41**](../Model/\Swagger\Client\Model\Body41.md)|  |

### Return type

[**\Swagger\Client\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageUpdate**
> \Swagger\Client\Model\SurveySurvey surveyManageUpdate($body)



Редактирование опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body42(); // \Swagger\Client\Model\Body42 | 

try {
    $result = $api_instance->surveyManageUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body42**](../Model/\Swagger\Client\Model\Body42.md)|  |

### Return type

[**\Swagger\Client\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportAggregate**
> \Swagger\Client\Model\SurveyReportAggregate surveyReportAggregate($body)



Сгруппированная статистика по опросу

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body43(); // \Swagger\Client\Model\Body43 | 

try {
    $result = $api_instance->surveyReportAggregate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyReportAggregate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body43**](../Model/\Swagger\Client\Model\Body43.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyReportAggregate**](../Model/SurveyReportAggregate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportCreate**
> \Swagger\Client\Model\SurveyReport surveyReportCreate($body)



Создание запроса на формирование файла отчета

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body44(); // \Swagger\Client\Model\Body44 | 

try {
    $result = $api_instance->surveyReportCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyReportCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body44**](../Model/\Swagger\Client\Model\Body44.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyReport**](../Model/SurveyReport.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportDetail**
> \Swagger\Client\Model\SurveyReportDetail surveyReportDetail($body)



Детальная статистика по опросу

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body45(); // \Swagger\Client\Model\Body45 | 

try {
    $result = $api_instance->surveyReportDetail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyReportDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body45**](../Model/\Swagger\Client\Model\Body45.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyReportDetail**](../Model/SurveyReportDetail.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportInfo**
> \Swagger\Client\Model\SurveyReport surveyReportInfo($body)



Информация об отчете

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body46(); // \Swagger\Client\Model\Body46 | 

try {
    $result = $api_instance->surveyReportInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyReportInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body46**](../Model/\Swagger\Client\Model\Body46.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyReport**](../Model/SurveyReport.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportList**
> \Swagger\Client\Model\SurveyReport[] surveyReportList($body)



Список ответов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body47(); // \Swagger\Client\Model\Body47 | 

try {
    $result = $api_instance->surveyReportList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyReportList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body47**](../Model/\Swagger\Client\Model\Body47.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyReport[]**](../Model/SurveyReport.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyRevisionInfo**
> \Swagger\Client\Model\SurveyRevision surveyRevisionInfo($body)



Информация о ревизии опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body48(); // \Swagger\Client\Model\Body48 | 

try {
    $result = $api_instance->surveyRevisionInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyRevisionInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body48**](../Model/\Swagger\Client\Model\Body48.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyRevision**](../Model/SurveyRevision.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyRevisionList**
> \Swagger\Client\Model\SurveyRevision[] surveyRevisionList($body)



Список ревизий опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body49(); // \Swagger\Client\Model\Body49 | 

try {
    $result = $api_instance->surveyRevisionList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyRevisionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body49**](../Model/\Swagger\Client\Model\Body49.md)|  |

### Return type

[**\Swagger\Client\Model\SurveyRevision[]**](../Model/SurveyRevision.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeCreate**
> \Swagger\Client\Model\SurveySubscribe surveySubscribeCreate($body)



Создание подписки на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body50(); // \Swagger\Client\Model\Body50 | 

try {
    $result = $api_instance->surveySubscribeCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveySubscribeCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body50**](../Model/\Swagger\Client\Model\Body50.md)|  |

### Return type

[**\Swagger\Client\Model\SurveySubscribe**](../Model/SurveySubscribe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeDelete**
> \Swagger\Client\Model\CountryItem surveySubscribeDelete($body)



Удаление подписки на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body51(); // \Swagger\Client\Model\Body51 | 

try {
    $result = $api_instance->surveySubscribeDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveySubscribeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body51**](../Model/\Swagger\Client\Model\Body51.md)|  |

### Return type

[**\Swagger\Client\Model\CountryItem**](../Model/CountryItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeInfo**
> \Swagger\Client\Model\SurveySubscribe surveySubscribeInfo($body)



Информация о подписке на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body52(); // \Swagger\Client\Model\Body52 | 

try {
    $result = $api_instance->surveySubscribeInfo($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveySubscribeInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body52**](../Model/\Swagger\Client\Model\Body52.md)|  |

### Return type

[**\Swagger\Client\Model\SurveySubscribe**](../Model/SurveySubscribe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeList**
> \Swagger\Client\Model\SurveySubscribe[] surveySubscribeList($body)



Список подписок на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body53(); // \Swagger\Client\Model\Body53 | 

try {
    $result = $api_instance->surveySubscribeList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveySubscribeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body53**](../Model/\Swagger\Client\Model\Body53.md)|  |

### Return type

[**\Swagger\Client\Model\SurveySubscribe[]**](../Model/SurveySubscribe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeUpdate**
> \Swagger\Client\Model\SurveySubscribe surveySubscribeUpdate($body)



Редактирование подписки на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();
$body = new \Swagger\Client\Model\Body54(); // \Swagger\Client\Model\Body54 | 

try {
    $result = $api_instance->surveySubscribeUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveySubscribeUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body54**](../Model/\Swagger\Client\Model\Body54.md)|  |

### Return type

[**\Swagger\Client\Model\SurveySubscribe**](../Model/SurveySubscribe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyTemplateList**
> \Swagger\Client\Model\SurveyTemplate surveyTemplateList()



Список шаблонов опросов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new Swagger\Client\Api\SurveyApi();

try {
    $result = $api_instance->surveyTemplateList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyTemplateList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SurveyTemplate**](../Model/SurveyTemplate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

