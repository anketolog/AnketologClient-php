<?php
/**
 * PlanManageChangeBody
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
 * PlanManageChangeBody Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PlanManageChangeBody implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PlanManageChangeBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'plan' => 'string',
        'period' => 'string'
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
        'plan' => 'plan',
        'period' => 'period'
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
        'plan' => 'setPlan',
        'period' => 'setPeriod'
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
        'plan' => 'getPlan',
        'period' => 'getPeriod'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const PLAN_BASE = 'base';
    const PLAN_PROFI = 'profi';
    const PLAN_PROFI_PLUS_1 = 'profi-plus-1';
    const PLAN_PROFI_PLUS_2 = 'profi-plus-2';
    const PLAN_PROFI_PLUS_3 = 'profi-plus-3';
    const PLAN_PROFI_PLUS_4 = 'profi-plus-4';
    const PLAN_PROFI_PLUS_5 = 'profi-plus-5';
    const PERIOD_P1_M = 'P1M';
    const PERIOD_P3_M = 'P3M';
    const PERIOD_P6_M = 'P6M';
    const PERIOD_P1_Y = 'P1Y';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPlanAllowableValues()
    {
        return [
            self::PLAN_BASE,
            self::PLAN_PROFI,
            self::PLAN_PROFI_PLUS_1,
            self::PLAN_PROFI_PLUS_2,
            self::PLAN_PROFI_PLUS_3,
            self::PLAN_PROFI_PLUS_4,
            self::PLAN_PROFI_PLUS_5,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPeriodAllowableValues()
    {
        return [
            self::PERIOD_P1_M,
            self::PERIOD_P3_M,
            self::PERIOD_P6_M,
            self::PERIOD_P1_Y,
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
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['plan'] === null) {
            $invalid_properties[] = "'plan' can't be null";
        }
        $allowed_values = array("base", "profi", "profi-plus-1", "profi-plus-2", "profi-plus-3", "profi-plus-4", "profi-plus-5");
        if (!in_array($this->container['plan'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'plan', must be one of #{allowed_values}.";
        }

        if ($this->container['period'] === null) {
            $invalid_properties[] = "'period' can't be null";
        }
        $allowed_values = array("P1M", "P3M", "P6M", "P1Y");
        if (!in_array($this->container['period'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'period', must be one of #{allowed_values}.";
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
        if ($this->container['plan'] === null) {
            return false;
        }
        $allowed_values = array("base", "profi", "profi-plus-1", "profi-plus-2", "profi-plus-3", "profi-plus-4", "profi-plus-5");
        if (!in_array($this->container['plan'], $allowed_values)) {
            return false;
        }
        if ($this->container['period'] === null) {
            return false;
        }
        $allowed_values = array("P1M", "P3M", "P6M", "P1Y");
        if (!in_array($this->container['period'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets plan
     * @return string
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan
     * @param string $plan Тариф  * `base` - тариф \"базовый\" * `profi` - тариф \"профи\" * `profi-plus-1` - пакет \"профи плюс\" №1 * `profi-plus-2` - пакет \"профи плюс\" №2 * `profi-plus-3` - пакет \"профи плюс\" №3 * `profi-plus-4` - пакет \"профи плюс\" №4 * `profi-plus-5` - пакет \"профи плюс\" №5
     * @return $this
     */
    public function setPlan($plan)
    {
        $allowed_values = array('base', 'profi', 'profi-plus-1', 'profi-plus-2', 'profi-plus-3', 'profi-plus-4', 'profi-plus-5');
        if (!in_array($plan, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'plan', must be one of 'base', 'profi', 'profi-plus-1', 'profi-plus-2', 'profi-plus-3', 'profi-plus-4', 'profi-plus-5'");
        }
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets period
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     * @param string $period Период  * `P1M` - 1 месяц * `P3M` - 3 месяца * `P6M` - 6 месяцев * `P1Y` - 1 год
     * @return $this
     */
    public function setPeriod($period)
    {
        $allowed_values = array('P1M', 'P3M', 'P6M', 'P1Y');
        if (!in_array($period, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'period', must be one of 'P1M', 'P3M', 'P6M', 'P1Y'");
        }
        $this->container['period'] = $period;

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


