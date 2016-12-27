<?php
/**
 * PersonalpageCollectorUpdatewidgetBody
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
 * PersonalpageCollectorUpdatewidgetBody Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PersonalpageCollectorUpdatewidgetBody implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PersonalpageCollectorUpdatewidgetBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'personalpage_id' => 'int',
        'label_text' => 'string',
        'text_color' => 'string',
        'background_color' => 'string',
        'orientation' => 'string',
        'align' => 'string'
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

    const ORIENTATION_VERTICAL = 'vertical';
    const ORIENTATION_HORIZONTAL = 'horizontal';
    const ALIGN_LEFT_MIDDLE = 'left-middle';
    const ALIGN_LEFT_TOP = 'left-top';
    const ALIGN_LEFT_BOTTOM = 'left-bottom';
    const ALIGN_RIGHT_MIDDLE = 'right-middle';
    const ALIGN_RIGHT_TOP = 'right-top';
    const ALIGN_RIGHT_BOTTOM = 'right-bottom';
    const ALIGN_TOP_CENTER = 'top-center';
    const ALIGN_BOTTOM_CENTER = 'bottom-center';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOrientationAllowableValues()
    {
        return [
            self::ORIENTATION_VERTICAL,
            self::ORIENTATION_HORIZONTAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAlignAllowableValues()
    {
        return [
            self::ALIGN_LEFT_MIDDLE,
            self::ALIGN_LEFT_TOP,
            self::ALIGN_LEFT_BOTTOM,
            self::ALIGN_RIGHT_MIDDLE,
            self::ALIGN_RIGHT_TOP,
            self::ALIGN_RIGHT_BOTTOM,
            self::ALIGN_TOP_CENTER,
            self::ALIGN_BOTTOM_CENTER,
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
        $allowed_values = array("vertical", "horizontal");
        if (!in_array($this->container['orientation'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'orientation', must be one of #{allowed_values}.";
        }

        if ($this->container['align'] === null) {
            $invalid_properties[] = "'align' can't be null";
        }
        $allowed_values = array("left-middle", "left-top", "left-bottom", "right-middle", "right-top", "right-bottom", "top-center", "bottom-center");
        if (!in_array($this->container['align'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'align', must be one of #{allowed_values}.";
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
        $allowed_values = array("vertical", "horizontal");
        if (!in_array($this->container['orientation'], $allowed_values)) {
            return false;
        }
        if ($this->container['align'] === null) {
            return false;
        }
        $allowed_values = array("left-middle", "left-top", "left-bottom", "right-middle", "right-top", "right-bottom", "top-center", "bottom-center");
        if (!in_array($this->container['align'], $allowed_values)) {
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
     * @return string
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /**
     * Sets orientation
     * @param string $orientation Положение виджета  * `vertical` - вертикальное * `horizontal` - горизонтальное
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $allowed_values = array('vertical', 'horizontal');
        if (!in_array($orientation, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'orientation', must be one of 'vertical', 'horizontal'");
        }
        $this->container['orientation'] = $orientation;

        return $this;
    }

    /**
     * Gets align
     * @return string
     */
    public function getAlign()
    {
        return $this->container['align'];
    }

    /**
     * Sets align
     * @param string $align Выравнивание виджета  * `left-middle` - слева в центре * `left-top` - слева вверху * `left-bottom` - слева внизу * `right-middle` - справа в центре * `right-top` - справа вверху * `right-bottom` - справа внизу * `top-center` - сверху в центре * `bottom-center` - снизу в центре
     * @return $this
     */
    public function setAlign($align)
    {
        $allowed_values = array('left-middle', 'left-top', 'left-bottom', 'right-middle', 'right-top', 'right-bottom', 'top-center', 'bottom-center');
        if (!in_array($align, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'align', must be one of 'left-middle', 'left-top', 'left-bottom', 'right-middle', 'right-top', 'right-bottom', 'top-center', 'bottom-center'");
        }
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
            return json_encode(\AnketologClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\AnketologClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


