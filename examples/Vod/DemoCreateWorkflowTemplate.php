// Code generated by protoc-gen-volcengine-sdk
// source: createWorkflowTemplate
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\VodCreateWorkflowTemplateRequest();
$request->setSpaceName("your SpaceName");
$request->setName("your Name");
$request->setDescription("your Description");
$request->setActivities([new Volc\Service\Vod\Models\Business\Activities()]);


$response = new Volc\Service\Vod\Models\Response\VodCreateWorkflowTemplateResponse();
try {
    $response = $client->createWorkflowTemplate($request);
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
