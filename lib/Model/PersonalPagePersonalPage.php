<?php
/**
 * PersonalPagePersonalPage
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
 * PersonalPagePersonalPage Class Doc Comment
 *
 * @category    Class */
 // @description Персональная страницы
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PersonalPagePersonalPage implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PersonalPagePersonalPage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'is_archive' => 'bool',
        'is_suspended' => 'bool',
        'is_locked' => 'bool',
        'create_date' => 'int',
        'update_date' => 'int',
        'archive_date' => 'int',
        'lock_date' => 'int',
        'suspend_date' => 'int',
        'logo' => '\Swagger\Client\Model\FileFile',
        'disable_ad' => 'bool',
        'background_color' => 'string',
        'background' => '\Swagger\Client\Model\FileFile'
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
        'name' => 'name',
        'description' => 'description',
        'is_archive' => 'is_archive',
        'is_suspended' => 'is_suspended',
        'is_locked' => 'is_locked',
        'create_date' => 'create_date',
        'update_date' => 'update_date',
        'archive_date' => 'archive_date',
        'lock_date' => 'lock_date',
        'suspend_date' => 'suspend_date',
        'logo' => 'logo',
        'disable_ad' => 'disable_ad',
        'background_color' => 'background_color',
        'background' => 'background'
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
        'name' => 'setName',
        'description' => 'setDescription',
        'is_archive' => 'setIsArchive',
        'is_suspended' => 'setIsSuspended',
        'is_locked' => 'setIsLocked',
        'create_date' => 'setCreateDate',
        'update_date' => 'setUpdateDate',
        'archive_date' => 'setArchiveDate',
        'lock_date' => 'setLockDate',
        'suspend_date' => 'setSuspendDate',
        'logo' => 'setLogo',
        'disable_ad' => 'setDisableAd',
        'background_color' => 'setBackgroundColor',
        'background' => 'setBackground'
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
        'name' => 'getName',
        'description' => 'getDescription',
        'is_archive' => 'getIsArchive',
        'is_suspended' => 'getIsSuspended',
        'is_locked' => 'getIsLocked',
        'create_date' => 'getCreateDate',
        'update_date' => 'getUpdateDate',
        'archive_date' => 'getArchiveDate',
        'lock_date' => 'getLockDate',
        'suspend_date' => 'getSuspendDate',
        'logo' => 'getLogo',
        'disable_ad' => 'getDisableAd',
        'background_color' => 'getBackgroundColor',
        'background' => 'getBackground'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['is_archive'] = isset($data['is_archive']) ? $data['is_archive'] : null;
        $this->container['is_suspended'] = isset($data['is_suspended']) ? $data['is_suspended'] : null;
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['update_date'] = isset($data['update_date']) ? $data['update_date'] : null;
        $this->container['archive_date'] = isset($data['archive_date']) ? $data['archive_date'] : null;
        $this->container['lock_date'] = isset($data['lock_date']) ? $data['lock_date'] : null;
        $this->container['suspend_date'] = isset($data['suspend_date']) ? $data['suspend_date'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['disable_ad'] = isset($data['disable_ad']) ? $data['disable_ad'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['background'] = isset($data['background']) ? $data['background'] : null;
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
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['is_archive'] === null) {
            $invalid_properties[] = "'is_archive' can't be null";
        }
        if ($this->container['is_suspended'] === null) {
            $invalid_properties[] = "'is_suspended' can't be null";
        }
        if ($this->container['is_locked'] === null) {
            $invalid_properties[] = "'is_locked' can't be null";
        }
        if ($this->container['create_date'] === null) {
            $invalid_properties[] = "'create_date' can't be null";
        }
        if ($this->container['update_date'] === null) {
            $invalid_properties[] = "'update_date' can't be null";
        }
        if ($this->container['archive_date'] === null) {
            $invalid_properties[] = "'archive_date' can't be null";
        }
        if ($this->container['lock_date'] === null) {
            $invalid_properties[] = "'lock_date' can't be null";
        }
        if ($this->container['suspend_date'] === null) {
            $invalid_properties[] = "'suspend_date' can't be null";
        }
        if ($this->container['logo'] === null) {
            $invalid_properties[] = "'logo' can't be null";
        }
        if ($this->container['disable_ad'] === null) {
            $invalid_properties[] = "'disable_ad' can't be null";
        }
        if ($this->container['background_color'] === null) {
            $invalid_properties[] = "'background_color' can't be null";
        }
        if ($this->container['background'] === null) {
            $invalid_properties[] = "'background' can't be null";
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
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['is_archive'] === null) {
            return false;
        }
        if ($this->container['is_suspended'] === null) {
            return false;
        }
        if ($this->container['is_locked'] === null) {
            return false;
        }
        if ($this->container['create_date'] === null) {
            return false;
        }
        if ($this->container['update_date'] === null) {
            return false;
        }
        if ($this->container['archive_date'] === null) {
            return false;
        }
        if ($this->container['lock_date'] === null) {
            return false;
        }
        if ($this->container['suspend_date'] === null) {
            return false;
        }
        if ($this->container['logo'] === null) {
            return false;
        }
        if ($this->container['disable_ad'] === null) {
            return false;
        }
        if ($this->container['background_color'] === null) {
            return false;
        }
        if ($this->container['background'] === null) {
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
     * @param int $id ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name Название
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Описание
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets is_archive
     * @return bool
     */
    public function getIsArchive()
    {
        return $this->container['is_archive'];
    }

    /**
     * Sets is_archive
     * @param bool $is_archive В архиве
     * @return $this
     */
    public function setIsArchive($is_archive)
    {
        $this->container['is_archive'] = $is_archive;

        return $this;
    }

    /**
     * Gets is_suspended
     * @return bool
     */
    public function getIsSuspended()
    {
        return $this->container['is_suspended'];
    }

    /**
     * Sets is_suspended
     * @param bool $is_suspended Приостановлена за неуплату
     * @return $this
     */
    public function setIsSuspended($is_suspended)
    {
        $this->container['is_suspended'] = $is_suspended;

        return $this;
    }

    /**
     * Gets is_locked
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     * @param bool $is_locked Заблокирована модератором
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets create_date
     * @return int
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     * @param int $create_date Дата создания
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets update_date
     * @return int
     */
    public function getUpdateDate()
    {
        return $this->container['update_date'];
    }

    /**
     * Sets update_date
     * @param int $update_date Дата редактирования
     * @return $this
     */
    public function setUpdateDate($update_date)
    {
        $this->container['update_date'] = $update_date;

        return $this;
    }

    /**
     * Gets archive_date
     * @return int
     */
    public function getArchiveDate()
    {
        return $this->container['archive_date'];
    }

    /**
     * Sets archive_date
     * @param int $archive_date Дата архивирования
     * @return $this
     */
    public function setArchiveDate($archive_date)
    {
        $this->container['archive_date'] = $archive_date;

        return $this;
    }

    /**
     * Gets lock_date
     * @return int
     */
    public function getLockDate()
    {
        return $this->container['lock_date'];
    }

    /**
     * Sets lock_date
     * @param int $lock_date Дата блокировки
     * @return $this
     */
    public function setLockDate($lock_date)
    {
        $this->container['lock_date'] = $lock_date;

        return $this;
    }

    /**
     * Gets suspend_date
     * @return int
     */
    public function getSuspendDate()
    {
        return $this->container['suspend_date'];
    }

    /**
     * Sets suspend_date
     * @param int $suspend_date Дата приостановки
     * @return $this
     */
    public function setSuspendDate($suspend_date)
    {
        $this->container['suspend_date'] = $suspend_date;

        return $this;
    }

    /**
     * Gets logo
     * @return \Swagger\Client\Model\FileFile
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     * @param \Swagger\Client\Model\FileFile $logo
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

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
     * @param bool $disable_ad Реклама
     * @return $this
     */
    public function setDisableAd($disable_ad)
    {
        $this->container['disable_ad'] = $disable_ad;

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
     * Gets background
     * @return \Swagger\Client\Model\FileFile
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     * @param \Swagger\Client\Model\FileFile $background
     * @return $this
     */
    public function setBackground($background)
    {
        $this->container['background'] = $background;

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


