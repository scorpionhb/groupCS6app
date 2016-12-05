/**
 * Created by Sanctuum on 04-Dec-16.
 */
function load(){
    var map = new google.maps.Map(document.getElementById("map"),{
        center: new google.maps.LatLng(57.060955, -2.134886),
        zoom: 15,
        minZoom: 5,
        maxZoom: 20,
        mapTypeId: 'roadmap'
    });

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