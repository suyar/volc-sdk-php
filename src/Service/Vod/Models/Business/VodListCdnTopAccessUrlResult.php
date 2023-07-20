<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_cdn.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodListCdnTopAccessUrlResult</code>
 */
class VodListCdnTopAccessUrlResult extends \Google\Protobuf\Internal\Message
{
    /**
     * TopURL查询得到的数据明细以及全部域名的汇总值
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodCdnTopAccessUrlElement UrlInfos = 1;</code>
     */
    private $UrlInfos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Business\VodCdnTopAccessUrlElement[]|\Google\Protobuf\Internal\RepeatedField $UrlInfos
     *           TopURL查询得到的数据明细以及全部域名的汇总值
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     * TopURL查询得到的数据明细以及全部域名的汇总值
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodCdnTopAccessUrlElement UrlInfos = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrlInfos()
    {
        return $this->UrlInfos;
    }

    /**
     * TopURL查询得到的数据明细以及全部域名的汇总值
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodCdnTopAccessUrlElement UrlInfos = 1;</code>
     * @param \Volc\Service\Vod\Models\Business\VodCdnTopAccessUrlElement[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrlInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodCdnTopAccessUrlElement::class);
        $this->UrlInfos = $arr;

        return $this;
    }

}

