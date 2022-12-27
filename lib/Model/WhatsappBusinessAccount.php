<?php
/**
 * WhatsappBusinessAccount
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
 * WhatsappBusinessAccount Class Doc Comment
 *
 * @category Class
 * @description Represents a specific [WhatsApp Business Account (WABA)](https://www.facebook.com/business/help/1499554293524119).
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WhatsappBusinessAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WhatsappBusinessAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'currency' => 'string',
        'message_template_namespace' => 'string',
        'account_review_status' => '\YCloud\Client\Model\WhatsappBusinessAccountReviewStatus',
        'business_verification_status' => '\YCloud\Client\Model\MetaBusinessAccountVerificationStatus',
        'country' => 'string',
        'ownership_type' => 'string',
        'primary_funding_id' => 'string',
        'purchase_order_number' => 'string',
        'timezone_id' => 'string',
        'decision' => '\YCloud\Client\Model\WhatsappReviewDecision',
        'update_event' => '\YCloud\Client\Model\WhatsappBusinessAccountUpdateEventEnum',
        'ban_state' => '\YCloud\Client\Model\WhatsappBusinessAccountBanState',
        'ban_date' => 'string',
        'violation_type' => 'string',
        'restrictions' => '\YCloud\Client\Model\WhatsappBusinessAccountRestrictionInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'currency' => null,
        'message_template_namespace' => null,
        'account_review_status' => null,
        'business_verification_status' => null,
        'country' => null,
        'ownership_type' => null,
        'primary_funding_id' => null,
        'purchase_order_number' => null,
        'timezone_id' => null,
        'decision' => null,
        'update_event' => null,
        'ban_state' => null,
        'ban_date' => null,
        'violation_type' => null,
        'restrictions' => null
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
        'id' => 'id',
        'name' => 'name',
        'currency' => 'currency',
        'message_template_namespace' => 'messageTemplateNamespace',
        'account_review_status' => 'accountReviewStatus',
        'business_verification_status' => 'businessVerificationStatus',
        'country' => 'country',
        'ownership_type' => 'ownershipType',
        'primary_funding_id' => 'primaryFundingId',
        'purchase_order_number' => 'purchaseOrderNumber',
        'timezone_id' => 'timezoneId',
        'decision' => 'decision',
        'update_event' => 'updateEvent',
        'ban_state' => 'banState',
        'ban_date' => 'banDate',
        'violation_type' => 'violationType',
        'restrictions' => 'restrictions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'currency' => 'setCurrency',
        'message_template_namespace' => 'setMessageTemplateNamespace',
        'account_review_status' => 'setAccountReviewStatus',
        'business_verification_status' => 'setBusinessVerificationStatus',
        'country' => 'setCountry',
        'ownership_type' => 'setOwnershipType',
        'primary_funding_id' => 'setPrimaryFundingId',
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'timezone_id' => 'setTimezoneId',
        'decision' => 'setDecision',
        'update_event' => 'setUpdateEvent',
        'ban_state' => 'setBanState',
        'ban_date' => 'setBanDate',
        'violation_type' => 'setViolationType',
        'restrictions' => 'setRestrictions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'currency' => 'getCurrency',
        'message_template_namespace' => 'getMessageTemplateNamespace',
        'account_review_status' => 'getAccountReviewStatus',
        'business_verification_status' => 'getBusinessVerificationStatus',
        'country' => 'getCountry',
        'ownership_type' => 'getOwnershipType',
        'primary_funding_id' => 'getPrimaryFundingId',
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'timezone_id' => 'getTimezoneId',
        'decision' => 'getDecision',
        'update_event' => 'getUpdateEvent',
        'ban_state' => 'getBanState',
        'ban_date' => 'getBanDate',
        'violation_type' => 'getViolationType',
        'restrictions' => 'getRestrictions'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['message_template_namespace'] = $data['message_template_namespace'] ?? null;
        $this->container['account_review_status'] = $data['account_review_status'] ?? null;
        $this->container['business_verification_status'] = $data['business_verification_status'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['ownership_type'] = $data['ownership_type'] ?? null;
        $this->container['primary_funding_id'] = $data['primary_funding_id'] ?? null;
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['timezone_id'] = $data['timezone_id'] ?? null;
        $this->container['decision'] = $data['decision'] ?? null;
        $this->container['update_event'] = $data['update_event'] ?? null;
        $this->container['ban_state'] = $data['ban_state'] ?? null;
        $this->container['ban_date'] = $data['ban_date'] ?? null;
        $this->container['violation_type'] = $data['violation_type'] ?? null;
        $this->container['restrictions'] = $data['restrictions'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id ID of the WhatApp Business Account.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name User-friendly name to differentiate WhatsApp Business Accounts.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency in which the payment transactions for the WhatsApp Business Account will be processed.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets message_template_namespace
     *
     * @return string|null
     */
    public function getMessageTemplateNamespace()
    {
        return $this->container['message_template_namespace'];
    }

    /**
     * Sets message_template_namespace
     *
     * @param string|null $message_template_namespace Namespace string for the message templates that belong to the WhatsApp Business Account.
     *
     * @return self
     */
    public function setMessageTemplateNamespace($message_template_namespace)
    {
        $this->container['message_template_namespace'] = $message_template_namespace;

        return $this;
    }

    /**
     * Gets account_review_status
     *
     * @return \YCloud\Client\Model\WhatsappBusinessAccountReviewStatus|null
     */
    public function getAccountReviewStatus()
    {
        return $this->container['account_review_status'];
    }

    /**
     * Sets account_review_status
     *
     * @param \YCloud\Client\Model\WhatsappBusinessAccountReviewStatus|null $account_review_status account_review_status
     *
     * @return self
     */
    public function setAccountReviewStatus($account_review_status)
    {
        $this->container['account_review_status'] = $account_review_status;

        return $this;
    }

    /**
     * Gets business_verification_status
     *
     * @return \YCloud\Client\Model\MetaBusinessAccountVerificationStatus|null
     */
    public function getBusinessVerificationStatus()
    {
        return $this->container['business_verification_status'];
    }

    /**
     * Sets business_verification_status
     *
     * @param \YCloud\Client\Model\MetaBusinessAccountVerificationStatus|null $business_verification_status business_verification_status
     *
     * @return self
     */
    public function setBusinessVerificationStatus($business_verification_status)
    {
        $this->container['business_verification_status'] = $business_verification_status;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country of the WhatsApp Business Account's owning Meta Business account.
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets ownership_type
     *
     * @return string|null
     */
    public function getOwnershipType()
    {
        return $this->container['ownership_type'];
    }

    /**
     * Sets ownership_type
     *
     * @param string|null $ownership_type Ownership type of the WhatsApp Business Account.
     *
     * @return self
     */
    public function setOwnershipType($ownership_type)
    {
        $this->container['ownership_type'] = $ownership_type;

        return $this;
    }

    /**
     * Gets primary_funding_id
     *
     * @return string|null
     */
    public function getPrimaryFundingId()
    {
        return $this->container['primary_funding_id'];
    }

    /**
     * Sets primary_funding_id
     *
     * @param string|null $primary_funding_id Primary funding ID for the WhatsApp Business Account paid service.
     *
     * @return self
     */
    public function setPrimaryFundingId($primary_funding_id)
    {
        $this->container['primary_funding_id'] = $primary_funding_id;

        return $this;
    }

    /**
     * Gets purchase_order_number
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string|null $purchase_order_number The purchase order number supplied by the business for payment management purposes.
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets timezone_id
     *
     * @return string|null
     */
    public function getTimezoneId()
    {
        return $this->container['timezone_id'];
    }

    /**
     * Sets timezone_id
     *
     * @param string|null $timezone_id The timezone ID of the WhatsApp Business Account. See [Timezone IDs](https://developers.facebook.com/docs/marketing-api/reference/ad-account/timezone-ids).
     *
     * @return self
     */
    public function setTimezoneId($timezone_id)
    {
        $this->container['timezone_id'] = $timezone_id;

        return $this;
    }

    /**
     * Gets decision
     *
     * @return \YCloud\Client\Model\WhatsappReviewDecision|null
     */
    public function getDecision()
    {
        return $this->container['decision'];
    }

    /**
     * Sets decision
     *
     * @param \YCloud\Client\Model\WhatsappReviewDecision|null $decision decision
     *
     * @return self
     */
    public function setDecision($decision)
    {
        $this->container['decision'] = $decision;

        return $this;
    }

    /**
     * Gets update_event
     *
     * @return \YCloud\Client\Model\WhatsappBusinessAccountUpdateEventEnum|null
     */
    public function getUpdateEvent()
    {
        return $this->container['update_event'];
    }

    /**
     * Sets update_event
     *
     * @param \YCloud\Client\Model\WhatsappBusinessAccountUpdateEventEnum|null $update_event update_event
     *
     * @return self
     */
    public function setUpdateEvent($update_event)
    {
        $this->container['update_event'] = $update_event;

        return $this;
    }

    /**
     * Gets ban_state
     *
     * @return \YCloud\Client\Model\WhatsappBusinessAccountBanState|null
     */
    public function getBanState()
    {
        return $this->container['ban_state'];
    }

    /**
     * Sets ban_state
     *
     * @param \YCloud\Client\Model\WhatsappBusinessAccountBanState|null $ban_state ban_state
     *
     * @return self
     */
    public function setBanState($ban_state)
    {
        $this->container['ban_state'] = $ban_state;

        return $this;
    }

    /**
     * Gets ban_date
     *
     * @return string|null
     */
    public function getBanDate()
    {
        return $this->container['ban_date'];
    }

    /**
     * Sets ban_date
     *
     * @param string|null $ban_date The date when the WABA is banned.
     *
     * @return self
     */
    public function setBanDate($ban_date)
    {
        $this->container['ban_date'] = $ban_date;

        return $this;
    }

    /**
     * Gets violation_type
     *
     * @return string|null
     */
    public function getViolationType()
    {
        return $this->container['violation_type'];
    }

    /**
     * Sets violation_type
     *
     * @param string|null $violation_type Used to report violations imposed on the WABA. See also [WhatsApp Business Platform Policy Violations](https://developers.facebook.com/docs/whatsapp/overview/policy-enforcement/violations).
     *
     * @return self
     */
    public function setViolationType($violation_type)
    {
        $this->container['violation_type'] = $violation_type;

        return $this;
    }

    /**
     * Gets restrictions
     *
     * @return \YCloud\Client\Model\WhatsappBusinessAccountRestrictionInfo[]|null
     */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
     * Sets restrictions
     *
     * @param \YCloud\Client\Model\WhatsappBusinessAccountRestrictionInfo[]|null $restrictions Used to report restrictions imposed on the WABA, when that WABA violates [WhatsApp Business Platform policies](https://developers.facebook.com/docs/whatsapp/overview/policy-enforcement).
     *
     * @return self
     */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;

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


