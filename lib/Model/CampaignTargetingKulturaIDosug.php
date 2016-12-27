<?php
/**
 * CampaignTargetingKulturaIDosug
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
 * CampaignTargetingKulturaIDosug Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Культура и досуг&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingKulturaIDosug implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingKulturaIDosug';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'poseschenie_kulturno_dosugovyh_uchrezhdeniy' => 'string[]',
        'poseschenie_mest_obschestvennogo_pitaniya' => 'string[]'
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
        'poseschenie_kulturno_dosugovyh_uchrezhdeniy' => 'poseschenie_kulturno_dosugovyh_uchrezhdeniy',
        'poseschenie_mest_obschestvennogo_pitaniya' => 'poseschenie_mest_obschestvennogo_pitaniya'
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
        'poseschenie_kulturno_dosugovyh_uchrezhdeniy' => 'setPoseschenieKulturnoDosugovyhUchrezhdeniy',
        'poseschenie_mest_obschestvennogo_pitaniya' => 'setPoseschenieMestObschestvennogoPitaniya'
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
        'poseschenie_kulturno_dosugovyh_uchrezhdeniy' => 'getPoseschenieKulturnoDosugovyhUchrezhdeniy',
        'poseschenie_mest_obschestvennogo_pitaniya' => 'getPoseschenieMestObschestvennogoPitaniya'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__0 = 'option_0';
    const POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__1 = 'option_1';
    const POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__2 = 'option_2';
    const POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__3 = 'option_3';
    const POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__4 = 'option_4';
    const POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__5 = 'option_5';
    const POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__6 = 'option_6';
    const POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__7 = 'option_7';
    const POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__8 = 'option_8';
    const POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__9 = 'option_9';
    const POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__10 = 'option_10';
    const POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__0 = 'option_0';
    const POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__1 = 'option_1';
    const POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__2 = 'option_2';
    const POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__3 = 'option_3';
    const POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__4 = 'option_4';
    const POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__5 = 'option_5';
    const POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__6 = 'option_6';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPoseschenieKulturnoDosugovyhUchrezhdeniyAllowableValues()
    {
        return [
            self::POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__0,
            self::POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__1,
            self::POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__2,
            self::POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__3,
            self::POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__4,
            self::POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__5,
            self::POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__6,
            self::POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__7,
            self::POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__8,
            self::POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__9,
            self::POSESCHENIE_KULTURNO_DOSUGOVYH_UCHREZHDENIY__10,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPoseschenieMestObschestvennogoPitaniyaAllowableValues()
    {
        return [
            self::POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__0,
            self::POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__1,
            self::POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__2,
            self::POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__3,
            self::POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__4,
            self::POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__5,
            self::POSESCHENIE_MEST_OBSCHESTVENNOGO_PITANIYA__6,
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
        $this->container['poseschenie_kulturno_dosugovyh_uchrezhdeniy'] = isset($data['poseschenie_kulturno_dosugovyh_uchrezhdeniy']) ? $data['poseschenie_kulturno_dosugovyh_uchrezhdeniy'] : null;
        $this->container['poseschenie_mest_obschestvennogo_pitaniya'] = isset($data['poseschenie_mest_obschestvennogo_pitaniya']) ? $data['poseschenie_mest_obschestvennogo_pitaniya'] : null;
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
     * Gets poseschenie_kulturno_dosugovyh_uchrezhdeniy
     * @return string[]
     */
    public function getPoseschenieKulturnoDosugovyhUchrezhdeniy()
    {
        return $this->container['poseschenie_kulturno_dosugovyh_uchrezhdeniy'];
    }

    /**
     * Sets poseschenie_kulturno_dosugovyh_uchrezhdeniy
     * @param string[] $poseschenie_kulturno_dosugovyh_uchrezhdeniy Параметр `Посещение культурно-досуговых учреждений`  * `option_0` - театры * `option_1` - концерты эстрадные * `option_2` - концерты на стадионе/под открытым небом * `option_3` - выставки * `option_4` - музеи * `option_5` - кинотеатры * `option_6` - спорт-бары * `option_7` - ночные клубы * `option_8` - боулинг/бильярд и т. д. * `option_9` - спортивные состязания/мероприятия * `option_10` - детские развлекательные центры
     * @return $this
     */
    public function setPoseschenieKulturnoDosugovyhUchrezhdeniy($poseschenie_kulturno_dosugovyh_uchrezhdeniy)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10');
        if (!in_array($poseschenie_kulturno_dosugovyh_uchrezhdeniy, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'poseschenie_kulturno_dosugovyh_uchrezhdeniy', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10'");
        }
        $this->container['poseschenie_kulturno_dosugovyh_uchrezhdeniy'] = $poseschenie_kulturno_dosugovyh_uchrezhdeniy;

        return $this;
    }

    /**
     * Gets poseschenie_mest_obschestvennogo_pitaniya
     * @return string[]
     */
    public function getPoseschenieMestObschestvennogoPitaniya()
    {
        return $this->container['poseschenie_mest_obschestvennogo_pitaniya'];
    }

    /**
     * Sets poseschenie_mest_obschestvennogo_pitaniya
     * @param string[] $poseschenie_mest_obschestvennogo_pitaniya Параметр `Посещение мест общественного питания`  * `option_0` - рестораны * `option_1` - рестораны/ кафе быстрого питания * `option_2` - столовые * `option_3` - закусочные * `option_4` - бары * `option_5` - кафе * `option_6` - кофейни
     * @return $this
     */
    public function setPoseschenieMestObschestvennogoPitaniya($poseschenie_mest_obschestvennogo_pitaniya)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6');
        if (!in_array($poseschenie_mest_obschestvennogo_pitaniya, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'poseschenie_mest_obschestvennogo_pitaniya', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6'");
        }
        $this->container['poseschenie_mest_obschestvennogo_pitaniya'] = $poseschenie_mest_obschestvennogo_pitaniya;

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


