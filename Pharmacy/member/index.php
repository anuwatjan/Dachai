<div class="container pt-5">
    <h2 class="page-section-heading  text-uppercase text-secondary mb-0">สมาชิกการค้า</h2>
    <?php include 'line.php'; ?>
    <div class="row">
        <div class="col-md-1 col-lg-2 mb-1">
            <div class="text-center mt-1">
                <a class="btn btn-xl text-white" style="background-color: purple;" href="?page=<?= $_GET['page'] ?>&function=partner"><i class="fas fa-arrow-alt-circle-down"></i> เจ้าหนี้ / คู่ค้า</a>
            </div>
        </div>

        <div class="col-md-1 col-lg-2 mb-5">
            <div class="text-center mt-1">
                <a class="btn btn-xl btn-info text-white" href="?page=<?= $_GET['page'] ?>&function=customer"><i class="fas fa-cart-arrow-down"></i></i> ข้อมูลลูกค้า</a>
            </div>
        </div>
    </div>
</div>