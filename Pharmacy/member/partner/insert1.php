<div class="card  mt-5 mb-5">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="form-floating mb-6">
                    <textarea rows="4" class="form-control" id="partnerd_add" name="partnerd_add" type="text" placeholder="Enter your name..." data-sb-validations="required" required></textarea>
                    <label for="partnerd_add">ที่อยู่</label>
                    <div class="invalid-feedback" data-sb-feedback="partnerd_add:required">กรุณากรอกที่อยู่</div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-6">
                <div class="form-floating mb-6">
                    <input rows="6" class="form-control" id="partnerd_pro" name="partnerd_pro" type="text" placeholder="Enter your name..." data-sb-validations="required" required></input>
                    <label for="partnerd_pro">จังหวัด</label>
                    <div class="invalid-feedback" data-sb-feedback="partnerd_pro:required">กรุณาเลือกจังหวัด</div>
                </div>
                <div class="form-floating mb-6">
                    <input rows="4" class="form-control" id="partnerd_amp" name="partnerd_amp" type="text" placeholder="Enter your name..." data-sb-validations="required" required></input>
                    <label for="partnerd_amp">อำเภอ</label>
                    <div class="invalid-feedback" data-sb-feedback="partnerd_amp:required">กรุณาเลือกอำเภอ</div>
                </div>
                <div class="form-floating mb-6">
                    <input rows="4" class="form-control" id="partnerd_geo" name="partnerd_geo" type="text" placeholder="Enter your name..." data-sb-validations="required" required></input>
                    <label for="partnerd_geo">ตำบล</label>
                    <div class="invalid-feedback" data-sb-feedback="partnerd_geo:required">กรุณาเลือกตำบล</div>
                </div>
                <div class="form-floating mb-6">
                    <input rows="4" class="form-control" id="partnerd_dis" name="partnerd_dis" type="text" placeholder="Enter your name..." data-sb-validations="required" required></input>
                    <label for="partnerd_dis">รหัสไปรษณีย์</label>
                    <div class="invalid-feedback" data-sb-feedback="partnerd_dis:required">กรุณากรอกรหัสไปรษณีย์</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'insertsub.php'; ?>