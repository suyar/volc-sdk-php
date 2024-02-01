// Code generated by protoc-gen-volcengine-sdk
// source: describeVodSnapshotData
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\DescribeVodSnapshotDataRequest();
$request->setSpaceList("your SpaceList");
$request->setStartTime("your StartTime");
$request->setEndTime("your EndTime");
$request->setSnapshotType("your SnapshotType");
$request->setTaskStageList("your TaskStageList");
$request->setAggregation(0);
$request->setDetailFieldList("your DetailFieldList");
$request->setRegionList("your RegionList");


$response = new Volc\Service\Vod\Models\Response\DescribeVodSnapshotDataResponse();
try {
    $response = $client->describeVodSnapshotData($request);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response != null && $response->getResponseMetadata() != null && $response->getResponseMetadata()->getError() != null) {
    echo $response->getResponseMetadata()->getError()->serializeToJsonString(), "\n";
} else {
    echo $response->serializeToJsonString(), "\n";
}
