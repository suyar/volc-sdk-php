<?php
require('../../../vendor/autoload.php');
use Volc\Service\Visual;

$client = Visual::getInstance();
// call below method if you dont set ak and sk in ～/.volc/config

$client->setAccessKey($ak);
$client->setSecretKey($sk);

echo "\nDemo DollyZoom\n";

$body = [
    'image_url' => '',
//    'image_base64' => '',
//    'video_type' => 0,
//    'device_type' => 0,
//    'video_length' => 0.5
];
$response = $client->DollyZoom(['form_params' => $body]);
echo $response;

