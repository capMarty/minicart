<?php 
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$msg = $_POST['msg']; 

$subject = "=?utf-8?B?".base64_encode("тестовое сообщение")."?=";
$headers = "From:$email\r\nReply-to: $email\r\nContent-type: text/plain;charset=utf-8\r\n";

$success = mail("shukovsergey1995@gmail.com", $subject, $msg, $headers);
echo "$success";
?>