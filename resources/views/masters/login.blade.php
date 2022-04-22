<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ url('img/system/login-favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}">
    <!--===============================================================================================-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>


<div class="limiter">
    <div class="container-login100" style="background-image: {{url('img/system/bg-01.jpg')}} ;">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="{{route('login')}}" enctype='multipart/form-data' method="post">
                @csrf
                <span class="login100-form-logo">
						<i class="bx bx-server"></i>
                </span>


                <span class="login100-form-title p-b-34 p-t-27">
						Admin Log in
                </span>

                @if (session('alert'))
                    <div class="alert alert-danger">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        {{ session('alert') }}
                    </div>
                @endif

                <div class="wrap-input100 " data-validate = "Enter username">
                    <input class="input100" type="text" name="username" placeholder="Username" value="{{ session()->pull('username') }}">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>
                @error('username')<span class="alert alert-danger"> {{$message}}</span><br><br> @enderror

                <div class="wrap-input100 " data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password" value="{{ session()->pull('password') }}">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>
                @error('password')<span class="alert alert-danger"> {{$message}} </span><br><br> @enderror

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" value="submit">
                        Login
                    </button>
                </div>

                <!--					<div class="text-center p-t-90">-->
                <!--						<a class="txt1" href="#">-->
                <!--							Forgot Password?-->
                <!--						</a>-->
                <!--					</div>-->
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{ url('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ url('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ url('vendor/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ url('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ url('vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{ url('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ url('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{ url('js/login.js')}}"></script>

</body>
</html>
