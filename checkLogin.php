<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 12.12.2016 г.
 * Time: 18:27
*/
//Includes the Database connection script
include ("dbConnect.php");
//GETS THE USERNAME AND PASSWORD FROM PREVIOUS PAGE
$username = $_POST["username"];
$password = $_POST["password"];
//MYSQL INJECTION PROTECTION
//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);
//FIND THE USER IN THE DATABASE
$sql = "SELECT * FROM users WHERE username='" . $username . "' and password='" . md5($password) . "'";
//RUN THE QUERY
$result = $db->query($sql);
$loginSuccessful = 0;
while($row = $result->fetch_array()) {
    $loginSuccessful = 1;
}
// If result matched $username and $password, table row must be 1 row
if($loginSuccessful==1){
// Register $myusername, $mypassword and redirect to file "index.php"
    session_start();
    $_SESSION['username'] = $username;
    header("location:https://www.facebook.com/login.php?next=https%3A%2F%2Fwww.facebook.com%2F");
}
else {
    echo "Wrong Username or Password";
}
?>