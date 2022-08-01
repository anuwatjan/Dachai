<?php
if (isset($_GET['customer_id']) && !empty($_GET['customer_id'])) {
     $customer_id = $_GET['customer_id'];
     $sql = "SELECT * FROM view_customer  WHERE customer_id = '$customer_id'";
     $query = mysqli_query($con, $sql);
     $result = mysqli_fetch_assoc($query);
}
if (isset($_POST) && !empty($_POST)) {
     $customer_name = $_POST['customer_name'];
     $customer_phone = $_POST['customer_phone'];
     $customer_email = $_POST['customer_email'];

     $sql = "UPDATE customer SET customer_name='$customer_name',customer_phone='$customer_phone'  , 
    customer_email = '$customer_email'   WHERE customer_id = '$customer_id'";
     $query = mysqli_query($con, $sql);

     $customerd_add = $_POST['customerd_add'];
     $customerd_pro = $_POST['customerd_pro'];
     $customerd_dis = $_POST['customerd_dis'];
     $customerd_geo = $_POST['customerd_geo'];
     $customerd_amp = $_POST['customerd_amp'];

     $sql1 = "UPDATE customer_detail SET  customerd_add = '$customerd_add' ,  customerd_pro = '$customerd_pro'  , customerd_dis = '$customerd_dis' ,
    customerd_geo = '$customerd_geo' , customerd_amp = '$customerd_amp'  WHERE customer1_id = '$customer_id'";

     if (mysqli_query($con, $sql1)) {
          $alert = '<script type="text/javascript">';
          $alert .= 'alert("แก้ไขข้อมูลสำเร็จ !!");';
          $alert .= 'window.location.href = "?page=member&function=customer";';
          $alert .= '</script>';
          echo $alert;
          exit();
     } else {
          echo "Error: " . $sql1 . "<br>" . mysqli_error($con);
     }
     mysqli_close($con);
}
