<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_edit.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.Track</code>
 */
class Track extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ID = 1;</code>
     */
    protected $ID = '';
    /**
     * Generated from protobuf field <code>string Source = 2;</code>
     */
    protected $Source = '';
    /**
     * Generated from protobuf field <code>repeated int32 TargetTime = 3;</code>
     */
    private $TargetTime;
    /**
     * Generated from protobuf field <code>string Type = 4;</code>
     */
    protected $Type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ID
     *     @type string $Source
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $TargetTime
     *     @type string $Type
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodEdit::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ID = 1;</code>
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Generated from protobuf field <code>string ID = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setID($var)
    {
        GPBUtil::checkString($var, True);
        $this->ID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Source = 2;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->Source;
    }

    /**
     * Generated from protobuf field <code>string Source = 2;</code>
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
     * Generated from protobuf field <code>repeated int32 TargetTime = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetTime()
    {
        return $this->TargetTime;
    }

    /**
     * Generated from protobuf field <code>repeated int32 TargetTime = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetTime($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->TargetTime = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Type = 4;</code>
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Generated from protobuf field <code>string Type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->Type = $var;

        return $this;
    }

}

