@extends('masters.admin')

@section('main')

    @include('masters.errors')
    <div class="container">
        <h1 class="display-4">Update An Existing Category</h1>

        {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}

{{--        @include('partials.errors')--}}

        <form action="{{route('admin.update.category', ['id' => old('id')?? $category->id]) }}" enctype='multipart/form-data' method="post">
            @csrf

            <input type="hidden" name="id" value="{{old('id')?? $category->id}}">
            <div class="form-group col-md-6">
                <label for="title" class="font-weight-bold">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                       value="{{old('name')?? $category->name}}">

            </div>

            <br>

            <div class="form-group col-md-6">
                <label for="pages" class="font-weight-bold">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                       value="{{old('description')?? $category->description}}">
            </div>

            <br>

            <div class="form-group col-md-6">
                <label for="type" class="font-weight-bold">Type</label>
                <select name="type" class="form-select mt-3" id="type" >
                    <option value="1" {{ $category->type==1? 'selected' : "" }}>Product</option>
                    <option value="2" {{ $category->type==2? 'selected' : ""}}>Service</option>
                </select>
            </div>

            <br>

            <div class="form-group col-md-6 image">
                <label for="author" class="font-weight-bold">Image</label>
                <img src="{{ url('img/admin_upload/'.$category->image) }}" alt="description of image">
                <input id="image" name="image" type="file" value="" class="file" data-browse-on-zone-click="false">
            </div>
            <br><br><br>


            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
