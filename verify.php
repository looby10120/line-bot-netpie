<?php
$access_token = 'fefU9HSA3alGd18OR0+B5ntb/1CIwaXTaLIwlIlm9D0ql76SZOAVdYCzTsfUx65rAp12Dc3K98Hl0yXsR1BK6C8VfZTVrKprNMfcSaeuwtEkTnY50nAau6A9P0+mqneNZIZV9jr5bkWQPZQmFP63VwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
