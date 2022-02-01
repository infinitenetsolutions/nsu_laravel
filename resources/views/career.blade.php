<x-layout>
    @slot('title', 'About us')
    @slot('body')
    <!-- Start main-content -->
    <div class="main-content">

        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7"
            data-bg-img="{{ asset('images/bg/bg1.jpg')}}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">Send Your Resume</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Career</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i
                                class="fa fa-question-circle-o mr-10"></i>Current <span
                                class="text-theme-colored2">Openings</span></h2>
                        <div class="owl-carousel-1col owl-nav-top" data-nav="true">
                            @foreach ($data as $career )
                            <div class="item">
                                <article class="post clearfix mb-20">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb">
                                            <img src="{{ $url.'career/'.$career->image_name }}" alt=""
                                                class="img-responsive img-fullwidth">
                                        </div>
                                        <div
                                            class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                                            <ul>
                                                <li class="font-16 text-white font-weight-600">   {{ substr(explode('-', $career->start)[2], 0, 2) }}</li>
                                                <li class="font-12 text-white text-uppercase">{{ date_format(date_create($career->start), 'M') }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="entry-content p-15">
                                        <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                            <div class="media-body pl-0">
                                                <div class="event-content pull-left flip">
                                                    <h4
                                                        class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5">
                                                        <a href="blog-single-left-sidebar.html">{{ $career->title }}</a>
                                                    </h4>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>{{
                                                            $career->sub_title}}
                                                        </li>
                                                        <li title="number of jaobs"><i
                                                                class="fa fa-briefcase mr-5 text-theme-colored2"></i>{{
                                                            $career->num_job }}
                                                        </li>
                                                        <li> <i class="fa fa-calendar  mr-5 text-theme-colored2" aria-hidden="true"></i>
                                                        </i> Last Date : {{ $career->end }} </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-5">{{ substr($career->description,0,100)}} <span class="name3" id="show{{$career->id}}">{{ substr($career->description,100,1000)}}  </span><a
                                                class="text-theme-color-2 font-12 ml-5 text-danger"
                                                onclick="show({{ $career->id }})">
                                                View Details</a></p>
                                    </div>
                                </article>
                            </div>
                            @endforeach


                        </div>
                    </div>


                    <div class="col-md-6">
                        @if(session()->has('massage'))
                        <div class="alert alert-success">
                            {{ session()->get('massage') }}
                        </div>
                        @endif
                        @if(session()->has('error'))
                        <div class="alert alert-warning">
                            {{ session()->get('error') }}
                        </div>
                        @endif
                        <div class="border-1px p-25">
                            <h4 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i
                                    class=" mr-10"></i>Drop <span class="text-theme-colored2">Massage</span></h4>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur elit.</p> -->
                            <form id="appointment_form" name="appointment_form" class="mt-30" method="post"
                                action="{{ route('career_applied') }}">
                                <div class="row">
                                    @csrf

                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">

                                            <label for="">Career Name : </label>
                                            <select name="career_id" class="form-control" type="text" required=""
                                                placeholder="Enter Name" aria-required="true">
                                                <option selected disabled>- Select -</option>
                                                @foreach ($data as $career )
                                                <option value="{{ $career->id }}">{{ $career->title }}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">

                                            <label for="">Name : </label>
                                            <input name="name" class="form-control" type="text" required=""
                                                placeholder="Enter Name" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <label for="">Email Address :</label>
                                            <input name="email" class="form-control required email" type="email"
                                                placeholder="Enter Email" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <label for="">Phone Number :</label>
                                            <input name="phone" class="form-control required" type="text"
                                                placeholder="Enter Phone" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <label for="">Message :</label>
                                            <textarea name="massage" class="form-control required"
                                                placeholder=" Why you want to join .." rows="5"
                                                aria-required="true"></textarea>
                                            <small class="float-right">maximum 255 character </small>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-10">
                                            <label for="">Drop Your Resume :</label>
                                            <input name="resume" class="form-control required " type="file"
                                                placeholder="Appoinment Time" aria-required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-10">

                                </div>
                                <div class="form-group mb-0 mt-20">
                                    <input type="hidden" name="status" value="pending" id="">
                                    <input name="created_at" value="{{ date(" Y-m-d h:i:s") }}" class="form-control"
                                        type="hidden" value="">
                                    <button type="submit" class="btn btn-dark btn-theme-colored"
                                        data-loading-text="Please wait...">Submit</button>
                                </div>
                            </form>
                            <!-- Appointment Form Validation-->
                            <script type="text/javascript">
                                $("#appointment_form").validate({
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
                                                        }, 6000);
                                                    }
                                                });
                                            }
                                        });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endslot
</x-layout>

<script>
    $(".name3").hide();
function show(id){
$("#show"+id).toggle();

$('.carousel').carousel({
    pause: "false"
});
}
         
</script>