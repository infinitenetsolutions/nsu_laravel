  <!-- //popup -->
  <!-- <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> -->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-lightest">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color:#fff;border:2px solid #fff;padding: 0px 8px;border-radius: 50%;line-height: 25px;">&times;</span></button>
          <h4 class="modal-title text-center text-white" id="myModalLabel2">Get Started</h4>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 nsu_getstarted">
              <img src="{{ asset('images/nsu_getstarted.jpeg') }}" alt="" style="height: 570px;width: 425px;">
            </div>
            <div class="col-md-6">
              <div class="bg-lightest p-25">
                <!-- <h4 class="text-theme-colored text-uppercase m-0">Enquiry</h4>
                  <div class="line-bottom mb-30"></div> -->

                <form id="appointment_form" name="appointment_form" class="mt-30" method="post" action="includes/appointment.php" novalidate="novalidate">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <!-- <input name="form_name" class="form-control" type="text" required="" placeholder="Enter Name" aria-required="true"> -->
                      <?php $courses1=DB::table('course_tbl')->get() ?>
                        <select name="" id="" class="form-control">
                          <option value="">Select Course</option>
                          @foreach ($courses1 as $course )
                          <option value="{{ $course->course }}">{{ $course->course }}</option>

                          @endforeach
                        
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input name="form_email" class="form-control required email" type="email" placeholder="Your Name" aria-required="true">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input name="form_phone" class="form-control required" type="text" placeholder="Your Number" aria-required="true">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input name="form_appontment_date" class="form-control required" type="text" placeholder="Enter Email" aria-required="true">
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input name="form_appontment_date" class="form-control required" type="text" placeholder="Refered By" aria-required="true">
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group mb-10 text-right">
                        <a class="btn btn-border btn-transparent btn-circled btn-lg" href="#">Send OTP</a>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group mb-10">
                        <input name="form_appontment_date" class="form-control required" type="text" placeholder="Enter OTP" aria-required="true">
                      </div>
                    </div>

                  </div>
                  <!-- <div class="form-group mb-10">
                      <textarea name="form_message" class="form-control required" placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                    </div> -->
                  <div class="form-group mb-0 mt-20">
                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                    <a class="btn btn-border btn-transparent btn-circled btn-lg" href="#">Submit</a>
                  </div>
                </form>
                <!-- Appointment Form Validation-->

              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        </div>
      </div>
    </div>
  </div>