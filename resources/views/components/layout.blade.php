<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Learnpro - Education University School Kindergarten Learning HTML Template" />
    <meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>Netaji Subhas University | {{ $title }}</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link href="css/menuzord-megamenu.css" rel="stylesheet" />
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-color-set3.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="has-fixed-footer">
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        <div id="preloader">
            <div id="spinner">
                <img alt="" src="images/preloaders/5.gif">
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div>

        @include('include.header')
        {{ $body }}
        @include('include.footer')
        <!-- JS | Custom script for all pages -->

        <!-- Footer Scripts -->
        <!-- JS | Custom script for all pages -->
        <script src="js/custom.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js">
        </script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js">
        </script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js">
        </script>
        <script type="text/javascript"
            src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js">
        </script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js">
        </script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js">
        </script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js">
        </script>
        <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js">
        </script>


        <!-- moving netaji -->
        <script>
            $(document).ready(function() {
        setTimeout(function() {
            setTimeout(function() {
                var netaji = "etaji";
                var netaji_str = netaji.split("");
                var el_netaji = document.getElementById('netaji');
                (function animate() {
                    netaji_str.length > 0 ? el_netaji.innerHTML += netaji_str.shift() : clearTimeout(running); 
                    var running = setTimeout(animate, 500);
                })();
            }, 1000);
            setTimeout(function() {
                var subhas = "ubhas";
                var subhas_str = subhas.split("");
                var el_subhas = document.getElementById('subhas');
                (function animate() {
                    subhas_str.length > 0 ? el_subhas.innerHTML += subhas_str.shift() : clearTimeout(running); 
                    var running = setTimeout(animate, 500);
                })();
            }, 3500);
            setTimeout(function() {
                var university = "niversity";
                var university_str = university.split("");
                var el_university = document.getElementById('university');
                (function animate() {
                    university_str.length > 0 ? el_university.innerHTML += university_str.shift() : clearTimeout(running); 
                    var running = setTimeout(animate, 500);
                })();
            }, 6000);
        }, 3000);
    });
        </script>

        <!-- //moving netaji -->


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