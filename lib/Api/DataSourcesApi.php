<?php
/**
 * DataSourcesApi
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
 * DataSourcesApi Class Doc Comment
 *
 * @category Class
 * @package  BlackboardRest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DataSourcesApi
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
     * @return DataSourcesApi
     */
    public function setApiClient(\BlackboardRest\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation learnApiPublicV1DataSourcesDataSourceIdDelete
     *
     * Delete Data Source
     *
     * @param string $data_source_id The data source ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example            |  |------------|--------------------|  | primary    | _123_1             |  | externalId | externalId:math101 | (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return void
     */
    public function learnApiPublicV1DataSourcesDataSourceIdDelete($data_source_id, $fields = null)
    {
        list($response) = $this->learnApiPublicV1DataSourcesDataSourceIdDeleteWithHttpInfo($data_source_id, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1DataSourcesDataSourceIdDeleteWithHttpInfo
     *
     * Delete Data Source
     *
     * @param string $data_source_id The data source ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example            |  |------------|--------------------|  | primary    | _123_1             |  | externalId | externalId:math101 | (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1DataSourcesDataSourceIdDeleteWithHttpInfo($data_source_id, $fields = null)
    {
        // verify the required parameter 'data_source_id' is set
        if ($data_source_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data_source_id when calling learnApiPublicV1DataSourcesDataSourceIdDelete');
        }
        // parse inputs
        $resourcePath = "/learn/api/public/v1/dataSources/{dataSourceId}";
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
        if ($data_source_id !== null) {
            $resourcePath = str_replace(
                "{" . "dataSourceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($data_source_id),
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
                '/learn/api/public/v1/dataSources/{dataSourceId}'
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
     * Operation learnApiPublicV1DataSourcesDataSourceIdGet
     *
     * Get Data Source
     *
     * @param string $data_source_id The data source ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example            |  |------------|--------------------|  | primary    | _123_1             |  | externalId | externalId:math101 | (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return \BlackboardRest\Model\DataSource
     */
    public function learnApiPublicV1DataSourcesDataSourceIdGet($data_source_id, $fields = null)
    {
        list($response) = $this->learnApiPublicV1DataSourcesDataSourceIdGetWithHttpInfo($data_source_id, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1DataSourcesDataSourceIdGetWithHttpInfo
     *
     * Get Data Source
     *
     * @param string $data_source_id The data source ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example            |  |------------|--------------------|  | primary    | _123_1             |  | externalId | externalId:math101 | (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of \BlackboardRest\Model\DataSource, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1DataSourcesDataSourceIdGetWithHttpInfo($data_source_id, $fields = null)
    {
        // verify the required parameter 'data_source_id' is set
        if ($data_source_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data_source_id when calling learnApiPublicV1DataSourcesDataSourceIdGet');
        }
        // parse inputs
        $resourcePath = "/learn/api/public/v1/dataSources/{dataSourceId}";
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
        if ($data_source_id !== null) {
            $resourcePath = str_replace(
                "{" . "dataSourceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($data_source_id),
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
                '\BlackboardRest\Model\DataSource',
                '/learn/api/public/v1/dataSources/{dataSourceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlackboardRest\Model\DataSource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\DataSource', $e->getResponseHeaders());
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
     * Operation learnApiPublicV1DataSourcesDataSourceIdPatch
     *
     * Update Data Source
     *
     * @param string $data_source_id The data source ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example            |  |------------|--------------------|  | primary    | _123_1             |  | externalId | externalId:math101 | (required)
     * @param \BlackboardRest\Model\Input11 $input JSON input object. (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return \BlackboardRest\Model\DataSource
     */
    public function learnApiPublicV1DataSourcesDataSourceIdPatch($data_source_id, $input, $fields = null)
    {
        list($response) = $this->learnApiPublicV1DataSourcesDataSourceIdPatchWithHttpInfo($data_source_id, $input, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1DataSourcesDataSourceIdPatchWithHttpInfo
     *
     * Update Data Source
     *
     * @param string $data_source_id The data source ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example            |  |------------|--------------------|  | primary    | _123_1             |  | externalId | externalId:math101 | (required)
     * @param \BlackboardRest\Model\Input11 $input JSON input object. (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of \BlackboardRest\Model\DataSource, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1DataSourcesDataSourceIdPatchWithHttpInfo($data_source_id, $input, $fields = null)
    {
        // verify the required parameter 'data_source_id' is set
        if ($data_source_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data_source_id when calling learnApiPublicV1DataSourcesDataSourceIdPatch');
        }
        // verify the required parameter 'input' is set
        if ($input === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input when calling learnApiPublicV1DataSourcesDataSourceIdPatch');
        }
        // parse inputs
        $resourcePath = "/learn/api/public/v1/dataSources/{dataSourceId}";
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
        if ($data_source_id !== null) {
            $resourcePath = str_replace(
                "{" . "dataSourceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($data_source_id),
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
                '\BlackboardRest\Model\DataSource',
                '/learn/api/public/v1/dataSources/{dataSourceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlackboardRest\Model\DataSource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\DataSource', $e->getResponseHeaders());
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
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation learnApiPublicV1DataSourcesGet
     *
     * Get Data Sources
     *
     * @param int $offset The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. (optional)
     * @param int $limit The maximum number of results to be returned. There may be less if the query returned less than the maximum. (optional)
     * @param string $external_id The &#39;batchUid&#39; value to use as search criteria.  Currently only supports &#39;contains&#39; searches. (optional)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return \BlackboardRest\Model\InlineResponse2006
     */
    public function learnApiPublicV1DataSourcesGet($offset = null, $limit = null, $external_id = null, $fields = null)
    {
        list($response) = $this->learnApiPublicV1DataSourcesGetWithHttpInfo($offset, $limit, $external_id, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1DataSourcesGetWithHttpInfo
     *
     * Get Data Sources
     *
     * @param int $offset The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. (optional)
     * @param int $limit The maximum number of results to be returned. There may be less if the query returned less than the maximum. (optional)
     * @param string $external_id The &#39;batchUid&#39; value to use as search criteria.  Currently only supports &#39;contains&#39; searches. (optional)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of \BlackboardRest\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1DataSourcesGetWithHttpInfo($offset = null, $limit = null, $external_id = null, $fields = null)
    {
        // parse inputs
        $resourcePath = "/learn/api/public/v1/dataSources";
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
        if ($external_id !== null) {
            $queryParams['externalId'] = $this->apiClient->getSerializer()->toQueryValue($external_id);
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
                '\BlackboardRest\Model\InlineResponse2006',
                '/learn/api/public/v1/dataSources'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlackboardRest\Model\InlineResponse2006', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\InlineResponse2006', $e->getResponseHeaders());
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
     * Operation learnApiPublicV1DataSourcesPost
     *
     * Create Data Source
     *
     * @param \BlackboardRest\Model\Input10 $input JSON input object. (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return \BlackboardRest\Model\DataSource
     */
    public function learnApiPublicV1DataSourcesPost($input, $fields = null)
    {
        list($response) = $this->learnApiPublicV1DataSourcesPostWithHttpInfo($input, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1DataSourcesPostWithHttpInfo
     *
     * Create Data Source
     *
     * @param \BlackboardRest\Model\Input10 $input JSON input object. (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of \BlackboardRest\Model\DataSource, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1DataSourcesPostWithHttpInfo($input, $fields = null)
    {
        // verify the required parameter 'input' is set
        if ($input === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input when calling learnApiPublicV1DataSourcesPost');
        }
        // parse inputs
        $resourcePath = "/learn/api/public/v1/dataSources";
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
                '\BlackboardRest\Model\DataSource',
                '/learn/api/public/v1/dataSources'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlackboardRest\Model\DataSource', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\DataSource', $e->getResponseHeaders());
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
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\RestException', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}