<?php
/**
 * CampaignTargetingZdoroveTest
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
 * Please update the test case below to test the model.
 */

namespace AnketologClient;

/**
 * CampaignTargetingZdoroveTest Class Doc Comment
 *
 * @category    Class */
// * @description Группа &#x60;Здоровье&#x60; (+10 руб. к стоимости ответа)
/**
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingZdoroveTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test "CampaignTargetingZdorove"
     */
    public function testCampaignTargetingZdorove()
    {

    }

    /**
     * Test attribute "is_enable"
     */
    public function testPropertyIsEnable()
    {

    }

    /**
     * Test attribute "zabolevaniya"
     */
    public function testPropertyZabolevaniya()
    {

    }

    /**
     * Test attribute "ispolzovanie_medicinskih_uslug"
     */
    public function testPropertyIspolzovanieMedicinskihUslug()
    {

    }

    /**
     * Test attribute "problemy_so_zreniem"
     */
    public function testPropertyProblemySoZreniem()
    {

    }

    /**
     * Test attribute "ochki_i_kontaktnye_linzy"
     */
    public function testPropertyOchkiIKontaktnyeLinzy()
    {

    }

    /**
     * Test attribute "ogranichennye_vozmozhnosti_zdorovya"
     */
    public function testPropertyOgranichennyeVozmozhnostiZdorovya()
    {

    }

    /**
     * Test attribute "gruppa_invalidnosti"
     */
    public function testPropertyGruppaInvalidnosti()
    {

    }

}
