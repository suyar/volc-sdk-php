<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodUpdateDomainUrlAuthConfigV2Request</code>
 */
class VodUpdateDomainUrlAuthConfigV2Request extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * Generated from protobuf field <code>string DomainType = 2;</code>
     */
    protected $DomainType = '';
    /**
     * Generated from protobuf field <code>string Domain = 3;</code>
     */
    protected $Domain = '';
    /**
     * Generated from protobuf field <code>string MainKey = 4;</code>
     */
    protected $MainKey = '';
    /**
     * Generated from protobuf field <code>string BackupKey = 5;</code>
     */
    protected $BackupKey = '';
    /**
     * Generated from protobuf field <code>string Status = 6;</code>
     */
    protected $Status = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *     @type string $DomainType
     *     @type string $Domain
     *     @type string $MainKey
     *     @type string $BackupKey
     *     @type string $Status
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
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
     * Generated from protobuf field <code>string DomainType = 2;</code>
     * @return string
     */
    public function getDomainType()
    {
        return $this->DomainType;
    }

    /**
     * Generated from protobuf field <code>string DomainType = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDomainType($var)
    {
        GPBUtil::checkString($var, True);
        $this->DomainType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Domain = 3;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * Generated from protobuf field <code>string Domain = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->Domain = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string MainKey = 4;</code>
     * @return string
     */
    public function getMainKey()
    {
        return $this->MainKey;
    }

    /**
     * Generated from protobuf field <code>string MainKey = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMainKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->MainKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string BackupKey = 5;</code>
     * @return string
     */
    public function getBackupKey()
    {
        return $this->BackupKey;
    }

    /**
     * Generated from protobuf field <code>string BackupKey = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBackupKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->BackupKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Status = 6;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Generated from protobuf field <code>string Status = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->Status = $var;

        return $this;
    }

}
