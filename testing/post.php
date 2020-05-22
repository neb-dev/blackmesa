<?php
$data = array(
    "usr" => "admin",
    "pwd" => "12345"
);

$url = "http://testing-ground.scraping.pro/login";
$actionURL = "http://testing-ground.scraping.pro/login?mode=login";

$ch = curl_init();

// URL where POST request is being sent
curl_setopt($ch, CURLOPT_URL, $actionURL);

// set cURL POST request to true
curl_setopt($ch, CURLOPT_POST, true);

// sends username and password
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

// stores cookie authentication data
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');

// returns the output
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// refers cURL to the form URL
curl_setopt($ch, CURLOPT_REFERER, $url);

// allows redirects
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

echo curl_exec($ch);

// error checking
if(curl_errno($ch)){
    throw new Exception(curl_error($ch));
}

curl_close($ch);
?>
