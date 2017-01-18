# AnketologClient\CampaignTransferApi

All URIs are relative to *https://apiv2.anketolog.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignTransferInfo**](CampaignTransferApi.md#campaignTransferInfo) | **POST** /campaign/transfer/info | 
[**campaignTransferList**](CampaignTransferApi.md#campaignTransferList) | **POST** /campaign/transfer/list | 


# **campaignTransferInfo**
> \AnketologClient\Model\CampaignTransfer campaignTransferInfo($campaign_transfer_info_body)



Внутренний перевод кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\CampaignTransferApi();
$campaign_transfer_info_body = new \AnketologClient\Model\CampaignTransferInfoBody(); // \AnketologClient\Model\CampaignTransferInfoBody | 

try {
    $result = $api_instance->campaignTransferInfo($campaign_transfer_info_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignTransferApi->campaignTransferInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_transfer_info_body** | [**\AnketologClient\Model\CampaignTransferInfoBody**](../Model/\AnketologClient\Model\CampaignTransferInfoBody.md)|  |

### Return type

[**\AnketologClient\Model\CampaignTransfer**](../Model/CampaignTransfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **campaignTransferList**
> \AnketologClient\Model\CampaignTransfer[] campaignTransferList($campaign_transfer_list_body)



Внутренние переводы кампании

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
AnketologClient\Configuration::getDefaultConfiguration()->setApiKey('x-anketolog-apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// AnketologClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-anketolog-apikey', 'Bearer');

$api_instance = new AnketologClient\Api\CampaignTransferApi();
$campaign_transfer_list_body = new \AnketologClient\Model\CampaignTransferListBody(); // \AnketologClient\Model\CampaignTransferListBody | 

try {
    $result = $api_instance->campaignTransferList($campaign_transfer_list_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignTransferApi->campaignTransferList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_transfer_list_body** | [**\AnketologClient\Model\CampaignTransferListBody**](../Model/\AnketologClient\Model\CampaignTransferListBody.md)|  |

### Return type

[**\AnketologClient\Model\CampaignTransfer[]**](../Model/CampaignTransfer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

