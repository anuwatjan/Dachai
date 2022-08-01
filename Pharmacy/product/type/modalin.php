<?php include 'insertsql.php' ; ?>
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
      <div class="modal-body text-center pb-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">เพิ่มประเภทสินค้า</h2>
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
              </div>
              <p class="mb-4">ประเภทสินค้า</p>
              <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">


                  <form id="contactForm" method="POST" data-sb-form-api-token="API_TOKEN">

                    <!-- Name input-->
                    <div class="form-floating mb-3">
                      <input class="form-control" id="type_name" name="type_name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                      <label for="type_name">Type Product</label>
                      <div class="invalid-feedback" data-sb-feedback="type_name:required">กรุณากรอกข้อมูล</div>
                    </div>


                    <div class="d-none" id="submitSuccessMessage">
                      <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                      </div>
                    </div>


                    <div class="d-none" id="submitErrorMessage">
                      <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <button class="btn text-white btn-xl" style="background-color: orange;" type="submit"> <i class="fas fa-calendar-check"></i> บันทึกข้อมูล</button>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

