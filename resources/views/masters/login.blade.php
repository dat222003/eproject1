<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" href="{{ url('img/system/favicon.png') }}">
    <script src="https://use.fontawesome.com/abb70cb27b.js"></script>
    <title>Admin</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    {{--    <script type='text/javascript' src=''></script>--}}
    <link rel="stylesheet" href="{{ url('css/style.css') }} ">
</head>

<style>
    body{
        background-color: aqua;
        --bs-bg-opacity: .5;
        /*margin-right: 600px;*/
    }
</style>

<body>



    <div class="container  ">
        @if (session('alert'))
            <div class="alert alert-danger">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ session('alert') }}
            </div>
        @endif
        <h1 class="display-4 ">Admin Login</h1>
        <br>

        <form action="{{route('admin.login')}}" enctype='multipart/form-data' method="post" class="" >
            @csrf

{{--            <input type="hidden" name="id" value="{{old('id')}}">--}}
            <div class="form-group col-md-6">
                <label for="username" class="font-weight-bold">User Name</label>
                <input type="text" class="form-control" id="username" name="username"
                       value="{{old('username')}}">

            </div>
            <h3 class="text-danger">@error('username') {{$message}} @enderror</h3>

{{--            <div class="form-group col-md-6">--}}
{{--                <label for="full_name" class="font-weight-bold">Full Name</label>--}}
{{--                <input type="text" class="form-control" id="full_name" name="full_name"--}}
{{--                       value="{{old('full_name')}}">--}}

{{--            </div>--}}

{{--            <div class="form-group col-md-6">--}}
{{--                <label for="email" class="font-weight-bold">Email</label>--}}
{{--                <input type="email" class="form-control" id="email" name="email"--}}
{{--                       value="{{old('email')}}">--}}

{{--            </div>--}}

{{--            <div class="form-group col-md-6">--}}
{{--                <label for="phone" class="font-weight-bold">Phone</label>--}}
{{--                <input type="tel" class="form-control" id="phone" name="phone"--}}
{{--                       value="{{old('phone')}}">--}}

{{--            </div>--}}

            <div class="form-group col-md-6">
                <label for="hash_password" class="font-weight-bold">Password</label>
                <input type="password" class="form-control" id="hash_password" name="hash_password"
                       value="{{old('hash_password')}}">

            </div>
            <h3 class="text-danger">@error('hash_password') {{$message}} @enderror</h3>
            <br>

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>





</body>
<script type='text/javascript'
        src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>
</html>
