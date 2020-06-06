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
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
