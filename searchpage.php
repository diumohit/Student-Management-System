<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

.table1 {

width: 80%;
text-align: center;
margin-top: 20px;
margin-left:100px;
}

.h11{

border: 2px double   black;
width: max-content;
padding: 5px;
border-radius: 30px;
margin-left: 550px;


}

 h4 a{

    text-decoration: none;
    color: black;
    border: 2px solid black;
    padding: 5px;
}


a:hover{

background-color: #FED4BB;
font-size: 13px;
font-weight: bolder;
font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
text-decoration: none;
color: blue;


}

.search_section{

background-color: whitesmoke;
border: 2px solid green;
border-radius: 5px;
padding: 15px;
width: 45%;
margin-left:300px;

}

.search_button{

background-color: green;
border-radius: 5px;
padding: 10px;
color: whitesmoke;
}

.search_button:hover{

background-color: lightgreen;
color: black;
padding: 10px;
cursor: pointer;
font-size: 13px;
}


.search_input_section{

width:500px;
margin: 0 auto;
padding: 10px;

}



</style>

</head>
<body>
    
<!-- this is search section -->
<form action="" method="POST">

    <div class="search_section">
        <input type="text" class="search_input_section" placeholder="search here" name="search_value">
        <input type="submit" value="Search" name ="searchbtm" class="search_button">
    </div>
</form>
<!-- search seciton end -->


<?php

require_once "connect.php";
?>



<?php

if(isset($_REQUEST['inserted'])) {

 echo "Data Inserted";

}

?>


<?php

if(isset($_REQUEST['updated'])) {

 echo "Data updated";

}

?>



<?php

if(isset($_REQUEST['deleted'])) {

 echo "Data deleted";

}

?>

<?php
if (isset($_REQUEST["search_value"])) {
    $search = $_REQUEST["search_value"];
    ?>

<table border="2px" class="table1">
    <tr>
        <td>Serial No:</td>
        <td>Db Id:</td>
        <td>Student Name:</td>
        <td>Student Age:</td>
        <td>Student E-mail:</td>
        <td>Password:</td>
        <td>Profile Picture:</td>
        <td>Action</td>

    </tr>
    <?php

$viewquery = "SELECT * FROM tbl_student where st_name like '%$search%'";
$runviewquery = mysqli_query($connect,$viewquery);
$count=1;
while ($raw = mysqli_fetch_array($runviewquery)) {
    ?>
    
    <tr>
        <td><?php echo $count;$count++ ?></td>
        <td><?php echo $raw['id']; ?></td>
        <td><?php echo $raw['st_name']; ?></td>
        <td><?php echo $raw['st_age']; ?></td>
        <td><?php echo $raw['email']; ?></td>
        <td><?php echo $raw['st_password']; ?></td>
        <td><center><img width="60px" src="upload/<?php echo$raw['profile_picture']?>"></center></td>
        <td><a href="editdata.php?id=<?php echo $raw['id']; ?>">Edit</a> | <a onclick="return confirm ('Are you sure?')" href="delete.php?id=<?php echo $raw['id']; ?>" >Delete</a></td>
        
    </tr>


<?php } ?>
   
</table>






<?php }?>





    <h4 class="h11"><a href="index.php">Go to index page</a></h4>

    


</body>
</html>