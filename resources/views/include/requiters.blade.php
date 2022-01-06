<section class="clients bg-theme-colored2">
    <div class="container pt-0 pb-0">
        <div class="row">
            <div class="col-md-12">
                <!-- Section: Clients -->
                <div class="owl-carousel-6col clients-logo transparent text-center">
                    <?php     $recruiter_sliders = DB::table('recruiters_tbl')->get(); ?>

                    @foreach ( $recruiter_sliders as $recruiter_slider)
                    <div class="item"> <a href="#"><img src="{{ $url.'recruiters/'.$recruiter_slider->image_name }}"
                                alt=""></a></div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>