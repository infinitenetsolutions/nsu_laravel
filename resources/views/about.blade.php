<x-layout>
    @slot('title', 'About us')
    @slot('body')
    <!-- Start main-content -->
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7"
            data-bg-img="{{$url.'about/'.$data->header_image}}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">{{ $data->sub_title }}</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li class="active">{{ $data->title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section About -->
        <section>
            <div class="container pt-70 pb-40">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-5">
                            <h3 class="text-uppercase mt-0">{{ $data->sub_title }} <span
                                    class="text-theme-colored2">NSU</span></h3>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <p class="mt-20">
                                <?php echo substr($data->description,0,1690) ?>
                            </p>
                            <!-- <a href="#" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15">Read More</a> -->
                        </div>
                        <div class="col-md-4">
                            <h3 class="text-uppercase mt-0 mt-sm-30">Video <span class="text-theme-colored2">Tour</span>
                            </h3>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <div class="box-hover-effect about-video">
                                <div class="effect-wrapper">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{$url.'about/'.$data->image_name}}"
                                            alt="project">
                                    </div>

                                    <div class="video-button"></div>
                                    <a class="hover-link" data-lightbox-gallery="youtube-video"
                                        href="{{ $data->permalink }}" title="Youtube Video">Youtube
                                        Video</a>
                                </div>
                                <hr>
                                <div class="thumb">
                                    <img class="img-fullwidth" src="{{$url.'about/'.$data->image_name1}}"
                                        alt="project">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="sidebar sidebar-left mt-sm-30 ml-sm-0">

                                <div class="widget border-1px bg-silver-deep p-15 side-bars">
                                    <h4 class="widget-title mb-10 text-white">Quick Links</h4>
                                    <div class="double-line-bottom-theme-colored-2 mt-10 border"></div>
                                    <div class="categories">
                                        <ul class="list-border">
                                            @foreach ($quicks as $quick)
                                            <li><a href="{{ route('about',$quick->title) }}"> {{ $quick->sub_title }}
                                                </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <p class="mt-20">
                                <?php echo substr($data->description,1684,1000000) ?>
                            </p>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    @endslot
</x-layout>