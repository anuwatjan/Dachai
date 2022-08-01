<?php include 'indexsql.php' ?>
<div class="container pt-5">
  <div class="row pb-5">
    <div class="col-md-12 text-end">

      <div class="col-md-1 col-lg-3 mb-5">
        <div class="text-center mt-1">
          <a class="btn btn-xl text-white" style="background-color:purple;" href="?page=<?= $_GET['page'] ?>&function=insertp   "><i class="fas fa-download me-2"></i>เพิ่มเจ้าหนี้</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <button class="btn text-white "style="background-color:purple;">
      <h3>รายการเจ้าหนี้</h3>
    </button>
    <hr style="background-color: white;">
    <table class="table table-hover" id="table_id">
      <thead>
        <tr style="background-color:purple;" class="text-white">
          <th scope="col"></th>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Manager</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        while ($rowp = mysqli_fetch_array($rp)) { ?>
          <tr>
            <th scope="row"><?php echo $i++ ?></th>
            <th><?php echo $rowp['partner_id']?></th>
            <th><?php echo $rowp['partner_name']?></th>
            <th><?php echo $rowp['partner_phone']?></th>
            <th><?php echo $rowp['partner_email']?></th>
            <th>
              <a type="button" style="background-color:blue;" name="view" id="<?php echo $rowp["partner_id"]; ?>" class="btn  btn-xs view_data text-white"><i class="fa-solid fa-address-book"></i> Details</a>
              <a href="?page=<?= $_GET['page'] ?>&function=updatep&partner_id=<?= $rowp['partner_id'] ?>" class="btn btn-warning text-white"><i class="fa-solid fa-keyboard"></i> Edit</a>
              <a href="?page=<?= $_GET['page'] ?>&function=deletep&partner_id=<?= $rowp['partner_id'] ?>" onclick="return confirm('คุณต้องการลบสินค้านี้ : <?= $rowp['partner_name'] ?> หรือไม่ ??')" class="btn btn-xs view_data text-white" style="background-color:red;"><i class="fa-solid fa-rectangle-xmark "></i> Delete</a>
            </th>
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
  

  <div id="dataModal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-white" style="background-color:purple;">
          <h4 class="modal-title">รายละเอียดคู่ค้า</h4>
        </div>
        <div class="modal-body" id="employee_detail">
        </div>
      </div>
    </div>
  </div>
  <script>


    $(document).ready(function() {
      $(document).on('click', '.view_data', function() {
        var partner_id = $(this).attr("id");
        if (partner_id != '') {
          $.ajax({
            url: "./member/partner/select.php",
            method: "POST",
            data: {
              partner_id: partner_id
            },
            success: function(data) {
              $('#employee_detail').html(data);
              $('#dataModal').modal('show');
            }
          });
        }
      });
    });
  </script>