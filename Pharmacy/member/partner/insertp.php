<?php include 'insertsql.php'; ?>
<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">เพิ่มเจ้าหนี้</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>


        <form id="contactForm" method="POST" action="" data-sb-form-api-token="API_TOKEN" enctype="multipart/form-data">

            <hr>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-floating mb-6">
                                    <input class="form-control" id="partner_name" name="partner_name" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="partner_name">ชื่อเจ้าหนี้</label>
                                    <div class="invalid-feedback" data-sb-feedback="partner_name:required">กรุณากรอกชื่อเจ้าหนี้</div>
                                </div>

                                <div class="form-floating mb-6">
                                    <input class="form-control" id="partner_email" name="partner_email" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="partner_email">อีเมล์</label>
                                </div>
                                
                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-floating mb-6">
                                    <input class="form-control" id="partner_phone" name="partner_phone" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="partner_phone">เบอร์มือถือ</label>
                                    <div class="invalid-feedback" data-sb-feedback="partner_phone:required">กรุณากรอกเบอร์มือถือ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'insert1.php'; ?>
        </form>
    </div>
</section>