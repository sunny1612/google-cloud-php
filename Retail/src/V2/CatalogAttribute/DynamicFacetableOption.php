<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/catalog.proto

namespace Google\Cloud\Retail\V2\CatalogAttribute;

use UnexpectedValueException;

/**
 * The status of the dynamic facetable option of a catalog attribute.
 *
 * Protobuf type <code>google.cloud.retail.v2.CatalogAttribute.DynamicFacetableOption</code>
 */
class DynamicFacetableOption
{
    /**
     * Value used when unset. Defaults to
     * [DYNAMIC_FACETABLE_ENABLED][google.cloud.retail.v2.CatalogAttribute.DynamicFacetableOption.DYNAMIC_FACETABLE_ENABLED].
     *
     * Generated from protobuf enum <code>DYNAMIC_FACETABLE_OPTION_UNSPECIFIED = 0;</code>
     */
    const DYNAMIC_FACETABLE_OPTION_UNSPECIFIED = 0;
    /**
     * Dynamic facetable option enabled for an attribute.
     *
     * Generated from protobuf enum <code>DYNAMIC_FACETABLE_ENABLED = 1;</code>
     */
    const DYNAMIC_FACETABLE_ENABLED = 1;
    /**
     * Dynamic facetable option disabled for an attribute.
     *
     * Generated from protobuf enum <code>DYNAMIC_FACETABLE_DISABLED = 2;</code>
     */
    const DYNAMIC_FACETABLE_DISABLED = 2;

    private static $valueToName = [
        self::DYNAMIC_FACETABLE_OPTION_UNSPECIFIED => 'DYNAMIC_FACETABLE_OPTION_UNSPECIFIED',
        self::DYNAMIC_FACETABLE_ENABLED => 'DYNAMIC_FACETABLE_ENABLED',
        self::DYNAMIC_FACETABLE_DISABLED => 'DYNAMIC_FACETABLE_DISABLED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

