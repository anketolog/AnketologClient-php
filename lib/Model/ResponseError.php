<?php
/**
 * ResponseError
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
 * ResponseError Class Doc Comment
 *
 * @category    Class */
 // @description Ошибка при выполнении запроса
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ResponseError implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ResponseError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'code' => 'int',
        'name' => 'string',
        'message' => 'string',
        'extra' => 'string[]'
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
        'code' => 'code',
        'name' => 'name',
        'message' => 'message',
        'extra' => 'extra'
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
        'code' => 'setCode',
        'name' => 'setName',
        'message' => 'setMessage',
        'extra' => 'setExtra'
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
        'code' => 'getCode',
        'name' => 'getName',
        'message' => 'getMessage',
        'extra' => 'getExtra'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const NAME_VALIDATION_ERROR = 'validation_error';
    const NAME_APIKEY_ERROR = 'apikey_error';
    const NAME_FORBIDDEN_ERROR = 'forbidden_error';
    const NAME_NOT_FOUND = 'not_found';
    const NAME_OPTION_MISSING = 'option_missing';
    const NAME_INTERNAL_ERROR = 'internal_error';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_VALIDATION_ERROR,
            self::NAME_APIKEY_ERROR,
            self::NAME_FORBIDDEN_ERROR,
            self::NAME_NOT_FOUND,
            self::NAME_OPTION_MISSING,
            self::NAME_INTERNAL_ERROR,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['extra'] = isset($data['extra']) ? $data['extra'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("validation_error", "apikey_error", "forbidden_error", "not_found", "option_missing", "internal_error");
        if (!in_array($this->container['name'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'name', must be one of #{allowed_values}.";
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
        $allowed_values = array("validation_error", "apikey_error", "forbidden_error", "not_found", "option_missing", "internal_error");
        if (!in_array($this->container['name'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return int
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param int $code Код ответа  * `400` - validation error * `401` - apikey error * `403` - forbidden error * `404` - not found error * `422` - option missing error * `500` - internal error
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Название ошибки  * `validation_error` - validation error * `apikey_error` - apikey error * `forbidden_error` - forbidden error * `not_found` - not found error * `option_missing` - option missing error * `internal_error` - internal error
     * @return $this
     */
    public function setName($name)
    {
        $allowed_values = array('validation_error', 'apikey_error', 'forbidden_error', 'not_found', 'option_missing', 'internal_error');
        if (!in_array($name, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'name', must be one of 'validation_error', 'apikey_error', 'forbidden_error', 'not_found', 'option_missing', 'internal_error'");
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message Сообщение об ошибке
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets extra
     * @return string[]
     */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
     * Sets extra
     * @param string[] $extra Дополнительные данные
     * @return $this
     */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;

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


