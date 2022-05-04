@extends('masters.admin')


@section('main')

    <h1>Welcome <span class="text-danger">{{ $admin_account->full_name }}</span></h1>
    <h3>You have Logged in with username: <span class="text-danger">{{ $admin_account->username }}</span> </h3>
@endsection
