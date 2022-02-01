<x-layout>
    @slot('title', 'Home')
    @slot('body')

        <div class="modal fade" id="myModal" style="z-index: 9999;">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!4v1580704861797!6m8!1m7!1sCAoSLEFGMVFpcE5SNWxBeEZ1Wks4Y0tiSFVQd2lvT01oVTl5VWRwa3BFbTdiSDVj!2m2!1d22.809599581886!2d86.264062143551!3f36.707148350228515!4f1.820868563873006!5f0.7820865974627469"
                            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
        <!--//tour-->

        <!-- Start main-content -->
        <div class="main-content">
            <!-- Section: home -->
            <!-- Start main-content -->
            <div class="main-content">
                <!-- Section: home -->

                <!-- Divider: Call To Action -->


                <figure class="videoplayer " data-aos="fade-right">
                    <video class="b-lazy b-loaded" controls="false" title="NSU::Top private engineering in jharkhand"
                        autoplay loop="" muted="">
                        <source type="video/mp4" src="{{ asset('video/main.mp4') }}">
                    </video>
                    <!-- slider start here -->
                </figure>


                <section id="about">
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-6 text-justify">
                                    <h5 class="text-uppercase text-gray-darkgray mb-15" style="font-size: 24px;
                                  color: #333333!important;
                                  font-weight: 900;">About <span class="text-theme-colored2">us</span></h5>

                                    <div class="double-line-bottom-theme-colored-2"></div>
                                    <!-- <h3 class="font-weight-500 font-30 font- mt-10">Make Your Dream<span class="text-theme-colored"> Education</span> Site with Our LearnPro Template</h3> -->

                                    @if ($about[0]->title == 'who-we-are')
                                        <p>
                                            <?php echo substr($about[0]->description, 30, 850); ?>
                                        </p>

                                        <!-- <img src="images/signature.png" alt="" class="mt-10 mb-15"> -->
                                        <div><a href="{{ route('about', 'who-we-are') }}"
                                                class="btn btn-theme-colored mb-sm-30">Read More</a></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box-hover-effect about-video">
                                        <div class="effect-wrapper">
                                            <div class="thumb">
                                                <img class="img-responsive img-fullwidth"
                                                    src="{{ $url . 'about/' . $about[0]->image_name }}" alt="">
                                            </div>
                                            <div class="video-button"></div>
                                            <a class="hover-link" data-lightbox-gallery="{{ $about[0]->permalink }}"
                                                title="Youtube Video">Youtube
                                                Video</a>
                                        </div>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </section>


                <!--start Funfacts Section-->
                <section class="parallax layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg1.jpg"
                    data-parallax-ratio="0.4">
                    <div class="container pt-90 pb-90">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                                    <div class="funfact text-center">
                                        <div class="odometer-animate-number text-white font-weight-600 font-48"
                                            data-value="5100" data-theme="minimal">0</div>
                                        <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                                        <h5 class="text-white text-uppercase mb-0">Happy Students</h5>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                                    <div class="funfact text-center">
                                        <div class="odometer-animate-number text-white font-weight-600 font-48"
                                            data-value="200" data-theme="minimal">0</div>
                                        <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                                        <h5 class="text-white text-uppercase mb-0">Approved Courses</h5>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                                    <div class="funfact text-center">
                                        <div class="odometer-animate-number text-white font-weight-600 font-48"
                                            data-value="20" data-theme="minimal">0</div>
                                        <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                                        <h5 class="text-white text-uppercase mb-0">Certified Teachers</h5>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
                                    <div class="funfact text-center">
                                        <div class="odometer-animate-number text-white font-weight-600 font-48"
                                            data-value="600" data-theme="minimal">0</div>
                                        <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                                        <h5 class="text-white text-uppercase mb-0">Graduate Students</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section About -->
                <section>
                    <div class="container pt-50 pb-40">
                        <div class="section-title">
                            <div class="row">

                                <div class="col-md-8">
                                    <h3 class="text-uppercase font-weight-600 mt-0 mt-sm-30">Video <span
                                            class="text-theme-colored2">Tour</span></h3>
                                    <div class="double-line-bottom-theme-colored-2"></div>
                                    <div class="box-hover-effect about-video">
                                        <div class="effect-wrapper">
                                            <div class="thumb">
                                                <img class="img-fullwidth" src="images/about/tour.jpeg" alt="project">
                                            </div>

                                            <a href="" data-toggle="modal" data-target="#myModal">
                                                <div class="video-button"></div>
                                            </a>
                                            <!-- <a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/watch?v=F3QpgXBtDeo" title="Youtube Video">Youtube Video</a> -->



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="text-uppercase font-weight-600 mt-0 mt-sm-30">Notice <span
                                            class="text-theme-colored2">Board</span></h3>
                                    <div class="double-line-bottom-theme-colored-2"></div>
                                    <marquee onMouseOver="this.stop()" onMouseOut="this.start()" class="bg-info"
                                        behavior="scroll" direction="up" style="height: 315px; padding: 10px">
                                        @foreach ($noticeboard as $event)

                                            <article>
                                                <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                                                    <div class="event-date text-center">
                                                        <ul class="text-white">
                                                            <li class="font-18 font-weight-700 border-bottom">
                                                                {{ explode('-', $event->timing)[2] }}
                                                            </li>
                                                            <li class="font-14 text-center text-uppercase mt-5">
                                                                {{ date_format(date_create($event->timing), 'M') }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <a href="{{ route('noticeboard', $event->id) }}">
                                                        <div class="event-content pt-5">
                                                            <h5 class="media-heading font-16 font-weight-600 mb-5"><a
                                                                    href="{{ route('noticeboard', $event->id) }}">
                                                                    {{ $event->name }}</a></h5>
                                                            <span class="mr-10"><i
                                                                    class="fa fa-clock-o text-theme-colored2"></i>
                                                                {{ $event->created_at }}
                                                                &nbsp; &nbsp;

                                                                <span> <i class="fa fa-map-marker text-theme-colored2"></i>
                                                                    {{ $event->title }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </article>
                                        @endforeach
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Section: Team -->
                <section id="team">
                    <div class="container pb-40">
                        <div class="section-title">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2 class="text-uppercase title">Head of <span
                                            class="text-theme-colored2">University</span></h2>
                                    <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>
                                    <p class="text-uppercase mb-0">We Have Highly Qualified </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="team-members">
                                @foreach ($hou as $university_head)


                                    <div class="col-md-3">
                                        <div class="team-members maxwidth400 mb-30">
                                            <div class="team-thumb">
                                                <img height="190px"
                                                    src="{{ $url . 'teacher/' . $university_head->image_name }}" alt=""
                                                    class="img-fullwidth teachers">
                                            </div>
                                            <div class="team-bottom-part bg-silver-deep p-15 pb-0">
                                                <h4
                                                    class="text-uppercase font-raleway text-theme-colored title-border font-weight-600 line-bottom-center m-0">
                                                    {{ $university_head->name }} <span class="text-gray font-13 ml-5">-
                                                        {{ $university_head->designation }}</span>
                                                </h4>
                                                <p class="font-13 mt-10 mb-10 ">
                                                    <?php echo substr($university_head->description, 0, 130); ?>.. <a
                                                        href="{{ route('faculty-details', $university_head->id) }}"
                                                        class="text-danger">
                                                        View details</a>
                                                </p>
                                                <ul class="styled-icons icon-theme-colored2">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Divider: Testimonials -->
                <section class="parallax Divider layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg8.jpg"
                    data-parallax-ratio="0.4">
                    <div class="container pt-70 pb-30">
                        <div class="section-title">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2 class="text-uppercase text-white title">What <span
                                            class="text-theme-colored2">People </span>Say</h2>
                                    <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>
                                    <p class="text-uppercase mb-0">Student and Parents Opinion</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-30">
                                <div class="owl-carousel-2col boxed" data-dots="true">
                                    @foreach ($testimonials as $testimonial)
                                        <div class="item">
                                            <div class="testimonial pt-10">
                                                <div class="thumb pull-left mb-0 mr-0">
                                                    <img class="img-thumbnail img-circle" alt=""
                                                        src="{{ $url . 'testimonial/' . $testimonial->testimonial_image }}"
                                                        style="width:100px">
                                                </div>
                                                <div class="testimonial-content">
                                                    <h4 class="text-white font-weight-300 mt-0">
                                                        <?php echo $testimonial->message; ?>
                                                    </h4>
                                                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">
                                                        {{ $testimonial->testimonial_name }}
                                                        -
                                                        {{ $testimonial->testimonial_course }}
                                                        ({{ $testimonial->testimonial_batch }})</h5>
                                                    <h6 class="text-gray-darkgray mt-5">
                                                        {{ $testimonial->testimonial_company }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: Events -->
                <section>
                    <div class="container pb-50">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-5">
                                    <h3 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30">
                                        <i class="fa fa-question-circle-o mr-10"></i>Upcoming <span
                                            class="text-theme-colored2">Events</span>
                                    </h3>
                                    <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2"
                                        id="accordion6" role="tablist" aria-multiselectable="true">
                                        @foreach ($events as $event)
                                            <article>
                                                <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                                                    <div class="event-date text-center">
                                                        <ul class="text-white">
                                                            <li class="font-18 font-weight-700 border-bottom">
                                                                {{ explode('-', $event->timing)[2] }}
                                                            </li>
                                                            <li class="font-14 text-center text-uppercase mt-5">
                                                                {{ date_format(date_create($event->timing), 'M') }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <a href="{{ route('event', $event->id) }}">
                                                        <div class="event-content pt-5">
                                                            <h5 class="media-heading font-16 font-weight-600 mb-5"><a
                                                                    href="{{ route('event', $event->id) }}">
                                                                    {{ $event->name }}</a></h5>
                                                            <span class="mr-10"><i
                                                                    class="fa fa-clock-o text-theme-colored2"></i>
                                                                {{ $event->start }}
                                                                pm - {{ $event->end }} pm</span>
                                                            <span> <i class="fa fa-map-marker text-theme-colored2"></i>
                                                                {{ $event->title }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </article>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h3 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30">
                                        <i class="fa fa-photo mr-10"></i>See Our <span
                                            class="text-theme-colored2">Gallery</span>
                                    </h3>
                                    <div class="gallery-isotope default-animation-effect grid-4 gutter clearfix"
                                        data-lightbox="gallery">
                                        <!-- Portfolio Item Start -->

                                        @foreach ($gallery as $images)

                                            <div class="gallery-item">
                                                <div class="thumb">
                                                    <img alt="project"
                                                        src="{{ $url . 'gallery/' . $images->image_name }}"
                                                        class="img-fullwidth">
                                                    <div class="overlay-shade"></div>
                                                    <div class="icons-holder">
                                                        <div class="icons-holder-inner">
                                                            <div
                                                                class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                                <a href="{{ $url . 'gallery/' . $images->image_name }}"
                                                                    data-lightbox-gallery="gallery"><i
                                                                        class="fa fa-picture-o"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Portfolio Item End -->
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Section: blog -->
                <section id="blog" class="bg-silver-deep">
                    <div class="container pb-40">
                        <div class="section-title">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="text-uppercase title">Latest <span class="text-theme-colored2">News
                                        </span>
                                    </h2>
                                    <p class="text-uppercase mb-0">See All Time Latest News</p>
                                    <div class="double-line-bottom-theme-colored-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="owl-carousel-2col owl-nav-top" data-nav="true">

                                        @foreach ($news as $latest)
                                            <div class="item">
                                                <article class="post clearfix mb-30">
                                                    <div class="entry-header">
                                                        <div class="post-thumb thumb">
                                                            <img height="500px"
                                                                src="{{ $url . 'latestnews/' . $latest->images }}" alt=""
                                                                class="img-responsive img-fullwidth">
                                                        </div>
                                                        <div
                                                            class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                                                            <ul>
                                                                <li class="font-16 text-white font-weight-600">
                                                                    {{ substr(explode('-', $latest->updated_at)[2], 0, 2) }}
                                                                </li>
                                                                <li class="font-12 text-white text-uppercase">
                                                                    {{ date_format(date_create($latest->updated_at), 'M') }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="entry-content bg-white p-15">
                                                        <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                                            <div class="media-body pl-0">
                                                                <div class="event-content pull-left flip">
                                                                    <h4
                                                                        class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5">
                                                                        <a
                                                                            href="blog-single-left-sidebar.html">{{ $latest->title }}</a>
                                                                    </h4>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="mt-5">
                                                            <?php echo substr($latest->massage, 0, 160); ?>
                                                        </p>
                                                        <a class="btn btn-default btn-flat font-12 mt-10 ml-5"
                                                            href="{{ route('news', ['id' => $latest->id]) }}"> View
                                                            Details</a>
                                                    </div>
                                                </article>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <!-- <h2 class="mt-0 line-height-1"><span class="text-theme-colored2">Contact us</span></h2> -->
                                            <!-- <div class="double-line-bottom-theme-colored-2 mt-15 mb-10"></div> -->
                                            <!-- <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda.</p> -->
                                            <div class="p-30 mt-0 bg-dark-transparent-2">
                                                <h3 class="title-pattern mt-0"><span class="text-white">Request
                                                        <span class="text-theme-colored2"
                                                            style="color:#000!important;">Information</span></span></h3>
                                                <!-- Appilication Form Start-->
                                                <form id="reservation_form" name="reservation_form"
                                                    class="reservation-form mt-20" method="post"
                                                    action="includes/reservation.php" novalidate="novalidate">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group mb-20">
                                                                <input placeholder="Enter Name" id="reservation_name"
                                                                    name="reservation_name" required=""
                                                                    class="form-control" aria-required="true"
                                                                    type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group mb-20">
                                                                <input placeholder="Email" id="reservation_email"
                                                                    name="reservation_email" class="form-control"
                                                                    required="" aria-required="true" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group mb-20">
                                                                <input placeholder="Phone" id="reservation_phone"
                                                                    name="reservation_phone" class="form-control"
                                                                    required="" aria-required="true" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group mb-20">
                                                                <div class="styled-select">
                                                                    <select id="person_select" name="person_select"
                                                                        class="form-control" required=""
                                                                        aria-required="true">
                                                                        <option value="">Choose Subject</option>
                                                                        <option value="1 Person">Software Engineering
                                                                        </option>
                                                                        <option value="2 Person">Computer Science
                                                                            engineering</option>
                                                                        <option value="3 Person">Accounting Technologies
                                                                        </option>
                                                                        <option value="Family Pack">BACHELOR`S DEGREE
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group mb-20">
                                                                <input name="Date Of Birth"
                                                                    class="form-control required date-picker"
                                                                    placeholder="Date Of Birth" aria-required="true"
                                                                    type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <textarea placeholder="Enter Message" rows="3"
                                                                    class="form-control required" name="form_message"
                                                                    id="form_message" aria-required="true"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group mb-0 mt-10">
                                                                <input name="form_botcheck" class="form-control" value=""
                                                                    type="hidden">
                                                                <button type="submit"
                                                                    class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block"
                                                                    data-loading-text="Please wait...">Submit
                                                                    Request</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- Application Form End-->


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section>
                    <div class="container pt-0 pb-0">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="subscribe-newsletter">
                                    <div class="newsletter-form">
                                        <h2 class="text-theme-colored2">Admission Open</h2>
                                        <form id="mailchimp-subscription-form-footer" class="newsletter-form mt-10"
                                            novalidate="true">
                                            <div class="input-group">

                                                <span class="input-group-btn">
                                                    <button type="submit"
                                                        class="btn btn-colored btn-theme-colored text-white btn-xs m-0"
                                                        data-height="48px" style="padding: 10px 30px;">Apply
                                                        Now</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider: Call To Action -->

                {{-- <section class="bg-theme-colored2">
            <div class="container pt-0 pb-0">
                <div class="row">
                    <div class="call-to-action sm-text-center">
                        <div class="col-md-7">
                            <h4 class="text-white mb-0">Are you ready to get start?</h4>
                            <h2 class="text-white mt-0">Subscribe Newsletter for Get in Touch!</h2>
                        </div>
                        <div class="col-md-5">
                            <!-- Mailchimp Subscription Form Starts Here -->
                            <form id="mailchimp-subscription-form-footer" class="newsletter-form mt-20 pt-5">
                                <div class="input-group">
                                    <input value="" name="EMAIL" placeholder="Your Email"
                                        class="form-control input-lg font-16" data-height="45px"
                                        id="mce-EMAIL-footer" style="height: 45px;" type="email">
                                    <span class="input-group-btn">
                                        <button data-height="45px"
                                            class="btn btn-theme-colored text-white btn-xs m-0 font-14"
                                            type="submit" style="height: 45px;">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                            <!-- Mailchimp Subscription Form Validation-->
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
                <!-- end main-content -->
            </div>

        </div>

        @include('include.requiters')
        </div>
    @endslot

</x-layout>

{{-- <script>
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("demo").innerHTML = this.responseText;
    }
    xhttp.open("GET", "{{ route('main-index') }}", true);
    xhttp.send();
</script> --}}

<script>
    document.querySelector('video').playbackRate = 0.25;
    $("video").click(function() {
        //console.log(this); 
        if (this.paused) {
            this.play();
        } else {
            this.pause();
        }
    });
</script>
<style>
    video::-webkit-media-controls {
        display: none;
    }

</style>
