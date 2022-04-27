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
                                {{--                                @if($i == 6) @break @endif--}}{{--  limit 6 products--}}
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
                                                                            <img class="img-fluid " src="{{ url('img/admin_upload/'. $product[$i]->image) }}" alt="image ">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-inside col ms-auto">
                                                                    <h4 class="text-inside">
                                                                        {{$product[$i]->name}}
                                                                    </h4>
                                                                    <h4 class="text-inside">
                                                                        <small style="font-size: 18px; line-height: 45px;">Weight: </small>{{$product[$i]->weight}}g
                                                                    </h4>
                                                                    <h4 class="text-inside">
                                                                        <small style="font-size: 18px; line-height: 45px;">Brand:</small>
                                                                        {{$product[$i]->brand}}
                                                                    </h4>
                                                                    <p class="text-inside">
                                                                        {{$product[$i]->description}}
                                                                    </p>
                                                                    <h4 class="text-inside">
                                                                        <small style="font-size: 18px; line-height: 45px;">Manufacturer: </small>{{$product[$i]->manufacturer}}
                                                                    </h4>
                                                                    <h4 class="text-inside">
                                                                        <small style="font-size: 18px; line-height: 20px;">Expiration In: </small>{{$product[$i]->expiration_date}}
                                                                    </h4><br><br>
                                                                    <h1 class="text-inside">
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
{{--                                @if($i == 6) @break @endif--}}{{--  limit 6 products--}}
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
                                                                <div class="sizing-detail col ms-auto ">
                                                                    <hr>
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
{{--                            page start--}}
{{--                        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">--}}
{{--                            <nav aria-label="Page navigation">--}}
{{--                                <ul class="pagination pagination-lg m-0">--}}
{{--                                    <li class="page-item--}}
{{--    previous button--}}
{{--                                        @if(isset($_SERVER['QUERY_STRING']))--}}
{{--                                            @if( request()->page == 1){{'disabled'}}--}}
{{--                                            ">--}}
{{--                                            <a class="page-link rounded-0" href="#" aria-label="Previous">--}}
{{--                                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>--}}
{{--                                            </a>--}}
{{--                                            @else--}}
{{--                                            ">--}}
{{--                                            <a class="page-link rounded-0" href="{{ url()->current(). '?page=' .request()->page-1 }}" aria-label="Previous">--}}
{{--                                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>--}}
{{--                                            </a>--}}

{{--                                            @endif--}}
{{--                                        @else--}}
{{--                                            {{'disabled'}}--}}
{{--                                            ">--}}
{{--                                            <a class="page-link rounded-0" href="#" aria-label="Previous">--}}
{{--                                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>--}}
{{--                                            </a>--}}
{{--                                        @endif--}}
{{--                                    </li>--}}
{{--    links--}}
{{--                                    @if( (($service) == null) || (sizeof($service) == 0) )--}}
{{--                                        @foreach(($product->links()->elements)[0] as $key => $value )--}}
{{--                                            <li class="page-item--}}
{{--                                                @if(isset($_SERVER['QUERY_STRING']))--}}
{{--                                                    @if($_SERVER['QUERY_STRING']=='page='.$key) {{ "active" }} @endif--}}
{{--                                                @else--}}
{{--                                                    @if($key==1) {{ "active" }} @endif--}}
{{--                                                @endif--}}
{{--                                                    "><a class="page-link" href="{{ $value }}">{{ $key }}</a>--}}
{{--                                        @endforeach--}}
{{--                                            --}}{{--    next button--}}
{{--                                            <li class="page-item--}}
{{--                                            @if(isset($_SERVER['QUERY_STRING']))--}}
{{--                                                @if( (request()->page == sizeof(($product->links()->elements)[0])) ){{'disabled'}}--}}
{{--                                                    ">--}}
{{--                                                    <a class="page-link rounded-0" href="#" aria-label="Next">--}}
{{--                                                        <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>--}}
{{--                                                    </a>--}}
{{--                                                @else--}}
{{--                                                    ">--}}
{{--                                                    <a class="page-link rounded-0" href="{{ url()->current(). '?page=' .request()->page+1 }}" aria-label="Next">--}}
{{--                                                        <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>--}}
{{--                                                    </a>--}}
{{--                                                @endif--}}
{{--                                            @else--}}
{{--                                                @if(sizeof(($product->links()->elements)[0]) > 1)--}}
{{--                                                    ">--}}
{{--                                                    <a class="page-link rounded-0" href="{{ url()->current().  '?page=2' }}"--}}
{{--                                                       aria-label="Next">--}}
{{--                                                        <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>--}}
{{--                                                    </a>--}}
{{--                                                @else--}}
{{--                                                    {{'disabled'}}">--}}
{{--                                                    <a class="page-link rounded-0" href="#"--}}
{{--                                                       aria-label="Next">--}}
{{--                                                        <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>--}}
{{--                                                    </a>--}}
{{--                                                @endif--}}
{{--                                            @endif--}}
{{--                                            </li>--}}
{{--                                            --}}{{--  end  next button--}}
{{--                                    @else--}}
{{--                                        @foreach(($service->links()->elements)[0] as $key => $value )--}}
{{--                                                    <li class="page-item--}}
{{--                                                @if(isset($_SERVER['QUERY_STRING']))--}}
{{--                                                    @if($_SERVER['QUERY_STRING']=='page='.$key) {{ "active" }} @endif--}}
{{--                                                @else--}}
{{--                                                    @if($key==1) {{ "active" }} @endif--}}
{{--                                                @endif--}}
{{--                                                        "><a class="page-link" href="{{ $value }}">{{ $key }}</a>--}}
{{--                                        @endforeach--}}
{{--                                            --}}{{--    next button--}}
{{--                                            <li class="page-item--}}
{{--                                            @if(isset($_SERVER['QUERY_STRING']))--}}
{{--                                                @if( (request()->page == sizeof(($service->links()->elements)[0])) ){{'disabled'}}--}}
{{--                                                ">--}}
{{--                                                <a class="page-link rounded-0" href="#" aria-label="Next">--}}
{{--                                                    <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>--}}
{{--                                                </a>--}}
{{--                                                @else--}}
{{--                                                ">--}}
{{--                                                <a class="page-link rounded-0" href="{{ url()->current(). '?page=' .request()->page+1 }}" aria-label="Next">--}}
{{--                                                    <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>--}}
{{--                                                </a>--}}
{{--                                                @endif--}}
{{--                                            @else--}}
{{--                                                @if(sizeof(($service->links()->elements)[0]) > 1)--}}
{{--                                                    ">--}}
{{--                                                    <a class="page-link rounded-0" href="{{ url()->current().  '?page=2' }}"--}}
{{--                                                       aria-label="Next">--}}
{{--                                                        <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>--}}
{{--                                                    </a>--}}
{{--                                                @else--}}
{{--                                                    {{'disabled'}}">--}}
{{--                                                    <a class="page-link rounded-0" href="#"--}}
{{--                                                       aria-label="Next">--}}
{{--                                                        <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>--}}
{{--                                                    </a>--}}
{{--                                                @endif--}}
{{--                                            @endif--}}
{{--                                            </li>--}}
{{--                                            --}}{{--  end  next button--}}
{{--                                    @endif--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
{{--                        </div>--}}
{{--                        page end--}}
                    </div>
                </div>
                <!-- product list End -->
                @if( (($service) == null) || (sizeof($service) == 0) )
                    {{ $product->links() }}
                @endif
                @if( (($product) == null) || (sizeof($product) == 0) )
                    {{ $service->links() }}
                @endif
            </div>
        </div>
    </div>
    <!-- search for product End -->
@endsection
