<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodGetFileListRequest</code>
 */
class VodGetFileListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *空间名
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     *前缀，默认为/（即全量list）
     *
     * Generated from protobuf field <code>string Prefix = 2;</code>
     */
    protected $Prefix = '';
    /**
     *展示上限（不得超过1000，默认100）
     *
     * Generated from protobuf field <code>string Limit = 3;</code>
     */
    protected $Limit = '';
    /**
     *列举对象的起始位置
     *
     * Generated from protobuf field <code>string Starter = 4;</code>
     */
    protected $Starter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *          空间名
     *     @type string $Prefix
     *          前缀，默认为/（即全量list）
     *     @type string $Limit
     *          展示上限（不得超过1000，默认100）
     *     @type string $Starter
     *          列举对象的起始位置
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
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
     *前缀，默认为/（即全量list）
     *
     * Generated from protobuf field <code>string Prefix = 2;</code>
     * @return string
     */
    public function getPrefix()
    {
        return $this->Prefix;
    }

    /**
     *前缀，默认为/（即全量list）
     *
     * Generated from protobuf field <code>string Prefix = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->Prefix = $var;

        return $this;
    }

    /**
     *展示上限（不得超过1000，默认100）
     *
     * Generated from protobuf field <code>string Limit = 3;</code>
     * @return string
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     *展示上限（不得超过1000，默认100）
     *
     * Generated from protobuf field <code>string Limit = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkString($var, True);
        $this->Limit = $var;

        return $this;
    }

    /**
     *列举对象的起始位置
     *
     * Generated from protobuf field <code>string Starter = 4;</code>
     * @return string
     */
    public function getStarter()
    {
        return $this->Starter;
    }

    /**
     *列举对象的起始位置
     *
     * Generated from protobuf field <code>string Starter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStarter($var)
    {
        GPBUtil::checkString($var, True);
        $this->Starter = $var;

        return $this;
    }

}

