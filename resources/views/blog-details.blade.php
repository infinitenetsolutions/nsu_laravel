<x-layout>
    @slot('title', 'About us')
    @slot('body')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7"
            data-bg-img="https://www.nsuniv.ac.in/nsuadmin/public/upload/about/202112280856091.jpg">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">{{ $get_news->title }}</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="#">News</a></li>
                                <li class="active">{{ $get_news->title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section blog -->
        <section>
            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row">
                    <div class="col-md-8">
                        <div class="single-service">

                            <img width="100%" src="{{ $url.'latestnews/'.$get_news->images }}" alt="">
                            <h3 class="text-uppercase mt-30 mb-10">{{ $get_news->title }}</h3>
                            <div class="double-line-bottom-theme-colored-2 mt-10"></div>
                            <p>{{$get_news->massage}}</p>


                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">

                            <div class="widget border-1px bg-silver-deep p-15">
                                <h4 class="widget-title line-bottom-theme-colored-2">Latest News</h4>
                                <div class="product-list">

                                    @foreach ($news as $latest )
                                    <div class="media">
                                        <a class="media-left pull-left flip" href="#">
                                            <img class="media-object thumb" width="80"
                                                src="{{ $url.'latestnews/'.$get_news->images }}" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading product-title mb-2 "><a href="#">{{ $latest->title
                                                    }}</a></h5>

                                            <span class="pt-2"> <i class="fa fa-calendar" aria-hidden="true"></i>
                                                {{ $latest->created_at }} </span>


                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    @endslot
</x-layout>