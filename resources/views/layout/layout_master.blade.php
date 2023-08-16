<!DOCTYPE html>
<html>
<head>
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{asset('coffee_break-web/web/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('coffee_break-web/web/css/style.css')}}" rel='stylesheet' type='text/css' />
    <script type=text/javascript src="{{asset('coffee_break-web/web/js/jquery.min.js')}}"></script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="{{asset('coffee_break-web/web/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('coffee_break-web/web/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <style>
        /* Đặt kích thước và khoảng cách cho navbar */
        .navbar {
            padding: 15px;
            background-color: #333;
            color: #fff;
        }

        /* Kiểu dáng cho các liên kết trên thanh điều hướng */
        .navbar-nav li.nav-item {
            margin: 0 10px;
        }

        /* Kiểu dáng cho liên kết trong dropdown menu */
        .dropdown-menu {
            background-color: #333;
            border: none;
            border-radius: 0;
            margin-top: 5px;
        }

        .dropdown-item {
            color: #fff;
            padding: 10px 20px;
            transition: background-color 0.2s;
        }

        .dropdown-item:hover {
            background-color: #555;
        }

        /* Kiểu dáng cho nút đăng xuất */
        #logout-form {
            display: none; /* Ẩn nút đăng xuất mặc định */
        }

    </style>
    <!--start-smoth-scrolling-->
    @yield('css')
</head>
<body>
<!-- header-->
@include('partials.header')

<!-- script-for-menu -->
<script>
    $("span.menu").click(function(){
        $(" ul.navig").slideToggle("slow" , function(){
        });
    });
</script>
<!-- script-for-menu -->

<!-- banner -->
@include('partials.banner')

@yield('content')

<!--slide-->
{{--@include('partials.slide')--}}

<!--slide-starts-->
@include('partials.slide')
<!--slide-end-->

<!--footer-->
@include('partials.footer')
@yield('js')
</body>
</html>
