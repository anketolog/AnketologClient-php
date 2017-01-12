<?php
/**
 * CampaignCalculate
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
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [swagger-codegen](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://${app.service.domain}/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://${app.apiv2.domain}/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://${app.service.domain}/user/account/apikey)   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://${app.apiv2.domain}/survey/manage/info' ```
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
 * CampaignCalculate Class Doc Comment
 *
 * @category    Class */
 // @description Целевая аудитория кампании
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignCalculate implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignCalculate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'min_answer_price' => 'int',
        'max_answer_count' => 'int',
        'targeting_info' => '\AnketologClient\Model\CampaignCalculateTargetingInfo[]'
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
        'min_answer_price' => 'min_answer_price',
        'max_answer_count' => 'max_answer_count',
        'targeting_info' => 'targeting_info'
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
        'min_answer_price' => 'setMinAnswerPrice',
        'max_answer_count' => 'setMaxAnswerCount',
        'targeting_info' => 'setTargetingInfo'
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
        'min_answer_price' => 'getMinAnswerPrice',
        'max_answer_count' => 'getMaxAnswerCount',
        'targeting_info' => 'getTargetingInfo'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['min_answer_price'] = isset($data['min_answer_price']) ? $data['min_answer_price'] : null;
        $this->container['max_answer_count'] = isset($data['max_answer_count']) ? $data['max_answer_count'] : null;
        $this->container['targeting_info'] = isset($data['targeting_info']) ? $data['targeting_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['min_answer_price'] === null) {
            $invalid_properties[] = "'min_answer_price' can't be null";
        }
        if ($this->container['max_answer_count'] === null) {
            $invalid_properties[] = "'max_answer_count' can't be null";
        }
        if ($this->container['targeting_info'] === null) {
            $invalid_properties[] = "'targeting_info' can't be null";
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
        if ($this->container['min_answer_price'] === null) {
            return false;
        }
        if ($this->container['max_answer_count'] === null) {
            return false;
        }
        if ($this->container['targeting_info'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets min_answer_price
     * @return int
     */
    public function getMinAnswerPrice()
    {
        return $this->container['min_answer_price'];
    }

    /**
     * Sets min_answer_price
     * @param int $min_answer_price Минимальная стоимость ответа
     * @return $this
     */
    public function setMinAnswerPrice($min_answer_price)
    {
        $this->container['min_answer_price'] = $min_answer_price;

        return $this;
    }

    /**
     * Gets max_answer_count
     * @return int
     */
    public function getMaxAnswerCount()
    {
        return $this->container['max_answer_count'];
    }

    /**
     * Sets max_answer_count
     * @param int $max_answer_count Максимальное кол-во ответов
     * @return $this
     */
    public function setMaxAnswerCount($max_answer_count)
    {
        $this->container['max_answer_count'] = $max_answer_count;

        return $this;
    }

    /**
     * Gets targeting_info
     * @return \AnketologClient\Model\CampaignCalculateTargetingInfo[]
     */
    public function getTargetingInfo()
    {
        return $this->container['targeting_info'];
    }

    /**
     * Sets targeting_info
     * @param \AnketologClient\Model\CampaignCalculateTargetingInfo[] $targeting_info Целевая аудитория
     * @return $this
     */
    public function setTargetingInfo($targeting_info)
    {
        $this->container['targeting_info'] = $targeting_info;

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


