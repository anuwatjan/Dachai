<?php include 'confirm.php'; ?>
<?php include 'modal.php'; ?>
<?php include 'func.php'; ?>
<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">สร้างใบสั่งซื้อ</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>


        <form method="POST" action="?page=all&function=insert&fuction=update">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless text-center" id="">
                            <tr>
                                <td>ลำดับ</td>
                                <td>รายการ</td>
                                <td>จำนวน</td>
                                <td>Manager</td>
                            </tr>
                            <?php
                            // echo '<pre>'.print_r($_SESSION, 1).'</pre>';
                            $i = 1;
                            if (!empty($_SESSION['showpo'])) {
                                foreach ($_SESSION['showpo'] as $product_id => $product_qty) {
                                    $sql = "SELECT * from view_product_detail a where a.product_id = '$product_id'";
                                    $query = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_array($query);

                                    echo "<tr>";
                                    echo "<td>" . $i++ . "</td>";
                                    echo "<td >" . $row["product_name"] . "</td>";
                                    echo "<td >";
                                    echo "<input type='text' class='form-control' name='amount[$product_id]' value='$product_qty' size='2'/></td>";
                                    echo "<td><a href='?page=all&function=insert&product_id=$product_id&fuction=remove' class='btn btn-danger'>ไม่เลือกรายการนี้</a></td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-01 w-1">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <a class="btn btn-xl btn-danger"><i class="fas fa-check-square"></i> หมวดหมู่สินค้า</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white">
                                <i class="mdi mdi-alert"></i>
                            </h1>
                            <input class="btn btn-sm-info text-white" value="เพิ่มใบสั่งซื้อสินค้า" onclick="window.location='?page=confirm';">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>