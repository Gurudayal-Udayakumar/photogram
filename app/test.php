


<pre><?


include 'libs/load.php';
//print("SERVER\n");
//print_r($_SERVER);
//print("GET\n");
//print_r($_GET);
//print("POST\n");
//print_r($_POST);
//print_r("COOKIE\n");
//print_r($_COOKIE);
//print_r("FILE\n");
//print_r($_FILES);
if(signup("gurudayal" , "password" , "guru@gmail.com" , "9")){
    echo "Success";
}
else{
    echo "Fail";
}
?>
</pre>
