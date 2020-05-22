<?php
$data = array(
    "usr" => "admin",
    "pwd" => "12345"
);

$url = "http://testing-ground.scraping.pro/login";
$actionURL = "http://testing-ground.scraping.pro/login?mode=login";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $actionURL);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_REFERER, $url);

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

echo curl_exec($ch);

if(curl_errno($ch)){
    throw new Exception(curl_error($ch));
}

curl_close($ch);
?>
