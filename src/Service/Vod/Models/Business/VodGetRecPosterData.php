<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodGetRecPosterData</code>
 */
class VodGetRecPosterData extends \Google\Protobuf\Internal\Message
{
    /**
     *封面图信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodStoreUriGroup StoreUriGroups = 1;</code>
     */
    private $StoreUriGroups;
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
     *     @type \Volc\Service\Vod\Models\Business\VodStoreUriGroup[]|\Google\Protobuf\Internal\RepeatedField $StoreUriGroups
     *          封面图信息
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $NotExistVids
     *          不存在的视频VID列表
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     *封面图信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodStoreUriGroup StoreUriGroups = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStoreUriGroups()
    {
        return $this->StoreUriGroups;
    }

    /**
     *封面图信息
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodStoreUriGroup StoreUriGroups = 1;</code>
     * @param \Volc\Service\Vod\Models\Business\VodStoreUriGroup[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStoreUriGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodStoreUriGroup::class);
        $this->StoreUriGroups = $arr;

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

