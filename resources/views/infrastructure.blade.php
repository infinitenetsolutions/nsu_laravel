<x-layout>
    @slot('title', 'About us')
    @slot('body')
    <!-- Start main-content -->
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7"
            data-bg-img="{{ $url . 'infrastructure/' . $data->header_image }}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">{{ $data->sub_title }}</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">infrastructure</a></li>
                                <li class="active">{{ $data->title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section infrastructure -->
        <section>
            <div class="container pt-70 pb-40">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-5">
                            <h3 class="text-uppercase mt-0">{{ $data->sub_title }} <span
                                    class="text-theme-colored2">NSU</span></h3>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <p class="mt-20">
                                <?php echo $data->description; ?>
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
                                        <img class="img-fullwidth"
                                            src="{{ $url . 'infrastructure/' . $data->image_name }}" alt="project">
                                    </div>

                                    <div class="video-button"></div>
                                    <a class="hover-link" data-lightbox-gallery="youtube-video"
                                        href="{{ $data->permalink }}" title="Youtube Video">Youtube
                                        Video</a>
                                </div>
                                <hr>
                                <div class="thumb">
                                    <img class="img-fullwidth" src="{{ $url . 'infrastructure/' . $data->image_name1 }}"
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
                                            <li><a href="{{ route('infrastructure', $quick->title) }}">
                                                    {{ $quick->sub_title }}
                                                </a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                        @if ($data->title == 'transport' || $data->title == 'transports')
                        <div class="col-md-9">
                            <div
                                class="panel-group toggle accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2">

                                @foreach ($transports as $transport)


                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title"> <a class="collapsed" data-toggle="collapse"
                                                href="#toggle{{ $transport->id }}" aria-expanded="false"><span
                                                    class="open-sub"></span> <big> {{ $transport->name.' - '.$transport->bus_no  }} (Route - {{ $transport->from .'TO'. $transport->to .'VIA'. $transport->via }} (for - {{  $transport->type }} ))</big> </a>
                                        </div>
                                    </div>
                                    <div id="toggle{{ $transport->id }}" class="panel-collapse collapse" aria-expanded="false"
                                        style="height: 0px;">
                                        <div class="table-responsive ">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr class="bg-success ">
                                                        <th class="text-center" >#</th>
                                                        <th class="text-center" >Bus Stoppages	</th>
                                                        <th class="text-center" >Schedule Time
                                                        </th>
                
                                                    </tr>
                                                </thead>
                                                <?php $transportbus=DB::table('transports')->get() ?>
                                                <tbody>
                                                    @foreach ($transportbus as $stop )
                                                    <tr class="text-center">
                                                        <td scope="row ">{{ $stop->id }}</td>
                                                        <td>{{ $stop->stop }}</td>
                                                        <td>{{ $stop->time }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                        @endif



                    </div>


                </div>
        </section>

    </div>


    @endslot
</x-layout>