<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_upload.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodUploadFunctionInput</code>
 */
class VodUploadFunctionInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>double SnapshotTime = 1;</code>
     */
    protected $SnapshotTime = 0.0;
    /**
     * Generated from protobuf field <code>string Title = 2;</code>
     */
    protected $Title = '';
    /**
     * Generated from protobuf field <code>string Tags = 3;</code>
     */
    protected $Tags = '';
    /**
     * Generated from protobuf field <code>string Description = 4;</code>
     */
    protected $Description = '';
    /**
     * Generated from protobuf field <code>string Category = 5;</code>
     */
    protected $Category = '';
    /**
     * Generated from protobuf field <code>int32 RecordType = 6;</code>
     */
    protected $RecordType = 0;
    /**
     * Generated from protobuf field <code>string Format = 7;</code>
     */
    protected $Format = '';
    /**
     * Generated from protobuf field <code>int32 ClassificationId = 8;</code>
     */
    protected $ClassificationId = 0;
    /**
     * Generated from protobuf field <code>string TemplateId = 9;</code>
     */
    protected $TemplateId = '';
    /**
     * Generated from protobuf field <code>string Vid = 10;</code>
     */
    protected $Vid = '';
    /**
     * Generated from protobuf field <code>string Fid = 11;</code>
     */
    protected $Fid = '';
    /**
     * Generated from protobuf field <code>string Language = 12;</code>
     */
    protected $Language = '';
    /**
     * Generated from protobuf field <code>string StoreUri = 13;</code>
     */
    protected $StoreUri = '';
    /**
     * Generated from protobuf field <code>string Source = 14;</code>
     */
    protected $Source = '';
    /**
     * Generated from protobuf field <code>string Tag = 15;</code>
     */
    protected $Tag = '';
    /**
     * Generated from protobuf field <code>bool AutoPublish = 16;</code>
     */
    protected $AutoPublish = false;
    /**
     * Generated from protobuf field <code>string ActionType = 17;</code>
     */
    protected $ActionType = '';
    /**
     * Generated from protobuf field <code>bool IsHlsIndexOnly = 18;</code>
     */
    protected $IsHlsIndexOnly = false;
    /**
     * Generated from protobuf field <code>string HlsMediaSize = 19;</code>
     */
    protected $HlsMediaSize = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $SnapshotTime
     *     @type string $Title
     *     @type string $Tags
     *     @type string $Description
     *     @type string $Category
     *     @type int $RecordType
     *     @type string $Format
     *     @type int $ClassificationId
     *     @type string $TemplateId
     *     @type string $Vid
     *     @type string $Fid
     *     @type string $Language
     *     @type string $StoreUri
     *     @type string $Source
     *     @type string $Tag
     *     @type bool $AutoPublish
     *     @type string $ActionType
     *     @type bool $IsHlsIndexOnly
     *     @type string $HlsMediaSize
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>double SnapshotTime = 1;</code>
     * @return float
     */
    public function getSnapshotTime()
    {
        return $this->SnapshotTime;
    }

    /**
     * Generated from protobuf field <code>double SnapshotTime = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setSnapshotTime($var)
    {
        GPBUtil::checkDouble($var);
        $this->SnapshotTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Generated from protobuf field <code>string Title = 2;</code>
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
     * Generated from protobuf field <code>string Tags = 3;</code>
     * @return string
     */
    public function getTags()
    {
        return $this->Tags;
    }

    /**
     * Generated from protobuf field <code>string Tags = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTags($var)
    {
        GPBUtil::checkString($var, True);
        $this->Tags = $var;

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
     * Generated from protobuf field <code>string Category = 5;</code>
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * Generated from protobuf field <code>string Category = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->Category = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 RecordType = 6;</code>
     * @return int
     */
    public function getRecordType()
    {
        return $this->RecordType;
    }

    /**
     * Generated from protobuf field <code>int32 RecordType = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRecordType($var)
    {
        GPBUtil::checkInt32($var);
        $this->RecordType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Format = 7;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * Generated from protobuf field <code>string Format = 7;</code>
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
     * Generated from protobuf field <code>int32 ClassificationId = 8;</code>
     * @return int
     */
    public function getClassificationId()
    {
        return $this->ClassificationId;
    }

    /**
     * Generated from protobuf field <code>int32 ClassificationId = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setClassificationId($var)
    {
        GPBUtil::checkInt32($var);
        $this->ClassificationId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TemplateId = 9;</code>
     * @return string
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }

    /**
     * Generated from protobuf field <code>string TemplateId = 9;</code>
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
     * Generated from protobuf field <code>string Vid = 10;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     * Generated from protobuf field <code>string Vid = 10;</code>
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
     * Generated from protobuf field <code>string Fid = 11;</code>
     * @return string
     */
    public function getFid()
    {
        return $this->Fid;
    }

    /**
     * Generated from protobuf field <code>string Fid = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setFid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Fid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Language = 12;</code>
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * Generated from protobuf field <code>string Language = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->Language = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string StoreUri = 13;</code>
     * @return string
     */
    public function getStoreUri()
    {
        return $this->StoreUri;
    }

    /**
     * Generated from protobuf field <code>string StoreUri = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setStoreUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->StoreUri = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Source = 14;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->Source;
    }

    /**
     * Generated from protobuf field <code>string Source = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->Source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Tag = 15;</code>
     * @return string
     */
    public function getTag()
    {
        return $this->Tag;
    }

    /**
     * Generated from protobuf field <code>string Tag = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->Tag = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool AutoPublish = 16;</code>
     * @return bool
     */
    public function getAutoPublish()
    {
        return $this->AutoPublish;
    }

    /**
     * Generated from protobuf field <code>bool AutoPublish = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoPublish($var)
    {
        GPBUtil::checkBool($var);
        $this->AutoPublish = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ActionType = 17;</code>
     * @return string
     */
    public function getActionType()
    {
        return $this->ActionType;
    }

    /**
     * Generated from protobuf field <code>string ActionType = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setActionType($var)
    {
        GPBUtil::checkString($var, True);
        $this->ActionType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsHlsIndexOnly = 18;</code>
     * @return bool
     */
    public function getIsHlsIndexOnly()
    {
        return $this->IsHlsIndexOnly;
    }

    /**
     * Generated from protobuf field <code>bool IsHlsIndexOnly = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsHlsIndexOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->IsHlsIndexOnly = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string HlsMediaSize = 19;</code>
     * @return string
     */
    public function getHlsMediaSize()
    {
        return $this->HlsMediaSize;
    }

    /**
     * Generated from protobuf field <code>string HlsMediaSize = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setHlsMediaSize($var)
    {
        GPBUtil::checkString($var, True);
        $this->HlsMediaSize = $var;

        return $this;
    }

}

