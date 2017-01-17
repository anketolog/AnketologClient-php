<?php
/**
 * SurveyAppearance
 *
 * PHP version 5
 *
 * @category Class
 * @package  AnketologClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Документация к Анкетолог API
 *
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [swagger-codegen](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://anketolog.loc/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://apiv2.anketolog.loc/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://anketolog.loc/user/account/apikey)   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://apiv2.anketolog.loc/survey/manage/info' ```
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AnketologClient\Model;

use \ArrayAccess;

/**
 * SurveyAppearance Class Doc Comment
 *
 * @category    Class */
 // @description Настройки опроса
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveyAppearance implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SurveyAppearance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'language' => 'string',
        'theme' => 'string',
        'show_startpage' => 'bool',
        'show_finishpage' => 'bool',
        'startpage_text' => 'string',
        'finishpage_text' => 'string',
        'disqualification_text' => 'string',
        'show_captcha' => 'bool',
        'show_social' => 'bool',
        'show_question_count' => 'bool',
        'show_survey_name' => 'bool',
        'show_previous_btn' => 'bool',
        'finish_type' => 'string',
        'finish_redirect_url' => 'string',
        'finish_redirect_timeout' => 'int',
        'finish_custom_surveys' => 'string[]',
        'disable_ad' => 'bool',
        'custom_css' => 'string',
        'credentials_enable' => 'bool',
        'credentials' => '\AnketologClient\Model\SurveyCredential[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'language' => 'language',
        'theme' => 'theme',
        'show_startpage' => 'show_startpage',
        'show_finishpage' => 'show_finishpage',
        'startpage_text' => 'startpage_text',
        'finishpage_text' => 'finishpage_text',
        'disqualification_text' => 'disqualification_text',
        'show_captcha' => 'show_captcha',
        'show_social' => 'show_social',
        'show_question_count' => 'show_question_count',
        'show_survey_name' => 'show_survey_name',
        'show_previous_btn' => 'show_previous_btn',
        'finish_type' => 'finish_type',
        'finish_redirect_url' => 'finish_redirect_url',
        'finish_redirect_timeout' => 'finish_redirect_timeout',
        'finish_custom_surveys' => 'finish_custom_surveys',
        'disable_ad' => 'disable_ad',
        'custom_css' => 'custom_css',
        'credentials_enable' => 'credentials_enable',
        'credentials' => 'credentials'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'language' => 'setLanguage',
        'theme' => 'setTheme',
        'show_startpage' => 'setShowStartpage',
        'show_finishpage' => 'setShowFinishpage',
        'startpage_text' => 'setStartpageText',
        'finishpage_text' => 'setFinishpageText',
        'disqualification_text' => 'setDisqualificationText',
        'show_captcha' => 'setShowCaptcha',
        'show_social' => 'setShowSocial',
        'show_question_count' => 'setShowQuestionCount',
        'show_survey_name' => 'setShowSurveyName',
        'show_previous_btn' => 'setShowPreviousBtn',
        'finish_type' => 'setFinishType',
        'finish_redirect_url' => 'setFinishRedirectUrl',
        'finish_redirect_timeout' => 'setFinishRedirectTimeout',
        'finish_custom_surveys' => 'setFinishCustomSurveys',
        'disable_ad' => 'setDisableAd',
        'custom_css' => 'setCustomCss',
        'credentials_enable' => 'setCredentialsEnable',
        'credentials' => 'setCredentials'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'language' => 'getLanguage',
        'theme' => 'getTheme',
        'show_startpage' => 'getShowStartpage',
        'show_finishpage' => 'getShowFinishpage',
        'startpage_text' => 'getStartpageText',
        'finishpage_text' => 'getFinishpageText',
        'disqualification_text' => 'getDisqualificationText',
        'show_captcha' => 'getShowCaptcha',
        'show_social' => 'getShowSocial',
        'show_question_count' => 'getShowQuestionCount',
        'show_survey_name' => 'getShowSurveyName',
        'show_previous_btn' => 'getShowPreviousBtn',
        'finish_type' => 'getFinishType',
        'finish_redirect_url' => 'getFinishRedirectUrl',
        'finish_redirect_timeout' => 'getFinishRedirectTimeout',
        'finish_custom_surveys' => 'getFinishCustomSurveys',
        'disable_ad' => 'getDisableAd',
        'custom_css' => 'getCustomCss',
        'credentials_enable' => 'getCredentialsEnable',
        'credentials' => 'getCredentials'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const LANGUAGE_RU = 'ru';
    const LANGUAGE_EN = 'en';
    const THEME_DEFAULT = 'default';
    const THEME_BLUE_GREEN = 'blue-green';
    const THEME_BROWN = 'brown';
    const THEME_CRIMSON = 'crimson';
    const THEME_GRAY = 'gray';
    const THEME_GREEN = 'green';
    const THEME_PURPLE = 'purple';
    const THEME_VINOUS = 'vinous';
    const FINISH_TYPE_OUR_SURVEY = 'our-survey';
    const FINISH_TYPE_CUSTOM_SURVEY = 'custom-survey';
    const FINISH_TYPE_REDIRECT = 'redirect';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_RU,
            self::LANGUAGE_EN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getThemeAllowableValues()
    {
        return [
            self::THEME_DEFAULT,
            self::THEME_BLUE_GREEN,
            self::THEME_BROWN,
            self::THEME_CRIMSON,
            self::THEME_GRAY,
            self::THEME_GREEN,
            self::THEME_PURPLE,
            self::THEME_VINOUS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFinishTypeAllowableValues()
    {
        return [
            self::FINISH_TYPE_OUR_SURVEY,
            self::FINISH_TYPE_CUSTOM_SURVEY,
            self::FINISH_TYPE_REDIRECT,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['theme'] = isset($data['theme']) ? $data['theme'] : null;
        $this->container['show_startpage'] = isset($data['show_startpage']) ? $data['show_startpage'] : null;
        $this->container['show_finishpage'] = isset($data['show_finishpage']) ? $data['show_finishpage'] : null;
        $this->container['startpage_text'] = isset($data['startpage_text']) ? $data['startpage_text'] : null;
        $this->container['finishpage_text'] = isset($data['finishpage_text']) ? $data['finishpage_text'] : null;
        $this->container['disqualification_text'] = isset($data['disqualification_text']) ? $data['disqualification_text'] : null;
        $this->container['show_captcha'] = isset($data['show_captcha']) ? $data['show_captcha'] : null;
        $this->container['show_social'] = isset($data['show_social']) ? $data['show_social'] : null;
        $this->container['show_question_count'] = isset($data['show_question_count']) ? $data['show_question_count'] : null;
        $this->container['show_survey_name'] = isset($data['show_survey_name']) ? $data['show_survey_name'] : null;
        $this->container['show_previous_btn'] = isset($data['show_previous_btn']) ? $data['show_previous_btn'] : null;
        $this->container['finish_type'] = isset($data['finish_type']) ? $data['finish_type'] : null;
        $this->container['finish_redirect_url'] = isset($data['finish_redirect_url']) ? $data['finish_redirect_url'] : null;
        $this->container['finish_redirect_timeout'] = isset($data['finish_redirect_timeout']) ? $data['finish_redirect_timeout'] : null;
        $this->container['finish_custom_surveys'] = isset($data['finish_custom_surveys']) ? $data['finish_custom_surveys'] : null;
        $this->container['disable_ad'] = isset($data['disable_ad']) ? $data['disable_ad'] : null;
        $this->container['custom_css'] = isset($data['custom_css']) ? $data['custom_css'] : null;
        $this->container['credentials_enable'] = isset($data['credentials_enable']) ? $data['credentials_enable'] : null;
        $this->container['credentials'] = isset($data['credentials']) ? $data['credentials'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['language'] === null) {
            $invalid_properties[] = "'language' can't be null";
        }
        $allowed_values = array("ru", "en");
        if (!in_array($this->container['language'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'language', must be one of #{allowed_values}.";
        }

        if ($this->container['theme'] === null) {
            $invalid_properties[] = "'theme' can't be null";
        }
        $allowed_values = array("default", "blue-green", "brown", "crimson", "gray", "green", "purple", "vinous");
        if (!in_array($this->container['theme'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'theme', must be one of #{allowed_values}.";
        }

        if ($this->container['show_startpage'] === null) {
            $invalid_properties[] = "'show_startpage' can't be null";
        }
        if ($this->container['show_finishpage'] === null) {
            $invalid_properties[] = "'show_finishpage' can't be null";
        }
        if ($this->container['show_captcha'] === null) {
            $invalid_properties[] = "'show_captcha' can't be null";
        }
        if ($this->container['show_social'] === null) {
            $invalid_properties[] = "'show_social' can't be null";
        }
        if ($this->container['show_question_count'] === null) {
            $invalid_properties[] = "'show_question_count' can't be null";
        }
        if ($this->container['show_survey_name'] === null) {
            $invalid_properties[] = "'show_survey_name' can't be null";
        }
        if ($this->container['show_previous_btn'] === null) {
            $invalid_properties[] = "'show_previous_btn' can't be null";
        }
        if ($this->container['finish_type'] === null) {
            $invalid_properties[] = "'finish_type' can't be null";
        }
        $allowed_values = array("our-survey", "custom-survey", "redirect");
        if (!in_array($this->container['finish_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'finish_type', must be one of #{allowed_values}.";
        }

        if ($this->container['disable_ad'] === null) {
            $invalid_properties[] = "'disable_ad' can't be null";
        }
        if ($this->container['credentials_enable'] === null) {
            $invalid_properties[] = "'credentials_enable' can't be null";
        }
        if ($this->container['credentials'] === null) {
            $invalid_properties[] = "'credentials' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['language'] === null) {
            return false;
        }
        $allowed_values = array("ru", "en");
        if (!in_array($this->container['language'], $allowed_values)) {
            return false;
        }
        if ($this->container['theme'] === null) {
            return false;
        }
        $allowed_values = array("default", "blue-green", "brown", "crimson", "gray", "green", "purple", "vinous");
        if (!in_array($this->container['theme'], $allowed_values)) {
            return false;
        }
        if ($this->container['show_startpage'] === null) {
            return false;
        }
        if ($this->container['show_finishpage'] === null) {
            return false;
        }
        if ($this->container['show_captcha'] === null) {
            return false;
        }
        if ($this->container['show_social'] === null) {
            return false;
        }
        if ($this->container['show_question_count'] === null) {
            return false;
        }
        if ($this->container['show_survey_name'] === null) {
            return false;
        }
        if ($this->container['show_previous_btn'] === null) {
            return false;
        }
        if ($this->container['finish_type'] === null) {
            return false;
        }
        $allowed_values = array("our-survey", "custom-survey", "redirect");
        if (!in_array($this->container['finish_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['disable_ad'] === null) {
            return false;
        }
        if ($this->container['credentials_enable'] === null) {
            return false;
        }
        if ($this->container['credentials'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language Язык опроса
     * @return $this
     */
    public function setLanguage($language)
    {
        $allowed_values = array('ru', 'en');
        if (!in_array($language, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'language', must be one of 'ru', 'en'");
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets theme
     * @return string
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     * @param string $theme Цветовая схема опроса
     * @return $this
     */
    public function setTheme($theme)
    {
        $allowed_values = array('default', 'blue-green', 'brown', 'crimson', 'gray', 'green', 'purple', 'vinous');
        if (!in_array($theme, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'theme', must be one of 'default', 'blue-green', 'brown', 'crimson', 'gray', 'green', 'purple', 'vinous'");
        }
        $this->container['theme'] = $theme;

        return $this;
    }

    /**
     * Gets show_startpage
     * @return bool
     */
    public function getShowStartpage()
    {
        return $this->container['show_startpage'];
    }

    /**
     * Sets show_startpage
     * @param bool $show_startpage Отображать страницу приветствия
     * @return $this
     */
    public function setShowStartpage($show_startpage)
    {
        $this->container['show_startpage'] = $show_startpage;

        return $this;
    }

    /**
     * Gets show_finishpage
     * @return bool
     */
    public function getShowFinishpage()
    {
        return $this->container['show_finishpage'];
    }

    /**
     * Sets show_finishpage
     * @param bool $show_finishpage Отображать страницу завершения
     * @return $this
     */
    public function setShowFinishpage($show_finishpage)
    {
        $this->container['show_finishpage'] = $show_finishpage;

        return $this;
    }

    /**
     * Gets startpage_text
     * @return string
     */
    public function getStartpageText()
    {
        return $this->container['startpage_text'];
    }

    /**
     * Sets startpage_text
     * @param string $startpage_text Текст на странице приветствия
     * @return $this
     */
    public function setStartpageText($startpage_text)
    {
        $this->container['startpage_text'] = $startpage_text;

        return $this;
    }

    /**
     * Gets finishpage_text
     * @return string
     */
    public function getFinishpageText()
    {
        return $this->container['finishpage_text'];
    }

    /**
     * Sets finishpage_text
     * @param string $finishpage_text Текст на странице завершения
     * @return $this
     */
    public function setFinishpageText($finishpage_text)
    {
        $this->container['finishpage_text'] = $finishpage_text;

        return $this;
    }

    /**
     * Gets disqualification_text
     * @return string
     */
    public function getDisqualificationText()
    {
        return $this->container['disqualification_text'];
    }

    /**
     * Sets disqualification_text
     * @param string $disqualification_text Текст на странице дисквалификации
     * @return $this
     */
    public function setDisqualificationText($disqualification_text)
    {
        $this->container['disqualification_text'] = $disqualification_text;

        return $this;
    }

    /**
     * Gets show_captcha
     * @return bool
     */
    public function getShowCaptcha()
    {
        return $this->container['show_captcha'];
    }

    /**
     * Sets show_captcha
     * @param bool $show_captcha Отображать капчу перед завершения опроса
     * @return $this
     */
    public function setShowCaptcha($show_captcha)
    {
        $this->container['show_captcha'] = $show_captcha;

        return $this;
    }

    /**
     * Gets show_social
     * @return bool
     */
    public function getShowSocial()
    {
        return $this->container['show_social'];
    }

    /**
     * Sets show_social
     * @param bool $show_social Кнопки \"поделиться\" на странице завершения
     * @return $this
     */
    public function setShowSocial($show_social)
    {
        $this->container['show_social'] = $show_social;

        return $this;
    }

    /**
     * Gets show_question_count
     * @return bool
     */
    public function getShowQuestionCount()
    {
        return $this->container['show_question_count'];
    }

    /**
     * Sets show_question_count
     * @param bool $show_question_count Отображать количество вопросов
     * @return $this
     */
    public function setShowQuestionCount($show_question_count)
    {
        $this->container['show_question_count'] = $show_question_count;

        return $this;
    }

    /**
     * Gets show_survey_name
     * @return bool
     */
    public function getShowSurveyName()
    {
        return $this->container['show_survey_name'];
    }

    /**
     * Sets show_survey_name
     * @param bool $show_survey_name Отображать название опроса
     * @return $this
     */
    public function setShowSurveyName($show_survey_name)
    {
        $this->container['show_survey_name'] = $show_survey_name;

        return $this;
    }

    /**
     * Gets show_previous_btn
     * @return bool
     */
    public function getShowPreviousBtn()
    {
        return $this->container['show_previous_btn'];
    }

    /**
     * Sets show_previous_btn
     * @param bool $show_previous_btn Копка \"назад\"
     * @return $this
     */
    public function setShowPreviousBtn($show_previous_btn)
    {
        $this->container['show_previous_btn'] = $show_previous_btn;

        return $this;
    }

    /**
     * Gets finish_type
     * @return string
     */
    public function getFinishType()
    {
        return $this->container['finish_type'];
    }

    /**
     * Sets finish_type
     * @param string $finish_type Тип завершения анкеты
     * @return $this
     */
    public function setFinishType($finish_type)
    {
        $allowed_values = array('our-survey', 'custom-survey', 'redirect');
        if (!in_array($finish_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'finish_type', must be one of 'our-survey', 'custom-survey', 'redirect'");
        }
        $this->container['finish_type'] = $finish_type;

        return $this;
    }

    /**
     * Gets finish_redirect_url
     * @return string
     */
    public function getFinishRedirectUrl()
    {
        return $this->container['finish_redirect_url'];
    }

    /**
     * Sets finish_redirect_url
     * @param string $finish_redirect_url URL для редиректа [finish_type=redirect]
     * @return $this
     */
    public function setFinishRedirectUrl($finish_redirect_url)
    {
        $this->container['finish_redirect_url'] = $finish_redirect_url;

        return $this;
    }

    /**
     * Gets finish_redirect_timeout
     * @return int
     */
    public function getFinishRedirectTimeout()
    {
        return $this->container['finish_redirect_timeout'];
    }

    /**
     * Sets finish_redirect_timeout
     * @param int $finish_redirect_timeout Таймаут редиректа [finish_type=redirect]
     * @return $this
     */
    public function setFinishRedirectTimeout($finish_redirect_timeout)
    {
        $this->container['finish_redirect_timeout'] = $finish_redirect_timeout;

        return $this;
    }

    /**
     * Gets finish_custom_surveys
     * @return string[]
     */
    public function getFinishCustomSurveys()
    {
        return $this->container['finish_custom_surveys'];
    }

    /**
     * Sets finish_custom_surveys
     * @param string[] $finish_custom_surveys Анкеты на странице завершения [finish_type=custom-survey]
     * @return $this
     */
    public function setFinishCustomSurveys($finish_custom_surveys)
    {
        $this->container['finish_custom_surveys'] = $finish_custom_surveys;

        return $this;
    }

    /**
     * Gets disable_ad
     * @return bool
     */
    public function getDisableAd()
    {
        return $this->container['disable_ad'];
    }

    /**
     * Sets disable_ad
     * @param bool $disable_ad Отключить рекламу в опросе
     * @return $this
     */
    public function setDisableAd($disable_ad)
    {
        $this->container['disable_ad'] = $disable_ad;

        return $this;
    }

    /**
     * Gets custom_css
     * @return string
     */
    public function getCustomCss()
    {
        return $this->container['custom_css'];
    }

    /**
     * Sets custom_css
     * @param string $custom_css Пользовательская CSS
     * @return $this
     */
    public function setCustomCss($custom_css)
    {
        $this->container['custom_css'] = $custom_css;

        return $this;
    }

    /**
     * Gets credentials_enable
     * @return bool
     */
    public function getCredentialsEnable()
    {
        return $this->container['credentials_enable'];
    }

    /**
     * Sets credentials_enable
     * @param bool $credentials_enable Заполнения опроса по логину и паролю
     * @return $this
     */
    public function setCredentialsEnable($credentials_enable)
    {
        $this->container['credentials_enable'] = $credentials_enable;

        return $this;
    }

    /**
     * Gets credentials
     * @return \AnketologClient\Model\SurveyCredential[]
     */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
     * Sets credentials
     * @param \AnketologClient\Model\SurveyCredential[] $credentials
     * @return $this
     */
    public function setCredentials($credentials)
    {
        $this->container['credentials'] = $credentials;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\AnketologClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\AnketologClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


