<x-layout>
    @slot('title', 'About us')
    @slot('body')


    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="fullscreen bg-lightest navbar-dark  ">
            <div class="display-table text-center">
                <div class="display-table-cell">
                    <div class="container pt-0 pb-0">
                        <div class="row">
                            <div class="col-md-7 text-white">
                                <h1 class="font-200 line-height-1em mt-0 mb-0 text-theme-colored text-white">500!</h1>
                                <h2 class="mt-0">Oops! Internal Server Error</h2>
                                <p>The page you were looking for could not be found.</p>
                                <a class="btn btn-border btn-gray btn-transparent btn-circled"
                                    href="{{ route('index') }}">Return Home
                                </a>
                            </div>
                            <div class="col-md-4">
                                <h3>Some Useful Links</h3>
                                <div class="widget">
                                    <ul class="list-border text-white">
                                        <li><a  href="{{ route('index') }}">Home</a></li>
                                        <li><a href="{{ route('about','who-we-are') }}">About us</a></li>
                                        <li><a href="{{ route('career') }}">Career</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endslot
</x-layout>