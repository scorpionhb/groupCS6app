<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/10/2016
 * Time: 22:12
 */
?>

<?php
   /* define('DB_SERVER', 'us-cdbr-azure-southcentral-f.cloudapp.net');
    define('DB_USERNAME', 'b20897870d42e6');
    define('DB_PASSWORD', 'f2fdd194');
    define('DB_DATABASE', 'cs6app_db');
*/

    //$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $db = new mysqli(
        "us-cdbr-azure-southcentral-f.cloudapp.net",
        "b20897870d42e6",
        "f2fdd194",
        "cs6app_db"
    );

    if (!$db) {
    die('Connect Error: ' . mysqli_connect_errno());
}

?>
