<?php
/**
 * VerificationStatus
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
 * VerificationStatus Class Doc Comment
 *
 * @category Class
 * @description Status of verification, one of &#x60;pending&#x60;, &#x60;approved&#x60;, &#x60;blocked&#x60;, &#x60;expired&#x60;, &#x60;undelivered&#x60;. &#x60;pending&#x60;: The verification message (SMS, Voice, etc.) is sent, waiting to be checked. This happens when you call the &#39;Start a verification&#39; API successfully. &#x60;approved&#x60;: The verification has been successfully checked. A &#x60;pending&#x60; verification status changes to &#x60;approved&#x60; when you call the &#39;Check a verification&#39; API and receive a response with the &#x60;valid&#x60; parameter is &#x60;true&#x60;. An approved verification cannot be checked anymore. &#x60;blocked&#x60;: The verification is blocked by user-defined rules such as denylist, and geographical permission restrictions. A blocked verification cannot be checked. &#x60;expired&#x60;: The verification has expired and cannot be checked anymore. The expiration can be customized in [Verify Settings](https://www.ycloud.com/console/#/app/verify/setting). &#x60;undelivered&#x60;: YCloud has received a delivery receipt indicating that the verification message was not delivered. An undelivered verification cannot be checked anymore.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VerificationStatus
{
    /**
     * Possible values of this enum
     */
    public const PENDING = 'pending';

    public const APPROVED = 'approved';

    public const BLOCKED = 'blocked';

    public const EXPIRED = 'expired';

    public const UNDELIVERED = 'undelivered';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::APPROVED,
            self::BLOCKED,
            self::EXPIRED,
            self::UNDELIVERED
        ];
    }
}


