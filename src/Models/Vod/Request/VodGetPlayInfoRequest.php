<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/request/request_vod.proto

namespace Volc\Models\Vod\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Models.Vod.Request.VodGetPlayInfoRequest</code>
 */
class VodGetPlayInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 视频ID
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     */
    protected $Vid = '';
    /**
     *封装格式，支持mp4,dash,hls，默认mp4Format
     *
     * Generated from protobuf field <code>string Format = 2;</code>
     */
    protected $Format = '';
    /**
     *编码类型，默认h264，可选值为h264,bytevc1等Codec
     *
     * Generated from protobuf field <code>string Codec = 3;</code>
     */
    protected $Codec = '';
    /**
     *视频流清晰度，默认返回全部，支持：240p，360p，480p，540p，720p，1080p
     *
     * Generated from protobuf field <code>string Definition = 4;</code>
     */
    protected $Definition = '';
    /**
     *流文件类型，默认video，支持：加密视频流evideo，加密音频流传eaudio，非加密视频流video，普通音频音频流audio
     *
     * Generated from protobuf field <code>string FileType = 5;</code>
     */
    protected $FileType = '';
    /**
     * 水印贴片标签
     *
     * Generated from protobuf field <code>string LogoType = 6;</code>
     */
    protected $LogoType = '';
    /**
     *播放地址是否base64编码，默认否，支持设置： 0-否，1-是
     *
     * Generated from protobuf field <code>string Base64 = 7;</code>
     */
    protected $Base64 = '';
    /**
     *返回https播放地址，默认否, 1-是；0-否
     *
     * Generated from protobuf field <code>string Ssl = 8;</code>
     */
    protected $Ssl = '';
    /**
     * 是否需要雪碧图（缩略图），默认否，1-是；0-否
     *
     * Generated from protobuf field <code>string NeedThumbs = 9;</code>
     */
    protected $NeedThumbs = '';
    /**
     * 是否需要蒙版弹幕，默认否，1-是；0-否
     *
     * Generated from protobuf field <code>string NeedBarrageMask = 10;</code>
     */
    protected $NeedBarrageMask = '';
    /**
     * 指定CDN类型
     *
     * Generated from protobuf field <code>string CdnType = 11;</code>
     */
    protected $CdnType = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vid
     *           视频ID
     *     @type string $Format
     *          封装格式，支持mp4,dash,hls，默认mp4Format
     *     @type string $Codec
     *          编码类型，默认h264，可选值为h264,bytevc1等Codec
     *     @type string $Definition
     *          视频流清晰度，默认返回全部，支持：240p，360p，480p，540p，720p，1080p
     *     @type string $FileType
     *          流文件类型，默认video，支持：加密视频流evideo，加密音频流传eaudio，非加密视频流video，普通音频音频流audio
     *     @type string $LogoType
     *           水印贴片标签
     *     @type string $Base64
     *          播放地址是否base64编码，默认否，支持设置： 0-否，1-是
     *     @type string $Ssl
     *          返回https播放地址，默认否, 1-是；0-否
     *     @type string $NeedThumbs
     *           是否需要雪碧图（缩略图），默认否，1-是；0-否
     *     @type string $NeedBarrageMask
     *           是否需要蒙版弹幕，默认否，1-是；0-否
     *     @type string $CdnType
     *           指定CDN类型
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Models\Vod\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 视频ID
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     * 视频ID
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vid = $var;

        return $this;
    }

    /**
     *封装格式，支持mp4,dash,hls，默认mp4Format
     *
     * Generated from protobuf field <code>string Format = 2;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     *封装格式，支持mp4,dash,hls，默认mp4Format
     *
     * Generated from protobuf field <code>string Format = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->Format = $var;

        return $this;
    }

    /**
     *编码类型，默认h264，可选值为h264,bytevc1等Codec
     *
     * Generated from protobuf field <code>string Codec = 3;</code>
     * @return string
     */
    public function getCodec()
    {
        return $this->Codec;
    }

    /**
     *编码类型，默认h264，可选值为h264,bytevc1等Codec
     *
     * Generated from protobuf field <code>string Codec = 3;</code>
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
     *视频流清晰度，默认返回全部，支持：240p，360p，480p，540p，720p，1080p
     *
     * Generated from protobuf field <code>string Definition = 4;</code>
     * @return string
     */
    public function getDefinition()
    {
        return $this->Definition;
    }

    /**
     *视频流清晰度，默认返回全部，支持：240p，360p，480p，540p，720p，1080p
     *
     * Generated from protobuf field <code>string Definition = 4;</code>
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
     *流文件类型，默认video，支持：加密视频流evideo，加密音频流传eaudio，非加密视频流video，普通音频音频流audio
     *
     * Generated from protobuf field <code>string FileType = 5;</code>
     * @return string
     */
    public function getFileType()
    {
        return $this->FileType;
    }

    /**
     *流文件类型，默认video，支持：加密视频流evideo，加密音频流传eaudio，非加密视频流video，普通音频音频流audio
     *
     * Generated from protobuf field <code>string FileType = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileType = $var;

        return $this;
    }

    /**
     * 水印贴片标签
     *
     * Generated from protobuf field <code>string LogoType = 6;</code>
     * @return string
     */
    public function getLogoType()
    {
        return $this->LogoType;
    }

    /**
     * 水印贴片标签
     *
     * Generated from protobuf field <code>string LogoType = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setLogoType($var)
    {
        GPBUtil::checkString($var, True);
        $this->LogoType = $var;

        return $this;
    }

    /**
     *播放地址是否base64编码，默认否，支持设置： 0-否，1-是
     *
     * Generated from protobuf field <code>string Base64 = 7;</code>
     * @return string
     */
    public function getBase64()
    {
        return $this->Base64;
    }

    /**
     *播放地址是否base64编码，默认否，支持设置： 0-否，1-是
     *
     * Generated from protobuf field <code>string Base64 = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setBase64($var)
    {
        GPBUtil::checkString($var, True);
        $this->Base64 = $var;

        return $this;
    }

    /**
     *返回https播放地址，默认否, 1-是；0-否
     *
     * Generated from protobuf field <code>string Ssl = 8;</code>
     * @return string
     */
    public function getSsl()
    {
        return $this->Ssl;
    }

    /**
     *返回https播放地址，默认否, 1-是；0-否
     *
     * Generated from protobuf field <code>string Ssl = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSsl($var)
    {
        GPBUtil::checkString($var, True);
        $this->Ssl = $var;

        return $this;
    }

    /**
     * 是否需要雪碧图（缩略图），默认否，1-是；0-否
     *
     * Generated from protobuf field <code>string NeedThumbs = 9;</code>
     * @return string
     */
    public function getNeedThumbs()
    {
        return $this->NeedThumbs;
    }

    /**
     * 是否需要雪碧图（缩略图），默认否，1-是；0-否
     *
     * Generated from protobuf field <code>string NeedThumbs = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setNeedThumbs($var)
    {
        GPBUtil::checkString($var, True);
        $this->NeedThumbs = $var;

        return $this;
    }

    /**
     * 是否需要蒙版弹幕，默认否，1-是；0-否
     *
     * Generated from protobuf field <code>string NeedBarrageMask = 10;</code>
     * @return string
     */
    public function getNeedBarrageMask()
    {
        return $this->NeedBarrageMask;
    }

    /**
     * 是否需要蒙版弹幕，默认否，1-是；0-否
     *
     * Generated from protobuf field <code>string NeedBarrageMask = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setNeedBarrageMask($var)
    {
        GPBUtil::checkString($var, True);
        $this->NeedBarrageMask = $var;

        return $this;
    }

    /**
     * 指定CDN类型
     *
     * Generated from protobuf field <code>string CdnType = 11;</code>
     * @return string
     */
    public function getCdnType()
    {
        return $this->CdnType;
    }

    /**
     * 指定CDN类型
     *
     * Generated from protobuf field <code>string CdnType = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setCdnType($var)
    {
        GPBUtil::checkString($var, True);
        $this->CdnType = $var;

        return $this;
    }

}

