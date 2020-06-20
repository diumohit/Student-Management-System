 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>

 </head>

 <body>

     <?php

    require_once "connect.php";

    ?>

    

    <form action="editdatacore.php" method="post">
    
     <table border="1px" class="table1">
         <tr>
             <td>Id:(Read only)</td>
             <td>Name:</td>
             <td>Age:</td>
             <td>E-mail:</td>
             <td>Password:</td>
             <td>Action</td>
         </tr>
         <tr>
         <?php
         if (isset($_REQUEST['id'])) {
            $editid = $_REQUEST['id'];
            $editquery = "SELECT *FROM tbl_student WHERE id=$editid";
            $runeditquery = mysqli_query($connect,$editquery);

            while ($raw = mysqli_fetch_array($runeditquery)) {
            
        ?>
             <td><input type="text" name="id" value="<?php echo $raw['id']; ?>" readonly></td>
             <td><input type="text" name="st_name" value="<?php echo $raw['st_name']; ?>"></td>
             <td><input type="number" name="st_age" value="<?php echo $raw['st_age']; ?>"></td>
             <td><input type="email" name="email" value="<?php echo $raw['email']; ?>"></td>
             <td><input type="password" name="st_password" value="<?php echo $raw['st_password']; ?>"></td>
             <td><input type="submit" name="form1" value="Save Changes"></td>
            
         
         
            <?php }}?>
         
            </tr>
     </table>
     </form>




 </body>

 </html>