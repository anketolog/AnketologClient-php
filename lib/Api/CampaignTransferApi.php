<?php
/**
 * CampaignTransferApi
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

namespace AnketologClient\Api;

use \AnketologClient\Configuration;
use \AnketologClient\ApiClient;
use \AnketologClient\ApiException;
use \AnketologClient\ObjectSerializer;

/**
 * CampaignTransferApi Class Doc Comment
 *
 * @category Class
 * @package  AnketologClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignTransferApi
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
     * @return CampaignTransferApi
     */
    public function setApiClient(\AnketologClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation campaignTransferInfo
     *
     * 
     *
     * @param \AnketologClient\Model\CampaignTransferInfoBody $campaign_transfer_info_body  (required)
     * @return \AnketologClient\Model\CampaignTransfer
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function campaignTransferInfo($campaign_transfer_info_body)
    {
        list($response) = $this->campaignTransferInfoWithHttpInfo($campaign_transfer_info_body);
        return $response;
    }

    /**
     * Operation campaignTransferInfoWithHttpInfo
     *
     * 
     *
     * @param \AnketologClient\Model\CampaignTransferInfoBody $campaign_transfer_info_body  (required)
     * @return Array of \AnketologClient\Model\CampaignTransfer, HTTP status code, HTTP response headers (array of strings)
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function campaignTransferInfoWithHttpInfo($campaign_transfer_info_body)
    {
        // verify the required parameter 'campaign_transfer_info_body' is set
        if ($campaign_transfer_info_body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $campaign_transfer_info_body when calling campaignTransferInfo');
        }
        // parse inputs
        $resourcePath = "/campaign/transfer/info";
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
        if (isset($campaign_transfer_info_body)) {
            $_tempBody = $campaign_transfer_info_body;
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
                '\AnketologClient\Model\CampaignTransfer',
                '/campaign/transfer/info'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\AnketologClient\Model\CampaignTransfer', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\CampaignTransfer', $e->getResponseHeaders());
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
     * Operation campaignTransferList
     *
     * 
     *
     * @param \AnketologClient\Model\CampaignTransferListBody $campaign_transfer_list_body  (required)
     * @return \AnketologClient\Model\CampaignTransfer[]
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function campaignTransferList($campaign_transfer_list_body)
    {
        list($response) = $this->campaignTransferListWithHttpInfo($campaign_transfer_list_body);
        return $response;
    }

    /**
     * Operation campaignTransferListWithHttpInfo
     *
     * 
     *
     * @param \AnketologClient\Model\CampaignTransferListBody $campaign_transfer_list_body  (required)
     * @return Array of \AnketologClient\Model\CampaignTransfer[], HTTP status code, HTTP response headers (array of strings)
     * @throws \AnketologClient\ApiException on non-2xx response
     */
    public function campaignTransferListWithHttpInfo($campaign_transfer_list_body)
    {
        // verify the required parameter 'campaign_transfer_list_body' is set
        if ($campaign_transfer_list_body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $campaign_transfer_list_body when calling campaignTransferList');
        }
        // parse inputs
        $resourcePath = "/campaign/transfer/list";
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
        if (isset($campaign_transfer_list_body)) {
            $_tempBody = $campaign_transfer_list_body;
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
                '\AnketologClient\Model\CampaignTransfer[]',
                '/campaign/transfer/list'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\AnketologClient\Model\CampaignTransfer[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AnketologClient\Model\CampaignTransfer[]', $e->getResponseHeaders());
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
