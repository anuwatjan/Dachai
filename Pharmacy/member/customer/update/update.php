<?php include 'updatesql.php'; ?>
<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">แก้ไขลูกค้า หมายเลข : <?php echo $result['customer_id'] ?> </h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">ชื่อ : <?php echo $result['customer_name'] ?> </h2>

        <form id="contactForm" method="POST" action="" data-sb-form-api-token="API_TOKEN" enctype="multipart/form-data">
            <div class="row mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-floating mb-6">
                                    <input class="form-control" id="customer_name" value="<?php echo $result['customer_name'] ?>" name="customer_name" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="customer_name">ชื่อเจ้าหนี้/บริษัท/ร้านค้า</label>
                                    <div class="invalid-feedback" data-sb-feedback="customer_name:required">กรุณากรอกชื่อเจ้าหนี้</div>
                                </div>

                                <div class="form-floating mb-6">
                                    <input class="form-control" id="customer_email" name="customer_email" value="<?php echo $result['customer_email'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="customer_email">อีเมล์</label>
                                </div>

                            </div>

                            <div class="col-lg-6 col-xl-6">
                                <div class="form-floating mb-6">
                                    <input class="form-control" id="customer_phone" name="customer_phone" value="<?php echo $result['customer_phone'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="customer_phone">เบอร์มือถือ</label>
                                    <div class="invalid-feedback" data-sb-feedback="customer_phone:required">กรุณากรอกเบอร์มือถือ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              <?php include 'update1.php' ; ?>

        </form>
    </div>
</section>