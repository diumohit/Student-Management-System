<?php

require_once "connect.php";
?>

<?php


if ((isset($_REQUEST['st_name'])) && (isset($_REQUEST['st_age'])) && (isset($_REQUEST['email'])) && (isset($_REQUEST['st_password']))){

    $name = $_REQUEST['st_name'];
    $age = $_REQUEST['st_age'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['st_password'];
    

    ////// if varible name is incorrent there will show no error but system won't works 

    if ((empty($name)) || (empty($age)) || (empty($email)) || (empty($pass))){   
        echo "<h1 style='color:red';>Fields can not be empty</h1>";
    
    }
    else{
        
    $insertquery = "INSERT INTO tbl_student (st_name,st_age,email,st_password) values ('$name','$age','$email','$pass')"; /// inverted comma is must

    $runquery = mysqli_query($connect,$insertquery);

    if ($runquery == true) {
        header("location:dataview.php?inserted");
    }
    else {
        echo "data insertion failed";
    }

    }

}

         
?>