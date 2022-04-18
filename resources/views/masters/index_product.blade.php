@extends('masters.admin')


@section('main')
{{--        product--}}
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-4">
                        <h2 class="heading-section">Products</h2>
                    </div>
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
{{--                                    <th>Weight</th>--}}
{{--                                    <th>Description</th>--}}
{{--                                    <th>Brand</th>--}}
{{--                                    <th>Country_of_origin</th>--}}
{{--                                    <th>Expiration_date</th>--}}
{{--                                    <th>manufacturer</th>--}}
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                    <th>Detail</th>
                                </tr>

                                </thead>
                                <tbody>
                                  @foreach($product as $p)
                                <tr>
                                    <td><span class="id">
                                             {{$p->id}}
                                        </span></td>

                                    <td><span class="name">
                                             {{$p->name}}

                                        </span></td>

                                    <td><span class="category">
                                            {{ isset(\App\repos\eproject::getCategoryById($p->categoryid)[0])? \App\repos\eproject::getCategoryById($p->categoryid)[0]->name : '' }}

                                        </span></td>

                                    <td>
                                        <div class="image">
                                        <img src="{{ url('img/admin_upload/'.$p->image) }}" alt="description of image"></div>
                                    </td>

                                    <td><span class="price">
                                             {{$p->price}}
                                        </span></td>
                                    <td>
                                        {{--                                    delete--}}
                                        <a href="{{ route('admin.delete.confirm.product', ['id' => $p->id]) }}"><i class="bx bxs-x-circle bx-sm bx-border-circle"></i></a>
                                    </td>
                                    <td>
                                        {{--                                    edit--}}
                                        <a href="{{ route('admin.edit.product', ['id' => $p->id]) }}" ><i class="bx bxs-edit bx-sm bx-border-circle"></i></a>

                                    </td>


                                    <td>
                                        {{--                                    details--}}

                                        <a href="{{ route('admin.detail.product', ['id' => $p->id]) }}"><i class="bx bxs-detail bx-sm bx-border-circle"></i></a>
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




