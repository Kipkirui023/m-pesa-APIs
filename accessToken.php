<?php

//MPESA API KEYS
$consumerKey ="extK6REGTHZFIqyOtWuiPJ4ofNz3UWyIHAASXwSoOvFMyJH4";
$consumerSecret = "wnoqMCMPdUeXGfmwZM8BUtnCJ67jJLrQhyUtqPvJGxf1Reh9wGOuIufyYgC2KcRk";

//ACCESS TOKEN URL
$access_token_url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";
$header = ['content-Type:application/json; charset=utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ":" . $consumerSecret);
$result = curl_exec($curl);
$status = curl_getinfo( $curl, CURLINFO_HTTP_CODE);
$result = json_decode($result);
$access_token = $result->access_token;
curl_close($curl);