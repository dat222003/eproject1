@extends('masters.home')

@section('main')
    <div >
        <img class="top_background" src="{{ url('img/system/dark.png') }}" alt="image">
    </div>
    <script>

        function initMap() {

            var myStyles = [
                {
                    featureType: "poi",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                }
            ];

            // Map options
            var options = {
                zoom: 4,
                center: {lat: 21.00351728158009, lng: 105.8490876775602},
                styles: myStyles
            }

            var map = new google.maps.Map(document.getElementById('map'), options);


            const marker = new google.maps.Marker({
                map,
                title: "Click to zoom",
                position: {lat: 21.00351728158009, lng: 105.8490876775602},
                icon: '{{ url('img/system/dentist-marker.png') }}',
                content: '<h5>{{'Aptech Le Thanh Nghi'}}<h5>'
            });

            map.addListener("center_changed", () => {
                // 3 seconds after the center of the map has changed, pan back to the
                // marker.
                window.setTimeout(() => {
                    map.panTo(marker.getPosition());
                }, 3000);
            });
            marker.addListener("click", () => {
                map.setZoom(18);
                map.setCenter(marker.getPosition());
            });

            if (marker.content) {
                var infoWindow = new google.maps.InfoWindow({
                    content: marker.content
                });

                marker.addListener('click', function () {
                    infoWindow.open(map, marker);
                });
            }
        }

        window.initMap = initMap;

    </script>

    <h1 class="d-flex justify-content-center">Find Our clinic At</h1>
        <div class="d-flex justify-content-center bg-primary bg-gradient">
            <div id="map"></div>
        </div>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAD5c9tgSEoBD5tBveexvURgTpRhzUkw2E&callback=initMap"></script>
@endsection
