# SurveyQuestionRatingscale

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
**max_value** | **int** | Максимальное значение | 
**max_value_title** | **string** | Единицы измерения | [default to 'баллов']
**is_show_residue** | **bool** | Отображение остатка | 
**is_unlimit** | **bool** | Распределать отстаток на каждый вариант | 
**options** | [**\AnketologClient\Model\SurveyOption[]**](SurveyOption.md) |  | 
**options_sort** | **string** | Сортировка  * &#x60;default&#x60; - по умолчанию * &#x60;alphabet&#x60; - в алфавитном порядке * &#x60;random&#x60; - в случайном порядке | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


