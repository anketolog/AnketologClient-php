# SurveyQuestionDate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Название вопроса | 
**no** | **int** | Порядковый номер | 
**is_required** | **bool** | Вопрос обязательный | 
**has_comment** | **bool** | Отображать комментарий | 
**comment** | **string** | Текст комментария | 
**has_unable_answer** | **bool** | Вариант \&quot;затрудняюсь ответить\&quot; | 
**branchrules** | [**\AnketologClient\Model\SurveyBranchrule[]**](SurveyBranchrule.md) |  | 
**visiblerules** | [**\AnketologClient\Model\SurveyVisiblerule[]**](SurveyVisiblerule.md) |  | 
**date_period** | **string** | Период даты  * &#x60;default&#x60; - Любой * &#x60;past_date&#x60; - Прошедшая дата * &#x60;past_date_with_today&#x60; - Прошедшая дата включая текущий день * &#x60;future_date&#x60; - Будущая дата * &#x60;future_date_with_today&#x60; - Будущая дата включая текущий день | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


