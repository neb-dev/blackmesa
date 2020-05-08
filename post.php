<?php

$data = array(
    "username" => "neb",
    "password" => "password"
    "form" => "submit"
);

$ch = curl_init("signin.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$res = curl_exec($ch);

curl_close($ch);

echo $res

?>
