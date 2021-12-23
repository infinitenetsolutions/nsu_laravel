<!-- Header -->
<header id="header" class="header header-floating">
    <div class="header-nav navbar-sticky navbar-sticky-animated">

        <!-- head -->
        <div class="header-top bg-theme-colored2 sm-text-center" style="background: rgb(255,82,65);
background: linear-gradient(90deg, rgba(255,82,65,1) 0%, rgba(199,0,19,1) 100%)!important;
                padding: 5px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="widget text-white">
                            <ul class="list-inline xs-text-center text-white">
                                <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white">

                                        <b style="font-size:25px;" class="all-time-shadow"
                                            style="filter: drop-shadow(3px 3px 1px #222);">
                                            <span class="theme-orange pr-2 pl-2"
                                                style="background: #fff;color:#ff5245;padding:5px 10px;">N</span>
                                            <span id="netaji" class="text-white"></span>
                                            <span class="theme-orange pr-2 pl-2"
                                                style="background: #fff;color:#ff5245;padding:5px 10px;">S</span>
                                            <span id="subhas" class="text-white"></span>
                                            <span class="theme-orange pr-2 pl-2"
                                                style="background: #fff;color:#ff5245;padding:5px 10px;">U</span>
                                            <span id="university" class="text-white"></span>
                                        </b><br>
                                        <!-- <b><sub style="font-size:15px;color:#fff;">Jamshedpur,
                                                        Jharkhand</sub></b> -->

                                    </a> </li>
                                <!-- <li class="m-0 pl-10 pr-10">
                                            <a href="#" class="text-white"><i
                                                    class="fa fa-envelope-o text-white mr-5"></i>
                                                contact@yourdomain.com</a>
                                        </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 pr-0">
                        <div class="widget">
                            <ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center mt-5">
                                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">
                            <li class="m-0 pl-10"> <a href="ajax-load/login-form"
                                    class="text-white ajaxload-popup"><i class="fa fa-user-o mr-5 text-white"></i> Login
                                    /</a> </li>
                            <li class="m-0 pl-0 pr-10">
                                <a href="ajax-load/register-form" class="text-white ajaxload-popup"><i
                                        class="fa fa-edit mr-5"></i>Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //head -->
        <div class="header-nav-wrapper">
            <div class="container">
                <nav id="menuzord-right" class="menuzord default no-bg">
                    <!-- <a class="menuzord-brand switchable-logo pull-left flip mb-15" href="index-mp-layout1">
              <img class="logo-default" src="images/logo-wide-white.png" alt="">
              <img class="logo-scrolled-to-fixed" src="images/logo-wide.png" alt="">
            </a> -->
                    <ul class="menuzord-menu">
                        <li class="active"><a href="#home">Home</a> </li>
                        <li><a href="#home">About</a>
                            <ul class="dropdown">
                                <li><a href="page-course-gird"> WHO WE ARE</a></li>
                                <li><a href="page-course-list"> MISSION & VISION</a></li>
                                <li><a href="{{route('chancellors-message')}}"> CHANCELLOR'S MESSAGE</a></li>
                                <li><a href="page-course-details"> VICE CHANCELLOR'S MESSAGE</a></li>
                                <li><a href="page-course-details"> PRO VICE CHANCELLOR'S MESSAGE</a></li>
                                <li><a href="page-course-details"> REGISTRAR'S MESSAGE</a></li>
                                <li><a href="{{route('dean-academics')}}"> DEAN STUDENTS WELFARE</a></li>
                                <li><a href="page-course-details"> PROCTOR</a></li>
                                <li><a href="page-course-details"> HEAD OF ADMISSION</a></li>
                                <li><a href="page-course-details"> MEET OUR H.O.D</a></li>
                                <li><a href="page-course-details"> THE GOVERNING BODY</a></li>
                                <li><a href="page-course-details"> PROFILE OF FACULTY MEMBERS</a></li>
                                <li><a href="page-course-details"> TEACHING & LEARNING RESOURCES</a></li>
                                <li><a href="page-course-details"> MEET OUR H.O.D</a></li>
                                <li><a href="page-course-details"> MEET OUR H.O.D</a></li>
                                <li><a href="page-course-details"> MEET OUR H.O.D</a></li>
                            </ul>
                        </li>

                        <li><a href="#home">Courses</a>
                            <ul class="dropdown">
                                <li><a href="page-course-gird">Course Gird</a></li>
                                <li><a href="page-course-list">Course List</a></li>
                                <li><a href="page-course-details">Course Details</a></li>
                            </ul>
                        </li>

                        <li><a href="#home">Apply Online</a>
                            <ul class="dropdown">
                                <li><a href="page-course-gird">Offline Admission</a></li>
                                <li><a href="page-course-list">Online Admission</a></li>

                            </ul>
                        </li>

                        <li><a href="#home">Infrastructure</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('library') }}">Library</a></li>
                                <li><a href="{{ route('it-infrastructure') }}">IT Infrastructure</a></li>
                                <li><a href="{{ route('class-room') }}">Classroom</a></li>
                                <li><a href="{{ route('laboratory') }}">Laboratory</a></li>
                                <li><a href="{{ route('accommodation') }}"> ACCOMMODATION</a></li>
                                <li><a href="{{ route('auditorium') }}"> AUDITORIUM</a></li>
                                <li><a href="{{ route('canteen') }}"> CANTEEN</a></li>
                                <li><a href="{{ route('transport') }}"> TRANSPORT</a></li>
                                <li><a href="{{ route('sports') }}"> SPORTS</a></li>
                                <li><a href="{{ route('conference-room') }}"> CONFERENCE ROOM</a></li>
                                <li><a href="{{ route('moot-court') }}"> MOOT COURT</a></li>
                                <li><a href="{{ route('traning-kitchen') }}"> TRAINING KITCHEN</a></li>
                                <li><a href="{{ route('fitness-center') }}"> FITNESS CENTER</a></li>
                                <li><a href="{{ route('mass-comm-studio') }}"> MASS COMM. STUDIO</a></li>
                            </ul>
                        </li>
                        <li><a href="#home">Placement</a>
                            <ul class="dropdown">
                                <li><a href="page-course-gird"> PLACEMENTS</a></li>
                                <li><a href="page-course-list"> APPOINTMENT LETTER</a></li>
                                <li><a href="{{ route('library') }}"> OUR ESTEEMED RECRUITERS</a></li>
                                <li><a href="{{ route('library') }}"> OUR ESTEEMED RECRUITERS</a></li>

                            </ul>
                        </li>
                        <li><a href="#home">Student</a>
                            <ul class="dropdown">
                                <li><a href="page-course-gird"> ANTI RAGGING CELL</a></li>
                                <li><a href="page-course-list"> ACADEMIC CALENDAR</a></li>
                                <li><a href="{{ route('library') }}"> DOWNLOADS</a></li>
                                <li><a href="{{ route('library') }}"> LOGIN</a></li>
                                <li><a href="{{ route('library') }}"> PH.D RESULT 2021</a></li>
                                <li><a href="{{ route('library') }}"> DOWNLOADS</a></li>
                                <li><a href="{{ route('library') }}"> DOWNLOADS</a></li>
                            </ul>
                        </li>
                        <li><a href="#home">Gallery</a>
                            <ul class="dropdown">
                                <li><a href="page-course-gird">UNIVERSITY GALLERY</a></li>
                                <li><a href="page-course-list">MEDIA GALLERY</a></li>

                            </ul>
                        </li>

                        <li><a href="#home">Career</a>

                        </li>

                        <li><a href="{{route('contact-us')}}">Contact</a>

                        </li>






                        <!-- <li><a href="javascript:void(0)">Mega Menu <span class="label label-danger">New</span></a>
                <div class="megamenu megamenu-bg-img">
                  <div class="megamenu-row">
                    <div class="col3">
                      <h4 class="megamenu-col-title">Latest News:</h4>
                      <div class="widget">
                        <div class="latest-posts">
                          <article class="post media-post clearfix pb-0 mb-10">
                            <a href="blog-single-right-sidebar" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                              <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar">Post Title Here</a></h5>
                              <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                          </article>
                          <article class="post media-post clearfix pb-0 mb-10">
                            <a href="blog-single-right-sidebar" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                              <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar">Industrial Coatings</a></h5>
                              <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                          </article>
                          <article class="post media-post clearfix pb-0 mb-10">
                            <a href="blog-single-right-sidebar" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                              <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar">Storefront Installations</a></h5>
                              <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                          </article>
                          <article class="post media-post clearfix pb-0 mb-10">
                            <a href="blog-single-right-sidebar" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                              <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar">Industrial Coatings</a></h5>
                              <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <div class="col3">
                      <h4 class="megamenu-col-title">Featured News:</h4>
                      <article class="post clearfix">
                        <div class="entry-header">
                          <div class="post-thumb"> <img class="img-responsive" src="images/blog/1.jpg" alt=""> </div>
                        </div>
                        <div class="entry-content">
                          <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua</p>
                          <a class="btn btn-dark btn-theme-colored" href="#">read more..</a> </div>
                      </article>
                    </div>
                    <div class="col3">
                      <h4 class="megamenu-col-title">Promotional Offer:</h4>
                      <img src="images/megamenu/megamenu-sale-off.jpg" alt="">
                    </div>
                    <div class="col3">
                      <h4 class="megamenu-col-title">Quick Links:</h4>
                      <ul class="list-dashed list-icon">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Disclaimer</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Copyright Notice</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li> -->
                        <li><a href="javascript:void(0)">Courses </a>
                            <div class="megamenu">
                                <div class="megamenu-row">
                                    <div class="col3">
                                        <ul class="list-unstyled list-dashed">
                                            <li><a href="shortcode-accordion">Ph.D</a></li>
                                            <li><a href="shortcode-alerts"> BBA</a></li>
                                            <li><a href="shortcode-animations">MBA</a></li>
                                            <li><a href="shortcode-background-html5-video">B. Com</a></li>
                                            <li><a href="shortcode-before-after-slider"> M. Com</a></li>
                                            <li><a href="shortcode-blockquotes"> B. Pharm</a></li>
                                            <li><a href="shortcode-box-hover-effect"> D. Pharm</a></li>
                                            <li><a href="shortcode-button-groups-and-dropdowns"> B. Sc IN HOTEL
                                                    MANAGEMENT</a></li>
                                            <li><a href="shortcode-button-hover-effect"> B. Ed</a></li>
                                            <li><a href="shortcode-buttons"> M. A IN EDUCATION</a></li>
                                            <li><a href="shortcode-call-to-actions"> BCA</a></li>
                                            <li><a href="shortcode-charts">MCA</a></li>


                                        </ul>
                                    </div>
                                    <div class="col3">
                                        <ul class="list-unstyled list-dashed">
                                            <li><a href="shortcode-columns-grids"> LL.B</a></li>
                                            <li><a href="shortcode-divider">BBA LL.B (HONS.)</a></li>
                                            <li><a href="shortcode-dropcaps">B. Sc (BOTANY)</a></li>
                                            <li><a href="shortcode-datetime-datepicker"> B. Sc (ZOOLOGY)</a></li>
                                            <li><a href="shortcode-datetime-timepicker"> B. Sc (MATHEMATICS)</a></li>
                                            <li><a href="shortcode-datetime-datetimepicker"> B. Sc (PHYSICS)</a></li>
                                            <li><a href="shortcode-datetime-datepair"> B. Sc (CHEMISTRY)</a></li>
                                            <li><a href="shortcode-flickr-feed"> B. Sc IN AGRICULTURE</a></li>
                                            <li><a href="shortcode-flipbox">M. Sc (BOTANY)</a></li>
                                            <li><a href="shortcode-forms"> M. Sc (ZOOLOGY)</a></li>
                                            <li><a href="shortcode-funfacts">M. Sc (MATHEMATICS)</a></li>
                                            <li><a href="shortcode-iconbox">M. Sc (PHYSICS)</a></li>


                                        </ul>
                                    </div>
                                    <div class="col3">
                                        <ul class="list-unstyled list-dashed">

                                            <li><a href="shortcode-icon-7stroke"> M. Sc (CHEMISTRY)</a></li>
                                            <li><a href="shortcode-icon-elegant-icons"> B. A</a></li>
                                            <li><a href="shortcode-icon-flat-color-icons"> M. A</a></li>
                                            <li><a href="shortcode-icon-fontawesome"> POLYTECHNIC</a></li>
                                            <li><a href="shortcode-icon-fontawesome-tutorial"> B. A IN JOURNALISM & MASS
                                                    COMM</a></li>
                                            <li><a href="shortcode-icon-strokegap"><span
                                                        class="strokegap-icon strokegap-icon-WorldWide"></span> Icons
                                                    Strokegap</a></li>
                                            <li><a href="shortcode-image-box"> CERTIFICATE COURSE IN DATA SCIENCE</a>
                                            </li>
                                            <li><a href="shortcode-instagram"> B.SC NURSING</a></li>
                                            <li><a href="shortcode-labels-badges"> ANM (AUXILIARY NURSE AND MIDWIFE)</a>
                                            </li>
                                            <li><a href="shortcode-listgroup-panels"> GNM (GENERAL NURSING AND
                                                    MIDWIFERY)</a></li>


                                        </ul>
                                    </div>
                                    <div class="col3">
                                        <ul class="list-unstyled list-dashed">


                                            <li><a href="shortcode-lists">DMLT (DIPLOMA IN MEDICAL LABORATORY AND
                                                    TECHNOLOGY)</a></li>
                                            <li><a href="shortcode-maps">Maps</a></li>
                                            <li><a href="shortcode-media-embed"> BMLT (BACHELOR IN MEDICAL LABORATORY
                                                    AND TECHNOLOGY)</a></li>
                                            <li><a href="shortcode-modal-bootstrap"> DOTT (DIPLOMA IN OPERATION THEATER
                                                    TECHNOLOGY)</a></li>
                                            <li><a href="shortcode-modal-lightbox"> DXTR (DIPLOMA IN X- RAY TECHNOLOGY
                                                    AND RADIOGRAPHY)</a></li>

                        </li>
                        <li><a href="shortcode-progressbar">
                                Progress Bars</a></li>
                        <li><a href="shortcode-piechart">
                                Pie Charts</a></li>
                        <li><a href="shortcode-responsive">
                                Responsive</a></li>
                        <li><a href="shortcode-separator"> Separator</a></li>

                    </ul>
            </div>
        </div>
    </div>
    </li>
    </ul>
    </nav>
    </div>
    </div>
    </div>
</header>
