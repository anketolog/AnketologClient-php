<?php
/**
 * CampaignTargetingUvlecheniyaIInteresy
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
 * CampaignTargetingUvlecheniyaIInteresy Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Увлечения и интересы&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingUvlecheniyaIInteresy implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingUvlecheniyaIInteresy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'nalichie_hobbi' => 'string[]',
        'uvlecheniya' => 'string[]'
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
        'nalichie_hobbi' => 'nalichie_hobbi',
        'uvlecheniya' => 'uvlecheniya'
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
        'nalichie_hobbi' => 'setNalichieHobbi',
        'uvlecheniya' => 'setUvlecheniya'
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
        'nalichie_hobbi' => 'getNalichieHobbi',
        'uvlecheniya' => 'getUvlecheniya'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const NALICHIE_HOBBI__0 = 'option_0';
    const NALICHIE_HOBBI__1 = 'option_1';
    const UVLECHENIYA__0 = 'option_0';
    const UVLECHENIYA__1 = 'option_1';
    const UVLECHENIYA__2 = 'option_2';
    const UVLECHENIYA__3 = 'option_3';
    const UVLECHENIYA__4 = 'option_4';
    const UVLECHENIYA__5 = 'option_5';
    const UVLECHENIYA__6 = 'option_6';
    const UVLECHENIYA__7 = 'option_7';
    const UVLECHENIYA__8 = 'option_8';
    const UVLECHENIYA__9 = 'option_9';
    const UVLECHENIYA__10 = 'option_10';
    const UVLECHENIYA__11 = 'option_11';
    const UVLECHENIYA__12 = 'option_12';
    const UVLECHENIYA__13 = 'option_13';
    const UVLECHENIYA__14 = 'option_14';
    const UVLECHENIYA__15 = 'option_15';
    const UVLECHENIYA__16 = 'option_16';
    const UVLECHENIYA__17 = 'option_17';
    const UVLECHENIYA__18 = 'option_18';
    const UVLECHENIYA__19 = 'option_19';
    const UVLECHENIYA__20 = 'option_20';
    const UVLECHENIYA__21 = 'option_21';
    const UVLECHENIYA__22 = 'option_22';
    const UVLECHENIYA__23 = 'option_23';
    const UVLECHENIYA__24 = 'option_24';
    const UVLECHENIYA__25 = 'option_25';
    const UVLECHENIYA__26 = 'option_26';
    const UVLECHENIYA__27 = 'option_27';
    const UVLECHENIYA__28 = 'option_28';
    const UVLECHENIYA__29 = 'option_29';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNalichieHobbiAllowableValues()
    {
        return [
            self::NALICHIE_HOBBI__0,
            self::NALICHIE_HOBBI__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getUvlecheniyaAllowableValues()
    {
        return [
            self::UVLECHENIYA__0,
            self::UVLECHENIYA__1,
            self::UVLECHENIYA__2,
            self::UVLECHENIYA__3,
            self::UVLECHENIYA__4,
            self::UVLECHENIYA__5,
            self::UVLECHENIYA__6,
            self::UVLECHENIYA__7,
            self::UVLECHENIYA__8,
            self::UVLECHENIYA__9,
            self::UVLECHENIYA__10,
            self::UVLECHENIYA__11,
            self::UVLECHENIYA__12,
            self::UVLECHENIYA__13,
            self::UVLECHENIYA__14,
            self::UVLECHENIYA__15,
            self::UVLECHENIYA__16,
            self::UVLECHENIYA__17,
            self::UVLECHENIYA__18,
            self::UVLECHENIYA__19,
            self::UVLECHENIYA__20,
            self::UVLECHENIYA__21,
            self::UVLECHENIYA__22,
            self::UVLECHENIYA__23,
            self::UVLECHENIYA__24,
            self::UVLECHENIYA__25,
            self::UVLECHENIYA__26,
            self::UVLECHENIYA__27,
            self::UVLECHENIYA__28,
            self::UVLECHENIYA__29,
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
        $this->container['nalichie_hobbi'] = isset($data['nalichie_hobbi']) ? $data['nalichie_hobbi'] : null;
        $this->container['uvlecheniya'] = isset($data['uvlecheniya']) ? $data['uvlecheniya'] : null;
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
     * Gets nalichie_hobbi
     * @return string[]
     */
    public function getNalichieHobbi()
    {
        return $this->container['nalichie_hobbi'];
    }

    /**
     * Sets nalichie_hobbi
     * @param string[] $nalichie_hobbi Параметр `Наличие хобби`  * `option_0` - есть * `option_1` - нет
     * @return $this
     */
    public function setNalichieHobbi($nalichie_hobbi)
    {
        $allowed_values = array('option_0', 'option_1');
        if (!in_array($nalichie_hobbi, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'nalichie_hobbi', must be one of 'option_0', 'option_1'");
        }
        $this->container['nalichie_hobbi'] = $nalichie_hobbi;

        return $this;
    }

    /**
     * Gets uvlecheniya
     * @return string[]
     */
    public function getUvlecheniya()
    {
        return $this->container['uvlecheniya'];
    }

    /**
     * Sets uvlecheniya
     * @param string[] $uvlecheniya Параметр `Увлечения`  * `option_0` - Анимация * `option_1` - Деревообработка * `option_2` - Дизайн * `option_3` - Игра на музыкальном инструменте * `option_4` - Изучение иностранных языков * `option_5` - Коллекционирование * `option_6` - Компьютерные игры * `option_7` - Кулинария * `option_8` - Любительская астрономия * `option_9` - Моделизм * `option_10` - Настольные игры (шашки, шахматы, лото и пр.) * `option_11` - Охота и рыбалка * `option_12` - Пейнтбол * `option_13` - Пение * `option_14` - Писательство (пишу стихи, художественные произведения) * `option_15` - Пошив одежды, обуви, изготовление аксессуаров * `option_16` - Программирование * `option_17` - Прослушивание музыки * `option_18` - Путешествия * `option_19` - Рисование * `option_20` - Ролевые игры, исторические реконструкции * `option_21` - Рукоделие (вязание, плетение, декорирование, лепка и т. п.) * `option_22` - Садоводство * `option_23` - Спорт (в т. ч. коньки, лыжи, скейтбординг, бодибилдинг) * `option_24` - Страйкбол * `option_25` - Танцы * `option_26` - Театр (игра в любительском театре, пантомимы) * `option_27` - Уход за домашними животными, разведение * `option_28` - Фотография * `option_29` - Чтение книг/ иной печатной продукции
     * @return $this
     */
    public function setUvlecheniya($uvlecheniya)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15', 'option_16', 'option_17', 'option_18', 'option_19', 'option_20', 'option_21', 'option_22', 'option_23', 'option_24', 'option_25', 'option_26', 'option_27', 'option_28', 'option_29');
        if (!in_array($uvlecheniya, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'uvlecheniya', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15', 'option_16', 'option_17', 'option_18', 'option_19', 'option_20', 'option_21', 'option_22', 'option_23', 'option_24', 'option_25', 'option_26', 'option_27', 'option_28', 'option_29'");
        }
        $this->container['uvlecheniya'] = $uvlecheniya;

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


