<?php include 'updatesql.php'; ?>
<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">แก้ไขสินค้า หมายเลขสินค้า : <?= $result['product_id'] ?> </h2>
        <hr>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">สินค้า : <?= $result['product_name'] ?> </h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>


        <form id="contactForm" method="POST" action="" data-sb-form-api-token="API_TOKEN" enctype="multipart/form-data">

            <div class="col-lg-6 col-xl-3">
                <div class="form-floating mb-3">
                    <div class="col-sm-10 mb-3">
                        <img id="preview"  width="250" height="250" src="./product/image/<?= $result['product_img'] ?>">
                        <hr>
                        <input type="file" class="form-control" name="product_img" id="product_img">
                        <input type="hidden" name="oldimage" value="<?= $result['product_img'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-3">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="product_name" value="<?= $result['product_name'] ?>" name="product_name" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                        <label for="product_name">ชื่อสินค้า</label>
                        <div class="invalid-feedback" data-sb-feedback="product_name:required">กรุณากรอกชื่อสินค้า</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="product_common" value="<?= $result['product_common'] ?>" name="product_common" type="text" placeholder="Enter your name..." data-sb-validations="required" required />
                        <label for="product_common">ชื่อสามัญของสินค้า(ถ้ามี)</label>
                    </div>
                </div>

                <?php include 'update1.php'; ?>
                <?php include 'update2.php'; ?>
                <?php include 'update3.php'; ?>

            </div>
        </form>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function ReadURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#product_img").change(function() {
        ReadURL(this);
    });
</script>