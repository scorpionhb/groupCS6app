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
    <?
    $sql_query = "SELECT * FROM users";
    $result = $mysqli->query($sql_query);
    while ($row = $result->fetch_array()) {
        $username = $row['username'];

        echo "<table><tr>{$username}</tr></table>";
    }
    ?>
</ul>

</body>
</html>