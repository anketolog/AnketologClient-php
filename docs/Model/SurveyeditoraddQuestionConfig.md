# SurveyeditoraddQuestionConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Текст вопроса | [optional] 
**html_code** | **string** | Код HTML-вставки  Для вопросов:  * &#x60;html&#x60; | [optional] 
**comment** | **string** | Комментарий к вопросу (HTML)  Для вопросов:  * &#x60;free&#x60; * &#x60;freelist&#x60; * &#x60;select&#x60; * &#x60;multiselect&#x60; * &#x60;dropdown&#x60; * &#x60;matrix&#x60; * &#x60;matrix3d&#x60; * &#x60;name&#x60; * &#x60;email&#x60; * &#x60;date&#x60; * &#x60;scale&#x60; * &#x60;order&#x60; * &#x60;ratingscale&#x60; | [optional] 
**has_comment** | **bool** | Отображать комментарий к вопросу  Для вопросов:  * &#x60;free&#x60; * &#x60;freelist&#x60; * &#x60;select&#x60; * &#x60;multiselect&#x60; * &#x60;dropdown&#x60; * &#x60;matrix&#x60; * &#x60;matrix3d&#x60; * &#x60;name&#x60; * &#x60;email&#x60; * &#x60;date&#x60; * &#x60;scale&#x60; * &#x60;order&#x60; * &#x60;ratingscale&#x60; | [optional] 
**is_required** | **bool** | Вопрос обазательный  Для вопросов:  * &#x60;free&#x60; * &#x60;freelist&#x60; * &#x60;select&#x60; * &#x60;multiselect&#x60; * &#x60;dropdown&#x60; * &#x60;matrix&#x60; * &#x60;matrix3d&#x60; * &#x60;name&#x60; * &#x60;email&#x60; * &#x60;date&#x60; * &#x60;scale&#x60; * &#x60;order&#x60; * &#x60;ratingscale&#x60; | [optional] 
**is_enable** | **bool** | Вопрос виден респонденту  Для вопросов:  * &#x60;html&#x60; * &#x60;free&#x60; * &#x60;freelist&#x60; * &#x60;select&#x60; * &#x60;multiselect&#x60; * &#x60;dropdown&#x60; * &#x60;matrix&#x60; * &#x60;matrix3d&#x60; * &#x60;name&#x60; * &#x60;email&#x60; * &#x60;date&#x60; * &#x60;scale&#x60; * &#x60;order&#x60; * &#x60;ratingscale&#x60; | [optional] 
**has_unable_answer** | **bool** | Вариант \&quot;затрудняюсь ответить\&quot;  Для вопросов:  * &#x60;free&#x60; * &#x60;freelist&#x60; * &#x60;select&#x60; * &#x60;multiselect&#x60; * &#x60;dropdown&#x60; * &#x60;matrix&#x60; * &#x60;matrix3d&#x60; * &#x60;name&#x60; * &#x60;email&#x60; * &#x60;date&#x60; * &#x60;scale&#x60; * &#x60;order&#x60; * &#x60;ratingscale&#x60; | [optional] 
**is_multiline** | **bool** | Многострочное поле ввода  Для вопросов:  * &#x60;free&#x60; * &#x60;freelist&#x60; | [optional] 
**datatype** | **string** | Тип данных в поле ввода  Для вопросов:  * &#x60;free&#x60; * &#x60;freelist&#x60; | [optional] 
**placeholder** | **string** | Текст-подсказка  Для вопросов:  * &#x60;free&#x60; * &#x60;dropdown&#x60; * &#x60;matrix3d&#x60; * &#x60;email&#x60; | [optional] 
**has_other_answer** | **bool** | Вариант \&quot;другое\&quot;  Для вопросов:  * &#x60;freelist&#x60; * &#x60;select&#x60; * &#x60;multiselect&#x60; * &#x60;dropdown&#x60; | [optional] 
**has_nothing_answer** | **bool** | Вариант \&quot;ничего из вышеперечисленного\&quot;  Для вопросов:  * &#x60;select&#x60; * &#x60;multiselect&#x60; * &#x60;dropdown&#x60; | [optional] 
**options_sort** | **string** | Сортировка вариантов  * &#x60;default&#x60; - по умолчанию * &#x60;alphabet&#x60; - в алфавитном порядке * &#x60;random&#x60; - в случайном порядке  Для вопросов:  * &#x60;freelist&#x60; * &#x60;select&#x60; * &#x60;multiselect&#x60; * &#x60;dropdown&#x60; * &#x60;matrix&#x60; * &#x60;matrix3d&#x60; * &#x60;order&#x60; * &#x60;ratingscale&#x60; | [optional] 
**rows_sort** | **string** | Сортировка строк  * &#x60;default&#x60; - по умолчанию * &#x60;alphabet&#x60; - в алфавитном порядке * &#x60;random&#x60; - в случайном порядке  Для вопросов:  * &#x60;matrix&#x60; * &#x60;matrix3d&#x60; | [optional] 
**max_value** | **int** | Максимальное значение  Для вопросов:  * &#x60;ratingscale&#x60; | [optional] 
**max_value_title** | **string** | Eдиница измерения максимального значения (пример \&quot;баллов\&quot;)  Для вопросов:  * &#x60;ratingscale&#x60; | [optional] 
**is_show_residue** | **bool** | Показывать остаток нераспределенных баллов  Для вопросов:  * &#x60;ratingscale&#x60; | [optional] 
**is_limited** | **bool** | Включить ограничение количества выбранных вариантов  Для вопросов:  * &#x60;multiselect&#x60; | [optional] 
**limit** | [**\AnketologClient\Model\SurveyeditoraddQuestionConfigLimit**](SurveyeditoraddQuestionConfigLimit.md) |  | [optional] 
**options** | [**\AnketologClient\Model\SurveyeditoraddQuestionConfigOptions[]**](SurveyeditoraddQuestionConfigOptions.md) |  | [optional] 
**rows** | [**\AnketologClient\Model\SurveyRow[]**](SurveyRow.md) |  | [optional] 
**ranges** | [**\AnketologClient\Model\SurveyRange[]**](SurveyRange.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


