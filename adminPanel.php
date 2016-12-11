<?php
$mysqli = NEW MySQLi('us-cdbr-azure-southcentral-f.cloudapp.net', 'b20897870d42e6', 'f2fdd194', 'cs6app_db');
echo $output= null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My form</title>
    <link rel="stylesheet" type="text/css" href="adminPanelStyle.css">
</head>
<body>
<h1>User List</h1>
<p>The following users are registered on the site:</p>
<ul>
    <form method="post">
        <label class="username"><b>Enter the name of the user that you want to delete:</b></label>
        <input  type="text" placeholder="username:" name="name" required>

        <input class="deletebtn" type="submit" value="Delete User">

    </form>

    <table>
        <tr>
            <th>User Name</th>
            <th>User Access Level</th>
            <th>User Phone Number</th>
            <th>User Email</th>
        </tr>
    <?php




        $UpdateQuery = $mysqli->query("UPDATE users SET email='$_POST[UserEmail]',tel_number='$_POST[UserPhone]',type_of_user='$_POST[UserType]' WHERE userID='$_POST[hidden]'");


        $sql_query = "SELECT * FROM users";
        $sql_query1 = "SELECT * FROM type_of_users";
        $out = $mysqli->query($sql_query1);
        $result = $mysqli->query($sql_query);
        while ($row = $result->fetch_array() && $res = $out->fetch_array()) {
            echo "<form action='adminPanel.php' method='post'>";
            echo "<tr>";
            echo "<td>" . $row['username'] . " </td>";
            echo "<td>" . "<input type='text' name='UserType' value=" . $row['type_of_user'] . " </td>";
            echo "<td>" . "<input type='text' name='UserPhone' value=" . $row['tel_number'] . " </td>";
            echo "<td>" . "<input type='text' name='UserEmail' value=" . $row['email'] . " </td>";
            echo "<td>" . "<input type='text' name='UserAccess' value=" . $row['access_level'] . " </td>";
            echo "<input type='hidden' name='hidden' value=" . $row['userID'] . " ";
            echo "<td>" . "<input type='submit' name='update' value='update'>" . " </td>";
            echo "</tr>";
            echo "</form>";

        }



    ?>

    </table>
    <?php

    ?>
</ul>

</body>
</html>