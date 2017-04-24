<?php
/**
 * AnnouncementsApi
 * PHP version 5
 *
 * @category Class
 * @package  BlackboardRest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Learn APIs
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3200.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BlackboardRest\Api;

use \BlackboardRest\ApiClient;
use \BlackboardRest\ApiException;
use \BlackboardRest\Configuration;
use \BlackboardRest\ObjectSerializer;

/**
 * AnnouncementsApi Class Doc Comment
 *
 * @category Class
 * @package  BlackboardRest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AnnouncementsApi
{
    /**
     * API Client
     *
     * @var \BlackboardRest\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BlackboardRest\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BlackboardRest\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BlackboardRest\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BlackboardRest\ApiClient $apiClient set the API client
     *
     * @return AnnouncementsApi
     */
    public function setApiClient(\BlackboardRest\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation learnApiPublicV1AnnouncementsAnnouncementIdDelete
     *
     * Delete Announcement
     *
     * @param string $announcement_id  (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return void
     */
    public function learnApiPublicV1AnnouncementsAnnouncementIdDelete($announcement_id, $fields = null)
    {
        list($response) = $this->learnApiPublicV1AnnouncementsAnnouncementIdDeleteWithHttpInfo($announcement_id, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1AnnouncementsAnnouncementIdDeleteWithHttpInfo
     *
     * Delete Announcement
     *
     * @param string $announcement_id  (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1AnnouncementsAnnouncementIdDeleteWithHttpInfo($announcement_id, $fields = null)
    {
        // verify the required parameter 'announcement_id' is set
        if ($announcement_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $announcement_id when calling learnApiPublicV1AnnouncementsAnnouncementIdDelete');
        }
        // parse inputs
        $resourcePath = "/learn/api/public/v1/announcements/{announcementId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // path params
        if ($announcement_id !== null) {
            $resourcePath = str_replace(
                "{" . "announcementId" . "}",
                $this->apiClient->getSerializer()->toPathValue($announcement_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/learn/api/public/v1/announcements/{announcementId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation learnApiPublicV1AnnouncementsAnnouncementIdGet
     *
     * Get Announcement
     *
     * @param string $announcement_id  (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return \BlackboardRest\Model\Announcement
     */
    public function learnApiPublicV1AnnouncementsAnnouncementIdGet($announcement_id, $fields = null)
    {
        list($response) = $this->learnApiPublicV1AnnouncementsAnnouncementIdGetWithHttpInfo($announcement_id, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1AnnouncementsAnnouncementIdGetWithHttpInfo
     *
     * Get Announcement
     *
     * @param string $announcement_id  (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of \BlackboardRest\Model\Announcement, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1AnnouncementsAnnouncementIdGetWithHttpInfo($announcement_id, $fields = null)
    {
        // verify the required parameter 'announcement_id' is set
        if ($announcement_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $announcement_id when calling learnApiPublicV1AnnouncementsAnnouncementIdGet');
        }
        // parse inputs
        $resourcePath = "/learn/api/public/v1/announcements/{announcementId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // path params
        if ($announcement_id !== null) {
            $resourcePath = str_replace(
                "{" . "announcementId" . "}",
                $this->apiClient->getSerializer()->toPathValue($announcement_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlackboardRest\Model\Announcement',
                '/learn/api/public/v1/announcements/{announcementId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlackboardRest\Model\Announcement', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\Announcement', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation learnApiPublicV1AnnouncementsAnnouncementIdPatch
     *
     * Update Announcement
     *
     * @param string $announcement_id  (required)
     * @param \BlackboardRest\Model\Input1 $input  (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return \BlackboardRest\Model\Announcement
     */
    public function learnApiPublicV1AnnouncementsAnnouncementIdPatch($announcement_id, $input, $fields = null)
    {
        list($response) = $this->learnApiPublicV1AnnouncementsAnnouncementIdPatchWithHttpInfo($announcement_id, $input, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1AnnouncementsAnnouncementIdPatchWithHttpInfo
     *
     * Update Announcement
     *
     * @param string $announcement_id  (required)
     * @param \BlackboardRest\Model\Input1 $input  (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of \BlackboardRest\Model\Announcement, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1AnnouncementsAnnouncementIdPatchWithHttpInfo($announcement_id, $input, $fields = null)
    {
        // verify the required parameter 'announcement_id' is set
        if ($announcement_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $announcement_id when calling learnApiPublicV1AnnouncementsAnnouncementIdPatch');
        }
        // verify the required parameter 'input' is set
        if ($input === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input when calling learnApiPublicV1AnnouncementsAnnouncementIdPatch');
        }
        // parse inputs
        $resourcePath = "/learn/api/public/v1/announcements/{announcementId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // path params
        if ($announcement_id !== null) {
            $resourcePath = str_replace(
                "{" . "announcementId" . "}",
                $this->apiClient->getSerializer()->toPathValue($announcement_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($input)) {
            $_tempBody = $input;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlackboardRest\Model\Announcement',
                '/learn/api/public/v1/announcements/{announcementId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlackboardRest\Model\Announcement', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\Announcement', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation learnApiPublicV1AnnouncementsGet
     *
     * Get Announcements
     *
     * @param int $offset The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. (optional)
     * @param int $limit The maximum number of results to be returned. There may be less if the query returned less than the maximum. (optional)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return \BlackboardRest\Model\InlineResponse200
     */
    public function learnApiPublicV1AnnouncementsGet($offset = null, $limit = null, $fields = null)
    {
        list($response) = $this->learnApiPublicV1AnnouncementsGetWithHttpInfo($offset, $limit, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1AnnouncementsGetWithHttpInfo
     *
     * Get Announcements
     *
     * @param int $offset The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. (optional)
     * @param int $limit The maximum number of results to be returned. There may be less if the query returned less than the maximum. (optional)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of \BlackboardRest\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1AnnouncementsGetWithHttpInfo($offset = null, $limit = null, $fields = null)
    {
        // parse inputs
        $resourcePath = "/learn/api/public/v1/announcements";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlackboardRest\Model\InlineResponse200',
                '/learn/api/public/v1/announcements'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlackboardRest\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation learnApiPublicV1AnnouncementsPost
     *
     * Create Announcement
     *
     * @param \BlackboardRest\Model\Input $input  (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return \BlackboardRest\Model\Announcement
     */
    public function learnApiPublicV1AnnouncementsPost($input, $fields = null)
    {
        list($response) = $this->learnApiPublicV1AnnouncementsPostWithHttpInfo($input, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1AnnouncementsPostWithHttpInfo
     *
     * Create Announcement
     *
     * @param \BlackboardRest\Model\Input $input  (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of \BlackboardRest\Model\Announcement, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1AnnouncementsPostWithHttpInfo($input, $fields = null)
    {
        // verify the required parameter 'input' is set
        if ($input === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input when calling learnApiPublicV1AnnouncementsPost');
        }
        // parse inputs
        $resourcePath = "/learn/api/public/v1/announcements";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($input)) {
            $_tempBody = $input;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BlackboardRest\Model\Announcement',
                '/learn/api/public/v1/announcements'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlackboardRest\Model\Announcement', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\Announcement', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}