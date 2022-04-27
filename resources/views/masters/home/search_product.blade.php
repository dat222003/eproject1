@extends('masters.home')



@section('main')
{{--    {{ dd($both) }}--}}
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
                        @if(sizeof($both) >= 1)
                            @for($i = ($both->firstItem()-1),$x = 0 ; $x<sizeof($both); $i++,$x++)
                                <div class="col-md-6 col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                                    <div class="blog-item bg-light rounded overflow-hidden">
                                        <a href="#" style="border: none" data-bs-toggle="modal" data-bs-target="#modal{{ str_replace(' ', '', $both[$i]->name) }}">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <div class="sizing">
                                                <img class="img-fluid" src="{{ url('img/admin_upload/'. $both[$i]->image) }}" alt="image">
                                            </div>
                                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">{{$both[$i]->country_of_origin??$both[$i]->service_validity_period . ' Month'}}</a>
                                        </div>
                                        </a>
                                        <div class="p-4">
                                            <h1 class="display-5 mb-3">
                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>{{$both[$i]->price}}
                                            </h1>
                                            <!--                                    name-->
                                            <h4 class="mb-3">{{$both[$i]->name}}</h4>
                                            <!--                                    description-->
                                            <p>{{$both[$i]->description}}</p>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ str_replace(' ', '', $both[$i]->name) }}">
                                                View Details
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal{{ str_replace(' ', '', $both[$i]->name) }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                            <img class="img-fluid rounded" src="{{ url('img/admin_upload/'. $both[$i]->image) }}" alt="image ">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-inside col ms-auto ">
                                                                    <hr>
                                                                    <h4 class="text-inside">
                                                                        {{$both[$i]->name}}
                                                                    </h4>
                                                                    <h4 class="text-inside">
                                                                        <small style="font-size: 18px; line-height: 45px;">{{$both[$i]->weight ? 'Weight: ' : ''}}</small>{{$both[$i]->weight ? $both[$i]->weight.'g' : ''}}
                                                                    </h4>
                                                                    <h4 class="text-inside">
                                                                        <small style="font-size: 18px; line-height: 45px;">{{$both[$i]->brand ? 'Brand: ' : ''}}</small>
                                                                        {{$both[$i]->brand ?? ''}}
                                                                    </h4>
                                                                    <p class="text-inside">
                                                                        {{$both[$i]->description}}
                                                                    </p>
                                                                    <h4 class="text-inside">
                                                                        <small style="font-size: 18px; line-height: 45px;">{{$both[$i]->munufacturer ? 'Manufacturer: ' : ''}}</small>{{$both[$i]->manufacturer ?? ''}}
                                                                    </h4>
                                                                    <h4 class="text-inside">
                                                                        <small style="font-size: 18px; line-height: 20px;">{{ $both[$i]->expiration_date? 'Expiration In: ' : 'The Treatment could last up to: '}}</small>{{$both[$i]->expiration_date ?? $both[$i]->service_validity_period.' Month'}}
                                                                    </h4><br><br>
                                                                    <h1 class="text-inside">
                                                                        <small class=" align-top " style="font-size: 22px; line-height: 45px;">$</small>{{$both[$i]->price ?? ''}}
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
{{--                        @if($service != null)--}}
{{--                            @for($i = 0; $i<sizeof($service); $i++)--}}
{{--                                    --}}{{--                                @if($i == 6) @break @endif--}}{{----}}{{--  limit 6 prioducts--}}
{{--                                <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">--}}
{{--                                    <div class="blog-item bg-light rounded overflow-hidden">--}}
{{--                                        <div class="blog-img position-relative overflow-hidden">--}}
{{--                                            <div class="sizing">--}}
{{--                                                <img class="img-fluid" src="{{ url('img/admin_upload/'. $service[$i]->image) }}" alt="image">--}}
{{--                                            </div>--}}
{{--                                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4">{{$service[$i]->service_validity_period}} month</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="p-4">--}}
{{--                                            <h1 class="display-5 mb-3">--}}
{{--                                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>{{$service[$i]->price}}--}}
{{--                                            </h1>--}}
{{--                                            <h4 class="mb-3">{{$service[$i]->name}}</h4>--}}
{{--                                            <p>{{$service[$i]->description}}</p>--}}
{{--                                            <!-- Button trigger modal -->--}}
{{--                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $service[$i]->id }}">--}}
{{--                                                Service Detail--}}
{{--                                            </button>--}}
{{--                                            <!-- Modal -->--}}
{{--                                            <div class="modal fade" id="modal{{ $service[$i]->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl ">--}}
{{--                                                    <div class="modal-content">--}}
{{--                                                        <div class="modal-header">--}}
{{--                                                            <h5 class="modal-title" id="exampleModalLabel"></h5>--}}
{{--                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: red"></button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-body container-fluid">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col" >--}}
{{--                                                                    <div >--}}
{{--                                                                        <div class="sizing-detail">--}}
{{--                                                                            <img class="img-fluid rounded" src="{{ url('img/admin_upload/'. $service[$i]->image) }}" alt="image ">--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="sizing-detail col ms-auto border border-2 rounded bg-light">--}}
{{--                                                                    <br>--}}
{{--                                                                    <h4>--}}
{{--                                                                        {{$service[$i]->name}}--}}
{{--                                                                    </h4>--}}
{{--                                                                    <br>--}}
{{--                                                                    <p>--}}
{{--                                                                        {{$service[$i]->description}}--}}
{{--                                                                    </p>--}}
{{--                                                                    <br><br>--}}
{{--                                                                    <h4>--}}
{{--                                                                        <small >The Treatment could last up to: </small>{{$service[$i]->service_validity_period}} Month--}}
{{--                                                                    </h4><br><br>--}}
{{--                                                                    <h1>--}}
{{--                                                                        <small class="align-top " style="font-size: 22px; line-height: 45px;">$</small>{{$service[$i]->price}}--}}
{{--                                                                    </h1>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <!-- Modal end -->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endfor--}}
{{--                        @endif--}}
                        @if( (sizeof($service) == 0) && (sizeof($product) == 0) )
                            <div class=" wow slideInUp" data-wow-delay="0.1s">
                                    <h1 style="color: red">Sorry For The Inconvenience We Not Found Anything Match Your Keyword</h1><!--                                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>-->
                            </div>
                        @endif
                        <!-- paginate Start -->
{{--                        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">--}}
{{--                            <nav aria-label="Page navigation">--}}
{{--                                <ul class="pagination pagination-lg m-0">--}}
{{--                                    <li class="page-item--}}
{{--    previous button--}}
{{--                                    @if(isset($_SERVER['QUERY_STRING']))--}}
{{--                                        @if( request()->page == 1){{'disabled'}}--}}
{{--                                        ">--}}
{{--                                        <a class="page-link rounded-0" href="#" aria-label="Previous">--}}
{{--                                            <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>--}}
{{--                                        </a>--}}
{{--                                        @else--}}
{{--                                            ">--}}
{{--                                            <a class="page-link rounded-0" href="{{ url()->current(). '?page=' .request()->page-1 }}" aria-label="Previous">--}}
{{--                                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>--}}
{{--                                            </a>--}}

{{--                                        @endif--}}
{{--                                    @else--}}
{{--                                            {{'disabled'}}--}}
{{--                                            ">--}}
{{--                                            <a class="page-link rounded-0" href="#" aria-label="Previous">--}}
{{--                                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>--}}
{{--                                            </a>--}}
{{--                                    @endif--}}
{{--                                    </li>--}}
{{--                                    @foreach($both as $key => $value)--}}
{{--                                        <li class="page-item--}}
{{--                                        @if(isset($_SERVER['QUERY_STRING']))--}}
{{--                                            @if($_SERVER['QUERY_STRING']=='page='.$key) {{ "active" }} @endif--}}
{{--                                        @else--}}
{{--                                            @if($key==1) {{ "active" }} @endif--}}
{{--                                        @endif--}}
{{--                                            "><a class="page-link" href="{{ $value }}">{{ $key }}</a>--}}
{{--                                    @endforeach--}}
{{--                                    --}}{{--    next button--}}
{{--                                    <li class="page-item--}}
{{--                                    @if(isset($_SERVER['QUERY_STRING']))--}}
{{--                                        @if( ( request()->page == sizeof($both) ) ){{'disabled'}}--}}{{-- check if current page is final --}}
{{--                                            ">--}}
{{--                                            <a class="page-link rounded-0" href="#" aria-label="Next">--}}
{{--                                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>--}}
{{--                                            </a>--}}
{{--                                        @else--}}
{{--                                            ">--}}
{{--                                            <a class="page-link rounded-0" href="{{ url()->current(). '?page=' .request()->page+1 }}" aria-label="Next">--}}
{{--                                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>--}}
{{--                                            </a>--}}
{{--                                        @endif--}}
{{--                                    @else--}}
{{--                                        @if( sizeof($both) > 1 )--}}{{-- check if there are more than 1 page -> next button lead to next page --}}
{{--                                            ">--}}
{{--                                            <a class="page-link rounded-0" href="{{ url()->current().  '?page=2' }}"--}}
{{--                                               aria-label="Next">--}}
{{--                                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>--}}
{{--                                            </a>--}}
{{--                                        @else--}}
{{--                                            {{'disabled'}}--}}
{{--                                            ">--}}
{{--                                            <a class="page-link rounded-0" href="#"--}}
{{--                                               aria-label="Next">--}}
{{--                                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>--}}
{{--                                            </a>--}}
{{--                                        @endif--}}
{{--                                    @endif--}}
{{--                                    </li>--}}
{{--                                    --}}{{--  end  next button--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
{{--                        </div>--}}
                        <!-- paginate End -->
                    </div>
                </div>
                <!-- product list End -->
                {{ $both->links() }}
            </div>
        </div>
    </div>
    <!-- search for product End -->
@endsection
