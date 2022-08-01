<?php
if (isset($_POST) && !empty($_POST)) {
$customer_name = $_POST['customer_name'];
$customer_phone = $_POST['customer_phone'];
$customer_email = $_POST['customer_email'];
$customer_prefix = $_POST['customer_prefix'];
$customer_career = $_POST['customer_career'];
$customer_date = $_POST['customer_date'];
$customer_last = $_POST['customer_last'];


$sqlp = "INSERT INTO customer( customer_phone ,customer_email,customer_name , customer_prefix ,customer_career,customer_date , customer_last) 
VALUES (  '$customer_phone' , '$customer_email','$customer_name' , '$customer_prefix' , '$customer_career','$customer_date' , '$customer_last')";
$quep = mysqli_query($con , $sqlp);

$customerd_add = $_POST['customerd_add'];
$customerd_pro = $_POST['customerd_pro'];
$customerd_amp = $_POST['customerd_amp'];
$customerd_geo = $_POST['customerd_geo'];
$customerd_dis = $_POST['customerd_dis'];

$new_id_cus = mysqli_insert_id($con);

$sqlpp = "INSERT INTO customer_detail (customer_id , customerd_geo ,customerd_pro,customerd_add,customerd_amp,customerd_dis)
VALUES ('$new_id_cus','$customerd_geo' ,'$customerd_pro','$customerd_add','$customerd_amp','$customerd_dis')";
 
     if(mysqli_query($con,$sqlpp)){
          $alert = '<script type="text/javascript">';
          $alert .= 'alert("เพิ่มข้อมูลสำเร็จ !!");';
          $alert .= 'window.location.href = "?page=member&function=partner";';
          $alert .= '</script>';
          echo $alert;
          exit();
     } else {
          echo "Error: " . $sqlp . "<br>" . mysqli_error($con);
     }
     mysqli_close($con);
}
?>
