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
    $telNumber =    $mysqli->real_escape_string ($_POST['tel']);
    $typeOfUser = $mysqli->real_escape_string ($_POST['userChooser']);


    $query = $mysqli->query("SELECT * FROM users WHERE username = '$username'");
    if($query->num_rows != 0){
        $output = "That User Name already taken ";

    }else{
        //Encrypt the password
        $password = md5($password);
        //Insert the record
        $insert = $mysqli->query("INSERT INTO users(username,password,email,tel_number,type_of_user) VALUES ('$username','$password','$email','$telNumber','$typeOfUser')");
        if($insert != true){
            $output = "There was a problem <br/>";
            $output .= $mysqli->error;
        }else{
            $output = "You have been registered!";
            echo "<script type=\"text/javascript\">  alertify.success(\"Timer resseted for 10 minutes\"); </script> ";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="clubPageStyle.css">
    <script src="homeJS.js"></script>
    <script type="text/javascript" src="registerJS.js"></script>

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/alertifyjs/1.8.0/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/alertify.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/bootstrap.min.css"/>


</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-fixed-top navbar-absolute navbar-transparent big">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="navbar-brand" src="https://github.com/scorpionhb/groupCS6app/blob/testBranch/LOGO1.png?raw=true"/>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://cs6testapp.azurewebsites.net/index.php">Clubs and Societies</a></li>
                    <li><a href="http://cs6testapp.azurewebsites.net/healthNWell.php">Health and Well-being</a></li>
                    <li><a href="http://cs6testapp.azurewebsites.net/mapPage.php">Map</a></li>
                </ul>


                <ul class="nav navbar-nav navbar-center">
                    <li>
                        <form id="search" class="navbar-form navbar-right" role="form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>


                <ul id="loginFields" class="nav navbar-nav navbar-right">
                    <li ><form id="signin" class="navbar-form navbar-right" role="form">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="username" type="text" class="form-control" name="username" value="" placeholder="Username">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
                            </div></form>
                    </li>

                    <li id="loginBut" onclick="logIn()"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li onclick="logginTimeout()"><a id="regButton" href="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                </ul>


            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">

            <div class="col-sm-3 text-left aaa"></div>

                <div class="col-sm-6 text-center aaa">

                    <form method="post" onsubmit="return myFunction()">
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
                            <tr>
                                <td>Telephone:</td>
                                <td><input type="text" name="tel"/></td>
                            </tr>

                            <select class="dropDownForm" name="userChooser">
                                <option value= 1>Choose:</option>
                                <option value= 2>Saab</option>
                                <option value= 3>Fiat</option>
                                <option value= 4>Audi</option>
                            </select>

                        </table>

                        <input type="submit" name="submit" value="Register"/>
                    </form>

                    <?PHP
                    echo $output;
                    ?>/

                </div>
            <div class="col-sm-3 aaa"></div>
        </div>
    </div>



