@extends('masters.admin')


@section('main')
{{--category--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-4">
                <h2 class="heading-section">Categories
                    <small style="font-size: 20px">
                    ( Total {{ sizeof($category) }} categories )
                    </small>
                </h2>
            </div>
            <a href="{{ route('admin.create.category') }}"
               class="btn btn-primary">
                <i class='bx bx-duplicate'>   Add new Category</i>
            </a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-primary">

                        <tr>
                            <th>ID</th>
                            <th>name</th>
                            <th>Description</th>
                            <th>Delete</th>
                            <th>Edit</th>
                            <th>Details</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($category as $c)
                            <tr>
                                <td>
                                    <span class="id">
                                        {{$c->id}}
                                    </span>
                                </td>

                                <td>
                                    <div class="name">
                                        {{$c->name}}
                                    </div>

                                </td>
{{--image--}}
{{--                                <td>--}}
{{--                                    <div class="image" style="">--}}
{{--                                        <img src="{{ url('img/admin_upload/'.$c->image) }}" alt="description of image">--}}
{{--                                    </div>--}}
{{--                                </td>--}}

                                <td>
                                    <div class="description">
                                        {{$c->description}}
                                    </div>
                                </td>

                                <td>
                                    {{--                                    delete--}}
                                    <a href="{{ route('admin.delete.confirm.category', ['id' => $c->id]) }}">
                                        <i class='bx bxs-trash bx-sm bx-border-circle'></i>
                                    </a>
                                </td>
                                <td>
                                    {{--                                    edit--}}
                                    <a href="{{ route('admin.edit.category', ['id' => $c->id]) }}">
                                        <i class="bx bxs-edit bx-sm bx-border-circle"></i>
                                    </a>

                                </td>


                                <td>
                                    {{--                                    details--}}

                                    <a href="{{ route('admin.detail.category', ['id' => $c->id]) }}">
                                        <i class="bx bxs-detail bx-sm bx-border-circle"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br>
    @endsection




