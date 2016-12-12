<?php


$output = null;

if (isset($_POST['submit'])) {
    //Connect to db
    $mysqli = NEW MySQLi('us-cdbr-azure-southcentral-f.cloudapp.net', 'b20897870d42e6', 'f2fdd194', 'cs6app_db');

    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $rpassword = $mysqli->real_escape_string($_POST['rpassword']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $telNumber = $mysqli->real_escape_string($_POST['tel']);
    $typeOfUser = $mysqli->real_escape_string($_POST['userChooser']);


    $query = $mysqli->query("SELECT * FROM users WHERE username = '$username'");
    if (empty($username) OR empty($password) OR empty($email) OR empty($rpassword) OR empty($telNumber) OR empty($typeOfUser)) {
        $output = "Please fill in all fields.";
    } elseif ($query->num_rows != 0) {
        $output = "That User Name is already taken!";
    } elseif ($rpassword != $password) {
        $output = "Your passwords does not match!";
    }elseif (strlen($password) < 8){
         $output = "Your password is too short!";
    }else {
        //Encrypt the password
        $password = md5($password);
        //Insert the record
        $insert = $mysqli->query("INSERT INTO users(username,password,email,tel_number,type_of_user) VALUES ('$username','$password','$email','$telNumber','$typeOfUser')");
        $insert2 = $mysqli->query("INSERT INTO type_of_user(username) VALUES ('$username')");
        if ($insert2 != true) {
            $output = "There was a problem <br/>";
            $output .= $mysqli->error;
        } else {
            $output = "You have been registered!";
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

    <script src="homeJS.js"></script>
    <script type="text/javascript" src="registerJS.js"></script>
    <link rel="stylesheet" type="text/css" href="testRegisterForm.css">

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/alertifyjs/1.8.0/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/alertify.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/bootstrap.min.css"/>


</head>
<body>

<?php
    session_start();
?>

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
                    <li>
                        <!--

                        <form id="signin" class="navbar-form navbar-right" role="form">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="username" type="text" class="form-control" name="username" value="" placeholder="Username">
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
                                </div></form>


                        <li id="loginBut" onclick="logIn()"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a id="regButton" href="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        -->
                        <?php

                        if(isset($_SESSION['username'])){
                            $username = $_SESSION['username'];

                            echo "<form action='logout.php' id='logout' class='navbar-form navbar-right' role='form' >";

                            echo "<div class='input-group' style='display: inline'><p style='display: inline; color:white'>Welcome, " . $username . "!</p>";

                            echo "<input style='margin-left: 2%' type='submit' value='Logout' class='btn btn-info'  /></div>";

                            echo "</form>";
                        }
                        ?>


                    </li>
                </ul>


            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">

            <div class="col-sm-3 text-left"></div>

            <div class="col-sm-6 text-center ">
                <h2>New user registration form:</h2>
                <?PHP
                echo $output;
                ?>
                <form method="post" onsubmit="return myFunction()">


                    <label class="UserName"><b>Enter Username:</b></label>
                    <input class="CName" type="text" placeholder="enter username:" name="username" required/>

                    <label class="Password"><b>Enter Password:</b></label>
                    <input class="CPassword" type="password" placeholder="enter password:" name="password" required/>

                    <label class="RepeatPassword"><b>Repeat Password:</b></label>
                    <input class="CPassword" type="password" placeholder="repeat password:" name="rpassword" required/>


                    <label class="EmailClass"><b>Email:</b></label>
                    <input class="CEmail" type="email" placeholder="enter email:" name="email" required/>

                    <label class="TelephoneClass"><b>Phone Number:</b></label>
                    <input class="CPhoneNumber" type="text" placeholder="enter phone:" name="tel"/>

                    <label class="chooseUser"><b>Type of user:</b></label>

                    <select class="dropDownForm" name="userChooser">
                        <option value="User">User:</option>
                        <option value="Contributor">Contributor</option>
                        <option value="NKPAG">NKPAG</option>
                        <option value="Club Administrator">Club Administrator</option>
                        <option value="Site Administrator">Site Administrator</option>
                    </select>


                    <input class="registerbtn" type="submit" name="submit" value="Register"/>
                    <button class="cancelbtn" type="button" class="cancelbtn">Cancel</button>
                </form>




            </div>


        </div>

    </div>

    </div>

    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>
</body>
</html>


