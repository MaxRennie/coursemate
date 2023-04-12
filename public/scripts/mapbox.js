function map(postcode) {
    mapboxgl.accessToken = 'pk.eyJ1IjoicmF4bWVubmllIiwiYSI6ImNsNWhicXNhaDAybGMzYm41bGM1bTE1azUifQ.lHeVylv1rWu6iI1d8SU7Ow';
    var longtitude;
    var latitude;
    var key = 'pk.eyJ1IjoicmF4bWVubmllIiwiYSI6ImNsNWhicXNhaDAybGMzYm41bGM1bTE1azUifQ.lHeVylv1rWu6iI1d8SU7Ow';
    var search = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' + postcode + '.json?proximity=ip&types=place%2Cpostcode%2Caddress&access_token=' + key;

    $.get(search, function (data) {
        var results = data;
        var longtitude = results.features[0].center[0];
        var latitude = results.features[0].center[1];

        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [longtitude, latitude],
            zoom: 18,

        });
        const marker1 = new mapboxgl.Marker()
            .setLngLat([longtitude, latitude])
            .addTo(map);
        return map;
    });

}
