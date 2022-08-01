<form id="fff" name="fff" method="post" action="?page=savePO">
    <table class="table table-hover text-center" id="">
        <tr>
            <td colspan="6" style="background-color:lightgreen;">
                <strong>ใบสั่งซื้อ</strong>
            </td>
        </tr>
        <tr>
            <td>ลำดับ</td>
            <td>รายการ</td>
            <td>จำนวน</td>
            <td>Manager</td>
        </tr>
        <?php
        $po_total = 0;
        $total = 0;
        foreach ($_SESSION['showpo'] as $product_id => $po_qty) {
            $sql = "SELECT * from view_product_detail a where a.product_id = '$product_id'";
            $query  = mysqli_query($con, $sql);
            $row  = mysqli_fetch_array($query);
            echo "<tr>";
            echo "<td>" . $row["product_name"] . "</td>";
            echo "<td >";
            echo "</tr>";
        }
        ?>
    </table>
</form>