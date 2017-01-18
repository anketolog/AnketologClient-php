<?php
/**
 * SurveyQuestionFreelistTest
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
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [swagger-codegen](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://${app.service.domain}/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://${app.apiv2.domain}/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://${app.service.domain}/user/account/apikey)   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://${app.apiv2.domain}/survey/manage/info' ```
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
 * SurveyQuestionFreelistTest Class Doc Comment
 *
 * @category    Class */
// * @description Вопрос \&quot;группа свободных ответов\&quot;
/**
 * @package     AnketologClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SurveyQuestionFreelistTest extends \PHPUnit_Framework_TestCase
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
     * Test "SurveyQuestionFreelist"
     */
    public function testSurveyQuestionFreelist()
    {

    }

    /**
     * Test attribute "title"
     */
    public function testPropertyTitle()
    {

    }

    /**
     * Test attribute "no"
     */
    public function testPropertyNo()
    {

    }

    /**
     * Test attribute "is_required"
     */
    public function testPropertyIsRequired()
    {

    }

    /**
     * Test attribute "has_comment"
     */
    public function testPropertyHasComment()
    {

    }

    /**
     * Test attribute "comment"
     */
    public function testPropertyComment()
    {

    }

    /**
     * Test attribute "has_unable_answer"
     */
    public function testPropertyHasUnableAnswer()
    {

    }

    /**
     * Test attribute "branchrules"
     */
    public function testPropertyBranchrules()
    {

    }

    /**
     * Test attribute "visiblerules"
     */
    public function testPropertyVisiblerules()
    {

    }

    /**
     * Test attribute "is_multiline"
     */
    public function testPropertyIsMultiline()
    {

    }

    /**
     * Test attribute "datatype"
     */
    public function testPropertyDatatype()
    {

    }

    /**
     * Test attribute "has_other_answer"
     */
    public function testPropertyHasOtherAnswer()
    {

    }

    /**
     * Test attribute "options"
     */
    public function testPropertyOptions()
    {

    }

    /**
     * Test attribute "options_sort"
     */
    public function testPropertyOptionsSort()
    {

    }

}
