# CampaignCampaign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID | 
**name** | **string** | Название | 
**create_date** | **int** | Дата создания | 
**start_date** | **int** | Дата запуска | [optional] 
**finish_date** | **int** | Дата завершения | [optional] 
**is_complete** | **bool** | Кампания завершена | 
**status** | **string** | Статус кампании | [default to 'waiting']
**moderation_status** | **string** | Статус модерации | [default to 'pending']
**moderation_reason** | **string** | Комментарий модератора | [optional] 
**unique_respondents** | **bool** | Исключить повторные ответы | 
**answer_price** | **int** | Стоимость одного ответа | 
**answer_count** | **int** | Количество ответов | 
**targeting** | [**\AnketologClient\Model\CampaignTargeting**](CampaignTargeting.md) |  | 
**survey** | [**\AnketologClient\Model\SurveySurvey**](SurveySurvey.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


