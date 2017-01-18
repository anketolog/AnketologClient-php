<?php
/**
 * CampaignTargetingReligioznayaPrinadlezhnost
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
 * CampaignTargetingReligioznayaPrinadlezhnost Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Религиозная принадлежность&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingReligioznayaPrinadlezhnost implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingReligioznayaPrinadlezhnost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enable' => 'bool',
        'religioznost_respondenta' => 'string[]',
        'religioznaya_prinadlezhnost' => 'string[]'
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
        'religioznost_respondenta' => 'religioznost_respondenta',
        'religioznaya_prinadlezhnost' => 'religioznaya_prinadlezhnost'
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
        'religioznost_respondenta' => 'setReligioznostRespondenta',
        'religioznaya_prinadlezhnost' => 'setReligioznayaPrinadlezhnost'
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
        'religioznost_respondenta' => 'getReligioznostRespondenta',
        'religioznaya_prinadlezhnost' => 'getReligioznayaPrinadlezhnost'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const RELIGIOZNOST_RESPONDENTA__0 = 'option_0';
    const RELIGIOZNOST_RESPONDENTA__1 = 'option_1';
    const RELIGIOZNAYA_PRINADLEZHNOST__0 = 'option_0';
    const RELIGIOZNAYA_PRINADLEZHNOST__1 = 'option_1';
    const RELIGIOZNAYA_PRINADLEZHNOST__2 = 'option_2';
    const RELIGIOZNAYA_PRINADLEZHNOST__3 = 'option_3';
    const RELIGIOZNAYA_PRINADLEZHNOST__4 = 'option_4';
    const RELIGIOZNAYA_PRINADLEZHNOST__5 = 'option_5';
    const RELIGIOZNAYA_PRINADLEZHNOST__6 = 'option_6';
    const RELIGIOZNAYA_PRINADLEZHNOST__7 = 'option_7';
    const RELIGIOZNAYA_PRINADLEZHNOST__8 = 'option_8';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getReligioznostRespondentaAllowableValues()
    {
        return [
            self::RELIGIOZNOST_RESPONDENTA__0,
            self::RELIGIOZNOST_RESPONDENTA__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getReligioznayaPrinadlezhnostAllowableValues()
    {
        return [
            self::RELIGIOZNAYA_PRINADLEZHNOST__0,
            self::RELIGIOZNAYA_PRINADLEZHNOST__1,
            self::RELIGIOZNAYA_PRINADLEZHNOST__2,
            self::RELIGIOZNAYA_PRINADLEZHNOST__3,
            self::RELIGIOZNAYA_PRINADLEZHNOST__4,
            self::RELIGIOZNAYA_PRINADLEZHNOST__5,
            self::RELIGIOZNAYA_PRINADLEZHNOST__6,
            self::RELIGIOZNAYA_PRINADLEZHNOST__7,
            self::RELIGIOZNAYA_PRINADLEZHNOST__8,
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
        $this->container['religioznost_respondenta'] = isset($data['religioznost_respondenta']) ? $data['religioznost_respondenta'] : null;
        $this->container['religioznaya_prinadlezhnost'] = isset($data['religioznaya_prinadlezhnost']) ? $data['religioznaya_prinadlezhnost'] : null;
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
     * Gets religioznost_respondenta
     * @return string[]
     */
    public function getReligioznostRespondenta()
    {
        return $this->container['religioznost_respondenta'];
    }

    /**
     * Sets religioznost_respondenta
     * @param string[] $religioznost_respondenta Параметр `Религиозность респондента`  * `option_0` - религиозен * `option_1` - не религиозен
     * @return $this
     */
    public function setReligioznostRespondenta($religioznost_respondenta)
    {
        $allowed_values = array('option_0', 'option_1');
        if (!in_array($religioznost_respondenta, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'religioznost_respondenta', must be one of 'option_0', 'option_1'");
        }
        $this->container['religioznost_respondenta'] = $religioznost_respondenta;

        return $this;
    }

    /**
     * Gets religioznaya_prinadlezhnost
     * @return string[]
     */
    public function getReligioznayaPrinadlezhnost()
    {
        return $this->container['religioznaya_prinadlezhnost'];
    }

    /**
     * Sets religioznaya_prinadlezhnost
     * @param string[] $religioznaya_prinadlezhnost Параметр `Религиозная принадлежность (взгляды)`  * `option_0` - Индуизм * `option_1` - Иудаизм * `option_2` - Католицизм * `option_3` - Протестантизм * `option_4` - Ислам * `option_5` - Православие * `option_6` - Буддизм * `option_7` - Конфуцианство * `option_8` - Язычество
     * @return $this
     */
    public function setReligioznayaPrinadlezhnost($religioznaya_prinadlezhnost)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8');
        if (!in_array($religioznaya_prinadlezhnost, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'religioznaya_prinadlezhnost', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8'");
        }
        $this->container['religioznaya_prinadlezhnost'] = $religioznaya_prinadlezhnost;

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


