<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_common.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class VodCommon
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
vod/business/vod_common.protoVolcengine.Vod.Models.Business"�
VodSourceInfo
FileId (	
Md5 (	
FileType (	
Codec (	
Height (
Width (
Format (	
Duration (
Size	 (
StoreUri
 (	

Definition (	
Bitrate (
Fps (

CreateTime (	
Quality (	"k
VodAudioStreamMeta
Codec (	
Duration (

SampleRate (
Bitrate (
Quality (	"�
VodVideoStreamMeta
Codec (	
Height (
Width (
Duration (

Definition (	
Bitrate (
Fps ("�
VodTranscodeInfo
FileId (	
Md5 (	
FileType (	
LogoType (	
Encrypt (
Format (	
Duration (
Size (
StoreUri	 (	K
VideoStreamMeta
 (22.Volcengine.Vod.Models.Business.VodVideoStreamMetaK
AudioStreamMeta (22.Volcengine.Vod.Models.Business.VodAudioStreamMeta

CreateTime (	"S
VodAdaptiveInfo
MainPlayUrl (	
BackupPlayUrl (	
AdaptiveType (	"�
VodPlayInfo
FileId (	
Md5 (	
FileType (	
Format (	
Codec (	

Definition (	
MainPlayUrl (	
BackupPlayUrl (	
Bitrate	 (
Width
 (
Height (
Size (
	CheckInfo (	

IndexRange (	
	InitRange (	
PlayAuth (	

PlayAuthId (	
LogoType (	
Quality (	
BarrageMaskOffset (	
Duration (
KeyFrameAlignment (	=
Volume (2-.Volcengine.Vod.Models.Business.VodVolumeInfo"/
VodVolumeInfo
Loudness (
Peak ("�
VodThumbInfo

CaptureNum (
	StoreUrls (	
	CellWidth (

CellHeight (
ImgXLen (
ImgYLen (
Interval (
Format (	"�
VodSubtitleInfo
Vid (	
FileId (	
Language (	

LanguageId (
Format (	

SubtitleId (	
Title (	
Tag (	
Status	 (	
Source
 (	
StoreUri (	
SubtitleUrl (	

CreateTime (	
Version (	"A
VodCommonConfigInfo
Module (	
Key (	
Value (	"�
VodPlayInfoModelH
Version
 (27.Volcengine.Vod.Models.Business.VodPlayInfoModelVersion
Vid (	
Status (
	PosterUrl (	
Duration (
FileType (	
EnableAdaptive (

TotalCount (E
AdaptiveInfo (2/.Volcengine.Vod.Models.Business.VodAdaptiveInfoA
PlayInfoList	 (2+.Volcengine.Vod.Models.Business.VodPlayInfoC
ThumbInfoList (2,.Volcengine.Vod.Models.Business.VodThumbInfo
BarrageMaskUrl (	I
SubtitleInfoList (2/.Volcengine.Vod.Models.Business.VodSubtitleInfo",
VodPoint
	Timestamp (
Value ("�
VodAllPlayInfoResultT
VodAllPlayInfoModelList (23.Volcengine.Vod.Models.Business.VodAllPlayInfoModel

TotalCount (
NotFoundVids (	"�
VodAllPlayInfoModel
Vid (	
Status (
	PosterUrl (	

TotalCount (
EnableAdaptive (I
VodTranscodePlayInfo (2+.Volcengine.Vod.Models.Business.VodPlayInfoF
VodSourcePlayInfo (2+.Volcengine.Vod.Models.Business.VodPlayInfoH
Version (27.Volcengine.Vod.Models.Business.VodPlayInfoModelVersionC
ThumbInfoList	 (2,.Volcengine.Vod.Models.Business.VodThumbInfo
BarrageMaskUrl
 (	I
SubtitleInfoList (2/.Volcengine.Vod.Models.Business.VodSubtitleInfo*�
VodPlayInfoModelVersion$
 UndefinedVodPlayInfoModelVersion %
!InternalV1VodPlayInfoModelVersion%
!InternalV2VodPlayInfoModelVersion%
!InternalV3VodPlayInfoModelVersion 
ToBV1VodPlayInfoModelVersionB�
)com.volcengine.service.vod.model.businessB	VodCommonPZAgithub.com/volcengine/volc-sdk-golang/service/vod/models/business��� � Volc\\Service\\Vod\\Models\\Business�#Volc\\Service\\Vod\\Models\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

