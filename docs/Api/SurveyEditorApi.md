# AnketologClient\SurveyEditorApi

All URIs are relative to *https://${app.apiv2.domain}/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**surveyEditorAddBranchrule**](SurveyEditorApi.md#surveyEditorAddBranchrule) | **POST** /survey/editor/addBranchrule | 
[**surveyEditorAddOption**](SurveyEditorApi.md#surveyEditorAddOption) | **POST** /survey/editor/addOption | 
[**surveyEditorAddOptionValue**](SurveyEditorApi.md#surveyEditorAddOptionValue) | **POST** /survey/editor/addOptionValue | 
[**surveyEditorAddPage**](SurveyEditorApi.md#surveyEditorAddPage) | **POST** /survey/editor/addPage | 
[**surveyEditorAddQuestion**](SurveyEditorApi.md#surveyEditorAddQuestion) | **POST** /survey/editor/addQuestion | 
[**surveyEditorAddRange**](SurveyEditorApi.md#surveyEditorAddRange) | **POST** /survey/editor/addRange | 
[**surveyEditorAddRow**](SurveyEditorApi.md#surveyEditorAddRow) | **POST** /survey/editor/addRow | 
[**surveyEditorAddVisiblerule**](SurveyEditorApi.md#surveyEditorAddVisiblerule) | **POST** /survey/editor/addVisiblerule | 
[**surveyEditorMoveBranchrule**](SurveyEditorApi.md#surveyEditorMoveBranchrule) | **POST** /survey/editor/moveBranchrule | 
[**surveyEditorMoveOption**](SurveyEditorApi.md#surveyEditorMoveOption) | **POST** /survey/editor/moveOption | 
[**surveyEditorMoveOptionValue**](SurveyEditorApi.md#surveyEditorMoveOptionValue) | **POST** /survey/editor/moveOptionValue | 
[**surveyEditorMovePage**](SurveyEditorApi.md#surveyEditorMovePage) | **POST** /survey/editor/movePage | 
[**surveyEditorMoveQuestion**](SurveyEditorApi.md#surveyEditorMoveQuestion) | **POST** /survey/editor/moveQuestion | 
[**surveyEditorMoveRange**](SurveyEditorApi.md#surveyEditorMoveRange) | **POST** /survey/editor/moveRange | 
[**surveyEditorMoveRow**](SurveyEditorApi.md#surveyEditorMoveRow) | **POST** /survey/editor/moveRow | 
[**surveyEditorMoveVisiblerule**](SurveyEditorApi.md#surveyEditorMoveVisiblerule) | **POST** /survey/editor/moveVisiblerule | 
[**surveyEditorRemoveBranchrule**](SurveyEditorApi.md#surveyEditorRemoveBranchrule) | **POST** /survey/editor/removeBranchrule | 
[**surveyEditorRemoveOption**](SurveyEditorApi.md#surveyEditorRemoveOption) | **POST** /survey/editor/removeOption | 
[**surveyEditorRemoveOptionValue**](SurveyEditorApi.md#surveyEditorRemoveOptionValue) | **POST** /survey/editor/removeOptionValue | 
[**surveyEditorRemovePage**](SurveyEditorApi.md#surveyEditorRemovePage) | **POST** /survey/editor/removePage | 
[**surveyEditorRemoveQuestion**](SurveyEditorApi.md#surveyEditorRemoveQuestion) | **POST** /survey/editor/removeQuestion | 
[**surveyEditorRemoveRange**](SurveyEditorApi.md#surveyEditorRemoveRange) | **POST** /survey/editor/removeRange | 
[**surveyEditorRemoveRow**](SurveyEditorApi.md#surveyEditorRemoveRow) | **POST** /survey/editor/removeRow | 
[**surveyEditorRemoveVisiblerule**](SurveyEditorApi.md#surveyEditorRemoveVisiblerule) | **POST** /survey/editor/removeVisiblerule | 
[**surveyEditorUpdateBranchrule**](SurveyEditorApi.md#surveyEditorUpdateBranchrule) | **POST** /survey/editor/updateBranchrule | 
[**surveyEditorUpdateOption**](SurveyEditorApi.md#surveyEditorUpdateOption) | **POST** /survey/editor/updateOption | 
[**surveyEditorUpdateOptionValue**](SurveyEditorApi.md#surveyEditorUpdateOptionValue) | **POST** /survey/editor/updateOptionValue | 
[**surveyEditorUpdateQuestion**](SurveyEditorApi.md#surveyEditorUpdateQuestion) | **POST** /survey/editor/updateQuestion | 
[**surveyEditorUpdateRange**](SurveyEditorApi.md#surveyEditorUpdateRange) | **POST** /survey/editor/updateRange | 
[**surveyEditorUpdateRow**](SurveyEditorApi.md#surveyEditorUpdateRow) | **POST** /survey/editor/updateRow | 
[**surveyEditorUpdateVisiblerule**](SurveyEditorApi.md#surveyEditorUpdateVisiblerule) | **POST** /survey/editor/updateVisiblerule | 


# **surveyEditorAddBranchrule**
> \AnketologClient\Model\SurveyBranchrule surveyEditorAddBranchrule($survey_editor_add_branchrule_body)



Добавление правила ветвления  Для вопросов:  * `free` * `freelist` * `select` * `multiselect` * `dropdown` * `matrix` * `matrix3d` * `name` * `email` * `date` * `scale` * `order` * `ratingscale`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_add_branchrule_body = new \AnketologClient\Model\SurveyEditorAddBranchruleBody(); // \AnketologClient\Model\SurveyEditorAddBranchruleBody | 

try {
    $result = $api_instance->surveyEditorAddBranchrule($survey_editor_add_branchrule_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorAddBranchrule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_add_branchrule_body** | [**\AnketologClient\Model\SurveyEditorAddBranchruleBody**](../Model/\AnketologClient\Model\SurveyEditorAddBranchruleBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyBranchrule**](../Model/SurveyBranchrule.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorAddOption**
> \AnketologClient\Model\SurveyOption surveyEditorAddOption($survey_editor_add_option_body)



Добавление варианта вопросу  Для вопросов:  * `freelist` * `select` * `multiselect` * `dropdown` * `matrix` * `matrix3d` * `order` * `ratingscale`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_add_option_body = new \AnketologClient\Model\SurveyEditorAddOptionBody(); // \AnketologClient\Model\SurveyEditorAddOptionBody | 

try {
    $result = $api_instance->surveyEditorAddOption($survey_editor_add_option_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorAddOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_add_option_body** | [**\AnketologClient\Model\SurveyEditorAddOptionBody**](../Model/\AnketologClient\Model\SurveyEditorAddOptionBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyOption**](../Model/SurveyOption.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorAddOptionValue**
> \AnketologClient\Model\SurveyOptionValue surveyEditorAddOptionValue($survey_editor_add_option_value_body)



Добавление варианта колонке  Для вопросов:  * `matrix3d`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_add_option_value_body = new \AnketologClient\Model\SurveyEditorAddOptionValueBody(); // \AnketologClient\Model\SurveyEditorAddOptionValueBody | 

try {
    $result = $api_instance->surveyEditorAddOptionValue($survey_editor_add_option_value_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorAddOptionValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_add_option_value_body** | [**\AnketologClient\Model\SurveyEditorAddOptionValueBody**](../Model/\AnketologClient\Model\SurveyEditorAddOptionValueBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyOptionValue**](../Model/SurveyOptionValue.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorAddPage**
> \AnketologClient\Model\SurveyPage surveyEditorAddPage($survey_editor_add_page_body)



Добавление страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_add_page_body = new \AnketologClient\Model\SurveyEditorAddPageBody(); // \AnketologClient\Model\SurveyEditorAddPageBody | 

try {
    $result = $api_instance->surveyEditorAddPage($survey_editor_add_page_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorAddPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_add_page_body** | [**\AnketologClient\Model\SurveyEditorAddPageBody**](../Model/\AnketologClient\Model\SurveyEditorAddPageBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyPage**](../Model/SurveyPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorAddQuestion**
> \AnketologClient\Model\SurveyQuestion surveyEditorAddQuestion($survey_editor_add_question_body)



Добавление вопроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_add_question_body = new \AnketologClient\Model\SurveyEditorAddQuestionBody(); // \AnketologClient\Model\SurveyEditorAddQuestionBody | 

try {
    $result = $api_instance->surveyEditorAddQuestion($survey_editor_add_question_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorAddQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_add_question_body** | [**\AnketologClient\Model\SurveyEditorAddQuestionBody**](../Model/\AnketologClient\Model\SurveyEditorAddQuestionBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyQuestion**](../Model/SurveyQuestion.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorAddRange**
> \AnketologClient\Model\SurveyRange surveyEditorAddRange($survey_editor_add_range_body)



Добавление диапазона вопросу  Для вопросов:  * `scale`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_add_range_body = new \AnketologClient\Model\SurveyEditorAddRangeBody(); // \AnketologClient\Model\SurveyEditorAddRangeBody | 

try {
    $result = $api_instance->surveyEditorAddRange($survey_editor_add_range_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorAddRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_add_range_body** | [**\AnketologClient\Model\SurveyEditorAddRangeBody**](../Model/\AnketologClient\Model\SurveyEditorAddRangeBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyRange**](../Model/SurveyRange.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorAddRow**
> \AnketologClient\Model\SurveyRow surveyEditorAddRow($survey_editor_add_row_body)



Добавление строки вопросу  Для вопросов:  * `matrix` * `matrix3d`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_add_row_body = new \AnketologClient\Model\SurveyEditorAddRowBody(); // \AnketologClient\Model\SurveyEditorAddRowBody | 

try {
    $result = $api_instance->surveyEditorAddRow($survey_editor_add_row_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorAddRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_add_row_body** | [**\AnketologClient\Model\SurveyEditorAddRowBody**](../Model/\AnketologClient\Model\SurveyEditorAddRowBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyRow**](../Model/SurveyRow.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorAddVisiblerule**
> \AnketologClient\Model\SurveyVisiblerule surveyEditorAddVisiblerule($survey_editor_add_visiblerule_body)



Добавление

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_add_visiblerule_body = new \AnketologClient\Model\SurveyEditorAddVisibleruleBody(); // \AnketologClient\Model\SurveyEditorAddVisibleruleBody | 

try {
    $result = $api_instance->surveyEditorAddVisiblerule($survey_editor_add_visiblerule_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorAddVisiblerule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_add_visiblerule_body** | [**\AnketologClient\Model\SurveyEditorAddVisibleruleBody**](../Model/\AnketologClient\Model\SurveyEditorAddVisibleruleBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyVisiblerule**](../Model/SurveyVisiblerule.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorMoveBranchrule**
> \AnketologClient\Model\SurveyBranchrule surveyEditorMoveBranchrule($survey_editor_move_branchrule_body)



Перемещение

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_move_branchrule_body = new \AnketologClient\Model\SurveyEditorMoveBranchruleBody(); // \AnketologClient\Model\SurveyEditorMoveBranchruleBody | 

try {
    $result = $api_instance->surveyEditorMoveBranchrule($survey_editor_move_branchrule_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorMoveBranchrule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_move_branchrule_body** | [**\AnketologClient\Model\SurveyEditorMoveBranchruleBody**](../Model/\AnketologClient\Model\SurveyEditorMoveBranchruleBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyBranchrule**](../Model/SurveyBranchrule.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorMoveOption**
> \AnketologClient\Model\SurveyOption surveyEditorMoveOption($survey_editor_move_option_body)



Перемещение варианта/колонки

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_move_option_body = new \AnketologClient\Model\SurveyEditorMoveOptionBody(); // \AnketologClient\Model\SurveyEditorMoveOptionBody | 

try {
    $result = $api_instance->surveyEditorMoveOption($survey_editor_move_option_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorMoveOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_move_option_body** | [**\AnketologClient\Model\SurveyEditorMoveOptionBody**](../Model/\AnketologClient\Model\SurveyEditorMoveOptionBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyOption**](../Model/SurveyOption.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorMoveOptionValue**
> \AnketologClient\Model\SurveyOptionValue surveyEditorMoveOptionValue($survey_editor_move_option_value_body)



Перемещение варианта ответа в колонке

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_move_option_value_body = new \AnketologClient\Model\SurveyEditorMoveOptionValueBody(); // \AnketologClient\Model\SurveyEditorMoveOptionValueBody | 

try {
    $result = $api_instance->surveyEditorMoveOptionValue($survey_editor_move_option_value_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorMoveOptionValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_move_option_value_body** | [**\AnketologClient\Model\SurveyEditorMoveOptionValueBody**](../Model/\AnketologClient\Model\SurveyEditorMoveOptionValueBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyOptionValue**](../Model/SurveyOptionValue.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorMovePage**
> \AnketologClient\Model\SurveyPage surveyEditorMovePage($survey_editor_move_page_body)



Перемещение страницы

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_move_page_body = new \AnketologClient\Model\SurveyEditorMovePageBody(); // \AnketologClient\Model\SurveyEditorMovePageBody | 

try {
    $result = $api_instance->surveyEditorMovePage($survey_editor_move_page_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorMovePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_move_page_body** | [**\AnketologClient\Model\SurveyEditorMovePageBody**](../Model/\AnketologClient\Model\SurveyEditorMovePageBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyPage**](../Model/SurveyPage.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorMoveQuestion**
> \AnketologClient\Model\SurveyQuestion surveyEditorMoveQuestion($survey_editor_move_question_body)



Перемещение вопроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_move_question_body = new \AnketologClient\Model\SurveyEditorMoveQuestionBody(); // \AnketologClient\Model\SurveyEditorMoveQuestionBody | 

try {
    $result = $api_instance->surveyEditorMoveQuestion($survey_editor_move_question_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorMoveQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_move_question_body** | [**\AnketologClient\Model\SurveyEditorMoveQuestionBody**](../Model/\AnketologClient\Model\SurveyEditorMoveQuestionBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyQuestion**](../Model/SurveyQuestion.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorMoveRange**
> \AnketologClient\Model\SurveyRange surveyEditorMoveRange($survey_editor_move_range_body)



Перемещение диапазона

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_move_range_body = new \AnketologClient\Model\SurveyEditorMoveRangeBody(); // \AnketologClient\Model\SurveyEditorMoveRangeBody | 

try {
    $result = $api_instance->surveyEditorMoveRange($survey_editor_move_range_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorMoveRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_move_range_body** | [**\AnketologClient\Model\SurveyEditorMoveRangeBody**](../Model/\AnketologClient\Model\SurveyEditorMoveRangeBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyRange**](../Model/SurveyRange.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorMoveRow**
> \AnketologClient\Model\SurveyRow surveyEditorMoveRow($survey_editor_move_row_body)



Перемещение строки

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_move_row_body = new \AnketologClient\Model\SurveyEditorMoveRowBody(); // \AnketologClient\Model\SurveyEditorMoveRowBody | 

try {
    $result = $api_instance->surveyEditorMoveRow($survey_editor_move_row_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorMoveRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_move_row_body** | [**\AnketologClient\Model\SurveyEditorMoveRowBody**](../Model/\AnketologClient\Model\SurveyEditorMoveRowBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyRow**](../Model/SurveyRow.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorMoveVisiblerule**
> \AnketologClient\Model\SurveyVisiblerule surveyEditorMoveVisiblerule($survey_editor_move_visiblerule_body)



Перемещение

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_move_visiblerule_body = new \AnketologClient\Model\SurveyEditorMoveVisibleruleBody(); // \AnketologClient\Model\SurveyEditorMoveVisibleruleBody | 

try {
    $result = $api_instance->surveyEditorMoveVisiblerule($survey_editor_move_visiblerule_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorMoveVisiblerule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_move_visiblerule_body** | [**\AnketologClient\Model\SurveyEditorMoveVisibleruleBody**](../Model/\AnketologClient\Model\SurveyEditorMoveVisibleruleBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyVisiblerule**](../Model/SurveyVisiblerule.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorRemoveBranchrule**
> \AnketologClient\Model\InlineResponse200 surveyEditorRemoveBranchrule($survey_editor_remove_branchrule_body)



Удаление

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_remove_branchrule_body = new \AnketologClient\Model\SurveyEditorRemoveBranchruleBody(); // \AnketologClient\Model\SurveyEditorRemoveBranchruleBody | 

try {
    $result = $api_instance->surveyEditorRemoveBranchrule($survey_editor_remove_branchrule_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorRemoveBranchrule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_remove_branchrule_body** | [**\AnketologClient\Model\SurveyEditorRemoveBranchruleBody**](../Model/\AnketologClient\Model\SurveyEditorRemoveBranchruleBody.md)|  |

### Return type

[**\AnketologClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorRemoveOption**
> \AnketologClient\Model\InlineResponse200 surveyEditorRemoveOption($survey_editor_remove_option_body)



Удаление

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_remove_option_body = new \AnketologClient\Model\SurveyEditorRemoveOptionBody(); // \AnketologClient\Model\SurveyEditorRemoveOptionBody | 

try {
    $result = $api_instance->surveyEditorRemoveOption($survey_editor_remove_option_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorRemoveOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_remove_option_body** | [**\AnketologClient\Model\SurveyEditorRemoveOptionBody**](../Model/\AnketologClient\Model\SurveyEditorRemoveOptionBody.md)|  |

### Return type

[**\AnketologClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorRemoveOptionValue**
> \AnketologClient\Model\InlineResponse200 surveyEditorRemoveOptionValue($survey_editor_remove_option_value_body)



Удаление

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_remove_option_value_body = new \AnketologClient\Model\SurveyEditorRemoveOptionValueBody(); // \AnketologClient\Model\SurveyEditorRemoveOptionValueBody | 

try {
    $result = $api_instance->surveyEditorRemoveOptionValue($survey_editor_remove_option_value_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorRemoveOptionValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_remove_option_value_body** | [**\AnketologClient\Model\SurveyEditorRemoveOptionValueBody**](../Model/\AnketologClient\Model\SurveyEditorRemoveOptionValueBody.md)|  |

### Return type

[**\AnketologClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorRemovePage**
> \AnketologClient\Model\InlineResponse200 surveyEditorRemovePage($survey_editor_remove_page_body)



Удаление

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_remove_page_body = new \AnketologClient\Model\SurveyEditorRemovePageBody(); // \AnketologClient\Model\SurveyEditorRemovePageBody | 

try {
    $result = $api_instance->surveyEditorRemovePage($survey_editor_remove_page_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorRemovePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_remove_page_body** | [**\AnketologClient\Model\SurveyEditorRemovePageBody**](../Model/\AnketologClient\Model\SurveyEditorRemovePageBody.md)|  |

### Return type

[**\AnketologClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorRemoveQuestion**
> \AnketologClient\Model\InlineResponse200 surveyEditorRemoveQuestion($survey_editor_remove_question_body)



Удаление

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_remove_question_body = new \AnketologClient\Model\SurveyEditorRemoveQuestionBody(); // \AnketologClient\Model\SurveyEditorRemoveQuestionBody | 

try {
    $result = $api_instance->surveyEditorRemoveQuestion($survey_editor_remove_question_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorRemoveQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_remove_question_body** | [**\AnketologClient\Model\SurveyEditorRemoveQuestionBody**](../Model/\AnketologClient\Model\SurveyEditorRemoveQuestionBody.md)|  |

### Return type

[**\AnketologClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorRemoveRange**
> \AnketologClient\Model\InlineResponse200 surveyEditorRemoveRange($survey_editor_remove_range_body)



Удаление

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_remove_range_body = new \AnketologClient\Model\SurveyEditorRemoveRangeBody(); // \AnketologClient\Model\SurveyEditorRemoveRangeBody | 

try {
    $result = $api_instance->surveyEditorRemoveRange($survey_editor_remove_range_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorRemoveRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_remove_range_body** | [**\AnketologClient\Model\SurveyEditorRemoveRangeBody**](../Model/\AnketologClient\Model\SurveyEditorRemoveRangeBody.md)|  |

### Return type

[**\AnketologClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorRemoveRow**
> \AnketologClient\Model\InlineResponse200 surveyEditorRemoveRow($survey_editor_remove_row_body)



Удаление

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_remove_row_body = new \AnketologClient\Model\SurveyEditorRemoveRowBody(); // \AnketologClient\Model\SurveyEditorRemoveRowBody | 

try {
    $result = $api_instance->surveyEditorRemoveRow($survey_editor_remove_row_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorRemoveRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_remove_row_body** | [**\AnketologClient\Model\SurveyEditorRemoveRowBody**](../Model/\AnketologClient\Model\SurveyEditorRemoveRowBody.md)|  |

### Return type

[**\AnketologClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorRemoveVisiblerule**
> \AnketologClient\Model\InlineResponse200 surveyEditorRemoveVisiblerule($survey_editor_remove_visiblerule_body)



Удаление

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_remove_visiblerule_body = new \AnketologClient\Model\SurveyEditorRemoveVisibleruleBody(); // \AnketologClient\Model\SurveyEditorRemoveVisibleruleBody | 

try {
    $result = $api_instance->surveyEditorRemoveVisiblerule($survey_editor_remove_visiblerule_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorRemoveVisiblerule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_remove_visiblerule_body** | [**\AnketologClient\Model\SurveyEditorRemoveVisibleruleBody**](../Model/\AnketologClient\Model\SurveyEditorRemoveVisibleruleBody.md)|  |

### Return type

[**\AnketologClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorUpdateBranchrule**
> \AnketologClient\Model\SurveyBranchrule surveyEditorUpdateBranchrule($survey_editor_update_branchrule_body)



Редактирование правила ветвления  Для вопросов:  * `free` * `freelist` * `select` * `multiselect` * `dropdown` * `matrix` * `matrix3d` * `name` * `email` * `date` * `scale` * `order` * `ratingscale`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_update_branchrule_body = new \AnketologClient\Model\SurveyEditorUpdateBranchruleBody(); // \AnketologClient\Model\SurveyEditorUpdateBranchruleBody | 

try {
    $result = $api_instance->surveyEditorUpdateBranchrule($survey_editor_update_branchrule_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorUpdateBranchrule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_update_branchrule_body** | [**\AnketologClient\Model\SurveyEditorUpdateBranchruleBody**](../Model/\AnketologClient\Model\SurveyEditorUpdateBranchruleBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyBranchrule**](../Model/SurveyBranchrule.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorUpdateOption**
> \AnketologClient\Model\SurveyOption surveyEditorUpdateOption($survey_editor_update_option_body)



Редактирование варианта/колонки у вопроса  Для вопросов:  * `freelist` * `select` * `multiselect` * `dropdown` * `matrix` * `matrix3d` * `order` * `ratingscale`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_update_option_body = new \AnketologClient\Model\SurveyEditorUpdateOptionBody(); // \AnketologClient\Model\SurveyEditorUpdateOptionBody | 

try {
    $result = $api_instance->surveyEditorUpdateOption($survey_editor_update_option_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorUpdateOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_update_option_body** | [**\AnketologClient\Model\SurveyEditorUpdateOptionBody**](../Model/\AnketologClient\Model\SurveyEditorUpdateOptionBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyOption**](../Model/SurveyOption.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorUpdateOptionValue**
> \AnketologClient\Model\SurveyOptionValue surveyEditorUpdateOptionValue($survey_editor_update_option_value_body)



Редактирование варианта колонке  Для вопросов:  * `matrix3d`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_update_option_value_body = new \AnketologClient\Model\SurveyEditorUpdateOptionValueBody(); // \AnketologClient\Model\SurveyEditorUpdateOptionValueBody | 

try {
    $result = $api_instance->surveyEditorUpdateOptionValue($survey_editor_update_option_value_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorUpdateOptionValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_update_option_value_body** | [**\AnketologClient\Model\SurveyEditorUpdateOptionValueBody**](../Model/\AnketologClient\Model\SurveyEditorUpdateOptionValueBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyOptionValue**](../Model/SurveyOptionValue.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorUpdateQuestion**
> \AnketologClient\Model\SurveyQuestion surveyEditorUpdateQuestion($survey_editor_update_question_body)



Редактирование вопроса

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_update_question_body = new \AnketologClient\Model\SurveyEditorUpdateQuestionBody(); // \AnketologClient\Model\SurveyEditorUpdateQuestionBody | 

try {
    $result = $api_instance->surveyEditorUpdateQuestion($survey_editor_update_question_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorUpdateQuestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_update_question_body** | [**\AnketologClient\Model\SurveyEditorUpdateQuestionBody**](../Model/\AnketologClient\Model\SurveyEditorUpdateQuestionBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyQuestion**](../Model/SurveyQuestion.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorUpdateRange**
> \AnketologClient\Model\SurveyRange surveyEditorUpdateRange($survey_editor_update_range_body)



Редактирование диапазона у вопроса  Для вопросов:  * `scale`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_update_range_body = new \AnketologClient\Model\SurveyEditorUpdateRangeBody(); // \AnketologClient\Model\SurveyEditorUpdateRangeBody | 

try {
    $result = $api_instance->surveyEditorUpdateRange($survey_editor_update_range_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorUpdateRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_update_range_body** | [**\AnketologClient\Model\SurveyEditorUpdateRangeBody**](../Model/\AnketologClient\Model\SurveyEditorUpdateRangeBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyRange**](../Model/SurveyRange.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorUpdateRow**
> \AnketologClient\Model\SurveyRow surveyEditorUpdateRow($survey_editor_update_row_body)



Редактирование строки у вопроса  Для вопросов:  * `matrix` * `matrix3d`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_update_row_body = new \AnketologClient\Model\SurveyEditorUpdateRowBody(); // \AnketologClient\Model\SurveyEditorUpdateRowBody | 

try {
    $result = $api_instance->surveyEditorUpdateRow($survey_editor_update_row_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorUpdateRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_update_row_body** | [**\AnketologClient\Model\SurveyEditorUpdateRowBody**](../Model/\AnketologClient\Model\SurveyEditorUpdateRowBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyRow**](../Model/SurveyRow.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **surveyEditorUpdateVisiblerule**
> \AnketologClient\Model\SurveyVisiblerule surveyEditorUpdateVisiblerule($survey_editor_update_visiblerule_body)



Редактирование

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\SurveyEditorApi();
$survey_editor_update_visiblerule_body = new \AnketologClient\Model\SurveyEditorUpdateVisibleruleBody(); // \AnketologClient\Model\SurveyEditorUpdateVisibleruleBody | 

try {
    $result = $api_instance->surveyEditorUpdateVisiblerule($survey_editor_update_visiblerule_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SurveyEditorApi->surveyEditorUpdateVisiblerule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **survey_editor_update_visiblerule_body** | [**\AnketologClient\Model\SurveyEditorUpdateVisibleruleBody**](../Model/\AnketologClient\Model\SurveyEditorUpdateVisibleruleBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyVisiblerule**](../Model/SurveyVisiblerule.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

