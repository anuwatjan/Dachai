<div class="col-lg-6 col-xl-3">
    <div class="form-floating mb-3">
        <div class="row">
            <div class="col-lg-6 col-xl-12">
                <?php foreach ($qsymp as $rows) { ?>
                    <input type="radio" name="product_symp" value="<?= $rows['symp_id'] ?>" placeholder="Enter your name..." data-sb-validations="required" checked required>
                    <label><?= $rows['symp_name'] ?></label>
                    <br>
                <?php } ?>
            </div>           
        </div>
    </div>
    
</div>