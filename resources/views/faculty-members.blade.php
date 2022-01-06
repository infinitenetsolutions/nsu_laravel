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
                            <h2 class="text-theme-colored2 font-36 text-capitalize">Profile Of {{ $data[0]->type }} Members</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li class="active text-capitalize">Profile Of {{ $data[0]->type }} Members</li>
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
                    @foreach ($data as $faculty)
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                            <div class="team-thumb">
                                <img class="img-fullwidth" alt="" src="{{ $url.'teacher/'.$faculty->image_name }}">
                                <div class="team-overlay"></div>
                                <ul class="styled-icons team-social icon-sm">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-details">
                                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">{{ $faculty->name }}</h4>
                                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">{{ $faculty->designation }}
                                <p class="hidden-md"></p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
               <div class="float-right" > {{ $data->onEachSide(0)->links() }} </div> 
            </div>
        </section>
    </div>
    <!-- end main-content -->

    @endslot
</x-layout>