<?php
/**
 * SurveyQuestionDate
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
 * Документация к Анкетолог API (beta-версия)
 *
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [генератором](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://anketolog.ru/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://apiv2.anketolog.ru/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://anketolog.ru/user/account/apikey).   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://apiv2.anketolog.ru/survey/manage/info' ```  ### Webhook  Webhook – это уведомление сторонних приложений о событиях, произошедших на сайте anketolog.ru, путем отправки уведомлений. Во время возникновения события сервер посылает POST-запрос по адресу, который указан в URL. Настроить Webhook можно в [разделе настроек](https://anketolog.loc/user/account/apikey).  ### Webhook : Ответ на анкету  ``` action=new-answer data={     \"answer\": {         \"id\": 0,         \"survey_id\": 0,         \"revision_id\": 0,         \"start_date\": 0,         \"finish_date\": 0,         \"status\": \"v\",         \"collector\": {             \"type\": \"string\",             \"name\": \"string\",             \"swagger_type\": \"string\"         }   } } date=Fri, 26 Oct 2018 05:46:30 +0300 ```
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
 * SurveyQuestionDate Class Doc Comment
 *
 * @category    Class */
 // @description Вопрос \&quot;дата\&quot;
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveyQuestionDate extends SurveyQuestion implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SurveyQuestionDate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'title' => 'string',
        'no' => 'int',
        'is_required' => 'bool',
        'has_comment' => 'bool',
        'comment' => 'string',
        'has_unable_answer' => 'bool',
        'branchrules' => '\AnketologClient\Model\SurveyBranchrule[]',
        'visiblerules' => '\AnketologClient\Model\SurveyVisiblerule[]',
        'date_period' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'title' => 'title',
        'no' => 'no',
        'is_required' => 'is_required',
        'has_comment' => 'has_comment',
        'comment' => 'comment',
        'has_unable_answer' => 'has_unable_answer',
        'branchrules' => 'branchrules',
        'visiblerules' => 'visiblerules',
        'date_period' => 'date_period'
    );

    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'title' => 'setTitle',
        'no' => 'setNo',
        'is_required' => 'setIsRequired',
        'has_comment' => 'setHasComment',
        'comment' => 'setComment',
        'has_unable_answer' => 'setHasUnableAnswer',
        'branchrules' => 'setBranchrules',
        'visiblerules' => 'setVisiblerules',
        'date_period' => 'setDatePeriod'
    );

    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'title' => 'getTitle',
        'no' => 'getNo',
        'is_required' => 'getIsRequired',
        'has_comment' => 'getHasComment',
        'comment' => 'getComment',
        'has_unable_answer' => 'getHasUnableAnswer',
        'branchrules' => 'getBranchrules',
        'visiblerules' => 'getVisiblerules',
        'date_period' => 'getDatePeriod'
    );

    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    const DATE_PERIOD_DEFAULT = 'default';
    const DATE_PERIOD_PAST_DATE = 'past_date';
    const DATE_PERIOD_PAST_DATE_WITH_TODAY = 'past_date_with_today';
    const DATE_PERIOD_FUTURE_DATE = 'future_date';
    const DATE_PERIOD_FUTURE_DATE_WITH_TODAY = 'future_date_with_today';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDatePeriodAllowableValues()
    {
        return [
            self::DATE_PERIOD_DEFAULT,
            self::DATE_PERIOD_PAST_DATE,
            self::DATE_PERIOD_PAST_DATE_WITH_TODAY,
            self::DATE_PERIOD_FUTURE_DATE,
            self::DATE_PERIOD_FUTURE_DATE_WITH_TODAY,
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
        parent::__construct($data);

        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['no'] = isset($data['no']) ? $data['no'] : null;
        $this->container['is_required'] = isset($data['is_required']) ? $data['is_required'] : null;
        $this->container['has_comment'] = isset($data['has_comment']) ? $data['has_comment'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['has_unable_answer'] = isset($data['has_unable_answer']) ? $data['has_unable_answer'] : null;
        $this->container['branchrules'] = isset($data['branchrules']) ? $data['branchrules'] : null;
        $this->container['visiblerules'] = isset($data['visiblerules']) ? $data['visiblerules'] : null;
        $this->container['date_period'] = isset($data['date_period']) ? $data['date_period'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['no'] === null) {
            $invalid_properties[] = "'no' can't be null";
        }
        if ($this->container['is_required'] === null) {
            $invalid_properties[] = "'is_required' can't be null";
        }
        if ($this->container['has_comment'] === null) {
            $invalid_properties[] = "'has_comment' can't be null";
        }
        if ($this->container['comment'] === null) {
            $invalid_properties[] = "'comment' can't be null";
        }
        if ($this->container['has_unable_answer'] === null) {
            $invalid_properties[] = "'has_unable_answer' can't be null";
        }
        if ($this->container['branchrules'] === null) {
            $invalid_properties[] = "'branchrules' can't be null";
        }
        if ($this->container['visiblerules'] === null) {
            $invalid_properties[] = "'visiblerules' can't be null";
        }
        if ($this->container['date_period'] === null) {
            $invalid_properties[] = "'date_period' can't be null";
        }
        $allowed_values = array("default", "past_date", "past_date_with_today", "future_date", "future_date_with_today");
        if (!in_array($this->container['date_period'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'date_period', must be one of #{allowed_values}.";
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
        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['no'] === null) {
            return false;
        }
        if ($this->container['is_required'] === null) {
            return false;
        }
        if ($this->container['has_comment'] === null) {
            return false;
        }
        if ($this->container['comment'] === null) {
            return false;
        }
        if ($this->container['has_unable_answer'] === null) {
            return false;
        }
        if ($this->container['branchrules'] === null) {
            return false;
        }
        if ($this->container['visiblerules'] === null) {
            return false;
        }
        if ($this->container['date_period'] === null) {
            return false;
        }
        $allowed_values = array("default", "past_date", "past_date_with_today", "future_date", "future_date_with_today");
        if (!in_array($this->container['date_period'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Название вопроса
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets no
     * @return int
     */
    public function getNo()
    {
        return $this->container['no'];
    }

    /**
     * Sets no
     * @param int $no Порядковый номер
     * @return $this
     */
    public function setNo($no)
    {
        $this->container['no'] = $no;

        return $this;
    }

    /**
     * Gets is_required
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     * @param bool $is_required Вопрос обязательный
     * @return $this
     */
    public function setIsRequired($is_required)
    {
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets has_comment
     * @return bool
     */
    public function getHasComment()
    {
        return $this->container['has_comment'];
    }

    /**
     * Sets has_comment
     * @param bool $has_comment Отображать комментарий
     * @return $this
     */
    public function setHasComment($has_comment)
    {
        $this->container['has_comment'] = $has_comment;

        return $this;
    }

    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     * @param string $comment Текст комментария
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets has_unable_answer
     * @return bool
     */
    public function getHasUnableAnswer()
    {
        return $this->container['has_unable_answer'];
    }

    /**
     * Sets has_unable_answer
     * @param bool $has_unable_answer Вариант \"затрудняюсь ответить\"
     * @return $this
     */
    public function setHasUnableAnswer($has_unable_answer)
    {
        $this->container['has_unable_answer'] = $has_unable_answer;

        return $this;
    }

    /**
     * Gets branchrules
     * @return \AnketologClient\Model\SurveyBranchrule[]
     */
    public function getBranchrules()
    {
        return $this->container['branchrules'];
    }

    /**
     * Sets branchrules
     * @param \AnketologClient\Model\SurveyBranchrule[] $branchrules
     * @return $this
     */
    public function setBranchrules($branchrules)
    {
        $this->container['branchrules'] = $branchrules;

        return $this;
    }

    /**
     * Gets visiblerules
     * @return \AnketologClient\Model\SurveyVisiblerule[]
     */
    public function getVisiblerules()
    {
        return $this->container['visiblerules'];
    }

    /**
     * Sets visiblerules
     * @param \AnketologClient\Model\SurveyVisiblerule[] $visiblerules
     * @return $this
     */
    public function setVisiblerules($visiblerules)
    {
        $this->container['visiblerules'] = $visiblerules;

        return $this;
    }

    /**
     * Gets date_period
     * @return string
     */
    public function getDatePeriod()
    {
        return $this->container['date_period'];
    }

    /**
     * Sets date_period
     * @param string $date_period Период даты  * `default` - Любой * `past_date` - Прошедшая дата * `past_date_with_today` - Прошедшая дата включая текущий день * `future_date` - Будущая дата * `future_date_with_today` - Будущая дата включая текущий день
     * @return $this
     */
    public function setDatePeriod($date_period)
    {
        $allowed_values = array('default', 'past_date', 'past_date_with_today', 'future_date', 'future_date_with_today');
        if (!in_array($date_period, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'date_period', must be one of 'default', 'past_date', 'past_date_with_today', 'future_date', 'future_date_with_today'");
        }
        $this->container['date_period'] = $date_period;

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


