<?php
//YOUR MPESA API KEYS
$consumerKey = "3cg9Vp6aoVDA3q06dBdbv2461VGUFY7NSAC2D7Jz4vyVSHVM"; 
$consumerSecret = "5AqoqJZwG4IFy1kUjrVhNAHlniO4uHg31D0532ZCbSnGGVHCQAHPiTDU0JXoYZAW";
//ACCESS TOKEN URL
$access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$headers = ['Content-Type:application/json; charset=utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
echo $result;

//$result = json_decode($result);
//echo $access_token = $result->access_token;

curl_close($curl);
 