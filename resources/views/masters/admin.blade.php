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
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

        .my-dropdown-toggle::after {
            content: none;
        }

    </style>


</head>

<body oncontextmenu='return false' class='snippet-body'>

<body id="body-pd">
<header class="header" id="header">
    <div class="header_toggle"><i class='bx bx-menu' id="header-toggle"></i></div>
</header>


<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div><a href="{{ route('admin.home') }}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                    class="nav_logo-name">Database</span> </a>
            <div class="nav_list">
                <div class="nav-item dropdown">
                    <a href="#" class="nav_link {{ (isset($location))? ($location==='admin_index')? 'active': '' :''}} "
                       id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                    >

                        <script>
                            ////push_content_down
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
                        </script>


                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Table  <i class='bx bxs-down-arrow bx-fade-down-hover '></i></span>
                    </a>
                    {{--                 admin.index--}}

                    <ul class=" dropdown-menu " aria-labelledby="navbarDropdown">
                        <li><a href="{{ route('admin.index.category') }}" class="nav_link">
                                <i class='bx bxs-duplicate nav_icon'></i>
                                <span class="nav_name" style="color:black;">Category</span>
                            </a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a href="{{ route('admin.index.product') }}" class="nav_link">
                                <i class='bx bxs-duplicate nav_icon'></i>
                                <span class="nav_name" style="color:black;">Product</span>
                            </a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a href="{{ route('admin.index.service') }}" class="nav_link">
                                <i class='bx bxs-duplicate nav_icon'></i>
                                <span class="nav_name" style="color:black;">Service</span>
                            </a></li>
                    </ul>
                </div>

                <a href="#" class="nav_link ">
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Admin Account</span>
                </a>

                {{--<a href="{{ route('admin.create.category') }}" class="nav_link {{ (isset($location))? ($location==='new_category')? 'active': '' :''}}">--}}
                {{--                    <i class='bx bx-duplicate nav_icon'></i>--}}
                {{--                    <span class="nav_name">New Category</span> </a>--}}
                {{--                <a href="{{ route('admin.create.product') }}" class="nav_link {{ (isset($location))? ($location==='new_product')? 'active': '' :''}}">--}}
                {{--                    <i class='bx bx-duplicate nav_icon'></i>--}}
                {{--                    <span class="nav_name">New Product</span>--}}
                {{--                </a>--}}
                {{--                <a href="{{ route('admin.create.service') }}" class="nav_link {{ (isset($location))? ($location==='new_service')? 'active': '' :''}}">--}}
                {{--                    <i class='bx bx-duplicate nav_icon'></i>--}}
                {{--                    <span class="nav_name">New Service</span>--}}
                {{--                </a>--}}
                {{--                <a href="#" class="nav_link">--}}
                {{--                    <i class='bx bx-bar-chart-alt-2 nav_icon'></i>--}}
                {{--                    <span class="nav_name">Stats</span> </a>--}}
            </div>
        </div>
        <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                class="nav_name">SignOut</span> </a>
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


    <br><br><br><br>


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

    });</script>
</body>
</body>

</html>
