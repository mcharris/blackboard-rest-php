<?php
/**
 * Input14
 *
 * PHP version 5
 *
 * @category Class
 * @package  BlackboardRest
 * @author   Swaagger Codegen team
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

namespace BlackboardRest\Model;

use \ArrayAccess;

/**
 * Input14 Class Doc Comment
 *
 * @category    Class
 * @package     BlackboardRest
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Input14 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'input_14';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'external_id' => 'string',
        'data_source_id' => 'string',
        'user_name' => 'string',
        'student_id' => 'string',
        'password' => 'string',
        'education_level' => 'string',
        'gender' => 'string',
        'birth_date' => '\DateTime',
        'system_role_ids' => '\BlackboardRest\Model\SystemRoleEnum[]',
        'availability' => '\BlackboardRest\Model\Availability5',
        'name' => '\BlackboardRest\Model\Name',
        'job' => '\BlackboardRest\Model\Job',
        'contact' => '\BlackboardRest\Model\Contact',
        'address' => '\BlackboardRest\Model\Address',
        'locale' => '\BlackboardRest\Model\Locale1'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'external_id' => 'externalId',
        'data_source_id' => 'dataSourceId',
        'user_name' => 'userName',
        'student_id' => 'studentId',
        'password' => 'password',
        'education_level' => 'educationLevel',
        'gender' => 'gender',
        'birth_date' => 'birthDate',
        'system_role_ids' => 'systemRoleIds',
        'availability' => 'availability',
        'name' => 'name',
        'job' => 'job',
        'contact' => 'contact',
        'address' => 'address',
        'locale' => 'locale'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'external_id' => 'setExternalId',
        'data_source_id' => 'setDataSourceId',
        'user_name' => 'setUserName',
        'student_id' => 'setStudentId',
        'password' => 'setPassword',
        'education_level' => 'setEducationLevel',
        'gender' => 'setGender',
        'birth_date' => 'setBirthDate',
        'system_role_ids' => 'setSystemRoleIds',
        'availability' => 'setAvailability',
        'name' => 'setName',
        'job' => 'setJob',
        'contact' => 'setContact',
        'address' => 'setAddress',
        'locale' => 'setLocale'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'external_id' => 'getExternalId',
        'data_source_id' => 'getDataSourceId',
        'user_name' => 'getUserName',
        'student_id' => 'getStudentId',
        'password' => 'getPassword',
        'education_level' => 'getEducationLevel',
        'gender' => 'getGender',
        'birth_date' => 'getBirthDate',
        'system_role_ids' => 'getSystemRoleIds',
        'availability' => 'getAvailability',
        'name' => 'getName',
        'job' => 'getJob',
        'contact' => 'getContact',
        'address' => 'getAddress',
        'locale' => 'getLocale'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const EDUCATION_LEVEL_K8 = 'K8';
    const EDUCATION_LEVEL_HIGH_SCHOOL = 'HighSchool';
    const EDUCATION_LEVEL_FRESHMAN = 'Freshman';
    const EDUCATION_LEVEL_SOPHOMORE = 'Sophomore';
    const EDUCATION_LEVEL_JUNIOR = 'Junior';
    const EDUCATION_LEVEL_SENIOR = 'Senior';
    const EDUCATION_LEVEL_GRADUATE_SCHOOL = 'GraduateSchool';
    const EDUCATION_LEVEL_POST_GRADUATE_SCHOOL = 'PostGraduateSchool';
    const EDUCATION_LEVEL_UNKNOWN = 'Unknown';
    const GENDER_FEMALE = 'Female';
    const GENDER_MALE = 'Male';
    const GENDER_UNKNOWN = 'Unknown';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEducationLevelAllowableValues()
    {
        return [
            self::EDUCATION_LEVEL_K8,
            self::EDUCATION_LEVEL_HIGH_SCHOOL,
            self::EDUCATION_LEVEL_FRESHMAN,
            self::EDUCATION_LEVEL_SOPHOMORE,
            self::EDUCATION_LEVEL_JUNIOR,
            self::EDUCATION_LEVEL_SENIOR,
            self::EDUCATION_LEVEL_GRADUATE_SCHOOL,
            self::EDUCATION_LEVEL_POST_GRADUATE_SCHOOL,
            self::EDUCATION_LEVEL_UNKNOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_FEMALE,
            self::GENDER_MALE,
            self::GENDER_UNKNOWN,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['data_source_id'] = isset($data['data_source_id']) ? $data['data_source_id'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['student_id'] = isset($data['student_id']) ? $data['student_id'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['education_level'] = isset($data['education_level']) ? $data['education_level'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['system_role_ids'] = isset($data['system_role_ids']) ? $data['system_role_ids'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['job'] = isset($data['job']) ? $data['job'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['user_name'] === null) {
            $invalid_properties[] = "'user_name' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalid_properties[] = "'password' can't be null";
        }
        $allowed_values = ["K8", "HighSchool", "Freshman", "Sophomore", "Junior", "Senior", "GraduateSchool", "PostGraduateSchool", "Unknown"];
        if (!in_array($this->container['education_level'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'education_level', must be one of 'K8', 'HighSchool', 'Freshman', 'Sophomore', 'Junior', 'Senior', 'GraduateSchool', 'PostGraduateSchool', 'Unknown'.";
        }

        $allowed_values = ["Female", "Male", "Unknown"];
        if (!in_array($this->container['gender'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'gender', must be one of 'Female', 'Male', 'Unknown'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['user_name'] === null) {
            return false;
        }
        if ($this->container['password'] === null) {
            return false;
        }
        $allowed_values = ["K8", "HighSchool", "Freshman", "Sophomore", "Junior", "Senior", "GraduateSchool", "PostGraduateSchool", "Unknown"];
        if (!in_array($this->container['education_level'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["Female", "Male", "Unknown"];
        if (!in_array($this->container['gender'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets external_id
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     * @param string $external_id An optional externally-defined unique ID for the user.  Defaults to the userName.  Formerly known as 'batchUid'.
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets data_source_id
     * @return string
     */
    public function getDataSourceId()
    {
        return $this->container['data_source_id'];
    }

    /**
     * Sets data_source_id
     * @param string $data_source_id The ID of the data source associated with this user.  This may optionally be the data source's externalId using the syntax \"externalId:math101\".
     * @return $this
     */
    public function setDataSourceId($data_source_id)
    {
        $this->container['data_source_id'] = $data_source_id;

        return $this;
    }

    /**
     * Gets user_name
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     * @param string $user_name The userName property, shown in the UI.
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets student_id
     * @return string
     */
    public function getStudentId()
    {
        return $this->container['student_id'];
    }

    /**
     * Sets student_id
     * @param string $student_id The user's student ID name or number as defined by the school or institution.
     * @return $this
     */
    public function setStudentId($student_id)
    {
        $this->container['student_id'] = $student_id;

        return $this;
    }

    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     * @param string $password The user's login password.
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets education_level
     * @return string
     */
    public function getEducationLevel()
    {
        return $this->container['education_level'];
    }

    /**
     * Sets education_level
     * @param string $education_level The education level of this user.
     * @return $this
     */
    public function setEducationLevel($education_level)
    {
        $allowed_values = array('K8', 'HighSchool', 'Freshman', 'Sophomore', 'Junior', 'Senior', 'GraduateSchool', 'PostGraduateSchool', 'Unknown');
        if (!is_null($education_level) && (!in_array($education_level, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'education_level', must be one of 'K8', 'HighSchool', 'Freshman', 'Sophomore', 'Junior', 'Senior', 'GraduateSchool', 'PostGraduateSchool', 'Unknown'");
        }
        $this->container['education_level'] = $education_level;

        return $this;
    }

    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param string $gender The gender of this user.
     * @return $this
     */
    public function setGender($gender)
    {
        $allowed_values = array('Female', 'Male', 'Unknown');
        if (!is_null($gender) && (!in_array($gender, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'gender', must be one of 'Female', 'Male', 'Unknown'");
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets birth_date
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     * @param \DateTime $birth_date The birth date of this user.
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets system_role_ids
     * @return \BlackboardRest\Model\SystemRoleEnum[]
     */
    public function getSystemRoleIds()
    {
        return $this->container['system_role_ids'];
    }

    /**
     * Sets system_role_ids
     * @param \BlackboardRest\Model\SystemRoleEnum[] $system_role_ids The system roles (the administrative user roles in the UI) for this user.  The first role in this list is the user's primary system role, while the remaining are secondary system roles.
     * @return $this
     */
    public function setSystemRoleIds($system_role_ids)
    {
        $this->container['system_role_ids'] = $system_role_ids;

        return $this;
    }

    /**
     * Gets availability
     * @return \BlackboardRest\Model\Availability5
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     * @param \BlackboardRest\Model\Availability5 $availability
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets name
     * @return \BlackboardRest\Model\Name
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \BlackboardRest\Model\Name $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets job
     * @return \BlackboardRest\Model\Job
     */
    public function getJob()
    {
        return $this->container['job'];
    }

    /**
     * Sets job
     * @param \BlackboardRest\Model\Job $job
     * @return $this
     */
    public function setJob($job)
    {
        $this->container['job'] = $job;

        return $this;
    }

    /**
     * Gets contact
     * @return \BlackboardRest\Model\Contact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param \BlackboardRest\Model\Contact $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets address
     * @return \BlackboardRest\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \BlackboardRest\Model\Address $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets locale
     * @return \BlackboardRest\Model\Locale1
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     * @param \BlackboardRest\Model\Locale1 $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BlackboardRest\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BlackboardRest\ObjectSerializer::sanitizeForSerialization($this));
    }
}


