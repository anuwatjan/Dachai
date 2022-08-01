<?php include 'insertsql.php'; ?>
<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">เพิ่มลูกค้า</h2>
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
                            <div class="col-lg-6 col-xl-4">
                                <div class="form-floating mb-4">
                                    <input class="form-control" id="customer_prefix" name="customer_prefix" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="customer_prefix">คำนำหน้าชื่อ</label>
                                    <div class="invalid-feedback" data-sb-feedback="customer_prefix:required">คำนำหน้าชื่อ</div>
                                </div>

                                <div class="form-floating mb-4">
                                    <input class="form-control" id="customer_email" name="customer_email" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="customer_email">อีเมล์</label>
                                </div>

                            </div>

                            <div class="col-lg-6 col-xl-4">
                                <div class="form-floating mb-4">
                                    <input class="form-control" id="customer_name" name="customer_name" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="customer_name">ชื่อลูกค้า</label>
                                    <div class="invalid-feedback" data-sb-feedback="customer_name:required">กรุณากรอกชื่อลูกค้า</div>
                                </div>
                                <div class="form-floating mb-4">
                                    <input class="form-control" id="customer_phone" name="customer_phone" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="customer_phone">เบอร์มือถือ</label>
                                    <div class="invalid-feedback" data-sb-feedback="customer_phone:required">กรุณากรอกเบอร์มือถือ</div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-4">
                                <div class="form-floating mb-4">
                                    <input class="form-control" id="customer_last" name="customer_last" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="customer_last">นามสกุล</label>
                                    <div class="invalid-feedback" data-sb-feedback="customer_last:required">นามสกุล</div>
                                </div>
                                <div class="form-floating mb-4">
                                    <input class="form-control" id="customer_career" name="customer_career" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="customer_career">อาชีพ</label>
                                    <div class="invalid-feedback" data-sb-feedback="customer_career:required">อาชีพ</div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-xl-4">
                                <div class="form-floating mb-4">
                                    <input class="form-control" id="customer_date" name="customer_date" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="customer_date">วันเดือนปีเกิด</label>
                                    <div class="invalid-feedback" data-sb-feedback="customer_date:required">วันเดือนปีเกิด</div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-xl-4">
                                <div class="form-floating mb-4">
                                    <input class="form-control" name="customer_date" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="customer_date">อายุ</label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <?php include 'insert1.php'; ?>
        </form>
    </div>
</section>