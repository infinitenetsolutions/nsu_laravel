<x-layout>
    @slot('title', 'About us')
        @slot('body')
            <!-- Start main-content -->
            <div class="main-content">
                <!-- Section: inner-header -->
                <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ asset('images/bg/bg1.jpg') }}">
                    <div class="container pt-120 pb-60">
                        <!-- Section Content -->
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="text-theme-colored2 font-36">Profile Of Faculty Members Details</h2>
                                    <ol class="breadcrumb text-left mt-10 white">
                                        <li><a href="{{ route('index') }}">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Faculty</a></li>

                                        <li class="active">Profile Of Faculty Members Details</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: Experts Details -->
                <section>
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="thumb">
                                        <img class="img-fluid" src="{{ $url.'teacher/'.$data->image_name }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="name font-24 mt-0 mb-0">{{ $data->name }}</h4>
                                    <h5 class="mt-5">{{ $data->designation }}</h5>
                                    <p><?php echo $data->description ?></p>
                                    <ul class="styled-icons icon-dark icon-theme-colored2 icon-sm mt-15 mb-0">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row mt-30">
                                <div class="col-md-4">
                                    <h4 class="line-bottom-theme-colored-2">Address:</h4>
                                    <div class="volunteer-address">
                                        <ul>
                                            <li>
                                                <div class="bg-light media border-bottom p-15 mb-20">
                                                    <div class="media-left">
                                                        <i class="fa fa-map-marker text-theme-colored2 font-24 mt-5"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p>Village 856 Broadway New York</p>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="line-bottom-theme-colored-2">Contact:</h4>

                                    <div class="bg-light media border-bottom p-15 mb-20">
                                        <div class="media-left">
                                            <i class="fa fa-phone text-theme-colored2 font-24 mt-5"></i>
                                        </div>
                                        <div class="media-body">
                                            <p><span>Phone:</span> +262 695 2601<br><span>Email:</span> {{ $data->emailid }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="clearfix">
                                        <h4 class="line-bottom-theme-colored-2">Resume Download:</h4>
                                    </div>
                                    <div class="bg-light media border-bottom p-15">
                                        <div class="media-left">
                                            <i class="fa fa-download text-theme-colored2 font-24 mt-5"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="{{ $url.'teacher/'.$data->resume }}" class="text-underline"><i class="fa fa-file-pdf-o mr-5"></i>Download
                                                PDF</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- end main-content -->
        @endslot
    </x-layout>