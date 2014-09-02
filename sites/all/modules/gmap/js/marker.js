/**
 * @file
 * Common marker routines.
 */

/*global jQuery, Drupal, GEvent, GInfoWindowTab, GLatLng, GLatLngBounds */

Drupal.gmap.addHandler('gmap', function (elem) {
    var obj = this;

    if (obj.vars.styleBubble && obj.vars.styleBubble.enableBubbleStyle == 1) {
        var infowindow = new InfoBubble(obj.vars.styleBubble.styleBubbleOptions);
    }
    else {
        var infowindow = new google.maps.InfoWindow();
    }

    obj.bind('init', function () {
        if (obj.vars.behavior.autozoom) {
            obj.bounds = new google.maps.LatLngBounds();
        }
    });

    obj.bind('addmarker', function (marker) {
        marker.opts.position = new google.maps.LatLng(marker.latitude, marker.longitude);
        marker.opts.map = obj.map;
        var m = Drupal.gmap.factory.marker(marker.opts);
        marker.marker = m;
        google.maps.event.addListener(m, 'click', function () {
            obj.change('clickmarker', -1, marker);
        });
        if (obj.vars.behavior.extramarkerevents) {
            google.maps.event.addListener(m, 'mouseover', function () {
                obj.change('mouseovermarker', -1, marker);
            });
            google.maps.event.addListener(m, 'mouseout', function () {
                obj.change('mouseoutmarker', -1, marker);
            });
            google.maps.event.addListener(m, 'dblclick', function () {
                obj.change('dblclickmarker', -1, marker);
            });
        }
        /**
         * Perform a synthetic marker click on this marker on load.
         */
        if (marker.autoclick || (marker.options && marker.options.autoclick)) {
            obj.deferChange('clickmarker', -1, marker);
        }
        if (obj.vars.behavior.autozoom) {
            obj.bounds.extend(new google.maps.LatLng(marker.latitude, marker.longitude));
        }
    });

    obj.bind('markersready', function () {
        // If we are autozooming, set the map center at this time.
        if (obj.vars.behavior.autozoom) {
            if (!obj.bounds.isEmpty()) {
                obj.map.fitBounds(obj.bounds);
                var listener = google.maps.event.addListener(obj.map, "idle", function () {
                    if (obj.vars.maxzoom) {
                        var maxzoom = parseInt(obj.vars.maxzoom)
                        if (obj.map.getZoom() > maxzoom) obj.map.setZoom(maxzoom);
                        google.maps.event.removeListener(listener);
                    }
                });
            }
        }
    });

    obj.bind('clearmarkers', function () {
        // Reset bounds if autozooming
        // @@@ Perhaps we should have a bounds for both markers and shapes?
        if (obj.vars.behavior.autozoom) {
            obj.bounds = new google.maps.LatLngBounds();
        }
    });

    Drupal.gmap.getInfoWindow = function () {
        return infowindow;
    };

    // @@@ TODO: Some sort of bounds handling for deletemarker? We'd have to walk the whole thing to figure out the new bounds...
});
