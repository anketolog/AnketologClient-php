# SurveyQuestionRatingscale

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID вопроса | 
**title** | **string** | Название вопроса | 
**type** | **string** | Тип вопроса | 
**type_name** | **string** | Название типа | 
**false** | **int** | Порядковый номер | [optional] 
**is_required** | **bool** | Вопрос обязательный | 
**has_comment** | **bool** | Отображать комментарий | 
**comment** | **string** | Текст комментария | 
**has_unable_answer** | **bool** | Вариант \&quot;затрудняюсь ответить\&quot; | 
**branchrules** | [**\Anketolog\Model\SurveyBranchrule[]**](SurveyBranchrule.md) |  | 
**visiblerules** | [**\Anketolog\Model\SurveyVisiblerule[]**](SurveyVisiblerule.md) |  | 
**max_value** | **int** | Максимальное значение | 
**max_value_title** | **string** | Единицы измерения | [default to 'баллов']
**is_show_residue** | **bool** | Отображение остатка | 
**options** | [**\Anketolog\Model\SurveyOption[]**](SurveyOption.md) |  | 
**options_sort** | [**\Anketolog\Model\SurveySort**](SurveySort.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


