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
                                    <a href="#photo" class="" data-filter=".photo">Photo</a>
                                    <a href="#video" class="" data-filter=".video">Video</a>
                                </div>
                                <!-- End Portfolio Filter -->

                                <!-- Portfolio Gallery Grid -->
                                <div id="grid" class="gallery-isotope default-animation-effect grid-4 gutter clearfix">
                                    @foreach ($gallery_title as $title)
                                    <div class="gallery-item photo">
                                        <div class="thumb">

                                            <div class="flexslider-wrapper" data-direction="vertical">
                                                <div class="flexslider">
                                                    <ul class="slides">
                                                        <?php $images = DB::table('gallery_tbl')
                                                            ->where('title', $title->title)
                                                            ->get(); ?>
                                                        @foreach ($images as $image)
                                                            @if (strlen($image->link) < 30)
                                                                <li><a href="{{ $url . 'gallery/' . $image->image_name }}"
                                                                        title="{{ $image->title }}"><img width="150px"
                                                                            height="180px"
                                                                            src="{{ $url . 'gallery/' . $image->image_name }}"
                                                                            alt=""></a></li>
                                                            @endif
                                                        @endforeach


                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="overlay-shade"></div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div
                                                        class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="#"><i class="fa fa-picture-o"></i>
                                                        </a>


                                                    </div>

                                                </div>
                                                <span class="text-white "><b> {{ $title->title }} </b></span>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                    <!-- Portfolio Item Start -->
                                    @foreach ($images1 as $title)
                                        @if (strlen($title->link) > 30)
                                            <div class="gallery-item video">
                                                <div class="thumb">
                                                    <img class="img-fullwidth" width="150px" height="180px"
                                                        src="{{ $url . 'gallery/' . $title->image_name }}" alt="project">
                                                    <div class="overlay-shade"></div>
                                                    <div class="icons-holder">
                                                        <div class="icons-holder-inner">
                                                            <div
                                                                class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                <a class="popup-youtube"
                                                                    href="{{ $title->link }}"><i
                                                                        class="fa fa-youtube-play"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endif
                                    @endforeach
                                    <!-- Portfolio Item End -->

                                    <!-- Portfolio Item Start -->
                                 
                                    <!-- Portfolio Item End -->



                                    <!-- Portfolio Item End -->
                                </div>
                                <!-- End Portfolio Gallery Grid -->
                                {{ $images1->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    @endslot
</x-layout>
