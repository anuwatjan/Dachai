<?php
if (isset($_GET['partner_id']) && !empty($_GET['partner_id'])) {
    $partner_id = $_GET['partner_id'];
    $sql = "SELECT * FROM view_partner WHERE partner_id = '$partner_id'";
    $qup = mysqli_query($con, $sql);
    $rep = mysqli_fetch_assoc($qup);
}
?>
<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><?= $rep['partner_name'] ?></h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <img class="mt-auto " src="..\Pharmacy\partner\image\<?= $rep['partner_img']; ?>" alt="..." width="30%" height="30%" />
        <div class="form-floating mb-3">
            
            <div class="col-lg-4 mt-auto">
                
                <p class="lead"><?= $rep['partner_name'] ?></p>
                <p class="lead"><?= $rep['partner_common'] ?></p>
                <p class="lead"><?= $rep['partner_unit'] ?></p>
                <p class="lead"><?= $rep['partner_type'] ?></p>
                <p class="lead"><?= $rep['partner_category'] ?></p>
            </div>
            
        </div>
     
    </div>
    </div>
</section>
