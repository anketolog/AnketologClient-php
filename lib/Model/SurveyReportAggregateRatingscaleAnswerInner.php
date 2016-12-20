<?php
/**
 * SurveyReportAggregateRatingscaleAnswerInner
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
 * SurveyReportAggregateRatingscaleAnswerInner Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveyReportAggregateRatingscaleAnswerInner implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SurveyReportAggregateRatingscaleAnswer_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'answer_id' => 'int',
        'answer_date' => 'int',
        'options' => '\Swagger\Client\Model\SurveyReportAggregateDropdownAnswerOptions[]',
        'total' => 'int'
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
        'answer_id' => 'answer_id',
        'answer_date' => 'answer_date',
        'options' => 'options',
        'total' => 'total'
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
        'answer_id' => 'setAnswerId',
        'answer_date' => 'setAnswerDate',
        'options' => 'setOptions',
        'total' => 'setTotal'
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
        'answer_id' => 'getAnswerId',
        'answer_date' => 'getAnswerDate',
        'options' => 'getOptions',
        'total' => 'getTotal'
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
        $this->container['answer_id'] = isset($data['answer_id']) ? $data['answer_id'] : null;
        $this->container['answer_date'] = isset($data['answer_date']) ? $data['answer_date'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['answer_id'] === null) {
            $invalid_properties[] = "'answer_id' can't be null";
        }
        if ($this->container['answer_date'] === null) {
            $invalid_properties[] = "'answer_date' can't be null";
        }
        if ($this->container['options'] === null) {
            $invalid_properties[] = "'options' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalid_properties[] = "'total' can't be null";
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
        if ($this->container['answer_id'] === null) {
            return false;
        }
        if ($this->container['answer_date'] === null) {
            return false;
        }
        if ($this->container['options'] === null) {
            return false;
        }
        if ($this->container['total'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets answer_id
     * @return int
     */
    public function getAnswerId()
    {
        return $this->container['answer_id'];
    }

    /**
     * Sets answer_id
     * @param int $answer_id
     * @return $this
     */
    public function setAnswerId($answer_id)
    {
        $this->container['answer_id'] = $answer_id;

        return $this;
    }

    /**
     * Gets answer_date
     * @return int
     */
    public function getAnswerDate()
    {
        return $this->container['answer_date'];
    }

    /**
     * Sets answer_date
     * @param int $answer_date
     * @return $this
     */
    public function setAnswerDate($answer_date)
    {
        $this->container['answer_date'] = $answer_date;

        return $this;
    }

    /**
     * Gets options
     * @return \Swagger\Client\Model\SurveyReportAggregateDropdownAnswerOptions[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \Swagger\Client\Model\SurveyReportAggregateDropdownAnswerOptions[] $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets total
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param int $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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


