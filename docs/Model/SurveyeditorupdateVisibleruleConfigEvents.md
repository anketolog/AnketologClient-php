# SurveyeditorupdateVisibleruleConfigEvents

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**question_id** | **int** | ID вопроса | 
**type** | **string** | * &#x60;has-answer&#x60; - респондент дал ответ * &#x60;missing-answer&#x60; - респондент не дал ответ * &#x60;select-option&#x60; - респондент выбрал вариант * &#x60;not-select-option&#x60; - респондент не выбрал вариант * &#x60;select-any-option&#x60; - респондент выбрал любой вариант * &#x60;unable-answer&#x60; - респондент затруднился ответить * &#x60;not-unable-answer&#x60; - респондент не затруднился ответить * &#x60;set-order&#x60; - респондент поставил вариант на место * &#x60;set-value&#x60; -  респондент задал варианту значение | 
**option_id** | **int** | ID варианта/столбца  Для question.type:  * &#x60;select&#x60; * &#x60;multiselect&#x60; * &#x60;dropdown&#x60; * &#x60;matrix&#x60; * &#x60;matrix3d&#x60; * &#x60;order&#x60; * &#x60;ratingscale&#x60; * &#x60;scale&#x60; | [optional] 
**row_id** | **int** | ID строки  Для question.type:  * &#x60;matrix&#x60; * &#x60;matrix3d&#x60; | [optional] 
**range_id** | **int** | ID диапазона  Для question.type:  * &#x60;scale&#x60; | [optional] 
**option_value_id** | **int** | ID варианта колонки  Для question.type:  * &#x60;matrix3d&#x60; | [optional] 
**value** | **int** | Значение  Для question.type:  * &#x60;ratingscale&#x60; | [optional] 
**order** | **int** | Место  Для question.type:  * &#x60;order&#x60; | [optional] 
**operator** | **string** | Логический оператор  * &#x60;and&#x60; - логическое \&quot;и\&quot; * &#x60;or&#x60; - логическое \&quot;или\&quot; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


