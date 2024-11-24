<pre>
<?php
session_start();
//setcookie("testcookie","testvalue",time()+(86400*30),"/");
include 'libs/load.php';

print_r("_SESSION\n");
print_r($_SESSION);

if(isset($_GET['clear'])){
    print("Clearing session......\n");
    session_unset();
}

if(isset($_GET['destroy'])){
    print("Destroying....\n");
    session_destroy();
}


if(isset($_SESSION['a'])){
    print("A already exists......Value: $_SESSION[a]\n");
}else{
    $_SESSION['a'] = time();
    print("Assigning new value.... Value:b$_SESSION[a]\n");
}

?>
</pre>
