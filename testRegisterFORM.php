<?php
/**
 * Created by PhpStorm.
 * User: gerry
 * Date: 7.12.2016 г.
 * Time: 16:55
 */

$output = null;

if(isset($_POST['submit'])){
    //Connect to db
    $mysqli =  NEW MySQLi('us-cdbr-azure-southcentral-f.cloudapp.net','b20897870d42e6','f2fdd194','cs6app_db');

    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string ($_POST['password']);
    $rpassword = $mysqli->real_escape_string($_POST['rpassword']);
    $email =    $mysqli->real_escape_string ($_POST['email']);
    $rpassword = $mysqli->real_escape_string($_POST['']);
    $email =    $mysqli->real_escape_string ($_POST['email']);

    $query = $mysqli->query("SELECT * FROM users WHERE username = '$username'");
    if($query->num_rows != 0){
        $output = "That User Name already taken ";
    }else{
        //Encrypt the password
        $password = md5($password);
        //Insert the record
        $insert = $mysqli->query("INSERT INTO users(username,password,email,tel_number,type_of_user) VALUES ('$username','$password','$email')");
        if($insert != true){
            $output = "There was a problem <br/>";
            $output .= $mysqli->error;
        }else{
            $output = "You have been registered!";
        }
    }

}
?>

<form method="post">
    <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username"/></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password"/></td>
        </tr>
        <tr>
            <td>Repeat Password:</td>
            <td><input type="password" name="rpassword"/></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email"/></td>
        </tr>
    </table>

    <input type="submit" name="submit" value="Register"/>
</form>

<?PHP
echo $output;
?>/