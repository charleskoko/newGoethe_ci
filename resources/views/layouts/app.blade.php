<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/a8ec0e6e9e.js" crossorigin="anonymous"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">


    <!-- Custom Theme files -->
    <script src="{{asset('js/jquery.min.js')}}"> </script>
    <script src="{{asset('js/bootstrap.min.js')}}"> </script>
    <script src="{{asset('js/screenfull.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
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

    <!----->

    <!--pie-chart--->
    <script src="js/pie-chart.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
    <!--skycons-icons-->
    <script src="js/skycons.js"></script>
    <!--//skycons-icons-->

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
                <h1> <a class="navbar-brand" href="index.html">Minimal</a></h1>
            </div>
            <div class=" border-bottom">
                <div class="drop-men" >
                    <ul class=" nav_1">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">{{ Auth::user()->name }}<i class="caret"></i></span><img src="images/wo.jpg"></a>
                            <ul class="dropdown-menu " role="menu">
                                <li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
                                <li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
                                <li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
                                <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-clipboard"></i>
                                        {{ __('Logout') }}
                                    </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
                                <a href="index.html" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                            </li>

                            <li>
                                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Menu Levels</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="graphs.html" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Graphs</a></li>

                                    <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Maps</a></li>

                                    <li><a href="typography.html" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Typography</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="inbox.html" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Inbox</span> </a>
                            </li>

                            <li>
                                <a href="gallery.html" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Gallery</span> </a>
                            </li>
                            <li>
                                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Pages</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="404.html" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Error 404</a></li>
                                    <li><a href="faq.html" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i>FAQ</a></li>
                                    <li><a href="blank.html" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Blank</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="layout.html" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Grid Layouts</span> </a>
                            </li>

                            <li>
                                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="forms.html" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Basic forms</a></li>
                                    <li><a href="validation.html" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>Validation</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="signin.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Signin</a></li>
                                    <li><a href="signup.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Singup</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
