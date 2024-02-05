<?php
/**
 * Lti13ToolConfigurationSchema
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
 * Lti13ToolConfigurationSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Engine\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Lti13ToolConfigurationSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Lti13ToolConfigurationSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'public_key' => 'string',
        'oidc_login_initiations_url' => 'string',
        'redirect_uri' => 'string',
        'json_web_key_set_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'public_key' => null,
        'oidc_login_initiations_url' => null,
        'redirect_uri' => null,
        'json_web_key_set_url' => null
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
        'public_key' => 'publicKey',
        'oidc_login_initiations_url' => 'oidcLoginInitiationsUrl',
        'redirect_uri' => 'redirectUri',
        'json_web_key_set_url' => 'jsonWebKeySetUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'public_key' => 'setPublicKey',
        'oidc_login_initiations_url' => 'setOidcLoginInitiationsUrl',
        'redirect_uri' => 'setRedirectUri',
        'json_web_key_set_url' => 'setJsonWebKeySetUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'public_key' => 'getPublicKey',
        'oidc_login_initiations_url' => 'getOidcLoginInitiationsUrl',
        'redirect_uri' => 'getRedirectUri',
        'json_web_key_set_url' => 'getJsonWebKeySetUrl'
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
        $this->container['public_key'] = isset($data['public_key']) ? $data['public_key'] : null;
        $this->container['oidc_login_initiations_url'] = isset($data['oidc_login_initiations_url']) ? $data['oidc_login_initiations_url'] : null;
        $this->container['redirect_uri'] = isset($data['redirect_uri']) ? $data['redirect_uri'] : null;
        $this->container['json_web_key_set_url'] = isset($data['json_web_key_set_url']) ? $data['json_web_key_set_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['public_key'] === null) {
            $invalidProperties[] = "'public_key' can't be null";
        }
        if ($this->container['oidc_login_initiations_url'] === null) {
            $invalidProperties[] = "'oidc_login_initiations_url' can't be null";
        }
        if ($this->container['redirect_uri'] === null) {
            $invalidProperties[] = "'redirect_uri' can't be null";
        }
        if ($this->container['json_web_key_set_url'] === null) {
            $invalidProperties[] = "'json_web_key_set_url' can't be null";
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
     * Gets public_key
     *
     * @return string
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string $public_key Public key for LTI 1.3 tool
     *
     * @return $this
     */
    public function setPublicKey($public_key)
    {
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets oidc_login_initiations_url
     *
     * @return string
     */
    public function getOidcLoginInitiationsUrl()
    {
        return $this->container['oidc_login_initiations_url'];
    }

    /**
     * Sets oidc_login_initiations_url
     *
     * @param string $oidc_login_initiations_url Endpoint where the OIDC Authorization flow will be initiated
     *
     * @return $this
     */
    public function setOidcLoginInitiationsUrl($oidc_login_initiations_url)
    {
        $this->container['oidc_login_initiations_url'] = $oidc_login_initiations_url;

        return $this;
    }

    /**
     * Gets redirect_uri
     *
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->container['redirect_uri'];
    }

    /**
     * Sets redirect_uri
     *
     * @param string $redirect_uri Endpoint where the OIDC Authorization Response should be sent
     *
     * @return $this
     */
    public function setRedirectUri($redirect_uri)
    {
        $this->container['redirect_uri'] = $redirect_uri;

        return $this;
    }

    /**
     * Gets json_web_key_set_url
     *
     * @return string
     */
    public function getJsonWebKeySetUrl()
    {
        return $this->container['json_web_key_set_url'];
    }

    /**
     * Sets json_web_key_set_url
     *
     * @param string $json_web_key_set_url Path to the tool's JSON Web Key Set
     *
     * @return $this
     */
    public function setJsonWebKeySetUrl($json_web_key_set_url)
    {
        $this->container['json_web_key_set_url'] = $json_web_key_set_url;

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


