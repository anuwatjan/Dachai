<?php
 function getName($n){
     $n = 10;
     $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"; //ตัวอักษรที่สามารถสุ่มได้
     $randomstring = "";
     for($i = 0; $i < $n; $i++) {
         $index = rand(0 , strlen($characters) - 1);
         $randomstring.= $characters[$index];  
     }
     return $randomstring;
 }
?>
<?php
if (isset($_POST) && !empty($_POST)) {
$product_name = $_POST['product_name'];
$product_common = $_POST['product_common'];
$product_type = $_POST['product_type'];
$product_category = $_POST['product_category'];
$product_symp = $_POST['product_symp'];
$product_unit = $_POST['product_unit'];
if($_POST['product_barcode'] == '') {
     $product_barcode = getName($n) ; 
}else
$product_barcode = $_POST['product_barcode'];

if (isset($_FILES['product_img']['name']) && !empty($_FILES['product_img']['name'])) {
     $extension = array("jpeg", "jpg", "png");
     $target = './product/image/';
     $filename = $_FILES['product_img']['name'];
     $filetmp = $_FILES['product_img']['tmp_name'];
     $ext = pathinfo($filename, PATHINFO_EXTENSION);
     if (in_array($ext, $extension)) {
          if (!file_exists($target . $filename)) {
               if (move_uploaded_file($filetmp, $target . $filename)) {
                    $filename = $filename;
               } else {
                    echo 'เพิ่มไม่สำเร็จ';
               }
          } else {
               $newfilename = time() . $filename;
               if (move_uploaded_file($filetmp, $target . $newfilename)) {
                    $filename = $newfilename;
               } else {
                    echo 'เพิ่มเข้าไม่ได้';
               }
          }
     } else {
          echo 'ประเภทไม่ถูกต้อง';
     }
} else {
     $filename = '';
}
$sqlp = "INSERT INTO product (product_img,product_common  ,product_symp,product_category,product_type,product_name,product_unit,product_barcode) 
VALUES ('$filename','$product_common'  ,'$product_symp','$product_category','$product_type','$product_name','$product_unit','$product_barcode')";

 if(mysqli_query($con,$sqlp)){
          $alert = '<script type="text/javascript">';
          $alert .= 'alert("เพิ่มข้อมูลสำเร็จ !!");';
          $alert .= 'window.location.href = "?page=product&function=list";';
          $alert .= '</script>';
          echo $alert;
          exit();
     } else {
          echo "Error: " . $sqlp . "<br>" . mysqli_error($con);
     }
     mysqli_close($con);
}
?>

<?php
$scat = "SELECT * FROM category";
$qcat = mysqli_query($con, $scat);
?>
<?php
$sunit = "SELECT * FROM unit";
$qunit = mysqli_query($con, $sunit);
?>
<?php
$stype = "SELECT * FROM type_product";
$qtype = mysqli_query($con, $stype);
?>
<?php
$ssymp = "SELECT * FROM sympton";
$qsymp = mysqli_query($con, $ssymp);
?>
