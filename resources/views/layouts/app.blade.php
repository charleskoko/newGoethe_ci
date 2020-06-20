<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/a8ec0e6e9e.js" crossorigin="anonymous"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/lastest/css/toastr.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">


    <!-- Custom Theme files -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/screenfull.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript" src="//cdnjs.cloudfare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }


            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });


        });
    </script>
    @auth
        <script src="{{ asset('js/enable-push.js') }}" defer></script>
    @endauth
</head>
<body>
<div id="wrapper">

<!----->
    <nav class="navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.html">Minimal</a></h1>
        </div>

        <div class=" border-bottom">
            <div class="full-left">

                <form class=" navbar-left-right">
                    <input type="text" id="myInput" placeholder="Search..." aria-label="Search">
                    <input type="submit" value="" class="fa fa-search">
                </form>
                <div class="clearfix"></div>
            </div>

            <div class=" border-bottom">
                <div class="drop-men">
                    <ul class=" nav_1">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span
                                    class=" name-caret">{{ Auth::user()->getNormalName() }}<i class="caret"></i></span>
                                <i class="fas fa-user-circle fa-3x"></i> </a>
                            <ul class="dropdown-menu " role="menu">
                                <li><a href="{{route('profile-view')}}"><i class="fa fa-user"></i>{{__('user.profile')}}
                                    </a></li>
                                @can('isAdmin', App\User::class)
                                    <li><a href="{{route('user-panel')}}"><i
                                                class="fas fa-users-cog"></i>{{__('user.user__panel')}}</a></li>
                                @endcan
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-in-alt"></i>
                                        {{ __('user.logout') }}
                                    </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
                <div class="clearfix">

                </div>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <a href="{{route('home')}}" class=" hvr-bounce-to-right"><i
                                        class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('movie-overview')}}" class=" hvr-bounce-to-right"><i
                                        class="fas fa-film nav_icon "></i><span class="nav-label">Movie</span> </a>
                            </li>

                            <li>
                                <a href="{{route('loanRequest')}}" class=" hvr-bounce-to-right"><i
                                        class="fas fa-file-contract nav_icon "></i><span class="nav-label"></span>loan
                                    list</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="content-main">
            @yield('content')
            <div class="copy">
                <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/"
                                                                            target="_blank">W3layouts</a>
                </p></div>


            <!--//gallery--><!---->

            <div class="clearfix"></div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#table tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        window.setTimeout(function () {
            jQuery('.notification').hide();
        }, 3000);

    })
</script>
</body>
</html>

