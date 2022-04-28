@extends('masters.admin')



@section('form')

    @include('masters.errors')
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>New Service</h3>
                        <p>Fill the form below</p>
                        <form action="{{route('admin.store.service')}}" method="post" enctype='multipart/form-data' novalidate>
                            @csrf
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="name" value="{{old('name')?? $service->name}}" placeholder="service name">

                            </div>

                            <div class="col-md-6">
                                <input class="form-control" type="number" name="price" value="{{old('price')?? $service->price}}" placeholder="Price" step="0.1">

                            </div>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="description" value="{{old('description')?? $service->description}}" placeholder="Description">

                            </div>


                            <div class="col-md-6">
                                <input class="form-control" type="number" name="service_validity_period" value="{{old('service_validity_period')?? $service->service_validity_period}}" placeholder="Service validity period">

                            </div>

                            <input id="image" name="image" type="file" class="file" data-browse-on-zone-click="true">


                            <div class="col-md-6">
                                <select name="categoryid" class="form-select mt-3" >
                                    <option name="categoryid" selected disabled value="">Category</option>
                                    @foreach($category as $c)
                                        @if($c->type == 1) @continue @endif
                                        <option name="categoryid" value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

