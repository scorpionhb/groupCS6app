<!DOCTYPE html>
<html>
    <head>
        <title>Map Test</title>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMI5iwxHNqNnZSvbVJkE656xZoKPpfBfc "
                type="text/JavaScript">
        </script>
        <script type ="text/JavaScript">
            function load(){
                var map = new google.maps.Map(document.getElementById("map"),{
                center: new google.maps.LatLng(47.6145, -122.3418),
                zoom: 13,
                mapTypeId: 'roadmap'
                });
            }
        </script>
    </head>
<body onload ="load()">
    <div id = "map" style="width: 500px; height: 300px"></div>
</body>
</html>