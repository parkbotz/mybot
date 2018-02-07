<?php
$access_token = '8Ks7EOqm03Vhc9T6dEIS0KNdOw41l3r5OsKWYB0SjBqDpKtp1XYcz31p2nMhBpaBL2IOTzMXcYUUu/d8CzENQhhxQ7Q6ld0hiG6+4jP2IKL+OwGqBhcGsfspcMTiJW0n8RTKv97FwNl1Q15OC11GiQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>