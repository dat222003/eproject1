<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>32smile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{ url('img/system/favicon.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('lib/animate/animate.min.css') }}" rel="stylesheet">

    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{url("css/home.css")}}" rel="stylesheet">
</head>

{{----}}

    <body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i> Street,  city, country</small>
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+0123 456 789</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>example@gmail.com</small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="#"><i class="fab fa-youtube fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="#" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-solid fa-tooth me-2"></i>32smile</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                    <div class="dropdown-menu m-0">
                        <a href="#" class="dropdown-item">Services</a>
                        <a href="#" class="dropdown-item">Products</a>
                    </div>
                </div>
            </div>
            <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
        </div>
    </nav>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ url('img/system/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white  mb-3 animated slideInDown">32Smile</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Your SMILE is important to us</h1>
                        <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book Your Appointment</a>
                        <a href="#" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ url('img/system/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white  mb-3 animated slideInDown">32Smile</h5>
                        <h3 class="display-1 text-white mb-md-4 animated zoomIn">We provide highest standard of customer service</h3>
                        <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Book Your Appointment</a>
                        <a href="#" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
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
</div>
<!-- Navbar & Carousel End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- 32smile Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">32smile</h5>
                    <h1 class="mb-0">The Best Dental Health Care with 5 Years of Experience</h1>
                </div>
                <p class="mb-4">
                    Regular dental care is an important part of oral health. Having healthy teeth and gums isn't a given, though. Brush up on daily dental care tips, and know which signs and symptoms deserve a dentist's attention.

                </p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">+012 345 6789</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ url('img/system/about-us-1.jpg') }}" style="object-fit: cover;" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 32smile End -->


<!-- Why choose us Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
            <h1 class="mb-0">We are here to make you smile</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>Best In Industry</h4>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Award Winning</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ url('img/system/why-choose-us-1.jpg') }}" style="object-fit: cover;" alt="image">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Professional Staff</h4>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>24/7 Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why choose us Start -->


<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
{{--            <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>--}}
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Veneers</h4>
                    <img src="{{ url('img/system/veneers-1.png') }}" alt="">
                    <a class="btn btn-lg btn-primary rounded" href="#">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Teeth Whitening</h4>
                    <img src="{{ url('img/system/teeth-whitenings-1.png') }}" alt="image">
                    <a class="btn btn-lg btn-primary rounded" href="#">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Dental Bridges</h4>
                    <img src="{{ url('img/system/dental-bridges-1.png') }}" alt="image">
                    <a class="btn btn-lg btn-primary rounded" href="#">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Dental Crowns</h4>
                    <img src="{{ url('img/system/dental-crown-1.png') }}" alt="image">
                    <a class="btn btn-lg btn-primary rounded" href="#">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <h4 class="mb-3">Root Canal</h4>
                    <img src="{{ url('img/system/root-canal-1.png') }}" alt="image">
                    <a class="btn btn-lg btn-primary rounded" href="#">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <p class="text-white mb-3">Call Us For More Details</p>
                    <h2 class="text-white mb-0">+012 345 6789</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Pricing Plan Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Family Care Plans</h5>
            <h1 class="mb-0">We are Offering General Dental Care for Our Client's Family</h1>
        </div>
        <div class="row g-0">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="bg-light rounded">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">AFamily Basic</h4>
                        <small class="text-uppercase">Include General examination</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>65.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Year</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>Calculus</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Fillings</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <a href="#" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">AFamily Standard</h4>
                        <small class="text-uppercase">Include Basic Plan</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>175.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Year</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>Tooth extraction</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <a href="#" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="bg-light rounded">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">AFamily Advanced</h4>
                        <small class="text-uppercase">Include othe Plans</small>
                    </div>
                    <div class="p-5 pt-0">
                        <h1 class="display-5 mb-3">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>320.00<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Year</small>
                        </h1>
                        <div class="d-flex justify-content-between mb-3"><span>Whitening</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <div class="d-flex justify-content-between mb-3"><span>Veneers</span><i class="fa fa-check text-primary pt-1"></i></div>
                        <a href="#" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Plan End -->


<!-- Quote Start -->
{{--<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--    <div class="container py-5">--}}
{{--        <div class="row g-5">--}}
{{--            <div class="col-lg-7">--}}
{{--                <div class="section-title position-relative pb-3 mb-5">--}}
{{--                    <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>--}}
{{--                    <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>--}}
{{--                </div>--}}
{{--                <div class="row gx-3">--}}
{{--                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">--}}
{{--                        <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">--}}
{{--                        <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>--}}
{{--                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">--}}
{{--                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">--}}
{{--                        <i class="fa fa-phone-alt text-white"></i>--}}
{{--                    </div>--}}
{{--                    <div class="ps-4">--}}
{{--                        <h5 class="mb-2">Call to ask any question</h5>--}}
{{--                        <h4 class="text-primary mb-0">+012 345 6789</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-5">--}}
{{--                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">--}}
{{--                    <form>--}}
{{--                        <div class="row g-3">--}}
{{--                            <div class="col-xl-12">--}}
{{--                                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <select class="form-select bg-light border-0" style="height: 55px;">--}}
{{--                                    <option selected>Select A Service</option>--}}
{{--                                    <option value="1">Service 1</option>--}}
{{--                                    <option value="2">Service 2</option>--}}
{{--                                    <option value="3">Service 3</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Quote End -->


<!-- customer's feedback Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">customer's feedback</h5>
            <h1 class="mb-0">What Our Clients Say About Our Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ url('img/system/user-1.jpg') }}" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Dental Bridges</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Feedback field
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ url('img/system/user-2.jpg') }}" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Veneers</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Feedback field
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ url('img/system/user-3.jpg') }}" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Root Canal</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Feedback field
                </div>
            </div>
            <div class="testimonial-item bg-light my-4">
                <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ url('img/system/user-4.jpg') }}" style="width: 60px; height: 60px;" >
                    <div class="ps-4">
                        <h4 class="text-primary mb-1">Client Name</h4>
                        <small class="text-uppercase">Dental Crowns</small>
                    </div>
                </div>
                <div class="pt-4 pb-5 px-5">
                    Feedback field
                </div>
            </div>
        </div>
    </div>
</div>
<!-- customer's feedback End -->


<!-- Team Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
            <h1 class="mb-0">Professional Stuffs Ready to Help You</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ url('img/system/team-1.jpg') }}" alt="image">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Dr Riccardo Lo Giudice</h4>
                        <p class="text-uppercase m-0">Clinical Lead Dentist</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ url('img/system/team-2.jpg') }}" alt="image">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Dr Vanesha Nosib</h4>
                        <p class="text-uppercase m-0">Dentist with Special Interest in Periodontology</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ url('img/system/team-3.jpg') }}" alt="image">
                        <div class="team-social">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Dr Stuart Gartone</h4>
                        <p class="text-uppercase m-0">Clinical Director</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Blog Start -->
{{--<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--    <div class="container py-5">--}}
{{--        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">--}}
{{--            <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>--}}
{{--            <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>--}}
{{--        </div>--}}
{{--        <div class="row g-5">--}}
{{--            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">--}}
{{--                <div class="blog-item bg-light rounded overflow-hidden">--}}
{{--                    <div class="blog-img position-relative overflow-hidden">--}}
{{--                        <img class="img-fluid" src="#" alt="">--}}
{{--                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="#">Web Design</a>--}}
{{--                    </div>--}}
{{--                    <div class="p-4">--}}
{{--                        <div class="d-flex mb-3">--}}
{{--                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>--}}
{{--                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>--}}
{{--                        </div>--}}
{{--                        <h4 class="mb-3">How to build a website</h4>--}}
{{--                        <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>--}}
{{--                        <a class="text-uppercase" href="#">Read More <i class="bi bi-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">--}}
{{--                <div class="blog-item bg-light rounded overflow-hidden">--}}
{{--                    <div class="blog-img position-relative overflow-hidden">--}}
{{--                        <img class="img-fluid" src="#" alt="">--}}
{{--                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="#">Web Design</a>--}}
{{--                    </div>--}}
{{--                    <div class="p-4">--}}
{{--                        <div class="d-flex mb-3">--}}
{{--                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>--}}
{{--                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>--}}
{{--                        </div>--}}
{{--                        <h4 class="mb-3">How to build a website</h4>--}}
{{--                        <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>--}}
{{--                        <a class="text-uppercase" href="#">Read More <i class="bi bi-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">--}}
{{--                <div class="blog-item bg-light rounded overflow-hidden">--}}
{{--                    <div class="blog-img position-relative overflow-hidden">--}}
{{--                        <img class="img-fluid" src="#" alt="">--}}
{{--                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="#">Web Design</a>--}}
{{--                    </div>--}}
{{--                    <div class="p-4">--}}
{{--                        <div class="d-flex mb-3">--}}
{{--                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>--}}
{{--                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>--}}
{{--                        </div>--}}
{{--                        <h4 class="mb-3">How to build a website</h4>--}}
{{--                        <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>--}}
{{--                        <a class="text-uppercase" href="#">Read More <i class="bi bi-arrow-right"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Blog Start -->


<!-- Vendor Start -->
{{--<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--    <div class="container py-5 mb-5">--}}
{{--        <div class="bg-white">--}}
{{--            <div class="owl-carousel vendor-carousel">--}}
{{--                <img src="#" alt="">--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Vendor End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="#" class="navbar-brand">
                        <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>32smile</h1>
                    </a>
                    <p class="mt-3 mb-4">Description</p>
{{--                    <form action="">--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">--}}
{{--                            <button class="btn btn-dark">Sign Up</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0"> Street, city, country</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">exmplae@example.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Quick Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                            <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
{{--                            empty--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">32smile</a>. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('lib/wow/wow.min.js') }}"></script>
<script src="{{ url('lib/easing/easing.min.js') }}"></script>
<script src="{{ url('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ url('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ url('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ url('js/main.js') }}"></script>
</body>

</html>
