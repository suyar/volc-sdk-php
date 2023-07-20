<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodGetMediaInfosRequest</code>
 */
class VodGetMediaInfosRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *视频ID列表
     *
     * Generated from protobuf field <code>string Vids = 1;</code>
     */
    protected $Vids = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vids
     *          视频ID列表
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     *视频ID列表
     *
     * Generated from protobuf field <code>string Vids = 1;</code>
     * @return string
     */
    public function getVids()
    {
        return $this->Vids;
    }

    /**
     *视频ID列表
     *
     * Generated from protobuf field <code>string Vids = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVids($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vids = $var;

        return $this;
    }

}

