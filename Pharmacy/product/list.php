<?php include 'indexsql.php' ?>
<div class="container pt-5">
  <div class="row pb-5">
    <div class="col-md-12 text-end">

      <div class="col-md-1 col-lg-3 mb-5">
        <div class="text-center mt-1">
          <a class="btn btn-xl text-white"  style="background-color:#1abc9c;" href="?page=<?= $_GET['page'] ?>&function=insert" ><i class="fas fa-download me-2"></i>INSERT NEW PRODUCT</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <button class="btn btn-primary ">
      <h3>PRODUCT LIST</h3>
    </button>
    <hr style="background-color: white;">
    <table class="table table-hover" id="table_id">
      <thead>
        <tr style="background-color:#1abc9c;" class="text-white">
          <th scope="col"></th>
          <th scope="col">Image Product</th>
          <th scope="col">Name</th>
          <th scope="col">Common</th>
          <th scope="col">Manager</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        while ($rowp = mysqli_fetch_array($rp)) { ?>
          <tr>
            <th scope="row"><?php echo $i++ ?></th>
            <td  class="col-2"><img src="..\Pharmacy\product\image\<?= $rowp['product_img']; ?>" width="100" height="100"></td>
            <td  class="col-2"><?php echo  $rowp['product_name'] ?></td>
            <td  class="col-2"><?php echo  $rowp['product_common'] ?></td>
            <td >
              <a type="button" style="background-color:purple;" name="view" id="<?php echo $rowp["product_id"]; ?>" class="btn  btn-xs view_data text-white"><i class="fa-solid fa-address-book"></i> Details</a>
              <a href="?page=<?= $_GET['page'] ?>&function=update&product_id=<?= $rowp['product_id'] ?>" class="btn btn-warning text-white"><i class="fa-solid fa-keyboard"></i> Edit</a>
              <a href="?page=<?= $_GET['page'] ?>&function=delete&product_id=<?= $rowp['product_id'] ?>" onclick="return confirm('คุณต้องการลบสินค้านี้ : <?= $rowp['product_name'] ?> หรือไม่ ??')" class="btn btn-xs view_data text-white" style="background-color:red;"><i class="fa-solid fa-rectangle-xmark "></i> Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <div id="dataModal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-white" style="background-color:purple;">
          <h4 class="modal-title">รายละเอียดสินค้า</h4>
        </div>
        <div class="modal-body" id="employee_detail">
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#table_id').DataTable();
    });
  </script>

  <script>
    $(document).ready(function() {
      $(document).on('click', '.view_data', function() {
        var product_id = $(this).attr("id");
        if (product_id != '') {
          $.ajax({
            url: "./product/select.php",
            method: "POST",
            data: {
              product_id: product_id
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