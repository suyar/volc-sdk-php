<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodGetHlsDecryptionKeyRequest</code>
 */
class VodGetHlsDecryptionKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Drm鉴权Token 
     *
     * Generated from protobuf field <code>string DrmAuthToken = 1;</code>
     */
    protected $DrmAuthToken = '';
    /**
     * 加密hls的访问Key,从m3u8文件中取到 
     *
     * Generated from protobuf field <code>string Ak = 2;</code>
     */
    protected $Ak = '';
    /**
     * Drm鉴权数据源,从m3u8文件中取到 
     *
     * Generated from protobuf field <code>string Source = 3;</code>
     */
    protected $Source = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DrmAuthToken
     *           Drm鉴权Token 
     *     @type string $Ak
     *           加密hls的访问Key,从m3u8文件中取到 
     *     @type string $Source
     *           Drm鉴权数据源,从m3u8文件中取到 
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * Drm鉴权Token 
     *
     * Generated from protobuf field <code>string DrmAuthToken = 1;</code>
     * @return string
     */
    public function getDrmAuthToken()
    {
        return $this->DrmAuthToken;
    }

    /**
     * Drm鉴权Token 
     *
     * Generated from protobuf field <code>string DrmAuthToken = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDrmAuthToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->DrmAuthToken = $var;

        return $this;
    }

    /**
     * 加密hls的访问Key,从m3u8文件中取到 
     *
     * Generated from protobuf field <code>string Ak = 2;</code>
     * @return string
     */
    public function getAk()
    {
        return $this->Ak;
    }

    /**
     * 加密hls的访问Key,从m3u8文件中取到 
     *
     * Generated from protobuf field <code>string Ak = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAk($var)
    {
        GPBUtil::checkString($var, True);
        $this->Ak = $var;

        return $this;
    }

    /**
     * Drm鉴权数据源,从m3u8文件中取到 
     *
     * Generated from protobuf field <code>string Source = 3;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->Source;
    }

    /**
     * Drm鉴权数据源,从m3u8文件中取到 
     *
     * Generated from protobuf field <code>string Source = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->Source = $var;

        return $this;
    }

}

