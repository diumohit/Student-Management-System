<?php

require_once 'connect.php';

$dbid = $_REQUEST['id'];

$deletequery = "DELETE FROM tbl_student WHERE id = $dbid";

$runquery = mysqli_query($connect,$deletequery);

if ($runquery == true) {
   
   header("location:dataview.php?deleted");

}else {
   echo "check there is a error";
}


?> 