<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Page Title -->
    <title>Netaji Subhas University | {{ $title }}</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{asset('images/favicon.png ')}}" rel="shortcut icon" type="image/png">

    <!-- Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/css-plugin-collections.css')}}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{asset('css/menuzord-megamenu.css')}}" rel="stylesheet" />
    <link id="menuzord-menu-skins" href="{{asset('css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{asset('css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    {{-- <link href="{{asset('css/preloader.css')}}" rel="stylesheet" type="text/css"> --}}
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{asset('css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">


    <!-- CSS | Theme Color -->
    <link href="{{ asset('css/colors/theme-skin-color-set3.css')}}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{asset('js/jquery-plugin-collection.js')}}"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="has-fixed-footer">
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        {{-- <div id="preloader">
            <div id="spinner">
                <img alt="" src="images/preloaders/5.gif">
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div> --}}

        @include('include.header')
        {{ $body }}
        @include('include.footer')
     
        <script src="{{  asset('js/custom.js') }}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>
        <script src="{{ asset('js/netajimoving.js') }}"></script>
        
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
            var bLazy = new Blazy({
                    // Options
                    container:'.b-lazy'
                });
            $(document).on('click',function(){
            	document.getElementsByTagName('audio')[0].play();
            });
        </script>
</body>

</html>