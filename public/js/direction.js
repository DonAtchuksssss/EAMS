function Map() {
    //set map options
    var location = new google.maps.LatLng(0, 0);
    var mapProperty = {
        center: location,
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    //create map
    var map = new google.maps.Map(document.getElementById('map'), mapProperty);
    marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: location,
        title: "You are here",
    });


    geocodePosition(marker.getPosition());
    google.maps.event.addListener(marker, 'dragend', function () {
        map.setCenter(marker.getPosition());
        geocodePosition(marker.getPosition());
        $("#latitude").val(marker.getPosition().lat());
        $("#longitude").val(marker.getPosition().lng());
    });

    currentLat = $("#latitude").val();
    currentLng = $("#longitude").val();

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            $("#latitude").val(pos.lat);
            $("#longitude").val(pos.lng);

            marker.setPosition(pos);

            map.setCenter(marker.getPosition());
            geocodePosition(marker.getPosition());

        });
    }

    //create a DirectionsService object to use the route method and get a result for our request
    var directionsService = new google.maps.DirectionsService();

    //create a DirectionsRenderer object which we will use to display the route
    var directionsDisplay = new google.maps.DirectionsRenderer();

    //bind the DirectionsRenderer to the map
    directionsDisplay.setMap(map);



    //create request for origin and destination
    var request = {
        origin: document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
        unitSystem: google.maps.UnitSystem.IMPERIAL
    }

    //pass the request to the route method
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            //hide marker
            marker.setMap(null);

            //Get distance and time
            const output = document.querySelector('#output');
            output.innerHTML = "<div class='alert-info'><b>From: </b>" + document.getElementById("from").value + ".<br /> <b>To:</b> " + document.getElementById("to").value + ".<br /> <b>Driving distance <i class='fas fa-road'></i> : </b>" + result.routes[0].legs[0].distance.text + ".<br /><b>Duration <i class='fas fa-hourglass-start'></i> : </b>" + result.routes[0].legs[0].duration.text + ".</div>";

            //display route
            directionsDisplay.setDirections(result);
        } else {
            //delete route from map
            directionsDisplay.setDirections({
                routes: []
            });


            //show error message
            output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> Could not retrieve driving distance.</div>";
        }
    });


    //create autocomplete objects for all inputs
    var options = {
        types: ["establishment"],
        componentRestrictions: {
            country: "ph"
        },
    }

    var input1 = document.getElementById("from");
    var autocomplete1 = new google.maps.places.Autocomplete(input1, options);

    var input2 = document.getElementById("to");
    var autocomplete2 = new google.maps.places.Autocomplete(input2, options);

    
}


//geocode position
function geocodePosition(pos) {
    geocoder = new google.maps.Geocoder();
    geocoder.geocode({
            latLng: pos
        },

        function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                $("#from").val(results[0].formatted_address);
            } else {

            }
        });
}