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
                                <h1 class="font-200 line-height-1em mt-0 mb-0 text-theme-colored text-white">404!</h1>
                                <h2 class="mt-0">Oops! Page Not Found</h2>
                                <p>The page you were looking for could not be found.</p>
                                <a class="btn btn-border btn-gray btn-transparent btn-circled smooth-scroll-to-target"
                                    href="#contact">Return Home
                                </a>
                            </div>
                            <div class="col-md-4">
                                <h3>Some Useful Links</h3>
                                <div class="widget">
                                    <ul class="list-border text-white">
                                        <li><a target="blank" href="index-mp-layout1.html">Home</a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">Faq's</a></li>
                                        <li><a target="blank" href="page-contact1.html">Contact</a></li>
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