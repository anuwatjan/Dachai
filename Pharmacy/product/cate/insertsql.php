<?php
if (isset($_POST) && !empty($_POST)) {
    $category_name = $_POST['category_name'];
    $sql = "INSERT INTO category(category_name) VALUES ('$category_name')";
     if(mysqli_query($con,$sql)){
          $alert = '<script type="text/javascript">';
          $alert .= 'alert("เพิ่มข้อมูลสำเร็จ !!");';
          $alert .= 'window.location.href = "?page=cate";';
          $alert .= '</script>';
          echo $alert;
          exit();
     } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($con);
     }
     mysqli_close($con);
}
?>