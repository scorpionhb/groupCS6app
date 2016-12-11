<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 06/12/2016
 * Time: 22:25
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Club Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="clubPageStyle.css">
    <script src="homeJS.js"></script>

    <script src="../zabuto_calendar.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../zabuto_calendar.min.css">

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

            <div class="col-sm-3 text-left">
                <div class="textCont">
                    <img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Volkswagen_Logo.png/769px-Volkswagen_Logo.png" alt="">
                    <a class="button" href="http://cs6testapp.azurewebsites.net/clubInfoPage.php">Information</a>
                    <a class="button" href="http://cs6testapp.azurewebsites.net/clubPhotosPage.php">Photos</a>
                </div>
            </div>

            <div class="col-sm-9 text-left">
                <div class="textCont">
                    <h1>Volkswagen Club</h1>
                </div>
                <div>
                    <h2>Information</h2>
                </div>
            </div>

            <div class="col-sm-6 text-left">

                <div class="col-sm-12 text-left">
                    <div class="textCont">
                        <h3>Genre</h3>
                        <p>Fun</p>
                        <hr>
                        <h3>Description</h3>
                        <p>СкандаУ са готини, ама ние повече!</p>
                        <p>Търси го като къртица в тъмното.</p>
                        <p>Иска да смуче на Пикачуто сока.</p>
                        <hr>
                        <h3>Location</h3>
                        <p>Има ли платена любов у тая могила?</p>
                        <hr>
                        <h3>Contact</h3>
                        <p>Yes, baby!</p>
                    </div>
                </div>



            </div>



            <div class="col-sm-2 text-left calendar">

                <div class="textCont">
                    <h2>Calendar</h2>
                </div>



                <span style="font-family: Monaco, Menlo, Consolas, 'Courier New', monospace; font-size: 13px; line-height: 18px; white-space: pre-wrap; background-color: rgb(255, 255, 255);">
                    <div id="demo"></div></span>



            </div>



            <div class="col-sm-2 text-left colTitle">
                <div class="textCont">
                    <h2>Photos</h2>
                </div>
            </div>

            <div class="col-sm-2 text-left photos">
                <div>
                    <div class="col-xs-4">
                        <a href="#" class="thumbnail">
                            <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="#" class="thumbnail">
                            <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="#" class="thumbnail">
                            <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="#" class="thumbnail">
                            <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="#" class="thumbnail">
                            <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="#" class="thumbnail">
                            <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="#" class="thumbnail">
                            <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="#" class="thumbnail">
                            <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <a href="#" class="thumbnail">
                            <img src="https://static1.squarespace.com/static/55d2a01fe4b03323486a59d5/55e0b531e4b0ee392efcad2d/55e0b532e4b0fadc15afb2b4/1440789817077/Audi.png?format=300w" alt="">
                        </a>
                    </div>
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

