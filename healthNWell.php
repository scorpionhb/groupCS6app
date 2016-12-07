<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 7.12.2016 г.
 * Time: 0:50
 */
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
                </ul>





            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">

            <div class="col-sm-7 text-center">
                <h1>News</h1>
            </div>

            <div class="col-sm-5 text-center">
                <h1>Upcoming Events</h1>
            </div>



            <div class="col-sm-7 text-left">
                <div class="textCont">
                    <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                    <h1>News 1</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                </div>
            </div>

            <div class="col-sm-5 text-left">
                <div class="textCont">
                    <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                    <h2>Event 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                </div>
            </div>

            <div class="col-sm-7 text-left">
                <div class="textCont">
                    <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                    <h1>News 2</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                </div>
            </div>

            <div class="col-sm-5 text-left">
                <div class="textCont">
                    <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                    <h2>Event 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                </div>
            </div>

            <div class="col-sm-7 text-left">
                <div class="textCont">
                    <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                    <h1>News 3</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                </div>
            </div>

            <div class="col-sm-5 text-left">
                <div class="textCont">
                    <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                    <h2>Event 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <hr>
                </div>
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
