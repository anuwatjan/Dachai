<form method="POST" action="?page=all&function=insert&fuction=update">
    <table class="table table-borderless text-center" id="">
        <tr>
            <td>ลำดับ</td>
            <td>รายการ</td>
            <td>จำนวน</td>
            <td>Manager</td>
        </tr>
                <?php
                // echo '<pre>'.print_r($_SESSION, 1).'</pre>';
                $i = 1;
                if (!empty($_SESSION['carting'])) {
                    foreach ($_SESSION['carting'] as $product_id => $product_qty) {
                        $sql = "SELECT * from view_product_detail a where a.product_id = '$product_id'";
                        $query = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($query);

                        echo "<tr>";
                        echo "<td>" . $i++ . "</td>";
                        echo "<td >" . $row["product_name"] . "</td>";
                        echo "<td >";
                        echo "<input type='text' class='form-control' name='amount[$product_id]' value='$product_qty' size='2'/></td>";
                        echo "<td><a href='?page=all&function=insert&product_id=$product_id&fuction=remove' class='btn btn-danger'>ไม่เลือกรายการนี้</a></td>";
                        echo "</tr>";
                    }
                }
                ?>
    </table>
</form>