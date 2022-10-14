<?php
/**
 * WhatsappTemplateStatus
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
 * WhatsappTemplateStatus Class Doc Comment
 *
 * @category Class
 * @description One of &#x60;APPROVED&#x60;, &#x60;PENDING&#x60;, &#x60;REJECTED&#x60;, &#x60;PAUSED&#x60;, and &#x60;DISABLED&#x60;.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WhatsappTemplateStatus
{
    /**
     * Possible values of this enum
     */
    public const APPROVED = 'APPROVED';

    public const PENDING = 'PENDING';

    public const REJECTED = 'REJECTED';

    public const PAUSED = 'PAUSED';

    public const DISABLED = 'DISABLED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPROVED,
            self::PENDING,
            self::REJECTED,
            self::PAUSED,
            self::DISABLED
        ];
    }
}


