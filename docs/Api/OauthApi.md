# BlackboardRest\OauthApi

All URIs are relative to *https://localhost/learn/api/public/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauth2TokenPost**](OauthApi.md#oauth2TokenPost) | **POST** oauth2/token | Request Token


# **oauth2TokenPost**
> \BlackboardRest\Model\OAuth2AccessToken oauth2TokenPost($grant_type)

Request Token

Requests an OAuth 2 access token.  **Since**: 2015.11.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
BlackboardRest\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
BlackboardRest\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new BlackboardRest\Api\OauthApi();
$grant_type = "grant_type_example"; // string | Must be 'client_credentials'.

try {
    $result = $api_instance->oauth2TokenPost($grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauth2TokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**| Must be &#39;client_credentials&#39;. |

### Return type

[**\BlackboardRest\Model\OAuth2AccessToken**](../Model/OAuth2AccessToken.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

