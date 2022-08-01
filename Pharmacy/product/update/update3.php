<div class="col-lg-6 col-xl-3">
    <div class="form mb-3">
        <h4 style="color:grey">ประเภทสินค้า</h4>
        <select class="form-select form-select-lg mb-3" name="product_type" style="height: unset !important;">
            <option value="" selected disabled>ประเภทสินค้า</option>
            <?php while ($row = mysqli_fetch_assoc($qtype)) { ?>
                <option value="<?= $row['type_id'] ?>" <?= $result['product_type'] == $row['type_id'] ? 'selected' : '' ?>>
                    <?= $row['type_name'] ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form mb-3">
        <h5 style="color:grey">หมวดหมู่สินค้า<span>(ไม่จำเป็นต้องระบุ)</span></h5>
        <select class="form-select form-select-lg mb-3" name="product_category" style="height: unset !important;">
            <option value="" selected disabled>หมวดหมู่สินค้า</option>
            <?php while ($row = mysqli_fetch_assoc($qcat)) { ?>
                <option value="<?= $row['category_id'] ?>" <?= $result['product_category'] == $row['category_id'] ? 'selected' : '' ?>>
                    <?= $row['category_name'] ?></option>
            <?php } ?>
        </select>
    </div>


</div>
<?php include 'updatesub.php'; ?>