<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_media.proto

namespace Volc\Models\Vod\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Models.Vod.Business.VodGetMediaInfosData</code>
 */
class VodGetMediaInfosData extends \Google\Protobuf\Internal\Message
{
    /**
     *视频信息列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Models.Vod.Business.VodMediaInfo MediaInfoList = 1;</code>
     */
    private $MediaInfoList;
    /**
     *不存在的视频VID列表
     *
     * Generated from protobuf field <code>repeated string NotExistVids = 2;</code>
     */
    private $NotExistVids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Models\Vod\Business\VodMediaInfo[]|\Google\Protobuf\Internal\RepeatedField $MediaInfoList
     *          视频信息列表
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $NotExistVids
     *          不存在的视频VID列表
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Models\Vod\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     *视频信息列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Models.Vod.Business.VodMediaInfo MediaInfoList = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMediaInfoList()
    {
        return $this->MediaInfoList;
    }

    /**
     *视频信息列表
     *
     * Generated from protobuf field <code>repeated .Volcengine.Models.Vod.Business.VodMediaInfo MediaInfoList = 1;</code>
     * @param \Volc\Models\Vod\Business\VodMediaInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMediaInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Models\Vod\Business\VodMediaInfo::class);
        $this->MediaInfoList = $arr;

        return $this;
    }

    /**
     *不存在的视频VID列表
     *
     * Generated from protobuf field <code>repeated string NotExistVids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotExistVids()
    {
        return $this->NotExistVids;
    }

    /**
     *不存在的视频VID列表
     *
     * Generated from protobuf field <code>repeated string NotExistVids = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotExistVids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->NotExistVids = $arr;

        return $this;
    }

}

