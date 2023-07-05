<?php
/**
 * WhatsappPhoneNumberProfileUpdateRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * YCloud API
 *
 * The [YCloud](https://ycloud.com) API is organized around [REST](https://en.wikipedia.org/wiki/Representational_state_transfer). Our API is designed to have predictable, resource-oriented URLs, return [JSON](https://www.json.org) responses, and use standard HTTP response codes and verbs.
 *
 * The version of the OpenAPI document: v2
 * Contact: service@ycloud.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace YCloud\Client\Model;

use \ArrayAccess;
use \YCloud\Client\ObjectSerializer;

/**
 * WhatsappPhoneNumberProfileUpdateRequest Class Doc Comment
 *
 * @category Class
 * @description WhatsApp Phone Number Business Profile. Customers can view your business profile by clicking your business&#39;s name or number in a conversation thread. See also [Business Profiles](https://developers.facebook.com/docs/whatsapp/cloud-api/reference/business-profiles).
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WhatsappPhoneNumberProfileUpdateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhatsappPhoneNumberProfileUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'about' => 'string',
        'address' => 'string',
        'description' => 'string',
        'email' => 'string',
        'profile_picture_url' => 'string',
        'vertical' => '\YCloud\Client\Model\WhatsappPhoneNumberProfileVertical',
        'websites' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'about' => null,
        'address' => null,
        'description' => null,
        'email' => null,
        'profile_picture_url' => null,
        'vertical' => null,
        'websites' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'about' => 'about',
        'address' => 'address',
        'description' => 'description',
        'email' => 'email',
        'profile_picture_url' => 'profilePictureUrl',
        'vertical' => 'vertical',
        'websites' => 'websites'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'about' => 'setAbout',
        'address' => 'setAddress',
        'description' => 'setDescription',
        'email' => 'setEmail',
        'profile_picture_url' => 'setProfilePictureUrl',
        'vertical' => 'setVertical',
        'websites' => 'setWebsites'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'about' => 'getAbout',
        'address' => 'getAddress',
        'description' => 'getDescription',
        'email' => 'getEmail',
        'profile_picture_url' => 'getProfilePictureUrl',
        'vertical' => 'getVertical',
        'websites' => 'getWebsites'
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
        return self::$openAPIModelName;
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
        $this->container['about'] = $data['about'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['profile_picture_url'] = $data['profile_picture_url'] ?? null;
        $this->container['vertical'] = $data['vertical'] ?? null;
        $this->container['websites'] = $data['websites'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['about']) && (mb_strlen($this->container['about']) > 139)) {
            $invalidProperties[] = "invalid value for 'about', the character length must be smaller than or equal to 139.";
        }

        if (!is_null($this->container['about']) && (mb_strlen($this->container['about']) < 1)) {
            $invalidProperties[] = "invalid value for 'about', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) > 256)) {
            $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 128)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['websites']) && (count($this->container['websites']) > 2)) {
            $invalidProperties[] = "invalid value for 'websites', number of items must be less than or equal to 2.";
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
     * Gets about
     *
     * @return string|null
     */
    public function getAbout()
    {
        return $this->container['about'];
    }

    /**
     * Sets about
     *
     * @param string|null $about The business's **About** text. This text appears in the business's profile, beneath its profile image, phone number, and contact buttons. - String cannot be empty. - Strings must be between 1 and 139 characters. - Rendered emojis are supported however their unicode values are not. Emoji unicode values must be Java- or JavaScript-escape encoded. - Hyperlinks can be included but will not render as clickable links. - Markdown is not supported.
     *
     * @return self
     */
    public function setAbout($about)
    {
        if (!is_null($about) && (mb_strlen($about) > 139)) {
            throw new \InvalidArgumentException('invalid length for $about when calling WhatsappPhoneNumberProfileUpdateRequest., must be smaller than or equal to 139.');
        }
        if (!is_null($about) && (mb_strlen($about) < 1)) {
            throw new \InvalidArgumentException('invalid length for $about when calling WhatsappPhoneNumberProfileUpdateRequest., must be bigger than or equal to 1.');
        }

        $this->container['about'] = $about;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Address of the business. Character limit 256.
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (!is_null($address) && (mb_strlen($address) > 256)) {
            throw new \InvalidArgumentException('invalid length for $address when calling WhatsappPhoneNumberProfileUpdateRequest., must be smaller than or equal to 256.');
        }

        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the business. Character limit 512.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 512)) {
            throw new \InvalidArgumentException('invalid length for $description when calling WhatsappPhoneNumberProfileUpdateRequest., must be smaller than or equal to 512.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The contact email address (in valid email format) of the business. Character limit 128.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 128)) {
            throw new \InvalidArgumentException('invalid length for $email when calling WhatsappPhoneNumberProfileUpdateRequest., must be smaller than or equal to 128.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets profile_picture_url
     *
     * @return string|null
     */
    public function getProfilePictureUrl()
    {
        return $this->container['profile_picture_url'];
    }

    /**
     * Sets profile_picture_url
     *
     * @param string|null $profile_picture_url URL of the profile picture that was uploaded to Meta.
     *
     * @return self
     */
    public function setProfilePictureUrl($profile_picture_url)
    {
        $this->container['profile_picture_url'] = $profile_picture_url;

        return $this;
    }

    /**
     * Gets vertical
     *
     * @return \YCloud\Client\Model\WhatsappPhoneNumberProfileVertical|null
     */
    public function getVertical()
    {
        return $this->container['vertical'];
    }

    /**
     * Sets vertical
     *
     * @param \YCloud\Client\Model\WhatsappPhoneNumberProfileVertical|null $vertical vertical
     *
     * @return self
     */
    public function setVertical($vertical)
    {
        $this->container['vertical'] = $vertical;

        return $this;
    }

    /**
     * Gets websites
     *
     * @return string[]|null
     */
    public function getWebsites()
    {
        return $this->container['websites'];
    }

    /**
     * Sets websites
     *
     * @param string[]|null $websites The URLs associated with the business. For instance, a website, Facebook Page, or Instagram. You must include the http:// or https:// portion of the URL. There is a maximum of 2 websites with a maximum of 255 characters each.
     *
     * @return self
     */
    public function setWebsites($websites)
    {

        if (!is_null($websites) && (count($websites) > 2)) {
            throw new \InvalidArgumentException('invalid value for $websites when calling WhatsappPhoneNumberProfileUpdateRequest., number of items must be less than or equal to 2.');
        }
        $this->container['websites'] = $websites;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


