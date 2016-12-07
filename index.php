<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 04/12/2016
 * Time: 14:07
 */

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
                    <li><input type="submit" value="Login"/><span class="glyphicon glyphicon-log-in"></span></li>
                    </form>

                    </li>

                    <li onclick="logginTimeout()"><a id="regButton" href="#"><span
                                class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">

            <div class="col-sm-12 text-left">
                <div class="textCont">
                    <img
                        src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w"
                        alt="">
                    <a href="http://cs6testapp.azurewebsites.net/clubHomePage.php">Club Page Link</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                    <?php

                    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

                        include("dbConnect.php");

                        $username = $_POST["username"];
                        $password = $_POST["password"];


                        function checkLogin($username, $password, $db)
                        {
                            $sql = "SELECT * FROM users WHERE username='" . $username . "' and password='" . md5($password) . "'";
                            $result = $db->query($sql);
                            while ($row = $result->fetch_array()) {
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
                    <h3>Test</h3>
                    <p>Lorem ipsum...</p>
                </div>
            </div>


            <div class="col-sm-12 text-left">
                <div class="textCont">
                    <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                    <h1>Welcome</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                    <h3>Test</h3>
                    <p>Lorem ipsum...</p>
                </div>
            </div>

            <div class="col-sm-12 text-left">
                <div class="textCont">
                    <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                    <h1>Welcome</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                    <h3>Test</h3>
                    <p>Lorem ipsum...</p>
                </div>
            </div>

            <div class="col-sm-12 text-left">
                <div class="textCont">
                    <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                    <h1>Welcome</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                    <h3>Test</h3>
                    <p>Lorem ipsum...</p>
                </div>
            </div>

            <div class="col-sm-12 text-left">
                <div class="textCont">
                    <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                    <h1>Welcome</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                    <h3>Test</h3>
                    <p>Lorem ipsum...</p>
                </div>
            </div>



        </div>


    </div>

    <div class="push"></div>

</div>
<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>

