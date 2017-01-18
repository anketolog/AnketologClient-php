<?php
/**
 * CampaignTargetingProduktyPitaniyaIAlkogol
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
 * CampaignTargetingProduktyPitaniyaIAlkogol Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Продукты питания и алкоголь&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingProduktyPitaniyaIAlkogol implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingProduktyPitaniyaIAlkogol';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'pokupka_produktov_pitaniya' => 'string[]',
        'pokupka_alkogolya' => 'string[]'
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
        'pokupka_produktov_pitaniya' => 'pokupka_produktov_pitaniya',
        'pokupka_alkogolya' => 'pokupka_alkogolya'
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
        'pokupka_produktov_pitaniya' => 'setPokupkaProduktovPitaniya',
        'pokupka_alkogolya' => 'setPokupkaAlkogolya'
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
        'pokupka_produktov_pitaniya' => 'getPokupkaProduktovPitaniya',
        'pokupka_alkogolya' => 'getPokupkaAlkogolya'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const POKUPKA_PRODUKTOV_PITANIYA__0 = 'option_0';
    const POKUPKA_PRODUKTOV_PITANIYA__1 = 'option_1';
    const POKUPKA_PRODUKTOV_PITANIYA__2 = 'option_2';
    const POKUPKA_PRODUKTOV_PITANIYA__3 = 'option_3';
    const POKUPKA_PRODUKTOV_PITANIYA__4 = 'option_4';
    const POKUPKA_PRODUKTOV_PITANIYA__5 = 'option_5';
    const POKUPKA_PRODUKTOV_PITANIYA__6 = 'option_6';
    const POKUPKA_PRODUKTOV_PITANIYA__7 = 'option_7';
    const POKUPKA_PRODUKTOV_PITANIYA__8 = 'option_8';
    const POKUPKA_PRODUKTOV_PITANIYA__9 = 'option_9';
    const POKUPKA_PRODUKTOV_PITANIYA__10 = 'option_10';
    const POKUPKA_PRODUKTOV_PITANIYA__11 = 'option_11';
    const POKUPKA_PRODUKTOV_PITANIYA__12 = 'option_12';
    const POKUPKA_PRODUKTOV_PITANIYA__13 = 'option_13';
    const POKUPKA_PRODUKTOV_PITANIYA__14 = 'option_14';
    const POKUPKA_PRODUKTOV_PITANIYA__15 = 'option_15';
    const POKUPKA_PRODUKTOV_PITANIYA__16 = 'option_16';
    const POKUPKA_PRODUKTOV_PITANIYA__17 = 'option_17';
    const POKUPKA_PRODUKTOV_PITANIYA__18 = 'option_18';
    const POKUPKA_PRODUKTOV_PITANIYA__19 = 'option_19';
    const POKUPKA_PRODUKTOV_PITANIYA__20 = 'option_20';
    const POKUPKA_PRODUKTOV_PITANIYA__21 = 'option_21';
    const POKUPKA_PRODUKTOV_PITANIYA__22 = 'option_22';
    const POKUPKA_PRODUKTOV_PITANIYA__23 = 'option_23';
    const POKUPKA_ALKOGOLYA__0 = 'option_0';
    const POKUPKA_ALKOGOLYA__1 = 'option_1';
    const POKUPKA_ALKOGOLYA__2 = 'option_2';
    const POKUPKA_ALKOGOLYA__3 = 'option_3';
    const POKUPKA_ALKOGOLYA__4 = 'option_4';
    const POKUPKA_ALKOGOLYA__5 = 'option_5';
    const POKUPKA_ALKOGOLYA__6 = 'option_6';
    const POKUPKA_ALKOGOLYA__7 = 'option_7';
    const POKUPKA_ALKOGOLYA__8 = 'option_8';
    const POKUPKA_ALKOGOLYA__9 = 'option_9';
    const POKUPKA_ALKOGOLYA__10 = 'option_10';
    const POKUPKA_ALKOGOLYA__11 = 'option_11';
    const POKUPKA_ALKOGOLYA__12 = 'option_12';
    const POKUPKA_ALKOGOLYA__13 = 'option_13';
    const POKUPKA_ALKOGOLYA__14 = 'option_14';
    const POKUPKA_ALKOGOLYA__15 = 'option_15';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPokupkaProduktovPitaniyaAllowableValues()
    {
        return [
            self::POKUPKA_PRODUKTOV_PITANIYA__0,
            self::POKUPKA_PRODUKTOV_PITANIYA__1,
            self::POKUPKA_PRODUKTOV_PITANIYA__2,
            self::POKUPKA_PRODUKTOV_PITANIYA__3,
            self::POKUPKA_PRODUKTOV_PITANIYA__4,
            self::POKUPKA_PRODUKTOV_PITANIYA__5,
            self::POKUPKA_PRODUKTOV_PITANIYA__6,
            self::POKUPKA_PRODUKTOV_PITANIYA__7,
            self::POKUPKA_PRODUKTOV_PITANIYA__8,
            self::POKUPKA_PRODUKTOV_PITANIYA__9,
            self::POKUPKA_PRODUKTOV_PITANIYA__10,
            self::POKUPKA_PRODUKTOV_PITANIYA__11,
            self::POKUPKA_PRODUKTOV_PITANIYA__12,
            self::POKUPKA_PRODUKTOV_PITANIYA__13,
            self::POKUPKA_PRODUKTOV_PITANIYA__14,
            self::POKUPKA_PRODUKTOV_PITANIYA__15,
            self::POKUPKA_PRODUKTOV_PITANIYA__16,
            self::POKUPKA_PRODUKTOV_PITANIYA__17,
            self::POKUPKA_PRODUKTOV_PITANIYA__18,
            self::POKUPKA_PRODUKTOV_PITANIYA__19,
            self::POKUPKA_PRODUKTOV_PITANIYA__20,
            self::POKUPKA_PRODUKTOV_PITANIYA__21,
            self::POKUPKA_PRODUKTOV_PITANIYA__22,
            self::POKUPKA_PRODUKTOV_PITANIYA__23,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPokupkaAlkogolyaAllowableValues()
    {
        return [
            self::POKUPKA_ALKOGOLYA__0,
            self::POKUPKA_ALKOGOLYA__1,
            self::POKUPKA_ALKOGOLYA__2,
            self::POKUPKA_ALKOGOLYA__3,
            self::POKUPKA_ALKOGOLYA__4,
            self::POKUPKA_ALKOGOLYA__5,
            self::POKUPKA_ALKOGOLYA__6,
            self::POKUPKA_ALKOGOLYA__7,
            self::POKUPKA_ALKOGOLYA__8,
            self::POKUPKA_ALKOGOLYA__9,
            self::POKUPKA_ALKOGOLYA__10,
            self::POKUPKA_ALKOGOLYA__11,
            self::POKUPKA_ALKOGOLYA__12,
            self::POKUPKA_ALKOGOLYA__13,
            self::POKUPKA_ALKOGOLYA__14,
            self::POKUPKA_ALKOGOLYA__15,
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
        $this->container['pokupka_produktov_pitaniya'] = isset($data['pokupka_produktov_pitaniya']) ? $data['pokupka_produktov_pitaniya'] : null;
        $this->container['pokupka_alkogolya'] = isset($data['pokupka_alkogolya']) ? $data['pokupka_alkogolya'] : null;
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
     * Gets pokupka_produktov_pitaniya
     * @return string[]
     */
    public function getPokupkaProduktovPitaniya()
    {
        return $this->container['pokupka_produktov_pitaniya'];
    }

    /**
     * Sets pokupka_produktov_pitaniya
     * @param string[] $pokupka_produktov_pitaniya Параметр `Покупка продуктов питания`  * `option_0` - Алкогольная продукция * `option_1` - Газированные напитки * `option_2` - Горячие готовые обеды * `option_3` - Детское питание * `option_4` - Диетические кондитерские изделия (для детей, витаминизированные, медицинские) * `option_5` - Другие консервы (фруктовые, овощные, грибные и т.д.) * `option_6` - Закусочные продукты (чипсы, попкорн) * `option_7` - Замороженные готовые обеды * `option_8` - Замороженные полуфабрикаты * `option_9` - Йогурты, творожные изделия * `option_10` - Колбасные и мясные изделия * `option_11` - Кондитерские изделия * `option_12` - Консервы (пресервы) рыбные * `option_13` - Консервы мясные * `option_14` - Кофе/какао * `option_15` - Крупы * `option_16` - Макаронные изделия * `option_17` - Молочные и кисломолочные продукты * `option_18` - Орехи, сухофрукты в упаковке * `option_19` - Свежая выпечка и хлебобулочные изделия * `option_20` - Соки * `option_21` - Специи и пряности в упаковке * `option_22` - Сыры и сырные продукты в упаковке * `option_23` - Чай
     * @return $this
     */
    public function setPokupkaProduktovPitaniya($pokupka_produktov_pitaniya)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15', 'option_16', 'option_17', 'option_18', 'option_19', 'option_20', 'option_21', 'option_22', 'option_23');
        if (!in_array($pokupka_produktov_pitaniya, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'pokupka_produktov_pitaniya', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15', 'option_16', 'option_17', 'option_18', 'option_19', 'option_20', 'option_21', 'option_22', 'option_23'");
        }
        $this->container['pokupka_produktov_pitaniya'] = $pokupka_produktov_pitaniya;

        return $this;
    }

    /**
     * Gets pokupka_alkogolya
     * @return string[]
     */
    public function getPokupkaAlkogolya()
    {
        return $this->container['pokupka_alkogolya'];
    }

    /**
     * Sets pokupka_alkogolya
     * @param string[] $pokupka_alkogolya Параметр `Покупка алкоголя`  * `option_0` - Бальзам * `option_1` - Бренди * `option_2` - Вермут * `option_3` - Виноградное вино * `option_4` - Виски * `option_5` - Водка * `option_6` - Джин * `option_7` - Игристое вино * `option_8` - Коньяк * `option_9` - Ликер * `option_10` - Настойка * `option_11` - Пиво * `option_12` - Плодовое вино * `option_13` - Ром * `option_14` - Текила * `option_15` - не приобретает алкогольные напитки
     * @return $this
     */
    public function setPokupkaAlkogolya($pokupka_alkogolya)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15');
        if (!in_array($pokupka_alkogolya, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'pokupka_alkogolya', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15'");
        }
        $this->container['pokupka_alkogolya'] = $pokupka_alkogolya;

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


