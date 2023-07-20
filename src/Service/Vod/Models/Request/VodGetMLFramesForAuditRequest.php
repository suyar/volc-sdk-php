<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodGetMLFramesForAuditRequest</code>
 */
class VodGetMLFramesForAuditRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *视频ID
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     */
    protected $Vid = '';
    /**
     *审核帧模板信息中的Strategy，抽帧策略
     *
     * Generated from protobuf field <code>string Strategy = 2;</code>
     */
    protected $Strategy = '';
    /**
     *抽帧方式,参考VodFrameExtractingOptionForAudit
     *
     * Generated from protobuf field <code>string FrameOpt = 3;</code>
     */
    protected $FrameOpt = '';
    /**
     *抽帧方式选择Fps或FpsLimitNumberOfFrames时生效,表示抽帧的帧率,生效时需要保证大于0
     *
     * Generated from protobuf field <code>string FrameFps = 4;</code>
     */
    protected $FrameFps = '';
    /**
     *抽帧方式选择NumberOfFrames时生效,表示需要多少帧,生效时需要保证大于0
     *
     * Generated from protobuf field <code>string NumberOfFrames = 5;</code>
     */
    protected $NumberOfFrames = '';
    /**
     *抽帧方式选择CutTimes时生效,逗号分割,表示需要获取的帧的时间戳(ms)列表，生效时需要保证数组不为空
     *
     * Generated from protobuf field <code>string CutTimeMills = 6;</code>
     */
    protected $CutTimeMills = '';
    /**
     *需要首帧, 默认0，支持设置： 0-否，1-是
     *
     * Generated from protobuf field <code>string NeedFirstFrame = 7;</code>
     */
    protected $NeedFirstFrame = '';
    /**
     *需要尾帧, 默认0，支持设置： 0-否，1-是
     *
     * Generated from protobuf field <code>string NeedLastFrame = 8;</code>
     */
    protected $NeedLastFrame = '';
    /**
     *从视频的第几秒开始抽帧，单位:ms
     *
     * Generated from protobuf field <code>string StartTimeMill = 9;</code>
     */
    protected $StartTimeMill = '';
    /**
     *从视频的第几秒结束抽帧，单位:ms
     *
     * Generated from protobuf field <code>string EndTimeMill = 10;</code>
     */
    protected $EndTimeMill = '';
    /**
     *抽帧方式选择FpsLimitNumberOfFrames时生效,表示限制的最小帧数,为0表示不限制
     *
     * Generated from protobuf field <code>string MinNumberOfFrames = 11;</code>
     */
    protected $MinNumberOfFrames = '';
    /**
     *抽帧方式选择FpsLimitNumberOfFrames时生效,表示限制的最大帧数,为0表示不限制
     *
     * Generated from protobuf field <code>string MaxNumberOfFrames = 12;</code>
     */
    protected $MaxNumberOfFrames = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vid
     *          视频ID
     *     @type string $Strategy
     *          审核帧模板信息中的Strategy，抽帧策略
     *     @type string $FrameOpt
     *          抽帧方式,参考VodFrameExtractingOptionForAudit
     *     @type string $FrameFps
     *          抽帧方式选择Fps或FpsLimitNumberOfFrames时生效,表示抽帧的帧率,生效时需要保证大于0
     *     @type string $NumberOfFrames
     *          抽帧方式选择NumberOfFrames时生效,表示需要多少帧,生效时需要保证大于0
     *     @type string $CutTimeMills
     *          抽帧方式选择CutTimes时生效,逗号分割,表示需要获取的帧的时间戳(ms)列表，生效时需要保证数组不为空
     *     @type string $NeedFirstFrame
     *          需要首帧, 默认0，支持设置： 0-否，1-是
     *     @type string $NeedLastFrame
     *          需要尾帧, 默认0，支持设置： 0-否，1-是
     *     @type string $StartTimeMill
     *          从视频的第几秒开始抽帧，单位:ms
     *     @type string $EndTimeMill
     *          从视频的第几秒结束抽帧，单位:ms
     *     @type string $MinNumberOfFrames
     *          抽帧方式选择FpsLimitNumberOfFrames时生效,表示限制的最小帧数,为0表示不限制
     *     @type string $MaxNumberOfFrames
     *          抽帧方式选择FpsLimitNumberOfFrames时生效,表示限制的最大帧数,为0表示不限制
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     *视频ID
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     *视频ID
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
     *审核帧模板信息中的Strategy，抽帧策略
     *
     * Generated from protobuf field <code>string Strategy = 2;</code>
     * @return string
     */
    public function getStrategy()
    {
        return $this->Strategy;
    }

    /**
     *审核帧模板信息中的Strategy，抽帧策略
     *
     * Generated from protobuf field <code>string Strategy = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStrategy($var)
    {
        GPBUtil::checkString($var, True);
        $this->Strategy = $var;

        return $this;
    }

    /**
     *抽帧方式,参考VodFrameExtractingOptionForAudit
     *
     * Generated from protobuf field <code>string FrameOpt = 3;</code>
     * @return string
     */
    public function getFrameOpt()
    {
        return $this->FrameOpt;
    }

    /**
     *抽帧方式,参考VodFrameExtractingOptionForAudit
     *
     * Generated from protobuf field <code>string FrameOpt = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFrameOpt($var)
    {
        GPBUtil::checkString($var, True);
        $this->FrameOpt = $var;

        return $this;
    }

    /**
     *抽帧方式选择Fps或FpsLimitNumberOfFrames时生效,表示抽帧的帧率,生效时需要保证大于0
     *
     * Generated from protobuf field <code>string FrameFps = 4;</code>
     * @return string
     */
    public function getFrameFps()
    {
        return $this->FrameFps;
    }

    /**
     *抽帧方式选择Fps或FpsLimitNumberOfFrames时生效,表示抽帧的帧率,生效时需要保证大于0
     *
     * Generated from protobuf field <code>string FrameFps = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFrameFps($var)
    {
        GPBUtil::checkString($var, True);
        $this->FrameFps = $var;

        return $this;
    }

    /**
     *抽帧方式选择NumberOfFrames时生效,表示需要多少帧,生效时需要保证大于0
     *
     * Generated from protobuf field <code>string NumberOfFrames = 5;</code>
     * @return string
     */
    public function getNumberOfFrames()
    {
        return $this->NumberOfFrames;
    }

    /**
     *抽帧方式选择NumberOfFrames时生效,表示需要多少帧,生效时需要保证大于0
     *
     * Generated from protobuf field <code>string NumberOfFrames = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNumberOfFrames($var)
    {
        GPBUtil::checkString($var, True);
        $this->NumberOfFrames = $var;

        return $this;
    }

    /**
     *抽帧方式选择CutTimes时生效,逗号分割,表示需要获取的帧的时间戳(ms)列表，生效时需要保证数组不为空
     *
     * Generated from protobuf field <code>string CutTimeMills = 6;</code>
     * @return string
     */
    public function getCutTimeMills()
    {
        return $this->CutTimeMills;
    }

    /**
     *抽帧方式选择CutTimes时生效,逗号分割,表示需要获取的帧的时间戳(ms)列表，生效时需要保证数组不为空
     *
     * Generated from protobuf field <code>string CutTimeMills = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCutTimeMills($var)
    {
        GPBUtil::checkString($var, True);
        $this->CutTimeMills = $var;

        return $this;
    }

    /**
     *需要首帧, 默认0，支持设置： 0-否，1-是
     *
     * Generated from protobuf field <code>string NeedFirstFrame = 7;</code>
     * @return string
     */
    public function getNeedFirstFrame()
    {
        return $this->NeedFirstFrame;
    }

    /**
     *需要首帧, 默认0，支持设置： 0-否，1-是
     *
     * Generated from protobuf field <code>string NeedFirstFrame = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setNeedFirstFrame($var)
    {
        GPBUtil::checkString($var, True);
        $this->NeedFirstFrame = $var;

        return $this;
    }

    /**
     *需要尾帧, 默认0，支持设置： 0-否，1-是
     *
     * Generated from protobuf field <code>string NeedLastFrame = 8;</code>
     * @return string
     */
    public function getNeedLastFrame()
    {
        return $this->NeedLastFrame;
    }

    /**
     *需要尾帧, 默认0，支持设置： 0-否，1-是
     *
     * Generated from protobuf field <code>string NeedLastFrame = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setNeedLastFrame($var)
    {
        GPBUtil::checkString($var, True);
        $this->NeedLastFrame = $var;

        return $this;
    }

    /**
     *从视频的第几秒开始抽帧，单位:ms
     *
     * Generated from protobuf field <code>string StartTimeMill = 9;</code>
     * @return string
     */
    public function getStartTimeMill()
    {
        return $this->StartTimeMill;
    }

    /**
     *从视频的第几秒开始抽帧，单位:ms
     *
     * Generated from protobuf field <code>string StartTimeMill = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTimeMill($var)
    {
        GPBUtil::checkString($var, True);
        $this->StartTimeMill = $var;

        return $this;
    }

    /**
     *从视频的第几秒结束抽帧，单位:ms
     *
     * Generated from protobuf field <code>string EndTimeMill = 10;</code>
     * @return string
     */
    public function getEndTimeMill()
    {
        return $this->EndTimeMill;
    }

    /**
     *从视频的第几秒结束抽帧，单位:ms
     *
     * Generated from protobuf field <code>string EndTimeMill = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setEndTimeMill($var)
    {
        GPBUtil::checkString($var, True);
        $this->EndTimeMill = $var;

        return $this;
    }

    /**
     *抽帧方式选择FpsLimitNumberOfFrames时生效,表示限制的最小帧数,为0表示不限制
     *
     * Generated from protobuf field <code>string MinNumberOfFrames = 11;</code>
     * @return string
     */
    public function getMinNumberOfFrames()
    {
        return $this->MinNumberOfFrames;
    }

    /**
     *抽帧方式选择FpsLimitNumberOfFrames时生效,表示限制的最小帧数,为0表示不限制
     *
     * Generated from protobuf field <code>string MinNumberOfFrames = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setMinNumberOfFrames($var)
    {
        GPBUtil::checkString($var, True);
        $this->MinNumberOfFrames = $var;

        return $this;
    }

    /**
     *抽帧方式选择FpsLimitNumberOfFrames时生效,表示限制的最大帧数,为0表示不限制
     *
     * Generated from protobuf field <code>string MaxNumberOfFrames = 12;</code>
     * @return string
     */
    public function getMaxNumberOfFrames()
    {
        return $this->MaxNumberOfFrames;
    }

    /**
     *抽帧方式选择FpsLimitNumberOfFrames时生效,表示限制的最大帧数,为0表示不限制
     *
     * Generated from protobuf field <code>string MaxNumberOfFrames = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setMaxNumberOfFrames($var)
    {
        GPBUtil::checkString($var, True);
        $this->MaxNumberOfFrames = $var;

        return $this;
    }

}

