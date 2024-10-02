
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="{{asset('fonts/fonts.css')}}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('fonts/font-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet"type="text/css" href="{{asset('css/nouislider.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <link rel="stylesheet"type="text/css" href="{{asset('css/styles.css')}}"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('images/logo/168.png')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/logo/168.png')}}" />

    <title>@yield('title')</title>
</head>

<body>
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="logo-img">
            <img src="{{asset('images/logo/logo-2.png')}}" alt="logo">
        </div>
        <div class="spinner-circle lg success">
            <span class="spinner-circle1 spinner-child"></span>
            <span class="spinner-circle2 spinner-child"></span>
            <span class="spinner-circle3 spinner-child"></span>
            <span class="spinner-circle4 spinner-child"></span>
            <span class="spinner-circle5 spinner-child"></span>
            <span class="spinner-circle6 spinner-child"></span>
            <span class="spinner-circle7 spinner-child"></span>
            <span class="spinner-circle8 spinner-child"></span>
            <span class="spinner-circle9 spinner-child"></span>
        </div>
    </div>
     <!-- /preload -->
     <div class="header fixed-top line-bt">
        <div class="left">
            <a href="{{asset('javascript:void(0);')}}" class="icon back-btn"><i class="icon-back"></i></a>
        </div>
    @yield('content')
    
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/count-down.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>


   
    
</body>

<!-- Mirrored from themesflat.co/html/taskose/taskose/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 20:46:25 GMT -->
</html>