@extends('masters.admin')


@section('main')
    {{--admin--}}
    @include('admin.detail_admin')
    <td>
        {{--                                    edit--}}
        <a href="{{ route('admin.edit.admin', ['id' => old('id')?? $admin_account->id]) }}" ><i class="bx bxs-edit bx-sm bx-border-circle"></i></a>

    </td>


    <br><br><br><br><br>



@endsection




