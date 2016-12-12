<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7.12.2016 г.
 * Time: 0:50
 */
$mysqli = NEW MySQLi('us-cdbr-azure-southcentral-f.cloudapp.net', 'b20897870d42e6', 'f2fdd194', 'cs6app_db');
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
            <p>hjh</p>

            <div class="col-sm-6 text-center">
                <h1>News</h1>
            </div>

            <div class="col-sm-6 text-center">
                <h1>Upcoming Events</h1>
            </div>

            <div class="col-sm-6 text-center" id="newsDiv">

                <?php

                $sql_query = "SELECT * FROM news";
                $result = $mysqli->query($sql_query);
                while ($row = $result->fetch_array()){
                    echo "<div class='col-sm-12 text-left' >";
                    echo "<div class='textCont'>";
                    echo "<img src='https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w'
                        alt='' >";
                    echo "<h1>" . $row['title'] . "</h1>";
                    echo "<p>" . $row['content'] . "</p>";
                    echo "<hr>";
                    echo "</div>";
                    echo "</div>";

                }

                ?>

                <div class="col-sm-12 text-center">
                    <a href="createNews.php" type="button" class="btn btn-default">Submit News</a>
                </div>

            </div>

            <div class="col-sm-6 text-center" id="eventsDiv">

                <?php

                $sql_query = "SELECT * FROM events";
                $result = $mysqli->query($sql_query);
                while ($row = $result->fetch_array()){
                    echo "<div class='col-sm-12 text-left' >";
                    echo "<div class='textCont'>";
                    echo "<img src='https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w'
                        alt='' >";
                    echo "<h1>" . $row['title'] . "</h1>";
                    echo "<p>" . $row['content'] . "</p>";
                    echo "<h4>Start date: " . $row['start_date'] . "</h4>";
                    if($row['end_date']!= NULL) {
                        echo "<h4>End date: " . $row['end_date'] . "</h4>";
                    }
                    echo "<hr>";
                    echo "</div>";
                    echo "</div>";

                }

                ?>


                </div>
















        </div>
    </div>










</div>



<div class="push"></div>



<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>
</body>
</html>
