<?php
/**
 * Grade
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
 * Grade Class Doc Comment
 *
 * @category    Class
 * @package     BlackboardRest
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Grade implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Grade';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => 'string',
        'column_id' => 'string',
        'status' => 'string',
        'text' => 'string',
        'score' => 'double',
        'overridden' => '\DateTime',
        'notes' => 'string',
        'feedback' => 'string',
        'exempt' => 'bool',
        'corrupt' => 'bool'
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
        'user_id' => 'userId',
        'column_id' => 'columnId',
        'status' => 'status',
        'text' => 'text',
        'score' => 'score',
        'overridden' => 'overridden',
        'notes' => 'notes',
        'feedback' => 'feedback',
        'exempt' => 'exempt',
        'corrupt' => 'corrupt'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'column_id' => 'setColumnId',
        'status' => 'setStatus',
        'text' => 'setText',
        'score' => 'setScore',
        'overridden' => 'setOverridden',
        'notes' => 'setNotes',
        'feedback' => 'setFeedback',
        'exempt' => 'setExempt',
        'corrupt' => 'setCorrupt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'column_id' => 'getColumnId',
        'status' => 'getStatus',
        'text' => 'getText',
        'score' => 'getScore',
        'overridden' => 'getOverridden',
        'notes' => 'getNotes',
        'feedback' => 'getFeedback',
        'exempt' => 'getExempt',
        'corrupt' => 'getCorrupt'
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

    const STATUS_GRADED = 'Graded';
    const STATUS_NEEDS_GRADING = 'NeedsGrading';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_GRADED,
            self::STATUS_NEEDS_GRADING,
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['column_id'] = isset($data['column_id']) ? $data['column_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['overridden'] = isset($data['overridden']) ? $data['overridden'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['feedback'] = isset($data['feedback']) ? $data['feedback'] : null;
        $this->container['exempt'] = isset($data['exempt']) ? $data['exempt'] : null;
        $this->container['corrupt'] = isset($data['corrupt']) ? $data['corrupt'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['column_id'] === null) {
            $invalid_properties[] = "'column_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["Graded", "NeedsGrading"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'Graded', 'NeedsGrading'.";
        }

        if ($this->container['overridden'] === null) {
            $invalid_properties[] = "'overridden' can't be null";
        }
        if ($this->container['corrupt'] === null) {
            $invalid_properties[] = "'corrupt' can't be null";
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

        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['column_id'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["Graded", "NeedsGrading"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['overridden'] === null) {
            return false;
        }
        if ($this->container['corrupt'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param string $user_id The user ID associated with this grade.
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets column_id
     * @return string
     */
    public function getColumnId()
    {
        return $this->container['column_id'];
    }

    /**
     * Sets column_id
     * @param string $column_id The grade column ID for this grade.
     * @return $this
     */
    public function setColumnId($column_id)
    {
        $this->container['column_id'] = $column_id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of this grade.
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('Graded', 'NeedsGrading');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'Graded', 'NeedsGrading'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     * @param string $text The the text representation of this grade.
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets score
     * @return double
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     * @param double $score The the score associated with this grade.
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets overridden
     * @return \DateTime
     */
    public function getOverridden()
    {
        return $this->container['overridden'];
    }

    /**
     * Sets overridden
     * @param \DateTime $overridden The date on which the score associated with this grade was last overridden.  An ISODate value is only returned if this grade is currently overridden; otherwise, returns null.
     * @return $this
     */
    public function setOverridden($overridden)
    {
        $this->container['overridden'] = $overridden;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes The instructor notes associated with this grade.
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets feedback
     * @return string
     */
    public function getFeedback()
    {
        return $this->container['feedback'];
    }

    /**
     * Sets feedback
     * @param string $feedback The instructor feedback associated with this grade.
     * @return $this
     */
    public function setFeedback($feedback)
    {
        $this->container['feedback'] = $feedback;

        return $this;
    }

    /**
     * Gets exempt
     * @return bool
     */
    public function getExempt()
    {
        return $this->container['exempt'];
    }

    /**
     * Sets exempt
     * @param bool $exempt Whether the score associated with this grade is ignored when computing the course grade.
     * @return $this
     */
    public function setExempt($exempt)
    {
        $this->container['exempt'] = $exempt;

        return $this;
    }

    /**
     * Gets corrupt
     * @return bool
     */
    public function getCorrupt()
    {
        return $this->container['corrupt'];
    }

    /**
     * Sets corrupt
     * @param bool $corrupt Whether the grade for a calculated column could be successfully computed.
     * @return $this
     */
    public function setCorrupt($corrupt)
    {
        $this->container['corrupt'] = $corrupt;

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


