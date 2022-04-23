@extends('masters.home')



@section('main')
    @include('masters.elements.carousel')

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
                            <div class="d-flex justify-content-between mb-2"><span>Braces and orthodontics</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="#" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">AFamily Advanced</h4>
                            <small class="text-uppercase">Include other Plans</small>
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


    <!-- Research Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="#" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="#">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="#">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="#" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="#">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="#">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="#" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="#">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="#">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Research Start -->


@endsection
