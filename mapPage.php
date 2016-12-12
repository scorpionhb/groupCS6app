<!DOCTYPE html>
<html>
<head>
    <title>Map Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="homeStyle.css">
    <link rel="stylesheet" type="text/css" href="mapStyle.css">
    <script src="homeJS.js"></script>
    <script src="mapJS.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMI5iwxHNqNnZSvbVJkE656xZoKPpfBfc "
        type="text/JavaScript">
    </script>
    <style>
        .btn-primary{
            margin-left: 30%;
            width: 16%;
        }
    </style>
</head>

<body onload ="load()">
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
    <div style="clear: both"></div>
    <div id="mapControls">
        <div id="filter">
            <p class="checkboxText"><b>Clubs</b></p>
            <div class="slideThree">
                <input type="checkbox" value="None" id="clubs" name="check" onclick="addMarks()"/>
                <label for="clubs"></label>
            </div>
            <p class="checkboxText"><b>Viewpoints</b></p>
            <div class="slideThree">
                <input type="checkbox" value="None" id="viewpoints" name="check1" onclick="addMarks()"/>
                <label for="viewpoints"></label>
            </div>
            <p class="checkboxText"><b>Routes</b></p>
            <div class="slideThree">
                <input type="checkbox" value="None" id="routes" name="check2" onclick="addMarks()"/>
                <label for="routes"></label>
            </div>
            <p class="checkboxText"><b>Landmarks</b></p>
            <div class="slideThree">
                <input type="checkbox" value="None" id="landmarks" name="check3" onclick="addMarks()"/>
                <label for="landmarks"></label>
            </div>
        </div>
        <a href="mapForm.php"><button type="submit" class="btn btn-primary" onclick>Add</button></a>
    </div>
    <div id = "map"></div>


    <div class="push"></div>

</div>
<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>
</body>
</html>
