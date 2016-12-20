<?php
/**
 * CampaignTargetingZdorove
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
 * CampaignTargetingZdorove Class Doc Comment
 *
 * @category    Class */
 // @description Группа &#x60;Здоровье&#x60; (+10 руб. к стоимости ответа)
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingZdorove implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignTargetingZdorove';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_enabled' => 'bool',
        'zabolevaniya' => 'string',
        'ispolzovanie_medicinskih_uslug' => 'string',
        'problemy_so_zreniem' => 'string',
        'ochki_i_kontaktnye_linzy' => 'string',
        'ogranichennye_vozmozhnosti_zdorovya' => 'string',
        'gruppa_invalidnosti' => 'string'
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
        'is_enabled' => 'is_enabled',
        'zabolevaniya' => 'zabolevaniya',
        'ispolzovanie_medicinskih_uslug' => 'ispolzovanie_medicinskih_uslug',
        'problemy_so_zreniem' => 'problemy_so_zreniem',
        'ochki_i_kontaktnye_linzy' => 'ochki_i_kontaktnye_linzy',
        'ogranichennye_vozmozhnosti_zdorovya' => 'ogranichennye_vozmozhnosti_zdorovya',
        'gruppa_invalidnosti' => 'gruppa_invalidnosti'
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
        'is_enabled' => 'setIsEnabled',
        'zabolevaniya' => 'setZabolevaniya',
        'ispolzovanie_medicinskih_uslug' => 'setIspolzovanieMedicinskihUslug',
        'problemy_so_zreniem' => 'setProblemySoZreniem',
        'ochki_i_kontaktnye_linzy' => 'setOchkiIKontaktnyeLinzy',
        'ogranichennye_vozmozhnosti_zdorovya' => 'setOgranichennyeVozmozhnostiZdorovya',
        'gruppa_invalidnosti' => 'setGruppaInvalidnosti'
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
        'is_enabled' => 'getIsEnabled',
        'zabolevaniya' => 'getZabolevaniya',
        'ispolzovanie_medicinskih_uslug' => 'getIspolzovanieMedicinskihUslug',
        'problemy_so_zreniem' => 'getProblemySoZreniem',
        'ochki_i_kontaktnye_linzy' => 'getOchkiIKontaktnyeLinzy',
        'ogranichennye_vozmozhnosti_zdorovya' => 'getOgranichennyeVozmozhnostiZdorovya',
        'gruppa_invalidnosti' => 'getGruppaInvalidnosti'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const ZABOLEVANIYA__0 = 'option_0';
    const ZABOLEVANIYA__1 = 'option_1';
    const ZABOLEVANIYA__2 = 'option_2';
    const ZABOLEVANIYA__3 = 'option_3';
    const ZABOLEVANIYA__4 = 'option_4';
    const ZABOLEVANIYA__5 = 'option_5';
    const ZABOLEVANIYA__6 = 'option_6';
    const ZABOLEVANIYA__7 = 'option_7';
    const ZABOLEVANIYA__8 = 'option_8';
    const ZABOLEVANIYA__9 = 'option_9';
    const ZABOLEVANIYA__10 = 'option_10';
    const ZABOLEVANIYA__11 = 'option_11';
    const ZABOLEVANIYA__12 = 'option_12';
    const ZABOLEVANIYA__13 = 'option_13';
    const ZABOLEVANIYA__14 = 'option_14';
    const ZABOLEVANIYA__15 = 'option_15';
    const ZABOLEVANIYA__16 = 'option_16';
    const ZABOLEVANIYA__17 = 'option_17';
    const ZABOLEVANIYA__18 = 'option_18';
    const ZABOLEVANIYA__19 = 'option_19';
    const ZABOLEVANIYA__20 = 'option_20';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__0 = 'option_0';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__1 = 'option_1';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__2 = 'option_2';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__3 = 'option_3';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__4 = 'option_4';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__5 = 'option_5';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__6 = 'option_6';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__7 = 'option_7';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__8 = 'option_8';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__9 = 'option_9';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__10 = 'option_10';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__11 = 'option_11';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__12 = 'option_12';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__13 = 'option_13';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__14 = 'option_14';
    const ISPOLZOVANIE_MEDICINSKIH_USLUG__15 = 'option_15';
    const PROBLEMY_SO_ZRENIEM__0 = 'option_0';
    const PROBLEMY_SO_ZRENIEM__1 = 'option_1';
    const OCHKI_I_KONTAKTNYE_LINZY__0 = 'option_0';
    const OCHKI_I_KONTAKTNYE_LINZY__1 = 'option_1';
    const OCHKI_I_KONTAKTNYE_LINZY__2 = 'option_2';
    const OGRANICHENNYE_VOZMOZHNOSTI_ZDOROVYA__0 = 'option_0';
    const OGRANICHENNYE_VOZMOZHNOSTI_ZDOROVYA__1 = 'option_1';
    const GRUPPA_INVALIDNOSTI__0 = 'option_0';
    const GRUPPA_INVALIDNOSTI__1 = 'option_1';
    const GRUPPA_INVALIDNOSTI__2 = 'option_2';
    const GRUPPA_INVALIDNOSTI__3 = 'option_3';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getZabolevaniyaAllowableValues()
    {
        return [
            self::ZABOLEVANIYA__0,
            self::ZABOLEVANIYA__1,
            self::ZABOLEVANIYA__2,
            self::ZABOLEVANIYA__3,
            self::ZABOLEVANIYA__4,
            self::ZABOLEVANIYA__5,
            self::ZABOLEVANIYA__6,
            self::ZABOLEVANIYA__7,
            self::ZABOLEVANIYA__8,
            self::ZABOLEVANIYA__9,
            self::ZABOLEVANIYA__10,
            self::ZABOLEVANIYA__11,
            self::ZABOLEVANIYA__12,
            self::ZABOLEVANIYA__13,
            self::ZABOLEVANIYA__14,
            self::ZABOLEVANIYA__15,
            self::ZABOLEVANIYA__16,
            self::ZABOLEVANIYA__17,
            self::ZABOLEVANIYA__18,
            self::ZABOLEVANIYA__19,
            self::ZABOLEVANIYA__20,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getIspolzovanieMedicinskihUslugAllowableValues()
    {
        return [
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__0,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__1,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__2,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__3,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__4,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__5,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__6,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__7,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__8,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__9,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__10,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__11,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__12,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__13,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__14,
            self::ISPOLZOVANIE_MEDICINSKIH_USLUG__15,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getProblemySoZreniemAllowableValues()
    {
        return [
            self::PROBLEMY_SO_ZRENIEM__0,
            self::PROBLEMY_SO_ZRENIEM__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOchkiIKontaktnyeLinzyAllowableValues()
    {
        return [
            self::OCHKI_I_KONTAKTNYE_LINZY__0,
            self::OCHKI_I_KONTAKTNYE_LINZY__1,
            self::OCHKI_I_KONTAKTNYE_LINZY__2,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOgranichennyeVozmozhnostiZdorovyaAllowableValues()
    {
        return [
            self::OGRANICHENNYE_VOZMOZHNOSTI_ZDOROVYA__0,
            self::OGRANICHENNYE_VOZMOZHNOSTI_ZDOROVYA__1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getGruppaInvalidnostiAllowableValues()
    {
        return [
            self::GRUPPA_INVALIDNOSTI__0,
            self::GRUPPA_INVALIDNOSTI__1,
            self::GRUPPA_INVALIDNOSTI__2,
            self::GRUPPA_INVALIDNOSTI__3,
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
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['zabolevaniya'] = isset($data['zabolevaniya']) ? $data['zabolevaniya'] : null;
        $this->container['ispolzovanie_medicinskih_uslug'] = isset($data['ispolzovanie_medicinskih_uslug']) ? $data['ispolzovanie_medicinskih_uslug'] : null;
        $this->container['problemy_so_zreniem'] = isset($data['problemy_so_zreniem']) ? $data['problemy_so_zreniem'] : null;
        $this->container['ochki_i_kontaktnye_linzy'] = isset($data['ochki_i_kontaktnye_linzy']) ? $data['ochki_i_kontaktnye_linzy'] : null;
        $this->container['ogranichennye_vozmozhnosti_zdorovya'] = isset($data['ogranichennye_vozmozhnosti_zdorovya']) ? $data['ogranichennye_vozmozhnosti_zdorovya'] : null;
        $this->container['gruppa_invalidnosti'] = isset($data['gruppa_invalidnosti']) ? $data['gruppa_invalidnosti'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4", "option_5", "option_6", "option_7", "option_8", "option_9", "option_10", "option_11", "option_12", "option_13", "option_14", "option_15", "option_16", "option_17", "option_18", "option_19", "option_20");
        if (!in_array($this->container['zabolevaniya'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'zabolevaniya', must be one of #{allowed_values}.";
        }

        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4", "option_5", "option_6", "option_7", "option_8", "option_9", "option_10", "option_11", "option_12", "option_13", "option_14", "option_15");
        if (!in_array($this->container['ispolzovanie_medicinskih_uslug'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'ispolzovanie_medicinskih_uslug', must be one of #{allowed_values}.";
        }

        $allowed_values = array("option_0", "option_1");
        if (!in_array($this->container['problemy_so_zreniem'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'problemy_so_zreniem', must be one of #{allowed_values}.";
        }

        $allowed_values = array("option_0", "option_1", "option_2");
        if (!in_array($this->container['ochki_i_kontaktnye_linzy'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'ochki_i_kontaktnye_linzy', must be one of #{allowed_values}.";
        }

        $allowed_values = array("option_0", "option_1");
        if (!in_array($this->container['ogranichennye_vozmozhnosti_zdorovya'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'ogranichennye_vozmozhnosti_zdorovya', must be one of #{allowed_values}.";
        }

        $allowed_values = array("option_0", "option_1", "option_2", "option_3");
        if (!in_array($this->container['gruppa_invalidnosti'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'gruppa_invalidnosti', must be one of #{allowed_values}.";
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
        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4", "option_5", "option_6", "option_7", "option_8", "option_9", "option_10", "option_11", "option_12", "option_13", "option_14", "option_15", "option_16", "option_17", "option_18", "option_19", "option_20");
        if (!in_array($this->container['zabolevaniya'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("option_0", "option_1", "option_2", "option_3", "option_4", "option_5", "option_6", "option_7", "option_8", "option_9", "option_10", "option_11", "option_12", "option_13", "option_14", "option_15");
        if (!in_array($this->container['ispolzovanie_medicinskih_uslug'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("option_0", "option_1");
        if (!in_array($this->container['problemy_so_zreniem'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("option_0", "option_1", "option_2");
        if (!in_array($this->container['ochki_i_kontaktnye_linzy'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("option_0", "option_1");
        if (!in_array($this->container['ogranichennye_vozmozhnosti_zdorovya'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("option_0", "option_1", "option_2", "option_3");
        if (!in_array($this->container['gruppa_invalidnosti'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets is_enabled
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     * @param bool $is_enabled Группа включена
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets zabolevaniya
     * @return string
     */
    public function getZabolevaniya()
    {
        return $this->container['zabolevaniya'];
    }

    /**
     * Sets zabolevaniya
     * @param string $zabolevaniya Параметр `Заболевания`  * `option_0` - Аллергия * `option_1` - Вздутие живота (колит, метеоризм и др.) * `option_2` - Высокий холестерин * `option_3` - Гипертония (высокое кровяное давление) * `option_4` - Гипотония (низкое кровяное давление) * `option_5` - Головные боли (мигрень и др.) * `option_6` - Заболевания глаз (глаукома, катаракта, близорукость, дальнозоркость и др.) * `option_7` - Заболевания ЖКТ * `option_8` - Заболевания легких (бронхит, астма и др.) * `option_9` - Заболевания носа (гайморит, синусит и др.) * `option_10` - Заболевания сердечно-сосудистой системы * `option_11` - Заболевания ушей (отит и др.) * `option_12` - Заболевания центральной нервной системы * `option_13` - Избыточный вес * `option_14` - Кожные заболевания (экзема, акне, др.) * `option_15` - Менструальные боли, ПМС * `option_16` - Психические заболевания (депрессии, синдром хронической усталости и др.) * `option_17` - Проблемы с мочевой системой * `option_18` - Проблемы с половой системой * `option_19` - Рак * `option_20` - Сахарный диабет
     * @return $this
     */
    public function setZabolevaniya($zabolevaniya)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15', 'option_16', 'option_17', 'option_18', 'option_19', 'option_20');
        if (!in_array($zabolevaniya, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'zabolevaniya', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15', 'option_16', 'option_17', 'option_18', 'option_19', 'option_20'");
        }
        $this->container['zabolevaniya'] = $zabolevaniya;

        return $this;
    }

    /**
     * Gets ispolzovanie_medicinskih_uslug
     * @return string
     */
    public function getIspolzovanieMedicinskihUslug()
    {
        return $this->container['ispolzovanie_medicinskih_uslug'];
    }

    /**
     * Sets ispolzovanie_medicinskih_uslug
     * @param string $ispolzovanie_medicinskih_uslug Параметр `Использование платных медицинских услуг`  * `option_0` - Вакцинация * `option_1` - Гинекология * `option_2` - Косметология * `option_3` - Лабораторная диагностика (УЗИ, рентген) * `option_4` - Лабораторные анализы * `option_5` - Массаж * `option_6` - Медосмотр * `option_7` - Неврология * `option_8` - Офтальмология * `option_9` - Педиатрические услуги * `option_10` - Пластическая хирургия * `option_11` - Стоматология * `option_12` - Терапевтические услуги * `option_13` - Услуги других узких специалистов * `option_14` - Физиотерапевтические услуги * `option_15` - Хирургия
     * @return $this
     */
    public function setIspolzovanieMedicinskihUslug($ispolzovanie_medicinskih_uslug)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15');
        if (!in_array($ispolzovanie_medicinskih_uslug, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'ispolzovanie_medicinskih_uslug', must be one of 'option_0', 'option_1', 'option_2', 'option_3', 'option_4', 'option_5', 'option_6', 'option_7', 'option_8', 'option_9', 'option_10', 'option_11', 'option_12', 'option_13', 'option_14', 'option_15'");
        }
        $this->container['ispolzovanie_medicinskih_uslug'] = $ispolzovanie_medicinskih_uslug;

        return $this;
    }

    /**
     * Gets problemy_so_zreniem
     * @return string
     */
    public function getProblemySoZreniem()
    {
        return $this->container['problemy_so_zreniem'];
    }

    /**
     * Sets problemy_so_zreniem
     * @param string $problemy_so_zreniem Параметр `Проблемы со зрением`  * `option_0` - есть * `option_1` - нет
     * @return $this
     */
    public function setProblemySoZreniem($problemy_so_zreniem)
    {
        $allowed_values = array('option_0', 'option_1');
        if (!in_array($problemy_so_zreniem, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'problemy_so_zreniem', must be one of 'option_0', 'option_1'");
        }
        $this->container['problemy_so_zreniem'] = $problemy_so_zreniem;

        return $this;
    }

    /**
     * Gets ochki_i_kontaktnye_linzy
     * @return string
     */
    public function getOchkiIKontaktnyeLinzy()
    {
        return $this->container['ochki_i_kontaktnye_linzy'];
    }

    /**
     * Sets ochki_i_kontaktnye_linzy
     * @param string $ochki_i_kontaktnye_linzy Параметр `Очки и контактные линзы`  * `option_0` - очки * `option_1` - контактные линзы * `option_2` - очки и контактные линзы
     * @return $this
     */
    public function setOchkiIKontaktnyeLinzy($ochki_i_kontaktnye_linzy)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2');
        if (!in_array($ochki_i_kontaktnye_linzy, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'ochki_i_kontaktnye_linzy', must be one of 'option_0', 'option_1', 'option_2'");
        }
        $this->container['ochki_i_kontaktnye_linzy'] = $ochki_i_kontaktnye_linzy;

        return $this;
    }

    /**
     * Gets ogranichennye_vozmozhnosti_zdorovya
     * @return string
     */
    public function getOgranichennyeVozmozhnostiZdorovya()
    {
        return $this->container['ogranichennye_vozmozhnosti_zdorovya'];
    }

    /**
     * Sets ogranichennye_vozmozhnosti_zdorovya
     * @param string $ogranichennye_vozmozhnosti_zdorovya Параметр `Ограниченные возможности здоровья респондента и членов его семьи`  * `option_0` - есть * `option_1` - нет
     * @return $this
     */
    public function setOgranichennyeVozmozhnostiZdorovya($ogranichennye_vozmozhnosti_zdorovya)
    {
        $allowed_values = array('option_0', 'option_1');
        if (!in_array($ogranichennye_vozmozhnosti_zdorovya, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'ogranichennye_vozmozhnosti_zdorovya', must be one of 'option_0', 'option_1'");
        }
        $this->container['ogranichennye_vozmozhnosti_zdorovya'] = $ogranichennye_vozmozhnosti_zdorovya;

        return $this;
    }

    /**
     * Gets gruppa_invalidnosti
     * @return string
     */
    public function getGruppaInvalidnosti()
    {
        return $this->container['gruppa_invalidnosti'];
    }

    /**
     * Sets gruppa_invalidnosti
     * @param string $gruppa_invalidnosti Параметр `Группа инвалидности респондента или членов его семьи`  * `option_0` - I группа * `option_1` - II группа * `option_2` - III группа * `option_3` - нет группы инвалидности
     * @return $this
     */
    public function setGruppaInvalidnosti($gruppa_invalidnosti)
    {
        $allowed_values = array('option_0', 'option_1', 'option_2', 'option_3');
        if (!in_array($gruppa_invalidnosti, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'gruppa_invalidnosti', must be one of 'option_0', 'option_1', 'option_2', 'option_3'");
        }
        $this->container['gruppa_invalidnosti'] = $gruppa_invalidnosti;

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


