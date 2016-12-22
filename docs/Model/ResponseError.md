# ResponseError

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **int** | Код ответа  * &#x60;400&#x60; - validation error * &#x60;401&#x60; - apikey error * &#x60;403&#x60; - forbidden error * &#x60;404&#x60; - not found error * &#x60;422&#x60; - option missing error * &#x60;500&#x60; - internal error | [optional] 
**name** | **string** | Название ошибки  * &#x60;validation_error&#x60; - validation error * &#x60;apikey_error&#x60; - apikey error * &#x60;forbidden_error&#x60; - forbidden error * &#x60;not_found&#x60; - not found error * &#x60;option_missing&#x60; - option missing error * &#x60;internal_error&#x60; - internal error | [optional] 
**message** | **string** | Сообщение об ошибке | [optional] 
**extra** | **string[]** | Дополнительные данные | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


