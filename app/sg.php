<pre><?php
session_start();
setcookie("testcookie","testvalue",time()+(86400*30),"/");
include 'libs/load.php';

print_r("SESSION\n");
print_r($_SESSION);


if($a){
    print("A already exists......Value: $a\n");
}else{
    $a = time();
    print("Assigning new value.... Value: $a\n");
}

?>
</pre>
