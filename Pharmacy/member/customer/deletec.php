<?php
if (isset($_GET['partner_id']) && !empty($_GET['partner_id'])) {
    $partner_id = $_GET['partner_id'];
    $sql = "DELETE FROM partner  WHERE partner_id = '$partner_id' "; 
    $qu = mysqli_query($con , $sql);

    $sql1 = "DELETE FROM partner_detail  WHERE partner1_id = '$partner_id' "; 
            if (mysqli_query($con, $sql1)) {
                $alert = '<script type="text/javascript">';
                $alert .= 'alert("ลบข้อมูลสำเร็จ !!");';
                $alert .= 'window.location.href = "?page=member&function=partner";';
                $alert .= '</script>';
                echo $alert;
                exit();
            } else {
                echo "Error: " . $sql1 . "<br>" . mysqli_error($con);
            }
            mysqli_close($con);
}