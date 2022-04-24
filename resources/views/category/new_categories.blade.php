@extends('masters.admin')



@section('form')

@include('masters.errors')
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>New Category</h3>
                        <p>Fill the form below</p>
                        <form action="{{route('admin.store.category')}}" method="post" enctype='multipart/form-data' novalidate>
                            @csrf
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="name" value="{{old('name')?? $category->name}}" placeholder="Category name">

                            </div>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="description" value="{{old('description')?? $category->description}}" placeholder="Description">
                            </div>

                            <input id="image" name="image" type="file" value="" class="file" >

                            <div class="col-md-3">
                              <select class="form-select mt-3" name="type" >
                                <option selected disabled value="">type</option>
                                <option value="1">Product</option>
                                <option value="2">Service</option>

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

