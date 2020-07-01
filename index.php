<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .indexpagebody {

            background-image: url("images/20140224-160406.jpg");

            background-color: skyblue;
            /* Used if the image is unavailable */
            height: 500px;
            /* You must set a specified height */
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
            /* Resize the background image to cover the entire container */

        }


        .table1 {

            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: bold;
            font-size: 20px;
            color: green;
            padding: 10px;
            margin: 20px 25px 25px 20px;
            border: 1px solid blueviolet;
            background-color: #D5CDC2;

        }

        a {

            text-decoration: none;
            color: black;

        }

        text-decoration: none;

        }

        .sub1 {

            padding: 5px;
            width: 200px;

        }

        .table2 {

            margin-left: 25px;
            padding: 2px;

        }

        a:hover {

            background-color: #FED8BB;
            font-size: 25px;
            font-weight: bolder;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-decoration: none;
            color: blue;

        }

        .sub1:hover {

            background-color: white;


        }
    </style>

</head>

<body class="indexpagebody">


    <?php
require_once "connect.php";

?>
    <form action="insertdata.php" method="POST">

        <table border="1px" class="table1">
            <tr>
                <td>Name:</td>
                <td><input type="text" name="st_name" placeholder="Enter your name here"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name="st_age" placeholder="Enter your age here"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="email" name="email" placeholder="Entar your email address"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="st_password" placeholder="Set a password"></td>
            </tr>

            <tr>
                <td>Profile image:</td>
                <td class="sub1" colspan="2"><input type="file"></td>
            </tr>
            <tr>

                <td class="sub1" colspan="2"><input type="submit" name="form1" value="Save data"></td>
            </tr>
        </table>

    </form>
    <br>

    <table border="2px" class="table2">
        <tr>
            <td><a href="dataview.php">Go to view page</a></td>
        </tr>
    </table>




</body>

</html>