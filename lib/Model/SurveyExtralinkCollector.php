<?php
/**
 * SurveyExtralinkCollector
 *
 * PHP version 5
 *
 * @category Class
 * @package  Anketolog
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Anketolog API v2.0
 *
 * ### Клиенты:  * [**PHP**](https://github.com/anketolog/AnketologClient-php)  ### Клиенты на других языках:  * Скачайте конфигурационный [swagger-файл](https://anketolog.ru/api/external/v2/docs2/Api.yaml) * Воспользуйтесь официальным [генератором](http://swagger.io/swagger-codegen/)   ([список поддерживаемых языков](https://github.com/swagger-api/swagger-codegen#api-clients))
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

namespace Anketolog\Model;

use \ArrayAccess;

/**
 * SurveyExtralinkCollector Class Doc Comment
 *
 * @category    Class */
 // @description Способ распространения опроса \&quot;дополнительная ссылка\&quot;
/** 
 * @package     Anketolog
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveyExtralinkCollector implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SurveyExtralinkCollector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'type' => 'string',
        'name' => 'string',
        'extralink_id' => 'int',
        'extralink_title' => 'int',
        'extralink_url' => 'string'
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
        'type' => 'type',
        'name' => 'name',
        'extralink_id' => 'extralink_id',
        'extralink_title' => 'extralink_title',
        'extralink_url' => 'extralink_url'
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
        'type' => 'setType',
        'name' => 'setName',
        'extralink_id' => 'setExtralinkId',
        'extralink_title' => 'setExtralinkTitle',
        'extralink_url' => 'setExtralinkUrl'
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
        'type' => 'getType',
        'name' => 'getName',
        'extralink_id' => 'getExtralinkId',
        'extralink_title' => 'getExtralinkTitle',
        'extralink_url' => 'getExtralinkUrl'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['extralink_id'] = isset($data['extralink_id']) ? $data['extralink_id'] : null;
        $this->container['extralink_title'] = isset($data['extralink_title']) ? $data['extralink_title'] : null;
        $this->container['extralink_url'] = isset($data['extralink_url']) ? $data['extralink_url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['extralink_id'] === null) {
            $invalid_properties[] = "'extralink_id' can't be null";
        }
        if ($this->container['extralink_title'] === null) {
            $invalid_properties[] = "'extralink_title' can't be null";
        }
        if ($this->container['extralink_url'] === null) {
            $invalid_properties[] = "'extralink_url' can't be null";
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
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['extralink_id'] === null) {
            return false;
        }
        if ($this->container['extralink_title'] === null) {
            return false;
        }
        if ($this->container['extralink_url'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Тип способа распространения
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string $name Название способа распространения
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets extralink_id
     * @return int
     */
    public function getExtralinkId()
    {
        return $this->container['extralink_id'];
    }

    /**
     * Sets extralink_id
     * @param int $extralink_id ID доп. ссылки
     * @return $this
     */
    public function setExtralinkId($extralink_id)
    {
        $this->container['extralink_id'] = $extralink_id;

        return $this;
    }

    /**
     * Gets extralink_title
     * @return int
     */
    public function getExtralinkTitle()
    {
        return $this->container['extralink_title'];
    }

    /**
     * Sets extralink_title
     * @param int $extralink_title Название доп. ссылки
     * @return $this
     */
    public function setExtralinkTitle($extralink_title)
    {
        $this->container['extralink_title'] = $extralink_title;

        return $this;
    }

    /**
     * Gets extralink_url
     * @return string
     */
    public function getExtralinkUrl()
    {
        return $this->container['extralink_url'];
    }

    /**
     * Sets extralink_url
     * @param string $extralink_url URL доп. ссылки
     * @return $this
     */
    public function setExtralinkUrl($extralink_url)
    {
        $this->container['extralink_url'] = $extralink_url;

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
            return json_encode(\Anketolog\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Anketolog\ObjectSerializer::sanitizeForSerialization($this));
    }
}


