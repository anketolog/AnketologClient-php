<?php
/**
 * SurveySubscribeCreateBody
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
 * ### Клиенты:  * [**PHP**](https://github.com/anketolog/AnketologClient-php)  ### Клиенты на других языках:  * Скачайте конфигурационный [swagger-файл](https://anketolog.ru/api/external/v2/docs/Anketolog.yaml) * Воспользуйтесь официальным [генератором](http://swagger.io/swagger-codegen/)   ([список поддерживаемых языков](https://github.com/swagger-api/swagger-codegen#api-clients))
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
 * SurveySubscribeCreateBody Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveySubscribeCreateBody implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SurveySubscribeCreateBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'survey_id' => 'int',
        'email' => 'string',
        'receive_every' => 'bool',
        'receive_hourly' => 'bool',
        'receive_daily' => 'bool'
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
        'survey_id' => 'survey_id',
        'email' => 'email',
        'receive_every' => 'receive_every',
        'receive_hourly' => 'receive_hourly',
        'receive_daily' => 'receive_daily'
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
        'survey_id' => 'setSurveyId',
        'email' => 'setEmail',
        'receive_every' => 'setReceiveEvery',
        'receive_hourly' => 'setReceiveHourly',
        'receive_daily' => 'setReceiveDaily'
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
        'survey_id' => 'getSurveyId',
        'email' => 'getEmail',
        'receive_every' => 'getReceiveEvery',
        'receive_hourly' => 'getReceiveHourly',
        'receive_daily' => 'getReceiveDaily'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['survey_id'] = isset($data['survey_id']) ? $data['survey_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['receive_every'] = isset($data['receive_every']) ? $data['receive_every'] : null;
        $this->container['receive_hourly'] = isset($data['receive_hourly']) ? $data['receive_hourly'] : null;
        $this->container['receive_daily'] = isset($data['receive_daily']) ? $data['receive_daily'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['survey_id'] === null) {
            $invalid_properties[] = "'survey_id' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ($this->container['receive_every'] === null) {
            $invalid_properties[] = "'receive_every' can't be null";
        }
        if ($this->container['receive_hourly'] === null) {
            $invalid_properties[] = "'receive_hourly' can't be null";
        }
        if ($this->container['receive_daily'] === null) {
            $invalid_properties[] = "'receive_daily' can't be null";
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
        if ($this->container['survey_id'] === null) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['receive_every'] === null) {
            return false;
        }
        if ($this->container['receive_hourly'] === null) {
            return false;
        }
        if ($this->container['receive_daily'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets survey_id
     * @return int
     */
    public function getSurveyId()
    {
        return $this->container['survey_id'];
    }

    /**
     * Sets survey_id
     * @param int $survey_id ID опроса
     * @return $this
     */
    public function setSurveyId($survey_id)
    {
        $this->container['survey_id'] = $survey_id;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email E-mail
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets receive_every
     * @return bool
     */
    public function getReceiveEvery()
    {
        return $this->container['receive_every'];
    }

    /**
     * Sets receive_every
     * @param bool $receive_every Получать каждый ответ
     * @return $this
     */
    public function setReceiveEvery($receive_every)
    {
        $this->container['receive_every'] = $receive_every;

        return $this;
    }

    /**
     * Gets receive_hourly
     * @return bool
     */
    public function getReceiveHourly()
    {
        return $this->container['receive_hourly'];
    }

    /**
     * Sets receive_hourly
     * @param bool $receive_hourly Получать отчеты ежечасно
     * @return $this
     */
    public function setReceiveHourly($receive_hourly)
    {
        $this->container['receive_hourly'] = $receive_hourly;

        return $this;
    }

    /**
     * Gets receive_daily
     * @return bool
     */
    public function getReceiveDaily()
    {
        return $this->container['receive_daily'];
    }

    /**
     * Sets receive_daily
     * @param bool $receive_daily Получать отчеты ежедневно
     * @return $this
     */
    public function setReceiveDaily($receive_daily)
    {
        $this->container['receive_daily'] = $receive_daily;

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

