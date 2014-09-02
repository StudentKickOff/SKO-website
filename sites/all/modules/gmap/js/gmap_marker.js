/**
 * @file
 * GMap Markers
 * GMap API version -- No manager
 */

/*global Drupal, GMarker */

// Replace to override marker creation
Drupal.gmap.factory.marker = function (opts) {
    var marker = new google.maps.Marker(opts)

    window.opts = opts;
    var geocoder = new google.maps.Geocoder();

    geocoder.geocode({'location': marker.getPosition()}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        address = results[0]['formatted_address'];
        google.maps.event.addListener(marker, 'click', function() {
          open("https://www.google.be/maps/place/" + address + "/", '_blank');
        });
      }
    });

    return marker;
};

Drupal.gmap.addHandler('gmap', function (elem) {
    var obj = this;

    obj.bind('addmarker', function (marker) {
        if (!obj.map.markers) obj.map.markers = new Array();
        marker.marker.setMap(obj.map);
        obj.map.markers.push(marker.marker);
    });

    obj.bind('delmarker', function (marker) {
        marker.marker.setMap(null);
    });

    obj.bind('clearmarkers', function () {
        // @@@ Maybe don't nuke ALL overlays?
        if (obj.map.markers) {
            for (var i = 0; i < obj.map.markers.length; i++) {
                obj.map.markers[i].setMap(null);
            }
        }
    });
});
