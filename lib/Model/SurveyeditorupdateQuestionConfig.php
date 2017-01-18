<?php
/**
 * SurveyeditorupdateQuestionConfig
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
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [swagger-codegen](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://anketolog.ru/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://apiv2.anketolog.ru/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://anketolog.ru/user/account/apikey)   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://apiv2.anketolog.ru/survey/manage/info' ```
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
 * SurveyeditorupdateQuestionConfig Class Doc Comment
 *
 * @category    Class */
 // @description Настройки
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveyeditorupdateQuestionConfig implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'surveyeditorupdateQuestion_config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'title' => 'string',
        'html_code' => 'string',
        'comment' => 'string',
        'has_comment' => 'bool',
        'is_required' => 'bool',
        'is_enable' => 'bool',
        'has_unable_answer' => 'bool',
        'is_multiline' => 'bool',
        'datatype' => 'string',
        'placeholder' => 'string',
        'has_other_answer' => 'bool',
        'has_nothing_answer' => 'bool',
        'options_sort' => 'string',
        'rows_sort' => 'string',
        'max_value' => 'int',
        'max_value_title' => 'string',
        'is_show_residue' => 'bool',
        'is_limited' => 'bool',
        'limit' => '\AnketologClient\Model\SurveyeditoraddQuestionConfigLimit'
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
        'title' => 'title',
        'html_code' => 'html_code',
        'comment' => 'comment',
        'has_comment' => 'has_comment',
        'is_required' => 'is_required',
        'is_enable' => 'is_enable',
        'has_unable_answer' => 'has_unable_answer',
        'is_multiline' => 'is_multiline',
        'datatype' => 'datatype',
        'placeholder' => 'placeholder',
        'has_other_answer' => 'has_other_answer',
        'has_nothing_answer' => 'has_nothing_answer',
        'options_sort' => 'options_sort',
        'rows_sort' => 'rows_sort',
        'max_value' => 'max_value',
        'max_value_title' => 'max_value_title',
        'is_show_residue' => 'is_show_residue',
        'is_limited' => 'is_limited',
        'limit' => 'limit'
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
        'title' => 'setTitle',
        'html_code' => 'setHtmlCode',
        'comment' => 'setComment',
        'has_comment' => 'setHasComment',
        'is_required' => 'setIsRequired',
        'is_enable' => 'setIsEnable',
        'has_unable_answer' => 'setHasUnableAnswer',
        'is_multiline' => 'setIsMultiline',
        'datatype' => 'setDatatype',
        'placeholder' => 'setPlaceholder',
        'has_other_answer' => 'setHasOtherAnswer',
        'has_nothing_answer' => 'setHasNothingAnswer',
        'options_sort' => 'setOptionsSort',
        'rows_sort' => 'setRowsSort',
        'max_value' => 'setMaxValue',
        'max_value_title' => 'setMaxValueTitle',
        'is_show_residue' => 'setIsShowResidue',
        'is_limited' => 'setIsLimited',
        'limit' => 'setLimit'
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
        'title' => 'getTitle',
        'html_code' => 'getHtmlCode',
        'comment' => 'getComment',
        'has_comment' => 'getHasComment',
        'is_required' => 'getIsRequired',
        'is_enable' => 'getIsEnable',
        'has_unable_answer' => 'getHasUnableAnswer',
        'is_multiline' => 'getIsMultiline',
        'datatype' => 'getDatatype',
        'placeholder' => 'getPlaceholder',
        'has_other_answer' => 'getHasOtherAnswer',
        'has_nothing_answer' => 'getHasNothingAnswer',
        'options_sort' => 'getOptionsSort',
        'rows_sort' => 'getRowsSort',
        'max_value' => 'getMaxValue',
        'max_value_title' => 'getMaxValueTitle',
        'is_show_residue' => 'getIsShowResidue',
        'is_limited' => 'getIsLimited',
        'limit' => 'getLimit'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['html_code'] = isset($data['html_code']) ? $data['html_code'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['has_comment'] = isset($data['has_comment']) ? $data['has_comment'] : null;
        $this->container['is_required'] = isset($data['is_required']) ? $data['is_required'] : null;
        $this->container['is_enable'] = isset($data['is_enable']) ? $data['is_enable'] : null;
        $this->container['has_unable_answer'] = isset($data['has_unable_answer']) ? $data['has_unable_answer'] : null;
        $this->container['is_multiline'] = isset($data['is_multiline']) ? $data['is_multiline'] : null;
        $this->container['datatype'] = isset($data['datatype']) ? $data['datatype'] : null;
        $this->container['placeholder'] = isset($data['placeholder']) ? $data['placeholder'] : null;
        $this->container['has_other_answer'] = isset($data['has_other_answer']) ? $data['has_other_answer'] : null;
        $this->container['has_nothing_answer'] = isset($data['has_nothing_answer']) ? $data['has_nothing_answer'] : null;
        $this->container['options_sort'] = isset($data['options_sort']) ? $data['options_sort'] : null;
        $this->container['rows_sort'] = isset($data['rows_sort']) ? $data['rows_sort'] : null;
        $this->container['max_value'] = isset($data['max_value']) ? $data['max_value'] : null;
        $this->container['max_value_title'] = isset($data['max_value_title']) ? $data['max_value_title'] : null;
        $this->container['is_show_residue'] = isset($data['is_show_residue']) ? $data['is_show_residue'] : null;
        $this->container['is_limited'] = isset($data['is_limited']) ? $data['is_limited'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("default", "alphabet", "random");
        if (!in_array($this->container['options_sort'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'options_sort', must be one of #{allowed_values}.";
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
        $allowed_values = array("default", "alphabet", "random");
        if (!in_array($this->container['options_sort'], $allowed_values)) {
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
     * @param string $title Текст вопроса
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets html_code
     * @return string
     */
    public function getHtmlCode()
    {
        return $this->container['html_code'];
    }

    /**
     * Sets html_code
     * @param string $html_code Код HTML-вставки  Для вопросов:  * `html`
     * @return $this
     */
    public function setHtmlCode($html_code)
    {
        $this->container['html_code'] = $html_code;

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
     * @param string $comment Комментарий к вопросу (HTML)  Для вопросов:  * `free` * `freelist` * `select` * `multiselect` * `dropdown` * `matrix` * `matrix3d` * `name` * `email` * `date` * `scale` * `order` * `ratingscale`
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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
     * @param bool $has_comment Отображать комментарий к вопросу  Для вопросов:  * `free` * `freelist` * `select` * `multiselect` * `dropdown` * `matrix` * `matrix3d` * `name` * `email` * `date` * `scale` * `order` * `ratingscale`
     * @return $this
     */
    public function setHasComment($has_comment)
    {
        $this->container['has_comment'] = $has_comment;

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
     * @param bool $is_required Вопрос обазательный  Для вопросов:  * `free` * `freelist` * `select` * `multiselect` * `dropdown` * `matrix` * `matrix3d` * `name` * `email` * `date` * `scale` * `order` * `ratingscale`
     * @return $this
     */
    public function setIsRequired($is_required)
    {
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets is_enable
     * @return bool
     */
    public function getIsEnable()
    {
        return $this->container['is_enable'];
    }

    /**
     * Sets is_enable
     * @param bool $is_enable Вопрос виден респонденту  Для вопросов:  * `html` * `free` * `freelist` * `select` * `multiselect` * `dropdown` * `matrix` * `matrix3d` * `name` * `email` * `date` * `scale` * `order` * `ratingscale`
     * @return $this
     */
    public function setIsEnable($is_enable)
    {
        $this->container['is_enable'] = $is_enable;

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
     * @param bool $has_unable_answer Вариант \"затрудняюсь ответить\"  Для вопросов:  * `free` * `freelist` * `select` * `multiselect` * `dropdown` * `matrix` * `matrix3d` * `name` * `email` * `date` * `scale` * `order` * `ratingscale`
     * @return $this
     */
    public function setHasUnableAnswer($has_unable_answer)
    {
        $this->container['has_unable_answer'] = $has_unable_answer;

        return $this;
    }

    /**
     * Gets is_multiline
     * @return bool
     */
    public function getIsMultiline()
    {
        return $this->container['is_multiline'];
    }

    /**
     * Sets is_multiline
     * @param bool $is_multiline Многострочное поле ввода  Для вопросов:  * `free` * `freelist`
     * @return $this
     */
    public function setIsMultiline($is_multiline)
    {
        $this->container['is_multiline'] = $is_multiline;

        return $this;
    }

    /**
     * Gets datatype
     * @return string
     */
    public function getDatatype()
    {
        return $this->container['datatype'];
    }

    /**
     * Sets datatype
     * @param string $datatype Тип данных в поле ввода  Для вопросов:  * `free` * `freelist`
     * @return $this
     */
    public function setDatatype($datatype)
    {
        $this->container['datatype'] = $datatype;

        return $this;
    }

    /**
     * Gets placeholder
     * @return string
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     * @param string $placeholder Текст-подсказка  Для вопросов:  * `free` * `dropdown` * `matrix3d` * `email`
     * @return $this
     */
    public function setPlaceholder($placeholder)
    {
        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets has_other_answer
     * @return bool
     */
    public function getHasOtherAnswer()
    {
        return $this->container['has_other_answer'];
    }

    /**
     * Sets has_other_answer
     * @param bool $has_other_answer Вариант \"другое\"  Для вопросов:  * `freelist` * `select` * `multiselect` * `dropdown`
     * @return $this
     */
    public function setHasOtherAnswer($has_other_answer)
    {
        $this->container['has_other_answer'] = $has_other_answer;

        return $this;
    }

    /**
     * Gets has_nothing_answer
     * @return bool
     */
    public function getHasNothingAnswer()
    {
        return $this->container['has_nothing_answer'];
    }

    /**
     * Sets has_nothing_answer
     * @param bool $has_nothing_answer Вариант \"ничего из вышеперечисленного\"  Для вопросов:  * `select` * `multiselect` * `dropdown`
     * @return $this
     */
    public function setHasNothingAnswer($has_nothing_answer)
    {
        $this->container['has_nothing_answer'] = $has_nothing_answer;

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
     * @param string $options_sort Сортировка вариантов  * `default` - по умолчанию * `alphabet` - в алфавитном порядке * `random` - в случайном порядке  Для вопросов:  * `freelist` * `select` * `multiselect` * `dropdown` * `matrix` * `matrix3d` * `order` * `ratingscale`
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
     * Gets rows_sort
     * @return string
     */
    public function getRowsSort()
    {
        return $this->container['rows_sort'];
    }

    /**
     * Sets rows_sort
     * @param string $rows_sort Сортировка строк  * `default` - по умолчанию * `alphabet` - в алфавитном порядке * `random` - в случайном порядке  Для вопросов:  * `matrix` * `matrix3d`
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
     * Gets max_value
     * @return int
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     * @param int $max_value Максимальное значение  Для вопросов:  * `ratingscale`
     * @return $this
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets max_value_title
     * @return string
     */
    public function getMaxValueTitle()
    {
        return $this->container['max_value_title'];
    }

    /**
     * Sets max_value_title
     * @param string $max_value_title Eдиница измерения максимального значения (пример \"баллов\")  Для вопросов:  * `ratingscale`
     * @return $this
     */
    public function setMaxValueTitle($max_value_title)
    {
        $this->container['max_value_title'] = $max_value_title;

        return $this;
    }

    /**
     * Gets is_show_residue
     * @return bool
     */
    public function getIsShowResidue()
    {
        return $this->container['is_show_residue'];
    }

    /**
     * Sets is_show_residue
     * @param bool $is_show_residue Показывать остаток нераспределенных баллов  Для вопросов:  * `ratingscale`
     * @return $this
     */
    public function setIsShowResidue($is_show_residue)
    {
        $this->container['is_show_residue'] = $is_show_residue;

        return $this;
    }

    /**
     * Gets is_limited
     * @return bool
     */
    public function getIsLimited()
    {
        return $this->container['is_limited'];
    }

    /**
     * Sets is_limited
     * @param bool $is_limited Включить ограничение количества выбранных вариантов  Для вопросов:  * `multiselect`
     * @return $this
     */
    public function setIsLimited($is_limited)
    {
        $this->container['is_limited'] = $is_limited;

        return $this;
    }

    /**
     * Gets limit
     * @return \AnketologClient\Model\SurveyeditoraddQuestionConfigLimit
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     * @param \AnketologClient\Model\SurveyeditoraddQuestionConfigLimit $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

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


