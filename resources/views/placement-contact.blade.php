<x-layout>
    @slot('title', 'Contact Us')
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
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"
                                            href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-sm-10">
                                                    <h5 class="mt-0">Our Office Location</h5>
                                                    <p>#Pokhari,Near Bhilai Pahadi, Jamshedpur,Jharkhand</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"
                                            href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-sm-10">
                                                    <h5 class="mt-0">Contact Number</h5>
                                                    <p>1800-8899-022</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"
                                            href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-sm-10">
                                                    <h5 class="mt-0">Email Address</h5>
                                                    <p> info@nsuniv.ac.in</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left"
                                            href="#"> <i class="pe-7s-film text-theme-colored"></i></a>
                                        <div class="media-body">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                                </div>
                                                <div class="col-sm-10">
                                                    <h5 class="mt-0">Make a Video Call</h5>
                                                    <p> 9386817857 / 9334666453
                                                        9386467619 / 9334833167</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3 class="text-uppercase mt-0">Placement Contact <span class="text-theme-colored2">NSU</span>
                            </h3>
                            <div class="double-line-bottom-theme-colored-2"></div> <!-- Contact Form -->
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-warning" role="alert">                                   
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form id="contact_form" action="{{ route('placement.contact') }}" method="POST"
                                class="">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name <small class="text-danger">*</small></label>
                                            <input name="name" class="form-control" type="text" placeholder="Enter Name"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email <small class="text-danger">*</small></label>
                                            <input name="email" class="form-control required email" type="email"
                                                placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone <small class="text-danger">*</small></label>
                                            <input name="phone" class="form-control" type="text"
                                                placeholder="Enter Phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Company Name <small class="text-danger">*</small></label>
                                            <input name="company" class="form-control required" type="text"
                                                placeholder="Enter Company Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Designation Name <small class="text-danger">*</small></label>
                                            <input name="designation" class="form-control required" type="text"
                                                placeholder="Enter  Designation  Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Country <small class="text-danger">*</small></label>
                                            <select name="country" class="form-control required" type="text"
                                                placeholder="Ente Name">
                                                <option selected disabled>-Select-</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->name }}">{{ $country->name }}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control required" rows="5"
                                        placeholder="Enter Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="is_deleted" value="0" id="">
                                    <input name="time" value="{{ date('Y-m-d h:m:s') }}" class="form-control"
                                        type="hidden" value="" />
                                    <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5"
                                        data-loading-text="Please wait...">Send your message</button>
                                    <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
                                </div>
                            </form>

                            <!-- Contact Form Validation-->
                            {{-- <script type="text/javascript">
                                $("#contact_form").validate({
                                    submitHandler: function(form) {
                                        var form_btn = $(form).find('button[type="submit"]');
                                        var form_result_div = '#form-result';
                                        $(form_result_div).remove();
                                        form_btn.before(
                                            '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
                                        );
                                        var form_btn_old_msg = form_btn.html();
                                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                        $(form).ajaxSubmit({
                                            dataType: 'json',
                                            success: function(data) {
                                                if (data.status == 'true') {
                                                    $(form).find('.form-control').val('');
                                                }
                                                form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                $(form_result_div).html(data.message).fadeIn('slow');
                                                setTimeout(function() {
                                                    $(form_result_div).fadeOut('slow')
                                                }, 600);
                                            }
                                        });
                                    }
                                });
                            </script> --}}

                        </div>
                    </div>
                </div>
            </section>
            <!-- Divider: Google Map -->
            <section>
                <div class="container-fluid pt-0 pb-0">
                    <div class="row">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7355.6382560983575!2d86.263782!3d22.809165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x19d60b141b6c5fb4!2sNetaji+Subhas+Institute+Of+Business+Management!5e0!3m2!1sen!2sin!4v1537525654674"
                            class="w-100 border-0" height="450" allowfullscreen=""></iframe>


                    </div>
                </div>
            </section>
        </div>
        <!-- end main-content -->
    @endslot
</x-layout>
