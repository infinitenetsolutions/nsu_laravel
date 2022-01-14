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
                    <div class="col-md-4">
                        <ul>
                            <li>
                                <h5>Name of event:</h5>
                                <p>{{ $get_event->name }}</p>
                            </li>
                            <li>
                                <h5>Host:</h5>
                                <p>Netaji Subhas University.</p>
                            </li>
                            <li>
                                <h5>Location:</h5>
                                <p>{{ $get_event->title }}</p>
                            </li>
                            <li>
                                <h5>Date:</h5>
                                <p>{{ $get_event->timing }}</p>
                            </li>
                            <li>
                                <h5>Start Time:</h5>
                                <p>{{ $get_event->start }}</p>
                            </li>
                            <li>
                                <h5>End Time:</h5>
                                <p>{{ $get_event->end }}</p>
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
                    <div class="col-md-8">
                        <div class="owl-carousel-1col" data-nav="true">
                            <div class="item">
                                <img width="360" height="500" src="{{ $url.'event/'.$get_event->images }}" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mt-60">
                    <div class="col-md-12">
                        <h3 class="mt-0">Event Description</h3>
                        <div class="double-line-bottom-theme-colored-2"></div>
                        <p>{{ $get_event->descrption}}</p>
                    </div>

                </div>
                <div class="row mt-40">
                    <div class="col-md-12">
                        <h3 class="mb-20">More Events</h3>
                        <div class="double-line-bottom-theme-colored-2"></div>
                        <div class="owl-carousel-5col" data-nav="true">
                            @foreach ($events as $event )
                            <div class="item">
                                <div class="attorney">
                                    <a href="{{ route('event', $event->id) }}">
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
                </div>
            </div>
        </section>

        <!-- Section: Registration Form -->
        {{-- <section class="divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg1.jpg">
            <div class="container-fluid">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h3 class="title text-theme-colored">Registration Form</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form id="booking-form" name="booking-form" action="includes/event-register.php" method="post"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Name" name="register_name" required=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Email" name="register_email"
                                            class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Phone" name="register_phone"
                                            class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Ticket types</label>
                                        <select name="ticket_type" class="form-control">
                                            <option>One Person</option>
                                            <option>Two Person</option>
                                            <option>Family Pack</option>
                                            <option>Premium</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Event types</label>
                                        <select name="event_type" class="form-control">
                                            <option>Event 1</option>
                                            <option>Event 2</option>
                                            <option>Event 3</option>
                                            <option>All package</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group text-center">
                                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                        <button data-loading-text="Please wait..."
                                            class="btn btn-dark btn-theme-colored btn-sm btn-block mt-20 pt-10 pb-10"
                                            type="submit">Register now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Job Form Validation-->
                        <script type="text/javascript">
                            $("#booking-form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
                        </script>
                    </div>
                </div>
            </div>
        </section> --}}


    </div>
    <!-- end main-content -->

    @endslot
</x-layout>