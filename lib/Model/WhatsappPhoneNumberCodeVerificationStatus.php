<?php
/**
 * WhatsappPhoneNumberCodeVerificationStatus
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
use \YCloud\Client\ObjectSerializer;

/**
 * WhatsappPhoneNumberCodeVerificationStatus Class Doc Comment
 *
 * @category Class
 * @description To see if a phone number has been verified via OTP (one-time password), check that number&#39;s &#x60;code_verification_status&#x60; field.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WhatsappPhoneNumberCodeVerificationStatus
{
    /**
     * Possible values of this enum
     */
    public const VERIFIED = 'VERIFIED';

    public const NOT_VERIFIED = 'NOT_VERIFIED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VERIFIED,
            self::NOT_VERIFIED
        ];
    }
}


