<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Delete Record From Database</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table width="250" border="1" cellpadding="1" cellspacing="1">
            <tr>
                <th>Name</th>
                <th>Father Name</th>
                <th>Delete</th>
            </tr>
            <?php
            include_once ('./config.php');
            //Select Query
            $data = "SELECT * FROM userinfo";
            //Execute Query
            $records = mysqli_query($con, $data);
            while ($row = mysqli_fetch_array($records)) {
                echo "<tr>";
                echo "<td>" . $row['uName'] . "</td>";
                echo "<td>" . $row['fName'] . "</td>";
                echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>

