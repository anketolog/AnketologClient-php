<?php
/**
 * CampaignTargetingPuteshestviya
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
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [swagger-codegen](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://anketolog.ru/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://apiv2.anketolog.ru/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://anketolog.ru/user/account/apikey)   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://apiv2.anketolog.ru/survey/manage/info' ```
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
 * CampaignTargetingPuteshestviya Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Путешествия&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingPuteshestviya implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingPuteshestviya';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'sposob_peredvizheniya' => 'string[]',
        'chastota_puteshestviy' => 'string[]',
        'cel_puteshestviy' => 'string[]'
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
        'sposob_peredvizheniya' => 'sposob_peredvizheniya',
        'chastota_puteshestviy' => 'chastota_puteshestviy',
        'cel_puteshestviy' => 'cel_puteshestviy'
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
        'sposob_peredvizheniya' => 'setSposobPeredvizheniya',
        'chastota_puteshestviy' => 'setChastotaPuteshestviy',
        'cel_puteshestviy' => 'setCelPuteshestviy'
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
        'sposob_peredvizheniya' => 'getSposobPeredvizheniya',
        'chastota_puteshestviy' => 'getChastotaPuteshestviy',
        'cel_puteshestviy' => 'getCelPuteshestviy'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const SPOSOB_PEREDVIZHENIYA__0 = 'option_0';
    const SPOSOB_PEREDVIZHENIYA__1 = 'option_1';
    const SPOSOB_PEREDVIZHENIYA__2 = 'option_2';
    const SPOSOB_PEREDVIZHENIYA__3 = 'option_3';
    const SPOSOB_PEREDVIZHENIYA__4 = 'option_4';
    const SPOSOB_PEREDVIZHENIYA__5 = 'option_5';
    const CHASTOTA_PUTESHESTVIY__0 = 'option_0';
    const CHASTOTA_PUTESHESTVIY__1 = 'option_1';
    const CHASTOTA_PUTESHESTVIY__2 = 'option_2';
    const CHASTOTA_PUTESHESTVIY__3 = 'option_3';
    const CHASTOTA_PUTESHESTVIY__4 = 'option_4';
    const CHASTOTA_PUTESHESTVIY__5 = 'option_5';
    const CEL_PUTESHESTVIY__0 = 'option_0';
    const CEL_PUTESHESTVIY__1 = 'option_1';
    const CEL_PUTESHESTVIY__2 = 'option_2';
    const CEL_PUTESHESTVIY__3 = 'option_3';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSposobPeredvizheniyaAllowableValues()
    {
        return [
            self::SPOSOB_PEREDVIZHENIYA__0,
            self::SPOSOB_PEREDVIZHENIYA__1,
            self::SPOSOB_PEREDVIZHENIYA__2,
            self::SPOSOB_PEREDVIZHENIYA__3,
            self::SPOSOB_PEREDVIZHENIYA__4,
            self::SPOSOB_PEREDVIZHENIYA__5,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getChastotaPuteshestviyAllowableValues()
    {
        return [
            self::CHASTOTA_PUTESHESTVIY__0,
            self::CHASTOTA_PUTESHESTVIY__1,
            self::CHASTOTA_PUTESHESTVIY__2,
            self::CHASTOTA_PUTESHESTVIY__3,
            self::CHASTOTA_PUTESHESTVIY__4,
            self::CHASTOTA_PUTESHESTVIY__5,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCelPuteshestviyAllowableValues()
    {
        return [
            self::CEL_PUTESHESTVIY__0,
            self::CEL_PUTESHESTVIY__1,
            self::CEL_PUTESHESTVIY__2,
            self::CEL_PUTESHESTVIY__3,
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
        $this->container['sposob_peredvizheniya'] = isset($data['sposob_peredvizheniya']) ? $data['sposob_peredvizheniya'] : null;
        $this->container['chastota_puteshestviy'] = isset($data['chastota_puteshestviy']) ? $data['chastota_puteshestviy'] : null;
        $this->container['cel_puteshestviy'] = isset($data['cel_puteshestviy']) ? $data['cel_puteshestviy'] : null;
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
     * Gets sposob_peredvizheniya
     * @return string[]
     */
    public function getSposobPeredvizheniya()
    {
        return $this->container['sposob_peredvizheniya'];
    }

    /**
     * Sets sposob_peredvizheniya
     * @param string[] $sposob_peredvizheniya Параметр `Способ передвижения`  * `option_0` - на самолете * `option_1` - пешком * `option_2` - на автомобиле * `option_3` - на поезде * `option_4` - на автобусе * `option_5` - на лодке/катере
     * @return $this
     */
    public function setSposobPeredvizheniya($sposob_peredvizheniya)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5');
        if (!in_array($sposob_peredvizheniya, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'sposob_peredvizheniya', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5'");
        }
        $this->container['sposob_peredvizheniya'] = $sposob_peredvizheniya;

        return $this;
    }

    /**
     * Gets chastota_puteshestviy
     * @return string[]
     */
    public function getChastotaPuteshestviy()
    {
        return $this->container['chastota_puteshestviy'];
    }

    /**
     * Sets chastota_puteshestviy
     * @param string[] $chastota_puteshestviy Параметр `Частота путешествий`  * `option_0` - реже, чем раз в год * `option_1` - 1 раз в год * `option_2` - 2-3 раза в год * `option_3` - 2-3 раза в полгода * `option_4` - каждый месяц * `option_5` - несколько раз в месяц
     * @return $this
     */
    public function setChastotaPuteshestviy($chastota_puteshestviy)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5');
        if (!in_array($chastota_puteshestviy, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'chastota_puteshestviy', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5'");
        }
        $this->container['chastota_puteshestviy'] = $chastota_puteshestviy;

        return $this;
    }

    /**
     * Gets cel_puteshestviy
     * @return string[]
     */
    public function getCelPuteshestviy()
    {
        return $this->container['cel_puteshestviy'];
    }

    /**
     * Sets cel_puteshestviy
     * @param string[] $cel_puteshestviy Параметр `Цель путешествий`  * `option_0` - с деловой целью/в целях бизнеса * `option_1` - с целью отдыха * `option_2` - езжу к знакомым/родственникам * `option_3` - с просветительской/образовательной целью
     * @return $this
     */
    public function setCelPuteshestviy($cel_puteshestviy)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3');
        if (!in_array($cel_puteshestviy, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'cel_puteshestviy', must be one of 'option_0', 'option_1', 'option_2', 'option_3'");
        }
        $this->container['cel_puteshestviy'] = $cel_puteshestviy;

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


