<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="{{ url('img/system/carousel-1.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    {{--                        <h5 class="text-white  mb-3 animated slideInDown">32Smile</h5>--}}
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Your SMILE is important to us</h1>
                    <a href="{{ route('user_register') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book Your Appointment</a>
                    <a href="#" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="{{ url('img/system/carousel-2.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    {{--                        <h5 class="text-white  mb-3 animated slideInDown">32Smile</h5>--}}
                    <h3 class="display-1 text-white mb-md-4 animated zoomIn">We provide highest standard of customer service</h3>
                    <a href="{{ route('user_register') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book Your Appointment</a>
                    <a href="{{ route('home.contact') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
