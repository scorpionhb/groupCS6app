<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 06/12/2016
 * Time: 02:23
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
                                <input id="username" type="username" class="form-control" name="username" value="" placeholder="Username">
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
                    <a class="button" href="http://cs6testapp.azurewebsites.net/clubHomePage.php">Home</a>
                    <a class="button" href="http://cs6testapp.azurewebsites.net/clubPhotosPage.php">Photos</a>
                    <a class="button" href="http://cs6testapp.azurewebsites.net/clubAboutPage.php">About</a>
                </div>
            </div>

            <div class="col-sm-9 text-left">
                <div class="textCont">
                    <h1>Volkswagen Club</h1>

                </div>
            </div>

            <div class="col-sm-6 text-left">
                <div class="textCont">
                    <h2>About</h2>
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

    </div>



</div>



<div class="push"></div>
</div>


<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>

</body>
</html>
