# AnketologClient\SurveyApi

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
> \AnketologClient\Model\SurveyAnswer surveyAnswerInfo($survey_answer_info_body)



Информация об ответе на опрос

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_answer_info_body = new \AnketologClient\Model\SurveyAnswerInfoBody(); // \AnketologClient\Model\SurveyAnswerInfoBody | 

try {
    $result = $api_instance->surveyAnswerInfo($survey_answer_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyAnswerInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_answer_info_body** | [**\AnketologClient\Model\SurveyAnswerInfoBody**](../Model/\AnketologClient\Model\SurveyAnswerInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyAnswer**](../Model/SurveyAnswer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyAnswerList**
> \AnketologClient\Model\SurveyAnswer[] surveyAnswerList($survey_answer_list_body)



Список ответов на опрос

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_answer_list_body = new \AnketologClient\Model\SurveyAnswerListBody(); // \AnketologClient\Model\SurveyAnswerListBody | 

try {
    $result = $api_instance->surveyAnswerList($survey_answer_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyAnswerList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_answer_list_body** | [**\AnketologClient\Model\SurveyAnswerListBody**](../Model/\AnketologClient\Model\SurveyAnswerListBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyAnswer[]**](../Model/SurveyAnswer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorCreatealias**
> \AnketologClient\Model\SurveyAliasCollector surveyCollectorCreatealias($survey_collector_createalias_body)



Создание способа рапространения анкеты \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_collector_createalias_body = new \AnketologClient\Model\SurveyCollectorCreatealiasBody(); // \AnketologClient\Model\SurveyCollectorCreatealiasBody | 

try {
    $result = $api_instance->surveyCollectorCreatealias($survey_collector_createalias_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorCreatealias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_createalias_body** | [**\AnketologClient\Model\SurveyCollectorCreatealiasBody**](../Model/\AnketologClient\Model\SurveyCollectorCreatealiasBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyAliasCollector**](../Model/SurveyAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorCreateextralink**
> \AnketologClient\Model\SurveyExtralinkCollector surveyCollectorCreateextralink($survey_collector_createextralink_body)



Создание способа рапространения анкеты \"доп. ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_collector_createextralink_body = new \AnketologClient\Model\SurveyCollectorCreateextralinkBody(); // \AnketologClient\Model\SurveyCollectorCreateextralinkBody | 

try {
    $result = $api_instance->surveyCollectorCreateextralink($survey_collector_createextralink_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorCreateextralink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_createextralink_body** | [**\AnketologClient\Model\SurveyCollectorCreateextralinkBody**](../Model/\AnketologClient\Model\SurveyCollectorCreateextralinkBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyExtralinkCollector**](../Model/SurveyExtralinkCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorCreatewidget**
> \AnketologClient\Model\SurveyWidgetCollector surveyCollectorCreatewidget($survey_collector_createwidget_body)



Создание способа рапространения анкеты \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_collector_createwidget_body = new \AnketologClient\Model\SurveyCollectorCreatewidgetBody(); // \AnketologClient\Model\SurveyCollectorCreatewidgetBody | 

try {
    $result = $api_instance->surveyCollectorCreatewidget($survey_collector_createwidget_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorCreatewidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_createwidget_body** | [**\AnketologClient\Model\SurveyCollectorCreatewidgetBody**](../Model/\AnketologClient\Model\SurveyCollectorCreatewidgetBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyWidgetCollector**](../Model/SurveyWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorList**
> \AnketologClient\Model\SurveyCollector surveyCollectorList($survey_collector_list_body)



Способы рапространения опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_collector_list_body = new \AnketologClient\Model\SurveyCollectorListBody(); // \AnketologClient\Model\SurveyCollectorListBody | 

try {
    $result = $api_instance->surveyCollectorList($survey_collector_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_list_body** | [**\AnketologClient\Model\SurveyCollectorListBody**](../Model/\AnketologClient\Model\SurveyCollectorListBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyCollector**](../Model/SurveyCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorRemoveextralink**
> string surveyCollectorRemoveextralink($survey_collector_removeextralink_body)



Удаление способа рапространения анкеты \"доп. ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_collector_removeextralink_body = new \AnketologClient\Model\SurveyCollectorRemoveextralinkBody(); // \AnketologClient\Model\SurveyCollectorRemoveextralinkBody | 

try {
    $result = $api_instance->surveyCollectorRemoveextralink($survey_collector_removeextralink_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorRemoveextralink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_removeextralink_body** | [**\AnketologClient\Model\SurveyCollectorRemoveextralinkBody**](../Model/\AnketologClient\Model\SurveyCollectorRemoveextralinkBody.md)|  |

### Return type

**string**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorUpdatealias**
> \AnketologClient\Model\SurveyAliasCollector surveyCollectorUpdatealias($survey_collector_updatealias_body)



Редактрование способа рапространения анкеты \"именная ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_collector_updatealias_body = new \AnketologClient\Model\SurveyCollectorUpdatealiasBody(); // \AnketologClient\Model\SurveyCollectorUpdatealiasBody | 

try {
    $result = $api_instance->surveyCollectorUpdatealias($survey_collector_updatealias_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorUpdatealias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_updatealias_body** | [**\AnketologClient\Model\SurveyCollectorUpdatealiasBody**](../Model/\AnketologClient\Model\SurveyCollectorUpdatealiasBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyAliasCollector**](../Model/SurveyAliasCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorUpdateextralink**
> \AnketologClient\Model\SurveyExtralinkCollector surveyCollectorUpdateextralink($survey_collector_updateextralink_body)



Редактрование способа рапространения анкеты \"доп. ссылка\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_collector_updateextralink_body = new \AnketologClient\Model\SurveyCollectorUpdateextralinkBody(); // \AnketologClient\Model\SurveyCollectorUpdateextralinkBody | 

try {
    $result = $api_instance->surveyCollectorUpdateextralink($survey_collector_updateextralink_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorUpdateextralink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_updateextralink_body** | [**\AnketologClient\Model\SurveyCollectorUpdateextralinkBody**](../Model/\AnketologClient\Model\SurveyCollectorUpdateextralinkBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyExtralinkCollector**](../Model/SurveyExtralinkCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyCollectorUpdatewidget**
> \AnketologClient\Model\SurveyWidgetCollector surveyCollectorUpdatewidget($survey_collector_updatewidget_body)



Редактрование способа рапространения анкеты \"виджет\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_collector_updatewidget_body = new \AnketologClient\Model\SurveyCollectorUpdatewidgetBody(); // \AnketologClient\Model\SurveyCollectorUpdatewidgetBody | 

try {
    $result = $api_instance->surveyCollectorUpdatewidget($survey_collector_updatewidget_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyCollectorUpdatewidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_collector_updatewidget_body** | [**\AnketologClient\Model\SurveyCollectorUpdatewidgetBody**](../Model/\AnketologClient\Model\SurveyCollectorUpdatewidgetBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyWidgetCollector**](../Model/SurveyWidgetCollector.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyFilterCreate**
> \AnketologClient\Model\SurveyFilter surveyFilterCreate($survey_filter_create_body)



Создание фильтра ответов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_filter_create_body = new \AnketologClient\Model\SurveyFilterCreateBody(); // \AnketologClient\Model\SurveyFilterCreateBody | 

try {
    $result = $api_instance->surveyFilterCreate($survey_filter_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyFilterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_filter_create_body** | [**\AnketologClient\Model\SurveyFilterCreateBody**](../Model/\AnketologClient\Model\SurveyFilterCreateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyFilter**](../Model/SurveyFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyFilterInfo**
> \AnketologClient\Model\SurveyFilter surveyFilterInfo($survey_filter_info_body)



Информация о фильтре ответов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_filter_info_body = new \AnketologClient\Model\SurveyFilterInfoBody(); // \AnketologClient\Model\SurveyFilterInfoBody | 

try {
    $result = $api_instance->surveyFilterInfo($survey_filter_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyFilterInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_filter_info_body** | [**\AnketologClient\Model\SurveyFilterInfoBody**](../Model/\AnketologClient\Model\SurveyFilterInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyFilter**](../Model/SurveyFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyFilterList**
> \AnketologClient\Model\SurveyFilter[] surveyFilterList($survey_filter_list_body)



Список фильтров ответов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_filter_list_body = new \AnketologClient\Model\SurveyFilterListBody(); // \AnketologClient\Model\SurveyFilterListBody | 

try {
    $result = $api_instance->surveyFilterList($survey_filter_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyFilterList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_filter_list_body** | [**\AnketologClient\Model\SurveyFilterListBody**](../Model/\AnketologClient\Model\SurveyFilterListBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyFilter[]**](../Model/SurveyFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageArchive**
> \AnketologClient\Model\SurveySurvey surveyManageArchive($survey_manage_archive_body)



Архивирование опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_manage_archive_body = new \AnketologClient\Model\SurveyManageArchiveBody(); // \AnketologClient\Model\SurveyManageArchiveBody | 

try {
    $result = $api_instance->surveyManageArchive($survey_manage_archive_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_archive_body** | [**\AnketologClient\Model\SurveyManageArchiveBody**](../Model/\AnketologClient\Model\SurveyManageArchiveBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageCopy**
> \AnketologClient\Model\SurveySurvey surveyManageCopy($survey_manage_copy_body)



Копирование опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_manage_copy_body = new \AnketologClient\Model\SurveyManageCopyBody(); // \AnketologClient\Model\SurveyManageCopyBody | 

try {
    $result = $api_instance->surveyManageCopy($survey_manage_copy_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_copy_body** | [**\AnketologClient\Model\SurveyManageCopyBody**](../Model/\AnketologClient\Model\SurveyManageCopyBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageCreate**
> \AnketologClient\Model\SurveySurvey surveyManageCreate($survey_manage_create_body)



Создание опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_manage_create_body = new \AnketologClient\Model\SurveyManageCreateBody(); // \AnketologClient\Model\SurveyManageCreateBody | 

try {
    $result = $api_instance->surveyManageCreate($survey_manage_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_create_body** | [**\AnketologClient\Model\SurveyManageCreateBody**](../Model/\AnketologClient\Model\SurveyManageCreateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageDelete**
> string surveyManageDelete($survey_manage_delete_body)



Удаление опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_manage_delete_body = new \AnketologClient\Model\SurveyManageDeleteBody(); // \AnketologClient\Model\SurveyManageDeleteBody | 

try {
    $result = $api_instance->surveyManageDelete($survey_manage_delete_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_delete_body** | [**\AnketologClient\Model\SurveyManageDeleteBody**](../Model/\AnketologClient\Model\SurveyManageDeleteBody.md)|  |

### Return type

**string**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageInfo**
> \AnketologClient\Model\SurveySurvey surveyManageInfo($survey_manage_info_body)



Информация об опросе

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_manage_info_body = new \AnketologClient\Model\SurveyManageInfoBody(); // \AnketologClient\Model\SurveyManageInfoBody | 

try {
    $result = $api_instance->surveyManageInfo($survey_manage_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_info_body** | [**\AnketologClient\Model\SurveyManageInfoBody**](../Model/\AnketologClient\Model\SurveyManageInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageList**
> \AnketologClient\Model\SurveySurvey[] surveyManageList()



Список опросов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();

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

[**\AnketologClient\Model\SurveySurvey[]**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageRestore**
> \AnketologClient\Model\SurveySurvey surveyManageRestore($survey_manage_restore_body)



Восстановление опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_manage_restore_body = new \AnketologClient\Model\SurveyManageRestoreBody(); // \AnketologClient\Model\SurveyManageRestoreBody | 

try {
    $result = $api_instance->surveyManageRestore($survey_manage_restore_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageRestore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_restore_body** | [**\AnketologClient\Model\SurveyManageRestoreBody**](../Model/\AnketologClient\Model\SurveyManageRestoreBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyManageUpdate**
> \AnketologClient\Model\SurveySurvey surveyManageUpdate($survey_manage_update_body)



Редактирование опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_manage_update_body = new \AnketologClient\Model\SurveyManageUpdateBody(); // \AnketologClient\Model\SurveyManageUpdateBody | 

try {
    $result = $api_instance->surveyManageUpdate($survey_manage_update_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyManageUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_manage_update_body** | [**\AnketologClient\Model\SurveyManageUpdateBody**](../Model/\AnketologClient\Model\SurveyManageUpdateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySurvey**](../Model/SurveySurvey.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportAggregate**
> \AnketologClient\Model\SurveyReportAggregate surveyReportAggregate($survey_report_aggregate_body)



Сгруппированная статистика по опросу

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_report_aggregate_body = new \AnketologClient\Model\SurveyReportAggregateBody(); // \AnketologClient\Model\SurveyReportAggregateBody | 

try {
    $result = $api_instance->surveyReportAggregate($survey_report_aggregate_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyReportAggregate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_report_aggregate_body** | [**\AnketologClient\Model\SurveyReportAggregateBody**](../Model/\AnketologClient\Model\SurveyReportAggregateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyReportAggregate**](../Model/SurveyReportAggregate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportCreate**
> \AnketologClient\Model\SurveyReport surveyReportCreate($survey_report_create_body)



Создание запроса на формирование файла отчета

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_report_create_body = new \AnketologClient\Model\SurveyReportCreateBody(); // \AnketologClient\Model\SurveyReportCreateBody | 

try {
    $result = $api_instance->surveyReportCreate($survey_report_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyReportCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_report_create_body** | [**\AnketologClient\Model\SurveyReportCreateBody**](../Model/\AnketologClient\Model\SurveyReportCreateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyReport**](../Model/SurveyReport.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportDetail**
> \AnketologClient\Model\SurveyReportDetail surveyReportDetail($survey_report_detail_body)



Детальная статистика по опросу

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_report_detail_body = new \AnketologClient\Model\SurveyReportDetailBody(); // \AnketologClient\Model\SurveyReportDetailBody | 

try {
    $result = $api_instance->surveyReportDetail($survey_report_detail_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyReportDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_report_detail_body** | [**\AnketologClient\Model\SurveyReportDetailBody**](../Model/\AnketologClient\Model\SurveyReportDetailBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyReportDetail**](../Model/SurveyReportDetail.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportInfo**
> \AnketologClient\Model\SurveyReport surveyReportInfo($survey_report_info_body)



Информация об отчете

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_report_info_body = new \AnketologClient\Model\SurveyReportInfoBody(); // \AnketologClient\Model\SurveyReportInfoBody | 

try {
    $result = $api_instance->surveyReportInfo($survey_report_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyReportInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_report_info_body** | [**\AnketologClient\Model\SurveyReportInfoBody**](../Model/\AnketologClient\Model\SurveyReportInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyReport**](../Model/SurveyReport.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyReportList**
> \AnketologClient\Model\SurveyReport[] surveyReportList($survey_report_list_body)



Список ответов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_report_list_body = new \AnketologClient\Model\SurveyReportListBody(); // \AnketologClient\Model\SurveyReportListBody | 

try {
    $result = $api_instance->surveyReportList($survey_report_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyReportList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_report_list_body** | [**\AnketologClient\Model\SurveyReportListBody**](../Model/\AnketologClient\Model\SurveyReportListBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyReport[]**](../Model/SurveyReport.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyRevisionInfo**
> \AnketologClient\Model\SurveyRevision surveyRevisionInfo($survey_revision_info_body)



Информация о ревизии опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_revision_info_body = new \AnketologClient\Model\SurveyRevisionInfoBody(); // \AnketologClient\Model\SurveyRevisionInfoBody | 

try {
    $result = $api_instance->surveyRevisionInfo($survey_revision_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyRevisionInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_revision_info_body** | [**\AnketologClient\Model\SurveyRevisionInfoBody**](../Model/\AnketologClient\Model\SurveyRevisionInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyRevision**](../Model/SurveyRevision.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyRevisionList**
> \AnketologClient\Model\SurveyRevision[] surveyRevisionList($survey_revision_list_body)



Список ревизий опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_revision_list_body = new \AnketologClient\Model\SurveyRevisionListBody(); // \AnketologClient\Model\SurveyRevisionListBody | 

try {
    $result = $api_instance->surveyRevisionList($survey_revision_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveyRevisionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_revision_list_body** | [**\AnketologClient\Model\SurveyRevisionListBody**](../Model/\AnketologClient\Model\SurveyRevisionListBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyRevision[]**](../Model/SurveyRevision.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeCreate**
> \AnketologClient\Model\SurveySubscribe surveySubscribeCreate($survey_subscribe_create_body)



Создание подписки на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_subscribe_create_body = new \AnketologClient\Model\SurveySubscribeCreateBody(); // \AnketologClient\Model\SurveySubscribeCreateBody | 

try {
    $result = $api_instance->surveySubscribeCreate($survey_subscribe_create_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveySubscribeCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_subscribe_create_body** | [**\AnketologClient\Model\SurveySubscribeCreateBody**](../Model/\AnketologClient\Model\SurveySubscribeCreateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySubscribe**](../Model/SurveySubscribe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeDelete**
> \AnketologClient\Model\CountryItem surveySubscribeDelete($survey_subscribe_delete_body)



Удаление подписки на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_subscribe_delete_body = new \AnketologClient\Model\SurveySubscribeDeleteBody(); // \AnketologClient\Model\SurveySubscribeDeleteBody | 

try {
    $result = $api_instance->surveySubscribeDelete($survey_subscribe_delete_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveySubscribeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_subscribe_delete_body** | [**\AnketologClient\Model\SurveySubscribeDeleteBody**](../Model/\AnketologClient\Model\SurveySubscribeDeleteBody.md)|  |

### Return type

[**\AnketologClient\Model\CountryItem**](../Model/CountryItem.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeInfo**
> \AnketologClient\Model\SurveySubscribe surveySubscribeInfo($survey_subscribe_info_body)



Информация о подписке на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_subscribe_info_body = new \AnketologClient\Model\SurveySubscribeInfoBody(); // \AnketologClient\Model\SurveySubscribeInfoBody | 

try {
    $result = $api_instance->surveySubscribeInfo($survey_subscribe_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveySubscribeInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_subscribe_info_body** | [**\AnketologClient\Model\SurveySubscribeInfoBody**](../Model/\AnketologClient\Model\SurveySubscribeInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySubscribe**](../Model/SurveySubscribe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeList**
> \AnketologClient\Model\SurveySubscribe[] surveySubscribeList($survey_subscribe_list_body)



Список подписок на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_subscribe_list_body = new \AnketologClient\Model\SurveySubscribeListBody(); // \AnketologClient\Model\SurveySubscribeListBody | 

try {
    $result = $api_instance->surveySubscribeList($survey_subscribe_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveySubscribeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_subscribe_list_body** | [**\AnketologClient\Model\SurveySubscribeListBody**](../Model/\AnketologClient\Model\SurveySubscribeListBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySubscribe[]**](../Model/SurveySubscribe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveySubscribeUpdate**
> \AnketologClient\Model\SurveySubscribe surveySubscribeUpdate($survey_subscribe_update_body)



Редактирование подписки на результаты опроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();
$survey_subscribe_update_body = new \AnketologClient\Model\SurveySubscribeUpdateBody(); // \AnketologClient\Model\SurveySubscribeUpdateBody | 

try {
    $result = $api_instance->surveySubscribeUpdate($survey_subscribe_update_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyApi->surveySubscribeUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_subscribe_update_body** | [**\AnketologClient\Model\SurveySubscribeUpdateBody**](../Model/\AnketologClient\Model\SurveySubscribeUpdateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveySubscribe**](../Model/SurveySubscribe.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyTemplateList**
> \AnketologClient\Model\SurveyTemplate surveyTemplateList()



Список шаблонов опросов

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyApi();

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

[**\AnketologClient\Model\SurveyTemplate**](../Model/SurveyTemplate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

