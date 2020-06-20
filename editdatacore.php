<?php
require_once "connect.php";

if (isset($_REQUEST['form1'])) {

    $updateid = $_REQUEST['id'];
    $name = $_REQUEST['st_name'];
    $age = $_REQUEST['st_age'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['st_password'];
    

   $updatequery = "UPDATE tbl_student SET st_name='$name' ,st_age='$age', email='$email', st_password='$password' WHERE id = $updateid"; /// there was error in update query

   $runupdatequery=mysqli_query($connect,$updatequery);

   if ($runupdatequery == true) {
       header("location:dataview.php?updated");
    
}else {
    echo "there is an error in update secion please check   ";
}

}


?>