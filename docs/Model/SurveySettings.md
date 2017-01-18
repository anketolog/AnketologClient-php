# SurveySettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Название опроса | 
**public_result** | **bool** | Публичные результаты опроса | 
**multiple_answers** | **bool** | Респондент может несколько раз заполнять опрос с одного IP | 
**logo_id** | **int** |  | [optional] 
**language** | **string** | Язык опроса | 
**theme** | **string** | Цветовая схема опроса | 
**show_startpage** | **bool** | Отображать страницу приветствия | 
**show_finishpage** | **bool** | Отображать страницу завершения | 
**startpage_text** | **string** | Текст на странице приветствия | [optional] 
**finishpage_text** | **string** | Текст на странице завершения | [optional] 
**disqualification_text** | **string** | Текст на странице дисквалификации | [optional] 
**show_captcha** | **bool** | Отображать капчу перед завершения опроса | 
**show_social** | **bool** | Кнопки \&quot;поделиться\&quot; на странице завершения | 
**show_question_count** | **bool** | Отображать количество вопросов | 
**show_survey_name** | **bool** | Отображать название опроса | 
**show_previous_btn** | **bool** | Копка \&quot;назад\&quot; | 
**finish_type** | **string** | Тип завершения анкеты  * &#x60;our-survey&#x60; - опросы от anketolog.ru (по умолчанию) * &#x60;custom-survey&#x60; - собственные опросы * &#x60;redirect&#x60; - перенаправление на другой URL | 
**finish_redirect_url** | **string** | URL для редиректа [finish_type&#x3D;redirect] | [optional] 
**finish_redirect_timeout** | **int** | Таймаут редиректа [finish_type&#x3D;redirect] | [optional] 
**finish_custom_surveys** | **string[]** | Анкеты на странице завершения [finish_type&#x3D;custom-survey] | [optional] 
**disable_ad** | **bool** | Отключить рекламу в опросе | 
**custom_css** | **string** | Пользовательская CSS | [optional] 
**credentials_enable** | **bool** | Заполнения опроса по логину и паролю | 
**credentials** | [**\AnketologClient\Model\SurveyCredential[]**](SurveyCredential.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


