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
                                    <h2 class="text-theme-colored2 font-36">Media Gallery</h2>
                                    <ol class="breadcrumb text-left mt-10 white">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">Media Gallery</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Gallery Grid 3 -->
                <div class="main-content">
                    <!-- Section: inner-header -->

                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="heading-line-bottom">
                                        <h4 class="heading-title"> <i class="fa fa-picture-o" aria-hidden="true"></i> Media
                                            Gallery</h4>
                                    </div>

                                    <!-- Portfolio Gallery Grid -->
                                    <div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix"
                                        data-lightbox="gallery">
                                        <!-- Portfolio Item Start -->
                                        @foreach ($images as $title)
                                            <div class="gallery-item">
                                                <div class="thumb">
                                                    <img class="img-fullwidth" src="{{$url.$title->image_name}}" alt="project">
                                                    <div class="overlay-shade"></div>
                                                    <div class="text-holder">
                                                        <div class="title text-center">{{$title->title}}</div>
                                                    </div>
                                                    <div class="icons-holder">
                                                        <div class="icons-holder-inner">
                                                            <div
                                                                class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                <a href="{{$url.'mediagallery/'.$title->image_name}}" data-lightbox-gallery="gallery"
                                                                    title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                                    <a href="{{$url.'mediagallery/'.$title->image_name}}" data-lightbox-gallery="gallery"
                                                                    title="Your Title Here"><i class="fa fa-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach

                                    </div>
                                    <!-- End Portfolio Gallery Grid -->
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <nav>
                                            <ul class="pagination theme-colored pull-right xs-pull-center mb-xs-40">
                                                <div class="d-flex justify-content-center">
                                                    {!! $images->links()!!}
                                                </div>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                </div>

            </div>
            <!-- end main-content -->

            <!-- Footer -->
        @endslot
    </x-layout>
