# SurveyAppearance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**language** | **string** | Язык опроса | 
**theme** | **string** | Цветовая схема опроса | 
**show_startpage** | **bool** | Отображать страницу приветствия | 
**show_finishpage** | **bool** | Отображать страницу завершения | 
**startpage_text** | **string** | Текст на странцие приветствия | 
**finishpage_text** | **string** | Текст на странице завершения | 
**disqualification_text** | **string** | Текст на странице дисквалификации | 
**show_captcha** | **bool** | Отображать капчу перед завершения опроса | 
**show_social** | **bool** | Кнопки \&quot;поделиться\&quot; на странице завершения | 
**show_question_count** | **bool** | Отображать количество вопросов | 
**show_survey_name** | **bool** | Отображать название опроса | 
**show_previous_btn** | **bool** | Копка \&quot;назад\&quot; | 
**finish_type** | **string** | Тип завершени анкеты | 
**finish_redirect_url** | **string** | URL для редиректа [finish_type&#x3D;redirect] | 
**finish_redirect_timeout** | **int** | Таймаут редиректа [finish_type&#x3D;redirect] | 
**finish_custom_surveys** | **string[]** | Анкеты на странице завершения [finish_type&#x3D;custom-survey] | 
**disable_ad** | **bool** | Отключить рекламу в опросе | 
**custom_css** | **string** | Пользователькая css | 
**credentials_enable** | **bool** | Заполнения опроса по логину и паролю | 
**credentials** | [**\Anketolog\Model\SurveyCredential[]**](SurveyCredential.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


