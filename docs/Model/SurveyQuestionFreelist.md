# SurveyQuestionFreelist

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
**is_multiline** | **bool** | Многострочное поле ввода | 
**is_limited** | **bool** | Ограничение значения ответа | 
**limit** | [**\AnketologClient\Model\SurveyAnswerLimit**](SurveyAnswerLimit.md) |  | 
**datatype** | **string** | Тип вводимых данных  * &#x60;default&#x60; - текст * &#x60;integer&#x60; - целое число * &#x60;float&#x60; - дробное число | 
**has_other_answer** | **bool** | Вариант \&quot;другое\&quot; | 
**options** | [**\AnketologClient\Model\SurveyOption[]**](SurveyOption.md) |  | 
**options_sort** | **string** | Сортировка  * &#x60;default&#x60; - по умолчанию * &#x60;alphabet&#x60; - в алфавитном порядке * &#x60;random&#x60; - в случайном порядке | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


