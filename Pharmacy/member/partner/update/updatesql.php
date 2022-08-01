<?php
if (isset($_GET['partner_id']) && !empty($_GET['partner_id'])) {
     $partner_id = $_GET['partner_id'];
     $sql = "SELECT * FROM view_partner  WHERE partner_id = '$partner_id'";
     $query = mysqli_query($con, $sql);
     $result = mysqli_fetch_assoc($query);
}
if (isset($_POST) && !empty($_POST)) {
     $partner_name = $_POST['partner_name'];
     $partner_phone = $_POST['partner_phone'];
     $partner_email = $_POST['partner_email'];

     $sql = "UPDATE partner SET partner_name='$partner_name',partner_phone='$partner_phone'  , 
    partner_email = '$partner_email'   WHERE partner_id = '$partner_id'";
     $query = mysqli_query($con, $sql);

     $partnerd_add = $_POST['partnerd_add'];
     $partnerd_pro = $_POST['partnerd_pro'];
     $partnerd_dis = $_POST['partnerd_dis'];
     $partnerd_geo = $_POST['partnerd_geo'];
     $partnerd_amp = $_POST['partnerd_amp'];

     $sql1 = "UPDATE partner_detail SET  partnerd_add = '$partnerd_add' ,  partnerd_pro = '$partnerd_pro'  , partnerd_dis = '$partnerd_dis' ,
    partnerd_geo = '$partnerd_geo' , partnerd_amp = '$partnerd_amp'  WHERE partner1_id = '$partner_id'";

     if (mysqli_query($con, $sql1)) {
          $alert = '<script type="text/javascript">';
          $alert .= 'alert("แก้ไขข้อมูลสำเร็จ !!");';
          $alert .= 'window.location.href = "?page=member&function=partner";';
          $alert .= '</script>';
          echo $alert;
          exit();
     } else {
          echo "Error: " . $sql1 . "<br>" . mysqli_error($con);
     }
     mysqli_close($con);
}
