<?php
/**
 * SurveyReportApi
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
 * Do not edit the class manually.
 */

namespace AnketologClient\Api;

use \AnketologClient\Configuration;
use \AnketologClient\ApiClient;
use \AnketologClient\ApiException;
use \AnketologClient\ObjectSerializer;

/**
 * SurveyReportApi Class Doc Comment
 *
 * @category Class
 * @package  AnketologClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SurveyReportApi
{

    /**
     * API Client
     *
     * @var \AnketologClient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \AnketologClient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\AnketologClient\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://apiv2.anketolog.ru/');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \AnketologClient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \AnketologClient\ApiClient $apiClient set the API client
     *
     * @return SurveyReportApi
     */
    public function setApiClient(\AnketologClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation surveyReportAggregate
     *
     * 
     *
     * @param \AnketologClient\Model\SurveyReportAggregateBody $survey_report_aggregate_body  (required)
     * @return \AnketologClient\Model\SurveyReportAggregate
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function surveyReportAggregate($survey_report_aggregate_body)
    {
        list($response) = $this->surveyReportAggregateWithHttpInfo($survey_report_aggregate_body);
        return $response;
    }

    /**
     * Operation surveyReportAggregateWithHttpInfo
     *
     * 
     *
     * @param \AnketologClient\Model\SurveyReportAggregateBody $survey_report_aggregate_body  (required)
     * @return Array of \AnketologClient\Model\SurveyReportAggregate, HTTP status code, HTTP response headers (array of strings)
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function surveyReportAggregateWithHttpInfo($survey_report_aggregate_body)
    {
        // verify the required parameter 'survey_report_aggregate_body' is set
        if ($survey_report_aggregate_body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $survey_report_aggregate_body when calling surveyReportAggregate');
        }
        // parse inputs
        $resourcePath = "/survey/report/aggregate";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($survey_report_aggregate_body)) {
            $_tempBody = $survey_report_aggregate_body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-anketolog-apikey');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-anketolog-apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AnketologClient\Model\SurveyReportAggregate',
                '/survey/report/aggregate'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\AnketologClient\Model\SurveyReportAggregate', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\SurveyReportAggregate', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\ResponseError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation surveyReportCreate
     *
     * 
     *
     * @param \AnketologClient\Model\SurveyReportCreateBody $survey_report_create_body  (required)
     * @return \AnketologClient\Model\SurveyReport
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function surveyReportCreate($survey_report_create_body)
    {
        list($response) = $this->surveyReportCreateWithHttpInfo($survey_report_create_body);
        return $response;
    }

    /**
     * Operation surveyReportCreateWithHttpInfo
     *
     * 
     *
     * @param \AnketologClient\Model\SurveyReportCreateBody $survey_report_create_body  (required)
     * @return Array of \AnketologClient\Model\SurveyReport, HTTP status code, HTTP response headers (array of strings)
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function surveyReportCreateWithHttpInfo($survey_report_create_body)
    {
        // verify the required parameter 'survey_report_create_body' is set
        if ($survey_report_create_body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $survey_report_create_body when calling surveyReportCreate');
        }
        // parse inputs
        $resourcePath = "/survey/report/create";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($survey_report_create_body)) {
            $_tempBody = $survey_report_create_body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-anketolog-apikey');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-anketolog-apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AnketologClient\Model\SurveyReport',
                '/survey/report/create'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\AnketologClient\Model\SurveyReport', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\SurveyReport', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\ResponseError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation surveyReportDetail
     *
     * 
     *
     * @param \AnketologClient\Model\SurveyReportDetailBody $survey_report_detail_body  (required)
     * @return \AnketologClient\Model\SurveyReportDetail
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function surveyReportDetail($survey_report_detail_body)
    {
        list($response) = $this->surveyReportDetailWithHttpInfo($survey_report_detail_body);
        return $response;
    }

    /**
     * Operation surveyReportDetailWithHttpInfo
     *
     * 
     *
     * @param \AnketologClient\Model\SurveyReportDetailBody $survey_report_detail_body  (required)
     * @return Array of \AnketologClient\Model\SurveyReportDetail, HTTP status code, HTTP response headers (array of strings)
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function surveyReportDetailWithHttpInfo($survey_report_detail_body)
    {
        // verify the required parameter 'survey_report_detail_body' is set
        if ($survey_report_detail_body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $survey_report_detail_body when calling surveyReportDetail');
        }
        // parse inputs
        $resourcePath = "/survey/report/detail";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($survey_report_detail_body)) {
            $_tempBody = $survey_report_detail_body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-anketolog-apikey');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-anketolog-apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AnketologClient\Model\SurveyReportDetail',
                '/survey/report/detail'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\AnketologClient\Model\SurveyReportDetail', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\SurveyReportDetail', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\ResponseError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation surveyReportInfo
     *
     * 
     *
     * @param \AnketologClient\Model\SurveyReportInfoBody $survey_report_info_body  (required)
     * @return \AnketologClient\Model\SurveyReport
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function surveyReportInfo($survey_report_info_body)
    {
        list($response) = $this->surveyReportInfoWithHttpInfo($survey_report_info_body);
        return $response;
    }

    /**
     * Operation surveyReportInfoWithHttpInfo
     *
     * 
     *
     * @param \AnketologClient\Model\SurveyReportInfoBody $survey_report_info_body  (required)
     * @return Array of \AnketologClient\Model\SurveyReport, HTTP status code, HTTP response headers (array of strings)
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function surveyReportInfoWithHttpInfo($survey_report_info_body)
    {
        // verify the required parameter 'survey_report_info_body' is set
        if ($survey_report_info_body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $survey_report_info_body when calling surveyReportInfo');
        }
        // parse inputs
        $resourcePath = "/survey/report/info";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($survey_report_info_body)) {
            $_tempBody = $survey_report_info_body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-anketolog-apikey');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-anketolog-apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AnketologClient\Model\SurveyReport',
                '/survey/report/info'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\AnketologClient\Model\SurveyReport', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\SurveyReport', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\ResponseError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation surveyReportList
     *
     * 
     *
     * @param \AnketologClient\Model\SurveyReportListBody $survey_report_list_body  (required)
     * @return \AnketologClient\Model\SurveyReport[]
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function surveyReportList($survey_report_list_body)
    {
        list($response) = $this->surveyReportListWithHttpInfo($survey_report_list_body);
        return $response;
    }

    /**
     * Operation surveyReportListWithHttpInfo
     *
     * 
     *
     * @param \AnketologClient\Model\SurveyReportListBody $survey_report_list_body  (required)
     * @return Array of \AnketologClient\Model\SurveyReport[], HTTP status code, HTTP response headers (array of strings)
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function surveyReportListWithHttpInfo($survey_report_list_body)
    {
        // verify the required parameter 'survey_report_list_body' is set
        if ($survey_report_list_body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $survey_report_list_body when calling surveyReportList');
        }
        // parse inputs
        $resourcePath = "/survey/report/list";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($survey_report_list_body)) {
            $_tempBody = $survey_report_list_body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-anketolog-apikey');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-anketolog-apikey'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AnketologClient\Model\SurveyReport[]',
                '/survey/report/list'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\AnketologClient\Model\SurveyReport[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\SurveyReport[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\ResponseError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
