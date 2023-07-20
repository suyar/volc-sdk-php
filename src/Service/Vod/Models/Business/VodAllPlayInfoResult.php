<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_common.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodAllPlayInfoResult</code>
 */
class VodAllPlayInfoResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodAllPlayInfoModel VodAllPlayInfoModelList = 1;</code>
     */
    private $VodAllPlayInfoModelList;
    /**
     * 查到多少个vid
     *
     * Generated from protobuf field <code>int32 TotalCount = 2;</code>
     */
    protected $TotalCount = 0;
    /**
     * 没有查询到任何信息的vid
     *
     * Generated from protobuf field <code>repeated string NotFoundVids = 3;</code>
     */
    private $NotFoundVids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Business\VodAllPlayInfoModel[]|\Google\Protobuf\Internal\RepeatedField $VodAllPlayInfoModelList
     *     @type int $TotalCount
     *           查到多少个vid
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $NotFoundVids
     *           没有查询到任何信息的vid
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodAllPlayInfoModel VodAllPlayInfoModelList = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVodAllPlayInfoModelList()
    {
        return $this->VodAllPlayInfoModelList;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodAllPlayInfoModel VodAllPlayInfoModelList = 1;</code>
     * @param \Volc\Service\Vod\Models\Business\VodAllPlayInfoModel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVodAllPlayInfoModelList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodAllPlayInfoModel::class);
        $this->VodAllPlayInfoModelList = $arr;

        return $this;
    }

    /**
     * 查到多少个vid
     *
     * Generated from protobuf field <code>int32 TotalCount = 2;</code>
     * @return int
     */
    public function getTotalCount()
    {
        return $this->TotalCount;
    }

    /**
     * 查到多少个vid
     *
     * Generated from protobuf field <code>int32 TotalCount = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->TotalCount = $var;

        return $this;
    }

    /**
     * 没有查询到任何信息的vid
     *
     * Generated from protobuf field <code>repeated string NotFoundVids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotFoundVids()
    {
        return $this->NotFoundVids;
    }

    /**
     * 没有查询到任何信息的vid
     *
     * Generated from protobuf field <code>repeated string NotFoundVids = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotFoundVids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->NotFoundVids = $arr;

        return $this;
    }

}

