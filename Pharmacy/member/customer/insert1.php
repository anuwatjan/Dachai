<div class="card  mt-5 mb-5">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="form-floating mb-6">
                    <textarea rows="4" class="form-control" id="customerd_add" name="customerd_add" type="text" placeholder="Enter your name..." data-sb-validations="required" required></textarea>
                    <label for="customerd_add">ที่อยู่</label>
                    <div class="invalid-feedback" data-sb-feedback="customerd_add:required">กรุณากรอกที่อยู่</div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-6">
                <div class="form-floating mb-6">
                    <input rows="6" class="form-control" id="customerd_pro" name="customerd_pro" type="text" placeholder="Enter your name..." data-sb-validations="required" required></input>
                    <label for="customerd_pro">จังหวัด</label>
                    <div class="invalid-feedback" data-sb-feedback="customerd_pro:required">กรุณาเลือกจังหวัด</div>
                </div>
                <div class="form-floating mb-6">
                    <input rows="4" class="form-control" id="customerd_amp" name="customerd_amp" type="text" placeholder="Enter your name..." data-sb-validations="required" required></input>
                    <label for="customerd_amp">อำเภอ</label>
                    <div class="invalid-feedback" data-sb-feedback="customerd_amp:required">กรุณาเลือกอำเภอ</div>
                </div>
                <div class="form-floating mb-6">
                    <input rows="4" class="form-control" id="customerd_geo" name="customerd_geo" type="text" placeholder="Enter your name..." data-sb-validations="required" required></input>
                    <label for="customerd_geo">ตำบล</label>
                    <div class="invalid-feedback" data-sb-feedback="customerd_geo:required">กรุณาเลือกตำบล</div>
                </div>
                <div class="form-floating mb-6">
                    <input rows="4" class="form-control" id="customerd_dis" name="customerd_dis" type="text" placeholder="Enter your name..." data-sb-validations="required" required></input>
                    <label for="customerd_dis">รหัสไปรษณีย์</label>
                    <div class="invalid-feedback" data-sb-feedback="customerd_dis:required">กรุณากรอกรหัสไปรษณีย์</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'insertsub.php'; ?>