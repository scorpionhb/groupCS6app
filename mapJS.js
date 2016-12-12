/**
 * Created by Sanctuum on 04-Dec-16.
 */
var allMap;
function load(){
    var map = new google.maps.Map(document.getElementById("map"),{
        center: new google.maps.LatLng(57.060955, -2.134886),
        zoom: 12,
        minZoom: 5,
        maxZoom: 20,
        mapTypeId: 'roadmap'
    });

    allMap = map;

    var allowedBounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(-81.780861, 179.284397),
        new google.maps.LatLng(77.566551, 176.322804)
    );
    var lastValidCenter = map.getCenter();

    google.maps.event.addListener(map, 'center_changed', function() {
        if (allowedBounds.contains(map.getCenter())) {
            // still within valid bounds, so save the last valid position
            lastValidCenter = map.getCenter();
            return;
        }

        // not valid anymore => return to last valid position
        map.panTo(lastValidCenter);
    });


}

function bindInfoWindow(marker, map, infoWindow, html){
    google.maps.event.addListener(marker, 'click', function(){
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
    });
}

function downloadUrl(url,callback){
    var request =window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

    request.onreadystatechange = function(){
        if (request.readyState == 4){
            callback(request, request.sttus);
        }
    };
    request.open('GET', url, true);
    request.send(null);
}

function addMarks() {
    load();
    var infoWindow = new google.maps.InfoWindow;
    var customIcons = {
        Club: {
            icon: 'http://maps.google.com/intl/en_us/mapfiles/ms/micons/sportvenue.png'
        },
        Viewpoint: {
            icon: 'http://maps.google.com/mapfiles/dd-start.png'
        },
        HistoricalLandmark: {
            icon: 'http://maps.google.com/mapfiles/dd-end.png'
        },
        Route: {
            icon: 'http://maps.google.com/mapfiles/ms/micons/hiker.png'
        }
    };
    if(document.getElementById("clubs").checked) {
        downloadUrl("loadClubs.php", function (data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName("marker");
            for (var i = 0; i < markers.length; i++) {
                var point = new google.maps.LatLng(
                    parseFloat(markers[i].getAttribute("latitude")),
                    parseFloat(markers[i].getAttribute("longitude")));
                var type = markers[i].getAttribute("type");
                var name = markers[i].getAttribute("name");
                var address = markers[i].getAttribute("address");
                var description = markers[i].getAttribute("description");
                var icon = customIcons[type] || {};
                var html = "<b>" + name + "</b> <br/> <p><b>" + "Address:" + "</b></p><p>" + address + "</p> <p><b>" + "Description:" + "</b></p><p>" + description + "</p>";
                var marker = new google.maps.Marker({
                    map: allMap,
                    position: point,
                    icon: icon.icon
                });
                bindInfoWindow(marker, allMap, infoWindow, html);
            }
        });
    }
    if(document.getElementById("viewpoints").checked){
        downloadUrl("loadViewpoints.php", function (data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName("marker");
            for (var i = 0; i < markers.length; i++) {
                var point = new google.maps.LatLng(
                    parseFloat(markers[i].getAttribute("latitude")),
                    parseFloat(markers[i].getAttribute("longitude")));
                var type = markers[i].getAttribute("type");
                var name = markers[i].getAttribute("name");
                var address = markers[i].getAttribute("address");
                var description = markers[i].getAttribute("description");
                var geological = markers[i].getAttribute("geological");
                var history = markers[i].getAttribute("history");
                var s;
                if(history == null){
                    history = "";
                }
                if(geological == null){
                    geological = "";
                }
                var icon = customIcons[type] || {};
                var html = "<b>" + name + "</b> <br/> <p><b>" + "Address:" + "</b></p><p>" + address + "</p> <p><b>" + "Description:" + "</b></p><p>" + description + "</p><p><b>" + "Geological Data:" + "</b></p><p>" + geological + "</p><p><b>" + "History:" + "</b></p><p>" + history + "</p>";
                var marker = new google.maps.Marker({
                    map: allMap,
                    position: point,
                    icon: icon.icon
                });
                bindInfoWindow(marker, allMap, infoWindow, html);
            }
        });
    }
    if(document.getElementById("landmarks").checked){
        downloadUrl("loadLandmarks.php", function (data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName("marker");
            for (var i = 0; i < markers.length; i++) {
                var point = new google.maps.LatLng(
                    parseFloat(markers[i].getAttribute("latitude")),
                    parseFloat(markers[i].getAttribute("longitude")));
                var type = markers[i].getAttribute("type");
                var name = markers[i].getAttribute("name");
                var address = markers[i].getAttribute("address");
                var description = markers[i].getAttribute("description");
                var geological = markers[i].getAttribute("geological");
                var history = markers[i].getAttribute("history");
                if(history == null){
                    history = "";
                }
                if(geological == null){
                    geological = "";
                }
                var icon = customIcons[type] || {};
                var html = "<b>" + name + "</b> <br/> <p><b>" + "Address:" + "</b></p><p>" + address + "</p> <p><b>" + "Description:" + "</b></p><p>" + description + "</p><p><b>" + "Geological Data:" + "</b></p><p>" + geological + "</p><p><b>" + "History:" + "</b></p><p>" + history + "</p>";
                var marker = new google.maps.Marker({
                    map: allMap,
                    position: point,
                    icon: icon.icon
                });
                bindInfoWindow(marker, allMap, infoWindow, html);
            }
        });
    }
    if(document.getElementById("routes").checked){
        downloadUrl("loadRoutes.php", function (data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName("marker");
            for (var i = 0; i < markers.length; i++) {
                var point = new google.maps.LatLng(
                    parseFloat(markers[i].getAttribute("latitude")),
                    parseFloat(markers[i].getAttribute("longitude")));
                var type = markers[i].getAttribute("type");
                var name = markers[i].getAttribute("name");
                var address = markers[i].getAttribute("address");
                var description = markers[i].getAttribute("description");
                var geological = markers[i].getAttribute("geological");
                var history = markers[i].getAttribute("history");
                if(history == null){
                    history = "";
                }
                if(geological == null){
                    geological = "";
                }
                var icon = customIcons[type] || {};
                var html = "<b>" + name + "</b> <br/> <p><b>" + "Address:" + "</b></p><p>" + address + "</p> <p><b>" + "Description:" + "</b></p><p>" + description + "</p><p><b>" + "Geological Data:" + "</b></p><p>" + geological + "</p><p><b>" + "History:" + "</b></p><p>" + history + "</p>";
                var marker = new google.maps.Marker({
                    map: allMap,
                    position: point,
                    icon: icon.icon
                });
                bindInfoWindow(marker, allMap, infoWindow, html);
            }
        });
    }
}



function geoLocation() {
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({'address': address}, function (results, status) {

        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = parseFloat(results[0].geometry.location.lat());
            var longitude = parseFloat(results[0].geometry.location.lng());
            console.log(latitude, longitude);
            var latitudeString = latitude;
        }
        document.getElementById("test").innerHTML = latitude;
    });
}
    
