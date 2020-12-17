<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/response/response_vod.proto

namespace Volc\Models\Vod\Response;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Models.Vod.Response.VodUrlUploadResponse</code>
 */
class VodUrlUploadResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Volcengine.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     */
    protected $ResponseMetadata = null;
    /**
     * Generated from protobuf field <code>.Volcengine.Models.Vod.Business.VodUrlResponseData Result = 2;</code>
     */
    protected $Result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Models\Base\ResponseMetadata $ResponseMetadata
     *     @type \Volc\Models\Vod\Business\VodUrlResponseData $Result
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Models\Vod\GPBMetadata\ResponseVod::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @return \Volc\Models\Base\ResponseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->ResponseMetadata;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @param \Volc\Models\Base\ResponseMetadata $var
     * @return $this
     */
    public function setResponseMetadata($var)
    {
        GPBUtil::checkMessage($var, \Volc\Models\Base\ResponseMetadata::class);
        $this->ResponseMetadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Models.Vod.Business.VodUrlResponseData Result = 2;</code>
     * @return \Volc\Models\Vod\Business\VodUrlResponseData
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Models.Vod.Business.VodUrlResponseData Result = 2;</code>
     * @param \Volc\Models\Vod\Business\VodUrlResponseData $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Volc\Models\Vod\Business\VodUrlResponseData::class);
        $this->Result = $var;

        return $this;
    }

}

