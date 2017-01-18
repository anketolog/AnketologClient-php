<?php
/**
 * CampaignTargetingTest
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
 * Документация к Анкетолог API
 *
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [swagger-codegen](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://anketolog.ru/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://apiv2.anketolog.ru/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://anketolog.ru/user/account/apikey)   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://apiv2.anketolog.ru/survey/manage/info' ```
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
 * CampaignTargetingTest Class Doc Comment
 *
 * @category    Class */
// * @description Целевая аудитория кампании
/**
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignTargetingTest extends \PHPUnit_Framework_TestCase
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
     * Test "CampaignTargeting"
     */
    public function testCampaignTargeting()
    {

    }

    /**
     * Test attribute "vozrast"
     */
    public function testPropertyVozrast()
    {

    }

    /**
     * Test attribute "pol"
     */
    public function testPropertyPol()
    {

    }

    /**
     * Test attribute "mesto_zhitelstva"
     */
    public function testPropertyMestoZhitelstva()
    {

    }

    /**
     * Test attribute "obrazovanie"
     */
    public function testPropertyObrazovanie()
    {

    }

    /**
     * Test attribute "zanyatost"
     */
    public function testPropertyZanyatost()
    {

    }

    /**
     * Test attribute "semya_i_deti"
     */
    public function testPropertySemyaIDeti()
    {

    }

    /**
     * Test attribute "dohody_i_rashody"
     */
    public function testPropertyDohodyIRashody()
    {

    }

    /**
     * Test attribute "zhilischnye_usloviya"
     */
    public function testPropertyZhilischnyeUsloviya()
    {

    }

    /**
     * Test attribute "lichnyy_transport"
     */
    public function testPropertyLichnyyTransport()
    {

    }

    /**
     * Test attribute "peredvizhenie_po_gorodu"
     */
    public function testPropertyPeredvizheniePoGorodu()
    {

    }

    /**
     * Test attribute "aviaperelety"
     */
    public function testPropertyAviaperelety()
    {

    }

    /**
     * Test attribute "poyezdkizhd"
     */
    public function testPropertyPoyezdkizhd()
    {

    }

    /**
     * Test attribute "produkty_pitaniya_i_alkogol"
     */
    public function testPropertyProduktyPitaniyaIAlkogol()
    {

    }

    /**
     * Test attribute "kurenie"
     */
    public function testPropertyKurenie()
    {

    }

    /**
     * Test attribute "odezhda_obuv"
     */
    public function testPropertyOdezhdaObuv()
    {

    }

    /**
     * Test attribute "elektronika"
     */
    public function testPropertyElektronika()
    {

    }

    /**
     * Test attribute "mobilnyy_telefon"
     */
    public function testPropertyMobilnyyTelefon()
    {

    }

    /**
     * Test attribute "internet"
     */
    public function testPropertyInternet()
    {

    }

    /**
     * Test attribute "domashnie_zhivotnye"
     */
    public function testPropertyDomashnieZhivotnye()
    {

    }

    /**
     * Test attribute "platnye_uslugi"
     */
    public function testPropertyPlatnyeUslugi()
    {

    }

    /**
     * Test attribute "krasota"
     */
    public function testPropertyKrasota()
    {

    }

    /**
     * Test attribute "zdorove"
     */
    public function testPropertyZdorove()
    {

    }

    /**
     * Test attribute "kultura_i_dosug"
     */
    public function testPropertyKulturaIDosug()
    {

    }

    /**
     * Test attribute "sport_i_aktivnyy_otdyh"
     */
    public function testPropertySportIAktivnyyOtdyh()
    {

    }

    /**
     * Test attribute "uvlecheniya_i_interesy"
     */
    public function testPropertyUvlecheniyaIInteresy()
    {

    }

    /**
     * Test attribute "puteshestviya"
     */
    public function testPropertyPuteshestviya()
    {

    }

    /**
     * Test attribute "religioznaya_prinadlezhnost"
     */
    public function testPropertyReligioznayaPrinadlezhnost()
    {

    }

    /**
     * Test attribute "politicheskaya_prinadlezhnost"
     */
    public function testPropertyPoliticheskayaPrinadlezhnost()
    {

    }

}
