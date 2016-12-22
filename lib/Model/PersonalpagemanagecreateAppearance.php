<?php
/**
 * PersonalpagemanagecreateAppearance
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
 * PersonalpagemanagecreateAppearance Class Doc Comment
 *
 * @category    Class */
 // @description Настройки персональной страницы
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PersonalpagemanagecreateAppearance implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'personalpagemanagecreate_appearance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'logo_id' => 'int',
        'background_id' => 'int',
        'background_color' => 'string',
        'disable_ad' => 'bool'
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
        'logo_id' => 'logo_id',
        'background_id' => 'background_id',
        'background_color' => 'background_color',
        'disable_ad' => 'disable_ad'
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
        'logo_id' => 'setLogoId',
        'background_id' => 'setBackgroundId',
        'background_color' => 'setBackgroundColor',
        'disable_ad' => 'setDisableAd'
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
        'logo_id' => 'getLogoId',
        'background_id' => 'getBackgroundId',
        'background_color' => 'getBackgroundColor',
        'disable_ad' => 'getDisableAd'
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
        $this->container['logo_id'] = isset($data['logo_id']) ? $data['logo_id'] : null;
        $this->container['background_id'] = isset($data['background_id']) ? $data['background_id'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['disable_ad'] = isset($data['disable_ad']) ? $data['disable_ad'] : null;
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
     * Gets logo_id
     * @return int
     */
    public function getLogoId()
    {
        return $this->container['logo_id'];
    }

    /**
     * Sets logo_id
     * @param int $logo_id Логотип
     * @return $this
     */
    public function setLogoId($logo_id)
    {
        $this->container['logo_id'] = $logo_id;

        return $this;
    }

    /**
     * Gets background_id
     * @return int
     */
    public function getBackgroundId()
    {
        return $this->container['background_id'];
    }

    /**
     * Sets background_id
     * @param int $background_id Фоновое изображение
     * @return $this
     */
    public function setBackgroundId($background_id)
    {
        $this->container['background_id'] = $background_id;

        return $this;
    }

    /**
     * Gets background_color
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     * @param string $background_color Цвет фона
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets disable_ad
     * @return bool
     */
    public function getDisableAd()
    {
        return $this->container['disable_ad'];
    }

    /**
     * Sets disable_ad
     * @param bool $disable_ad Отключение рекламы
     * @return $this
     */
    public function setDisableAd($disable_ad)
    {
        $this->container['disable_ad'] = $disable_ad;

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

