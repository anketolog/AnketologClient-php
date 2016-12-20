<?php
/**
 * SurveyQuestionName
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
 * SurveyQuestionName Class Doc Comment
 *
 * @category    Class */
 // @description Вопрос \&quot;имя\&quot;
/** 
 * @package     Anketolog
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveyQuestionName implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SurveyQuestionName';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'title' => 'string',
        'type' => 'string',
        'type_name' => 'string',
        'false' => 'int',
        'is_required' => 'bool',
        'has_comment' => 'bool',
        'comment' => 'string',
        'has_unable_answer' => 'bool',
        'branchrules' => '\Anketolog\Model\SurveyBranchrule[]',
        'visiblerules' => '\Anketolog\Model\SurveyVisiblerule[]'
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
        'id' => 'id',
        'title' => 'title',
        'type' => 'type',
        'type_name' => 'type_name',
        'false' => 'false',
        'is_required' => 'is_required',
        'has_comment' => 'has_comment',
        'comment' => 'comment',
        'has_unable_answer' => 'has_unable_answer',
        'branchrules' => 'branchrules',
        'visiblerules' => 'visiblerules'
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
        'id' => 'setId',
        'title' => 'setTitle',
        'type' => 'setType',
        'type_name' => 'setTypeName',
        'false' => 'setFalse',
        'is_required' => 'setIsRequired',
        'has_comment' => 'setHasComment',
        'comment' => 'setComment',
        'has_unable_answer' => 'setHasUnableAnswer',
        'branchrules' => 'setBranchrules',
        'visiblerules' => 'setVisiblerules'
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
        'id' => 'getId',
        'title' => 'getTitle',
        'type' => 'getType',
        'type_name' => 'getTypeName',
        'false' => 'getFalse',
        'is_required' => 'getIsRequired',
        'has_comment' => 'getHasComment',
        'comment' => 'getComment',
        'has_unable_answer' => 'getHasUnableAnswer',
        'branchrules' => 'getBranchrules',
        'visiblerules' => 'getVisiblerules'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['type_name'] = isset($data['type_name']) ? $data['type_name'] : null;
        $this->container['false'] = isset($data['false']) ? $data['false'] : null;
        $this->container['is_required'] = isset($data['is_required']) ? $data['is_required'] : null;
        $this->container['has_comment'] = isset($data['has_comment']) ? $data['has_comment'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['has_unable_answer'] = isset($data['has_unable_answer']) ? $data['has_unable_answer'] : null;
        $this->container['branchrules'] = isset($data['branchrules']) ? $data['branchrules'] : null;
        $this->container['visiblerules'] = isset($data['visiblerules']) ? $data['visiblerules'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['type_name'] === null) {
            $invalid_properties[] = "'type_name' can't be null";
        }
        if ($this->container['is_required'] === null) {
            $invalid_properties[] = "'is_required' can't be null";
        }
        if ($this->container['has_comment'] === null) {
            $invalid_properties[] = "'has_comment' can't be null";
        }
        if ($this->container['comment'] === null) {
            $invalid_properties[] = "'comment' can't be null";
        }
        if ($this->container['has_unable_answer'] === null) {
            $invalid_properties[] = "'has_unable_answer' can't be null";
        }
        if ($this->container['branchrules'] === null) {
            $invalid_properties[] = "'branchrules' can't be null";
        }
        if ($this->container['visiblerules'] === null) {
            $invalid_properties[] = "'visiblerules' can't be null";
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
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['type_name'] === null) {
            return false;
        }
        if ($this->container['is_required'] === null) {
            return false;
        }
        if ($this->container['has_comment'] === null) {
            return false;
        }
        if ($this->container['comment'] === null) {
            return false;
        }
        if ($this->container['has_unable_answer'] === null) {
            return false;
        }
        if ($this->container['branchrules'] === null) {
            return false;
        }
        if ($this->container['visiblerules'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id ID вопроса
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Название вопроса
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
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
     * @param string $type Тип вопроса
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets type_name
     * @return string
     */
    public function getTypeName()
    {
        return $this->container['type_name'];
    }

    /**
     * Sets type_name
     * @param string $type_name Название типа
     * @return $this
     */
    public function setTypeName($type_name)
    {
        $this->container['type_name'] = $type_name;

        return $this;
    }

    /**
     * Gets false
     * @return int
     */
    public function getFalse()
    {
        return $this->container['false'];
    }

    /**
     * Sets false
     * @param int $false Порядковый номер
     * @return $this
     */
    public function setFalse($false)
    {
        $this->container['false'] = $false;

        return $this;
    }

    /**
     * Gets is_required
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     * @param bool $is_required Вопрос обязательный
     * @return $this
     */
    public function setIsRequired($is_required)
    {
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets has_comment
     * @return bool
     */
    public function getHasComment()
    {
        return $this->container['has_comment'];
    }

    /**
     * Sets has_comment
     * @param bool $has_comment Отображать комментарий
     * @return $this
     */
    public function setHasComment($has_comment)
    {
        $this->container['has_comment'] = $has_comment;

        return $this;
    }

    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     * @param string $comment Текст комментария
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets has_unable_answer
     * @return bool
     */
    public function getHasUnableAnswer()
    {
        return $this->container['has_unable_answer'];
    }

    /**
     * Sets has_unable_answer
     * @param bool $has_unable_answer Вариант \"затрудняюсь ответить\"
     * @return $this
     */
    public function setHasUnableAnswer($has_unable_answer)
    {
        $this->container['has_unable_answer'] = $has_unable_answer;

        return $this;
    }

    /**
     * Gets branchrules
     * @return \Anketolog\Model\SurveyBranchrule[]
     */
    public function getBranchrules()
    {
        return $this->container['branchrules'];
    }

    /**
     * Sets branchrules
     * @param \Anketolog\Model\SurveyBranchrule[] $branchrules
     * @return $this
     */
    public function setBranchrules($branchrules)
    {
        $this->container['branchrules'] = $branchrules;

        return $this;
    }

    /**
     * Gets visiblerules
     * @return \Anketolog\Model\SurveyVisiblerule[]
     */
    public function getVisiblerules()
    {
        return $this->container['visiblerules'];
    }

    /**
     * Sets visiblerules
     * @param \Anketolog\Model\SurveyVisiblerule[] $visiblerules
     * @return $this
     */
    public function setVisiblerules($visiblerules)
    {
        $this->container['visiblerules'] = $visiblerules;

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


