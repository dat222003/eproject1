
@extends('masters.home')




@section('main')
<!-- request Start -->

<div >
    <img class="top_background" src="{{ url('img/system/dark.png') }}" alt="image">
</div>
@include('masters.errors')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Request An Appointment</h5>
                    <h1 class="mb-0">Need A Free Consultation? Please Feel Free to Contact Us</h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                    </div>
                </div>
                <p class="mb-4">We’re accepting new patients! Use the contact form to request an appointment at our office. We’ll get back to you shortly.</p>
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">+012 345 6789</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">

{{--                    regis form start--}}
                    <form action="{{ route('user_store')}}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input type="text" class="form-control bg-light border-0" name="name" required placeholder="Your Name" style="height: 55px;">
                                <input type="email" class="form-control bg-light border-0" name="email" required placeholder="Your Email" style="height: 55px;">
                            </div>
{{--                            <div class="col-12">--}}
{{--                                <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">--}}
{{--                            </div>--}}
                            <div class="col-xl-12">
                                <label class="form-control border-0">Date Of Birth</label>
                                <input type="date" class="form-control bg-light border-0" name="dob" required placeholder="Date of birth" style="height: 55px;">
                            </div>
                            <div class="col-xl-12">
                                <input type="tel" class="form-control bg-light border-0" name="phone" required placeholder="Your Phone Number" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <label class="form-control border-0">Gender</label>
                                <select class="form-select bg-light border-0" name="gender" required style="height: 55px;">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
{{--                            <div class="col-12">--}}
{{--                                <select class="form-select bg-light border-0" style="height: 55px;">--}}
{{--                                    <option selected disabled>Select A Service</option>--}}
{{--                                    @foreach($service as $s)--}}
{{--                                    <option value="{{ $s->id }}">{{ $s->name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" required name="message" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Request</button>
                            </div>
                        </div>
                    </form>

{{--                    regis form end--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- request End -->


@endsection
