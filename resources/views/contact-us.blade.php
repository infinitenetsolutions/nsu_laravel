<x-layout>
    @slot('title', 'Contact Us')
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
                                    <h2 class="text-theme-colored2 font-36">Contact Us</h2>
                                    <ol class="breadcrumb text-left mt-10 white">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">Contact Us</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Divider: Contact -->
                <section class="divider">
                    <div class="container">
                        <div class="row pt-30">
                            <div class="col-md-6">
                                <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>

                                <!-- Contact Form -->
                                <form  action="{{ route('contact-us') }}" method="post">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Name <small>*</small></label>
                                                <input name="name" class="form-control" type="text" placeholder="Enter Name"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email <small>*</small></label>
                                                <input name="email" class="form-control required email" type="email"
                                                    placeholder="Enter Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Subject <small>*</small></label>
                                                <input name="subject" class="form-control required" type="text"
                                                    placeholder="Enter Subject">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input name="phone" class="form-control" type="text"
                                                    placeholder="Enter Phone">                                                   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="massage" class="form-control required" rows="5"
                                            placeholder="Enter Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                        <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5"
                                            data-loading-text="Please wait...">Send your message</button>
                                        <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                                    </div>
                                </form>

                                <!-- Contact Form Validation-->

                            </div>
                            <div class="col-md-6">
                                <h3 class="line-bottom mt-0">Get in touch with us</h3>
                                <p>Aliquam officia dolor rerum enim doloremque iusto eos atque tempora dignissimos similique,
                                    quae, maxime sit accusantium delectus.</p>
                                <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
                                    <li><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
                                </ul>

                                <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i
                                            class="fa fa-map-o"></i></a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Our Office Location</h5>
                                        <p>#405, Lan Streen, Los Vegas, USA</p>
                                    </div>
                                </div>
                                <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i
                                            class="fa fa-phone"></i></a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Contact Number</h5>
                                        <p><a href="tel:+325-12345-65478">+325-12345-65478</a></p>
                                    </div>
                                </div>
                                <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i
                                            class="fa fa-envelope-o"></i></a>
                                    <div class="media-body">
                                        <h5 class="mt-0">Email Address</h5>
                                        <p><a href="mailto:supporte@yourdomin.com">supporte@yourdomin.com</a></p>
                                    </div>
                                </div>
                                <!-- <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-film text-theme-colored"></i></a>
                                                                      <div class="media-body">
                                                                        <h5 class="mt-0">Make a Video Call</h5>
                                                                        <p>ThemeMascotSkype</p>
                                                                      </div>
                                                                    </div> -->
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Divider: Google Map -->
                <section>
                    <div class="container-fluid pt-0 pb-0">
                        <div class="row">

                            <!-- Google Map HTML Codes -->
                            <div id="map-canvas-multipointer" data-mapstyle="default" data-height="500" data-zoom="12"
                                data-marker="images/map-marker.png">
                            </div>
                            <!-- Google Map Javascript Codes -->
                            <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
                            <script src="js/google-map-init-multilocation.js"></script>

                        </div>
                    </div>
                </section>
            </div>
            <!-- end main-content -->
        @endslot
    </x-layout>
