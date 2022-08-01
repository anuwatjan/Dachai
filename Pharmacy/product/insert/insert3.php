<div class="col-lg-6 col-xl-3">
  
<div class="form mb-3">
    <h5 style="color:grey">ประเภทของสินค้า</h5>
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="product_type">
        <?php
        foreach ($qtype as $datype) : ?>
            <option value="<?= $datype['type_id'] ?>"><?= $datype['type_name'] ?></option>
        <?php endforeach; ?>
    </select>
</div>

<div class="form mb-3">
    <h5 style="color:grey">หมวดหมู่สินค้า<span>(ไม่จำเป็นต้องระบุ)</span></h5>
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="product_category">
        <?php
        foreach ($qcat as $dacat) : ?>
            <option value="<?= $dacat['category_id'] ?>"><?= $dacat['category_name'] ?></option>
        <?php endforeach; ?>
    </select>
</div>

    
</div>
<?php include 'insertsub.php'; ?>