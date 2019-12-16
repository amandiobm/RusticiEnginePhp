<?php
/**
 * MediaFileMetadataSchema
 *
 * PHP version 5
 *
 * @category Class
 * @package  RusticiSoftware\Engine\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rustici Engine API
 *
 * Rustici Engine API
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RusticiSoftware\Engine\V2\Model;

use \ArrayAccess;
use \RusticiSoftware\Engine\V2\ObjectSerializer;

/**
 * MediaFileMetadataSchema Class Doc Comment
 *
 * @category Class
 * @description Schema that indicates metadata values for media file content
 * @package  RusticiSoftware\Engine\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MediaFileMetadataSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MediaFileMetadataSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'description' => 'string',
        'content_language' => 'string',
        'move_on' => 'string',
        'estimated_duration' => 'int',
        'activity_type' => 'string',
        'cmi5_publisher_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
        'description' => null,
        'content_language' => null,
        'move_on' => null,
        'estimated_duration' => 'int32',
        'activity_type' => null,
        'cmi5_publisher_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'title' => 'title',
        'description' => 'description',
        'content_language' => 'contentLanguage',
        'move_on' => 'moveOn',
        'estimated_duration' => 'estimatedDuration',
        'activity_type' => 'activityType',
        'cmi5_publisher_id' => 'cmi5PublisherId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'description' => 'setDescription',
        'content_language' => 'setContentLanguage',
        'move_on' => 'setMoveOn',
        'estimated_duration' => 'setEstimatedDuration',
        'activity_type' => 'setActivityType',
        'cmi5_publisher_id' => 'setCmi5PublisherId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'description' => 'getDescription',
        'content_language' => 'getContentLanguage',
        'move_on' => 'getMoveOn',
        'estimated_duration' => 'getEstimatedDuration',
        'activity_type' => 'getActivityType',
        'cmi5_publisher_id' => 'getCmi5PublisherId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['content_language'] = isset($data['content_language']) ? $data['content_language'] : null;
        $this->container['move_on'] = isset($data['move_on']) ? $data['move_on'] : null;
        $this->container['estimated_duration'] = isset($data['estimated_duration']) ? $data['estimated_duration'] : null;
        $this->container['activity_type'] = isset($data['activity_type']) ? $data['activity_type'] : null;
        $this->container['cmi5_publisher_id'] = isset($data['cmi5_publisher_id']) ? $data['cmi5_publisher_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title for the referenced course content
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the referenced course content
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets content_language
     *
     * @return string
     */
    public function getContentLanguage()
    {
        return $this->container['content_language'];
    }

    /**
     * Sets content_language
     *
     * @param string $content_language Language code that specifies the content's language. The default value is 'en'.
     *
     * @return $this
     */
    public function setContentLanguage($content_language)
    {
        $this->container['content_language'] = $content_language;

        return $this;
    }

    /**
     * Gets move_on
     *
     * @return string
     */
    public function getMoveOn()
    {
        return $this->container['move_on'];
    }

    /**
     * Sets move_on
     *
     * @param string $move_on Value of the cmi5 'moveOn' property for the referenced course content. The default value is 'Completed'.
     *
     * @return $this
     */
    public function setMoveOn($move_on)
    {
        $this->container['move_on'] = $move_on;

        return $this;
    }

    /**
     * Gets estimated_duration
     *
     * @return int
     */
    public function getEstimatedDuration()
    {
        return $this->container['estimated_duration'];
    }

    /**
     * Sets estimated_duration
     *
     * @param int $estimated_duration Estimated number of seconds required to complete the course.
     *
     * @return $this
     */
    public function setEstimatedDuration($estimated_duration)
    {
        $this->container['estimated_duration'] = $estimated_duration;

        return $this;
    }

    /**
     * Gets activity_type
     *
     * @return string
     */
    public function getActivityType()
    {
        return $this->container['activity_type'];
    }

    /**
     * Sets activity_type
     *
     * @param string $activity_type The IRI activity type of the media content. If not provided, reasonable default values will be assumed based on the content's 'contentType'.
     *
     * @return $this
     */
    public function setActivityType($activity_type)
    {
        $this->container['activity_type'] = $activity_type;

        return $this;
    }

    /**
     * Gets cmi5_publisher_id
     *
     * @return string
     */
    public function getCmi5PublisherId()
    {
        return $this->container['cmi5_publisher_id'];
    }

    /**
     * Sets cmi5_publisher_id
     *
     * @param string $cmi5_publisher_id The publisher ID for a cmi5 course.
     *
     * @return $this
     */
    public function setCmi5PublisherId($cmi5_publisher_id)
    {
        $this->container['cmi5_publisher_id'] = $cmi5_publisher_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


