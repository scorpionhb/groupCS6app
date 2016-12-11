<?php
$mysqli = NEW MySQLi('us-cdbr-azure-southcentral-f.cloudapp.net', 'b20897870d42e6', 'f2fdd194', 'cs6app_db');

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
    $username = $mysqli->real_escape_string($_POST['UserName']);
    $usertype = $mysqli->real_escape_string($_POST['UserType']);
    $userphone = $mysqli->real_escape_string($_POST['UserPhone']);
    $useremail = $mysqli->real_escape_string($_POST['UserEmail']);
    $hiddenFielden = $mysqli->real_escape_string($_POST['hidden']);
    if(isset($_POST['submit'])){

        $UpdateQuery = "UPDATE users SET username='$username', type_of_user ='$usertype', email='$useremail', tel_number='$userphone' WHERE username='$hiddenFielden'  ";

    };

    $sql_query = "SELECT * FROM users";
    $result = $mysqli->query($sql_query);
    while ($row = $result->fetch_array()) {
        echo"<form action='adminPanel.php' method='post'>";
        echo"<tr>";
        echo"<td>" . "<input type='text' name='UserName' value=" . $row['username'] . " </td>";
        echo"<td>" . "<input type='text' name='UserType' value=" . $row['type_of_user'] . " </td>";
        echo"<td>" . "<input type='text' name='UserPhone' value=" . $row['tel_number'] . " </td>";
        echo"<td>" . "<input type='text' name='UserEmail' value=" . $row['email'] . " </td>";
        echo"<td>" . "<input type='hidden' name='hidden' value=" . $row['username'] . " </td>";
        echo"<td>" . "<input type='submit' name='update' value='update'>" . " </td>";
        echo"</tr>";
        echo"</form>";
    /*
        <tr>
            <td><?php echo $row[username]; ?></td>
            <td><?php echo $row[type_of_user]; ?></td>
            <td><?php echo $row[tel_number]; ?></td>
            <td><?php echo $row[email]; ?></td>
        </tr>
*/

    }
    ?>

    </table>
</ul>

</body>
</html>