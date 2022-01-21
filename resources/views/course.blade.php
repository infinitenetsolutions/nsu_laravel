<x-layout>
    @slot('title', 'About us')
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
                                <h2 class="text-theme-colored2 font-36">{{ $programs[0]->name }}</h2>
                                <ol class="breadcrumb text-left mt-10 white">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Programs</a></li>
                                    <li class="active text-captilize">{{ $programs[0]->name }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Doctor Details -->
            <section>
                <div class="container">
                    <div class="section-content">

                        <div class="row">
                            <div class="col-sx-12 col-sm-4 col-md-4">
                                <div class="doctor-thumb">
                                    <img src="{{ $url . 'program/' . $programs[0]->image_name }}" alt="">
                                </div>
                                <div class="info p-20 bg-black-333">

                                    <ul class="list angle-double-right m-0">
                                        @foreach ($all_programs as $all)
                                            <li class="mt-0 text-gray-silver"> <a
                                                    href="{{ route('program', strtolower(str_replace(' ', '-', $all->name))) }}"><strong
                                                        class="text-gray-lighter text-uppercase">{{ $all->name }}</a></strong>
                                            </li>
                                        @endforeach
                                    </ul>


                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8">
                                <h3 class="text-uppercase mt-0">{{ $programs[0]->name }} <span
                                        class="text-theme-colored2">NSU</span></h3>
                                <div class="double-line-bottom-theme-colored-2"></div>
                                <div>
                                    <!-- Nav tabs -->


                                    <!-- Tab panes -->

                                    <p class="mt-15 mb-15"><?php echo $programs[0]->description; ?>.</p>

                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#orders"
                                                aria-controls="orders" role="tab" data-toggle="tab"
                                                class="font-15 text-uppercase">Courses </a></li>

                                        <li role="presentation"><a href="#bookmarks" aria-controls="bookmarks" role="tab"
                                                data-toggle="tab" class="font-15 text-uppercase">Program </a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="orders">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>S.NO</th>
                                                            <th>Course Name</th>
                                                            <th>Fee (per Semester)</th>
                                                            <th>Details</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($courses as $course)
                                                            <tr>
                                                                <th scope="row"># {{ $loop->iteration }}</th>
                                                                <td>{{ $course->course }}</td>
                                                                <td>{{ $course->fee }}</td>
                                                                <td><a class="btn btn-success btn-xs" href="{{ route('course',['program'=>strtolower(str_replace(' ', '-', $programs[0]->name)),'course'=>strtolower(str_replace(' ', '-', $course->course)),'id'=>$course->id]) }}">View
                                                                        Details</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="bookmarks">
                                            <table class="table">
                                                <tbody>

                                                    @foreach ($all_programs as $all)


                                                        <tr>
                                                            <th scope="row"><img width="100px"
                                                                    src="{{ $url . 'program/' . $all->image_name }}"
                                                                    alt="">
                                                            </th>
                                                            <td>
                                                                <h4>{{ $all->name }}</h3>
                                                                </h4>
                                                            </td>
                                                            <td><a class="btn btn-success btn-xs"
                                                                    href="{{ route('program', strtolower(str_replace(' ', '-', $all->name))) }}">View
                                                                    Details</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
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
