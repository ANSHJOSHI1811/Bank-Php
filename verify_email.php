<?php
$rnumber=rand(10000,99999);
$to_email = $_GET["email"];
$subject = "Verification code";
$body = "Your verification code is: ".$rnumber;
$headers = "From: amitashaileshjoshi@gmail.com";
$json = [];
$json["code"] = $rnumber;
if (mail($to_email, $subject, $body, $headers))
{
    echo json_encode($json);
}
else
{
    $json["code"] = "Email sending failed!";
    echo json_encode($json);
}