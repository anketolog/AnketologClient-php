# AnketologClient\CampaignReportApi

All URIs are relative to *https://apiv2.anketolog.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignReportAggregate**](CampaignReportApi.md#campaignReportAggregate) | **POST** /campaign/report/aggregate | 
[**campaignReportDetail**](CampaignReportApi.md#campaignReportDetail) | **POST** /campaign/report/detail | 


# **campaignReportAggregate**
> \AnketologClient\Model\SurveyReportAggregate campaignReportAggregate($campaign_report_aggregate_body)



Сгруппированная статистика по опросу

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\CampaignReportApi();
$campaign_report_aggregate_body = new \AnketologClient\Model\CampaignReportAggregateBody(); // \AnketologClient\Model\CampaignReportAggregateBody | 

try {
    $result = $api_instance->campaignReportAggregate($campaign_report_aggregate_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignReportApi->campaignReportAggregate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_report_aggregate_body** | [**\AnketologClient\Model\CampaignReportAggregateBody**](../Model/\AnketologClient\Model\CampaignReportAggregateBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyReportAggregate**](../Model/SurveyReportAggregate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignReportDetail**
> \AnketologClient\Model\SurveyReportDetail campaignReportDetail($campaign_report_detail_body)



Детальная статистика по опросу

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\CampaignReportApi();
$campaign_report_detail_body = new \AnketologClient\Model\CampaignReportDetailBody(); // \AnketologClient\Model\CampaignReportDetailBody | 

try {
    $result = $api_instance->campaignReportDetail($campaign_report_detail_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignReportApi->campaignReportDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_report_detail_body** | [**\AnketologClient\Model\CampaignReportDetailBody**](../Model/\AnketologClient\Model\CampaignReportDetailBody.md)|  |

### Return type

[**\AnketologClient\Model\SurveyReportDetail**](../Model/SurveyReportDetail.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

