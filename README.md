# blackboard-rest-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3200.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/mcharris/BlackboardRestPHP.git"
    }
  ],
  "require": {
    "mcharris/BlackboardRestPHP": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
BlackboardRest\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BlackboardRest\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BlackboardRest\Api\AnnouncementsApi();
$announcement_id = "announcement_id_example"; // string |
$fields = "fields_example"; // string | A comma-delimited list of fields to include in the response. If not specified, all fields will be returned.

try {
    $api_instance->announcementsAnnouncementIdDelete($announcement_id, $fields);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementsApi->announcementsAnnouncementIdDelete: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost/learn/api/public/v1/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnnouncementsApi* | [**announcementsAnnouncementIdDelete**](docs/Api/AnnouncementsApi.md#announcementsannouncementiddelete) | **DELETE** announcements/{announcementId} | Delete Announcement
*AnnouncementsApi* | [**announcementsAnnouncementIdGet**](docs/Api/AnnouncementsApi.md#announcementsannouncementidget) | **GET** announcements/{announcementId} | Get Announcement
*AnnouncementsApi* | [**announcementsAnnouncementIdPatch**](docs/Api/AnnouncementsApi.md#announcementsannouncementidpatch) | **PATCH** announcements/{announcementId} | Update Announcement
*AnnouncementsApi* | [**announcementsGet**](docs/Api/AnnouncementsApi.md#announcementsget) | **GET** announcements | Get Announcements
*AnnouncementsApi* | [**announcementsPost**](docs/Api/AnnouncementsApi.md#announcementspost) | **POST** announcements | Create Announcement
*ContentApi* | [**coursesCourseIdContentsContentIdChildrenGet**](docs/Api/ContentApi.md#coursescourseidcontentscontentidchildrenget) | **GET** courses/{courseId}/contents/{contentId}/children | Get Children
*ContentApi* | [**coursesCourseIdContentsContentIdChildrenPost**](docs/Api/ContentApi.md#coursescourseidcontentscontentidchildrenpost) | **POST** courses/{courseId}/contents/{contentId}/children | Create Child
*ContentApi* | [**coursesCourseIdContentsContentIdDelete**](docs/Api/ContentApi.md#coursescourseidcontentscontentiddelete) | **DELETE** courses/{courseId}/contents/{contentId} | Delete Content
*ContentApi* | [**coursesCourseIdContentsContentIdGet**](docs/Api/ContentApi.md#coursescourseidcontentscontentidget) | **GET** courses/{courseId}/contents/{contentId} | Get Content
*ContentApi* | [**coursesCourseIdContentsContentIdPatch**](docs/Api/ContentApi.md#coursescourseidcontentscontentidpatch) | **PATCH** courses/{courseId}/contents/{contentId} | Update Content
*ContentApi* | [**coursesCourseIdContentsGet**](docs/Api/ContentApi.md#coursescourseidcontentsget) | **GET** courses/{courseId}/contents | Get Contents
*ContentApi* | [**coursesCourseIdContentsPost**](docs/Api/ContentApi.md#coursescourseidcontentspost) | **POST** courses/{courseId}/contents | Create Content
*ContentGroupAssignmentsApi* | [**coursesCourseIdContentsContentIdGroupsGet**](docs/Api/ContentGroupAssignmentsApi.md#coursescourseidcontentscontentidgroupsget) | **GET** courses/{courseId}/contents/{contentId}/groups | Get Content Groups
*ContentGroupAssignmentsApi* | [**coursesCourseIdContentsContentIdGroupsGroupIdDelete**](docs/Api/ContentGroupAssignmentsApi.md#coursescourseidcontentscontentidgroupsgroupiddelete) | **DELETE** courses/{courseId}/contents/{contentId}/groups/{groupId} | Delete Content Group
*ContentGroupAssignmentsApi* | [**coursesCourseIdContentsContentIdGroupsGroupIdGet**](docs/Api/ContentGroupAssignmentsApi.md#coursescourseidcontentscontentidgroupsgroupidget) | **GET** courses/{courseId}/contents/{contentId}/groups/{groupId} | Get Content Group
*ContentGroupAssignmentsApi* | [**coursesCourseIdContentsContentIdGroupsGroupIdPut**](docs/Api/ContentGroupAssignmentsApi.md#coursescourseidcontentscontentidgroupsgroupidput) | **PUT** courses/{courseId}/contents/{contentId}/groups/{groupId} | Create Content Group
*CourseGradesApi* | [**coursesCourseIdGradebookColumnsColumnIdAttemptsAttemptIdGet**](docs/Api/CourseGradesApi.md#coursescourseidgradebookcolumnscolumnidattemptsattemptidget) | **GET** courses/{courseId}/gradebook/columns/{columnId}/attempts/{attemptId} | Get Column Attempt
*CourseGradesApi* | [**coursesCourseIdGradebookColumnsColumnIdAttemptsGet**](docs/Api/CourseGradesApi.md#coursescourseidgradebookcolumnscolumnidattemptsget) | **GET** courses/{courseId}/gradebook/columns/{columnId}/attempts | Get Column Attempts
*CourseGradesApi* | [**coursesCourseIdGradebookColumnsColumnIdDelete**](docs/Api/CourseGradesApi.md#coursescourseidgradebookcolumnscolumniddelete) | **DELETE** courses/{courseId}/gradebook/columns/{columnId} | Delete Grade Column
*CourseGradesApi* | [**coursesCourseIdGradebookColumnsColumnIdGet**](docs/Api/CourseGradesApi.md#coursescourseidgradebookcolumnscolumnidget) | **GET** courses/{courseId}/gradebook/columns/{columnId} | Get Grade Column
*CourseGradesApi* | [**coursesCourseIdGradebookColumnsColumnIdPatch**](docs/Api/CourseGradesApi.md#coursescourseidgradebookcolumnscolumnidpatch) | **PATCH** courses/{courseId}/gradebook/columns/{columnId} | Update Grade Column
*CourseGradesApi* | [**coursesCourseIdGradebookColumnsColumnIdUsersGet**](docs/Api/CourseGradesApi.md#coursescourseidgradebookcolumnscolumnidusersget) | **GET** courses/{courseId}/gradebook/columns/{columnId}/users | Get Column Grades
*CourseGradesApi* | [**coursesCourseIdGradebookColumnsColumnIdUsersUserIdGet**](docs/Api/CourseGradesApi.md#coursescourseidgradebookcolumnscolumnidusersuseridget) | **GET** courses/{courseId}/gradebook/columns/{columnId}/users/{userId} | Get Column Grade
*CourseGradesApi* | [**coursesCourseIdGradebookColumnsColumnIdUsersUserIdPatch**](docs/Api/CourseGradesApi.md#coursescourseidgradebookcolumnscolumnidusersuseridpatch) | **PATCH** courses/{courseId}/gradebook/columns/{columnId}/users/{userId} | Update Column Grade
*CourseGradesApi* | [**coursesCourseIdGradebookColumnsGet**](docs/Api/CourseGradesApi.md#coursescourseidgradebookcolumnsget) | **GET** courses/{courseId}/gradebook/columns | Get Grade Columns
*CourseGradesApi* | [**coursesCourseIdGradebookColumnsPost**](docs/Api/CourseGradesApi.md#coursescourseidgradebookcolumnspost) | **POST** courses/{courseId}/gradebook/columns | Create Grade Column
*CourseGradesApi* | [**coursesCourseIdGradebookUsersUserIdGet**](docs/Api/CourseGradesApi.md#coursescourseidgradebookusersuseridget) | **GET** courses/{courseId}/gradebook/users/{userId} | Get User Grades
*CourseGroupUsersApi* | [**coursesCourseIdGroupsGroupIdUsersGet**](docs/Api/CourseGroupUsersApi.md#coursescourseidgroupsgroupidusersget) | **GET** courses/{courseId}/groups/{groupId}/users | Get Group Memberships
*CourseGroupUsersApi* | [**coursesCourseIdGroupsGroupIdUsersUserIdDelete**](docs/Api/CourseGroupUsersApi.md#coursescourseidgroupsgroupidusersuseriddelete) | **DELETE** courses/{courseId}/groups/{groupId}/users/{userId} | Delete Group Membership
*CourseGroupUsersApi* | [**coursesCourseIdGroupsGroupIdUsersUserIdGet**](docs/Api/CourseGroupUsersApi.md#coursescourseidgroupsgroupidusersuseridget) | **GET** courses/{courseId}/groups/{groupId}/users/{userId} | Get Group Membership
*CourseGroupUsersApi* | [**coursesCourseIdGroupsGroupIdUsersUserIdPut**](docs/Api/CourseGroupUsersApi.md#coursescourseidgroupsgroupidusersuseridput) | **PUT** courses/{courseId}/groups/{groupId}/users/{userId} | Put Group Membership
*CourseGroupsApi* | [**coursesCourseIdGroupsGet**](docs/Api/CourseGroupsApi.md#coursescourseidgroupsget) | **GET** courses/{courseId}/groups | Get Groups
*CourseGroupsApi* | [**coursesCourseIdGroupsGroupIdDelete**](docs/Api/CourseGroupsApi.md#coursescourseidgroupsgroupiddelete) | **DELETE** courses/{courseId}/groups/{groupId} | Delete Group
*CourseGroupsApi* | [**coursesCourseIdGroupsGroupIdGet**](docs/Api/CourseGroupsApi.md#coursescourseidgroupsgroupidget) | **GET** courses/{courseId}/groups/{groupId} | Get Group
*CourseGroupsApi* | [**coursesCourseIdGroupsGroupIdPatch**](docs/Api/CourseGroupsApi.md#coursescourseidgroupsgroupidpatch) | **PATCH** courses/{courseId}/groups/{groupId} | Update Group
*CourseGroupsApi* | [**coursesCourseIdGroupsPost**](docs/Api/CourseGroupsApi.md#coursescourseidgroupspost) | **POST** courses/{courseId}/groups | Create Group
*CourseMembershipsApi* | [**coursesCourseIdUsersGet**](docs/Api/CourseMembershipsApi.md#coursescourseidusersget) | **GET** courses/{courseId}/users | Get Memberships
*CourseMembershipsApi* | [**coursesCourseIdUsersUserIdDelete**](docs/Api/CourseMembershipsApi.md#coursescourseidusersuseriddelete) | **DELETE** courses/{courseId}/users/{userId} | Delete Membership
*CourseMembershipsApi* | [**coursesCourseIdUsersUserIdGet**](docs/Api/CourseMembershipsApi.md#coursescourseidusersuseridget) | **GET** courses/{courseId}/users/{userId} | Get Membership
*CourseMembershipsApi* | [**coursesCourseIdUsersUserIdPatch**](docs/Api/CourseMembershipsApi.md#coursescourseidusersuseridpatch) | **PATCH** courses/{courseId}/users/{userId} | Update Membership
*CourseMembershipsApi* | [**coursesCourseIdUsersUserIdPut**](docs/Api/CourseMembershipsApi.md#coursescourseidusersuseridput) | **PUT** courses/{courseId}/users/{userId} | Create Membership
*CourseMembershipsApi* | [**usersUserIdCoursesGet**](docs/Api/CourseMembershipsApi.md#usersuseridcoursesget) | **GET** users/{userId}/courses | Get Memberships
*CoursesApi* | [**coursesCourseIdChildrenChildCourseIdGet**](docs/Api/CoursesApi.md#coursescourseidchildrenchildcourseidget) | **GET** courses/{courseId}/children/{childCourseId} | Get Child
*CoursesApi* | [**coursesCourseIdChildrenGet**](docs/Api/CoursesApi.md#coursescourseidchildrenget) | **GET** courses/{courseId}/children | Get Children
*CoursesApi* | [**coursesCourseIdDelete**](docs/Api/CoursesApi.md#coursescourseiddelete) | **DELETE** courses/{courseId} | Delete Course
*CoursesApi* | [**coursesCourseIdGet**](docs/Api/CoursesApi.md#coursescourseidget) | **GET** courses/{courseId} | Get Course
*CoursesApi* | [**coursesCourseIdPatch**](docs/Api/CoursesApi.md#coursescourseidpatch) | **PATCH** courses/{courseId} | Update Course
*CoursesApi* | [**coursesGet**](docs/Api/CoursesApi.md#coursesget) | **GET** courses | Get Courses
*CoursesApi* | [**coursesPost**](docs/Api/CoursesApi.md#coursespost) | **POST** courses | Create Course
*DataSourcesApi* | [**dataSourcesDataSourceIdDelete**](docs/Api/DataSourcesApi.md#datasourcesdatasourceiddelete) | **DELETE** dataSources/{dataSourceId} | Delete Data Source
*DataSourcesApi* | [**dataSourcesDataSourceIdGet**](docs/Api/DataSourcesApi.md#datasourcesdatasourceidget) | **GET** dataSources/{dataSourceId} | Get Data Source
*DataSourcesApi* | [**dataSourcesDataSourceIdPatch**](docs/Api/DataSourcesApi.md#datasourcesdatasourceidpatch) | **PATCH** dataSources/{dataSourceId} | Update Data Source
*DataSourcesApi* | [**dataSourcesGet**](docs/Api/DataSourcesApi.md#datasourcesget) | **GET** dataSources | Get Data Sources
*DataSourcesApi* | [**dataSourcesPost**](docs/Api/DataSourcesApi.md#datasourcespost) | **POST** dataSources | Create Data Source
*OauthApi* | [**oauth2TokenPost**](docs/Api/OauthApi.md#oauth2tokenpost) | **POST** oauth2/token | Request Token
*SystemApi* | [**systemVersionGet**](docs/Api/SystemApi.md#systemversionget) | **GET** system/version | Get Version
*TermsApi* | [**termsGet**](docs/Api/TermsApi.md#termsget) | **GET** terms | Get Terms
*TermsApi* | [**termsPost**](docs/Api/TermsApi.md#termspost) | **POST** terms | Create Term
*TermsApi* | [**termsTermIdDelete**](docs/Api/TermsApi.md#termstermiddelete) | **DELETE** terms/{termId} | Delete Term
*TermsApi* | [**termsTermIdGet**](docs/Api/TermsApi.md#termstermidget) | **GET** terms/{termId} | Get Term
*TermsApi* | [**termsTermIdPatch**](docs/Api/TermsApi.md#termstermidpatch) | **PATCH** terms/{termId} | Update Term
*UsersApi* | [**usersGet**](docs/Api/UsersApi.md#usersget) | **GET** users | Get Users
*UsersApi* | [**usersPost**](docs/Api/UsersApi.md#userspost) | **POST** users | Create User
*UsersApi* | [**usersUserIdDelete**](docs/Api/UsersApi.md#usersuseriddelete) | **DELETE** users/{userId} | Delete User
*UsersApi* | [**usersUserIdGet**](docs/Api/UsersApi.md#usersuseridget) | **GET** users/{userId} | Get User
*UsersApi* | [**usersUserIdPatch**](docs/Api/UsersApi.md#usersuseridpatch) | **PATCH** users/{userId} | Update User


## Documentation For Models

 - [AdaptiveRelease](docs/Model/AdaptiveRelease.md)
 - [Address](docs/Model/Address.md)
 - [Announcement](docs/Model/Announcement.md)
 - [AnonymousGrading](docs/Model/AnonymousGrading.md)
 - [AnonymousGrading1](docs/Model/AnonymousGrading1.md)
 - [Attempt](docs/Model/Attempt.md)
 - [Availability](docs/Model/Availability.md)
 - [Availability1](docs/Model/Availability1.md)
 - [Availability2](docs/Model/Availability2.md)
 - [Availability3](docs/Model/Availability3.md)
 - [Availability4](docs/Model/Availability4.md)
 - [Availability5](docs/Model/Availability5.md)
 - [Availability6](docs/Model/Availability6.md)
 - [Availability7](docs/Model/Availability7.md)
 - [Contact](docs/Model/Contact.md)
 - [Content](docs/Model/Content.md)
 - [ContentGroup](docs/Model/ContentGroup.md)
 - [ContentHandler](docs/Model/ContentHandler.md)
 - [Course](docs/Model/Course.md)
 - [CourseChild](docs/Model/CourseChild.md)
 - [DataSource](docs/Model/DataSource.md)
 - [Duration](docs/Model/Duration.md)
 - [Duration1](docs/Model/Duration1.md)
 - [Duration2](docs/Model/Duration2.md)
 - [Enrollment](docs/Model/Enrollment.md)
 - [Enrollment1](docs/Model/Enrollment1.md)
 - [Enrollment2](docs/Model/Enrollment2.md)
 - [Enrollment3](docs/Model/Enrollment3.md)
 - [Grade](docs/Model/Grade.md)
 - [GradeColumn](docs/Model/GradeColumn.md)
 - [Grading](docs/Model/Grading.md)
 - [Grading1](docs/Model/Grading1.md)
 - [Grading2](docs/Model/Grading2.md)
 - [Group](docs/Model/Group.md)
 - [GroupMembership](docs/Model/GroupMembership.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [Input](docs/Model/Input.md)
 - [Input1](docs/Model/Input1.md)
 - [Input10](docs/Model/Input10.md)
 - [Input11](docs/Model/Input11.md)
 - [Input12](docs/Model/Input12.md)
 - [Input13](docs/Model/Input13.md)
 - [Input14](docs/Model/Input14.md)
 - [Input15](docs/Model/Input15.md)
 - [Input16](docs/Model/Input16.md)
 - [Input17](docs/Model/Input17.md)
 - [Input18](docs/Model/Input18.md)
 - [Input19](docs/Model/Input19.md)
 - [Input2](docs/Model/Input2.md)
 - [Input20](docs/Model/Input20.md)
 - [Input3](docs/Model/Input3.md)
 - [Input4](docs/Model/Input4.md)
 - [Input5](docs/Model/Input5.md)
 - [Input6](docs/Model/Input6.md)
 - [Input7](docs/Model/Input7.md)
 - [Input8](docs/Model/Input8.md)
 - [Input9](docs/Model/Input9.md)
 - [Job](docs/Model/Job.md)
 - [Locale](docs/Model/Locale.md)
 - [Locale1](docs/Model/Locale1.md)
 - [Membership](docs/Model/Membership.md)
 - [Name](docs/Model/Name.md)
 - [Name1](docs/Model/Name1.md)
 - [OAuth2AccessToken](docs/Model/OAuth2AccessToken.md)
 - [OAuth2Error](docs/Model/OAuth2Error.md)
 - [PagingInfo](docs/Model/PagingInfo.md)
 - [RestException](docs/Model/RestException.md)
 - [Score](docs/Model/Score.md)
 - [SignupSheet](docs/Model/SignupSheet.md)
 - [SystemRoleEnum](docs/Model/SystemRoleEnum.md)
 - [Term](docs/Model/Term.md)
 - [User](docs/Model/User.md)
 - [Version](docs/Model/Version.md)
 - [VersionInfo](docs/Model/VersionInfo.md)


## Documentation For Authorization


## basic

- **Type**: HTTP basic authentication

## bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author




