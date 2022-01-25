<!-- Header -->
<?php
$home_url='';

if ($_SERVER['HTTP_HOST']=="127.0.0.1:8000") {

$home_url="http://127.0.0.1:8001/upload/";
}else {
  $home_url="https://www.nsuniv.ac.in/nsuadmin/public/upload/";
} ?>
<header id="header" class="header">
  <div class="header-top sm-text-center" style="background:#000;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="widget text-white">
            <ul class="list-inline xs-text-center text-white">
              <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-white"></i>
                  1800-8899-022 </a> </li>
              /<li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i
                    class="fa fa-envelope-o text-white "></i> info@nsuniv.ac.in</a></li>
              /<li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-clock-o text-white "></i>
                  <?php echo date("D M Y");?>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 pr-0">
          <div class="widget">
            <ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center mt-5">
              <li><a target="_blank" href="https://api.whatsapp.com/send?phone=9386817857&text=&source=&data="><i class="fa fa-whatsapp text-white"></i></a></li>
              <li><a target="_blank" href="https://www.facebook.com/nsu.jamshedpur/"><i class="fa fa-facebook text-white"></i></a></li>
              <li><a target="_blank" href="https://www.youtube.com/channel/UCjndfC0cVjGnscin5RZgaFA"><i class="fa fa-youtube text-white"></i></a></li>
              <li><a target="_blank" href="https://www.instagram.com/nsujamshedpur/?hl=en"><i class="fa fa-instagram text-white"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="header-middle p-0 bg-lightest xs-text-center">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2">
          <a class="menuzord-brand pull-left flip sm-pull-center mb-15" href="index-mp-layout1.html"><img src="{{ asset('images/flogo.png')  }}" alt="nsu logo"></a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 contact-section">
          <div class="row" style="margin: 25px 0;">

            <?php $headers=DB::table('header')->orderBy('prarirty','asc')->limit(4)->get() ?>
            @foreach ($headers as $header )
            <div class="col-xl-3 col-lg-3 col-md-12 pt-2 text-white">
             <?php echo $header->name ?>
              <br>
              <a href="<?php echo $header->address ?>"  class="hover-orange verdana-text all-time-shadow">
                <blink><b class="button text-white"><?php echo $header->designation ?></b></blink>
              </a>
            </div>
            @endforeach
          
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-nav">
    <div class="header-nav-wrapper navbar-scrolltofixed"
      style="z-index: 999; position: static; top: auto;background:#000; width:100%;">
      <!-- sticky nav -->
      <div class="sticky-nav-header header-top sm-text-center" style="background: #c70013;padding: 10px 0;">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <ul class="list-inline sm-text-center ">
                <li>
                  <b style="font-size:23px;" class="all-time-shadow">
                    <span class="theme-orange pr-2 pl-2"
                      style="background: #ffffff;color: #c70013;padding: 0px 5px;">N</span>
                    <span id="netaji" class="text-white"></span>
                    <span class="theme-orange pr-2 pl-2"
                      style="background: #ffffff;color: #c70013;/* padding:5px 10px; */padding: 0px 5px;">S</span>
                    <span id="subhas" class="text-white"></span>
                    <span class="theme-orange pr-2 pl-2"
                      style="background: #ffffff;color: #c70013;/* padding:5px 10px; */padding: 0px 5px;">U</span>
                    <span id="university" class="text-white"></span>
                  </b>
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="widget text-white">
                <ul class="list-inline xs-text-center text-white">
                  <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"
                      style="font-size: 17px;line-height: 44px;"><i class="fa fa-phone text-white"></i>
                      1800-8899-022</a></li>/<li class="m-0 pl-10 pr-10"><a href="#" class="text-white"
                      style="font-size: 17px;line-height: 44px;"><i class="fa fa-envelope-o text-white "></i>
                      info@nsuniv.ac.in</a> /
                  <li class="m-0 pl-10 pr-10"><a href="#" class="text-white"
                      style="font-size: 17px;line-height: 44px;"><i class="fa fa-snowflake-o text-white mr-3"></i>Covid
                      Norms</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-2 pr-0">

              <div class="widget">
                <ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center mt-5">
                  <li><a target="_blank" href="https://api.whatsapp.com/send?phone=9386817857&text=&source=&data="><i class="fa fa-whatsapp text-white"></i></a></li>
                  <li><a target="_blank" href="https://www.facebook.com/nsu.jamshedpur/"><i class="fa fa-facebook text-white"></i></a></li>
                  <li><a target="_blank" href="https://www.youtube.com/channel/UCjndfC0cVjGnscin5RZgaFA"><i class="fa fa-youtube text-white"></i></a></li>
                  <li><a target="_blank" href="https://www.instagram.com/nsujamshedpur/?hl=en"><i class="fa fa-instagram text-white"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- //sticky nav -->

      <div class="container-fluid">


        <nav id="menuzord" class="menuzord default menuzord-responsive">



          <ul class="menuzord-menu menuzord-right menuzord-indented scrollable" style="max-height: 400px;">
            <li class="active"><a href="{{ route('index') }}">Home</a> </li>
            <li><a href="#home">About<span class="indicator"></span></a>
              <ul class="dropdown" style="right: auto; display: none;">

                <b class="color-orange">- OVERVIEW -</b>
                <?php $abouts = DB::table('pages')->where('page_type','about')->get();
                ?>
                @foreach($abouts as $about)
                <li><a href="{{ route('about', $about->title )  }}"> {{ $about->sub_title }}</a></li>
                @endforeach
                <li>
                  <b class="color-orange">- FACULTY -</b>
                </li>

                <?php $facultyes=DB::table('faculty_tbl')->distinct()->get(['type']);
                ?>
                @foreach($facultyes as $faculty)
                <li><a href="{{ route('faculty', $faculty->type )  }}">MEET OUR {{ $faculty->type }}</a></li>
                @endforeach

                <li>
                  <b class="color-orange">- NSU AT A GLANCE -</b>
                </li>
                <li><a href="{{ route('govbody') }}"> THE GOVERNING BODY</a></li>
                <li><a href="page-course-details.html"> TEACHING &amp; LEARNING RESOURCES</a></li>


                <li class="submenus"><a href="#" class="link">NIRF

                    <span class="indicator"><i class="fa fa-angle-right"></i></span>
                  </a>
                  <ul class="dropdown" style="display: none;">
                    <?php  $studentpdfs = DB::table('pdf')->where('type','aboutpdf' )->limit(2)->get();
                      ?>
                    @foreach($studentpdfs as $studentpdf)
                    <li><a target="_blank" href="{{ $home_url.'pdf/'.$studentpdf->images   }}"> {{ $studentpdf->title
                        }}</a>
                    </li>
                    @endforeach
                  </ul>
                </li>

                <?php  $studentpdfs = DB::table('pdf')->where('type','aboutpdf' )->limit(10)->skip(2)->get();
                      ?>
                    @foreach($studentpdfs as $studentpdf)
                    <li><a target="_blank" href="{{ $home_url.'pdf/'.$studentpdf->images   }}"> {{ $studentpdf->title
                        }}</a>
                    </li>
                    @endforeach

              </ul>
            </li>
            {{-- course page start --}}
            <li><a href="javascript:void(0)">Courses <span class="indicator"></span></a>
              <div class="megamenu megamenu-bg-img">
                <div class="megamenu-row">


                  <?php    $programs=DB::table('course_tbl')->select('program')->where('is_deleted','1')->groupBy('program')->orderBy(DB::raw('count(id) '), 'DESC')->get();         ?>

                  @foreach ( $programs as $program)

                  <?php  $courses = DB::table('course_tbl')->where('program',$program->program)->where('is_deleted','1')->orderBy('id','ASC')->get();
                   ?>
                  <div class="col-sm-3">
                    <ul class="list-unstyled list-dashed">
                     <a href="{{ route('program',strtolower(str_replace(' ','-',$program->program))) }}"><b class="color-orange text-uppercase">-
                      <?php echo $program->program ?>-
                    </b></a> 
                      @foreach($courses as $course)
                      <li><a href="{{ route('course',['course'=>strtolower(str_replace(' ', '-', $course->course)),'id'=>$course->id]) }}">{{
                          $course->course }}</a></li>
                      @endforeach
                    </ul>
                  </div>
                  @endforeach
                </div>
              </div>
            </li>

            <li><a href="#home">Apply Admission<span class="indicator"></span></a>
              <ul class="dropdown" style="right: auto;">
                <b class="color-orange">- ADMISSION PROCEDURE -</b>
                <?php $admissions = DB::table('pages')->where('page_type','admission')->get();
                ?>
                @foreach($admissions as $admission)
                <li><a href="{{ route('admission', $admission->title )  }}"> {{ $admission->sub_title }}</a></li>
                @endforeach

              </ul>
            </li>

            <li><a href="#home">Infrastructure<span class="indicator"></span></a>
              <ul class="dropdown" style="right: auto;">
                <?php $infrastructures = DB::table('pages')->where('page_type','infrastructure')->get();
                ?>
                @foreach($infrastructures as $infrastructure)
                <li><a href="{{ route('infrastructure', $infrastructure->title )  }}"> {{ $infrastructure->sub_title
                    }}</a></li>
                @endforeach
              </ul>
            </li>
            <li><a href="#home">Placement<span class="indicator"></span></a>
              <ul class="dropdown" style="right: auto;">
                <?php $placements = DB::table('pages')->where('page_type','placement')->get();
                ?>
                @foreach($placements as $placement)
                <li><a href="{{ route('placement', $placement->title )  }}"> {{ $placement->sub_title
                    }}</a></li>
                @endforeach
                <li><a href="{{ route('appointment') }}"> APPOINTMENT LETTER</a></li>
                <li><a href="{{ route('requiters') }}"> OUR ESTEEMED RECRUITERS</a></li>
                <li><a href="{{ route('placement-contact') }}"> Placement Contact </a></li>


              </ul>
            </li>
            <li><a href="#home">Student<span class="indicator"></span></a>
              <ul class="dropdown" style="right: auto;">
                <?php $students = DB::table('pages')->where('page_type','student')->get();
                ?>
                @foreach($students as $student)
                <li><a href="{{ route('student', $student->title )  }}"> {{ $student->sub_title }}</a></li>
                @endforeach
                <?php $studentpdfs = DB::table('pdf')->where('type','studentpdf')->get();
                ?>
                @foreach($studentpdfs as $studentpdf)
                <li><a target="_blank" href="{{ $home_url.'pdf/'.$studentpdf->images   }}"> {{ $studentpdf->title }}</a>
                </li>
                @endforeach
                <li><a href="https://nsucms.in/nsucms/student/student_login">Login</a></li>


              </ul>
            </li>
            <li><a href="#home">Gallery<span class="indicator"></span></a>
              <ul class="dropdown" style="right: auto;">
                <li><a href="{{ route('image-gallery') }}">UNIVERSITY GALLERY</a></li>
                <li><a href="{{ route('media-gallery') }}">MEDIA GALLERY</a></li>

              </ul>
            </li>

            <li><a href="{{ route('career') }}">Career</a>

            </li>

            <li><a href="{{ route('contact') }}">Contact</a>

            </li>
            <li><a class=" btn-outline-danger btn-sm" href="#">Education Loan <span class="indicator"></span></a>
              <ul class="dropdown" style="right: auto;">

                  <li><b class="color-orange text-center"> - EDUCCATION LOAN FACILITY -</b></li>
                  <li><a href="https://propelld.com/signin">Propelld</a></li>
                  <li><a href="https://neevfinance.hagnosoft.com/webform">neevfinance</a></li>
              </ul>
          </li>

          </ul>

        </nav>

      </div>
    </div>

  </div>

</header>
@include('include.popup')