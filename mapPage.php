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
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMI5iwxHNqNnZSvbVJkE656xZoKPpfBfc "
                type="text/JavaScript">
        </script>
        <script type ="text/JavaScript">
            function load(){
                var map = new google.maps.Map(document.getElementById("map"),{
                center: new google.maps.LatLng(47.6145, -122.3418),
                zoom: 12,
                minZoom: 5,
                maxZoom: 20,
                mapTypeId: 'roadmap'
                });
            }
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
                    <a class="navbar-brand" href=".../Logo.png">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="http://cs6testapp.azurewebsites.net/index.php">Clubs and Societies</a></li>
                        <li><a href="#">Health and Well-being</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div style="clear: both"></div>
        <div id="mapControls"></div>
        <div id = "map" style="width: 1430px; height: 750px; margin: 10% 10% 10% 22%;"></div>
        

        <div class="push"></div>

    </div>
    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>
</body>
</html>
