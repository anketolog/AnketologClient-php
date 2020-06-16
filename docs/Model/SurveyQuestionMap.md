# SurveyQuestionMap

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
**is_limited** | **bool** | Ограничение кол-ва точек | 
**limit** | [**\AnketologClient\Model\SurveyAnswerLimit**](SurveyAnswerLimit.md) |  | 
**kind** | **string** | Тип выделяемых объектов  * &#x60;any&#x60; - любая точка * &#x60;house&#x60; - страна, город, улица, дом * &#x60;street&#x60; - страна, город, улица * &#x60;metro&#x60; - страна, город, метро * &#x60;district&#x60; - страна, город, район города * &#x60;locality&#x60; - страна, город * &#x60;area&#x60; - страна, область, район области * &#x60;province&#x60; - страна, область * &#x60;country&#x60; - страна * &#x60;hydro&#x60; - страна, озеро / водохранилище / море и т.п. * &#x60;railway&#x60; - страна, город / ж.д. станция * &#x60;vegetation&#x60; - страна, город, лес / парк / сад и т.п. * &#x60;airport&#x60; - страна, область, аэропорт | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


