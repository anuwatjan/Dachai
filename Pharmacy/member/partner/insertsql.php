<?php
if (isset($_POST) && !empty($_POST)) {
$partner_name = $_POST['partner_name'];
$partner_phone = $_POST['partner_phone'];
$partner_email = $_POST['partner_email'];


$sqlp = "INSERT INTO partner( partner_phone ,partner_email,partner_name) 
VALUES (  '$partner_phone' , '$partner_email','$partner_name')";
$quep = mysqli_query($con , $sqlp);

$partnerd_add = $_POST['partnerd_add'];
$partnerd_pro = $_POST['partnerd_pro'];
$partnerd_amp = $_POST['partnerd_amp'];
$partnerd_geo = $_POST['partnerd_geo'];
$partnerd_dis = $_POST['partnerd_dis'];

$new_id_part = mysqli_insert_id($con);

$sqlpp = "INSERT INTO partner_detail (partner1_id , partnerd_geo ,partnerd_pro,partnerd_add,partnerd_amp,partnerd_dis)
VALUES ('$new_id_part','$partnerd_geo' ,'$partnerd_pro','$partnerd_add','$partnerd_amp','$partnerd_dis')";
 
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
