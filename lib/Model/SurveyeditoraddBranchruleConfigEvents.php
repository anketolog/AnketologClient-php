<?php
/**
 * SurveyeditoraddBranchruleConfigEvents
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
 * SurveyeditoraddBranchruleConfigEvents Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveyeditoraddBranchruleConfigEvents implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'surveyeditoraddBranchrule_config_events';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'type' => 'string',
        'option_id' => 'int',
        'row_id' => 'int',
        'range_id' => 'int',
        'option_value_id' => 'int',
        'value' => 'int',
        'order' => 'int',
        'operator' => 'string'
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
        'type' => 'type',
        'option_id' => 'option_id',
        'row_id' => 'row_id',
        'range_id' => 'range_id',
        'option_value_id' => 'option_value_id',
        'value' => 'value',
        'order' => 'order',
        'operator' => 'operator'
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
        'type' => 'setType',
        'option_id' => 'setOptionId',
        'row_id' => 'setRowId',
        'range_id' => 'setRangeId',
        'option_value_id' => 'setOptionValueId',
        'value' => 'setValue',
        'order' => 'setOrder',
        'operator' => 'setOperator'
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
        'type' => 'getType',
        'option_id' => 'getOptionId',
        'row_id' => 'getRowId',
        'range_id' => 'getRangeId',
        'option_value_id' => 'getOptionValueId',
        'value' => 'getValue',
        'order' => 'getOrder',
        'operator' => 'getOperator'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_HAS_ANSWER = 'has-answer';
    const TYPE_MISSING_ANSWER = 'missing-answer';
    const TYPE_SELECT_OPTION = 'select-option';
    const TYPE_NOT_SELECT_OPTION = 'not-select-option';
    const TYPE_SELECT_ANY_OPTION = 'select-any-option';
    const TYPE_UNABLE_ANSWER = 'unable-answer';
    const TYPE_SET_ORDER = 'set-order';
    const TYPE_SET_VALUE = 'set-value';
    const OPERATOR_EQ = 'eq';
    const OPERATOR_GT = 'gt';
    const OPERATOR_LT = 'lt';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_HAS_ANSWER,
            self::TYPE_MISSING_ANSWER,
            self::TYPE_SELECT_OPTION,
            self::TYPE_NOT_SELECT_OPTION,
            self::TYPE_SELECT_ANY_OPTION,
            self::TYPE_UNABLE_ANSWER,
            self::TYPE_SET_ORDER,
            self::TYPE_SET_VALUE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR_EQ,
            self::OPERATOR_GT,
            self::OPERATOR_LT,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['option_id'] = isset($data['option_id']) ? $data['option_id'] : null;
        $this->container['row_id'] = isset($data['row_id']) ? $data['row_id'] : null;
        $this->container['range_id'] = isset($data['range_id']) ? $data['range_id'] : null;
        $this->container['option_value_id'] = isset($data['option_value_id']) ? $data['option_value_id'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = array("has-answer", "missing-answer", "select-option", "not-select-option", "select-any-option", "unable-answer", "set-order", "set-value");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        if ($this->container['operator'] === null) {
            $invalid_properties[] = "'operator' can't be null";
        }
        $allowed_values = array("eq", "gt", "lt");
        if (!in_array($this->container['operator'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'operator', must be one of #{allowed_values}.";
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
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = array("has-answer", "missing-answer", "select-option", "not-select-option", "select-any-option", "unable-answer", "set-order", "set-value");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['operator'] === null) {
            return false;
        }
        $allowed_values = array("eq", "gt", "lt");
        if (!in_array($this->container['operator'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type * `has-answer` - респондент дал ответ * `missing-answer` - респондент не дал ответ * `select-option` - респондент выбрал вариант * `not-select-option` - респондент не выбрал вариант * `select-any-option` - респондент выбрал любой вариант * `unable-answer` - респондент затруднился ответить * `set-order` - респондент поставил вариант на место * `set-value` -  респондент задал варианту значение
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('has-answer', 'missing-answer', 'select-option', 'not-select-option', 'select-any-option', 'unable-answer', 'set-order', 'set-value');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'has-answer', 'missing-answer', 'select-option', 'not-select-option', 'select-any-option', 'unable-answer', 'set-order', 'set-value'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets option_id
     * @return int
     */
    public function getOptionId()
    {
        return $this->container['option_id'];
    }

    /**
     * Sets option_id
     * @param int $option_id ID варианта/столбца  Для question.type:  * `select` * `multiselect` * `dropdown` * `matrix` * `matrix3d` * `order` * `ratingscale` * `scale`
     * @return $this
     */
    public function setOptionId($option_id)
    {
        $this->container['option_id'] = $option_id;

        return $this;
    }

    /**
     * Gets row_id
     * @return int
     */
    public function getRowId()
    {
        return $this->container['row_id'];
    }

    /**
     * Sets row_id
     * @param int $row_id ID строки  Для question.type:  * `matrix` * `matrix3d`
     * @return $this
     */
    public function setRowId($row_id)
    {
        $this->container['row_id'] = $row_id;

        return $this;
    }

    /**
     * Gets range_id
     * @return int
     */
    public function getRangeId()
    {
        return $this->container['range_id'];
    }

    /**
     * Sets range_id
     * @param int $range_id ID диапазона  Для question.type:  * `scale`
     * @return $this
     */
    public function setRangeId($range_id)
    {
        $this->container['range_id'] = $range_id;

        return $this;
    }

    /**
     * Gets option_value_id
     * @return int
     */
    public function getOptionValueId()
    {
        return $this->container['option_value_id'];
    }

    /**
     * Sets option_value_id
     * @param int $option_value_id ID варианта колонки  Для question.type:  * `matrix3d`
     * @return $this
     */
    public function setOptionValueId($option_value_id)
    {
        $this->container['option_value_id'] = $option_value_id;

        return $this;
    }

    /**
     * Gets value
     * @return int
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param int $value Значение  Для question.type:  * `ratingscale`
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets order
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param int $order Место  Для question.type:  * `order`
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets operator
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     * @param string $operator Оператор сравнения  * `eq` - равен * `gt` - больше * `lt` - меньше
     * @return $this
     */
    public function setOperator($operator)
    {
        $allowed_values = array('eq', 'gt', 'lt');
        if (!in_array($operator, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'operator', must be one of 'eq', 'gt', 'lt'");
        }
        $this->container['operator'] = $operator;

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


