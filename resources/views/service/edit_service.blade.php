@extends('masters.admin')

@section('main')

    @include('masters.errors')
    <div class="container">
        <h1 class="display-4">Update An Existing Service</h1>


        <form action="{{route('admin.update.service', ['id' => old('id')?? $service->id]) }}" enctype='multipart/form-data' method="post">
            @csrf

            <input type="hidden" name="id" value="{{old('id')?? $service->id}}">
            <div class="form-group col-md-6">
                <label for="name" class="font-weight-bold">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                       value="{{old('name')?? $service->name}}">
            </div>
            <div class="form-group col-md-6">
                <label for="price" class="font-weight-bold">Price</label>
                <input type="number" class="form-control" id="price" name="price"
                       value="{{old('price')?? $service->price}}" step="0.1">

            </div>



            <div class="form-group col-md-6">
                <label for="description" class="font-weight-bold">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                       value="{{old('description')?? $service->description}}">
            </div>
            <div class="form-group col-md-6">
                <label for="service_validity_period" class="font-weight-bold">Service validity period</label>
                <input type="text" class="form-control" id="service_validity_period" name="service_validity_period"
                       value="{{old('service_validity_period')?? $service->service_validity_period}}">


            <div class=" form-group col-md-6">
                <label for="categoryid" class="font-weight-bold">Category ID</label>
                <select name="categoryid" class="form-select mt-3" >
                    <option name="categoryid" selected disabled value="">Category</option>
                    @foreach($category as $c)
                        <option name="categoryid" value="{{ $c->id }}" {{ ($categoryid==$c->id)? 'selected' : '' }}>{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>


            </div>
            <div class="form-group col-md-6 image">
                <label for="image" class="font-weight-bold">Image</label>
                <img src="{{ url('img/admin_upload/'.$service->image) }}" alt="description of image">
                <input id="image" name="image" type="file" class="file" data-browse-on-zone-click="false">
            </div>
            <br><br><br>


            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
