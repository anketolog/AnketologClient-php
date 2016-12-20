<?php
/**
 * CampaignTargetingPeredvizheniePoGorodu
 *
 * PHP version 5
 *
 * @category Class
 * @package  Anketolog
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Anketolog API v2.0
 *
 * ### Клиенты:  * [**PHP**](https://github.com/anketolog/AnketologClient-php)  ### Клиенты на других языках:  * Скачайте конфигурационный [swagger-файл](https://anketolog.ru/api/external/v2/docs2/Api.yaml) * Воспользуйтесь официальным [генератором](http://swagger.io/swagger-codegen/)   ([список поддерживаемых языков](https://github.com/swagger-api/swagger-codegen#api-clients))
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

namespace Anketolog\Model;

use \ArrayAccess;

/**
 * CampaignTargetingPeredvizheniePoGorodu Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Передвижение по городу&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     Anketolog
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingPeredvizheniePoGorodu implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingPeredvizheniePoGorodu';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'ispolzovanie_transporta' => 'string[]'
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
        'ispolzovanie_transporta' => 'ispolzovanie_transporta'
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
        'ispolzovanie_transporta' => 'setIspolzovanieTransporta'
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
        'ispolzovanie_transporta' => 'getIspolzovanieTransporta'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const ISPOLZOVANIE_TRANSPORTA__0 = 'option_0';
    const ISPOLZOVANIE_TRANSPORTA__1 = 'option_1';
    const ISPOLZOVANIE_TRANSPORTA__2 = 'option_2';
    const ISPOLZOVANIE_TRANSPORTA__3 = 'option_3';
    const ISPOLZOVANIE_TRANSPORTA__4 = 'option_4';
    const ISPOLZOVANIE_TRANSPORTA__5 = 'option_5';
    const ISPOLZOVANIE_TRANSPORTA__6 = 'option_6';
    const ISPOLZOVANIE_TRANSPORTA__7 = 'option_7';
    const ISPOLZOVANIE_TRANSPORTA__8 = 'option_8';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getIspolzovanieTransportaAllowableValues()
    {
        return [
            self::ISPOLZOVANIE_TRANSPORTA__0,
            self::ISPOLZOVANIE_TRANSPORTA__1,
            self::ISPOLZOVANIE_TRANSPORTA__2,
            self::ISPOLZOVANIE_TRANSPORTA__3,
            self::ISPOLZOVANIE_TRANSPORTA__4,
            self::ISPOLZOVANIE_TRANSPORTA__5,
            self::ISPOLZOVANIE_TRANSPORTA__6,
            self::ISPOLZOVANIE_TRANSPORTA__7,
            self::ISPOLZOVANIE_TRANSPORTA__8,
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
        $this->container['ispolzovanie_transporta'] = isset($data['ispolzovanie_transporta']) ? $data['ispolzovanie_transporta'] : null;
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
     * Gets ispolzovanie_transporta
     * @return string[]
     */
    public function getIspolzovanieTransporta()
    {
        return $this->container['ispolzovanie_transporta'];
    }

    /**
     * Sets ispolzovanie_transporta
     * @param string[] $ispolzovanie_transporta Параметр `Использование транспорта`  * `option_0` - Автобус * `option_1` - Велосипед * `option_2` - Личный автомобиль * `option_3` - Метро * `option_4` - Мопед * `option_5` - Мотоцикл * `option_6` - Такси * `option_7` - Трамвай * `option_8` - Троллейбус
     * @return $this
     */
    public function setIspolzovanieTransporta($ispolzovanie_transporta)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8');
        if (!in_array($ispolzovanie_transporta, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'ispolzovanie_transporta', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8'");
        }
        $this->container['ispolzovanie_transporta'] = $ispolzovanie_transporta;

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
            return json_encode(\Anketolog\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Anketolog\ObjectSerializer::sanitizeForSerialization($this));
    }
}


