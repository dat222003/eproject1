@extends('masters.home')

@section('main')
    <div >
        <img class="top_background" src="{{ url('img/system/dark.png') }}" alt="image">
    </div>

    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
                <div class="row align-items-center align-items-start">
                    <div class="col-lg-6 wow slideInUp g-5" data-wow-delay="0.3s">
                        <div class="row g-5">
                            <hr>
                            <div class="col-12">
                                <div class="d-flex align-items-center wow fadeIn g-5" data-wow-delay="0.8s">
                                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                        <i class="fa fa-map-marker-alt text-white"></i>
                                    </div>
                                    <div class="ps-4">
                                        <h5 class="mb-2">Visit our office</h5>
                                        <h4 class="text-primary mb-0">Aptech Computer Education, Hà Nội</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center wow fadeIn g-5" data-wow-delay="0.4s">
                                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                        <i class="fa fa-envelope-open text-white"></i>
                                    </div>
                                    <div class="ps-4">
                                        <h5 class="mb-2">Email to get free consultation</h5>
                                        <h4 class="text-primary mb-0">info@example.com</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center wow fadeIn g-5" data-wow-delay="0.1s">
                                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </div>
                                    <div class="ps-4">
                                        <h5 class="mb-2">Call to ask any question</h5>
                                        <h4 class="text-primary mb-0">+012 345 6789</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
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
                                    zoom: 6,
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
                                    // 1 seconds after the center of the map has changed, pan back to the
                                    // marker.
                                    window.setTimeout(() => {
                                        map.panTo(marker.getPosition());
                                    }, 1000);
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
                        </script>
                        <!-- Map -->
                        <div id="map"></div>
                        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAD5c9tgSEoBD5tBveexvURgTpRhzUkw2E&callback=initMap"></script>
                    </div>
                </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
