# SurveyFilterCondition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**question_id** | **int** | ID вопроса | 
**type** | **string** | Тип условия  * &#x60;has-answer&#x60; - респондент ответил на вопрос * &#x60;unable-answer&#x60; - респондент затруднился ответить | 
**option_id** | **int** | ID варианта ответа/колонки (question.type IN [matrix, matrix3d, select, multiseelct, dropdown, order, ratingscale]) | [optional] 
**row_id** | **int** | ID строки (question.type &#x3D; matrix) | [optional] 
**range_id** | **int** | ID диапазона (question.type &#x3D; scale) | [optional] 
**option_value_id** | **int** | ID варианта ответа (question.type &#x3D; matrix3d) | [optional] 
**operator** | **string** | Оператор сравнения (question.type IN [order, ratingscale])  * &#x60;gt&#x60; - Больше * &#x60;gte&#x60; - Больше или равно * &#x60;eq&#x60; - Равно * &#x60;neq&#x60; - Не равно * &#x60;lt&#x60; - Меньше * &#x60;lte&#x60; - Меньше или равно | [optional] 
**text** | **string** | Текст ответа (question.type IN [free, email, phone, name, freelist]) | [optional] 
**value** | **int** | Значение ответа (question.type &#x3D; ratingscale) | [optional] 
**pos** | **int** | Позиция варианта (question.type &#x3D; order) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


