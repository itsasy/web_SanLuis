var centroSanLuis = {
    lat: -12.072881,
    lng: -76.997137
};

/* lat: document.getElementById("latitude_place").value,
lng: document.getElementById("length_place").value, */
var marker;
var SanLuis = [
    //
    {
        lat: -12.076939,
        lng: -77.010113
    },
    {
        lat: -12.076998,
        lng: -77.010159
    },
    {
        lat: -12.077349,
        lng: -77.010302
    },
    {
        lat: -12.078120,
        lng: -77.010350
    },
    {
        lat: -12.078249,
        lng: -77.010356
    },
    {
        lat: -12.079028,
        lng: -77.009938
    },
    {
        lat: -12.079844,
        lng: -77.008952
    },
    {
        lat: -12.080345,
        lng: -77.007548
    },
    {
        lat: -12.080734,
        lng: -77.006296
    },
    {
        lat: -12.081495,
        lng: -77.005139
    },
    {
        lat: -12.082589,
        lng: -77.004437
    },
    {
        lat: -12.083294,
        lng: -77.004228
    },
    {
        lat: -12.084099,
        lng: -77.004142
    },
    {
        lat: -12.083641,
        lng: -77.000991
    },
    {
        lat: -12.082587,
        lng: -76.997619
    },
    {
        lat: -12.081548,
        lng: -76.995728
    },
    {
        lat: -12.081194,
        lng: -76.994225
    },
    {
        lat: -12.080982,
        lng: -76.993576
    },
    {
        lat: -12.081674,
        lng: -76.993437
    },
    {
        lat: -12.081418,
        lng: -76.992962
    },
    {
        lat: -12.081744,
        lng: -76.992850
    },
    {
        lat: -12.081661,
        lng: -76.989592
    },
    {
        lat: -12.081453,
        lng: -76.989339
    },
    {
        lat: -12.079996,
        lng: -76.987254
    },
    {
        lat: -12.074134,
        lng: -76.991802
    },
    {
        lat: -12.072390,
        lng: -76.988547
    },
    {
        lat: -12.071961,
        lng: -76.988723
    },
    {
        lat: -12.071599,
        lng: -76.988859
    },
    {
        lat: -12.071361,
        lng: -76.988898
    },
    {
        lat: -12.071189,
        lng: -76.988908
    },
    {
        lat: -12.071046,
        lng: -76.988878
    },

    {
        lat: -12.064034,
        lng: -76.987185
    },
    {
        lat: -12.064304,
        lng: -76.988832
    },
    {
        lat: -12.064323,
        lng: -76.990118
    },
    {
        lat: -12.064124,
        lng: -76.992367
    },
    //
    {
        lat: -12.063778,
        lng: -76.996888
    },
    {
        lat: -12.063339,
        lng: -76.997145
    },
    {
        lat: -12.063003,
        lng: -76.997552
    },
    {
        lat: -12.062908,
        lng: -76.997745
    },
    //////////////////////
    {
        lat: -12.062868,
        lng: -76.997950
    },
    {
        lat: -12.060861,
        lng: -76.997884
    },
    {
        lat: -12.060609,
        lng: -76.998322
    },
    {
        lat: -12.060121,
        lng: -76.998720
    },
    {
        lat: -12.060269,
        lng: -76.999557
    },
    {
        lat: -12.060558,
        lng: -76.999859
    },
    {
        lat: -12.061459,
        lng: -76.999980
    },
    {
        lat: -12.061727,
        lng: -77.001131
    },
    {
        lat: -12.061998,
        lng: -77.001214
    },
    {
        lat: -12.061501,
        lng: -77.003140
    },
    {
        lat: -12.062437,
        lng: -77.003435
    },
    {
        lat: -12.062918,
        lng: -77.002397
    },
    {
        lat: -12.063401,
        lng: -77.000124
    },
    {
        lat: -12.063418,
        lng: -77.000106
    },
    {
        lat: -12.068340,
        lng: -76.996338
    },
    {
        lat: -12.070993,
        lng: -77.001042
    },
    {
        lat: -12.075316,
        lng: -77.008596
    },
    {
        lat: -12.076946,
        lng: -77.010119
    },
];

var LimitSanLuis = {
    north: -12.059867,
    south: -12.085193,
    west: -77.011053,
    east: -76.986907
};

function iniciarMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: centroSanLuis,
        zoom: 12,
        minZoom: 16,
        mapTypeId: 'roadmap',
        zoomControl: true,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        rotateControl: true,
        fullscreenControl: true,
        restriction: {
            latLngBounds: LimitSanLuis,
            strictBounds: false
        }
    });
    var Borde = new google.maps.Polyline({
        path: SanLuis,
        strokeColor: '#204969',
        strokeOpacity: 1.0,
        strokeWeight: 2.8,
        /* fillColor: '#696464',
        fillOpacity: 0.35, */
        geodesic: true,
    });
    Borde.setMap(map);

    google.maps.event.addListener(map, 'click', function (pos) {
        placeMarker(pos.latLng);
        document.getElementById("latitude_place").value = pos.latLng.lat();
        document.getElementById("length_place").value = pos.latLng.lng();
    });

    function placeMarker(location) {
        if (marker) {
            marker.setPosition(location);
        } else {
            marker = new google.maps.Marker({
                position: centroSanLuis,
                map: map,
                draggable: true
            });
            google.maps.event.addListener(marker, "drag", function (pos) {
                populateInputs(pos.latLng);
            });
        }
    }

    function populateInputs(pos) {
        document.getElementById("latitude_place").value = pos.lat()
        document.getElementById("length_place").value = pos.lng();
    }

}
