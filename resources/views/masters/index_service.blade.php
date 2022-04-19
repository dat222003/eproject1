@extends('masters.admin')


@section('main')
    {{--        service--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-4">
                <h2 class="heading-section">Services</h2>
            </div>
            <a href="{{ route('admin.create.service') }}"
               class="btn btn-primary">
                <i class='bx bx-duplicate'>   Add new Service</i>
            </a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-primary">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            {{--                                    show in detail--}}
                            {{--                                    <th>Description</th>--}}
                            {{--                                    <th>servie_validity_period</th>--}}
                            {{--                                    <th>image</th>--}}
                            <th>Price</th>
                            <th>Delete</th>
                            <th>Edit</th>
                            <th>Detail</th>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach($service as $s)
                            <tr>
                                <td><span class="id">
                                             {{$s->id}}
                                        </span></td>

                                <td><span class="name">
                                             {{$s->name}}

                                        </span></td>

                                <td>
                                    <span class="category">
                                            {{ isset(\App\repos\eproject::getCategoryById($s->categoryid)[0])? \App\repos\eproject::getCategoryById($s->categoryid)[0]->name : '' }}

                                        </span>
                                </td>

{{--                                <td>--}}
{{--                                    <div class="image">--}}
{{--                                        <img src="{{ url('img/admin_upload/'.$s->image) }}" alt="description of image"></div>--}}
{{--                                </td>--}}

                                <td>
                                    <span class="price">
                                             {{$s->price}}
                                        </span>
                                </td>


                                <td>
                                    {{--                                    delete--}}
                                    <a href="{{ route('admin.delete.confirm.service', ['id' => $s->id]) }}"><i class="bx bxs-x-circle bx-sm bx-border-circle"></i></a>
                                </td>
                                <td>
                                    {{--                                    edit--}}
                                    <a href="{{ route('admin.edit.service', ['id' => $s->id]) }}" ><i class="bx bxs-edit bx-sm bx-border-circle"></i></a>

                                </td>


                                <td>
                                    {{--                                    details--}}

                                    <a href="{{ route('admin.detail.service', ['id' => $s->id]) }}"><i class="bx bxs-detail bx-sm bx-border-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection




