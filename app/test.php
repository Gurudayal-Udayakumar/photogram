


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
// if(signup("gurudayal" , "password" , "guru@gmail.com" , "9")){
//     echo "Success";
// }
// else{
//     echo "Fail";
// }

$mic1 = new Mic("Roda");
$mic2 = new Mic("HyperX");

Mic::testFunction();

$mic1->brand = "jbl";
$mic2->brand = "boat";

$mic1->light = "green";
$mic2->light = "blue";
$mic1->setLight("white");
$mic2->setLight("yellow");

$mic1->setModel("hypercast");
print("Model of 1st mic is ".$mic1->getModel());




?>
</pre>
