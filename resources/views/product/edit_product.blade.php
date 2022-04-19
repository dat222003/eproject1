@extends('masters.admin')

@section('main')

    @include('masters.errors')
    <div class="container">
        <h1 class="display-4">Update An Existing Product</h1>


        <form action="{{route('admin.update.product', ['id' => old('id')?? $product->id]) }}" enctype='multipart/form-data' method="post">
            @csrf

            <input type="hidden" name="id" value="{{old('id')?? $product->id}}">
            <div class="form-group col-md-6">
                <label for="name" class="font-weight-bold">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                       value="{{old('name')?? $product->name}}">

            </div>
            <div class="form-group col-md-6">
                <label for="price" class="font-weight-bold">Price</label>
                <input type="number" class="form-control" id="price" name="price"
                       value="{{old('price')?? $product->price}}" step="0.1">

            </div>
            <div class="form-group col-md-6">
                <label for="weight" class="font-weight-bold">Weight</label>
                <input type="number" class="form-control" id="weight" name="weight"
                       value="{{old('weight')?? $product->weight}}" step="0.1">



            </div>



            <div class="form-group col-md-6">
                <label for="description" class="font-weight-bold">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                       value="{{old('description')?? $product->description}}">
            </div>
            <div class="form-group col-md-6">
                <label for="brand" class="font-weight-bold">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand"
                       value="{{old('brand')?? $product->brand}}">

            </div>
            <div class="form-group col-md-6">
                <label for="country_of_origin" class="font-weight-bold">Country Of Origin</label>
                <input type="text" class="form-control" id="country_of_origin" name="country_of_origin"
                       value="{{old('country_of_origin')?? $product->country_of_origin}}">

            </div>
            <div class="form-group col-md-6">
                <label for="expiration_date" class="font-weight-bold">Expiration Date</label>
                <input type="date" class="form-control" id="expiration_date" name="expiration_date"
                       value="{{old('expiration_date')?? $product->expiration_date}}">

            </div>

            <div class="form-group col-md-6">
                <label for="manufacturer" class="font-weight-bold">Manufacturer</label>
                <input type="text" class="form-control" id="manufacturer" name="manufacturer"
                       value="{{old('manufacturer')?? $product->manufacturer}}">

            </div>

            <div class=" form-group col-md-6">
                <label for="categoryid" class="font-weight-bold">Category ID</label>
                <select name="categoryid" class="form-select mt-3" >
                    <option name="categoryid" selected disabled value="">Category</option>
                    @foreach($category as $c)
                        <option name="categoryid" value="{{ $c->id }}" {{ ($categoryid==$c->id)? 'selected' : '' }}>{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-6 image">
                <label for="image" class="font-weight-bold">Image</label>
                <img src="{{ url('img/admin_upload/'.$product->image) }}" alt="description of image">
                <input id="image" name="image" type="file" value="" class="file" data-browse-on-zone-click="false">
            </div>
            <br><br><br>


            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
