<?php
/**
 * WhatsappPhoneNumberProfileVertical
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
 * WhatsappPhoneNumberProfileVertical Class Doc Comment
 *
 * @category Class
 * @description Industry of the WhatsApp phone number business profile. This can be either an empty string or one of the accepted values.
 * @package  YCloud\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WhatsappPhoneNumberProfileVertical
{
    /**
     * Possible values of this enum
     */
    public const OTHER = 'OTHER';

    public const AUTO = 'AUTO';

    public const BEAUTY = 'BEAUTY';

    public const APPAREL = 'APPAREL';

    public const EDU = 'EDU';

    public const ENTERTAIN = 'ENTERTAIN';

    public const EVENT_PLAN = 'EVENT_PLAN';

    public const FINANCE = 'FINANCE';

    public const GROCERY = 'GROCERY';

    public const GOVT = 'GOVT';

    public const HOTEL = 'HOTEL';

    public const HEALTH = 'HEALTH';

    public const NONPROFIT = 'NONPROFIT';

    public const PROF_SERVICES = 'PROF_SERVICES';

    public const RETAIL = 'RETAIL';

    public const TRAVEL = 'TRAVEL';

    public const RESTAURANT = 'RESTAURANT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OTHER,
            self::AUTO,
            self::BEAUTY,
            self::APPAREL,
            self::EDU,
            self::ENTERTAIN,
            self::EVENT_PLAN,
            self::FINANCE,
            self::GROCERY,
            self::GOVT,
            self::HOTEL,
            self::HEALTH,
            self::NONPROFIT,
            self::PROF_SERVICES,
            self::RETAIL,
            self::TRAVEL,
            self::RESTAURANT
        ];
    }
}

