@extends('masters.admin')



@section('form')

    @include('masters.errors')
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>New Product</h3>
                        <p>Fill the form below</p>
                        <form action="{{route('admin.store.product')}}" method="post" enctype='multipart/form-data' novalidate>
                            @csrf
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="name" value="{{old('name')?? $product->name}}" placeholder="Product name">
                            </div>

                            <div class="col-md-6">
                                <input class="form-control" type="number" name="weight" value="{{old('weight')?? $product->weight}}" placeholder="Weight" step="0.1">
                            </div>

                            <div class="col-md-6">
                                <input class="form-control" type="number" name="price" value="{{old('price')?? $product->price}}" placeholder="Price" step="0.1">
                            </div>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="description" value="{{old('description')?? $product->description}}" placeholder="Description">
                            </div>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="brand" value="{{old('brand')?? $product->brand}}" placeholder="Brand">
                            </div>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="country_of_origin" value="{{old('country_of_origin')?? $product->country_of_origin}}" placeholder="Country of origin">
                            </div>

                            <div class="col-md-6">
                                <input class="form-control" type="date" name="expiration_date" value="{{old('expiration_date')?? $product->expiration_date}}" placeholder="Expiration Date">
                            </div>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="manufacturer" value="{{old('manufacturer')?? $product->manufacturer}}" placeholder="Manufacturer">
                            </div>

                            <input id="image" name="image" type="file" class="file" data-browse-on-zone-click="true">
                                <div class="col-md-6">
                                  <select name="categoryid" class="form-select mt-3" >
                                    <option name="categoryid" selected disabled value="">Category</option>
                                      @foreach($category as $c)
                                          @if($c->type == 2) @continue @endif
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

