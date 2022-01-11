<x-layout>
    @slot('title', 'Transportation Facilities')
    @slot('body')
    <!-- Start main-content -->
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
                            <h2 class="text-theme-colored2 font-36">Government Body</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li class="active">Government Body</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container pt-70 pb-40">
                <div class="section-title">
                    <div class="row">
                        <h3 class="text-uppercase mt-0">Government <span class="text-theme-colored2">Body</span></h3>
                        <div class="double-line-bottom-theme-colored-2"></div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="bg-success">
                                        <th>#</th>
                                        <th>NAME</th>
                                        <th>DESIGNATION</th>
                                        <th>ADDRESS
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $govbody )
                                    <tr>
                                        <th scope="row">{{ $govbody->id }}</th>
                                        <td>{{ $govbody->name }}</td>
                                        <td>{{ $govbody->designation }}</td>
                                        <td>{{ $govbody->address }}</td>
                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        @endslot
</x-layout>