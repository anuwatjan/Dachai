<?php include 'indexsql.php' ?>
<div class="container pt-5">
 <div class="col-md-1 col-lg-3 mb-5">
        <div class="text-center mt-1">
          <a class="btn btn-xl btn-info text-white " href="?page=report&function=rpt"><i class="fas fa-download me-2"></i>EXCEL</a>
        </div>
      </div>
  <div class="row">
    <button class="btn btn-info ">
      <h3 class="text-white">รายงาน</h3>
    </button>
    <hr style="background-color: white;">
    <table class="table table-hover" id="table_id">
      <thead>
        <tr class="text-white bg-info text-white">
          <th scope="col">ลำดับ</th>
          <th scope="col">รหัสลูกค้า</th>
          <th scope="col">ชื่อลูกค้า</th>
          <th scope="col">เบอร์มือถือ</th>
          <th scope="col">อีเมล์</th>
          <th scope="col">ที่อยู่</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        while ($rowp = mysqli_fetch_array($rp)) { ?>
          <tr>
            <th scope="row"><?php echo $i++ ?></th>
            <th><?php echo $rowp['customer_id']?></th>
            <th><?php echo $rowp['customer_name']?></th>
            <th><?php echo $rowp['customer_phone']?></th>
            <th><?php echo $rowp['customer_email']?></th>
            <th><?php echo $rowp['customerd_add']?></th>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>
  <script type="text/javascript">
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
  </script>
  
