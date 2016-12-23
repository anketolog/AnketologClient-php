<?php
/**
 * PlanUserPlan
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
 * Анкетолог API v2.0
 *
 * ### Клиенты:  * [**PHP**](https://github.com/anketolog/AnketologClient-php)  ### Клиенты на других языках:  * Скачайте конфигурационный [swagger-файл](https://anketolog.ru/api/external/v2/docs/anketolog.yaml) * Воспользуйтесь официальным [генератором](http://swagger.io/swagger-codegen/)   ([список поддерживаемых языков](https://github.com/swagger-api/swagger-codegen#api-clients))  ### Ключ для доступа к API  Ключ для доступа к API можно получить в [разделе настроек](https://anketolog.ru/user/account/api)
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
 * PlanUserPlan Class Doc Comment
 *
 * @category    Class */
 // @description Тарифный план пользователя
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PlanUserPlan implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PlanUserPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'plan_id' => 'string',
        'since_date' => 'string',
        'expire_date' => 'string',
        'permission_scheme' => '\AnketologClient\Model\PlanPermissionScheme'
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
        'plan_id' => 'plan_id',
        'since_date' => 'since_date',
        'expire_date' => 'expire_date',
        'permission_scheme' => 'permission_scheme'
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
        'plan_id' => 'setPlanId',
        'since_date' => 'setSinceDate',
        'expire_date' => 'setExpireDate',
        'permission_scheme' => 'setPermissionScheme'
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
        'plan_id' => 'getPlanId',
        'since_date' => 'getSinceDate',
        'expire_date' => 'getExpireDate',
        'permission_scheme' => 'getPermissionScheme'
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
        $this->container['plan_id'] = isset($data['plan_id']) ? $data['plan_id'] : null;
        $this->container['since_date'] = isset($data['since_date']) ? $data['since_date'] : null;
        $this->container['expire_date'] = isset($data['expire_date']) ? $data['expire_date'] : null;
        $this->container['permission_scheme'] = isset($data['permission_scheme']) ? $data['permission_scheme'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['plan_id'] === null) {
            $invalid_properties[] = "'plan_id' can't be null";
        }
        if ($this->container['since_date'] === null) {
            $invalid_properties[] = "'since_date' can't be null";
        }
        if ($this->container['permission_scheme'] === null) {
            $invalid_properties[] = "'permission_scheme' can't be null";
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
        if ($this->container['plan_id'] === null) {
            return false;
        }
        if ($this->container['since_date'] === null) {
            return false;
        }
        if ($this->container['permission_scheme'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets plan_id
     * @return string
     */
    public function getPlanId()
    {
        return $this->container['plan_id'];
    }

    /**
     * Sets plan_id
     * @param string $plan_id ID тарифного плана
     * @return $this
     */
    public function setPlanId($plan_id)
    {
        $this->container['plan_id'] = $plan_id;

        return $this;
    }

    /**
     * Gets since_date
     * @return string
     */
    public function getSinceDate()
    {
        return $this->container['since_date'];
    }

    /**
     * Sets since_date
     * @param string $since_date Дата начала тарифного плана
     * @return $this
     */
    public function setSinceDate($since_date)
    {
        $this->container['since_date'] = $since_date;

        return $this;
    }

    /**
     * Gets expire_date
     * @return string
     */
    public function getExpireDate()
    {
        return $this->container['expire_date'];
    }

    /**
     * Sets expire_date
     * @param string $expire_date Дата окончания тарифного плана
     * @return $this
     */
    public function setExpireDate($expire_date)
    {
        $this->container['expire_date'] = $expire_date;

        return $this;
    }

    /**
     * Gets permission_scheme
     * @return \AnketologClient\Model\PlanPermissionScheme
     */
    public function getPermissionScheme()
    {
        return $this->container['permission_scheme'];
    }

    /**
     * Sets permission_scheme
     * @param \AnketologClient\Model\PlanPermissionScheme $permission_scheme
     * @return $this
     */
    public function setPermissionScheme($permission_scheme)
    {
        $this->container['permission_scheme'] = $permission_scheme;

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


