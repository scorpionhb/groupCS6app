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
    </head>

<body onload ="load()">
    
    
    <div id="wrapper">

        <nav class="navbar navbar-fixed-top navbar-absolute navbar-transparent big">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img class="navbar-brand" src="LOGO1.png"/>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="http://cs6testapp.azurewebsites.net/index.php">Clubs and Societies</a></li>
                        <li><a href="#">Health and Well-being</a></li>
                        <li><a href="#">Map</a></li>
                    </ul>

                    <ul id="loginFields" class="nav navbar-nav navbar-right">
                        <li><form id="signin" class="navbar-form navbar-right" role="form">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="username" type="username" class="form-control" name="username" value="" placeholder="Username">
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
                                </div></form>
                        </li>
                        <li  onclick="logIn()"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a id="regButton" href="#">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div style="clear: both"></div>
        <div id="mapControls">
            <div id="filter">
                <label class="checkboxes"><input type="checkbox" value="Clubs"><b>Clubs</b></label><br>
                <label class="checkboxes"><input type="checkbox" value="Areas"><b>Areas</b></label><br>
                <label class="checkboxes"><input type="checkbox" value="Viewpoints"><b>Viewpoints</b></label><br>
                <label class="checkboxes"><input type="checkbox" value="Routes"><b>Routes</b></label><br>
                <label class="checkboxes"><input type="checkbox" value="Geo Data"><b>Geo Data</b></label><br>
                <label class="checkboxes"><input type="checkbox" value="Landmarks"><b>Landmarks</b></label><br>
            </div>
            <p id="test">Testvai Tova</p>
        </div>
        <div id = "map"></div>
        

        <div class="push"></div>

    </div>
    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>
</body>
</html>
