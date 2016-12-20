<?php
/**
 * CampaignTargetingDohodyIRashody
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Anketolog API 2.0
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CampaignTargetingDohodyIRashody Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Доходы и расходы&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingDohodyIRashody implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingDohodyIRashody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enabled' => 'bool',
        'uroven_lichnogo_dohoda_za_1_mesyac' => 'string',
        'sovokupnyy_dohod_domohozyaystva' => 'string',
        'uroven_materialnogo_blagopoluchiya' => 'string'
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
        'is_enabled' => 'is_enabled',
        'uroven_lichnogo_dohoda_za_1_mesyac' => 'uroven_lichnogo_dohoda_za_1_mesyac',
        'sovokupnyy_dohod_domohozyaystva' => 'sovokupnyy_dohod_domohozyaystva',
        'uroven_materialnogo_blagopoluchiya' => 'uroven_materialnogo_blagopoluchiya'
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
        'is_enabled' => 'setIsEnabled',
        'uroven_lichnogo_dohoda_za_1_mesyac' => 'setUrovenLichnogoDohodaZa1Mesyac',
        'sovokupnyy_dohod_domohozyaystva' => 'setSovokupnyyDohodDomohozyaystva',
        'uroven_materialnogo_blagopoluchiya' => 'setUrovenMaterialnogoBlagopoluchiya'
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
        'is_enabled' => 'getIsEnabled',
        'uroven_lichnogo_dohoda_za_1_mesyac' => 'getUrovenLichnogoDohodaZa1Mesyac',
        'sovokupnyy_dohod_domohozyaystva' => 'getSovokupnyyDohodDomohozyaystva',
        'uroven_materialnogo_blagopoluchiya' => 'getUrovenMaterialnogoBlagopoluchiya'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__0 = 'option_0';
    const UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__1 = 'option_1';
    const UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__2 = 'option_2';
    const UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__3 = 'option_3';
    const UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__4 = 'option_4';
    const UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__5 = 'option_5';
    const UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__6 = 'option_6';
    const UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__7 = 'option_7';
    const UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__8 = 'option_8';
    const UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__9 = 'option_9';
    const UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__10 = 'option_10';
    const UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__11 = 'option_11';
    const SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__0 = 'option_0';
    const SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__1 = 'option_1';
    const SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__2 = 'option_2';
    const SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__3 = 'option_3';
    const SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__4 = 'option_4';
    const SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__5 = 'option_5';
    const SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__6 = 'option_6';
    const SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__7 = 'option_7';
    const SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__8 = 'option_8';
    const SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__9 = 'option_9';
    const SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__10 = 'option_10';
    const UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__0 = 'option_0';
    const UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__1 = 'option_1';
    const UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__2 = 'option_2';
    const UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__3 = 'option_3';
    const UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__4 = 'option_4';
    const UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__5 = 'option_5';
    const UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__6 = 'option_6';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getUrovenLichnogoDohodaZa1MesyacAllowableValues()
    {
        return [
            self::UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__0,
            self::UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__1,
            self::UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__2,
            self::UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__3,
            self::UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__4,
            self::UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__5,
            self::UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__6,
            self::UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__7,
            self::UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__8,
            self::UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__9,
            self::UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__10,
            self::UROVEN_LICHNOGO_DOHODA_ZA1_MESYAC__11,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSovokupnyyDohodDomohozyaystvaAllowableValues()
    {
        return [
            self::SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__0,
            self::SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__1,
            self::SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__2,
            self::SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__3,
            self::SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__4,
            self::SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__5,
            self::SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__6,
            self::SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__7,
            self::SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__8,
            self::SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__9,
            self::SOVOKUPNYY_DOHOD_DOMOHOZYAYSTVA__10,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getUrovenMaterialnogoBlagopoluchiyaAllowableValues()
    {
        return [
            self::UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__0,
            self::UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__1,
            self::UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__2,
            self::UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__3,
            self::UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__4,
            self::UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__5,
            self::UROVEN_MATERIALNOGO_BLAGOPOLUCHIYA__6,
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
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['uroven_lichnogo_dohoda_za_1_mesyac'] = isset($data['uroven_lichnogo_dohoda_za_1_mesyac']) ? $data['uroven_lichnogo_dohoda_za_1_mesyac'] : null;
        $this->container['sovokupnyy_dohod_domohozyaystva'] = isset($data['sovokupnyy_dohod_domohozyaystva']) ? $data['sovokupnyy_dohod_domohozyaystva'] : null;
        $this->container['uroven_materialnogo_blagopoluchiya'] = isset($data['uroven_materialnogo_blagopoluchiya']) ? $data['uroven_materialnogo_blagopoluchiya'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4", "option_5", "option_6", "option_7", "option_8", "option_9", "option_10", "option_11");
        if (!in_array($this->container['uroven_lichnogo_dohoda_za_1_mesyac'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'uroven_lichnogo_dohoda_za_1_mesyac', must be one of #{allowed_values}.";
        }

        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4", "option_5", "option_6", "option_7", "option_8", "option_9", "option_10");
        if (!in_array($this->container['sovokupnyy_dohod_domohozyaystva'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'sovokupnyy_dohod_domohozyaystva', must be one of #{allowed_values}.";
        }

        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4", "option_5", "option_6");
        if (!in_array($this->container['uroven_materialnogo_blagopoluchiya'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'uroven_materialnogo_blagopoluchiya', must be one of #{allowed_values}.";
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
        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4", "option_5", "option_6", "option_7", "option_8", "option_9", "option_10", "option_11");
        if (!in_array($this->container['uroven_lichnogo_dohoda_za_1_mesyac'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4", "option_5", "option_6", "option_7", "option_8", "option_9", "option_10");
        if (!in_array($this->container['sovokupnyy_dohod_domohozyaystva'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4", "option_5", "option_6");
        if (!in_array($this->container['uroven_materialnogo_blagopoluchiya'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets is_enabled
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     * @param bool $is_enabled Группа включена
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets uroven_lichnogo_dohoda_za_1_mesyac
     * @return string
     */
    public function getUrovenLichnogoDohodaZa1Mesyac()
    {
        return $this->container['uroven_lichnogo_dohoda_za_1_mesyac'];
    }

    /**
     * Sets uroven_lichnogo_dohoda_za_1_mesyac
     * @param string $uroven_lichnogo_dohoda_za_1_mesyac Параметр `Уровень личного дохода за 1 месяц (в рублях)`  * `option_0` - менее 5 001 * `option_1` - 5 001 - 10 000 * `option_2` - 10 001 - 20 000 * `option_3` - 20 001 - 30 000 * `option_4` - 30 001 - 40 000 * `option_5` - 40 001 - 50 000 * `option_6` - 50 001 - 60 000 * `option_7` - 60 001 - 70 000 * `option_8` - 70 001 - 80 000 * `option_9` - 80 001 - 90 000 * `option_10` - 90 001 - 100 000 * `option_11` - более 100 000
     * @return $this
     */
    public function setUrovenLichnogoDohodaZa1Mesyac($uroven_lichnogo_dohoda_za_1_mesyac)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11');
        if (!in_array($uroven_lichnogo_dohoda_za_1_mesyac, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'uroven_lichnogo_dohoda_za_1_mesyac', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11'");
        }
        $this->container['uroven_lichnogo_dohoda_za_1_mesyac'] = $uroven_lichnogo_dohoda_za_1_mesyac;

        return $this;
    }

    /**
     * Gets sovokupnyy_dohod_domohozyaystva
     * @return string
     */
    public function getSovokupnyyDohodDomohozyaystva()
    {
        return $this->container['sovokupnyy_dohod_domohozyaystva'];
    }

    /**
     * Sets sovokupnyy_dohod_domohozyaystva
     * @param string $sovokupnyy_dohod_domohozyaystva Параметр `Совокупный среднемесячный доход домохозяйства (без вычета расходов, в рублях)`  * `option_0` - менее 36 001 * `option_1` - 36 001 - 60 000 * `option_2` - 60 001 - 100 000 * `option_3` - 100 001 - 150 000 * `option_4` - 150 001 - 240 000 * `option_5` - 240 001 - 360 000 * `option_6` - 360 001 - 480 000 * `option_7` - 480 001 - 660 000 * `option_8` - 660 001 - 840 000 * `option_9` - 840 001 - 1 200 000 * `option_10` - более 1 200 000
     * @return $this
     */
    public function setSovokupnyyDohodDomohozyaystva($sovokupnyy_dohod_domohozyaystva)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10');
        if (!in_array($sovokupnyy_dohod_domohozyaystva, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'sovokupnyy_dohod_domohozyaystva', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10'");
        }
        $this->container['sovokupnyy_dohod_domohozyaystva'] = $sovokupnyy_dohod_domohozyaystva;

        return $this;
    }

    /**
     * Gets uroven_materialnogo_blagopoluchiya
     * @return string
     */
    public function getUrovenMaterialnogoBlagopoluchiya()
    {
        return $this->container['uroven_materialnogo_blagopoluchiya'];
    }

    /**
     * Sets uroven_materialnogo_blagopoluchiya
     * @param string $uroven_materialnogo_blagopoluchiya Параметр `Уровень материального благополучия`  * `option_0` - Не хватает денег на еду * `option_1` - Хватает денег на еду, но есть проблемы с покупкой одежды * `option_2` - Хватает денег на еду и одежду, но не хватает на покупку мебели и бытовой техники * `option_3` - Могут без проблем купить мебель и бытовую технику, но не могут купить автомобиль без длительных накоплений * `option_4` - Могут купить автомобиль, но не могут купить квартиру или дачу * `option_5` - Без проблем могут купить квартиру или дачу * `option_6` - Денег достаточно, чтобы вообще ни в чем себе не отказывать
     * @return $this
     */
    public function setUrovenMaterialnogoBlagopoluchiya($uroven_materialnogo_blagopoluchiya)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6');
        if (!in_array($uroven_materialnogo_blagopoluchiya, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'uroven_materialnogo_blagopoluchiya', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6'");
        }
        $this->container['uroven_materialnogo_blagopoluchiya'] = $uroven_materialnogo_blagopoluchiya;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


