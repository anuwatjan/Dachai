<?php
if (isset($_GET['type_id']) && !empty($_GET['type_id'])) {
     $type_id = $_GET['type_id'];
     $sql = "SELECT * FROM type_product  WHERE type_id = '$type_id'";
     $query = mysqli_query($con, $sql);
     $result = mysqli_fetch_assoc($query);
}
if (isset($_POST) && !empty($_POST)) {
     $type_name = $_POST['type_name'];
     $sql = "UPDATE type_product SET type_name='$type_name'   WHERE type_id = '$type_id'";
     if (mysqli_query($con, $sql)) {
          $alert = '<script type="text/javascript">';
          $alert .= 'alert("แก้ไขข้อมูลสำเร็จ !!");';
          $alert .= 'window.location.href = "?page=type";';
          $alert .= '</script>';
          echo $alert;
          exit();
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($con);
     }
     mysqli_close($con);
    }
?>