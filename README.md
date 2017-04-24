# SwaggerClient-php
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
    $api_instance->learnApiPublicV1AnnouncementsAnnouncementIdDelete($announcement_id, $fields);
} catch (Exception $e) {
    echo 'Exception when calling AnnouncementsApi->learnApiPublicV1AnnouncementsAnnouncementIdDelete: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AnnouncementsApi* | [**learnApiPublicV1AnnouncementsAnnouncementIdDelete**](docs/Api/AnnouncementsApi.md#learnapipublicv1announcementsannouncementiddelete) | **DELETE** /learn/api/public/v1/announcements/{announcementId} | Delete Announcement
*AnnouncementsApi* | [**learnApiPublicV1AnnouncementsAnnouncementIdGet**](docs/Api/AnnouncementsApi.md#learnapipublicv1announcementsannouncementidget) | **GET** /learn/api/public/v1/announcements/{announcementId} | Get Announcement
*AnnouncementsApi* | [**learnApiPublicV1AnnouncementsAnnouncementIdPatch**](docs/Api/AnnouncementsApi.md#learnapipublicv1announcementsannouncementidpatch) | **PATCH** /learn/api/public/v1/announcements/{announcementId} | Update Announcement
*AnnouncementsApi* | [**learnApiPublicV1AnnouncementsGet**](docs/Api/AnnouncementsApi.md#learnapipublicv1announcementsget) | **GET** /learn/api/public/v1/announcements | Get Announcements
*AnnouncementsApi* | [**learnApiPublicV1AnnouncementsPost**](docs/Api/AnnouncementsApi.md#learnapipublicv1announcementspost) | **POST** /learn/api/public/v1/announcements | Create Announcement
*ContentApi* | [**learnApiPublicV1CoursesCourseIdContentsContentIdChildrenGet**](docs/Api/ContentApi.md#learnapipublicv1coursescourseidcontentscontentidchildrenget) | **GET** /learn/api/public/v1/courses/{courseId}/contents/{contentId}/children | Get Children
*ContentApi* | [**learnApiPublicV1CoursesCourseIdContentsContentIdChildrenPost**](docs/Api/ContentApi.md#learnapipublicv1coursescourseidcontentscontentidchildrenpost) | **POST** /learn/api/public/v1/courses/{courseId}/contents/{contentId}/children | Create Child
*ContentApi* | [**learnApiPublicV1CoursesCourseIdContentsContentIdDelete**](docs/Api/ContentApi.md#learnapipublicv1coursescourseidcontentscontentiddelete) | **DELETE** /learn/api/public/v1/courses/{courseId}/contents/{contentId} | Delete Content
*ContentApi* | [**learnApiPublicV1CoursesCourseIdContentsContentIdGet**](docs/Api/ContentApi.md#learnapipublicv1coursescourseidcontentscontentidget) | **GET** /learn/api/public/v1/courses/{courseId}/contents/{contentId} | Get Content
*ContentApi* | [**learnApiPublicV1CoursesCourseIdContentsContentIdPatch**](docs/Api/ContentApi.md#learnapipublicv1coursescourseidcontentscontentidpatch) | **PATCH** /learn/api/public/v1/courses/{courseId}/contents/{contentId} | Update Content
*ContentApi* | [**learnApiPublicV1CoursesCourseIdContentsGet**](docs/Api/ContentApi.md#learnapipublicv1coursescourseidcontentsget) | **GET** /learn/api/public/v1/courses/{courseId}/contents | Get Contents
*ContentApi* | [**learnApiPublicV1CoursesCourseIdContentsPost**](docs/Api/ContentApi.md#learnapipublicv1coursescourseidcontentspost) | **POST** /learn/api/public/v1/courses/{courseId}/contents | Create Content
*ContentGroupAssignmentsApi* | [**learnApiPublicV1CoursesCourseIdContentsContentIdGroupsGet**](docs/Api/ContentGroupAssignmentsApi.md#learnapipublicv1coursescourseidcontentscontentidgroupsget) | **GET** /learn/api/public/v1/courses/{courseId}/contents/{contentId}/groups | Get Content Groups
*ContentGroupAssignmentsApi* | [**learnApiPublicV1CoursesCourseIdContentsContentIdGroupsGroupIdDelete**](docs/Api/ContentGroupAssignmentsApi.md#learnapipublicv1coursescourseidcontentscontentidgroupsgroupiddelete) | **DELETE** /learn/api/public/v1/courses/{courseId}/contents/{contentId}/groups/{groupId} | Delete Content Group
*ContentGroupAssignmentsApi* | [**learnApiPublicV1CoursesCourseIdContentsContentIdGroupsGroupIdGet**](docs/Api/ContentGroupAssignmentsApi.md#learnapipublicv1coursescourseidcontentscontentidgroupsgroupidget) | **GET** /learn/api/public/v1/courses/{courseId}/contents/{contentId}/groups/{groupId} | Get Content Group
*ContentGroupAssignmentsApi* | [**learnApiPublicV1CoursesCourseIdContentsContentIdGroupsGroupIdPut**](docs/Api/ContentGroupAssignmentsApi.md#learnapipublicv1coursescourseidcontentscontentidgroupsgroupidput) | **PUT** /learn/api/public/v1/courses/{courseId}/contents/{contentId}/groups/{groupId} | Create Content Group
*CourseGradesApi* | [**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsAttemptIdGet**](docs/Api/CourseGradesApi.md#learnapipublicv1coursescourseidgradebookcolumnscolumnidattemptsattemptidget) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId}/attempts/{attemptId} | Get Column Attempt
*CourseGradesApi* | [**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdAttemptsGet**](docs/Api/CourseGradesApi.md#learnapipublicv1coursescourseidgradebookcolumnscolumnidattemptsget) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId}/attempts | Get Column Attempts
*CourseGradesApi* | [**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdDelete**](docs/Api/CourseGradesApi.md#learnapipublicv1coursescourseidgradebookcolumnscolumniddelete) | **DELETE** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId} | Delete Grade Column
*CourseGradesApi* | [**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdGet**](docs/Api/CourseGradesApi.md#learnapipublicv1coursescourseidgradebookcolumnscolumnidget) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId} | Get Grade Column
*CourseGradesApi* | [**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdPatch**](docs/Api/CourseGradesApi.md#learnapipublicv1coursescourseidgradebookcolumnscolumnidpatch) | **PATCH** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId} | Update Grade Column
*CourseGradesApi* | [**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersGet**](docs/Api/CourseGradesApi.md#learnapipublicv1coursescourseidgradebookcolumnscolumnidusersget) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId}/users | Get Column Grades
*CourseGradesApi* | [**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdGet**](docs/Api/CourseGradesApi.md#learnapipublicv1coursescourseidgradebookcolumnscolumnidusersuseridget) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId}/users/{userId} | Get Column Grade
*CourseGradesApi* | [**learnApiPublicV1CoursesCourseIdGradebookColumnsColumnIdUsersUserIdPatch**](docs/Api/CourseGradesApi.md#learnapipublicv1coursescourseidgradebookcolumnscolumnidusersuseridpatch) | **PATCH** /learn/api/public/v1/courses/{courseId}/gradebook/columns/{columnId}/users/{userId} | Update Column Grade
*CourseGradesApi* | [**learnApiPublicV1CoursesCourseIdGradebookColumnsGet**](docs/Api/CourseGradesApi.md#learnapipublicv1coursescourseidgradebookcolumnsget) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/columns | Get Grade Columns
*CourseGradesApi* | [**learnApiPublicV1CoursesCourseIdGradebookColumnsPost**](docs/Api/CourseGradesApi.md#learnapipublicv1coursescourseidgradebookcolumnspost) | **POST** /learn/api/public/v1/courses/{courseId}/gradebook/columns | Create Grade Column
*CourseGradesApi* | [**learnApiPublicV1CoursesCourseIdGradebookUsersUserIdGet**](docs/Api/CourseGradesApi.md#learnapipublicv1coursescourseidgradebookusersuseridget) | **GET** /learn/api/public/v1/courses/{courseId}/gradebook/users/{userId} | Get User Grades
*CourseGroupUsersApi* | [**learnApiPublicV1CoursesCourseIdGroupsGroupIdUsersGet**](docs/Api/CourseGroupUsersApi.md#learnapipublicv1coursescourseidgroupsgroupidusersget) | **GET** /learn/api/public/v1/courses/{courseId}/groups/{groupId}/users | Get Group Memberships
*CourseGroupUsersApi* | [**learnApiPublicV1CoursesCourseIdGroupsGroupIdUsersUserIdDelete**](docs/Api/CourseGroupUsersApi.md#learnapipublicv1coursescourseidgroupsgroupidusersuseriddelete) | **DELETE** /learn/api/public/v1/courses/{courseId}/groups/{groupId}/users/{userId} | Delete Group Membership
*CourseGroupUsersApi* | [**learnApiPublicV1CoursesCourseIdGroupsGroupIdUsersUserIdGet**](docs/Api/CourseGroupUsersApi.md#learnapipublicv1coursescourseidgroupsgroupidusersuseridget) | **GET** /learn/api/public/v1/courses/{courseId}/groups/{groupId}/users/{userId} | Get Group Membership
*CourseGroupUsersApi* | [**learnApiPublicV1CoursesCourseIdGroupsGroupIdUsersUserIdPut**](docs/Api/CourseGroupUsersApi.md#learnapipublicv1coursescourseidgroupsgroupidusersuseridput) | **PUT** /learn/api/public/v1/courses/{courseId}/groups/{groupId}/users/{userId} | Put Group Membership
*CourseGroupsApi* | [**learnApiPublicV1CoursesCourseIdGroupsGet**](docs/Api/CourseGroupsApi.md#learnapipublicv1coursescourseidgroupsget) | **GET** /learn/api/public/v1/courses/{courseId}/groups | Get Groups
*CourseGroupsApi* | [**learnApiPublicV1CoursesCourseIdGroupsGroupIdDelete**](docs/Api/CourseGroupsApi.md#learnapipublicv1coursescourseidgroupsgroupiddelete) | **DELETE** /learn/api/public/v1/courses/{courseId}/groups/{groupId} | Delete Group
*CourseGroupsApi* | [**learnApiPublicV1CoursesCourseIdGroupsGroupIdGet**](docs/Api/CourseGroupsApi.md#learnapipublicv1coursescourseidgroupsgroupidget) | **GET** /learn/api/public/v1/courses/{courseId}/groups/{groupId} | Get Group
*CourseGroupsApi* | [**learnApiPublicV1CoursesCourseIdGroupsGroupIdPatch**](docs/Api/CourseGroupsApi.md#learnapipublicv1coursescourseidgroupsgroupidpatch) | **PATCH** /learn/api/public/v1/courses/{courseId}/groups/{groupId} | Update Group
*CourseGroupsApi* | [**learnApiPublicV1CoursesCourseIdGroupsPost**](docs/Api/CourseGroupsApi.md#learnapipublicv1coursescourseidgroupspost) | **POST** /learn/api/public/v1/courses/{courseId}/groups | Create Group
*CourseMembershipsApi* | [**learnApiPublicV1CoursesCourseIdUsersGet**](docs/Api/CourseMembershipsApi.md#learnapipublicv1coursescourseidusersget) | **GET** /learn/api/public/v1/courses/{courseId}/users | Get Memberships
*CourseMembershipsApi* | [**learnApiPublicV1CoursesCourseIdUsersUserIdDelete**](docs/Api/CourseMembershipsApi.md#learnapipublicv1coursescourseidusersuseriddelete) | **DELETE** /learn/api/public/v1/courses/{courseId}/users/{userId} | Delete Membership
*CourseMembershipsApi* | [**learnApiPublicV1CoursesCourseIdUsersUserIdGet**](docs/Api/CourseMembershipsApi.md#learnapipublicv1coursescourseidusersuseridget) | **GET** /learn/api/public/v1/courses/{courseId}/users/{userId} | Get Membership
*CourseMembershipsApi* | [**learnApiPublicV1CoursesCourseIdUsersUserIdPatch**](docs/Api/CourseMembershipsApi.md#learnapipublicv1coursescourseidusersuseridpatch) | **PATCH** /learn/api/public/v1/courses/{courseId}/users/{userId} | Update Membership
*CourseMembershipsApi* | [**learnApiPublicV1CoursesCourseIdUsersUserIdPut**](docs/Api/CourseMembershipsApi.md#learnapipublicv1coursescourseidusersuseridput) | **PUT** /learn/api/public/v1/courses/{courseId}/users/{userId} | Create Membership
*CourseMembershipsApi* | [**learnApiPublicV1UsersUserIdCoursesGet**](docs/Api/CourseMembershipsApi.md#learnapipublicv1usersuseridcoursesget) | **GET** /learn/api/public/v1/users/{userId}/courses | Get Memberships
*CoursesApi* | [**learnApiPublicV1CoursesCourseIdChildrenChildCourseIdGet**](docs/Api/CoursesApi.md#learnapipublicv1coursescourseidchildrenchildcourseidget) | **GET** /learn/api/public/v1/courses/{courseId}/children/{childCourseId} | Get Child
*CoursesApi* | [**learnApiPublicV1CoursesCourseIdChildrenGet**](docs/Api/CoursesApi.md#learnapipublicv1coursescourseidchildrenget) | **GET** /learn/api/public/v1/courses/{courseId}/children | Get Children
*CoursesApi* | [**learnApiPublicV1CoursesCourseIdDelete**](docs/Api/CoursesApi.md#learnapipublicv1coursescourseiddelete) | **DELETE** /learn/api/public/v1/courses/{courseId} | Delete Course
*CoursesApi* | [**learnApiPublicV1CoursesCourseIdGet**](docs/Api/CoursesApi.md#learnapipublicv1coursescourseidget) | **GET** /learn/api/public/v1/courses/{courseId} | Get Course
*CoursesApi* | [**learnApiPublicV1CoursesCourseIdPatch**](docs/Api/CoursesApi.md#learnapipublicv1coursescourseidpatch) | **PATCH** /learn/api/public/v1/courses/{courseId} | Update Course
*CoursesApi* | [**learnApiPublicV1CoursesGet**](docs/Api/CoursesApi.md#learnapipublicv1coursesget) | **GET** /learn/api/public/v1/courses | Get Courses
*CoursesApi* | [**learnApiPublicV1CoursesPost**](docs/Api/CoursesApi.md#learnapipublicv1coursespost) | **POST** /learn/api/public/v1/courses | Create Course
*DataSourcesApi* | [**learnApiPublicV1DataSourcesDataSourceIdDelete**](docs/Api/DataSourcesApi.md#learnapipublicv1datasourcesdatasourceiddelete) | **DELETE** /learn/api/public/v1/dataSources/{dataSourceId} | Delete Data Source
*DataSourcesApi* | [**learnApiPublicV1DataSourcesDataSourceIdGet**](docs/Api/DataSourcesApi.md#learnapipublicv1datasourcesdatasourceidget) | **GET** /learn/api/public/v1/dataSources/{dataSourceId} | Get Data Source
*DataSourcesApi* | [**learnApiPublicV1DataSourcesDataSourceIdPatch**](docs/Api/DataSourcesApi.md#learnapipublicv1datasourcesdatasourceidpatch) | **PATCH** /learn/api/public/v1/dataSources/{dataSourceId} | Update Data Source
*DataSourcesApi* | [**learnApiPublicV1DataSourcesGet**](docs/Api/DataSourcesApi.md#learnapipublicv1datasourcesget) | **GET** /learn/api/public/v1/dataSources | Get Data Sources
*DataSourcesApi* | [**learnApiPublicV1DataSourcesPost**](docs/Api/DataSourcesApi.md#learnapipublicv1datasourcespost) | **POST** /learn/api/public/v1/dataSources | Create Data Source
*OauthApi* | [**learnApiPublicV1Oauth2TokenPost**](docs/Api/OauthApi.md#learnapipublicv1oauth2tokenpost) | **POST** /learn/api/public/v1/oauth2/token | Request Token
*SystemApi* | [**learnApiPublicV1SystemVersionGet**](docs/Api/SystemApi.md#learnapipublicv1systemversionget) | **GET** /learn/api/public/v1/system/version | Get Version
*TermsApi* | [**learnApiPublicV1TermsGet**](docs/Api/TermsApi.md#learnapipublicv1termsget) | **GET** /learn/api/public/v1/terms | Get Terms
*TermsApi* | [**learnApiPublicV1TermsPost**](docs/Api/TermsApi.md#learnapipublicv1termspost) | **POST** /learn/api/public/v1/terms | Create Term
*TermsApi* | [**learnApiPublicV1TermsTermIdDelete**](docs/Api/TermsApi.md#learnapipublicv1termstermiddelete) | **DELETE** /learn/api/public/v1/terms/{termId} | Delete Term
*TermsApi* | [**learnApiPublicV1TermsTermIdGet**](docs/Api/TermsApi.md#learnapipublicv1termstermidget) | **GET** /learn/api/public/v1/terms/{termId} | Get Term
*TermsApi* | [**learnApiPublicV1TermsTermIdPatch**](docs/Api/TermsApi.md#learnapipublicv1termstermidpatch) | **PATCH** /learn/api/public/v1/terms/{termId} | Update Term
*UsersApi* | [**learnApiPublicV1UsersGet**](docs/Api/UsersApi.md#learnapipublicv1usersget) | **GET** /learn/api/public/v1/users | Get Users
*UsersApi* | [**learnApiPublicV1UsersPost**](docs/Api/UsersApi.md#learnapipublicv1userspost) | **POST** /learn/api/public/v1/users | Create User
*UsersApi* | [**learnApiPublicV1UsersUserIdDelete**](docs/Api/UsersApi.md#learnapipublicv1usersuseriddelete) | **DELETE** /learn/api/public/v1/users/{userId} | Delete User
*UsersApi* | [**learnApiPublicV1UsersUserIdGet**](docs/Api/UsersApi.md#learnapipublicv1usersuseridget) | **GET** /learn/api/public/v1/users/{userId} | Get User
*UsersApi* | [**learnApiPublicV1UsersUserIdPatch**](docs/Api/UsersApi.md#learnapipublicv1usersuseridpatch) | **PATCH** /learn/api/public/v1/users/{userId} | Update User


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




