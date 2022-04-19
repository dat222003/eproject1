@extends('masters.admin')


@section('main')

    <h1>Welcome {{ $admin_account->full_name }}</h1>
    <h3>You have Logged in with username: {{ $admin_account->username }} </h3>

@endsection
