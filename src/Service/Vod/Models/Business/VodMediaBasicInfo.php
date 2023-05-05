<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodMediaBasicInfo</code>
 */
class VodMediaBasicInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     *视频ID
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
     */
    protected $Vid = '';
    /**
     *视频名称
     *
     * Generated from protobuf field <code>string Title = 3;</code>
     */
    protected $Title = '';
    /**
     *视频描述
     *
     * Generated from protobuf field <code>string Description = 4;</code>
     */
    protected $Description = '';
    /**
     *封面图对象地址
     *
     * Generated from protobuf field <code>string PosterUri = 5;</code>
     */
    protected $PosterUri = '';
    /**
     *发布状态
     *
     * Generated from protobuf field <code>string PublishStatus = 6;</code>
     */
    protected $PublishStatus = '';
    /**
     *标签列表
     *
     * Generated from protobuf field <code>repeated string Tags = 7;</code>
     */
    private $Tags;
    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 8;</code>
     */
    protected $CreateTime = '';
    /**
     *分类串
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodClassification Classification = 9;</code>
     */
    protected $Classification = null;
    /**
     * Tos存储类型:STANDARD, ARCHIVE
     *
     * Generated from protobuf field <code>string TosStorageClass = 10;</code>
     */
    protected $TosStorageClass = '';
    /**
     * 音视频来源
     *
     * Generated from protobuf field <code>string VodUploadSource = 11;</code>
     */
    protected $VodUploadSource = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *          空间名
     *     @type string $Vid
     *          视频ID
     *     @type string $Title
     *          视频名称
     *     @type string $Description
     *          视频描述
     *     @type string $PosterUri
     *          封面图对象地址
     *     @type string $PublishStatus
     *          发布状态
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $Tags
     *          标签列表
     *     @type string $CreateTime
     *          创建时间
     *     @type \Volc\Service\Vod\Models\Business\VodClassification $Classification
     *          分类串
     *     @type string $TosStorageClass
     *           Tos存储类型:STANDARD, ARCHIVE
     *     @type string $VodUploadSource
     *           音视频来源
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     *空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     *空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SpaceName = $var;

        return $this;
    }

    /**
     *视频ID
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     *视频ID
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
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
     *视频名称
     *
     * Generated from protobuf field <code>string Title = 3;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     *视频名称
     *
     * Generated from protobuf field <code>string Title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->Title = $var;

        return $this;
    }

    /**
     *视频描述
     *
     * Generated from protobuf field <code>string Description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     *视频描述
     *
     * Generated from protobuf field <code>string Description = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->Description = $var;

        return $this;
    }

    /**
     *封面图对象地址
     *
     * Generated from protobuf field <code>string PosterUri = 5;</code>
     * @return string
     */
    public function getPosterUri()
    {
        return $this->PosterUri;
    }

    /**
     *封面图对象地址
     *
     * Generated from protobuf field <code>string PosterUri = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPosterUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->PosterUri = $var;

        return $this;
    }

    /**
     *发布状态
     *
     * Generated from protobuf field <code>string PublishStatus = 6;</code>
     * @return string
     */
    public function getPublishStatus()
    {
        return $this->PublishStatus;
    }

    /**
     *发布状态
     *
     * Generated from protobuf field <code>string PublishStatus = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPublishStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->PublishStatus = $var;

        return $this;
    }

    /**
     *标签列表
     *
     * Generated from protobuf field <code>repeated string Tags = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->Tags;
    }

    /**
     *标签列表
     *
     * Generated from protobuf field <code>repeated string Tags = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->Tags = $arr;

        return $this;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 8;</code>
     * @return string
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->CreateTime = $var;

        return $this;
    }

    /**
     *分类串
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodClassification Classification = 9;</code>
     * @return \Volc\Service\Vod\Models\Business\VodClassification|null
     */
    public function getClassification()
    {
        return $this->Classification;
    }

    public function hasClassification()
    {
        return isset($this->Classification);
    }

    public function clearClassification()
    {
        unset($this->Classification);
    }

    /**
     *分类串
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.VodClassification Classification = 9;</code>
     * @param \Volc\Service\Vod\Models\Business\VodClassification $var
     * @return $this
     */
    public function setClassification($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\VodClassification::class);
        $this->Classification = $var;

        return $this;
    }

    /**
     * Tos存储类型:STANDARD, ARCHIVE
     *
     * Generated from protobuf field <code>string TosStorageClass = 10;</code>
     * @return string
     */
    public function getTosStorageClass()
    {
        return $this->TosStorageClass;
    }

    /**
     * Tos存储类型:STANDARD, ARCHIVE
     *
     * Generated from protobuf field <code>string TosStorageClass = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setTosStorageClass($var)
    {
        GPBUtil::checkString($var, True);
        $this->TosStorageClass = $var;

        return $this;
    }

    /**
     * 音视频来源
     *
     * Generated from protobuf field <code>string VodUploadSource = 11;</code>
     * @return string
     */
    public function getVodUploadSource()
    {
        return $this->VodUploadSource;
    }

    /**
     * 音视频来源
     *
     * Generated from protobuf field <code>string VodUploadSource = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setVodUploadSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->VodUploadSource = $var;

        return $this;
    }

}

