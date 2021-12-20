<x-layout>
    @slot('title', 'Home')
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
                                    <h2 class="text-theme-colored2 font-36">Chancellors Message</h2>
                                    <ol class="breadcrumb text-left mt-10 white">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Pages</a></li>
                                        <li class="active">Current Page</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section Chancellors Message -->
                <section>
                    <div class="container pt-70 pb-40">
                        <div class="section-title">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3 class="text-uppercase mt-0">Chancellors Message <span
                                            class="text-theme-colored2">Learnpro</span></h3>
                                    <div class="double-line-bottom-theme-colored-2"></div>
                                    <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas
                                        voluptatem maiores eaque similique non distinctio voluptates perspiciatis omnis,
                                        repellendus ipsa aperiam, laudantium voluptatum nulla?.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, assumenda, voluptatum.
                                        Libero eligendi molestias iure error animi totam laudantium, aspernatur similique id eos
                                        at consectetur illo culpa, quisquam temporibus esse!</p>
                                    <a href="#"
                                        class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15">Read
                                        More</a>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="text-uppercase mt-0 mt-sm-30">Video <span class="text-theme-colored2">Tour</span>
                                    </h3>
                                    <div class="double-line-bottom-theme-colored-2"></div>
                                    <div class="box-hover-effect Chancellors Message-video">
                                        <div class="effect-wrapper">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/Chancellors Message/video-thumb.jpg"
                                                    alt="project">
                                            </div>
                                            <div class="video-button"></div>
                                            <a class="hover-link" data-lightbox-gallery="youtube-video"
                                                href="https://www.youtube.com/watch?v=F3QpgXBtDeo" title="Youtube Video">Youtube
                                                Video</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                </section>

            </div>
        @endslot
    </x-layout>
