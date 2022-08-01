<?php include 'indexsql.php' ?>
<div class="container pt-5">
  <div class="row pb-5">
    <div class="col-md-12 text-end">

      <div class="col-md-1 col-lg-3 mb-5">
        <div class="text-center mt-1">
          <a class="btn btn-xl text-white btn-info" href="?page=<?= $_GET['page'] ?>&function=insertc"><i class="fas fa-download me-2"></i>ADD NEW CUSTOMER</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <button class="btn btn-info ">
      <h3 class="text-white">รายการลูกค้า</h3>
    </button>
    <hr style="background-color: white;">
    <table class="table table-hover" id="table_id">
      <thead>
        <tr class="text-white bg-info text-white">
          <th scope="col"></th>
          <th scope="col">IDCustomer</th>
          <th scope="col">NameCustomer</th>
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
            <th><?php echo $rowp['customer_id']?></th>
            <th><?php echo $rowp['customer_name']?></th>
            <th><?php echo $rowp['customer_phone']?></th>
            <th><?php echo $rowp['customer_email']?></th>
            <th>
              <a type="button" style="background-color:blue;" name="view" id="<?php echo $rowp["customer_id"]; ?>" class="btn  btn-xs view_data text-white"><i class="fa-solid fa-address-book"></i> Details</a>
              <a href="?page=<?= $_GET['page'] ?>&function=updatec&customer_id=<?= $rowp['customer_id'] ?>" class="btn btn-warning text-white"><i class="fa-solid fa-keyboard"></i> Edit</a>
              <a href="?page=<?= $_GET['page'] ?>&function=deletec&customer_id=<?= $rowp['customer_id'] ?>" onclick="return confirm('คุณต้องการลบสินค้านี้ : <?= $rowp['partner_name'] ?> หรือไม่ ??')" class="btn btn-xs view_data text-white" style="background-color:red;"><i class="fa-solid fa-rectangle-xmark "></i> Delete</a>
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
  
