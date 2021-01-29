<?php
/**
 * GuidanceReason
 *
 * PHP version 5
 *
 * @category Class
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;
use \ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use \ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;

/**
 * GuidanceReason Class Doc Comment
 *
 * @category Class
 * @description A reason for the current inbound guidance for an item.
 * @package  ClouSale\AmazonSellingPartnerAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GuidanceReason
{
    /**
     * Possible values of this enum
     */
    const SLOW_MOVING_ASIN = 'SlowMovingASIN';
const NO_APPLICABLE_GUIDANCE = 'NoApplicableGuidance';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SLOW_MOVING_ASIN,
self::NO_APPLICABLE_GUIDANCE,        ];
    }
}