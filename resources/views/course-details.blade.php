<x-layout>
    @slot('title', 'Course')
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
                            <h2 class="text-theme-colored2 font-36"><?php echo  $name[0]->course ?> (<?php echo  $name[0]->fullform ?>)</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Courses</a></li>
                                <li class="active"><?php echo  $name[0]->course ?> (<?php echo  $name[0]->fullform ?>)</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Services Details -->
        <section>
            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row">
                    <div class="col-md-8">
                        <div class="single-service">

                            <!-- <img src="images/course/course-details1.jpg" alt=""> -->
                            <h3 class="text-uppercase mt-30 mb-10"><?php echo  $name[0]->course ?> (<?php echo  $name[0]->fullform ?>)</h3>
                            <?php echo $data->about ?>

                            </p>
                            <ul id="myTab" class="nav nav-tabs mt-30">
                                <li class="active"><a href="#tab1" data-toggle="tab">Course Fee </a></li>
                                <li><a href="#tab2" data-toggle="tab">Course Offered:</a></li>
                                <li><a href="#tab3" data-toggle="tab">Syllabus</a></li>
                                <li><a href="#tab4" data-toggle="tab">apply-online</a></li>
                                <li><a href="#tab5" data-toggle="tab">Fee Schedule</a></li>
                                <li><a href="#tab6" data-toggle="tab">Guideline</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <ul class="tab-pane fade in active" id="tab1">
                                    <ul class="list theme-colored2 paper">

                                        <?php echo $data->fee ?>
                                    </ul>
                                </ul>

                                <div class="tab-pane fade" id="tab2">
                                    <ul class="list theme-colored2 paper">

                                        <?php echo $data->offered ?>

                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <h4 class="line-bottom-theme-colored-2 mb-20">Sullabus</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <object data="{{ $url.'CourseDetails/'.$data->syllabus }}" width="300"
                                                height="200"></object>

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab4">
                                    <ul class="list theme-colored2 paper">

                                        <?php echo $data->apply ?>

                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab5">
                                    <h4 class="line-bottom-theme-colored-2 mb-0">Fee Schedule</h4>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <object data="{{ $url.'CourseDetails/'.$data->syllabus }}" width="300"
                                                height="200"></object>

                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade" id="tab6">
                                    <h4 class="line-bottom-theme-colored-2 mb-0">Guidline</h4>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <object data="{{ $url.'CourseDetails/'.$data->guidelines }}" width="300"
                                                height="200"></object>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div><a class="btn btn-xl btn-theme-colored2 mt-30 pr-40 pl-40"
                                    href="shop-product-details.html">Apply Now</a></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">

                            <div class="widget border-1px bg-silver-deep p-15 side-bars">
                                <h4 class="widget-title mb-10 text-white">ALL COURSES</h4>
                                <div class="double-line-bottom-theme-colored-2 mt-10 border"></div>
                                <div class="categories">
                                    <ul class="list-border">
                                        @foreach ( $programs as $program)

                                        <li><a href="#"><b>- {{ $program->program }} -</b></a>
                                            <?php  $courses = DB::table('course_tbl')->where('program',$program->program)->where('is_deleted','1')->get();
                                            ?>

                                            @foreach($courses as $course)
                                        <li><a
                                                href="{{ route('course',['course'=>$course->course,'id'=>$course->id]) }}"><i
                                                    class="fa fa-angle-double-right"></i>{{
                                                $course->course }}</a></li>
                                        @endforeach
                                        </li>
                                        @endforeach
                                    </ul>
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