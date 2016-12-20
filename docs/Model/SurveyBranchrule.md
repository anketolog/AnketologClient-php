# SurveyBranchrule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID | 
**rule_type** | **string** | Действие при срабатывании правила  * &#x60;finishsurvey&#x60; - завершить опрос * &#x60;disqualification&#x60; - дисквалифицировать респондента * &#x60;jumptopage&#x60; - перейти к станице **page_id** | 
**operator** | **string** | Логический оператор  * &#x60;and&#x60; - логическое \&quot;и\&quot; * &#x60;or&#x60; - логическое \&quot;или\&quot; | 
**events** | [**\AnketologClient\Model\SurveyBranchruleEventType[]**](SurveyBranchruleEventType.md) |  | 
**page_id** | **int** | Страница для перехода [rule_type&#x3D;jumptopage] | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


