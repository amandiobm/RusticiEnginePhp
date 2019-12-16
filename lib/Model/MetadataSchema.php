<?php
/**
 * MetadataSchema
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
 * MetadataSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Engine\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MetadataSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MetadataSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'title_language' => 'string',
        'description' => 'string',
        'description_language' => 'string',
        'duration' => 'string',
        'typical_time' => 'string',
        'keywords' => 'string[]',
        'plugin_specific_metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
        'title_language' => null,
        'description' => null,
        'description_language' => null,
        'duration' => null,
        'typical_time' => null,
        'keywords' => null,
        'plugin_specific_metadata' => null
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
        'title_language' => 'titleLanguage',
        'description' => 'description',
        'description_language' => 'descriptionLanguage',
        'duration' => 'duration',
        'typical_time' => 'typicalTime',
        'keywords' => 'keywords',
        'plugin_specific_metadata' => 'pluginSpecificMetadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'title_language' => 'setTitleLanguage',
        'description' => 'setDescription',
        'description_language' => 'setDescriptionLanguage',
        'duration' => 'setDuration',
        'typical_time' => 'setTypicalTime',
        'keywords' => 'setKeywords',
        'plugin_specific_metadata' => 'setPluginSpecificMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'title_language' => 'getTitleLanguage',
        'description' => 'getDescription',
        'description_language' => 'getDescriptionLanguage',
        'duration' => 'getDuration',
        'typical_time' => 'getTypicalTime',
        'keywords' => 'getKeywords',
        'plugin_specific_metadata' => 'getPluginSpecificMetadata'
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
        $this->container['title_language'] = isset($data['title_language']) ? $data['title_language'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['description_language'] = isset($data['description_language']) ? $data['description_language'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['typical_time'] = isset($data['typical_time']) ? $data['typical_time'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['plugin_specific_metadata'] = isset($data['plugin_specific_metadata']) ? $data['plugin_specific_metadata'] : null;
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
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets title_language
     *
     * @return string
     */
    public function getTitleLanguage()
    {
        return $this->container['title_language'];
    }

    /**
     * Sets title_language
     *
     * @param string $title_language title_language
     *
     * @return $this
     */
    public function setTitleLanguage($title_language)
    {
        $this->container['title_language'] = $title_language;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description_language
     *
     * @return string
     */
    public function getDescriptionLanguage()
    {
        return $this->container['description_language'];
    }

    /**
     * Sets description_language
     *
     * @param string $description_language description_language
     *
     * @return $this
     */
    public function setDescriptionLanguage($description_language)
    {
        $this->container['description_language'] = $description_language;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets typical_time
     *
     * @return string
     */
    public function getTypicalTime()
    {
        return $this->container['typical_time'];
    }

    /**
     * Sets typical_time
     *
     * @param string $typical_time typical_time
     *
     * @return $this
     */
    public function setTypicalTime($typical_time)
    {
        $this->container['typical_time'] = $typical_time;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[] $keywords keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets plugin_specific_metadata
     *
     * @return object
     */
    public function getPluginSpecificMetadata()
    {
        return $this->container['plugin_specific_metadata'];
    }

    /**
     * Sets plugin_specific_metadata
     *
     * @param object $plugin_specific_metadata plugin_specific_metadata
     *
     * @return $this
     */
    public function setPluginSpecificMetadata($plugin_specific_metadata)
    {
        $this->container['plugin_specific_metadata'] = $plugin_specific_metadata;

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


