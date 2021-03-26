<?php



require "vendor/autoload.php";

$access_token = '836kFrmVWL5WLpYr7FRYi7UkYTAtb2KakMiZSgte+vuMEMUU81al9vk628t4ujIl5nSUsn90IGC3j3b+99tR6BHCCgVwL1OzaG9j7AuxhoLvUNoI0qA4DB2MW8XivdE0DrQ2auirvN57eJxt2HCzaQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '697d12a044303205c31aa1f7ffe7626f';

$pushID_Peem = 'Ucfd55683f305fa476b0f5538702b8781';
$pushID_A = 'Ufdb43785e72aad22bda0d02d79216f6a';
$pushID_Mew = 'U9883e9e8a2bf32489428a85bf8914800';
$pushID_Mint = 'Ue70a03dd0f86045b5549e2c98ae4472f';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Welcome to Basic Clinical Line official account.');
$response_Peem = $bot->pushMessage($pushID_Peem, $textMessageBuilder);
$response_A = $bot->pushMessage($pushID_A, $textMessageBuilder);
$response_Mew = $bot->pushMessage($pushID_Mew, $textMessageBuilder);
$response_Mint = $bot->pushMessage($pushID_Mint, $textMessageBuilder);

echo $response_Peem->getHTTPStatus() . ' ' . $response_Peem->getRawBody();
echo <br/>;
echo $response_A->getHTTPStatus() . ' ' . $response_A->getRawBody();
echo <br/>;
echo $response_Mew->getHTTPStatus() . ' ' . $response_Mew->getRawBody();
echo <br/>;
echo $response_Mint->getHTTPStatus() . ' ' . $response_Mint->getRawBody();







