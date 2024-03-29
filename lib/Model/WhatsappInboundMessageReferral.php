<?php
/**
 * WhatsappInboundMessageReferral
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
 * WhatsappInboundMessageReferral Class Doc Comment
 *
 * @category Class
 * @description When a user messages businesses using call-to-actions buttons on [Ads that Click to WhatsApp](https://www.facebook.com/business/help/447934475640650) or a [Facebook Page call-to-action buttons](https://www.facebook.com/help/977869848936797), this field is included as an attachment.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WhatsappInboundMessageReferral implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhatsappInboundMessageReferral';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'source_url' => 'string',
        'source_type' => 'string',
        'source_id' => 'string',
        'headline' => 'string',
        'body' => 'string',
        'media_type' => 'string',
        'image_url' => 'string',
        'video_url' => 'string',
        'thumbnail_url' => 'string',
        'ctwa_clid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'source_url' => null,
        'source_type' => null,
        'source_id' => null,
        'headline' => null,
        'body' => null,
        'media_type' => null,
        'image_url' => null,
        'video_url' => null,
        'thumbnail_url' => null,
        'ctwa_clid' => null
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
        'source_url' => 'source_url',
        'source_type' => 'source_type',
        'source_id' => 'source_id',
        'headline' => 'headline',
        'body' => 'body',
        'media_type' => 'media_type',
        'image_url' => 'image_url',
        'video_url' => 'video_url',
        'thumbnail_url' => 'thumbnail_url',
        'ctwa_clid' => 'ctwa_clid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source_url' => 'setSourceUrl',
        'source_type' => 'setSourceType',
        'source_id' => 'setSourceId',
        'headline' => 'setHeadline',
        'body' => 'setBody',
        'media_type' => 'setMediaType',
        'image_url' => 'setImageUrl',
        'video_url' => 'setVideoUrl',
        'thumbnail_url' => 'setThumbnailUrl',
        'ctwa_clid' => 'setCtwaClid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source_url' => 'getSourceUrl',
        'source_type' => 'getSourceType',
        'source_id' => 'getSourceId',
        'headline' => 'getHeadline',
        'body' => 'getBody',
        'media_type' => 'getMediaType',
        'image_url' => 'getImageUrl',
        'video_url' => 'getVideoUrl',
        'thumbnail_url' => 'getThumbnailUrl',
        'ctwa_clid' => 'getCtwaClid'
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
        $this->container['source_url'] = $data['source_url'] ?? null;
        $this->container['source_type'] = $data['source_type'] ?? null;
        $this->container['source_id'] = $data['source_id'] ?? null;
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
        $this->container['media_type'] = $data['media_type'] ?? null;
        $this->container['image_url'] = $data['image_url'] ?? null;
        $this->container['video_url'] = $data['video_url'] ?? null;
        $this->container['thumbnail_url'] = $data['thumbnail_url'] ?? null;
        $this->container['ctwa_clid'] = $data['ctwa_clid'] ?? null;
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
     * Gets source_url
     *
     * @return string|null
     */
    public function getSourceUrl()
    {
        return $this->container['source_url'];
    }

    /**
     * Sets source_url
     *
     * @param string|null $source_url Specifies the URL that leads to the ad or post clicked by the user. Opening this URL takes you to the ad viewed by your user.
     *
     * @return self
     */
    public function setSourceUrl($source_url)
    {
        $this->container['source_url'] = $source_url;

        return $this;
    }

    /**
     * Gets source_type
     *
     * @return string|null
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     *
     * @param string|null $source_type Specifies the type of the ad's source. Supported values are \"ad\" or \"post\".
     *
     * @return self
     */
    public function setSourceType($source_type)
    {
        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string|null $source_id Specifies the Meta ID for an ad or post.
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets headline
     *
     * @return string|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param string|null $headline Specifies the headline used in the ad or post that generated the message.
     *
     * @return self
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body The description, or body, from the ad or post that generated the message.
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets media_type
     *
     * @return string|null
     */
    public function getMediaType()
    {
        return $this->container['media_type'];
    }

    /**
     * Sets media_type
     *
     * @param string|null $media_type Media present in the ad or post the user clicked. Supported values are \"image\" or \"video\".
     *
     * @return self
     */
    public function setMediaType($media_type)
    {
        $this->container['media_type'] = $media_type;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url **Added if media_type is \"image\".**  Contains a URL to the raw image.
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets video_url
     *
     * @return string|null
     */
    public function getVideoUrl()
    {
        return $this->container['video_url'];
    }

    /**
     * Sets video_url
     *
     * @param string|null $video_url **Added if media_type is \"video\".**  Contains a URL to the video.
     *
     * @return self
     */
    public function setVideoUrl($video_url)
    {
        $this->container['video_url'] = $video_url;

        return $this;
    }

    /**
     * Gets thumbnail_url
     *
     * @return string|null
     */
    public function getThumbnailUrl()
    {
        return $this->container['thumbnail_url'];
    }

    /**
     * Sets thumbnail_url
     *
     * @param string|null $thumbnail_url **Added if media_type is \"video\".**  Contains a URL to the thumbnail image of the clicked video.
     *
     * @return self
     */
    public function setThumbnailUrl($thumbnail_url)
    {
        $this->container['thumbnail_url'] = $thumbnail_url;

        return $this;
    }

    /**
     * Gets ctwa_clid
     *
     * @return string|null
     */
    public function getCtwaClid()
    {
        return $this->container['ctwa_clid'];
    }

    /**
     * Sets ctwa_clid
     *
     * @param string|null $ctwa_clid Click ID generated by Meta for ads that click to WhatsApp.
     *
     * @return self
     */
    public function setCtwaClid($ctwa_clid)
    {
        $this->container['ctwa_clid'] = $ctwa_clid;

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


