/**
 * Created by Sanctuum on 04-Dec-16.
 */
var allMap;
function load(){
    var map = new google.maps.Map(document.getElementById("map"),{
        center: new google.maps.LatLng(57.060955, -2.134886),
        zoom: 15,
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

function test() {
    console.log("test");
    load();
    if(document.getElementById("clubs").checked) {
        downloadUrl("locations.php", function (data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName("marker");
            for (var i = 0; i < markers.length; i++) {
                var point = new google.maps.LatLng(
                    parseFloat(markers[i].getAttribute("lat")),
                    parseFloat(markers[i].getAttribute("lng")));
                var marker = new google.maps.Marker({
                    map: allMap,
                    position: point
                });
            }
        });
    }
    else{
        downloadUrl("location.php", function (data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName("marker");
            for (var i = 0; i < markers.length; i++) {
                var point = new google.maps.LatLng(
                    parseFloat(markers[i].getAttribute("lat")),
                    parseFloat(markers[i].getAttribute("lng")));
                var marker = new google.maps.Marker({
                    map: allMap,
                    position: point
                });
            }
        });
    }
}

function geoLocation() {
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({'address': address}, function (results, status) {

        if (status == google.maps.GeocoderStatus.OK) {
            var latitude = results[0].geometry.location.lat();
            var longitude = results[0].geometry.location.lng();
            console.log(latitude, longitude);
        }
    })

};