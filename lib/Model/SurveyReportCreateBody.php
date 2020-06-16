<?php
/**
 * SurveyReportCreateBody
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
 * Документация к Анкетолог API (beta-версия)
 *
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [генератором](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://anketolog.ru/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://apiv2.anketolog.ru/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://anketolog.ru/user/account/apikey).   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://apiv2.anketolog.ru/survey/manage/info' ```  ### Webhook  Webhook – это уведомление сторонних приложений о событиях, произошедших на сайте anketolog.ru, путем отправки уведомлений. Во время возникновения события сервер посылает POST-запрос по адресу, который указан в URL. Настроить Webhook можно в [разделе настроек](https://anketolog.loc/user/account/apikey).  ### Webhook : Ответ на анкету  ``` action=new-answer data={     \"answer\": {         \"id\": 0,         \"survey_id\": 0,         \"revision_id\": 0,         \"start_date\": 0,         \"finish_date\": 0,         \"status\": \"v\",         \"collector\": {             \"type\": \"string\",             \"name\": \"string\",             \"swagger_type\": \"string\"         }   } } date=Fri, 26 Oct 2018 05:46:30 +0300 ```
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
 * SurveyReportCreateBody Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveyReportCreateBody implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SurveyReportCreateBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'survey_id' => 'int',
        'format' => 'string',
        'date_from' => '\DateTime',
        'date_to' => '\DateTime',
        'filters' => 'int[]',
        'sources' => 'string[]'
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
        'format' => 'format',
        'date_from' => 'date_from',
        'date_to' => 'date_to',
        'filters' => 'filters',
        'sources' => 'sources'
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
        'format' => 'setFormat',
        'date_from' => 'setDateFrom',
        'date_to' => 'setDateTo',
        'filters' => 'setFilters',
        'sources' => 'setSources'
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
        'format' => 'getFormat',
        'date_from' => 'getDateFrom',
        'date_to' => 'getDateTo',
        'filters' => 'getFilters',
        'sources' => 'getSources'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const FORMAT_EXCEL = 'excel';
    const FORMAT_SPSS = 'spss';
    const FORMAT_PDF = 'pdf';
    const FORMAT_WORD = 'word';
    const FORMAT_FPDF = 'fpdf';
    const FORMAT_FWORD = 'fword';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_EXCEL,
            self::FORMAT_SPSS,
            self::FORMAT_PDF,
            self::FORMAT_WORD,
            self::FORMAT_FPDF,
            self::FORMAT_FWORD,
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
        $this->container['survey_id'] = isset($data['survey_id']) ? $data['survey_id'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
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
        if ($this->container['format'] === null) {
            $invalid_properties[] = "'format' can't be null";
        }
        $allowed_values = array("excel", "spss", "pdf", "word", "fpdf", "fword");
        if (!in_array($this->container['format'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'format', must be one of #{allowed_values}.";
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
        if ($this->container['format'] === null) {
            return false;
        }
        $allowed_values = array("excel", "spss", "pdf", "word", "fpdf", "fword");
        if (!in_array($this->container['format'], $allowed_values)) {
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
     * Gets format
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     * @param string $format Формат отчета  * `excel` - Детальная статистика в формате EXCEL * `spss` - Детальная статистика в формате SPSS * `fpdf` - Детальная статистика в формате PDF * `fword` - Детальная статистика в формате WORD  * `pdf` - Сгруппированная статистика в формате PDF * `word` - Сгруппированная статистика в формате WORD
     * @return $this
     */
    public function setFormat($format)
    {
        $allowed_values = array('excel', 'spss', 'pdf', 'word', 'fpdf', 'fword');
        if (!in_array($format, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'format', must be one of 'excel', 'spss', 'pdf', 'word', 'fpdf', 'fword'");
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets date_from
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     * @param \DateTime $date_from Дата \"с\"
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets date_to
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     * @param \DateTime $date_to Дата \"до\"
     * @return $this
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets filters
     * @return int[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     * @param int[] $filters Фильтры
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets sources
     * @return string[]
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     * @param string[] $sources Источники
     * @return $this
     */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;

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


