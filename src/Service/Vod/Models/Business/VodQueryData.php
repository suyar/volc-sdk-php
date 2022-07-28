<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_upload.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodQueryData</code>
 */
class VodQueryData extends \Google\Protobuf\Internal\Message
{
    /**
     * URL批量上传状态查询结果 
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodQueryUploadResult Data = 1;</code>
     */
    protected $Data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Business\VodQueryUploadResult $Data
     *           URL批量上传状态查询结果 
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * URL批量上传状态查询结果 
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodQueryUploadResult Data = 1;</code>
     * @return \Volc\Service\Vod\Models\Business\VodQueryUploadResult|null
     */
    public function getData()
    {
        return $this->Data;
    }

    public function hasData()
    {
        return isset($this->Data);
    }

    public function clearData()
    {
        unset($this->Data);
    }

    /**
     * URL批量上传状态查询结果 
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodQueryUploadResult Data = 1;</code>
     * @param \Volc\Service\Vod\Models\Business\VodQueryUploadResult $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\VodQueryUploadResult::class);
        $this->Data = $var;

        return $this;
    }

}

