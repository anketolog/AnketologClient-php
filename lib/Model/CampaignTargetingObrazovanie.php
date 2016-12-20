<?php
/**
 * CampaignTargetingObrazovanie
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
 * ### Клиенты:  * [**PHP**](https://github.com/anketolog/AnketologClient-php)  ### Клиенты на других языках:  * Скачайте конфигурационный [swagger-файл](https://anketolog.ru/api/external/v2/docs/Anketolog.yaml) * Воспользуйтесь официальным [генератором](http://swagger.io/swagger-codegen/)   ([список поддерживаемых языков](https://github.com/swagger-api/swagger-codegen#api-clients))
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
 * CampaignTargetingObrazovanie Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Образование&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingObrazovanie implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingObrazovanie';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'uroven_obrazovaniya' => 'string[]',
        'vladenie_inostrannymi_yazykami' => 'string[]'
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
        'uroven_obrazovaniya' => 'uroven_obrazovaniya',
        'vladenie_inostrannymi_yazykami' => 'vladenie_inostrannymi_yazykami'
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
        'uroven_obrazovaniya' => 'setUrovenObrazovaniya',
        'vladenie_inostrannymi_yazykami' => 'setVladenieInostrannymiYazykami'
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
        'uroven_obrazovaniya' => 'getUrovenObrazovaniya',
        'vladenie_inostrannymi_yazykami' => 'getVladenieInostrannymiYazykami'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const UROVEN_OBRAZOVANIYA__0 = 'option_0';
    const UROVEN_OBRAZOVANIYA__1 = 'option_1';
    const UROVEN_OBRAZOVANIYA__2 = 'option_2';
    const UROVEN_OBRAZOVANIYA__3 = 'option_3';
    const UROVEN_OBRAZOVANIYA__4 = 'option_4';
    const UROVEN_OBRAZOVANIYA__5 = 'option_5';
    const UROVEN_OBRAZOVANIYA__6 = 'option_6';
    const UROVEN_OBRAZOVANIYA__7 = 'option_7';
    const VLADENIE_INOSTRANNYMI_YAZYKAMI__0 = 'option_0';
    const VLADENIE_INOSTRANNYMI_YAZYKAMI__1 = 'option_1';
    const VLADENIE_INOSTRANNYMI_YAZYKAMI__2 = 'option_2';
    const VLADENIE_INOSTRANNYMI_YAZYKAMI__3 = 'option_3';
    const VLADENIE_INOSTRANNYMI_YAZYKAMI__4 = 'option_4';
    const VLADENIE_INOSTRANNYMI_YAZYKAMI__5 = 'option_5';
    const VLADENIE_INOSTRANNYMI_YAZYKAMI__6 = 'option_6';
    const VLADENIE_INOSTRANNYMI_YAZYKAMI__7 = 'option_7';
    const VLADENIE_INOSTRANNYMI_YAZYKAMI__8 = 'option_8';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getUrovenObrazovaniyaAllowableValues()
    {
        return [
            self::UROVEN_OBRAZOVANIYA__0,
            self::UROVEN_OBRAZOVANIYA__1,
            self::UROVEN_OBRAZOVANIYA__2,
            self::UROVEN_OBRAZOVANIYA__3,
            self::UROVEN_OBRAZOVANIYA__4,
            self::UROVEN_OBRAZOVANIYA__5,
            self::UROVEN_OBRAZOVANIYA__6,
            self::UROVEN_OBRAZOVANIYA__7,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getVladenieInostrannymiYazykamiAllowableValues()
    {
        return [
            self::VLADENIE_INOSTRANNYMI_YAZYKAMI__0,
            self::VLADENIE_INOSTRANNYMI_YAZYKAMI__1,
            self::VLADENIE_INOSTRANNYMI_YAZYKAMI__2,
            self::VLADENIE_INOSTRANNYMI_YAZYKAMI__3,
            self::VLADENIE_INOSTRANNYMI_YAZYKAMI__4,
            self::VLADENIE_INOSTRANNYMI_YAZYKAMI__5,
            self::VLADENIE_INOSTRANNYMI_YAZYKAMI__6,
            self::VLADENIE_INOSTRANNYMI_YAZYKAMI__7,
            self::VLADENIE_INOSTRANNYMI_YAZYKAMI__8,
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
        $this->container['uroven_obrazovaniya'] = isset($data['uroven_obrazovaniya']) ? $data['uroven_obrazovaniya'] : null;
        $this->container['vladenie_inostrannymi_yazykami'] = isset($data['vladenie_inostrannymi_yazykami']) ? $data['vladenie_inostrannymi_yazykami'] : null;
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
     * Gets uroven_obrazovaniya
     * @return string[]
     */
    public function getUrovenObrazovaniya()
    {
        return $this->container['uroven_obrazovaniya'];
    }

    /**
     * Sets uroven_obrazovaniya
     * @param string[] $uroven_obrazovaniya Параметр `Уровень образования`  * `option_0` - без образования * `option_1` - неполное среднее * `option_2` - среднее * `option_3` - среднее специальное * `option_4` - неполное высшее * `option_5` - высшее * `option_6` - два и более высших * `option_7` - ученая степень
     * @return $this
     */
    public function setUrovenObrazovaniya($uroven_obrazovaniya)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7');
        if (!in_array($uroven_obrazovaniya, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'uroven_obrazovaniya', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7'");
        }
        $this->container['uroven_obrazovaniya'] = $uroven_obrazovaniya;

        return $this;
    }

    /**
     * Gets vladenie_inostrannymi_yazykami
     * @return string[]
     */
    public function getVladenieInostrannymiYazykami()
    {
        return $this->container['vladenie_inostrannymi_yazykami'];
    }

    /**
     * Sets vladenie_inostrannymi_yazykami
     * @param string[] $vladenie_inostrannymi_yazykami Параметр `Владение иностранными языками`  * `option_0` - английский * `option_1` - итальянский * `option_2` - испанский * `option_3` - китайский * `option_4` - немецкий * `option_5` - русский * `option_6` - украинский * `option_7` - французский * `option_8` - японский
     * @return $this
     */
    public function setVladenieInostrannymiYazykami($vladenie_inostrannymi_yazykami)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8');
        if (!in_array($vladenie_inostrannymi_yazykami, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'vladenie_inostrannymi_yazykami', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8'");
        }
        $this->container['vladenie_inostrannymi_yazykami'] = $vladenie_inostrannymi_yazykami;

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


