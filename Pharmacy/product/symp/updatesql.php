<?php
if (isset($_GET['symp_id']) && !empty($_GET['symp_id'])) {
     $symp_id = $_GET['symp_id'];
     $sql = "SELECT * FROM sympton  WHERE symp_id = '$symp_id'";
     $query = mysqli_query($con, $sql);
     $result = mysqli_fetch_assoc($query);
}
if (isset($_POST) && !empty($_POST)) {
     $symp_name = $_POST['symp_name'];
     $sql = "UPDATE sympton SET symp_name='$symp_name'   WHERE symp_id = '$symp_id'";
     if (mysqli_query($con, $sql)) {
          $alert = '<script type="text/javascript">';
          $alert .= 'alert("แก้ไขข้อมูลสำเร็จ !!");';
          $alert .= 'window.location.href = "?page=symp";';
          $alert .= '</script>';
          echo $alert;
          exit();
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($con);
     }
     mysqli_close($con);
    }
?>