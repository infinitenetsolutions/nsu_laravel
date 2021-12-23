<x-layout>
    @slot('title', 'Placements')
        @slot('body')
            <!-- Start main-content -->
 <!-- Start main-content -->
 <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Placements</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Current Page</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section About -->
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-5">
              <h3 class="text-uppercase mt-0">Our  <span class="text-theme-colored2">Placements</span></h3>
					  	<div class="double-line-bottom-theme-colored-2"></div>
             

               <p class="mt-20">Since its inception, Jamshedpur, now Netaji Subhas University has had an enviable track record of 100% placements support.We groom our students in such a way that they are able to complete for respectable jobs in the corporate world</p>
                
               <p>The education, industry exposure and time invested in each student is reflected in the quality of students who leave the University portals to enter the corporate world. The University takes pride in having created a name among recruiters who visit the campus year after year only for the fact of being assured of meritorious executives getting from the university.</p>
               <div class=" col-md-12">
                <div class="table-responsive aos-init" data-aos="zoom-in" data-aos-duration="1000">
                    <table class="table table-bordered mb-0">
                        <tbody>
                            <tr>
                                <th colspan="2" style="background: linear-gradient(
                                  90deg, rgba(255,82,65,1) 0%, rgba(199,0,19,1) 100%)!important;color:aliceblue;" class="text-center">Key Highlights</th>
                            </tr>
                            <tr>
                                <td class="text-center">Average Package (Yearly)</td>
                                <td class="text-center">INR 3.5 Lakh</td>
                            </tr>
                            <tr>
                                <td class="text-center">Highest Package (Yearly))</td>
                                <td class="text-center">INR 6.00 Lakh</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br><br>
                <p> Recruiters such as TCS, Deloitte, Just Dial, Airtel, Big Bazar, Ashiana Housing, IDBI Federal, NJ Finance, Karvy, Lotus Herbals, Genpact India, Idea. Bajaj Finserv, Flipkart, IndsInd Bank, ICICI Bank, Bharat Forge, Tata Motors are a few among the expansive pool of recruiters.
                </p>
            </div>
              <!-- <a href="#" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15">Read More</a> -->
            </div>
            
            
            <div class="col-md-4">
              <div class="box-hover-effect about-video">
                <div class="effect-wrapper">
                  <div class="thumb">
                    <img class="img-fullwidth" src="https://www.nsuniv.ac.in/assets/images/upload/gallery_815566_1545459099.JPG" alt="project">
                  </div>
                </div>
              </div>
             

            </div>
            <div class="col-md-3">
                <div class="sidebar sidebar-left mt-sm-30 ml-sm-0">
           
                    <div class="widget border-1px bg-silver-deep p-15 side-bars">
                      <h4 class="widget-title mb-10 text-white">Quick Links</h4>
                      <div class="double-line-bottom-theme-colored-2 mt-10 border"></div>
                      <div class="categories">
                        <ul class="list-border">
                            <li><a href="{{ route('placements') }}">Placement</a></li>
                                <li><a href="{{ route('appointment-letter') }}">Appointment Letter</a></li>
                                <li><a href="{{ route('our-eateemed-recruiters') }}">Our Eateemed Recruiters</a></li>
                              
                         
                         
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
