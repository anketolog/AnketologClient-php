<?php
/**
 * SurveyQuestionMatrix3D
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
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [генератором](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://anketolog.ru/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://apiv2.anketolog.ru/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://anketolog.ru/user/account/apikey).   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://apiv2.anketolog.ru/survey/manage/info' ```  ### Webhook  Webhook – это уведомление сторонних приложений о событиях, произошедших на сайте anketolog.ru, путем отправки уведомлений. Во время возникновения события сервер посылает POST-запрос по адресу, который указан в URL. Настроить Webhook можно в [разделе настроек](https://anketolog.loc/user/account/apikey).
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
 * SurveyQuestionMatrix3D Class Doc Comment
 *
 * @category    Class */
 // @description Вопрос \&quot;матрица 3D\&quot;
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveyQuestionMatrix3D extends SurveyQuestion implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SurveyQuestionMatrix3D';

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
        'is_multiselect' => 'bool',
        'options' => '\AnketologClient\Model\SurveyOption[]',
        'options_sort' => 'string',
        'rows' => '\AnketologClient\Model\SurveyRow[]',
        'rows_sort' => 'string'
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
        'is_multiselect' => 'is_multiselect',
        'options' => 'options',
        'options_sort' => 'options_sort',
        'rows' => 'rows',
        'rows_sort' => 'rows_sort'
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
        'is_multiselect' => 'setIsMultiselect',
        'options' => 'setOptions',
        'options_sort' => 'setOptionsSort',
        'rows' => 'setRows',
        'rows_sort' => 'setRowsSort'
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
        'is_multiselect' => 'getIsMultiselect',
        'options' => 'getOptions',
        'options_sort' => 'getOptionsSort',
        'rows' => 'getRows',
        'rows_sort' => 'getRowsSort'
    );

    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    const OPTIONS_SORT_DEFAULT = 'default';
    const OPTIONS_SORT_ALPHABET = 'alphabet';
    const OPTIONS_SORT_RANDOM = 'random';
    const ROWS_SORT_DEFAULT = 'default';
    const ROWS_SORT_ALPHABET = 'alphabet';
    const ROWS_SORT_RANDOM = 'random';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOptionsSortAllowableValues()
    {
        return [
            self::OPTIONS_SORT_DEFAULT,
            self::OPTIONS_SORT_ALPHABET,
            self::OPTIONS_SORT_RANDOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRowsSortAllowableValues()
    {
        return [
            self::ROWS_SORT_DEFAULT,
            self::ROWS_SORT_ALPHABET,
            self::ROWS_SORT_RANDOM,
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
        $this->container['is_multiselect'] = isset($data['is_multiselect']) ? $data['is_multiselect'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['options_sort'] = isset($data['options_sort']) ? $data['options_sort'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['rows_sort'] = isset($data['rows_sort']) ? $data['rows_sort'] : null;
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
        if ($this->container['is_multiselect'] === null) {
            $invalid_properties[] = "'is_multiselect' can't be null";
        }
        if ($this->container['options'] === null) {
            $invalid_properties[] = "'options' can't be null";
        }
        if ($this->container['options_sort'] === null) {
            $invalid_properties[] = "'options_sort' can't be null";
        }
        $allowed_values = array("default", "alphabet", "random");
        if (!in_array($this->container['options_sort'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'options_sort', must be one of #{allowed_values}.";
        }

        if ($this->container['rows'] === null) {
            $invalid_properties[] = "'rows' can't be null";
        }
        if ($this->container['rows_sort'] === null) {
            $invalid_properties[] = "'rows_sort' can't be null";
        }
        $allowed_values = array("default", "alphabet", "random");
        if (!in_array($this->container['rows_sort'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'rows_sort', must be one of #{allowed_values}.";
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
        if ($this->container['is_multiselect'] === null) {
            return false;
        }
        if ($this->container['options'] === null) {
            return false;
        }
        if ($this->container['options_sort'] === null) {
            return false;
        }
        $allowed_values = array("default", "alphabet", "random");
        if (!in_array($this->container['options_sort'], $allowed_values)) {
            return false;
        }
        if ($this->container['rows'] === null) {
            return false;
        }
        if ($this->container['rows_sort'] === null) {
            return false;
        }
        $allowed_values = array("default", "alphabet", "random");
        if (!in_array($this->container['rows_sort'], $allowed_values)) {
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
     * Gets is_multiselect
     * @return bool
     */
    public function getIsMultiselect()
    {
        return $this->container['is_multiselect'];
    }

    /**
     * Sets is_multiselect
     * @param bool $is_multiselect Возможность выбора нескольких ответов
     * @return $this
     */
    public function setIsMultiselect($is_multiselect)
    {
        $this->container['is_multiselect'] = $is_multiselect;

        return $this;
    }

    /**
     * Gets options
     * @return \AnketologClient\Model\SurveyOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \AnketologClient\Model\SurveyOption[] $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets options_sort
     * @return string
     */
    public function getOptionsSort()
    {
        return $this->container['options_sort'];
    }

    /**
     * Sets options_sort
     * @param string $options_sort Сортировка  * `default` - по умолчанию * `alphabet` - в алфавитном порядке * `random` - в случайном порядке
     * @return $this
     */
    public function setOptionsSort($options_sort)
    {
        $allowed_values = array('default', 'alphabet', 'random');
        if (!in_array($options_sort, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'options_sort', must be one of 'default', 'alphabet', 'random'");
        }
        $this->container['options_sort'] = $options_sort;

        return $this;
    }

    /**
     * Gets rows
     * @return \AnketologClient\Model\SurveyRow[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     * @param \AnketologClient\Model\SurveyRow[] $rows
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets rows_sort
     * @return string
     */
    public function getRowsSort()
    {
        return $this->container['rows_sort'];
    }

    /**
     * Sets rows_sort
     * @param string $rows_sort Сортировка  * `default` - по умолчанию * `alphabet` - в алфавитном порядке * `random` - в случайном порядке
     * @return $this
     */
    public function setRowsSort($rows_sort)
    {
        $allowed_values = array('default', 'alphabet', 'random');
        if (!in_array($rows_sort, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'rows_sort', must be one of 'default', 'alphabet', 'random'");
        }
        $this->container['rows_sort'] = $rows_sort;

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


