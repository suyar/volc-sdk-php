<?php

namespace Volc\Service\Live\V20230101;

/**
 * @method array DeleteTranscodePreset(array $json)
 * @method array UpdateTranscodePreset(array $json)
 * @method array ListCommonTransPresetDetail(array $json)
 * @method array ListVhostTransCodePreset(array $json)
 * @method array CreateTranscodePreset(array $json)
 * @method array DeleteWatermarkPreset(array $json)
 * @method array UpdateWatermarkPreset(array $json)
 * @method array ListWatermarkPreset(array $json)
 * @method array ListVhostWatermarkPreset(array $json)
 * @method array CreateWatermarkPreset(array $json)
 * @method array StopPullRecordTask(array $json)
 * @method array CreatePullRecordTask(array $json)
 * @method array DeleteRecordPreset(array $json)
 * @method array UpdateRecordPresetV2(array $json)
 * @method array DescribeRecordTaskFileHistory(array $json)
 * @method array ListVhostRecordPresetV2(array $json)
 * @method array ListPullRecordTask(array $json)
 * @method array CreateRecordPresetV2(array $json)
 * @method array DeleteSnapshotPreset(array $json)
 * @method array UpdateSnapshotPreset(array $json)
 * @method array DescribeCDNSnapshotHistory(array $json)
 * @method array ListVhostSnapshotPreset(array $json)
 * @method array CreateSnapshotPreset(array $json)
 * @method array DeleteTimeShiftPresetV3(array $json)
 * @method array UpdateTimeShiftPresetV3(array $json)
 * @method array ListTimeShiftPresetV2(array $json)
 * @method array CreateTimeShiftPresetV3(array $json)
 * @method array DeleteCallback(array $json)
 * @method array DescribeCallback(array $json)
 * @method array UpdateCallback(array $json)
 * @method array DescribeAuth(array $json)
 * @method array DeleteCert(array $json)
 * @method array DescribeCertDetailSecretV2(array $json)
 * @method array ListCertV2(array $json)
 * @method array CreateCert(array $json)
 * @method array BindCert(array $json)
 * @method array UnbindCert(array $json)
 * @method array CreateVerifyContent(array $json)
 * @method array VerifyDomainOwner(array $json)
 * @method array DeleteDomain(array $json)
 * @method array EnableDomain(array $json)
 * @method array CreateDomainV2(array $json)
 * @method array UpdateDomainVhost(array $json)
 * @method array DescribeDomain(array $json)
 * @method array ListDomainDetail(array $json)
 * @method array CreateDomain(array $json)
 * @method array DisableDomain(array $json)
 * @method array StopPullToPushTask(array $json)
 * @method array CreatePullToPushTask(array $json)
 * @method array DeletePullToPushTask(array $json)
 * @method array RestartPullToPushTask(array $json)
 * @method array UpdatePullToPushTask(array $json)
 * @method array ListPullToPushTask(array|string $query)
 * @method array DeleteRelaySourceV4(array $json)
 * @method array DeleteRelaySourceV3(array $json)
 * @method array UpdateRelaySourceV4(array $json)
 * @method array ListRelaySourceV4(array $json)
 * @method array DescribeRelaySourceV3(array $json)
 * @method array CreateRelaySourceV4(array $json)
 * @method array UpdateRelaySourceV3(array $json)
 * @method array KillStream(array $json)
 * @method array DescribeClosedStreamInfoByPage(array|string $query)
 * @method array DescribeLiveStreamInfoByPage(array|string $query)
 * @method array DescribeLiveStreamState(array|string $query)
 * @method array DescribeForbiddenStreamInfoByPage(array|string $query)
 * @method array ForbidStream(array $json)
 * @method array ResumeStream(array $json)
 * @method array GeneratePlayURL(array $json)
 * @method array GeneratePushURL(array $json)
 * @method array DeleteStreamQuotaConfig(array $json)
 * @method array DescribeStreamQuotaConfig(array $json)
 * @method array UpdateStreamQuotaConfig(array $json)
 * @method array ListVqosMetricsDimensions(array|string $query)
 * @method array StopPullCDNSnapshotTask(array $json)
 * @method array CreatePullCDNSnapshotTask(array $json)
 * @method array GetPullCDNSnapshotTask(array $json)
 * @method array ListPullCDNSnapshotTask(array $json)
 * @method array GetPullRecordTask(array $json)
 * @method array DeleteSnapshotAuditPreset(array $json)
 * @method array UpdateSnapshotAuditPreset(array $json)
 * @method array DescribeSnapshotAuditPresetDetail(array $json)
 * @method array ListVhostSnapshotAuditPreset(array $json)
 * @method array CreateSnapshotAuditPreset(array $json)
 * @method array DescribeIpInfo(array $json)
 * @method array DescribeLiveRegionData()
 * @method array DescribeLiveSourceStreamMetrics(array $json)
 * @method array DescribeLivePushStreamMetrics(array $json)
 * @method array DescribeLivePlayStatusCodeData(array $json)
 * @method array DescribeLiveBatchSourceStreamMetrics(array $json)
 * @method array DescribeLiveBatchPushStreamMetrics(array $json)
 * @method array DescribeLiveStreamCountData(array $json)
 * @method array DescribeLivePushStreamCountData(array $json)
 * @method array DescribeLiveSourceBandwidthData(array $json)
 * @method array DescribeLiveSourceTrafficData(array $json)
 * @method array DescribeLiveMetricBandwidthData(array $json)
 * @method array DescribeLiveMetricTrafficData(array $json)
 * @method array DescribeLiveBatchStreamTrafficData(array $json)
 * @method array DescribeLiveBatchStreamTranscodeData(array $json)
 * @method array DescribeLiveStreamSessionData(array $json)
 * @method array DescribeLiveISPData()
 * @method array DescribeLiveP95PeakBandwidthData(array $json)
 * @method array DescribeLiveAuditData(array $json)
 * @method array DescribeLivePullToPushBandwidthData(array $json)
 * @method array DescribeLivePullToPushData(array $json)
 * @method array DescribeLiveBandwidthData(array $json)
 * @method array DescribeLiveRecordData(array $json)
 * @method array DescribeLiveSnapshotData(array $json)
 * @method array DescribeLiveTrafficData(array $json)
 * @method array DescribeLiveTranscodeData(array $json)
 * @method array DescribeLiveTimeShiftData(array $json)
 * @method array DescribeLiveCustomizedLogData(array $json)
 * @method array DescribeLiveLogData(array $json)
 * @method array DeleteReferer(array $json)
 * @method array DescribeDenyConfig(array $json)
 * @method array DescribeReferer(array $json)
 * @method array UpdateDenyConfig(array $json)
 * @method array UpdateReferer(array $json)
 * @method array UpdateAuthKey(array $json)
 * @method array DescribeLiveActivityBandwidthData(array $json)
 * @method array DescribeLiveStreamUsageData(array $json)
 */
trait LiveTrait
{
}
