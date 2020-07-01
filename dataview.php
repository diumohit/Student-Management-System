<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

.h11{

border: 2px double   black;
width: max-content;
padding: 5px;
border-radius: 30px;
}

 h4 a{

    text-decoration: none;
    color: black;
    border: 2px solid black;
    padding: 5px;
}


a:hover{

background-color: #FED4BB;
font-size: 20px;
font-weight: bolder;
font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
text-decoration: none;
color: blue;


}


</style>

</head>
<body>
    
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

$viewquery = "SELECT * FROM tbl_student ";
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
        <td><a href="editdata.php?id=<?php echo $raw['id']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $raw['id']; ?>" >Delete</a></td>
        
    </tr>


<?php } ?>
   
</table>


    <h4 class="h11"><a href="index.php">Go to index page</a></h4>

    


</body>
</html>