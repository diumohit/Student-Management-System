<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbnamme = "phpproject1";


$connect= mysqli_connect($dbhost,$dbuser,$dbpass,$dbnamme);

if ($connect == true) {
   echo "<h3 style='color:#D5CDC2'>Database connected</h3>";
}
else {
    echo "Sorry, there is a error in database , please check";
}
?>



