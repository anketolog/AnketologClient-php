<?php
/**
 * CampaignTargetingAviaperelety
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
 * CampaignTargetingAviaperelety Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Авиаперелеты&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingAviaperelety implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingAviaperelety';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'sovershenie_pereletov' => 'string[]',
        'cel_aviapereletov' => 'string[]'
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
        'is_enable' => 'is_enable',
        'sovershenie_pereletov' => 'sovershenie_pereletov',
        'cel_aviapereletov' => 'cel_aviapereletov'
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
        'is_enable' => 'setIsEnable',
        'sovershenie_pereletov' => 'setSoversheniePereletov',
        'cel_aviapereletov' => 'setCelAviapereletov'
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
        'is_enable' => 'getIsEnable',
        'sovershenie_pereletov' => 'getSoversheniePereletov',
        'cel_aviapereletov' => 'getCelAviapereletov'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const SOVERSHENIE_PERELETOV__0 = 'option_0';
    const SOVERSHENIE_PERELETOV__1 = 'option_1';
    const CEL_AVIAPERELETOV__0 = 'option_0';
    const CEL_AVIAPERELETOV__1 = 'option_1';
    const CEL_AVIAPERELETOV__2 = 'option_2';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSoversheniePereletovAllowableValues()
    {
        return [
            self::SOVERSHENIE_PERELETOV__0,
            self::SOVERSHENIE_PERELETOV__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCelAviapereletovAllowableValues()
    {
        return [
            self::CEL_AVIAPERELETOV__0,
            self::CEL_AVIAPERELETOV__1,
            self::CEL_AVIAPERELETOV__2,
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
        $this->container['is_enable'] = isset($data['is_enable']) ? $data['is_enable'] : null;
        $this->container['sovershenie_pereletov'] = isset($data['sovershenie_pereletov']) ? $data['sovershenie_pereletov'] : null;
        $this->container['cel_aviapereletov'] = isset($data['cel_aviapereletov']) ? $data['cel_aviapereletov'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
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
     * @param bool $is_enable Группа включена
     * @return $this
     */
    public function setIsEnable($is_enable)
    {
        $this->container['is_enable'] = $is_enable;

        return $this;
    }

    /**
     * Gets sovershenie_pereletov
     * @return string[]
     */
    public function getSoversheniePereletov()
    {
        return $this->container['sovershenie_pereletov'];
    }

    /**
     * Sets sovershenie_pereletov
     * @param string[] $sovershenie_pereletov Параметр `Совершение перелетов`  * `option_0` - совершал за последний год * `option_1` - не совершал за последний год
     * @return $this
     */
    public function setSoversheniePereletov($sovershenie_pereletov)
    {
        $allowed_values = array('option_0', 'option_1');
        if (!in_array($sovershenie_pereletov, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'sovershenie_pereletov', must be one of 'option_0', 'option_1'");
        }
        $this->container['sovershenie_pereletov'] = $sovershenie_pereletov;

        return $this;
    }

    /**
     * Gets cel_aviapereletov
     * @return string[]
     */
    public function getCelAviapereletov()
    {
        return $this->container['cel_aviapereletov'];
    }

    /**
     * Sets cel_aviapereletov
     * @param string[] $cel_aviapereletov Параметр `Цель авиаперелетов`  * `option_0` - работа, бизнес * `option_1` - отдых * `option_2` - и работа, и отдых
     * @return $this
     */
    public function setCelAviapereletov($cel_aviapereletov)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2');
        if (!in_array($cel_aviapereletov, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'cel_aviapereletov', must be one of 'option_0', 'option_1', 'option_2'");
        }
        $this->container['cel_aviapereletov'] = $cel_aviapereletov;

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


