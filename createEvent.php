<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 12/12/2016
 * Time: 18:05
 */

session_start();
if(isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Health and Well-being</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="healthStyle.css">
    <script src="homeJS.js"></script>
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

                    <!--

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
                    <li><a id="regButton" href="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                    -->
                </ul>


            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-3 text-left"></div>

            <div class="col-sm-6 text-center ">
                <main>
                    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                    <script>tinymce.init({selector: 'textarea'});</script>
                    <?PHP
                    echo $output;
                    ?>
                    <form method="post">
                        <input type="text" name="eventName" placeholder="Name of Event"><br>
                        <p>Please enter start/end date in format YYYY-MM-DD HH:MM:SS</p>
                        <input type="datetime" name="startDate" placeholder="Enter start date"><br>
                        <input type="datetime" name="endDate" placeholder="Enter end date(if applicable)">
                        <textarea name="eventText"></textarea>
                        <input name="submit" type="submit">
                    </form>
                </main>


            </div>

        </div>
    </div>

    <?php

            if (isset($_POST['submit'])) {
            include("dbConnect.php");

            $eventName = $db->real_escape_string($_POST['eventName']);
            $eventText = $db->real_escape_string($_POST['eventText']);
            $startDate = $db->real_escape_string($_POST['startDate']);
            $endDate = $db->real_escape_string($_POST['endDate']);

            $sql = "INSERT INTO events(content,title,start_date,end_date) VALUES ('$eventText','$eventName','$startDate','$endDate')";
            if ($sql != true) {
                $output = "There was a problem <br/>";
                $output .= $db->error;
            } else {
                $output = "Your article has been submitted";
            }

            $result = $db->query($sql);

        }

    }

    ?>





</div>



<div class="push"></div>



<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>
</body>
</html>