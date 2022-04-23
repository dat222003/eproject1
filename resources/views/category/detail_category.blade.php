{{--@extends('masters.admin')--}}






<dl class="row">

    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9">{{ $category->id }}</dd>

    <dt class="col-sm-3">Type</dt>
    <dd class="col-sm-9">{{ $category->type }}</dd>

    <dt class="col-sm-3">Name</dt>
    <dd class="col-sm-9">{{ $category->name }}</dd>

    <dt class="col-sm-3">image</dt>
    <dd class="col-sm-9">
        {{ $category->image }}
        <div class="image">
        <img src="{{ url('img/admin_upload/'.$category->image) }}" alt="description of image"></div>
    </dd>

    <dt class="col-sm-3">Description</dt>
    <dd class="col-sm-9">{{$category->description }}</dd>

</dl>

{{--<form action="#">--}}

{{--    <button value="submit" class=" btn btn-primary">Submit</button>--}}

{{--</form>--}}

