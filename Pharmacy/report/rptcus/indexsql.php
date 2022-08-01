<?php
$qp = "SELECT * FROM customer a join customer_detail b on a.customer_id = b.customer_id ";
$rp = mysqli_query($con, $qp);
?>