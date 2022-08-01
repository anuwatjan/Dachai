<?php
if (isset($_POST["partner_id"])) {
     $output = '';
     $connect = mysqli_connect("localhost", "root", "", "dachai");
     $query = "SELECT * FROM view_partner WHERE partner_id = '" . $_POST["partner_id"] . "'";
     $result = mysqli_query($connect, $query);
}
?>
<table>
     <?php
     while ($row = mysqli_fetch_array($result)) { ?>
          <div class="card">
               <div class="card-body">
                    <div class="row">

                         <div class="col-lg-6 col-xl-6">
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="partner_name" value="<?php echo $row['partner_name'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required readonly />
                                   <label for="partner_name">ชื่อคู่ค้า</label>
                              </div>
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="partner_phone" value="<?php echo $row['partner_phone'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required readonly />
                                   <label for="partner_phone">เบอร์โทรศัพท์คู่ค้า</label>
                              </div>
                         </div>
                         <div class="col-lg-6 col-xl-6">
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="partner_email" value="<?php echo $row['partner_email'] ?>" type="text" placeholder="Enter your email..." data-sb-validations="required" required readonly />
                                   <label for="partner_email">อีเมล์</label>
                              </div>

                         </div>
                    </div>

                    <div class="row">

                         <div class="col-lg-6 col-xl-6">
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="partnerd_add" value="<?php echo $row['partnerd_add'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required readonly />
                                   <label for="partnerd_add">ที่อยู่</label>
                              </div>
                         </div>

                         <div class="col-lg-6 col-xl-6">
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="partnerd_dis" value="<?php echo $row['partnerd_dis'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required readonly />
                                   <label for="partnerd_dis">รหัสไปรษณีย์</label>
                              </div>
                         </div>
                    </div>
                    <div class="row">

                         <div class="col-lg-6 col-xl-4">
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="partnerd_amp" value="<?php echo $row['partnerd_amp'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required readonly />
                                   <label for="partnerd_amp">อำเภอ</label>
                              </div>
                         </div>
                         <div class="col-lg-6 col-xl-4">
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="partnerd_geo" value="<?php echo $row['partnerd_geo'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required readonly />
                                   <label for="partnerd_geo">ตำบล</label>
                              </div>
                         </div>
                         <div class="col-lg-6 col-xl-4">
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="partnerd_pro" value="<?php echo $row['partnerd_pro'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required readonly />
                                   <label for="partnerd_pro">จังหวัด</label>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <hr>
          <!-- 
<?php include 'select1.php' ?> -->

     <?php } ?>
</table>