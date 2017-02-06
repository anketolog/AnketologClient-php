# SurveyReportCreateBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**survey_id** | **int** | ID опроса | 
**format** | **string** | Формат отчета  * &#x60;excel&#x60; - Детальная статистика в формате EXCEL * &#x60;spss&#x60; - Детальная статистика в формате SPSS * &#x60;fpdf&#x60; - Детальная статистика в формате PDF * &#x60;fword&#x60; - Детальная статистика в формате WORD  * &#x60;pdf&#x60; - Сгруппированная статистика в формате PDF * &#x60;word&#x60; - Сгруппированная статистика в формате WORD | 
**date_from** | [**\DateTime**](Date.md) | Дата \&quot;с\&quot; | [optional] 
**date_to** | [**\DateTime**](Date.md) | Дата \&quot;до\&quot; | [optional] 
**filters** | **int[]** | Фильтры | [optional] 
**sources** | **string[]** | Источники | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


