# BlackboardRest\CourseGroupsApi

All URIs are relative to *https://localhost/learn/api/public/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**coursesCourseIdGroupsGet**](CourseGroupsApi.md#coursesCourseIdGroupsGet) | **GET** courses/{courseId}/groups | Get Groups
[**coursesCourseIdGroupsGroupIdDelete**](CourseGroupsApi.md#coursesCourseIdGroupsGroupIdDelete) | **DELETE** courses/{courseId}/groups/{groupId} | Delete Group
[**coursesCourseIdGroupsGroupIdGet**](CourseGroupsApi.md#coursesCourseIdGroupsGroupIdGet) | **GET** courses/{courseId}/groups/{groupId} | Get Group
[**coursesCourseIdGroupsGroupIdPatch**](CourseGroupsApi.md#coursesCourseIdGroupsGroupIdPatch) | **PATCH** courses/{courseId}/groups/{groupId} | Update Group
[**coursesCourseIdGroupsPost**](CourseGroupsApi.md#coursesCourseIdGroupsPost) | **POST** courses/{courseId}/groups | Create Group


# **coursesCourseIdGroupsGet**
> \BlackboardRest\Model\InlineResponse20012 coursesCourseIdGroupsGet($course_id, $offset, $limit, $sort, $fields)

Get Groups

Returns a list of group objects for the specified course or organization.  Callers not enrolled in the course must have at least one of the following entitlements:  - 'course.VIEW' - 'system.course.VIEW'  **Since**: 3100.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGroupsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$offset = 56; // int | The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter.
$limit = 56; // int | The maximum number of results to be returned. There may be less if the query returned less than the maximum.
$sort = "sort_example"; // string | Properties to sort by. This is a comma-delimited list of JSON properties, with an optional \"(desc)\" suffix to request a descending sort for that property. e.g. \"name.family(desc),created\"  **Since**: 3100.0.0
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->coursesCourseIdGroupsGet($course_id, $offset, $limit, $sort, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGroupsApi->coursesCourseIdGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **offset** | **int**| The number of rows to skip before beginning to return rows. An offset of 0 is the same as omitting the offset parameter. | [optional]
 **limit** | **int**| The maximum number of results to be returned. There may be less if the query returned less than the maximum. | [optional]
 **sort** | **string**| Properties to sort by. This is a comma-delimited list of JSON properties, with an optional \&quot;(desc)\&quot; suffix to request a descending sort for that property. e.g. \&quot;name.family(desc),created\&quot;  **Since**: 3100.0.0 | [optional]
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesCourseIdGroupsGroupIdDelete**
> coursesCourseIdGroupsGroupIdDelete($course_id, $group_id)

Delete Group

Deletes a group from the specified course.  Required entitlements:  - course.group.DELETE  **Since**: 3100.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGroupsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$group_id = "group_id_example"; // string | The group ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:breakfastClub              |

try {
    $api_instance->coursesCourseIdGroupsGroupIdDelete($course_id, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseGroupsApi->coursesCourseIdGroupsGroupIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **group_id** | **string**| The group ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:breakfastClub              | |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesCourseIdGroupsGroupIdGet**
> \BlackboardRest\Model\Group coursesCourseIdGroupsGroupIdGet($course_id, $group_id, $fields)

Get Group

Loads a group in the specified course.  Entitlement and field visibility rules are the same as those when loading the groups collection.  **Since**: 3100.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGroupsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$group_id = "group_id_example"; // string | The group ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:breakfastClub              |
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->coursesCourseIdGroupsGroupIdGet($course_id, $group_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGroupsApi->coursesCourseIdGroupsGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **group_id** | **string**| The group ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:breakfastClub              | |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Group**](../Model/Group.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesCourseIdGroupsGroupIdPatch**
> \BlackboardRest\Model\Group coursesCourseIdGroupsGroupIdPatch($course_id, $group_id, $input, $fields)

Update Group

Updates a group in the specified course.  Minimal entitlements required:  - course.group.MODIFY  **Since**: 3100.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGroupsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$group_id = "group_id_example"; // string | The group ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:breakfastClub              |
$input = new \BlackboardRest\Model\Input20(); // \BlackboardRest\Model\Input20 | JSON input object.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->coursesCourseIdGroupsGroupIdPatch($course_id, $group_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGroupsApi->coursesCourseIdGroupsGroupIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **group_id** | **string**| The group ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:breakfastClub              | |
 **input** | [**\BlackboardRest\Model\Input20**](../Model/\BlackboardRest\Model\Input20.md)| JSON input object. |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Group**](../Model/Group.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **coursesCourseIdGroupsPost**
> \BlackboardRest\Model\Group coursesCourseIdGroupsPost($course_id, $input, $fields)

Create Group

Creates a group in the specified course.  Minimal entitlements required:  - course.group.CREATE  **Since**: 3100.5.0

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\CourseGroupsApi();
$course_id = "course_id_example"; // string | The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 |
$input = new \BlackboardRest\Model\Input19(); // \BlackboardRest\Model\Input19 | JSON input object.
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $result = $api_instance->coursesCourseIdGroupsPost($course_id, $input, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseGroupsApi->coursesCourseIdGroupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| The course or organization ID.  This may be the primary ID, or any of the secondary IDs prefixed with the ID type.    | ID type    | Example                               |  |------------|---------------------------------------|  | primary    | _123_1                                |  | externalId | externalId:math101                    |  | courseId   | courseId:math101                      |  | uuid       | uuid:915c7567d76d444abf1eed56aad3beb5 | |
 **input** | [**\BlackboardRest\Model\Input19**](../Model/\BlackboardRest\Model\Input19.md)| JSON input object. |
 **fields** | **string**| A comma-delimited list of fields to include in the response. If not specified, all fields will be returned. | [optional]

### Return type

[**\BlackboardRest\Model\Group**](../Model/Group.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

