@extends('masters.admin')

@section('main')

    @include('masters.errors')

    <div class="container">
        <h1 class="display-4">Update An Admin Account</h1>

        <form action="{{route('admin.update.admin', ['id' => old('id')?? $admin_account->id]) }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{old('id')?? $admin_account->id}}">
            <div class="form-group col-md-6">
                <label for="username" class="font-weight-bold">User Name</label>
                <input type="text" class="form-control" id="username" name="username"
                       value="{{old('username')?? $request->username ?? $admin_account->username}}">

            </div>

            <div class="form-group col-md-6">
                <label for="full_name" class="font-weight-bold">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name"
                       value="{{old('full_name')?? $request->full_name ?? $admin_account->full_name}}">
            </div>

            <div class="form-group col-md-6">
                <label for="email" class="font-weight-bold">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                       value="{{old('email')?? $request->email ?? $admin_account->email}}">
            </div>

            <div class="form-group col-md-6">
                <label for="phone" class="font-weight-bold">Phone</label>
                <input type="tel" class="form-control" id="phone" name="phone"
                       value="{{old('phone')?? $request->phone ?? $admin_account->phone}}">
            </div>

            <div class="form-group col-md-6">
                <label for="password" class="font-weight-bold">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                       value="{{old('password'?? $request->password )}}"
                       placeholder="Please Confirm Your Password">
            </div>

            <br><br><br>


            <button type="submit" class="btn btn-danger">Change</button>
        </form>
    </div>
@endsection
