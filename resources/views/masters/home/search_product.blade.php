@extends('masters.home')



@section('main')

    {{--    product list start--}}
    <div >
        <img class="top_background" src="{{ url('img/system/dark.png') }}" alt="image">
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- search for product list Start -->
                <div class="col-lg-12">
                    <div class="row g-5">
                        @if($product != null)
                            @for($i = 0; $i<sizeof($product); $i++)
                                {{--                                @if($i == 6) @break @endif--}}{{--  limit 6 prioducts--}}
                                <div class="col-md-6 col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                                    <div class="blog-item bg-light rounded overflow-hidden">
                                        <a href="#" style="border: none" data-bs-toggle="modal" data-bs-target="#modal{{ $product[$i]->id }}">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <div class="sizing">
                                                <img class="img-fluid" src="{{ url('img/admin_upload/'. $product[$i]->image) }}" alt="image">
                                            </div>
                                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">{{$product[$i]->country_of_origin}}</a>
                                        </div>
                                        </a>
                                        <div class="p-4">
                                            <h1 class="display-5 mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>{{$product[$i]->price}}
                                            </h1>
                                            <!--                                    name-->
                                            <h4 class="mb-3">{{$product[$i]->name}}</h4>
                                            <!--                                    description-->
                                            <p>{{$product[$i]->description}}</p>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $product[$i]->id }}">
                                                Product Detail
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal{{ $product[$i]->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog modal-xl ">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: red"></button>
                                                        </div>
                                                        <div class="modal-body container-fluid">
                                                            <div class="row">
                                                                <div class="col" >
                                                                    <div >
                                                                        <div class="sizing-detail">
                                                                            <img class="img-fluid rounded" src="{{ url('img/admin_upload/'. $product[$i]->image) }}" alt="image ">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-inside col ms-auto border border-2 rounded  bg-light">
                                                                    <hr>
                                                                    <h4>
                                                                        {{$product[$i]->name}}
                                                                    </h4>
                                                                    <h4>
                                                                        <small style="font-size: 18px; line-height: 45px;">Weight: </small>{{$product[$i]->weight}}g
                                                                    </h4>
                                                                    <h4>
                                                                        <small style="font-size: 18px; line-height: 45px;">Brand:</small>
                                                                        {{$product[$i]->brand}}
                                                                    </h4>
                                                                    <p>
                                                                        {{$product[$i]->description}}
                                                                    </p>
                                                                    <h4>
                                                                        <small style="font-size: 18px; line-height: 45px;">Manufacturer: </small>{{$product[$i]->manufacturer}}
                                                                    </h4>
                                                                    <h4>
                                                                        <small style="font-size: 18px; line-height: 20px;">Expiration In: </small>{{$product[$i]->expiration_date}}
                                                                    </h4><br><br>
                                                                    <h1>
                                                                        <small class="align-top " style="font-size: 22px; line-height: 45px;">$</small>{{$product[$i]->price}}
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
{{--                                                        <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal end -->
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        @endif
                        @if($service != null)
                            @for($i = 0; $i<sizeof($service); $i++)
                                    {{--                                @if($i == 6) @break @endif--}}{{--  limit 6 prioducts--}}
                                <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                                    <div class="blog-item bg-light rounded overflow-hidden">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <div class="sizing">
                                                <img class="img-fluid" src="{{ url('img/admin_upload/'. $service[$i]->image) }}" alt="image">
                                            </div>
                                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">{{$service[$i]->service_validity_period}} month</a>
                                        </div>
                                        <div class="p-4">
                                            <h1 class="display-5 mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>{{$service[$i]->price}}
                                            </h1>
                                            <h4 class="mb-3">{{$service[$i]->name}}</h4>
                                            <p>{{$service[$i]->description}}</p>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $service[$i]->id }}">
                                                Service Detail
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal{{ $service[$i]->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl ">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: red"></button>
                                                        </div>
                                                        <div class="modal-body container-fluid">
                                                            <div class="row">
                                                                <div class="col" >
                                                                    <div >
                                                                        <div class="sizing-detail">
                                                                            <img class="img-fluid rounded" src="{{ url('img/admin_upload/'. $service[$i]->image) }}" alt="image ">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sizing-detail col ms-auto border border-2 rounded bg-light">
                                                                    <br>
                                                                    <h4>
                                                                        {{$service[$i]->name}}
                                                                    </h4>
                                                                    <br>
                                                                    <p>
                                                                        {{$service[$i]->description}}
                                                                    </p>
                                                                    <br><br>
                                                                    <h4>
                                                                        <small >The Treatment could last up to: </small>{{$service[$i]->service_validity_period}} Month
                                                                    </h4><br><br>
                                                                    <h1>
                                                                        <small class="align-top " style="font-size: 22px; line-height: 45px;">$</small>{{$service[$i]->price}}
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
{{--                                                        <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal end -->
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        @endif
                            @if( sizeof($service) == null and  sizeof($product) == null) )
                                <div class=" wow slideInUp" data-wow-delay="0.1s">
                                        <h1 style="color: red">Sorry For The Inconvenience We Not Found Anything Match Your Keyword</h1><!--                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>-->
                                </div>
                            @endif
                        {{--                            page start--}}
                        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg m-0">
                                    <li class="page-item disabled">
                                        <a class="page-link rounded-0" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link rounded-0" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        {{--                        page end--}}
                    </div>
                </div>
                <!-- product list End -->

            </div>
        </div>
    </div>
    <!-- search for product End -->
@endsection
