<x-layout>
    @slot('title', 'About us')
        @slot('body')
            <!-- Start main-content -->
            <div class="main-content">

                <!-- Section: inner-header -->
                <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
                    <div class="container pt-120 pb-60">
                        <!-- Section Content -->
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="text-theme-colored2 font-36">Image Gallery</h2>
                                    <ol class="breadcrumb text-left mt-10 white">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">Image Gallery</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Gallery Grid 3 -->
                <section>
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Portfolio Filter -->
                                    <div class="portfolio-filter">
                                        <a href="#" class="active" data-filter="*">All</a>
                                        <a href="#branding" class="" data-filter=".branding">Campus</a>
                                        <a href="#design" class="" data-filter=".design">Hostal Life</a>
                                        <a href="#photography" class="" data-filter=".photography">Class Room</a>
                                    </div>
                                    <!-- End Portfolio Filter -->

                                    <!-- Portfolio Gallery Grid -->
                                    <div id="grid" class="gallery-isotope default-animation-effect grid-3 gutter clearfix">
                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item photography">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/gallery/1.jpg" alt="project">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div
                                                            class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a data-lightbox="image" href="images/gallery/1.jpg"><i
                                                                    class="fa fa-plus"></i></a>
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="hover-link" data-lightbox="image" href="images/gallery/1.jpg">View
                                                    more</a>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item branding">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/gallery/2.jpg" alt="project">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div
                                                            class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="hover-link" data-lightbox="image" href="images/gallery/2.jpg">View
                                                    more</a>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item design">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/gallery/3.jpg" alt="project">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div
                                                            class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="hover-link" data-lightbox="image" href="images/gallery/3.jpg">View
                                                    more</a>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item photography">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/gallery/4.jpg" alt="project">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div
                                                            class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a class="popup-youtube"
                                                                href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i
                                                                    class="fa fa-youtube-play"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item branding">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/gallery/5.jpg" alt="project">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div
                                                            class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a class="popup-vimeo" href="https://vimeo.com/45830194"><i
                                                                    class="fa fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item design">
                                            <div class="thumb">
                                                <div class="flexslider-wrapper">
                                                    <div class="flexslider">
                                                        <ul class="slides">
                                                            <li><a href="images/gallery/1.jpg"
                                                                    title="Portfolio Gallery - Photo 1"><img
                                                                        src="images/gallery/1.jpg" alt=""></a></li>
                                                            <li><a href="images/gallery/2.jpg"
                                                                    title="Portfolio Gallery - Photo 2"><img
                                                                        src="images/gallery/2.jpg" alt=""></a></li>
                                                            <li><a href="images/gallery/3.jpg"
                                                                    title="Portfolio Gallery - Photo 3"><img
                                                                        src="images/gallery/3.jpg" alt=""></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div
                                                            class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="#"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item photography">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/gallery/1.jpg" alt="project">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div
                                                            class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a data-lightbox="image" href="images/gallery/1.jpg"><i
                                                                    class="fa fa-plus"></i></a>
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="hover-link" data-lightbox="image" href="images/gallery/2.jpg">View
                                                    more</a>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item design">
                                            <div class="thumb">
                                                <div class="flexslider-wrapper" data-direction="vertical">
                                                    <div class="flexslider">
                                                        <ul class="slides">
                                                            <li><a href="images/gallery/6.jpg"
                                                                    title="Portfolio Gallery - Photo 1"><img
                                                                        src="images/gallery/6.jpg" alt=""></a></li>
                                                            <li><a href="images/gallery/5.jpg"
                                                                    title="Portfolio Gallery - Photo 2"><img
                                                                        src="images/gallery/5.jpg" alt=""></a></li>
                                                            <li><a href="images/gallery/4.jpg"
                                                                    title="Portfolio Gallery - Photo 3"><img
                                                                        src="images/gallery/4.jpg" alt=""></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div
                                                            class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a href="#"><i class="fa fa-picture-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->

                                        <!-- Portfolio Item Start -->
                                        <div class="gallery-item photography">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/gallery/1.jpg" alt="project">
                                                <div class="overlay-shade"></div>
                                                <div class="icons-holder">
                                                    <div class="icons-holder-inner">
                                                        <div
                                                            class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                            <a data-lightbox="image" href="images/gallery/1.jpg"><i
                                                                    class="fa fa-plus"></i></a>
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="hover-link" data-lightbox="image"
                                                    href="images/gallery/1.jpg">View more</a>
                                            </div>
                                        </div>
                                        <!-- Portfolio Item End -->
                                    </div>
                                    <!-- End Portfolio Gallery Grid -->

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        @endslot
    </x-layout>
