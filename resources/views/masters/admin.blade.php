<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" href="{{ url('img/system/favicon.png') }}">
{{--    <script src="https://use.fontawesome.com/2f2f492fbe.js"></script>--}}
    <title>Admin</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--    <script type='text/javascript' src=''></script>--}}
    <link rel="stylesheet" href="{{ url('css/style.css') }} ">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

        .my-dropdown-toggle::after {
            content: none;
        }

        .l-navbar {
            height: 100%;
            /*position: fixed;*/
            /*overflow-y: scroll;*/
            top: 0;
            bottom: 0;
        }

        #header-fixed {
            position: fixed;
            top: 0px;
            display: none;
            background-color: white;
        }


    </style>


</head>

<div oncontextmenu='return false' class='snippet-body'>

    <body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"><i class='bx bx-menu' id="header-toggle"></i></div>
    </header>


    <div class="l-navbar" id="nav-bar" >
        <nav class="nav">
            <div><a href="{{ route('admin.home') }}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                        class="nav_logo-name">&nbsp;&nbsp;Admin</span> </a>
                <div class="nav_list">
                    <div class="nav-item dropdown
                        {{ (isset($location))? ($location==='service_index')? 'active': '' :''}}
                        {{ (isset($location))? ($location==='admin_index')? 'active': '' :''}}
                        {{ (isset($location))? ($location==='category_index')? 'active': '' :''}}
                        ">
                        <a href="#"
                           class="nav_link {{ (isset($location))? ($location==='admin_index')? 'active': '' :''}} "
                           id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">


                            <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">&nbsp; Data  <i class='bx bxs-down-arrow bx-fade-down-hover '></i>
                            </span>
                        </a>
                        <ul class=" dropdown-menu " aria-labelledby="navbarDropdown">
                            <li>
                                <a href="{{ route('admin.index.category') }}" class="nav_link {{ (isset($location))? ($location==='category_index')? 'active': '' :''}}">
                                    <i class='bx bxs-category  nav_icon'></i>
                                    <span class="nav_name" style="">&nbsp;&nbsp;Category</span>
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a href="{{ route('admin.index.product') }}" class="nav_link {{ (isset($location))? ($location==='product_index')? 'active': '' :''}}" >
                                    <i class='bx bxl-product-hunt  nav_icon'></i>
                                    <span class="nav_name" style="">&nbsp;&nbsp;Product</span>
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a href="{{ route('admin.index.service') }}" class="nav_link {{ (isset($location))? ($location==='service_index')? 'active': '' :''}}">
                                    <i class='bx bxs-duplicate  nav_icon'></i>
                                    <span class="nav_name" style="">&nbsp;&nbsp;Service</span>
                                </a>
                            </li>
                        </ul>
                    </div>
{{--                        admin account dropdown--}}
                    <div class="nav-item dropdown
                        {{ (isset($location))? ($location==='admin_account')? 'active': '' :''}}
                        {{ (isset($location))? ($location==='admin_detail')? 'active': '' :''}}
                        {{ (isset($location))? ($location==='')? 'admin_password': '' :''}}
                        ">
                        <a href="#"
                           class="nav_link "
                           id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='bx bx bx-user nav_icon'></i>
                            <span class="nav_name">&nbsp;&nbsp;Admin Account
                                <i class='bx bxs-down-arrow bx-fade-down-hover '></i>
                            </span>
                        </a>
                        <ul class=" dropdown-menu " aria-labelledby="navbarDropdown2" id=""  >
                            <li>
                                <a href="{{ route('admin.detail.admin', [ 'username' => session()->get('username')]) }}" class="nav_link {{ (isset($location))? ($location==='admin_detail')? 'active': '' :''}}" >
                                    <i class='bx bxs-user-detail nav_icon' ></i>
                                    <span class="nav_name" style="">&nbsp;&nbsp;Account Detail</span>
                                </a>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a href="#" class="nav_link {{ (isset($location))? ($location==='admin_password')? 'active': '' :''}}" >
                                    <i class='bx bx-key nav_icon'></i>
                                    <span class="nav_name" style="">&nbsp;&nbsp;Change Password</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <a href="{{ route('admin.logout') }}" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">&nbsp;&nbsp;SignOut</span>
            </a>
        </nav>
    </div>

    <!--Container Main start-->
    <div class="height-100 bg-light" id="body">
        @if (session('status'))
            <div class="alert alert-success">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ session('status') }}
            </div>
        @endif



        @yield('form')
        @yield('main')


        <br><br><br><br><br>


    </div>
    <!--Container Main end-->
    <script type='text/javascript'
            src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/Javascript'>document.addEventListener("DOMContentLoaded", function (event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        nav.classList.toggle('shownav')
                        toggle.classList.toggle('bx-x')
                        bodypd.classList.toggle('body-pd')
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        });

        document.getElementById('body').onclick = function () {

            var className = ' ' + navbarDropdown.className + ' ';

            if (~className.indexOf(' toggle ')) {
                document.getElementById('navbarDropdown').className = className.replace(' toggle ', ' ');
            }
        };
        // push_content_down
        document.getElementById('navbarDropdown').onclick = function () {

            var className = ' ' + navbarDropdown.className + ' ';

            if (~className.indexOf(' show ')) {
                this.className += ' toggle';
            } else {
                this.className = className.replace(' toggle ', ' ');
            }
        }

        document.getElementById('header-toggle').onclick = function () {

            var className = ' ' + navbarDropdown.className + ' ';

            if (~className.indexOf(' toggle ')) {
                document.getElementById('navbarDropdown').className = className.replace(' toggle ', ' ');
            }
        }

        document.getElementById('navbarDropdown2').onclick = function () {

            var className = ' ' + navbarDropdown.className + ' ';

            if (~className.indexOf(' toggle ')) {
                document.getElementById('navbarDropdown').className = className.replace(' toggle ', ' ');
            }
        }
    </script>

    </body>
    <footer class="bg bg-primary">

    </footer>
</div>


</html>
