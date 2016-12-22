<?php
/**
 * SurveyBranchrule
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
 * Anketolog API v2.0
 *
 * ### Клиенты:  * [**PHP**](https://github.com/anketolog/AnketologClient-php)  ### Клиенты на других языках:  * Скачайте конфигурационный [swagger-файл](https://anketolog.ru/api/external/v2/docs/anketolog.yaml) * Воспользуйтесь официальным [генератором](http://swagger.io/swagger-codegen/)   ([список поддерживаемых языков](https://github.com/swagger-api/swagger-codegen#api-clients))
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
 * SurveyBranchrule Class Doc Comment
 *
 * @category    Class */
 // @description Логическое правило
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveyBranchrule implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SurveyBranchrule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'rule_type' => 'string',
        'operator' => 'string',
        'events' => '\AnketologClient\Model\SurveyBranchruleEventType[]',
        'page_id' => 'int'
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
        'id' => 'id',
        'rule_type' => 'rule_type',
        'operator' => 'operator',
        'events' => 'events',
        'page_id' => 'page_id'
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
        'id' => 'setId',
        'rule_type' => 'setRuleType',
        'operator' => 'setOperator',
        'events' => 'setEvents',
        'page_id' => 'setPageId'
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
        'id' => 'getId',
        'rule_type' => 'getRuleType',
        'operator' => 'getOperator',
        'events' => 'getEvents',
        'page_id' => 'getPageId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const RULE_TYPE_FINISHSURVEY = 'finishsurvey';
    const RULE_TYPE_DISQUALIFICATION = 'disqualification';
    const RULE_TYPE_JUMPTOPAGE = 'jumptopage';
    const OPERATOR_AND = 'and';
    const OPERATOR_OR = 'or';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRuleTypeAllowableValues()
    {
        return [
            self::RULE_TYPE_FINISHSURVEY,
            self::RULE_TYPE_DISQUALIFICATION,
            self::RULE_TYPE_JUMPTOPAGE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR_AND,
            self::OPERATOR_OR,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['rule_type'] = isset($data['rule_type']) ? $data['rule_type'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['page_id'] = isset($data['page_id']) ? $data['page_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['rule_type'] === null) {
            $invalid_properties[] = "'rule_type' can't be null";
        }
        $allowed_values = array("finishsurvey", "disqualification", "jumptopage");
        if (!in_array($this->container['rule_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'rule_type', must be one of #{allowed_values}.";
        }

        if ($this->container['operator'] === null) {
            $invalid_properties[] = "'operator' can't be null";
        }
        $allowed_values = array("and", "or");
        if (!in_array($this->container['operator'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'operator', must be one of #{allowed_values}.";
        }

        if ($this->container['events'] === null) {
            $invalid_properties[] = "'events' can't be null";
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
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['rule_type'] === null) {
            return false;
        }
        $allowed_values = array("finishsurvey", "disqualification", "jumptopage");
        if (!in_array($this->container['rule_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['operator'] === null) {
            return false;
        }
        $allowed_values = array("and", "or");
        if (!in_array($this->container['operator'], $allowed_values)) {
            return false;
        }
        if ($this->container['events'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets rule_type
     * @return string
     */
    public function getRuleType()
    {
        return $this->container['rule_type'];
    }

    /**
     * Sets rule_type
     * @param string $rule_type Действие при срабатывании правила  * `finishsurvey` - завершить опрос * `disqualification` - дисквалифицировать респондента * `jumptopage` - перейти к станице **page_id**
     * @return $this
     */
    public function setRuleType($rule_type)
    {
        $allowed_values = array('finishsurvey', 'disqualification', 'jumptopage');
        if (!in_array($rule_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'rule_type', must be one of 'finishsurvey', 'disqualification', 'jumptopage'");
        }
        $this->container['rule_type'] = $rule_type;

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
     * @param string $operator Логический оператор  * `and` - логическое \"и\" * `or` - логическое \"или\"
     * @return $this
     */
    public function setOperator($operator)
    {
        $allowed_values = array('and', 'or');
        if (!in_array($operator, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'operator', must be one of 'and', 'or'");
        }
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets events
     * @return \AnketologClient\Model\SurveyBranchruleEventType[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     * @param \AnketologClient\Model\SurveyBranchruleEventType[] $events
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets page_id
     * @return int
     */
    public function getPageId()
    {
        return $this->container['page_id'];
    }

    /**
     * Sets page_id
     * @param int $page_id Страница для перехода [rule_type=jumptopage]
     * @return $this
     */
    public function setPageId($page_id)
    {
        $this->container['page_id'] = $page_id;

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


