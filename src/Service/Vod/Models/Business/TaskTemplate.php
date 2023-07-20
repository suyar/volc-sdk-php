<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.TaskTemplate</code>
 */
class TaskTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * 模板Id
     *
     * Generated from protobuf field <code>string TemplateId = 1;</code>
     */
    protected $TemplateId = '';
    /**
     * 空间名
     *
     * Generated from protobuf field <code>string SpaceName = 2;</code>
     */
    protected $SpaceName = '';
    /**
     * 模板名称
     *
     * Generated from protobuf field <code>string Name = 3;</code>
     */
    protected $Name = '';
    /**
     * Generated from protobuf field <code>string Description = 4;</code>
     */
    protected $Description = '';
    /**
     * 多个值通过 ',' 连接
     *
     * Generated from protobuf field <code>string Type = 6;</code>
     */
    protected $Type = '';
    /**
     * 版本Id
     *
     * Generated from protobuf field <code>string CommitId = 9;</code>
     */
    protected $CommitId = '';
    /**
     * Generated from protobuf field <code>string Hash = 11;</code>
     */
    protected $Hash = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp CreatedAt = 12;</code>
     */
    protected $CreatedAt = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp UpdatedAt = 13;</code>
     */
    protected $UpdatedAt = null;
    /**
     * TranscodeVideo|ByteHD|TranscodeAudio|Snapshot
     *
     * Generated from protobuf field <code>string TaskType = 14;</code>
     */
    protected $TaskType = '';
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.TranscodeVideoTaskParams TranscodeVideoTaskParams = 15;</code>
     */
    protected $TranscodeVideoTaskParams = null;
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.ByteHDTaskParams ByteHDTaskParams = 18;</code>
     */
    protected $ByteHDTaskParams = null;
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.TranscodeAudioTaskParams TranscodeAudioTaskParams = 19;</code>
     */
    protected $TranscodeAudioTaskParams = null;
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.SnapshotTaskParams SnapshotTaskParams = 20;</code>
     */
    protected $SnapshotTaskParams = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $TemplateId
     *           模板Id
     *     @type string $SpaceName
     *           空间名
     *     @type string $Name
     *           模板名称
     *     @type string $Description
     *     @type string $Type
     *           多个值通过 ',' 连接
     *     @type string $CommitId
     *           版本Id
     *     @type string $Hash
     *     @type \Google\Protobuf\Timestamp $CreatedAt
     *     @type \Google\Protobuf\Timestamp $UpdatedAt
     *     @type string $TaskType
     *           TranscodeVideo|ByteHD|TranscodeAudio|Snapshot
     *     @type \Volc\Service\Vod\Models\Business\TranscodeVideoTaskParams $TranscodeVideoTaskParams
     *     @type \Volc\Service\Vod\Models\Business\ByteHDTaskParams $ByteHDTaskParams
     *     @type \Volc\Service\Vod\Models\Business\TranscodeAudioTaskParams $TranscodeAudioTaskParams
     *     @type \Volc\Service\Vod\Models\Business\SnapshotTaskParams $SnapshotTaskParams
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 模板Id
     *
     * Generated from protobuf field <code>string TemplateId = 1;</code>
     * @return string
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }

    /**
     * 模板Id
     *
     * Generated from protobuf field <code>string TemplateId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TemplateId = $var;

        return $this;
    }

    /**
     * 空间名
     *
     * Generated from protobuf field <code>string SpaceName = 2;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 空间名
     *
     * Generated from protobuf field <code>string SpaceName = 2;</code>
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
     * 模板名称
     *
     * Generated from protobuf field <code>string Name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * 模板名称
     *
     * Generated from protobuf field <code>string Name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
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
     * 多个值通过 ',' 连接
     *
     * Generated from protobuf field <code>string Type = 6;</code>
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * 多个值通过 ',' 连接
     *
     * Generated from protobuf field <code>string Type = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->Type = $var;

        return $this;
    }

    /**
     * 版本Id
     *
     * Generated from protobuf field <code>string CommitId = 9;</code>
     * @return string
     */
    public function getCommitId()
    {
        return $this->CommitId;
    }

    /**
     * 版本Id
     *
     * Generated from protobuf field <code>string CommitId = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setCommitId($var)
    {
        GPBUtil::checkString($var, True);
        $this->CommitId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Hash = 11;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->Hash;
    }

    /**
     * Generated from protobuf field <code>string Hash = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->Hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp CreatedAt = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    public function hasCreatedAt()
    {
        return isset($this->CreatedAt);
    }

    public function clearCreatedAt()
    {
        unset($this->CreatedAt);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp CreatedAt = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->CreatedAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp UpdatedAt = 13;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdatedAt()
    {
        return $this->UpdatedAt;
    }

    public function hasUpdatedAt()
    {
        return isset($this->UpdatedAt);
    }

    public function clearUpdatedAt()
    {
        unset($this->UpdatedAt);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp UpdatedAt = 13;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->UpdatedAt = $var;

        return $this;
    }

    /**
     * TranscodeVideo|ByteHD|TranscodeAudio|Snapshot
     *
     * Generated from protobuf field <code>string TaskType = 14;</code>
     * @return string
     */
    public function getTaskType()
    {
        return $this->TaskType;
    }

    /**
     * TranscodeVideo|ByteHD|TranscodeAudio|Snapshot
     *
     * Generated from protobuf field <code>string TaskType = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskType($var)
    {
        GPBUtil::checkString($var, True);
        $this->TaskType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.TranscodeVideoTaskParams TranscodeVideoTaskParams = 15;</code>
     * @return \Volc\Service\Vod\Models\Business\TranscodeVideoTaskParams|null
     */
    public function getTranscodeVideoTaskParams()
    {
        return $this->TranscodeVideoTaskParams;
    }

    public function hasTranscodeVideoTaskParams()
    {
        return isset($this->TranscodeVideoTaskParams);
    }

    public function clearTranscodeVideoTaskParams()
    {
        unset($this->TranscodeVideoTaskParams);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.TranscodeVideoTaskParams TranscodeVideoTaskParams = 15;</code>
     * @param \Volc\Service\Vod\Models\Business\TranscodeVideoTaskParams $var
     * @return $this
     */
    public function setTranscodeVideoTaskParams($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\TranscodeVideoTaskParams::class);
        $this->TranscodeVideoTaskParams = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.ByteHDTaskParams ByteHDTaskParams = 18;</code>
     * @return \Volc\Service\Vod\Models\Business\ByteHDTaskParams|null
     */
    public function getByteHDTaskParams()
    {
        return $this->ByteHDTaskParams;
    }

    public function hasByteHDTaskParams()
    {
        return isset($this->ByteHDTaskParams);
    }

    public function clearByteHDTaskParams()
    {
        unset($this->ByteHDTaskParams);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.ByteHDTaskParams ByteHDTaskParams = 18;</code>
     * @param \Volc\Service\Vod\Models\Business\ByteHDTaskParams $var
     * @return $this
     */
    public function setByteHDTaskParams($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\ByteHDTaskParams::class);
        $this->ByteHDTaskParams = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.TranscodeAudioTaskParams TranscodeAudioTaskParams = 19;</code>
     * @return \Volc\Service\Vod\Models\Business\TranscodeAudioTaskParams|null
     */
    public function getTranscodeAudioTaskParams()
    {
        return $this->TranscodeAudioTaskParams;
    }

    public function hasTranscodeAudioTaskParams()
    {
        return isset($this->TranscodeAudioTaskParams);
    }

    public function clearTranscodeAudioTaskParams()
    {
        unset($this->TranscodeAudioTaskParams);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.TranscodeAudioTaskParams TranscodeAudioTaskParams = 19;</code>
     * @param \Volc\Service\Vod\Models\Business\TranscodeAudioTaskParams $var
     * @return $this
     */
    public function setTranscodeAudioTaskParams($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\TranscodeAudioTaskParams::class);
        $this->TranscodeAudioTaskParams = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.SnapshotTaskParams SnapshotTaskParams = 20;</code>
     * @return \Volc\Service\Vod\Models\Business\SnapshotTaskParams|null
     */
    public function getSnapshotTaskParams()
    {
        return $this->SnapshotTaskParams;
    }

    public function hasSnapshotTaskParams()
    {
        return isset($this->SnapshotTaskParams);
    }

    public function clearSnapshotTaskParams()
    {
        unset($this->SnapshotTaskParams);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.SnapshotTaskParams SnapshotTaskParams = 20;</code>
     * @param \Volc\Service\Vod\Models\Business\SnapshotTaskParams $var
     * @return $this
     */
    public function setSnapshotTaskParams($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\SnapshotTaskParams::class);
        $this->SnapshotTaskParams = $var;

        return $this;
    }

}

