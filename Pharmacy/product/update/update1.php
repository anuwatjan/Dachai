<div class="col-lg-6 col-xl-3">

    <div class="form mb-3">
        <h4 style="color:grey">หน่วยนับของสินค้า</h4>
        <select class="form-select form-select-lg mb-3" name="product_unit" style="height: unset !important;">
            <option value="" selected disabled>หน่วยนับ</option>
            <?php while ($row = mysqli_fetch_assoc($qunit)) { ?>
                <option value="<?= $row['unit_id'] ?>" <?= $result['product_unit'] == $row['unit_id'] ? 'selected' : '' ?>>
                    <?= $row['unit_name'] ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-floating mb-3">
        <input class="form-control" id="product_barcode" name="product_barcode" type="text" value="<?= $result['product_barcode'] ?>" placeholder="Enter your name..." data-sb-validations="required" required />
        <label for="product_name">บาร์โค้ด</label>
    </div>
</div>