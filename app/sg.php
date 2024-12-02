<pre>
<?php
session_start();
//setcookie("testcookie","testvalue",time()+(86400*30),"/");
include 'libs/load.php';

print_r("_SESSION\n");
print_r($_SESSION);


if(isset($_GET['clear'])){
    printf("Clearing session......\n");
    session_unset();
}

if(isset($_SESSION['a'])){
    printf("A already exists......Value: $_SESSION[a]\n");
}else{
    $_SESSION['a'] = time();
    printf("Assigning new value.... Value:b$_SESSION[a]\n");
}


// if(isset($_GET['destroy'])){
//     printf("destroying....\n");
//     session_destroy();

// }


print_r("_SERVER");
print_r($_SERVER);
?>
</pre>
