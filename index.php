<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 04/12/2016
 * Time: 14:07
 */
$mysqli = NEW MySQLi('us-cdbr-azure-southcentral-f.cloudapp.net', 'b20897870d42e6', 'f2fdd194', 'cs6app_db');

if ($_SERVER['REQUEST_METHOD'] === 'GET'){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="homeStyle.css">
    <script src="homeJS.js"></script>

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/alertifyjs/1.8.0/alertify.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/alertify.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/bootstrap.min.css"/>
</head>
<body>





<?php


//-------------------------------------LOGIN REQUEST

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    include("dbConnect.php");

    $username = $_POST["username"];
    $password = $_POST["password"];


    function checkLogin($username, $password, $db)
    {
        $sql = "SELECT * FROM users WHERE username='" . $username . "' and password='" . md5($password) . "'";
        $result = $db->query($sql);
        while ($row = $result->fetch_array()) {
            //$test =( "#loginFields1" ); // Get the value of a form input.

            //     $test.val( "hello world" );
            // $("#loginFields1").val("Hello ");
            return true;

        }
        return false;
    }

    if (checkLogin($username, $password, $db)) {
        session_start();
        $_SESSION['username'] = $username;
        header("location: http://cs6testapp.azurewebsites.net/index.php ");

    } else {
        header("location: http://cs6testapp.azurewebsites.net/healthNWell.php");
    }

} else {
    print('whoops');
}


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
                        <form id="signin" class="navbar-form navbar-right" role="form" method="post">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="username" type="text" class="form-control" name="username" value=""
                                       placeholder="Username">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password"
                                       value="" placeholder="Password">
                            </div>
                            <input type="submit" value="Login" class="btn btn-info"/>
                        </form>

                    </li>

                    <li><a id="regButton" href="http://cs6testapp.azurewebsites.net/testRegisterForm.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>




    <div class="container-fluid text-center">
        <div class="row content">


            <?php

                $sql_query = "SELECT * FROM clubs";
                $result = $mysqli->query($sql_query);
                while ($row = $result->fetch_array()){
                    $clubName = $row['clubName'];
                    echo "<div class='col-sm-12 text-left' >";
                    echo "<div class='textCont'>";
                    echo "<img src='http://placehold.it/350x150'
                        alt='' >";
                    echo "<a href='http://cs6testapp.azurewebsites.net/clubInfoPage.php'>" . $row['clubName'] . "</a>";
                    echo "<a href='http://cs6testapp.azurewebsites.net/clubInfoPage.php?clubID=$clubName'>" . $row['clubName'] . "</a>";
                    echo "<p>" . $row['description'] . "</p>";
                    echo "<hr>";
                    echo "</div>";
                    echo "</div>";

                }

            ?>



        </div>


    </div>

    <div class="push"></div>

</div>
<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>

