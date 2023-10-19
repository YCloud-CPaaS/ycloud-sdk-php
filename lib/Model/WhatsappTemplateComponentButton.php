<?php
/**
 * WhatsappTemplateComponentButton
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
 * WhatsappTemplateComponentButton Class Doc Comment
 *
 * @category Class
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WhatsappTemplateComponentButton implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhatsappTemplateComponentButton';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => '\YCloud\Client\Model\WhatsappTemplateComponentButtonType',
        'text' => 'string',
        'url' => 'string',
        'phone_number' => 'string',
        'otp_type' => '\YCloud\Client\Model\WhatsappTemplateComponentButtonOtpType',
        'autofill_text' => 'string',
        'package_name' => 'string',
        'signature_hash' => 'string',
        'example' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'text' => null,
        'url' => null,
        'phone_number' => null,
        'otp_type' => null,
        'autofill_text' => null,
        'package_name' => null,
        'signature_hash' => null,
        'example' => null
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
        'type' => 'type',
        'text' => 'text',
        'url' => 'url',
        'phone_number' => 'phone_number',
        'otp_type' => 'otp_type',
        'autofill_text' => 'autofill_text',
        'package_name' => 'package_name',
        'signature_hash' => 'signature_hash',
        'example' => 'example'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'text' => 'setText',
        'url' => 'setUrl',
        'phone_number' => 'setPhoneNumber',
        'otp_type' => 'setOtpType',
        'autofill_text' => 'setAutofillText',
        'package_name' => 'setPackageName',
        'signature_hash' => 'setSignatureHash',
        'example' => 'setExample'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'text' => 'getText',
        'url' => 'getUrl',
        'phone_number' => 'getPhoneNumber',
        'otp_type' => 'getOtpType',
        'autofill_text' => 'getAutofillText',
        'package_name' => 'getPackageName',
        'signature_hash' => 'getSignatureHash',
        'example' => 'getExample'
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['text'] = $data['text'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['otp_type'] = $data['otp_type'] ?? null;
        $this->container['autofill_text'] = $data['autofill_text'] ?? null;
        $this->container['package_name'] = $data['package_name'] ?? null;
        $this->container['signature_hash'] = $data['signature_hash'] ?? null;
        $this->container['example'] = $data['example'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) > 25)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 2000)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['autofill_text']) && (mb_strlen($this->container['autofill_text']) > 25)) {
            $invalidProperties[] = "invalid value for 'autofill_text', the character length must be smaller than or equal to 25.";
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
     * Gets type
     *
     * @return \YCloud\Client\Model\WhatsappTemplateComponentButtonType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \YCloud\Client\Model\WhatsappTemplateComponentButtonType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text **Required for button type `PHONE_NUMBER` or `URL`.** Button text. For `CODE_CODE` buttons, the text is a pre-set value and cannot be customized. For `OTP` buttons, if omitted, the text will default to a pre-set value localized to the template's language. For example, `Copy Code` for English (US). If your template is using a one-tap autofill button and you supply this value, the authentication template message will display a copy code button with this text if we are unable to validate your [handshake](https://developers.facebook.com/docs/whatsapp/business-management-api/authentication-templates#handshake). Maximum 25 characters.
     *
     * @return self
     */
    public function setText($text)
    {
        if (!is_null($text) && (mb_strlen($text) > 25)) {
            throw new \InvalidArgumentException('invalid length for $text when calling WhatsappTemplateComponentButton., must be smaller than or equal to 25.');
        }

        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url **Required for button type `URL`.** URL of website. There can be at most 1 variable at the end of the URL. Example: `https://www.luckyshrub.com/shop?promo={{1}}`. 2000 characters maximum.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (!is_null($url) && (mb_strlen($url) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $url when calling WhatsappTemplateComponentButton., must be smaller than or equal to 2000.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number **Required for button type `PHONE_NUMBER`.** Alphanumeric string. Business phone number to be (display phone number) called when the user taps the button. 20 characters maximum.
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (!is_null($phone_number) && (mb_strlen($phone_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling WhatsappTemplateComponentButton., must be smaller than or equal to 20.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets otp_type
     *
     * @return \YCloud\Client\Model\WhatsappTemplateComponentButtonOtpType|null
     */
    public function getOtpType()
    {
        return $this->container['otp_type'];
    }

    /**
     * Sets otp_type
     *
     * @param \YCloud\Client\Model\WhatsappTemplateComponentButtonOtpType|null $otp_type otp_type
     *
     * @return self
     */
    public function setOtpType($otp_type)
    {
        $this->container['otp_type'] = $otp_type;

        return $this;
    }

    /**
     * Gets autofill_text
     *
     * @return string|null
     */
    public function getAutofillText()
    {
        return $this->container['autofill_text'];
    }

    /**
     * Sets autofill_text
     *
     * @param string|null $autofill_text **One-tap buttons only.** One-tap button text. Maximum 25 characters.
     *
     * @return self
     */
    public function setAutofillText($autofill_text)
    {
        if (!is_null($autofill_text) && (mb_strlen($autofill_text) > 25)) {
            throw new \InvalidArgumentException('invalid length for $autofill_text when calling WhatsappTemplateComponentButton., must be smaller than or equal to 25.');
        }

        $this->container['autofill_text'] = $autofill_text;

        return $this;
    }

    /**
     * Gets package_name
     *
     * @return string|null
     */
    public function getPackageName()
    {
        return $this->container['package_name'];
    }

    /**
     * Sets package_name
     *
     * @param string|null $package_name **One-tap buttons only.** Your Android app's package name.
     *
     * @return self
     */
    public function setPackageName($package_name)
    {
        $this->container['package_name'] = $package_name;

        return $this;
    }

    /**
     * Gets signature_hash
     *
     * @return string|null
     */
    public function getSignatureHash()
    {
        return $this->container['signature_hash'];
    }

    /**
     * Sets signature_hash
     *
     * @param string|null $signature_hash **One-tap buttons only.** Your app signing key hash. See [App Signing Key Hash](https://developers.facebook.com/docs/whatsapp/business-management-api/authentication-templates#app-signing-key-hash).
     *
     * @return self
     */
    public function setSignatureHash($signature_hash)
    {
        $this->container['signature_hash'] = $signature_hash;

        return $this;
    }

    /**
     * Gets example
     *
     * @return string[]|null
     */
    public function getExample()
    {
        return $this->container['example'];
    }

    /**
     * Sets example
     *
     * @param string[]|null $example Sample full URL for a `URL` button with a variable.
     *
     * @return self
     */
    public function setExample($example)
    {
        $this->container['example'] = $example;

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


