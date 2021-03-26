<?php



require "vendor/autoload.php";

$access_token = '836kFrmVWL5WLpYr7FRYi7UkYTAtb2KakMiZSgte+vuMEMUU81al9vk628t4ujIl5nSUsn90IGC3j3b+99tR6BHCCgVwL1OzaG9j7AuxhoLvUNoI0qA4DB2MW8XivdE0DrQ2auirvN57eJxt2HCzaQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '697d12a044303205c31aa1f7ffe7626f';

$pushID = 'Ucfd55683f305fa476b0f5538702b8781';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Welcome to Basic Clinical Line official account');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







