<x-layout>
  @slot('title', 'About us')
  @slot('body')

  <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ asset('images/bg/bg1.jpg') }}">
    <div class="container pt-120 pb-60">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-theme-colored2 font-36">Recruiters</h2>
            <ol class="breadcrumb text-left mt-10 white">
              <li><a href="#">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">Recruiters</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-12">
            <!-- Portfolio Filter -->
            <div class="portfolio-filter">
              <a href="#" class="active" data-filter="*">All</a>
              @foreach ($categories as $categorie)
              <a href="#branding" class="" data-filter=".{{ $categorie->title }}">{{ $categorie->title }}</a>

              @endforeach

            </div>
            <!-- End Portfolio Filter -->

            <!-- Portfolio Gallery Grid -->
            <div class="gallery-isotope default-animation-effect grid-4 gutter-small clearfix" data-lightbox="gallery">

              <!-- Portfolio Item Start -->

              @foreach ($data as $recruiters)
              <div class="gallery-item p-2 {{ $recruiters->title }}">
                <div class="thumb">
                  <img class="img-fullwidth" src="{{ $url.'recruiters/'.$recruiters->image_name }}" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="text-holder">
                    <div class="title text-center">{{ $recruiters->sub_title }}</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="{{ $url.'recruiters/'.$recruiters->image_name }}" data-lightbox-gallery="gallery"
                          title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

              <!-- Portfolio Item End -->


            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  @endslot
</x-layout>