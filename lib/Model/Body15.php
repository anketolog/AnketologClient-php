<?php
/**
 * Body15
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Anketolog API 2.0
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Body15 Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Body15 implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'body_15';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'personalpage_id' => 'int',
        'label_text' => 'string',
        'text_color' => 'string',
        'background_color' => 'string',
        'orientation' => '\Swagger\Client\Model\WidgetOrientation',
        'align' => '\Swagger\Client\Model\WidgetAlign'
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
        'personalpage_id' => 'personalpage_id',
        'label_text' => 'label_text',
        'text_color' => 'text_color',
        'background_color' => 'background_color',
        'orientation' => 'orientation',
        'align' => 'align'
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
        'personalpage_id' => 'setPersonalpageId',
        'label_text' => 'setLabelText',
        'text_color' => 'setTextColor',
        'background_color' => 'setBackgroundColor',
        'orientation' => 'setOrientation',
        'align' => 'setAlign'
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
        'personalpage_id' => 'getPersonalpageId',
        'label_text' => 'getLabelText',
        'text_color' => 'getTextColor',
        'background_color' => 'getBackgroundColor',
        'orientation' => 'getOrientation',
        'align' => 'getAlign'
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
        $this->container['personalpage_id'] = isset($data['personalpage_id']) ? $data['personalpage_id'] : null;
        $this->container['label_text'] = isset($data['label_text']) ? $data['label_text'] : null;
        $this->container['text_color'] = isset($data['text_color']) ? $data['text_color'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['orientation'] = isset($data['orientation']) ? $data['orientation'] : null;
        $this->container['align'] = isset($data['align']) ? $data['align'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['personalpage_id'] === null) {
            $invalid_properties[] = "'personalpage_id' can't be null";
        }
        if ($this->container['label_text'] === null) {
            $invalid_properties[] = "'label_text' can't be null";
        }
        if ($this->container['text_color'] === null) {
            $invalid_properties[] = "'text_color' can't be null";
        }
        if ($this->container['background_color'] === null) {
            $invalid_properties[] = "'background_color' can't be null";
        }
        if ($this->container['orientation'] === null) {
            $invalid_properties[] = "'orientation' can't be null";
        }
        if ($this->container['align'] === null) {
            $invalid_properties[] = "'align' can't be null";
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
        if ($this->container['personalpage_id'] === null) {
            return false;
        }
        if ($this->container['label_text'] === null) {
            return false;
        }
        if ($this->container['text_color'] === null) {
            return false;
        }
        if ($this->container['background_color'] === null) {
            return false;
        }
        if ($this->container['orientation'] === null) {
            return false;
        }
        if ($this->container['align'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets personalpage_id
     * @return int
     */
    public function getPersonalpageId()
    {
        return $this->container['personalpage_id'];
    }

    /**
     * Sets personalpage_id
     * @param int $personalpage_id ID персональной страницы
     * @return $this
     */
    public function setPersonalpageId($personalpage_id)
    {
        $this->container['personalpage_id'] = $personalpage_id;

        return $this;
    }

    /**
     * Gets label_text
     * @return string
     */
    public function getLabelText()
    {
        return $this->container['label_text'];
    }

    /**
     * Sets label_text
     * @param string $label_text Текст кнопки
     * @return $this
     */
    public function setLabelText($label_text)
    {
        $this->container['label_text'] = $label_text;

        return $this;
    }

    /**
     * Gets text_color
     * @return string
     */
    public function getTextColor()
    {
        return $this->container['text_color'];
    }

    /**
     * Sets text_color
     * @param string $text_color Цвет текста кнопки
     * @return $this
     */
    public function setTextColor($text_color)
    {
        $this->container['text_color'] = $text_color;

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
     * @param string $background_color Цвет фона кнопки
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets orientation
     * @return \Swagger\Client\Model\WidgetOrientation
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /**
     * Sets orientation
     * @param \Swagger\Client\Model\WidgetOrientation $orientation
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $this->container['orientation'] = $orientation;

        return $this;
    }

    /**
     * Gets align
     * @return \Swagger\Client\Model\WidgetAlign
     */
    public function getAlign()
    {
        return $this->container['align'];
    }

    /**
     * Sets align
     * @param \Swagger\Client\Model\WidgetAlign $align
     * @return $this
     */
    public function setAlign($align)
    {
        $this->container['align'] = $align;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


