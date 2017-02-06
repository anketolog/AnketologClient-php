<?php
/**
 * CampaignTargetingInternet
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
 * Документация к Анкетолог API (beta-версия)
 *
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [генератором](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://anketolog.ru/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://apiv2.anketolog.ru/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://anketolog.ru/user/account/apikey).   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://apiv2.anketolog.ru/survey/manage/info' ```
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
 * CampaignTargetingInternet Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Интернет&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingInternet implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingInternet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'socialnye_seti' => 'string[]',
        'sovershenie_pokupok_cherez_internet' => 'string[]',
        'vidy_tovarov_zakazyvaemyh_cherez_internet' => 'string[]'
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
        'socialnye_seti' => 'socialnye_seti',
        'sovershenie_pokupok_cherez_internet' => 'sovershenie_pokupok_cherez_internet',
        'vidy_tovarov_zakazyvaemyh_cherez_internet' => 'vidy_tovarov_zakazyvaemyh_cherez_internet'
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
        'socialnye_seti' => 'setSocialnyeSeti',
        'sovershenie_pokupok_cherez_internet' => 'setSoversheniePokupokCherezInternet',
        'vidy_tovarov_zakazyvaemyh_cherez_internet' => 'setVidyTovarovZakazyvaemyhCherezInternet'
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
        'socialnye_seti' => 'getSocialnyeSeti',
        'sovershenie_pokupok_cherez_internet' => 'getSoversheniePokupokCherezInternet',
        'vidy_tovarov_zakazyvaemyh_cherez_internet' => 'getVidyTovarovZakazyvaemyhCherezInternet'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const SOCIALNYE_SETI__0 = 'option_0';
    const SOCIALNYE_SETI__1 = 'option_1';
    const SOCIALNYE_SETI__2 = 'option_2';
    const SOCIALNYE_SETI__3 = 'option_3';
    const SOCIALNYE_SETI__4 = 'option_4';
    const SOCIALNYE_SETI__5 = 'option_5';
    const SOCIALNYE_SETI__6 = 'option_6';
    const SOCIALNYE_SETI__7 = 'option_7';
    const SOCIALNYE_SETI__8 = 'option_8';
    const SOCIALNYE_SETI__9 = 'option_9';
    const SOVERSHENIE_POKUPOK_CHEREZ_INTERNET__0 = 'option_0';
    const SOVERSHENIE_POKUPOK_CHEREZ_INTERNET__1 = 'option_1';
    const VIDY_TOVAROV_ZAKAZYVAEMYH_CHEREZ_INTERNET__0 = 'option_0';
    const VIDY_TOVAROV_ZAKAZYVAEMYH_CHEREZ_INTERNET__1 = 'option_1';
    const VIDY_TOVAROV_ZAKAZYVAEMYH_CHEREZ_INTERNET__2 = 'option_2';
    const VIDY_TOVAROV_ZAKAZYVAEMYH_CHEREZ_INTERNET__3 = 'option_3';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSocialnyeSetiAllowableValues()
    {
        return [
            self::SOCIALNYE_SETI__0,
            self::SOCIALNYE_SETI__1,
            self::SOCIALNYE_SETI__2,
            self::SOCIALNYE_SETI__3,
            self::SOCIALNYE_SETI__4,
            self::SOCIALNYE_SETI__5,
            self::SOCIALNYE_SETI__6,
            self::SOCIALNYE_SETI__7,
            self::SOCIALNYE_SETI__8,
            self::SOCIALNYE_SETI__9,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSoversheniePokupokCherezInternetAllowableValues()
    {
        return [
            self::SOVERSHENIE_POKUPOK_CHEREZ_INTERNET__0,
            self::SOVERSHENIE_POKUPOK_CHEREZ_INTERNET__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getVidyTovarovZakazyvaemyhCherezInternetAllowableValues()
    {
        return [
            self::VIDY_TOVAROV_ZAKAZYVAEMYH_CHEREZ_INTERNET__0,
            self::VIDY_TOVAROV_ZAKAZYVAEMYH_CHEREZ_INTERNET__1,
            self::VIDY_TOVAROV_ZAKAZYVAEMYH_CHEREZ_INTERNET__2,
            self::VIDY_TOVAROV_ZAKAZYVAEMYH_CHEREZ_INTERNET__3,
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
        $this->container['socialnye_seti'] = isset($data['socialnye_seti']) ? $data['socialnye_seti'] : null;
        $this->container['sovershenie_pokupok_cherez_internet'] = isset($data['sovershenie_pokupok_cherez_internet']) ? $data['sovershenie_pokupok_cherez_internet'] : null;
        $this->container['vidy_tovarov_zakazyvaemyh_cherez_internet'] = isset($data['vidy_tovarov_zakazyvaemyh_cherez_internet']) ? $data['vidy_tovarov_zakazyvaemyh_cherez_internet'] : null;
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
     * Gets socialnye_seti
     * @return string[]
     */
    public function getSocialnyeSeti()
    {
        return $this->container['socialnye_seti'];
    }

    /**
     * Sets socialnye_seti
     * @param string[] $socialnye_seti Параметр `Социальные сети`  * `option_0` - Вконтакте * `option_1` - Одноклассники * `option_2` - LiveJournal * `option_3` - Facebook * `option_4` - Twitter * `option_5` - Мой мир * `option_6` - Tumblr * `option_7` - Google+ * `option_8` - Linkedin * `option_9` - Нигде не зарегистрирован
     * @return $this
     */
    public function setSocialnyeSeti($socialnye_seti)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9');
        if (!in_array($socialnye_seti, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'socialnye_seti', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9'");
        }
        $this->container['socialnye_seti'] = $socialnye_seti;

        return $this;
    }

    /**
     * Gets sovershenie_pokupok_cherez_internet
     * @return string[]
     */
    public function getSoversheniePokupokCherezInternet()
    {
        return $this->container['sovershenie_pokupok_cherez_internet'];
    }

    /**
     * Sets sovershenie_pokupok_cherez_internet
     * @param string[] $sovershenie_pokupok_cherez_internet Параметр `Совершение покупок через интернет`  * `option_0` - делали покупки через интернет * `option_1` - не делали покупок через интернет
     * @return $this
     */
    public function setSoversheniePokupokCherezInternet($sovershenie_pokupok_cherez_internet)
    {
        $allowed_values = array('option_0', 'option_1');
        if (!in_array($sovershenie_pokupok_cherez_internet, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'sovershenie_pokupok_cherez_internet', must be one of 'option_0', 'option_1'");
        }
        $this->container['sovershenie_pokupok_cherez_internet'] = $sovershenie_pokupok_cherez_internet;

        return $this;
    }

    /**
     * Gets vidy_tovarov_zakazyvaemyh_cherez_internet
     * @return string[]
     */
    public function getVidyTovarovZakazyvaemyhCherezInternet()
    {
        return $this->container['vidy_tovarov_zakazyvaemyh_cherez_internet'];
    }

    /**
     * Sets vidy_tovarov_zakazyvaemyh_cherez_internet
     * @param string[] $vidy_tovarov_zakazyvaemyh_cherez_internet Параметр `Виды товаров, заказываемых через интернет`  * `option_0` - бытовая техника и электроника * `option_1` - одежда/обувь * `option_2` - продукты питания * `option_3` - лекарственные и косметические препараты
     * @return $this
     */
    public function setVidyTovarovZakazyvaemyhCherezInternet($vidy_tovarov_zakazyvaemyh_cherez_internet)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3');
        if (!in_array($vidy_tovarov_zakazyvaemyh_cherez_internet, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'vidy_tovarov_zakazyvaemyh_cherez_internet', must be one of 'option_0', 'option_1', 'option_2', 'option_3'");
        }
        $this->container['vidy_tovarov_zakazyvaemyh_cherez_internet'] = $vidy_tovarov_zakazyvaemyh_cherez_internet;

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


