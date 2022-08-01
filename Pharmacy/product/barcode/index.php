<?php include 'indexsql.php' ?>
<?php
include "src/BarcodeGenerator.php";
include "src/BarcodeGeneratorHTML.php";

$code = "000001";//รหัส Barcode ที่ต้องการสร้าง
function Barcode($code){
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
$border = 2;//กำหนดความหน้าของเส้น Barcode
$height = 50;//กำหนดความสูงของ Barcode

return $generator->getBarcode($code , $generator::TYPE_CODE_128,$border,$height);
}

?>
<div class="container pt-5">
  <div class="row">
    <button class="btn btn-warning text-white ">
      <h3>SEARCH PRODUCT(BARCODE)</h3>
    </button>
    <hr style="background-color: white;">
    <form  method="post" >
    <table class="table table-hover " id="table_id">
      <thead>
        <tr class="text-white btn-warning">
          <th scope="col"></th>
          <th scope="col">ID</th>
          <th scope="col">Product Name</th>
          <th scope="col">Barcode</th>
          <th scope="col">Manager</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        while ($rowp = mysqli_fetch_array($rp)) { ?>
          <tr>
            <th scope="row"><?php echo $i++ ?></th>
            <td ><input class="form-control" type="text" value="<?php echo  $rowp['product_id'] ?>" readonly></td>
            <td ><input class="form-control" type="text" value="<?php echo  $rowp['product_name'] ?>" readonly></td>
            <td ><?php echo Barcode($rowp['product_barcode']) ?></td>
            <td> <button class="btn btn-warning text-white"  type="submit"><i class="fas fa-download me-2"></i>Print Barcode</button></a></td>
      </tr>
      <?php } ?>
          </tbody>
    </table>

    </form>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#table_id').DataTable();
    });
  </script>
