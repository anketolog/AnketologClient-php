<?php
/**
 * CampaignTargetingPlatnyeUslugi
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
 * CampaignTargetingPlatnyeUslugi Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Платные услуги&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingPlatnyeUslugi implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingPlatnyeUslugi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'ispolzovanie_platnyh_uslug' => 'string[]'
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
        'ispolzovanie_platnyh_uslug' => 'ispolzovanie_platnyh_uslug'
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
        'ispolzovanie_platnyh_uslug' => 'setIspolzovaniePlatnyhUslug'
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
        'ispolzovanie_platnyh_uslug' => 'getIspolzovaniePlatnyhUslug'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const ISPOLZOVANIE_PLATNYH_USLUG__0 = 'option_0';
    const ISPOLZOVANIE_PLATNYH_USLUG__1 = 'option_1';
    const ISPOLZOVANIE_PLATNYH_USLUG__2 = 'option_2';
    const ISPOLZOVANIE_PLATNYH_USLUG__3 = 'option_3';
    const ISPOLZOVANIE_PLATNYH_USLUG__4 = 'option_4';
    const ISPOLZOVANIE_PLATNYH_USLUG__5 = 'option_5';
    const ISPOLZOVANIE_PLATNYH_USLUG__6 = 'option_6';
    const ISPOLZOVANIE_PLATNYH_USLUG__7 = 'option_7';
    const ISPOLZOVANIE_PLATNYH_USLUG__8 = 'option_8';
    const ISPOLZOVANIE_PLATNYH_USLUG__9 = 'option_9';
    const ISPOLZOVANIE_PLATNYH_USLUG__10 = 'option_10';
    const ISPOLZOVANIE_PLATNYH_USLUG__11 = 'option_11';
    const ISPOLZOVANIE_PLATNYH_USLUG__12 = 'option_12';
    const ISPOLZOVANIE_PLATNYH_USLUG__13 = 'option_13';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getIspolzovaniePlatnyhUslugAllowableValues()
    {
        return [
            self::ISPOLZOVANIE_PLATNYH_USLUG__0,
            self::ISPOLZOVANIE_PLATNYH_USLUG__1,
            self::ISPOLZOVANIE_PLATNYH_USLUG__2,
            self::ISPOLZOVANIE_PLATNYH_USLUG__3,
            self::ISPOLZOVANIE_PLATNYH_USLUG__4,
            self::ISPOLZOVANIE_PLATNYH_USLUG__5,
            self::ISPOLZOVANIE_PLATNYH_USLUG__6,
            self::ISPOLZOVANIE_PLATNYH_USLUG__7,
            self::ISPOLZOVANIE_PLATNYH_USLUG__8,
            self::ISPOLZOVANIE_PLATNYH_USLUG__9,
            self::ISPOLZOVANIE_PLATNYH_USLUG__10,
            self::ISPOLZOVANIE_PLATNYH_USLUG__11,
            self::ISPOLZOVANIE_PLATNYH_USLUG__12,
            self::ISPOLZOVANIE_PLATNYH_USLUG__13,
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
        $this->container['ispolzovanie_platnyh_uslug'] = isset($data['ispolzovanie_platnyh_uslug']) ? $data['ispolzovanie_platnyh_uslug'] : null;
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
     * Gets ispolzovanie_platnyh_uslug
     * @return string[]
     */
    public function getIspolzovaniePlatnyhUslug()
    {
        return $this->container['ispolzovanie_platnyh_uslug'];
    }

    /**
     * Sets ispolzovanie_platnyh_uslug
     * @param string[] $ispolzovanie_platnyh_uslug Параметр `Использование платных услуг`  * `option_0` - Авиаперелеты * `option_1` - Банковские услуги * `option_2` - Грузоперевозки * `option_3` - Медицинские услуги * `option_4` - Образовательные услуги * `option_5` - Риэлторские услуги * `option_6` - Страховые услуги * `option_7` - Туристические услуги * `option_8` - Услуги по строительству, установке и ремонту * `option_9` - Услуги прачечной/химчистки * `option_10` - Услуги салонов красоты * `option_11` - Услуги такси * `option_12` - Фитнес-клубы, спортивные залы, бассейны * `option_13` - Юридические, нотариальные услуги
     * @return $this
     */
    public function setIspolzovaniePlatnyhUslug($ispolzovanie_platnyh_uslug)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13');
        if (!in_array($ispolzovanie_platnyh_uslug, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'ispolzovanie_platnyh_uslug', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13'");
        }
        $this->container['ispolzovanie_platnyh_uslug'] = $ispolzovanie_platnyh_uslug;

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


