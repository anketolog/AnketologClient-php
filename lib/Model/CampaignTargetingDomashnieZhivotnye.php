<?php
/**
 * CampaignTargetingDomashnieZhivotnye
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
 * CampaignTargetingDomashnieZhivotnye Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Домашние животные&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingDomashnieZhivotnye implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingDomashnieZhivotnye';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enabled' => 'bool',
        'nalichie_domashnih_zhivotnyh' => 'string',
        'vid_domashnego_zhivotnogo' => 'string',
        'ispolzovanie_kormov' => 'string',
        'polzovalis_uslugami_vetklinik' => 'string'
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
        'nalichie_domashnih_zhivotnyh' => 'nalichie_domashnih_zhivotnyh',
        'vid_domashnego_zhivotnogo' => 'vid_domashnego_zhivotnogo',
        'ispolzovanie_kormov' => 'ispolzovanie_kormov',
        'polzovalis_uslugami_vetklinik' => 'polzovalis_uslugami_vetklinik'
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
        'nalichie_domashnih_zhivotnyh' => 'setNalichieDomashnihZhivotnyh',
        'vid_domashnego_zhivotnogo' => 'setVidDomashnegoZhivotnogo',
        'ispolzovanie_kormov' => 'setIspolzovanieKormov',
        'polzovalis_uslugami_vetklinik' => 'setPolzovalisUslugamiVetklinik'
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
        'nalichie_domashnih_zhivotnyh' => 'getNalichieDomashnihZhivotnyh',
        'vid_domashnego_zhivotnogo' => 'getVidDomashnegoZhivotnogo',
        'ispolzovanie_kormov' => 'getIspolzovanieKormov',
        'polzovalis_uslugami_vetklinik' => 'getPolzovalisUslugamiVetklinik'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const NALICHIE_DOMASHNIH_ZHIVOTNYH__0 = 'option_0';
    const NALICHIE_DOMASHNIH_ZHIVOTNYH__1 = 'option_1';
    const VID_DOMASHNEGO_ZHIVOTNOGO__0 = 'option_0';
    const VID_DOMASHNEGO_ZHIVOTNOGO__1 = 'option_1';
    const VID_DOMASHNEGO_ZHIVOTNOGO__2 = 'option_2';
    const VID_DOMASHNEGO_ZHIVOTNOGO__3 = 'option_3';
    const VID_DOMASHNEGO_ZHIVOTNOGO__4 = 'option_4';
    const VID_DOMASHNEGO_ZHIVOTNOGO__5 = 'option_5';
    const VID_DOMASHNEGO_ZHIVOTNOGO__6 = 'option_6';
    const VID_DOMASHNEGO_ZHIVOTNOGO__7 = 'option_7';
    const VID_DOMASHNEGO_ZHIVOTNOGO__8 = 'option_8';
    const ISPOLZOVANIE_KORMOV__0 = 'option_0';
    const ISPOLZOVANIE_KORMOV__1 = 'option_1';
    const ISPOLZOVANIE_KORMOV__2 = 'option_2';
    const ISPOLZOVANIE_KORMOV__3 = 'option_3';
    const ISPOLZOVANIE_KORMOV__4 = 'option_4';
    const POLZOVALIS_USLUGAMI_VETKLINIK__0 = 'option_0';
    const POLZOVALIS_USLUGAMI_VETKLINIK__1 = 'option_1';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNalichieDomashnihZhivotnyhAllowableValues()
    {
        return [
            self::NALICHIE_DOMASHNIH_ZHIVOTNYH__0,
            self::NALICHIE_DOMASHNIH_ZHIVOTNYH__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getVidDomashnegoZhivotnogoAllowableValues()
    {
        return [
            self::VID_DOMASHNEGO_ZHIVOTNOGO__0,
            self::VID_DOMASHNEGO_ZHIVOTNOGO__1,
            self::VID_DOMASHNEGO_ZHIVOTNOGO__2,
            self::VID_DOMASHNEGO_ZHIVOTNOGO__3,
            self::VID_DOMASHNEGO_ZHIVOTNOGO__4,
            self::VID_DOMASHNEGO_ZHIVOTNOGO__5,
            self::VID_DOMASHNEGO_ZHIVOTNOGO__6,
            self::VID_DOMASHNEGO_ZHIVOTNOGO__7,
            self::VID_DOMASHNEGO_ZHIVOTNOGO__8,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getIspolzovanieKormovAllowableValues()
    {
        return [
            self::ISPOLZOVANIE_KORMOV__0,
            self::ISPOLZOVANIE_KORMOV__1,
            self::ISPOLZOVANIE_KORMOV__2,
            self::ISPOLZOVANIE_KORMOV__3,
            self::ISPOLZOVANIE_KORMOV__4,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPolzovalisUslugamiVetklinikAllowableValues()
    {
        return [
            self::POLZOVALIS_USLUGAMI_VETKLINIK__0,
            self::POLZOVALIS_USLUGAMI_VETKLINIK__1,
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
        $this->container['nalichie_domashnih_zhivotnyh'] = isset($data['nalichie_domashnih_zhivotnyh']) ? $data['nalichie_domashnih_zhivotnyh'] : null;
        $this->container['vid_domashnego_zhivotnogo'] = isset($data['vid_domashnego_zhivotnogo']) ? $data['vid_domashnego_zhivotnogo'] : null;
        $this->container['ispolzovanie_kormov'] = isset($data['ispolzovanie_kormov']) ? $data['ispolzovanie_kormov'] : null;
        $this->container['polzovalis_uslugami_vetklinik'] = isset($data['polzovalis_uslugami_vetklinik']) ? $data['polzovalis_uslugami_vetklinik'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("option_0", "option_1");
        if (!in_array($this->container['nalichie_domashnih_zhivotnyh'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'nalichie_domashnih_zhivotnyh', must be one of #{allowed_values}.";
        }

        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4", "option_5", "option_6", "option_7", "option_8");
        if (!in_array($this->container['vid_domashnego_zhivotnogo'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'vid_domashnego_zhivotnogo', must be one of #{allowed_values}.";
        }

        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4");
        if (!in_array($this->container['ispolzovanie_kormov'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'ispolzovanie_kormov', must be one of #{allowed_values}.";
        }

        $allowed_values = array("option_0", "option_1");
        if (!in_array($this->container['polzovalis_uslugami_vetklinik'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'polzovalis_uslugami_vetklinik', must be one of #{allowed_values}.";
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
        $allowed_values = array("option_0", "option_1");
        if (!in_array($this->container['nalichie_domashnih_zhivotnyh'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4", "option_5", "option_6", "option_7", "option_8");
        if (!in_array($this->container['vid_domashnego_zhivotnogo'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4");
        if (!in_array($this->container['ispolzovanie_kormov'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("option_0", "option_1");
        if (!in_array($this->container['polzovalis_uslugami_vetklinik'], $allowed_values)) {
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
     * Gets nalichie_domashnih_zhivotnyh
     * @return string
     */
    public function getNalichieDomashnihZhivotnyh()
    {
        return $this->container['nalichie_domashnih_zhivotnyh'];
    }

    /**
     * Sets nalichie_domashnih_zhivotnyh
     * @param string $nalichie_domashnih_zhivotnyh Параметр `Наличие домашних животных`  * `option_0` - есть * `option_1` - нет
     * @return $this
     */
    public function setNalichieDomashnihZhivotnyh($nalichie_domashnih_zhivotnyh)
    {
        $allowed_values = array('option_0', 'option_1');
        if (!in_array($nalichie_domashnih_zhivotnyh, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'nalichie_domashnih_zhivotnyh', must be one of 'option_0', 'option_1'");
        }
        $this->container['nalichie_domashnih_zhivotnyh'] = $nalichie_domashnih_zhivotnyh;

        return $this;
    }

    /**
     * Gets vid_domashnego_zhivotnogo
     * @return string
     */
    public function getVidDomashnegoZhivotnogo()
    {
        return $this->container['vid_domashnego_zhivotnogo'];
    }

    /**
     * Sets vid_domashnego_zhivotnogo
     * @param string $vid_domashnego_zhivotnogo Параметр `Вид домашнего животного`  * `option_0` - Кошка * `option_1` - Собака * `option_2` - Грызун * `option_3` - Декоративный кролик * `option_4` - Попугай * `option_5` - Другая птица * `option_6` - Аквариумные рыбки * `option_7` - Рептилия * `option_8` - Насекомое
     * @return $this
     */
    public function setVidDomashnegoZhivotnogo($vid_domashnego_zhivotnogo)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8');
        if (!in_array($vid_domashnego_zhivotnogo, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'vid_domashnego_zhivotnogo', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8'");
        }
        $this->container['vid_domashnego_zhivotnogo'] = $vid_domashnego_zhivotnogo;

        return $this;
    }

    /**
     * Gets ispolzovanie_kormov
     * @return string
     */
    public function getIspolzovanieKormov()
    {
        return $this->container['ispolzovanie_kormov'];
    }

    /**
     * Sets ispolzovanie_kormov
     * @param string $ispolzovanie_kormov Параметр `Использование кормов для животных`  * `option_0` - корм на развес * `option_1` - корм в фирменной упаковке * `option_2` - корм премиум-класса * `option_3` - лечебный корм * `option_4` - натуральная пища
     * @return $this
     */
    public function setIspolzovanieKormov($ispolzovanie_kormov)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4');
        if (!in_array($ispolzovanie_kormov, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'ispolzovanie_kormov', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4'");
        }
        $this->container['ispolzovanie_kormov'] = $ispolzovanie_kormov;

        return $this;
    }

    /**
     * Gets polzovalis_uslugami_vetklinik
     * @return string
     */
    public function getPolzovalisUslugamiVetklinik()
    {
        return $this->container['polzovalis_uslugami_vetklinik'];
    }

    /**
     * Sets polzovalis_uslugami_vetklinik
     * @param string $polzovalis_uslugami_vetklinik Параметр `Пользование услугами ветеринарных врачей/клиник`  * `option_0` - Да * `option_1` - Нет
     * @return $this
     */
    public function setPolzovalisUslugamiVetklinik($polzovalis_uslugami_vetklinik)
    {
        $allowed_values = array('option_0', 'option_1');
        if (!in_array($polzovalis_uslugami_vetklinik, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'polzovalis_uslugami_vetklinik', must be one of 'option_0', 'option_1'");
        }
        $this->container['polzovalis_uslugami_vetklinik'] = $polzovalis_uslugami_vetklinik;

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


