<?php
/**
 * CampaignCampaign
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
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [генератором](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://anketolog.ru/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://apiv2.anketolog.ru/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://anketolog.ru/user/account/apikey).   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://apiv2.anketolog.ru/survey/manage/info' ```
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
 * CampaignCampaign Class Doc Comment
 *
 * @category    Class */
 // @description Кампания
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignCampaign implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'name' => 'string',
        'create_date' => 'int',
        'start_date' => 'int',
        'finish_date' => 'int',
        'is_complete' => 'bool',
        'status' => 'string',
        'moderation_status' => 'string',
        'moderation_reason' => 'string',
        'unique_respondents' => 'bool',
        'answer_price' => 'int',
        'answer_count' => 'int',
        'targeting' => '\AnketologClient\Model\CampaignTargeting',
        'survey' => '\AnketologClient\Model\SurveySurvey'
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
        'create_date' => 'create_date',
        'start_date' => 'start_date',
        'finish_date' => 'finish_date',
        'is_complete' => 'is_complete',
        'status' => 'status',
        'moderation_status' => 'moderation_status',
        'moderation_reason' => 'moderation_reason',
        'unique_respondents' => 'unique_respondents',
        'answer_price' => 'answer_price',
        'answer_count' => 'answer_count',
        'targeting' => 'targeting',
        'survey' => 'survey'
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
        'create_date' => 'setCreateDate',
        'start_date' => 'setStartDate',
        'finish_date' => 'setFinishDate',
        'is_complete' => 'setIsComplete',
        'status' => 'setStatus',
        'moderation_status' => 'setModerationStatus',
        'moderation_reason' => 'setModerationReason',
        'unique_respondents' => 'setUniqueRespondents',
        'answer_price' => 'setAnswerPrice',
        'answer_count' => 'setAnswerCount',
        'targeting' => 'setTargeting',
        'survey' => 'setSurvey'
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
        'create_date' => 'getCreateDate',
        'start_date' => 'getStartDate',
        'finish_date' => 'getFinishDate',
        'is_complete' => 'getIsComplete',
        'status' => 'getStatus',
        'moderation_status' => 'getModerationStatus',
        'moderation_reason' => 'getModerationReason',
        'unique_respondents' => 'getUniqueRespondents',
        'answer_price' => 'getAnswerPrice',
        'answer_count' => 'getAnswerCount',
        'targeting' => 'getTargeting',
        'survey' => 'getSurvey'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_WAITING = 'waiting';
    const STATUS_PENDING = 'pending';
    const STATUS_ACTIVE = 'active';
    const STATUS_FINISH = 'finish';
    const MODERATION_STATUS_PENDING = 'pending';
    const MODERATION_STATUS_APPROVED = 'approved';
    const MODERATION_STATUS_REJECTED = 'rejected';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_PENDING,
            self::STATUS_ACTIVE,
            self::STATUS_FINISH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getModerationStatusAllowableValues()
    {
        return [
            self::MODERATION_STATUS_PENDING,
            self::MODERATION_STATUS_APPROVED,
            self::MODERATION_STATUS_REJECTED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['finish_date'] = isset($data['finish_date']) ? $data['finish_date'] : null;
        $this->container['is_complete'] = isset($data['is_complete']) ? $data['is_complete'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'waiting';
        $this->container['moderation_status'] = isset($data['moderation_status']) ? $data['moderation_status'] : 'pending';
        $this->container['moderation_reason'] = isset($data['moderation_reason']) ? $data['moderation_reason'] : null;
        $this->container['unique_respondents'] = isset($data['unique_respondents']) ? $data['unique_respondents'] : null;
        $this->container['answer_price'] = isset($data['answer_price']) ? $data['answer_price'] : null;
        $this->container['answer_count'] = isset($data['answer_count']) ? $data['answer_count'] : null;
        $this->container['targeting'] = isset($data['targeting']) ? $data['targeting'] : null;
        $this->container['survey'] = isset($data['survey']) ? $data['survey'] : null;
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
        if ($this->container['create_date'] === null) {
            $invalid_properties[] = "'create_date' can't be null";
        }
        if ($this->container['is_complete'] === null) {
            $invalid_properties[] = "'is_complete' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = array("waiting", "pending", "active", "finish");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

        if ($this->container['moderation_status'] === null) {
            $invalid_properties[] = "'moderation_status' can't be null";
        }
        $allowed_values = array("pending", "approved", "rejected");
        if (!in_array($this->container['moderation_status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'moderation_status', must be one of #{allowed_values}.";
        }

        if ($this->container['unique_respondents'] === null) {
            $invalid_properties[] = "'unique_respondents' can't be null";
        }
        if ($this->container['answer_price'] === null) {
            $invalid_properties[] = "'answer_price' can't be null";
        }
        if ($this->container['answer_count'] === null) {
            $invalid_properties[] = "'answer_count' can't be null";
        }
        if ($this->container['targeting'] === null) {
            $invalid_properties[] = "'targeting' can't be null";
        }
        if ($this->container['survey'] === null) {
            $invalid_properties[] = "'survey' can't be null";
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
        if ($this->container['create_date'] === null) {
            return false;
        }
        if ($this->container['is_complete'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = array("waiting", "pending", "active", "finish");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['moderation_status'] === null) {
            return false;
        }
        $allowed_values = array("pending", "approved", "rejected");
        if (!in_array($this->container['moderation_status'], $allowed_values)) {
            return false;
        }
        if ($this->container['unique_respondents'] === null) {
            return false;
        }
        if ($this->container['answer_price'] === null) {
            return false;
        }
        if ($this->container['answer_count'] === null) {
            return false;
        }
        if ($this->container['targeting'] === null) {
            return false;
        }
        if ($this->container['survey'] === null) {
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
     * Gets start_date
     * @return int
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param int $start_date Дата запуска
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets finish_date
     * @return int
     */
    public function getFinishDate()
    {
        return $this->container['finish_date'];
    }

    /**
     * Sets finish_date
     * @param int $finish_date Дата завершения
     * @return $this
     */
    public function setFinishDate($finish_date)
    {
        $this->container['finish_date'] = $finish_date;

        return $this;
    }

    /**
     * Gets is_complete
     * @return bool
     */
    public function getIsComplete()
    {
        return $this->container['is_complete'];
    }

    /**
     * Sets is_complete
     * @param bool $is_complete Кампания завершена
     * @return $this
     */
    public function setIsComplete($is_complete)
    {
        $this->container['is_complete'] = $is_complete;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Статус кампании
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('waiting', 'pending', 'active', 'finish');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'waiting', 'pending', 'active', 'finish'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets moderation_status
     * @return string
     */
    public function getModerationStatus()
    {
        return $this->container['moderation_status'];
    }

    /**
     * Sets moderation_status
     * @param string $moderation_status Статус модерации
     * @return $this
     */
    public function setModerationStatus($moderation_status)
    {
        $allowed_values = array('pending', 'approved', 'rejected');
        if (!in_array($moderation_status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'moderation_status', must be one of 'pending', 'approved', 'rejected'");
        }
        $this->container['moderation_status'] = $moderation_status;

        return $this;
    }

    /**
     * Gets moderation_reason
     * @return string
     */
    public function getModerationReason()
    {
        return $this->container['moderation_reason'];
    }

    /**
     * Sets moderation_reason
     * @param string $moderation_reason Комментарий модератора
     * @return $this
     */
    public function setModerationReason($moderation_reason)
    {
        $this->container['moderation_reason'] = $moderation_reason;

        return $this;
    }

    /**
     * Gets unique_respondents
     * @return bool
     */
    public function getUniqueRespondents()
    {
        return $this->container['unique_respondents'];
    }

    /**
     * Sets unique_respondents
     * @param bool $unique_respondents Исключить повторные ответы
     * @return $this
     */
    public function setUniqueRespondents($unique_respondents)
    {
        $this->container['unique_respondents'] = $unique_respondents;

        return $this;
    }

    /**
     * Gets answer_price
     * @return int
     */
    public function getAnswerPrice()
    {
        return $this->container['answer_price'];
    }

    /**
     * Sets answer_price
     * @param int $answer_price Стоимость одного ответа
     * @return $this
     */
    public function setAnswerPrice($answer_price)
    {
        $this->container['answer_price'] = $answer_price;

        return $this;
    }

    /**
     * Gets answer_count
     * @return int
     */
    public function getAnswerCount()
    {
        return $this->container['answer_count'];
    }

    /**
     * Sets answer_count
     * @param int $answer_count Количество ответов
     * @return $this
     */
    public function setAnswerCount($answer_count)
    {
        $this->container['answer_count'] = $answer_count;

        return $this;
    }

    /**
     * Gets targeting
     * @return \AnketologClient\Model\CampaignTargeting
     */
    public function getTargeting()
    {
        return $this->container['targeting'];
    }

    /**
     * Sets targeting
     * @param \AnketologClient\Model\CampaignTargeting $targeting
     * @return $this
     */
    public function setTargeting($targeting)
    {
        $this->container['targeting'] = $targeting;

        return $this;
    }

    /**
     * Gets survey
     * @return \AnketologClient\Model\SurveySurvey
     */
    public function getSurvey()
    {
        return $this->container['survey'];
    }

    /**
     * Sets survey
     * @param \AnketologClient\Model\SurveySurvey $survey
     * @return $this
     */
    public function setSurvey($survey)
    {
        $this->container['survey'] = $survey;

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


