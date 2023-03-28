<?php
/**
 * WhatsappTemplate
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
 * WhatsappTemplate Class Doc Comment
 *
 * @category Class
 * @description See [WhatsApp Templates](https://developers.facebook.com/docs/whatsapp/business-management-api/message-templates).
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WhatsappTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhatsappTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'waba_id' => 'string',
        'name' => 'string',
        'language' => 'string',
        'category' => '\YCloud\Client\Model\WhatsappTemplateCategory',
        'previous_category' => 'string',
        'components' => '\YCloud\Client\Model\WhatsappTemplateComponent[]',
        'status' => '\YCloud\Client\Model\WhatsappTemplateStatus',
        'reason' => 'string',
        'create_time' => '\DateTime',
        'update_time' => '\DateTime',
        'status_update_event' => '\YCloud\Client\Model\WhatsappTemplateStatusUpdateEventEnum',
        'disable_date' => 'string',
        'whatsapp_api_error' => '\YCloud\Client\Model\WhatsappApiError'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'waba_id' => null,
        'name' => null,
        'language' => null,
        'category' => null,
        'previous_category' => null,
        'components' => null,
        'status' => null,
        'reason' => null,
        'create_time' => 'date-time',
        'update_time' => 'date-time',
        'status_update_event' => null,
        'disable_date' => null,
        'whatsapp_api_error' => null
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
        'waba_id' => 'wabaId',
        'name' => 'name',
        'language' => 'language',
        'category' => 'category',
        'previous_category' => 'previousCategory',
        'components' => 'components',
        'status' => 'status',
        'reason' => 'reason',
        'create_time' => 'createTime',
        'update_time' => 'updateTime',
        'status_update_event' => 'statusUpdateEvent',
        'disable_date' => 'disableDate',
        'whatsapp_api_error' => 'whatsappApiError'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'waba_id' => 'setWabaId',
        'name' => 'setName',
        'language' => 'setLanguage',
        'category' => 'setCategory',
        'previous_category' => 'setPreviousCategory',
        'components' => 'setComponents',
        'status' => 'setStatus',
        'reason' => 'setReason',
        'create_time' => 'setCreateTime',
        'update_time' => 'setUpdateTime',
        'status_update_event' => 'setStatusUpdateEvent',
        'disable_date' => 'setDisableDate',
        'whatsapp_api_error' => 'setWhatsappApiError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'waba_id' => 'getWabaId',
        'name' => 'getName',
        'language' => 'getLanguage',
        'category' => 'getCategory',
        'previous_category' => 'getPreviousCategory',
        'components' => 'getComponents',
        'status' => 'getStatus',
        'reason' => 'getReason',
        'create_time' => 'getCreateTime',
        'update_time' => 'getUpdateTime',
        'status_update_event' => 'getStatusUpdateEvent',
        'disable_date' => 'getDisableDate',
        'whatsapp_api_error' => 'getWhatsappApiError'
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
        $this->container['waba_id'] = $data['waba_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['previous_category'] = $data['previous_category'] ?? null;
        $this->container['components'] = $data['components'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['create_time'] = $data['create_time'] ?? null;
        $this->container['update_time'] = $data['update_time'] ?? null;
        $this->container['status_update_event'] = $data['status_update_event'] ?? null;
        $this->container['disable_date'] = $data['disable_date'] ?? null;
        $this->container['whatsapp_api_error'] = $data['whatsapp_api_error'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['waba_id'] === null) {
            $invalidProperties[] = "'waba_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 512)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 512.";
        }

        if (!preg_match("/[a-z0-9]{1,512}/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[a-z0-9]{1,512}/.";
        }

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['components'] === null) {
            $invalidProperties[] = "'components' can't be null";
        }
        if ((count($this->container['components']) < 1)) {
            $invalidProperties[] = "invalid value for 'components', number of items must be greater than or equal to 1.";
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
     * Gets waba_id
     *
     * @return string
     */
    public function getWabaId()
    {
        return $this->container['waba_id'];
    }

    /**
     * Sets waba_id
     *
     * @param string $waba_id WhatsApp Business Account ID.
     *
     * @return self
     */
    public function setWabaId($waba_id)
    {
        $this->container['waba_id'] = $waba_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the template.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 512)) {
            throw new \InvalidArgumentException('invalid length for $name when calling WhatsappTemplate., must be smaller than or equal to 512.');
        }
        if ((!preg_match("/[a-z0-9]{1,512}/", $name))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling WhatsappTemplate., must conform to the pattern /[a-z0-9]{1,512}/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Language code of the template. See [Supported Languages](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates#supported-languages-) for all codes.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \YCloud\Client\Model\WhatsappTemplateCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \YCloud\Client\Model\WhatsappTemplateCategory $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets previous_category
     *
     * @return string|null
     */
    public function getPreviousCategory()
    {
        return $this->container['previous_category'];
    }

    /**
     * Sets previous_category
     *
     * @param string|null $previous_category This field indicates the template's previous category (or `null`, for newly created templates after April 1, 2023). Compare this value to the template's `category` field value, which indicates the template's current category. For more information about template category migration, see also [First template category migration](https://developers.facebook.com/docs/whatsapp/updates-to-pricing/launch-timeline#first-template-category-migration).
     *
     * @return self
     */
    public function setPreviousCategory($previous_category)
    {
        $this->container['previous_category'] = $previous_category;

        return $this;
    }

    /**
     * Gets components
     *
     * @return \YCloud\Client\Model\WhatsappTemplateComponent[]
     */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param \YCloud\Client\Model\WhatsappTemplateComponent[] $components Template components. A template consists of `HEADER`, `BODY`, `FOOTER`, and `BUTTONS` components. `BODY` component is required, the other types are optional.
     *
     * @return self
     */
    public function setComponents($components)
    {


        if ((count($components) < 1)) {
            throw new \InvalidArgumentException('invalid length for $components when calling WhatsappTemplate., number of items must be greater than or equal to 1.');
        }
        $this->container['components'] = $components;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \YCloud\Client\Model\WhatsappTemplateStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \YCloud\Client\Model\WhatsappTemplateStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason The reason why the template is rejected.
     *
     * @return self
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return \DateTime|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param \DateTime|null $create_time The time at which this object is created, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., `2022-06-01T12:00:00.000Z`.
     *
     * @return self
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return \DateTime|null
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param \DateTime|null $update_time The time at which this object is updated, formatted in [RFC 3339](https://datatracker.ietf.org/doc/html/rfc3339). e.g., `2022-06-01T12:00:00.000Z`.
     *
     * @return self
     */
    public function setUpdateTime($update_time)
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }

    /**
     * Gets status_update_event
     *
     * @return \YCloud\Client\Model\WhatsappTemplateStatusUpdateEventEnum|null
     */
    public function getStatusUpdateEvent()
    {
        return $this->container['status_update_event'];
    }

    /**
     * Sets status_update_event
     *
     * @param \YCloud\Client\Model\WhatsappTemplateStatusUpdateEventEnum|null $status_update_event status_update_event
     *
     * @return self
     */
    public function setStatusUpdateEvent($status_update_event)
    {
        $this->container['status_update_event'] = $status_update_event;

        return $this;
    }

    /**
     * Gets disable_date
     *
     * @return string|null
     */
    public function getDisableDate()
    {
        return $this->container['disable_date'];
    }

    /**
     * Sets disable_date
     *
     * @param string|null $disable_date The date at which the template will be disabled. When a WhatsApp template `FLAGGED` event is received, this field is set.
     *
     * @return self
     */
    public function setDisableDate($disable_date)
    {
        $this->container['disable_date'] = $disable_date;

        return $this;
    }

    /**
     * Gets whatsapp_api_error
     *
     * @return \YCloud\Client\Model\WhatsappApiError|null
     */
    public function getWhatsappApiError()
    {
        return $this->container['whatsapp_api_error'];
    }

    /**
     * Sets whatsapp_api_error
     *
     * @param \YCloud\Client\Model\WhatsappApiError|null $whatsapp_api_error whatsapp_api_error
     *
     * @return self
     */
    public function setWhatsappApiError($whatsapp_api_error)
    {
        $this->container['whatsapp_api_error'] = $whatsapp_api_error;

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


