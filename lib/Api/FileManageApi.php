<?php
/**
 * FileManageApi
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
 * Do not edit the class manually.
 */

namespace AnketologClient\Api;

use \AnketologClient\Configuration;
use \AnketologClient\ApiClient;
use \AnketologClient\ApiException;
use \AnketologClient\ObjectSerializer;

/**
 * FileManageApi Class Doc Comment
 *
 * @category Class
 * @package  AnketologClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileManageApi
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
            $apiClient->getConfig()->setHost('https://${app.apiv2.domain}/');
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
     * @return FileManageApi
     */
    public function setApiClient(\AnketologClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation fileManageInfo
     *
     * 
     *
     * @param \AnketologClient\Model\FileManageInfoBody $file_manage_info_body  (required)
     * @return \AnketologClient\Model\FileFile
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function fileManageInfo($file_manage_info_body)
    {
        list($response) = $this->fileManageInfoWithHttpInfo($file_manage_info_body);
        return $response;
    }

    /**
     * Operation fileManageInfoWithHttpInfo
     *
     * 
     *
     * @param \AnketologClient\Model\FileManageInfoBody $file_manage_info_body  (required)
     * @return Array of \AnketologClient\Model\FileFile, HTTP status code, HTTP response headers (array of strings)
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function fileManageInfoWithHttpInfo($file_manage_info_body)
    {
        // verify the required parameter 'file_manage_info_body' is set
        if ($file_manage_info_body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file_manage_info_body when calling fileManageInfo');
        }
        // parse inputs
        $resourcePath = "/file/manage/info";
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
        if (isset($file_manage_info_body)) {
            $_tempBody = $file_manage_info_body;
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
                '\AnketologClient\Model\FileFile',
                '/file/manage/info'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\AnketologClient\Model\FileFile', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\FileFile', $e->getResponseHeaders());
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
     * Operation fileManageList
     *
     * 
     *
     * @return \AnketologClient\Model\FileFile[]
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function fileManageList()
    {
        list($response) = $this->fileManageListWithHttpInfo();
        return $response;
    }

    /**
     * Operation fileManageListWithHttpInfo
     *
     * 
     *
     * @return Array of \AnketologClient\Model\FileFile[], HTTP status code, HTTP response headers (array of strings)
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function fileManageListWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/file/manage/list";
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
                '\AnketologClient\Model\FileFile[]',
                '/file/manage/list'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\AnketologClient\Model\FileFile[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\FileFile[]', $e->getResponseHeaders());
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
     * Operation fileManageUpload
     *
     * 
     *
     * @param \AnketologClient\Model\FileManageUploadBody $file_manage_upload_body  (required)
     * @return \AnketologClient\Model\FileFile
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function fileManageUpload($file_manage_upload_body)
    {
        list($response) = $this->fileManageUploadWithHttpInfo($file_manage_upload_body);
        return $response;
    }

    /**
     * Operation fileManageUploadWithHttpInfo
     *
     * 
     *
     * @param \AnketologClient\Model\FileManageUploadBody $file_manage_upload_body  (required)
     * @return Array of \AnketologClient\Model\FileFile, HTTP status code, HTTP response headers (array of strings)
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function fileManageUploadWithHttpInfo($file_manage_upload_body)
    {
        // verify the required parameter 'file_manage_upload_body' is set
        if ($file_manage_upload_body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file_manage_upload_body when calling fileManageUpload');
        }
        // parse inputs
        $resourcePath = "/file/manage/upload";
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
        if (isset($file_manage_upload_body)) {
            $_tempBody = $file_manage_upload_body;
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
                '\AnketologClient\Model\FileFile',
                '/file/manage/upload'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\AnketologClient\Model\FileFile', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\FileFile', $e->getResponseHeaders());
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
