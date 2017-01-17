<?php
/**
 * CampaignTargetingMobilnyyTelefon
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
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [swagger-codegen](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://anketolog.loc/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://apiv2.anketolog.loc/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://anketolog.loc/user/account/apikey)   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://apiv2.anketolog.loc/survey/manage/info' ```
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
 * CampaignTargetingMobilnyyTelefon Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Мобильный телефон&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingMobilnyyTelefon implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingMobilnyyTelefon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'nalichie_mobilnogo_telefona' => 'string[]',
        'operacionnaya_sistema_smartfona' => 'string[]',
        'operator_svyazi' => 'string[]'
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
        'nalichie_mobilnogo_telefona' => 'nalichie_mobilnogo_telefona',
        'operacionnaya_sistema_smartfona' => 'operacionnaya_sistema_smartfona',
        'operator_svyazi' => 'operator_svyazi'
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
        'nalichie_mobilnogo_telefona' => 'setNalichieMobilnogoTelefona',
        'operacionnaya_sistema_smartfona' => 'setOperacionnayaSistemaSmartfona',
        'operator_svyazi' => 'setOperatorSvyazi'
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
        'nalichie_mobilnogo_telefona' => 'getNalichieMobilnogoTelefona',
        'operacionnaya_sistema_smartfona' => 'getOperacionnayaSistemaSmartfona',
        'operator_svyazi' => 'getOperatorSvyazi'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const NALICHIE_MOBILNOGO_TELEFONA__0 = 'option_0';
    const NALICHIE_MOBILNOGO_TELEFONA__1 = 'option_1';
    const OPERACIONNAYA_SISTEMA_SMARTFONA__0 = 'option_0';
    const OPERACIONNAYA_SISTEMA_SMARTFONA__1 = 'option_1';
    const OPERACIONNAYA_SISTEMA_SMARTFONA__2 = 'option_2';
    const OPERACIONNAYA_SISTEMA_SMARTFONA__3 = 'option_3';
    const OPERACIONNAYA_SISTEMA_SMARTFONA__4 = 'option_4';
    const OPERACIONNAYA_SISTEMA_SMARTFONA__5 = 'option_5';
    const OPERACIONNAYA_SISTEMA_SMARTFONA__6 = 'option_6';
    const OPERACIONNAYA_SISTEMA_SMARTFONA__7 = 'option_7';
    const OPERACIONNAYA_SISTEMA_SMARTFONA__8 = 'option_8';
    const OPERACIONNAYA_SISTEMA_SMARTFONA__9 = 'option_9';
    const OPERATOR_SVYAZI__0 = 'option_0';
    const OPERATOR_SVYAZI__1 = 'option_1';
    const OPERATOR_SVYAZI__2 = 'option_2';
    const OPERATOR_SVYAZI__3 = 'option_3';
    const OPERATOR_SVYAZI__4 = 'option_4';
    const OPERATOR_SVYAZI__5 = 'option_5';
    const OPERATOR_SVYAZI__6 = 'option_6';
    const OPERATOR_SVYAZI__7 = 'option_7';
    const OPERATOR_SVYAZI__8 = 'option_8';
    const OPERATOR_SVYAZI__9 = 'option_9';
    const OPERATOR_SVYAZI__10 = 'option_10';
    const OPERATOR_SVYAZI__11 = 'option_11';
    const OPERATOR_SVYAZI__12 = 'option_12';
    const OPERATOR_SVYAZI__13 = 'option_13';
    const OPERATOR_SVYAZI__14 = 'option_14';
    const OPERATOR_SVYAZI__15 = 'option_15';
    const OPERATOR_SVYAZI__16 = 'option_16';
    const OPERATOR_SVYAZI__17 = 'option_17';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNalichieMobilnogoTelefonaAllowableValues()
    {
        return [
            self::NALICHIE_MOBILNOGO_TELEFONA__0,
            self::NALICHIE_MOBILNOGO_TELEFONA__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOperacionnayaSistemaSmartfonaAllowableValues()
    {
        return [
            self::OPERACIONNAYA_SISTEMA_SMARTFONA__0,
            self::OPERACIONNAYA_SISTEMA_SMARTFONA__1,
            self::OPERACIONNAYA_SISTEMA_SMARTFONA__2,
            self::OPERACIONNAYA_SISTEMA_SMARTFONA__3,
            self::OPERACIONNAYA_SISTEMA_SMARTFONA__4,
            self::OPERACIONNAYA_SISTEMA_SMARTFONA__5,
            self::OPERACIONNAYA_SISTEMA_SMARTFONA__6,
            self::OPERACIONNAYA_SISTEMA_SMARTFONA__7,
            self::OPERACIONNAYA_SISTEMA_SMARTFONA__8,
            self::OPERACIONNAYA_SISTEMA_SMARTFONA__9,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOperatorSvyaziAllowableValues()
    {
        return [
            self::OPERATOR_SVYAZI__0,
            self::OPERATOR_SVYAZI__1,
            self::OPERATOR_SVYAZI__2,
            self::OPERATOR_SVYAZI__3,
            self::OPERATOR_SVYAZI__4,
            self::OPERATOR_SVYAZI__5,
            self::OPERATOR_SVYAZI__6,
            self::OPERATOR_SVYAZI__7,
            self::OPERATOR_SVYAZI__8,
            self::OPERATOR_SVYAZI__9,
            self::OPERATOR_SVYAZI__10,
            self::OPERATOR_SVYAZI__11,
            self::OPERATOR_SVYAZI__12,
            self::OPERATOR_SVYAZI__13,
            self::OPERATOR_SVYAZI__14,
            self::OPERATOR_SVYAZI__15,
            self::OPERATOR_SVYAZI__16,
            self::OPERATOR_SVYAZI__17,
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
        $this->container['nalichie_mobilnogo_telefona'] = isset($data['nalichie_mobilnogo_telefona']) ? $data['nalichie_mobilnogo_telefona'] : null;
        $this->container['operacionnaya_sistema_smartfona'] = isset($data['operacionnaya_sistema_smartfona']) ? $data['operacionnaya_sistema_smartfona'] : null;
        $this->container['operator_svyazi'] = isset($data['operator_svyazi']) ? $data['operator_svyazi'] : null;
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
     * Gets nalichie_mobilnogo_telefona
     * @return string[]
     */
    public function getNalichieMobilnogoTelefona()
    {
        return $this->container['nalichie_mobilnogo_telefona'];
    }

    /**
     * Sets nalichie_mobilnogo_telefona
     * @param string[] $nalichie_mobilnogo_telefona Параметр `Наличие мобильного телефона`  * `option_0` - мобильный телефон * `option_1` - смартфон
     * @return $this
     */
    public function setNalichieMobilnogoTelefona($nalichie_mobilnogo_telefona)
    {
        $allowed_values = array('option_0', 'option_1');
        if (!in_array($nalichie_mobilnogo_telefona, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'nalichie_mobilnogo_telefona', must be one of 'option_0', 'option_1'");
        }
        $this->container['nalichie_mobilnogo_telefona'] = $nalichie_mobilnogo_telefona;

        return $this;
    }

    /**
     * Gets operacionnaya_sistema_smartfona
     * @return string[]
     */
    public function getOperacionnayaSistemaSmartfona()
    {
        return $this->container['operacionnaya_sistema_smartfona'];
    }

    /**
     * Sets operacionnaya_sistema_smartfona
     * @param string[] $operacionnaya_sistema_smartfona Параметр `Операционная система смартфона`  * `option_0` - Android * `option_1` - Bada * `option_2` - BlackBerry OS * `option_3` - HP webOS * `option_4` - iOS * `option_5` - Linux * `option_6` - Palm OS * `option_7` - Symbian OS * `option_8` - Windows Mobile, Windows CE * `option_9` - Windows Phone
     * @return $this
     */
    public function setOperacionnayaSistemaSmartfona($operacionnaya_sistema_smartfona)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9');
        if (!in_array($operacionnaya_sistema_smartfona, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'operacionnaya_sistema_smartfona', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9'");
        }
        $this->container['operacionnaya_sistema_smartfona'] = $operacionnaya_sistema_smartfona;

        return $this;
    }

    /**
     * Gets operator_svyazi
     * @return string[]
     */
    public function getOperatorSvyazi()
    {
        return $this->container['operator_svyazi'];
    }

    /**
     * Sets operator_svyazi
     * @param string[] $operator_svyazi Параметр `Оператор связи мобильного телефона/смартфона`  * `option_0` - МТС * `option_1` - МегаФон * `option_2` - Билайн * `option_3` - Tele2 * `option_4` - Ростелеком * `option_5` - Yota * `option_6` - МОТИВ * `option_7` - СМАРТС * `option_8` - Киевстар * `option_9` - life:) * `option_10` - Интертелеком * `option_11` - Orange * `option_12` - Moldcell * `option_13` - Moldtelecom * `option_14` - Velcom, Privet * `option_15` - Kcell * `option_16` - Altel * `option_17` - Алтын Асыр
     * @return $this
     */
    public function setOperatorSvyazi($operator_svyazi)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15', 'option_16', 'option_17');
        if (!in_array($operator_svyazi, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'operator_svyazi', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15', 'option_16', 'option_17'");
        }
        $this->container['operator_svyazi'] = $operator_svyazi;

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


