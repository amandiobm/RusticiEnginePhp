<?php
/**
 * AboutSchema
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
 * Swagger Codegen version: 2.4.39
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
 * AboutSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Engine\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AboutSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AboutSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'version' => 'string',
        'player' => '\RusticiSoftware\Engine\V2\Model\AboutPlayerSchema',
        'platform' => 'string',
        'distribution' => 'string',
        'integration' => 'string',
        'content_connector_types' => '\RusticiSoftware\Engine\V2\Model\ConnectorTypeSchema[]',
        'plugins' => '\RusticiSoftware\Engine\V2\Model\PluginInformationSchema[]',
        'valid_scopes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'version' => null,
        'player' => null,
        'platform' => null,
        'distribution' => null,
        'integration' => null,
        'content_connector_types' => null,
        'plugins' => null,
        'valid_scopes' => null
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
        'version' => 'version',
        'player' => 'player',
        'platform' => 'platform',
        'distribution' => 'distribution',
        'integration' => 'integration',
        'content_connector_types' => 'contentConnectorTypes',
        'plugins' => 'plugins',
        'valid_scopes' => 'validScopes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
        'player' => 'setPlayer',
        'platform' => 'setPlatform',
        'distribution' => 'setDistribution',
        'integration' => 'setIntegration',
        'content_connector_types' => 'setContentConnectorTypes',
        'plugins' => 'setPlugins',
        'valid_scopes' => 'setValidScopes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
        'player' => 'getPlayer',
        'platform' => 'getPlatform',
        'distribution' => 'getDistribution',
        'integration' => 'getIntegration',
        'content_connector_types' => 'getContentConnectorTypes',
        'plugins' => 'getPlugins',
        'valid_scopes' => 'getValidScopes'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['player'] = isset($data['player']) ? $data['player'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['distribution'] = isset($data['distribution']) ? $data['distribution'] : null;
        $this->container['integration'] = isset($data['integration']) ? $data['integration'] : null;
        $this->container['content_connector_types'] = isset($data['content_connector_types']) ? $data['content_connector_types'] : null;
        $this->container['plugins'] = isset($data['plugins']) ? $data['plugins'] : null;
        $this->container['valid_scopes'] = isset($data['valid_scopes']) ? $data['valid_scopes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['platform'] === null) {
            $invalidProperties[] = "'platform' can't be null";
        }
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
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets player
     *
     * @return \RusticiSoftware\Engine\V2\Model\AboutPlayerSchema
     */
    public function getPlayer()
    {
        return $this->container['player'];
    }

    /**
     * Sets player
     *
     * @param \RusticiSoftware\Engine\V2\Model\AboutPlayerSchema $player player
     *
     * @return $this
     */
    public function setPlayer($player)
    {
        $this->container['player'] = $player;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string $platform platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets distribution
     *
     * @return string
     */
    public function getDistribution()
    {
        return $this->container['distribution'];
    }

    /**
     * Sets distribution
     *
     * @param string $distribution distribution
     *
     * @return $this
     */
    public function setDistribution($distribution)
    {
        $this->container['distribution'] = $distribution;

        return $this;
    }

    /**
     * Gets integration
     *
     * @return string
     */
    public function getIntegration()
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param string $integration Integration class. Only relevant to some customers with Engine installations from before the 2015 release.
     *
     * @return $this
     */
    public function setIntegration($integration)
    {
        $this->container['integration'] = $integration;

        return $this;
    }

    /**
     * Gets content_connector_types
     *
     * @return \RusticiSoftware\Engine\V2\Model\ConnectorTypeSchema[]
     */
    public function getContentConnectorTypes()
    {
        return $this->container['content_connector_types'];
    }

    /**
     * Sets content_connector_types
     *
     * @param \RusticiSoftware\Engine\V2\Model\ConnectorTypeSchema[] $content_connector_types content_connector_types
     *
     * @return $this
     */
    public function setContentConnectorTypes($content_connector_types)
    {
        $this->container['content_connector_types'] = $content_connector_types;

        return $this;
    }

    /**
     * Gets plugins
     *
     * @return \RusticiSoftware\Engine\V2\Model\PluginInformationSchema[]
     */
    public function getPlugins()
    {
        return $this->container['plugins'];
    }

    /**
     * Sets plugins
     *
     * @param \RusticiSoftware\Engine\V2\Model\PluginInformationSchema[] $plugins plugins
     *
     * @return $this
     */
    public function setPlugins($plugins)
    {
        $this->container['plugins'] = $plugins;

        return $this;
    }

    /**
     * Gets valid_scopes
     *
     * @return string[]
     */
    public function getValidScopes()
    {
        return $this->container['valid_scopes'];
    }

    /**
     * Sets valid_scopes
     *
     * @param string[] $valid_scopes valid_scopes
     *
     * @return $this
     */
    public function setValidScopes($valid_scopes)
    {
        $this->container['valid_scopes'] = $valid_scopes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


