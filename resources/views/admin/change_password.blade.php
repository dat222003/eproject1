@extends('masters.admin')

@section('main')


    @if (!empty($alert))
        <div class="alert alert-danger">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ $alert }}
        </div>
    @endif

    <h1 class="text-dark">You Are Changing Password</h1>
    <form action="{{ route('admin.change.password',['id'=>session()->get('id')] ) }}" class="change_password" method="post">
        @csrf
        <div class="input-group lg-4 md-4">
{{--            <input type="text" hidden name="id" value="{{ session()->get('id') }}">--}}
            <input type="password" value="{{ $request->password ?? old('password') }}" class="form-control" id="password_old" name="password" placeholder="Old Password" >
            <div class="input-group-append">
                <div class="input-group-append">
                    <span class="input-group-text">&nbsp;
                        <i id="show_old" onclick="show_password_old()" class="fa-solid fa-eye"></i>
                        <i id="hide_old" onclick="show_password_old()" class="fa-solid fa-eye-slash"></i>
                    </span>
                </div>
            </div>
        </div>
        @error('password')<span style="color: #d90718" > {{$message}} </span> @enderror
        <div class="dropdown-divider "></div>
{{--        enter new password--}}
        <div class=" input-group lg-4 md-4">
            <input id="password_new_1" value="{{ $request->password_new ?? old('password_new') }}" type="password" class="form-control password" name="password_new" oninput="strengthChecker()" placeholder="New Password">
            <div class="input-group-append">
                <div class="input-group-append">
                    <span class="input-group-text">&nbsp;
                        <i id="show_new" onclick="show_password_new()" class="fa-solid fa-eye"></i>
                        <i id="hide_new" onclick="show_password_new()" class="fa-solid fa-eye-slash"></i>
                    </span>
                </div>
            </div>
        </div>
        @error('password_new')<span style="color: #d90718 "> {{$message}}</span> @enderror
        <div class="dropdown-divider "></div>
        <div id="strength-bar"></div>
        <p id="msg"></p>
        <hr>

{{--        confirm new password == new password--}}
        <div class=" input-group lg-4 md-4">
            <input id="password_new_2" value="{{ $request->password_confirm ?? old('password_confirm') }}" type="password" class="form-control password" name="password_confirm" placeholder="Confirm New Password">
        </div>
        @error('password_confirm')<span style="color: #d90718 "> {{$message}}</span> @enderror
        <br>
        <button type="submit" value="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="{{ url('js/password.js') }}"></script>


@endsection
