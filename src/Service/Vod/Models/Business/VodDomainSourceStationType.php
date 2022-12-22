<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_cdn.proto

namespace Volc\Service\Vod\Models\Business;

use UnexpectedValueException;

/**
 * 源站类型
 *
 * Protobuf type <code>Volcengine.Vod.Models.Business.VodDomainSourceStationType</code>
 */
class VodDomainSourceStationType
{
    /**
     * 未定义的源站类型
     *
     * Generated from protobuf enum <code>UndefinedVodDomainSourceStationType = 0;</code>
     */
    const UndefinedVodDomainSourceStationType = 0;
    /**
     * 点播源站
     *
     * Generated from protobuf enum <code>VodVodDomainSourceStationType = 1;</code>
     */
    const VodVodDomainSourceStationType = 1;
    /**
     * 第三方源站
     *
     * Generated from protobuf enum <code>ThirdPartyVodDomainSourceStationType = 2;</code>
     */
    const ThirdPartyVodDomainSourceStationType = 2;

    private static $valueToName = [
        self::UndefinedVodDomainSourceStationType => 'UndefinedVodDomainSourceStationType',
        self::VodVodDomainSourceStationType => 'VodVodDomainSourceStationType',
        self::ThirdPartyVodDomainSourceStationType => 'ThirdPartyVodDomainSourceStationType',
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
