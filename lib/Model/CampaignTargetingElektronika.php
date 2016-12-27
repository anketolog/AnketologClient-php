<?php
/**
 * CampaignTargetingElektronika
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
 * Документация к Анкетолог API версии 2.0
 *
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [swagger-codegen](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://anketolog.ru/api/external/v2/docs/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://apiv2.anketolog.ru/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": 0000000 } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://anketolog.ru/user/account/apikey)   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": 0000000}' \\   'https://apiv2.anketolog.ru/survey/manage/info' ```
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
 * CampaignTargetingElektronika Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Электроника и бытовая техника&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingElektronika implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingElektronika';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'elektroniku_priobretali_za_god' => 'string[]',
        'byt_tekhniki_priobretali_za_god' => 'string[]'
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
        'elektroniku_priobretali_za_god' => 'elektroniku_priobretali_za_god',
        'byt_tekhniki_priobretali_za_god' => 'byt_tekhniki_priobretali_za_god'
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
        'elektroniku_priobretali_za_god' => 'setElektronikuPriobretaliZaGod',
        'byt_tekhniki_priobretali_za_god' => 'setBytTekhnikiPriobretaliZaGod'
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
        'elektroniku_priobretali_za_god' => 'getElektronikuPriobretaliZaGod',
        'byt_tekhniki_priobretali_za_god' => 'getBytTekhnikiPriobretaliZaGod'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__0 = 'option_0';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__1 = 'option_1';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__2 = 'option_2';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__3 = 'option_3';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__4 = 'option_4';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__5 = 'option_5';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__6 = 'option_6';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__7 = 'option_7';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__8 = 'option_8';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__9 = 'option_9';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__10 = 'option_10';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__11 = 'option_11';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__12 = 'option_12';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__13 = 'option_13';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__14 = 'option_14';
    const ELEKTRONIKU_PRIOBRETALI_ZA_GOD__15 = 'option_15';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__0 = 'option_0';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__1 = 'option_1';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__2 = 'option_2';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__3 = 'option_3';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__4 = 'option_4';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__5 = 'option_5';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__6 = 'option_6';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__7 = 'option_7';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__8 = 'option_8';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__9 = 'option_9';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__10 = 'option_10';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__11 = 'option_11';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__12 = 'option_12';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__13 = 'option_13';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__14 = 'option_14';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__15 = 'option_15';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__16 = 'option_16';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__17 = 'option_17';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__18 = 'option_18';
    const BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__19 = 'option_19';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getElektronikuPriobretaliZaGodAllowableValues()
    {
        return [
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__0,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__1,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__2,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__3,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__4,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__5,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__6,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__7,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__8,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__9,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__10,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__11,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__12,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__13,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__14,
            self::ELEKTRONIKU_PRIOBRETALI_ZA_GOD__15,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getBytTekhnikiPriobretaliZaGodAllowableValues()
    {
        return [
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__0,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__1,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__2,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__3,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__4,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__5,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__6,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__7,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__8,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__9,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__10,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__11,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__12,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__13,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__14,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__15,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__16,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__17,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__18,
            self::BYT_TEKHNIKI_PRIOBRETALI_ZA_GOD__19,
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
        $this->container['elektroniku_priobretali_za_god'] = isset($data['elektroniku_priobretali_za_god']) ? $data['elektroniku_priobretali_za_god'] : null;
        $this->container['byt_tekhniki_priobretali_za_god'] = isset($data['byt_tekhniki_priobretali_za_god']) ? $data['byt_tekhniki_priobretali_za_god'] : null;
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
     * Gets elektroniku_priobretali_za_god
     * @return string[]
     */
    public function getElektronikuPriobretaliZaGod()
    {
        return $this->container['elektroniku_priobretali_za_god'];
    }

    /**
     * Sets elektroniku_priobretali_za_god
     * @param string[] $elektroniku_priobretali_za_god Параметр `Приобретение домашней электроники за последний год`  * `option_0` - DVD или иной проигрыватель * `option_1` - MP3 плеер * `option_2` - Wi-Fi роутер и USB-модем * `option_3` - Домашний кинотеатр * `option_4` - Игровая приставка * `option_5` - Копировальная техника * `option_6` - Мобильный телефон * `option_7` - Музыкальный центр * `option_8` - Ноутбук * `option_9` - Персональный компьютер * `option_10` - Планшет * `option_11` - Смартфон * `option_12` - Смарт-часы * `option_13` - Телевизор * `option_14` - Фотоаппарат * `option_15` - Электронная книга
     * @return $this
     */
    public function setElektronikuPriobretaliZaGod($elektroniku_priobretali_za_god)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15');
        if (!in_array($elektroniku_priobretali_za_god, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'elektroniku_priobretali_za_god', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15'");
        }
        $this->container['elektroniku_priobretali_za_god'] = $elektroniku_priobretali_za_god;

        return $this;
    }

    /**
     * Gets byt_tekhniki_priobretali_za_god
     * @return string[]
     */
    public function getBytTekhnikiPriobretaliZaGod()
    {
        return $this->container['byt_tekhniki_priobretali_za_god'];
    }

    /**
     * Sets byt_tekhniki_priobretali_za_god
     * @param string[] $byt_tekhniki_priobretali_za_god Параметр `Приобретение бытовой техники за последний год`  * `option_0` - Блендер или миксер * `option_1` - Блинница * `option_2` - Водонагреватель * `option_3` - Газовая плита * `option_4` - Климатическая техника * `option_5` - Кофеварка * `option_6` - Микроволновая печь * `option_7` - Мультиварка * `option_8` - Мясорубка или кухонный комбайн * `option_9` - Пароварка * `option_10` - Посудомоечная машина * `option_11` - Пылесос * `option_12` - Соковыжималка * `option_13` - Стиральная машина * `option_14` - Утюг * `option_15` - Хлебопечка * `option_16` - Фен * `option_17` - Чайник или термопот * `option_18` - Швейная машина * `option_19` - Электрическая плита или варочная панель
     * @return $this
     */
    public function setBytTekhnikiPriobretaliZaGod($byt_tekhniki_priobretali_za_god)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15', 'option_16', 'option_17', 'option_18', 'option_19');
        if (!in_array($byt_tekhniki_priobretali_za_god, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'byt_tekhniki_priobretali_za_god', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15', 'option_16', 'option_17', 'option_18', 'option_19'");
        }
        $this->container['byt_tekhniki_priobretali_za_god'] = $byt_tekhniki_priobretali_za_god;

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


