<?

$str = <<<STR
this is a very long string that is used as an 
example for knowing the difference between hashing and encoding
STR;

$md5 = md5($str);
$mdlen = strlen($md5);

$b64 = base64_encode($str);
$b64len = strlen($b64);

echo("md5 string is : $md5 \nIts length is : $mdlen\n");
echo("b64 string is : $b64 \nIts length is : $b64len\n");