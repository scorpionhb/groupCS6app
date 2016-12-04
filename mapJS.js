/**
 * Created by Sanctuum on 04-Dec-16.
 */
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMI5iwxHNqNnZSvbVJkE656xZoKPpfBfc "
type="text/JavaScript">
function load(){
    var map = new google.maps.Map(document.getElementById("map"),{
        center: new google.maps.LatLng(47.6145, -122.3418),
        zoom: 12,
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