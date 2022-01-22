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
                            <h2 class="text-theme-colored2 font-36">{{ $get_event->name }}</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="#">Event</a></li>
                                <li class="active">{{ $get_event->name }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-theme-colored">
            <div class="container pt-40 pb-40">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2 id="basic-coupon-clock" class="text-white"></h2>
                        <!-- Final Countdown Timer Script -->

                        <script type="text/javascript">
                            $(document).ready(function() {
                $('#basic-coupon-clock').countdown(  '{{ $get_event->timing }}', function(event) {
                  $(this).html(event.strftime('%D days %H:%M:%S'));
                });
              });
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <ul>
                            <li>
                                <h5>Name of Notice:</h5>
                                <p>{{ $get_event->name }}</p>
                            </li>
                            <li>
                                <h5>Download:</h5>
                                <p> <a  target="_blank"  href="{{ $url.'noticeboard/' . $get_event->images }}">Download Notice</a>.</p>
                            </li>
                            <li>
                                <h5>Department:</h5>
                                <p>{{ $get_event->title }}</p>
                            </li>
                            <li>
                                <h5>Last Date:</h5>
                                <p>{{ $get_event->timing }}</p>
                            </li>
                            <li>
                                <h5>Notice  Date:</h5>
                                <p>{{ $get_event->created_at }}</p>
                            </li>
                          
                            <li>
                                <h5>Website:</h5>
                                <p>https://nsuniv.ac.in/</p>
                            </li>
                            <li>
                                <h5>Share:</h5>
                                <div class="styled-icons icon-sm icon-gray icon-circled">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <div class="owl-carousel-1col" data-nav="true">
                            <div class="item">
                                <a href="{{ $url.'noticeboard/' . $get_event->images }}"
                                    target="_blank">
                                    <object
                                        data="{{ $url.'noticeboard/' . $get_event->images  }}"
                                        type="application/pdf" width="100%" height="100%">

                                    </object></a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <h3 class="text-uppercase font-weight-600 mt-0 mt-sm-30">Notice <span
                                class="text-theme-colored2">Board</span></h3>
                        <div class="double-line-bottom-theme-colored-2"></div>
                        <marquee onMouseOver="this.stop()" onMouseOut="this.start()" class="bg-info" behavior="scroll" direction="up" style="height: 390px; padding: 10px">
                            @foreach ($noticeboard as $event )

                            <article>
                                <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                                    <div class="event-date text-center">
                                        <ul class="text-white">
                                            <li class="font-18 font-weight-700 border-bottom">{{
                                                explode('-',$event->timing)[2] }}</li>
                                            <li class="font-14 text-center text-uppercase mt-5">{{ date_format(
                                                date_create($event->timing),"M") }}</li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('noticeboard',$event->id) }}">
                                        <div class="event-content pt-5">
                                            <h5 class="media-heading font-16 font-weight-600 mb-5"><a
                                                    href="{{ route('noticeboard',$event->id) }}">
                                                    {{ $event->name}}</a></h5>
                                            <span class="mr-10"><i
                                                    class="fa fa-clock-o text-theme-colored2"></i> {{
                                                $event->created_at }} &nbsp; &nbsp;

                                                <span> <i class="fa fa-map-marker text-theme-colored2"></i> {{
                                                    $event->title}}</span>
                                        </div>
                                    </a>
                                </div>
                            </article>
                            @endforeach
                        </marquee>
                    </div>
                </div>
                <div class="row mt-60">
                    <div class="col-md-12">
                        <h3 class="mt-0">Event Description</h3>
                        <div class="double-line-bottom-theme-colored-2"></div>
                        <p>{{ $get_event->descrption}}</p>
                    </div>

                </div>
                {{-- <div class="row mt-40">
                    <div class="col-md-12">
                        <h3 class="mb-20">More data</h3>
                        <div class="double-line-bottom-theme-colored-2"></div>
                        <div class="owl-carousel-5col" data-nav="true">
                            @foreach ($data as $event )
                            <div class="item">
                                <div class="attorney">
                                    <a href="{{ route('noticeboard', $event->id) }}">
                                        <div class="thumb"><img height="170px" width="100%"
                                                src="{{ $url.'event/'.$event->images }}" alt=""></div>
                                        <div class="content text-center">
                                            <h5 class="author mb-0"><a class="text-theme-colored" href="#">{{
                                                    $event->title
                                                    }}</a>
                                            </h5>
                                            <h6 class="title text-gray font-12 mt-0 mb-0">{{ date("d-M-Y",
                                                strtotime($event->timing)); }}</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div> --}}
            </div>
        </section>

       
    </div>
    <!-- end main-content -->

    @endslot
</x-layout>