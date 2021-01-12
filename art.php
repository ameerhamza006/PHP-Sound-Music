<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from xvelopers.com/demos/html/record/video-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jan 2021 19:25:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.html" type="image/x-icon">
    <title>Record</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
</head>
FXc7dWWcw5BwM?Z
<body >
<!-- Pre loader
  To disable preloader remove 'has-preloader' from body
 -->
<form method="POST" action="art.php">
    <table class="table">
        <tr>
            <th>Number</th>
            <th>Massage</th>
        </tr>
        <tr>
            <td> <input type="text" name="num">  </td>
            <td><input type="text" name="msg"></td>
        </tr>
        <tr><td> <input type="submit" name="btn"> </td></tr>
    </table>
</form>

<?php

$number = $_POST['num'];
$msg = $_POST['msg'];

print_r($number);
print_r($msg);

send_sms($number ,$msg);

function send_sms($number, $msg){
    
    $username = "923142056597";///Your Username
    $password = "Honeybaba12345+-";///Your Password
    $mobile = "923142056597";///Recepient Mobile Number
    $sender = "SenderID";
    $message = "Test SMS From sendpk.com";
    
    ////sending sms
    
    $post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
    $url = "https://sendpk.com/api/sms.php?username=$username&password=$password";
    $ch = curl_init();
    $timeout = 30; // set to zero for no timeout
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $result = curl_exec($ch); 
    /*Print Responce*/
    echo $result; 
    
}
?>

</body>
</html>



