<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodSnapshotData</code>
 */
class VodSnapshotData extends \Google\Protobuf\Internal\Message
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
     *单张静图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSnapshot PosterSnapshots = 3;</code>
     */
    private $PosterSnapshots;
    /**
     *普通动图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSnapshot DynpostSnapshots = 4;</code>
     */
    private $DynpostSnapshots;
    /**
     *循环动图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSnapshot AnimatedPosterSnapshots = 5;</code>
     */
    private $AnimatedPosterSnapshots;
    /**
     * Ai动图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSnapshot AiDynpostSnapshots = 6;</code>
     */
    private $AiDynpostSnapshots;
    /**
     *雪碧图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSpriteSnapshot SpriteSnapshots = 7;</code>
     */
    private $SpriteSnapshots;

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
     *     @type \Volc\Service\Vod\Models\Business\VodSnapshot[]|\Google\Protobuf\Internal\RepeatedField $PosterSnapshots
     *          单张静图
     *     @type \Volc\Service\Vod\Models\Business\VodSnapshot[]|\Google\Protobuf\Internal\RepeatedField $DynpostSnapshots
     *          普通动图
     *     @type \Volc\Service\Vod\Models\Business\VodSnapshot[]|\Google\Protobuf\Internal\RepeatedField $AnimatedPosterSnapshots
     *          循环动图
     *     @type \Volc\Service\Vod\Models\Business\VodSnapshot[]|\Google\Protobuf\Internal\RepeatedField $AiDynpostSnapshots
     *           Ai动图
     *     @type \Volc\Service\Vod\Models\Business\VodSpriteSnapshot[]|\Google\Protobuf\Internal\RepeatedField $SpriteSnapshots
     *          雪碧图
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
     *单张静图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSnapshot PosterSnapshots = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPosterSnapshots()
    {
        return $this->PosterSnapshots;
    }

    /**
     *单张静图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSnapshot PosterSnapshots = 3;</code>
     * @param \Volc\Service\Vod\Models\Business\VodSnapshot[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPosterSnapshots($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodSnapshot::class);
        $this->PosterSnapshots = $arr;

        return $this;
    }

    /**
     *普通动图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSnapshot DynpostSnapshots = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDynpostSnapshots()
    {
        return $this->DynpostSnapshots;
    }

    /**
     *普通动图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSnapshot DynpostSnapshots = 4;</code>
     * @param \Volc\Service\Vod\Models\Business\VodSnapshot[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDynpostSnapshots($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodSnapshot::class);
        $this->DynpostSnapshots = $arr;

        return $this;
    }

    /**
     *循环动图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSnapshot AnimatedPosterSnapshots = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnimatedPosterSnapshots()
    {
        return $this->AnimatedPosterSnapshots;
    }

    /**
     *循环动图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSnapshot AnimatedPosterSnapshots = 5;</code>
     * @param \Volc\Service\Vod\Models\Business\VodSnapshot[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnimatedPosterSnapshots($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodSnapshot::class);
        $this->AnimatedPosterSnapshots = $arr;

        return $this;
    }

    /**
     * Ai动图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSnapshot AiDynpostSnapshots = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAiDynpostSnapshots()
    {
        return $this->AiDynpostSnapshots;
    }

    /**
     * Ai动图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSnapshot AiDynpostSnapshots = 6;</code>
     * @param \Volc\Service\Vod\Models\Business\VodSnapshot[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAiDynpostSnapshots($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodSnapshot::class);
        $this->AiDynpostSnapshots = $arr;

        return $this;
    }

    /**
     *雪碧图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSpriteSnapshot SpriteSnapshots = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpriteSnapshots()
    {
        return $this->SpriteSnapshots;
    }

    /**
     *雪碧图
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodSpriteSnapshot SpriteSnapshots = 7;</code>
     * @param \Volc\Service\Vod\Models\Business\VodSpriteSnapshot[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpriteSnapshots($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodSpriteSnapshot::class);
        $this->SpriteSnapshots = $arr;

        return $this;
    }

}

