<div class="container pt-5">
    <h2 class="page-section-heading  text-uppercase text-secondary mb-0">รายงาน</h2>
    <?php include 'line.php'; ?>
    <div class="row">
        <div class="col-md-1 col-lg-2 mb-1">
            <div class="text-center mt-1">
                <a class="btn btn-xl btn-primary" href="?page=<?= $_GET['page'] ?>&function=rptcus"><i class="fas fa-arrow-alt-circle-down"></i> รายงานลูกค้า</a>
            </div>
        </div>

        <div class="col-md-1 col-lg-2 mb-5">
            <div class="text-center mt-1">
                <a class="btn btn-xl btn-info text-white" href="?page=type"><i class="fas fa-cart-arrow-down"></i></i> ประเภทสินค้า</a>
            </div>
        </div>

        <div class="col-md-1 col-lg-2 mb-5">
            <div class="text-center mt-1">
                <a class="btn btn-xl btn-danger" href="?page=cate"><i class="fas fa-check-square"></i> หมวดหมู่สินค้า</a>
            </div>
        </div>

        <div class="col-md-1 col-lg-2 mb-5">
            <div class="text-center mt-1">
                <a class="btn btn-xl btn-success" href="?page=symp"><i class="fas fa-arrow-alt-square-up"></i> หมวดหมู่แยกตามอาการ</a>
            </div>
        </div>

        <div class="col-md-1 col-lg-2 mb-5">
            <div class="text-center mt-1">
                <a class="btn btn-xl btn-warning text-white" href="?page=barcode"><i class="fas fa-arrow-alt-square-up"></i> พิมพ์บาร์โค้ด สร้างบาร์โค้ด</a>
            </div>
        </div>
        

    </div>
</div>