<?php

$api    =   'YFmDdCXlSXHDJiTFdkRJ';           //  Hajana One account API
$number =   923142056597;                           //  Mobile Number
$mask   =   'SmartSMS';                             //  Registered Mask Name
$text   =   'This is Test SMS';                     //  Message Content
$oper   =   3;                                      //  If Number is Ported to telenor

$url = 'https://www.hajanaone.com/api/sendsms.php?apikey='.$api.'&phone='.$number.'$sender='.urlencode($mask).'&message='.urlencode($text).'&operator='.$oper;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,3);
curl_setopt($ch, CURLOPT_HEADER, 0);
$result = curl_exec ($ch);

if (preg_match( "/successfully/", $result )){
    echo 'SMS successfully Sent.';
}else{
    echo 'SMS Sending Failed.';
}

?>