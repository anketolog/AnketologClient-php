<?php
/**
 * CampaignTargetingKurenie
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
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [генератором](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://anketolog.ru/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://apiv2.anketolog.ru/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://anketolog.ru/user/account/apikey).   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://apiv2.anketolog.ru/survey/manage/info' ```  ### Webhook  Webhook – это уведомление сторонних приложений о событиях, произошедших на сайте anketolog.ru, путем отправки уведомлений. Во время возникновения события сервер посылает POST-запрос по адресу, который указан в URL. Настроить Webhook можно в [разделе настроек](https://anketolog.loc/user/account/apikey).  ### Webhook : Ответ на анкету  ``` action=new-answer data={     \"answer\": {         \"id\": 0,         \"survey_id\": 0,         \"revision_id\": 0,         \"start_date\": 0,         \"finish_date\": 0,         \"status\": \"v\",         \"collector\": {             \"type\": \"string\",             \"name\": \"string\",             \"swagger_type\": \"string\"         }   } } date=Fri, 26 Oct 2018 05:46:30 +0300 ```
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
 * CampaignTargetingKurenie Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Курение&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingKurenie implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingKurenie';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'kurilschiki' => 'string[]',
        'pokupka_tovarov_dlya_kureniya' => 'string[]'
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
        'kurilschiki' => 'kurilschiki',
        'pokupka_tovarov_dlya_kureniya' => 'pokupka_tovarov_dlya_kureniya'
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
        'kurilschiki' => 'setKurilschiki',
        'pokupka_tovarov_dlya_kureniya' => 'setPokupkaTovarovDlyaKureniya'
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
        'kurilschiki' => 'getKurilschiki',
        'pokupka_tovarov_dlya_kureniya' => 'getPokupkaTovarovDlyaKureniya'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const KURILSCHIKI__0 = 'option_0';
    const KURILSCHIKI__1 = 'option_1';
    const POKUPKA_TOVAROV_DLYA_KURENIYA__0 = 'option_0';
    const POKUPKA_TOVAROV_DLYA_KURENIYA__1 = 'option_1';
    const POKUPKA_TOVAROV_DLYA_KURENIYA__2 = 'option_2';
    const POKUPKA_TOVAROV_DLYA_KURENIYA__3 = 'option_3';
    const POKUPKA_TOVAROV_DLYA_KURENIYA__4 = 'option_4';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getKurilschikiAllowableValues()
    {
        return [
            self::KURILSCHIKI__0,
            self::KURILSCHIKI__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPokupkaTovarovDlyaKureniyaAllowableValues()
    {
        return [
            self::POKUPKA_TOVAROV_DLYA_KURENIYA__0,
            self::POKUPKA_TOVAROV_DLYA_KURENIYA__1,
            self::POKUPKA_TOVAROV_DLYA_KURENIYA__2,
            self::POKUPKA_TOVAROV_DLYA_KURENIYA__3,
            self::POKUPKA_TOVAROV_DLYA_KURENIYA__4,
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
        $this->container['kurilschiki'] = isset($data['kurilschiki']) ? $data['kurilschiki'] : null;
        $this->container['pokupka_tovarov_dlya_kureniya'] = isset($data['pokupka_tovarov_dlya_kureniya']) ? $data['pokupka_tovarov_dlya_kureniya'] : null;
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
     * Gets kurilschiki
     * @return string[]
     */
    public function getKurilschiki()
    {
        return $this->container['kurilschiki'];
    }

    /**
     * Sets kurilschiki
     * @param string[] $kurilschiki Параметр `Курильщики`  * `option_0` - курит постоянно * `option_1` - курит иногда
     * @return $this
     */
    public function setKurilschiki($kurilschiki)
    {
        $allowed_values = array('option_0', 'option_1');
        if (!in_array($kurilschiki, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'kurilschiki', must be one of 'option_0', 'option_1'");
        }
        $this->container['kurilschiki'] = $kurilschiki;

        return $this;
    }

    /**
     * Gets pokupka_tovarov_dlya_kureniya
     * @return string[]
     */
    public function getPokupkaTovarovDlyaKureniya()
    {
        return $this->container['pokupka_tovarov_dlya_kureniya'];
    }

    /**
     * Sets pokupka_tovarov_dlya_kureniya
     * @param string[] $pokupka_tovarov_dlya_kureniya Параметр `Покупка товаров для курения`  * `option_0` - сигареты * `option_1` - сигары * `option_2` - электронные сигареты * `option_3` - трубочный табак * `option_4` - кальян
     * @return $this
     */
    public function setPokupkaTovarovDlyaKureniya($pokupka_tovarov_dlya_kureniya)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4');
        if (!in_array($pokupka_tovarov_dlya_kureniya, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'pokupka_tovarov_dlya_kureniya', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4'");
        }
        $this->container['pokupka_tovarov_dlya_kureniya'] = $pokupka_tovarov_dlya_kureniya;

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


