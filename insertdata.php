<?php

require_once "connect.php";
?>

<?php


if ((isset($_REQUEST['st_name'])) && (isset($_REQUEST['st_age'])) && (isset($_REQUEST['email'])) && (isset($_REQUEST['st_password']))){

    $name = $_REQUEST['st_name'];
    $age = $_REQUEST['st_age'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['st_password'];
    
    //// profile picture upload section

    $propic = $_FILES["profile_picture"]["name"];
    /// image file validaton
    // $avater_name = $propic['name'];
    $tmp_file = $_FILES["profile_picture"]["tmp_name"];
    $randomname_fordb = uniqid(); //// Generating random uniq id with uniqid() php build in funnction
    move_uploaded_file($tmp_file,"upload/$randomname_fordb.jpg");    

    $imageFileType = strtolower(pathinfo($propic,PATHINFO_EXTENSION)); // Just getting file extention with this line


    ////// if varible name is incorrent there will show no error but system won't works 

    if ((empty($name)) || (empty($age)) || (empty($email)) || (empty($pass))){   
        echo "<h1 style='color:red';>Fields can not be empty</h1>";
    }

    elseif ($_FILES["profile_picture"]["size"] > 2000000) {
        echo "Sorry, your file is too large(max limit in 2mb).";
      }

    elseif ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "<h3 style='color:red;font-weight:bold  ' >Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h3>";
    }

    else{
        
    $insertquery = "INSERT INTO tbl_student (st_name,st_age,email,st_password,profile_picture) values ('$name','$age','$email','$pass','$randomname_fordb.jpg')"; /// inverted comma is must

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