@extends('masters.admin')

@section('main')


    <h1 class="text-dark">You Are Changing Password</h1>
    <form action="" class="change_password">
{{--        confirm old password--}}
        <div class="input-group lg-4 md-4">
            <input type="text" hidden name="id" value="{{ session()->get('id') }}">
            <input type="password" class="form-control" id="password_old" name="password" placeholder="Old Password">
            <div class="input-group-append">
                <div class="input-group-append">
                    <span class="input-group-text">&nbsp;
                        <i id="show_old" onclick="show_password_old()" class="fa-solid fa-eye"></i>
                        <i id="hide_old" onclick="show_password_old()" class="fa-solid fa-eye-slash"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="dropdown-divider "></div>
{{--        enter new password--}}
        <div class=" input-group lg-4 md-4">
            <input id="password_new_1" type="password" class="form-control password" name="password_new" oninput="strengthChecker()" placeholder="New Password">
            <div class="input-group-append">
                <div class="input-group-append">
                    <span class="input-group-text">&nbsp;
                        <i id="show_new" onclick="show_password_new()" class="fa-solid fa-eye"></i>
                        <i id="hide_new" onclick="show_password_new()" class="fa-solid fa-eye-slash"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="dropdown-divider "></div>
        <div id="strength-bar"></div>
        <p id="msg"></p>

        <div class="dropdown-divider "></div>

{{--        confirm new password == new password--}}
        <div class=" input-group lg-4 md-4">
            <input id="password_new_2" type="password" class="form-control password" name="password_comfirm" placeholder="Confirm New Password">
            {{--            <i id="show" onclick="show_password()" class="fa-solid fa-eye"></i>--}}
            {{--            <i id="hide" onclick="show_password()" class="fa-solid fa-eye-slash"></i>--}}
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="{{ url('js/password.js') }}">
    </script>


@endsection
