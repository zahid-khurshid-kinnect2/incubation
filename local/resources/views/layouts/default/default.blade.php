<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CSSPR</title>
    <!-- css -->
    <link href="{{asset('local/public/template/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('local/public/template/css/flexslider.css')}}" rel="stylesheet" media="screen" />
    <link href="{{asset('local/public/template/css/cubeportfolio.min.css')}}" rel="stylesheet" />
    <link href="{{asset('local/public/template/css/style.css')}}" rel="stylesheet" />


{{--<===================Slider CSS Files=========================>--}}
    {{--<!--main file-->--}}
    {{--<link href="{{asset('local/public/css/sub/medical-guide.css')}}" rel="stylesheet" type="text/css">--}}

    {{--<!--Medical Guide Icons-->--}}
    {{--<link href="{{asset('local/public/css/sub/fonts/medical-guide-icons.css')}}" rel="stylesheet" type="text/css">--}}

    {{--<!-- Default Color-->--}}
    {{--<link href="{{asset('local/public/css/sub/default-color.css')}}" rel="stylesheet" id="color"  type="text/css">--}}

    {{--<!--bootstrap-->--}}
    {{--<link href="{{asset('local/public/css/sub/bootstrap.css')}}" rel="stylesheet" type="text/css">--}}

   {{----}}

    {{--<!--Sticky Header-->--}}
    {{--<link href="{{asset('local/public/css/sub/sticky-header.css')}}" rel="stylesheet" type="text/css">--}}

    {{--<!--revolution-->--}}
    {{--<link href="{{asset('local/public/css/sub/style.css')}}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{asset('local/public/css/sub/settings.css')}}" rel="stylesheet" type="text/css">--}}
    {{--<link href="{{asset('local/public/css/sub/extralayers.css')}}" rel="stylesheet" type="text/css">--}}

    {{--<!--Accordion-->--}}
    {{--<link href="{{asset('local/public/css/sub/accordion.css')}}" rel="stylesheet" type="text/css">--}}

    {{--<!--tabs-->--}}
    {{--<link href="{{asset('local/public/css/sub/tabs.css')}}" rel="stylesheet" type="text/css">--}}

    {{--<!--Owl Carousel-->--}}
    {{--<link href="{{asset('local/public/css/sub/owl.carousel.css')}}" rel="stylesheet" type="text/css">--}}

{{--<===================Slider CSS Files End====================================>--}}



    <!-- Mobile Menu -->
    <link rel="stylesheet" type="text/css" href="{{asset('local/public/css/sub/jquery.mmenu.all.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('local/public/css/sub/demo.css')}}" />

    <!--PreLoader-->
    <link href="{{asset('local/public/css/sub/loader.css')}}" rel="stylesheet" type="text/css">





    <!-- Theme skin -->
    <link id="t-colors" href="{{asset('local/public/template/skins/default.css')}}" rel="stylesheet" />

    <!-- boxed bg -->
    <link id="bodybg" href="{{asset('local/public/template/bodybg/bg1.css')}}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="wrapper">
    @include('layouts.default.header')
    @yield('content')

    @include('layouts.default.footer')
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- Scripts -->
<script src="{{asset('local/public/js/app.js')}}"></script>
<script src="{{asset('local/public/template/js/jquery.min.js')}}"></script>
<script src="{{asset('local/public/template/js/modernizr.custom.js')}}"></script>
<script src="{{asset('local/public/template/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('local/public/template/js/bootstrap.min.js')}}"></script>
<script src="{{asset('local/public/template/plugins/flexslider/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('local/public/template/plugins/flexslider/flexslider.config.js')}}"></script>
<script src="{{asset('local/public/template/js/jquery.appear.js')}}"></script>
<script src="{{asset('local/public/template/js/stellar.js')}}"></script>
<script src="{{asset('local/public/template/js/classie.js')}}"></script>
<script src="{{asset('local/public/template/js/uisearch.js')}}"></script>
<script src="{{asset('local/public/template/js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{asset('local/public/template/js/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('local/public/template/js/animate.js')}}"></script>
<script src="{{asset('local/public/template/js/custom.js')}}"></script>



<script>
    $('.close').click(function(e){
        $('.alert').hide('slow');

    });
    $(document).ready(function(){
        $('li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
        });
    });



</script>


</body>
</html>
