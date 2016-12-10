<?php


$output = null;

if (isset($_POST['submit'])) {
    //Connect to db
    $mysqli = NEW MySQLi('us-cdbr-azure-southcentral-f.cloudapp.net', 'b20897870d42e6', 'f2fdd194', 'cs6app_db');

    $clubname = $mysqli->real_escape_string($_POST['clubname']);
    $clubgenre = $mysqli->real_escape_string($_POST['clubgenre']);
    $clubdescription = $mysqli->real_escape_string($_POST['description']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $phoneNumber = $mysqli->real_escape_string($_POST['phoneNumber']);


    $query = $mysqli->query("SELECT * FROM clubs WHERE clubName = '$clubname'");
    if (empty($clubname) OR empty($clubgenre) OR empty($email) OR empty($clubdescription) OR empty($phoneNumber)) {
        $output = "Please fill in all fields.";
    } elseif ($query->num_rows != 0) {
        $output = "That Club Name already taken!";
    } else {
        //Insert the record
        $insert = $mysqli->query("INSERT INTO clubs(clubName,clubGenre,description,email,tel_numer) VALUES ('$clubname','$clubgenre','$clubdescription','$email','$phoneNumber')");

        if ($insert != true) {
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
<div id="wrapper">
    <nav class="navbar navbar-fixed-top navbar-absolute navbar-transparent big">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="navbar-brand"
                     src="https://github.com/scorpionhb/groupCS6app/blob/testBranch/LOGO1.png?raw=true"/>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://cs6testapp.azurewebsites.net/index.php">Clubs and Societies</a>
                    </li>
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
                        <form id="signin" class="navbar-form navbar-right" role="form">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="username" type="text" class="form-control" name="username" value=""
                                       placeholder="Username">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" value=""
                                       placeholder="Password">
                            </div>
                        </form>
                    </li>

                    <li id="loginBut" onclick="logIn()"><a href="#"><span class="glyphicon glyphicon-log-in"></span>
                            Login</a></li>
                    <li onclick="logginTimeout()"><a id="regButton" href="#"><span
                                class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                </ul>


            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">

            <div class="col-sm-3 text-left"></div>

            <div class="col-sm-6 text-center ">
                <h2>New club registration form:</h2>

                <form method="post">
                    <div class="container">

                        <label class="UserName"><b>Enter Club Name:</b></label>
                        <input class="ClubName" type="text" placeholder="enter club name:" name="clubname" required/>

                        <label class="Password"><b>Enter Club Genre:</b></label>
                        <input class="ClubGenre" type="text" placeholder="enter club genre:" name="clubgenre" required/>

                        <label class="Password"><b>Club Description:</b></label>
                        <textarea class="ClubDescription" name="description">Some text...</textarea>

                        <label class="Password"><b>Phone Number:</b></label>
                        <input class="CPhoneNumber" type="tel" placeholder="enter phone number:" name="phoneNumber"
                               required/>

                        <label class="Password"><b>Club Email:</b></label>
                        <input class="CEmail" type="email" placeholder="enter email:" name="email" required/>
                    </div>

                    <input class="registerbtn" type="submit" name="submit" value="Register"/>
                </form>


                <?PHP
                echo $output;
                ?>


            </div>
        </div>
    </div>


</body>
</html>