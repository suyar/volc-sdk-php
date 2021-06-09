<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_common.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodVideoStreamMeta</code>
 */
class VodVideoStreamMeta extends \Google\Protobuf\Internal\Message
{
    /**
     *视频编码格式
     *
     * Generated from protobuf field <code>string Codec = 1;</code>
     */
    protected $Codec = '';
    /**
     *视频高度
     *
     * Generated from protobuf field <code>int32 Height = 2;</code>
     */
    protected $Height = 0;
    /**
     *视频宽度
     *
     * Generated from protobuf field <code>int32 Width = 3;</code>
     */
    protected $Width = 0;
    /**
     *视频时长
     *
     * Generated from protobuf field <code>float Duration = 4;</code>
     */
    protected $Duration = 0.0;
    /**
     *视频清晰度
     *
     * Generated from protobuf field <code>string Definition = 5;</code>
     */
    protected $Definition = '';
    /**
     *视频码率(Kbps)
     *
     * Generated from protobuf field <code>int32 Bitrate = 6;</code>
     */
    protected $Bitrate = 0;
    /**
     *帧率
     *
     * Generated from protobuf field <code>float Fps = 7;</code>
     */
    protected $Fps = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Codec
     *          视频编码格式
     *     @type int $Height
     *          视频高度
     *     @type int $Width
     *          视频宽度
     *     @type float $Duration
     *          视频时长
     *     @type string $Definition
     *          视频清晰度
     *     @type int $Bitrate
     *          视频码率(Kbps)
     *     @type float $Fps
     *          帧率
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCommon::initOnce();
        parent::__construct($data);
    }

    /**
     *视频编码格式
     *
     * Generated from protobuf field <code>string Codec = 1;</code>
     * @return string
     */
    public function getCodec()
    {
        return $this->Codec;
    }

    /**
     *视频编码格式
     *
     * Generated from protobuf field <code>string Codec = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkString($var, True);
        $this->Codec = $var;

        return $this;
    }

    /**
     *视频高度
     *
     * Generated from protobuf field <code>int32 Height = 2;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     *视频高度
     *
     * Generated from protobuf field <code>int32 Height = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->Height = $var;

        return $this;
    }

    /**
     *视频宽度
     *
     * Generated from protobuf field <code>int32 Width = 3;</code>
     * @return int
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     *视频宽度
     *
     * Generated from protobuf field <code>int32 Width = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->Width = $var;

        return $this;
    }

    /**
     *视频时长
     *
     * Generated from protobuf field <code>float Duration = 4;</code>
     * @return float
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     *视频时长
     *
     * Generated from protobuf field <code>float Duration = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkFloat($var);
        $this->Duration = $var;

        return $this;
    }

    /**
     *视频清晰度
     *
     * Generated from protobuf field <code>string Definition = 5;</code>
     * @return string
     */
    public function getDefinition()
    {
        return $this->Definition;
    }

    /**
     *视频清晰度
     *
     * Generated from protobuf field <code>string Definition = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDefinition($var)
    {
        GPBUtil::checkString($var, True);
        $this->Definition = $var;

        return $this;
    }

    /**
     *视频码率(Kbps)
     *
     * Generated from protobuf field <code>int32 Bitrate = 6;</code>
     * @return int
     */
    public function getBitrate()
    {
        return $this->Bitrate;
    }

    /**
     *视频码率(Kbps)
     *
     * Generated from protobuf field <code>int32 Bitrate = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setBitrate($var)
    {
        GPBUtil::checkInt32($var);
        $this->Bitrate = $var;

        return $this;
    }

    /**
     *帧率
     *
     * Generated from protobuf field <code>float Fps = 7;</code>
     * @return float
     */
    public function getFps()
    {
        return $this->Fps;
    }

    /**
     *帧率
     *
     * Generated from protobuf field <code>float Fps = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setFps($var)
    {
        GPBUtil::checkFloat($var);
        $this->Fps = $var;

        return $this;
    }

}

