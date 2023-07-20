<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodGetWorkflowExecutionStatusRequest</code>
 */
class VodGetWorkflowExecutionStatusRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 工作流执行Id
     *
     * Generated from protobuf field <code>string RunId = 1;</code>
     */
    protected $RunId = '';
    /**
     * 是否需要子任务详情: true/false
     *
     * Generated from protobuf field <code>string NeedTasksDetail = 2;</code>
     */
    protected $NeedTasksDetail = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $RunId
     *           工作流执行Id
     *     @type string $NeedTasksDetail
     *           是否需要子任务详情: true/false
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 工作流执行Id
     *
     * Generated from protobuf field <code>string RunId = 1;</code>
     * @return string
     */
    public function getRunId()
    {
        return $this->RunId;
    }

    /**
     * 工作流执行Id
     *
     * Generated from protobuf field <code>string RunId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRunId($var)
    {
        GPBUtil::checkString($var, True);
        $this->RunId = $var;

        return $this;
    }

    /**
     * 是否需要子任务详情: true/false
     *
     * Generated from protobuf field <code>string NeedTasksDetail = 2;</code>
     * @return string
     */
    public function getNeedTasksDetail()
    {
        return $this->NeedTasksDetail;
    }

    /**
     * 是否需要子任务详情: true/false
     *
     * Generated from protobuf field <code>string NeedTasksDetail = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNeedTasksDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->NeedTasksDetail = $var;

        return $this;
    }

}

