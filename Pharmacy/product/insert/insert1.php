<div class="col-lg-6 col-xl-3">
    <div class="form mb-3">
        <h4 style="color:grey">หน่วยนับของสินค้า</h4>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="product_unit" required>
            <?php
            foreach ($qunit as $daunit) : ?>
                <option value="<?= $daunit['unit_id'] ?>"><?= $daunit['unit_name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-floating mb-3">
        <input class="form-control" id="product_barcode" name="product_barcode" type="text" placeholder="Enter your name..." data-sb-validations="required"/>
        <label for="product_name">บาร์โค้ด</label>
    </div>
</div>