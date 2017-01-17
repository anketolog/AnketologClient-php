<?php
/**
 * SurveyEditorApiTest
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
 * ### Библиотеки для работы с API  * **PHP** https://github.com/anketolog/AnketologClient-php  ### Библиотеки на других языках  Вы можете самостоятельно сгенерировать библиотеку, [на любом доступном языке](https://github.com/swagger-api/swagger-codegen#api-clients), воспользовавшись [swagger-codegen](http://swagger.io/swagger-codegen). Конфигурационный файл можно скачать по [этой ссылке](https://anketolog.loc/api/external/v2/anketolog.yaml).  ### Работа с API  Работа с API осуществляется при помощи отправки POST-запросов на адрес:  ``` https://apiv2.anketolog.loc/{resource} ```  Необходимые параметры передаются в теле запроса в виде JSON-строки:  ``` {     \"survey_id\": \"ID опроса\" } ```  Для авторизации необходимо передать заголовок **X-Anketolog-ApiKey** в запросе:  ``` X-Anketolog-ApiKey: API_KEY ```  Ключ доступа к API можно получить в [разделе настроек](https://anketolog.loc/user/account/apikey)   ### Пример запроса  ``` curl -X POST \\   --header 'X-Anketolog-ApiKey: API_KEY' \\   -d '{\"survey_id\": \"ID опроса\"}' \\   'https://apiv2.anketolog.loc/survey/manage/info' ```
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
 * Please update the test case below to test the endpoint.
 */

namespace AnketologClient;

use \AnketologClient\Configuration;
use \AnketologClient\ApiClient;
use \AnketologClient\ApiException;
use \AnketologClient\ObjectSerializer;

/**
 * SurveyEditorApiTest Class Doc Comment
 *
 * @category Class
 * @package  AnketologClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SurveyEditorApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for surveyEditorAddBranchrule
     *
     * .
     *
     */
    public function testSurveyEditorAddBranchrule()
    {

    }

    /**
     * Test case for surveyEditorAddOption
     *
     * .
     *
     */
    public function testSurveyEditorAddOption()
    {

    }

    /**
     * Test case for surveyEditorAddOptionValue
     *
     * .
     *
     */
    public function testSurveyEditorAddOptionValue()
    {

    }

    /**
     * Test case for surveyEditorAddPage
     *
     * .
     *
     */
    public function testSurveyEditorAddPage()
    {

    }

    /**
     * Test case for surveyEditorAddQuestion
     *
     * .
     *
     */
    public function testSurveyEditorAddQuestion()
    {

    }

    /**
     * Test case for surveyEditorAddRange
     *
     * .
     *
     */
    public function testSurveyEditorAddRange()
    {

    }

    /**
     * Test case for surveyEditorAddRow
     *
     * .
     *
     */
    public function testSurveyEditorAddRow()
    {

    }

    /**
     * Test case for surveyEditorAddVisiblerule
     *
     * .
     *
     */
    public function testSurveyEditorAddVisiblerule()
    {

    }

    /**
     * Test case for surveyEditorMoveOption
     *
     * .
     *
     */
    public function testSurveyEditorMoveOption()
    {

    }

    /**
     * Test case for surveyEditorMoveOptionValue
     *
     * .
     *
     */
    public function testSurveyEditorMoveOptionValue()
    {

    }

    /**
     * Test case for surveyEditorMovePage
     *
     * .
     *
     */
    public function testSurveyEditorMovePage()
    {

    }

    /**
     * Test case for surveyEditorMoveQuestion
     *
     * .
     *
     */
    public function testSurveyEditorMoveQuestion()
    {

    }

    /**
     * Test case for surveyEditorMoveRange
     *
     * .
     *
     */
    public function testSurveyEditorMoveRange()
    {

    }

    /**
     * Test case for surveyEditorMoveRow
     *
     * .
     *
     */
    public function testSurveyEditorMoveRow()
    {

    }

    /**
     * Test case for surveyEditorRemoveBranchrule
     *
     * .
     *
     */
    public function testSurveyEditorRemoveBranchrule()
    {

    }

    /**
     * Test case for surveyEditorRemoveOption
     *
     * .
     *
     */
    public function testSurveyEditorRemoveOption()
    {

    }

    /**
     * Test case for surveyEditorRemoveOptionValue
     *
     * .
     *
     */
    public function testSurveyEditorRemoveOptionValue()
    {

    }

    /**
     * Test case for surveyEditorRemovePage
     *
     * .
     *
     */
    public function testSurveyEditorRemovePage()
    {

    }

    /**
     * Test case for surveyEditorRemoveQuestion
     *
     * .
     *
     */
    public function testSurveyEditorRemoveQuestion()
    {

    }

    /**
     * Test case for surveyEditorRemoveRange
     *
     * .
     *
     */
    public function testSurveyEditorRemoveRange()
    {

    }

    /**
     * Test case for surveyEditorRemoveRow
     *
     * .
     *
     */
    public function testSurveyEditorRemoveRow()
    {

    }

    /**
     * Test case for surveyEditorRemoveVisiblerule
     *
     * .
     *
     */
    public function testSurveyEditorRemoveVisiblerule()
    {

    }

    /**
     * Test case for surveyEditorUpdateBranchrule
     *
     * .
     *
     */
    public function testSurveyEditorUpdateBranchrule()
    {

    }

    /**
     * Test case for surveyEditorUpdateOption
     *
     * .
     *
     */
    public function testSurveyEditorUpdateOption()
    {

    }

    /**
     * Test case for surveyEditorUpdateOptionValue
     *
     * .
     *
     */
    public function testSurveyEditorUpdateOptionValue()
    {

    }

    /**
     * Test case for surveyEditorUpdateQuestion
     *
     * .
     *
     */
    public function testSurveyEditorUpdateQuestion()
    {

    }

    /**
     * Test case for surveyEditorUpdateRange
     *
     * .
     *
     */
    public function testSurveyEditorUpdateRange()
    {

    }

    /**
     * Test case for surveyEditorUpdateRow
     *
     * .
     *
     */
    public function testSurveyEditorUpdateRow()
    {

    }

    /**
     * Test case for surveyEditorUpdateVisiblerule
     *
     * .
     *
     */
    public function testSurveyEditorUpdateVisiblerule()
    {

    }

}
