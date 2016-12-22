<?php
/**
 * CampaignTargetingOdezhdaObuv
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
 * CampaignTargetingOdezhdaObuv Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Одежда, обувь&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingOdezhdaObuv implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingOdezhdaObuv';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'mesta_i_sposoby_priobreteniya_odezhdy' => 'string[]',
        'pokupka_odezhdy' => 'string[]'
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
        'mesta_i_sposoby_priobreteniya_odezhdy' => 'mesta_i_sposoby_priobreteniya_odezhdy',
        'pokupka_odezhdy' => 'pokupka_odezhdy'
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
        'mesta_i_sposoby_priobreteniya_odezhdy' => 'setMestaISposobyPriobreteniyaOdezhdy',
        'pokupka_odezhdy' => 'setPokupkaOdezhdy'
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
        'mesta_i_sposoby_priobreteniya_odezhdy' => 'getMestaISposobyPriobreteniyaOdezhdy',
        'pokupka_odezhdy' => 'getPokupkaOdezhdy'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__0 = 'option_0';
    const MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__1 = 'option_1';
    const MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__2 = 'option_2';
    const MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__3 = 'option_3';
    const MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__4 = 'option_4';
    const MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__5 = 'option_5';
    const MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__6 = 'option_6';
    const MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__7 = 'option_7';
    const MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__8 = 'option_8';
    const MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__9 = 'option_9';
    const MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__10 = 'option_10';
    const MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__11 = 'option_11';
    const POKUPKA_ODEZHDY__0 = 'option_0';
    const POKUPKA_ODEZHDY__1 = 'option_1';
    const POKUPKA_ODEZHDY__2 = 'option_2';
    const POKUPKA_ODEZHDY__3 = 'option_3';
    const POKUPKA_ODEZHDY__4 = 'option_4';
    const POKUPKA_ODEZHDY__5 = 'option_5';
    const POKUPKA_ODEZHDY__6 = 'option_6';
    const POKUPKA_ODEZHDY__7 = 'option_7';
    const POKUPKA_ODEZHDY__8 = 'option_8';
    const POKUPKA_ODEZHDY__9 = 'option_9';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getMestaISposobyPriobreteniyaOdezhdyAllowableValues()
    {
        return [
            self::MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__0,
            self::MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__1,
            self::MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__2,
            self::MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__3,
            self::MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__4,
            self::MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__5,
            self::MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__6,
            self::MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__7,
            self::MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__8,
            self::MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__9,
            self::MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__10,
            self::MESTA_I_SPOSOBY_PRIOBRETENIYA_ODEZHDY__11,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPokupkaOdezhdyAllowableValues()
    {
        return [
            self::POKUPKA_ODEZHDY__0,
            self::POKUPKA_ODEZHDY__1,
            self::POKUPKA_ODEZHDY__2,
            self::POKUPKA_ODEZHDY__3,
            self::POKUPKA_ODEZHDY__4,
            self::POKUPKA_ODEZHDY__5,
            self::POKUPKA_ODEZHDY__6,
            self::POKUPKA_ODEZHDY__7,
            self::POKUPKA_ODEZHDY__8,
            self::POKUPKA_ODEZHDY__9,
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
        $this->container['mesta_i_sposoby_priobreteniya_odezhdy'] = isset($data['mesta_i_sposoby_priobreteniya_odezhdy']) ? $data['mesta_i_sposoby_priobreteniya_odezhdy'] : null;
        $this->container['pokupka_odezhdy'] = isset($data['pokupka_odezhdy']) ? $data['pokupka_odezhdy'] : null;
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
     * Gets mesta_i_sposoby_priobreteniya_odezhdy
     * @return string[]
     */
    public function getMestaISposobyPriobreteniyaOdezhdy()
    {
        return $this->container['mesta_i_sposoby_priobreteniya_odezhdy'];
    }

    /**
     * Sets mesta_i_sposoby_priobreteniya_odezhdy
     * @param string[] $mesta_i_sposoby_priobreteniya_odezhdy Параметр `Места и способы приобретения одежды`  * `option_0` - торговые центры * `option_1` - фирменные магазины (расположенные не в ТЦ) * `option_2` - бутики * `option_3` - гипермаркеты * `option_4` - интернет-магазины и каталоги * `option_5` - сток-центры * `option_6` - секонд-хенды * `option_7` - сайты частных объявлений * `option_8` - вещевые рынки * `option_9` - шьет сам(а) * `option_10` - шьет в ателье * `option_11` - привозит из-за границы
     * @return $this
     */
    public function setMestaISposobyPriobreteniyaOdezhdy($mesta_i_sposoby_priobreteniya_odezhdy)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11');
        if (!in_array($mesta_i_sposoby_priobreteniya_odezhdy, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'mesta_i_sposoby_priobreteniya_odezhdy', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11'");
        }
        $this->container['mesta_i_sposoby_priobreteniya_odezhdy'] = $mesta_i_sposoby_priobreteniya_odezhdy;

        return $this;
    }

    /**
     * Gets pokupka_odezhdy
     * @return string[]
     */
    public function getPokupkaOdezhdy()
    {
        return $this->container['pokupka_odezhdy'];
    }

    /**
     * Sets pokupka_odezhdy
     * @param string[] $pokupka_odezhdy Параметр `Покупка одежды`  * `option_0` - домашняя одежда * `option_1` - повседневная одежда * `option_2` - выходная одежда * `option_3` - производственная одежда * `option_4` - униформа * `option_5` - спортивная одежда * `option_6` - головные уборы * `option_7` - повседневная обувь * `option_8` - спортивная обувь * `option_9` - аксессуары
     * @return $this
     */
    public function setPokupkaOdezhdy($pokupka_odezhdy)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9');
        if (!in_array($pokupka_odezhdy, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'pokupka_odezhdy', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9'");
        }
        $this->container['pokupka_odezhdy'] = $pokupka_odezhdy;

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


