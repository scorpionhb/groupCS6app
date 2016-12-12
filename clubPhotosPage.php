<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 07/12/2016
 * Time: 01:13
 */
$mysqli = NEW MySQLi('us-cdbr-azure-southcentral-f.cloudapp.net', 'b20897870d42e6', 'f2fdd194', 'cs6app_db');
$clubID = $_GET['clubID'];
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

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">


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

            <div class="col-sm-3 text-left">
                <div class="textCont">
                    <?php
                    $photo;
                    $new_sql = "SELECT * FROM club_photos WHERE caption = 'placeholder'";
                    $res = $mysqli->query($new_sql);
                    while($row = $res->fetch_array()){
                        $photo = $row['url'];
                    }

                    $sql_query = "SELECT * FROM clubs WHERE clubName = '$clubID'";
                    $result = $mysqli->query($sql_query);
                    while($row = $result->fetch_array()){
                        echo "<img class='img-responsive' src=$photo alt=''>";
                        echo "<a class='button' href='http://cs6testapp.azurewebsites.net/clubInfoPage.php?clubID=$clubID'>Information</a>";
                        echo "<a class='button' href='http://cs6testapp.azurewebsites.net/clubPhotosPage.php?clubID=$clubID'>Photos</a>";
                    }
                    ?>
                </div>
            </div>

            <div class="col-sm-9 text-left">
                <?php
                $sql_query = "SELECT * FROM clubs WHERE clubName = '$clubID'";
                $result = $mysqli->query($sql_query);
                while($row = $result->fetch_array()){
                    echo "<div class='textCont' >";
                    echo "<h1>" . $row['clubName'] . "</h1>";
                    echo "</div>";
                    echo "<div>";
                    echo "<h2>Photos</h2>";
                    echo "</div>";
                }

                ?>
            </div>



            <div class="container">
                <div id="main_area">
                    <!-- Slider -->
                    <div class="row">
                        <div class="col-sm-6" id="slider-thumbs">
                            <!-- Bottom switcher of slider -->
                            <ul class="hide-bullets">
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-0">
                                        <img src="http://placehold.it/150x150&text=zero">
                                    </a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/470x480&text=3"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                                </li>
                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                                </li>

                                <li class="col-sm-3">
                                    <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-3 preview">
                            <div class="col-xs-12" id="slider">
                                <!-- Top part of the slider -->
                                <div class="row">
                                    <div class="col-sm-12" id="carousel-bounding-box">
                                        <div class="carousel slide" id="myCarousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="active item" data-slide-number="0">
                                                    <img src="http://placehold.it/470x480&text=zero"></div>

                                                <div class="item" data-slide-number="1">
                                                    <img src="http://placehold.it/470x480&text=1"></div>

                                                <div class="item" data-slide-number="2">
                                                    <img src="http://placehold.it/470x480&text=2"></div>

                                                <div class="item" data-slide-number="3">
                                                    <img src="http://placehold.it/470x480&text=3"></div>

                                                <div class="item" data-slide-number="4">
                                                    <img src="http://placehold.it/470x480&text=4"></div>

                                                <div class="item" data-slide-number="5">
                                                    <img src="http://placehold.it/470x480&text=5"></div>

                                                <div class="item" data-slide-number="6">
                                                    <img src="http://placehold.it/470x480&text=6"></div>

                                                <div class="item" data-slide-number="7">
                                                    <img src="http://placehold.it/470x480&text=7"></div>

                                                <div class="item" data-slide-number="8">
                                                    <img src="http://placehold.it/470x480&text=8"></div>

                                                <div class="item" data-slide-number="9">
                                                    <img src="http://placehold.it/470x480&text=9"></div>

                                                <div class="item" data-slide-number="10">
                                                    <img src="http://placehold.it/470x480&text=10"></div>

                                                <div class="item" data-slide-number="11">
                                                    <img src="http://placehold.it/470x480&text=11"></div>

                                                <div class="item" data-slide-number="12">
                                                    <img src="http://placehold.it/470x480&text=12"></div>

                                                <div class="item" data-slide-number="13">
                                                    <img src="http://placehold.it/470x480&text=13"></div>

                                                <div class="item" data-slide-number="14">
                                                    <img src="http://placehold.it/470x480&text=14"></div>

                                                <div class="item" data-slide-number="15">
                                                    <img src="http://placehold.it/470x480&text=15"></div>
                                            </div>
                                            <!-- Carousel nav -->
                                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/Slider-->
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

