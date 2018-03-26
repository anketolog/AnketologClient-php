<?php
/**
 * SurveyeditorupdateBranchruleConfig
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
 * SurveyeditorupdateBranchruleConfig Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveyeditorupdateBranchruleConfig implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'surveyeditorupdateBranchrule_config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'type' => 'string',
        'operator' => 'string',
        'page_id' => 'int',
        'events' => '\AnketologClient\Model\SurveyeditorupdateBranchruleConfigEvents[]'
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
        'operator' => 'operator',
        'page_id' => 'page_id',
        'events' => 'events'
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
        'operator' => 'setOperator',
        'page_id' => 'setPageId',
        'events' => 'setEvents'
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
        'operator' => 'getOperator',
        'page_id' => 'getPageId',
        'events' => 'getEvents'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_FINISHSURVEY = 'finishsurvey';
    const TYPE_DISQUALIFICATION = 'disqualification';
    const TYPE_JUMPTOPAGE = 'jumptopage';
    const OPERATOR_AND = 'and';
    const OPERATOR_OR = 'or';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FINISHSURVEY,
            self::TYPE_DISQUALIFICATION,
            self::TYPE_JUMPTOPAGE,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['page_id'] = isset($data['page_id']) ? $data['page_id'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
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
        $allowed_values = array("finishsurvey", "disqualification", "jumptopage");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
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
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = array("finishsurvey", "disqualification", "jumptopage");
        if (!in_array($this->container['type'], $allowed_values)) {
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Тип правила  * `finishsurvey` - завершение анкеты * `disqualification` - дисквалифицировать респондента * `jumptopage` - перейти к страницы
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('finishsurvey', 'disqualification', 'jumptopage');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'finishsurvey', 'disqualification', 'jumptopage'");
        }
        $this->container['type'] = $type;

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
     * Gets page_id
     * @return int
     */
    public function getPageId()
    {
        return $this->container['page_id'];
    }

    /**
     * Sets page_id
     * @param int $page_id ID страницы
     * @return $this
     */
    public function setPageId($page_id)
    {
        $this->container['page_id'] = $page_id;

        return $this;
    }

    /**
     * Gets events
     * @return \AnketologClient\Model\SurveyeditorupdateBranchruleConfigEvents[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     * @param \AnketologClient\Model\SurveyeditorupdateBranchruleConfigEvents[] $events
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

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


