<?php

$otp = $_POST["otp"];
session_start();
$token = $_SESSION['token'];

$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://otp.thaibulksms.com/v2/otp/verify',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => array('key' => '1718114713171197','secret' => '37d62504e6902e2d4739493921a02d6c','token' => $token,'pin' => $otp),
));

if($response = curl_exec($curl)){
    header("Location: main.php");
}
curl_close($curl);



?>