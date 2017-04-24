<?php
/**
 * TermsApi
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
 * TermsApi Class Doc Comment
 *
 * @category Class
 * @package  BlackboardRest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TermsApi
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
     * @return TermsApi
     */
    public function setApiClient(\BlackboardRest\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation learnApiPublicV1TermsGet
     *
     * Get Terms
     *
     * @param int $offset The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. (optional)
     * @param int $limit The maximum number of results to be returned. There may be less if the query returned less than the maximum. (optional)
     * @param string $external_id Search for term with externalId properties that contain this value.  **Since**: 3100.6.0 (optional)
     * @param string $data_source_id Search for term with this dataSourceId.  **Since**: 3100.6.0 (optional)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return \BlackboardRest\Model\InlineResponse2007
     */
    public function learnApiPublicV1TermsGet($offset = null, $limit = null, $external_id = null, $data_source_id = null, $fields = null)
    {
        list($response) = $this->learnApiPublicV1TermsGetWithHttpInfo($offset, $limit, $external_id, $data_source_id, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1TermsGetWithHttpInfo
     *
     * Get Terms
     *
     * @param int $offset The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. (optional)
     * @param int $limit The maximum number of results to be returned. There may be less if the query returned less than the maximum. (optional)
     * @param string $external_id Search for term with externalId properties that contain this value.  **Since**: 3100.6.0 (optional)
     * @param string $data_source_id Search for term with this dataSourceId.  **Since**: 3100.6.0 (optional)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of \BlackboardRest\Model\InlineResponse2007, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1TermsGetWithHttpInfo($offset = null, $limit = null, $external_id = null, $data_source_id = null, $fields = null)
    {
        // parse inputs
        $resourcePath = "/learn/api/public/v1/terms";
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
        if ($data_source_id !== null) {
            $queryParams['dataSourceId'] = $this->apiClient->getSerializer()->toQueryValue($data_source_id);
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
                '\BlackboardRest\Model\InlineResponse2007',
                '/learn/api/public/v1/terms'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlackboardRest\Model\InlineResponse2007', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\InlineResponse2007', $e->getResponseHeaders());
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
     * Operation learnApiPublicV1TermsPost
     *
     * Create Term
     *
     * @param \BlackboardRest\Model\Input12 $input JSON input object. (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return \BlackboardRest\Model\Term
     */
    public function learnApiPublicV1TermsPost($input, $fields = null)
    {
        list($response) = $this->learnApiPublicV1TermsPostWithHttpInfo($input, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1TermsPostWithHttpInfo
     *
     * Create Term
     *
     * @param \BlackboardRest\Model\Input12 $input JSON input object. (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of \BlackboardRest\Model\Term, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1TermsPostWithHttpInfo($input, $fields = null)
    {
        // verify the required parameter 'input' is set
        if ($input === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input when calling learnApiPublicV1TermsPost');
        }
        // parse inputs
        $resourcePath = "/learn/api/public/v1/terms";
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
                '\BlackboardRest\Model\Term',
                '/learn/api/public/v1/terms'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlackboardRest\Model\Term', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\Term', $e->getResponseHeaders());
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

    /**
     * Operation learnApiPublicV1TermsTermIdDelete
     *
     * Delete Term
     *
     * @param string $term_id The term ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example                |  |------------|------------------------|  | primary    | _123_1                 |  | externalId | externalId:spring.2016 | (required)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return void
     */
    public function learnApiPublicV1TermsTermIdDelete($term_id)
    {
        list($response) = $this->learnApiPublicV1TermsTermIdDeleteWithHttpInfo($term_id);
        return $response;
    }

    /**
     * Operation learnApiPublicV1TermsTermIdDeleteWithHttpInfo
     *
     * Delete Term
     *
     * @param string $term_id The term ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example                |  |------------|------------------------|  | primary    | _123_1                 |  | externalId | externalId:spring.2016 | (required)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1TermsTermIdDeleteWithHttpInfo($term_id)
    {
        // verify the required parameter 'term_id' is set
        if ($term_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $term_id when calling learnApiPublicV1TermsTermIdDelete');
        }
        // parse inputs
        $resourcePath = "/learn/api/public/v1/terms/{termId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($term_id !== null) {
            $resourcePath = str_replace(
                "{" . "termId" . "}",
                $this->apiClient->getSerializer()->toPathValue($term_id),
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
                '/learn/api/public/v1/terms/{termId}'
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
     * Operation learnApiPublicV1TermsTermIdGet
     *
     * Get Term
     *
     * @param string $term_id The term ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example                |  |------------|------------------------|  | primary    | _123_1                 |  | externalId | externalId:spring.2016 | (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return \BlackboardRest\Model\Term
     */
    public function learnApiPublicV1TermsTermIdGet($term_id, $fields = null)
    {
        list($response) = $this->learnApiPublicV1TermsTermIdGetWithHttpInfo($term_id, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1TermsTermIdGetWithHttpInfo
     *
     * Get Term
     *
     * @param string $term_id The term ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example                |  |------------|------------------------|  | primary    | _123_1                 |  | externalId | externalId:spring.2016 | (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of \BlackboardRest\Model\Term, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1TermsTermIdGetWithHttpInfo($term_id, $fields = null)
    {
        // verify the required parameter 'term_id' is set
        if ($term_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $term_id when calling learnApiPublicV1TermsTermIdGet');
        }
        // parse inputs
        $resourcePath = "/learn/api/public/v1/terms/{termId}";
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
        if ($term_id !== null) {
            $resourcePath = str_replace(
                "{" . "termId" . "}",
                $this->apiClient->getSerializer()->toPathValue($term_id),
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
                '\BlackboardRest\Model\Term',
                '/learn/api/public/v1/terms/{termId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlackboardRest\Model\Term', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\Term', $e->getResponseHeaders());
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
     * Operation learnApiPublicV1TermsTermIdPatch
     *
     * Update Term
     *
     * @param string $term_id The term ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example                |  |------------|------------------------|  | primary    | _123_1                 |  | externalId | externalId:spring.2016 | (required)
     * @param \BlackboardRest\Model\Input13 $input JSON input object. (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return \BlackboardRest\Model\Term
     */
    public function learnApiPublicV1TermsTermIdPatch($term_id, $input, $fields = null)
    {
        list($response) = $this->learnApiPublicV1TermsTermIdPatchWithHttpInfo($term_id, $input, $fields);
        return $response;
    }

    /**
     * Operation learnApiPublicV1TermsTermIdPatchWithHttpInfo
     *
     * Update Term
     *
     * @param string $term_id The term ID.  This may be the primary ID, or the secondary ID prefixed with the ID type.    | ID type    | Example                |  |------------|------------------------|  | primary    | _123_1                 |  | externalId | externalId:spring.2016 | (required)
     * @param \BlackboardRest\Model\Input13 $input JSON input object. (required)
     * @param string $fields A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. (optional)
     * @throws \BlackboardRest\ApiException on non-2xx response
     * @return array of \BlackboardRest\Model\Term, HTTP status code, HTTP response headers (array of strings)
     */
    public function learnApiPublicV1TermsTermIdPatchWithHttpInfo($term_id, $input, $fields = null)
    {
        // verify the required parameter 'term_id' is set
        if ($term_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $term_id when calling learnApiPublicV1TermsTermIdPatch');
        }
        // verify the required parameter 'input' is set
        if ($input === null) {
            throw new \InvalidArgumentException('Missing the required parameter $input when calling learnApiPublicV1TermsTermIdPatch');
        }
        // parse inputs
        $resourcePath = "/learn/api/public/v1/terms/{termId}";
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
        if ($term_id !== null) {
            $resourcePath = str_replace(
                "{" . "termId" . "}",
                $this->apiClient->getSerializer()->toPathValue($term_id),
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
                '\BlackboardRest\Model\Term',
                '/learn/api/public/v1/terms/{termId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BlackboardRest\Model\Term', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BlackboardRest\Model\Term', $e->getResponseHeaders());
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
}
