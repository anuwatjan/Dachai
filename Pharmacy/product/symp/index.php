<?php include 'indexsql.php' ;?>
<div class="container pt-5">
  <div class="row pb-5">
    <div class="col-md-12 text-end">

      <div class="col-md-1 col-lg-3 mb-5">
        <div class="text-center mt-1">
          <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-20 w-10">
              <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <button class="btn btn-xl btn-success" href="?page=<?= $_GET['page'] ?>&function=insert"><i class="fas fa-download me-2"></i>ADD NEW SYMPTON</button>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="row col-md-12">
    <button class="btn btn-success ">
      <h3>PRODUCT TYPE</h3>
    </button>
    <hr>
    <table class="table table-hover " id="tableall">
      <thead>
        <tr class="text-white bg-success">
          <th scope="col-4"></th>
          <th scope="col-4">Name</th>
          <th scope="col">Manager</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        while ($rowp = mysqli_fetch_array($rp)) { ?>
          <tr>
            <th scope="row" class="col-4"><?php echo $i++ ?></th>
            <td class="col-4"><?php echo  $rowp['symp_name'] ?></td>
            <td>
              <a href="?page=<?= $_GET['page'] ?>&function=update&symp_id=<?= $rowp['symp_id'] ?>" class="btn btn-warning text-white"><i class="fa-solid fa-keyboard"></i> Edit</a>
              <a href="?page=<?= $_GET['page'] ?>&function=delete&symp_id=<?= $rowp['symp_id'] ?>" onclick="return confirm('คุณต้องการลบรายการนี้ : <?= $rowp['symp_name'] ?> หรือไม่ ??')" class="btn btn-xs view_data text-white" style="background-color:red;"><i class="fa-solid fa-rectangle-xmark "></i> Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

</div>
<?php include 'modalin.php' ?>
</div>