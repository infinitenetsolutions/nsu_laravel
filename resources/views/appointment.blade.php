<x-layout>
    @slot('title', 'About us')
    @slot('body')

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7"
            data-bg-img="{{ asset('images/bg/bg1.jpg') }}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">Appointment</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Appointment</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Team -->
        <section id="team" class="bg-silver-deep">
            <div class="container">
                <div class="row mtli-row-clearfix">
                    @foreach ($data as $appointment)
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                            <div class="team-thumb">
                                <img height="300px" class="img-fullwidth" alt="" src="{{$url.'appointment/'.$appointment->image_name }} ">
                                <div class="team-overlay"></div>

                            </div>
                            <div class="team-details">
                                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{ $appointment->title
                                    }}</h4>
                                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{
                                    $appointment->sub_title }}
                                </h6>
                                <a href="{{ $url.'appointment/'.$appointment->image_name2 }}" class="hidden-md text-danger"><i class="fa fa-download" aria-hidden="true"></i> Appointment-Letter</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="float-right"> {{ $data->links() }} </div>

            </div>

        </section>

        <!-- Divider: Funfact -->
        <section class="layer-overlay overlay-theme-colored-9" data-bg-img="{{ asset('images/bg/bg1.jpg')}}"
            data-parallax-ratio="0.7">
            <div class="container pt-90 pb-90">
                <div class="row mt-30">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-smile mb-20 text-theme-colored2"></i>
                            <h2 data-animation-duration="2000" data-value="754"
                                class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">Happy Students</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-notebook mb-20 text-theme-colored2"></i>
                            <h2 data-animation-duration="2000" data-value="675"
                                class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">Approved Courses</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-users mb-20 text-theme-colored2"></i>
                            <h2 data-animation-duration="2000" data-value="675"
                                class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">Certified Appointment</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-study mb-20 text-theme-colored2"></i>
                            <h2 data-animation-duration="2000" data-value="1248"
                                class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">Graduate Students</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      
        <!-- Divider: Clients -->
     @include('include.requiters')
    </div>
    <!-- end main-content -->

    @endslot
</x-layout>