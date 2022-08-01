<?php include 'updatesql.php'; ?>
<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">แก้ไขหมวดหมู่แยกตามอาการ</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>


        <form id="contactForm" method="POST" action="" data-sb-form-api-token="API_TOKEN" enctype="multipart/form-data">

            <div class="row">
                <center>
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-6 col-xl-3">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="symp_name" name="symp_name" value="<?php echo $result['symp_name'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                                    <label for="symp_name">ชื่อหมวดหมู่แยกตามอาการ</label>
                                    <div class="invalid-feedback" data-sb-feedback="symp_name:required">กรุณากรอกชื่อสินค้า</div>
                                </div>
                            </div>
                            <?php include 'updatesub.php'; ?>              
                        </div>
                    </div>
                </center>

            </div>
        </form>
    </div>
</section>