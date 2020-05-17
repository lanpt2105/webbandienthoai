<?php
$sql = 'SELECT * FROM hoadon ORDER BY NgayLap asc';
$row_list = mysqli_query($conn, $sql);

if (isset($_POST['change'])) {
    try {
        $sql = 'UPDATE hoadon SET TrangThai = ' . $_POST["trangthai"] . ' WHERE MaHD = ' . $_POST["id"];
        $result = mysqli_query($conn, $sql);
        if ($result == true) {
            
            header("Refresh:1");
        }
    } catch (Exception $e) {
    }
}

if (isset($_POST['delete'])) {
    // echo '====================delete id: '.$_POST["id"];
    try {
        $sql = 'DELETE FROM chitiethoadon WHERE MaHD = ' . $_POST["id"];
        $result = mysqli_query($conn, $sql);
        if ($result == true) {
            $sql = 'DELETE FROM hoadon WHERE MaHD = ' . $_POST["id"];
            $result1 = mysqli_query($conn, $sql);
            if ($result1 == true) {
                
                header("Refresh:1");
            }
        }
    } catch (Exception $e) {
    }
}

?>
<div class="">
    <table width="80%" border="1" style="margin-left: 20px;margin-bottom:5px;float: left;" class="table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã hoá đơn</th>
                <th>Người nhận</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Phương thức thanh toán</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt</th>
                <th>Trạng thái</th>
                <th colspan="2">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            while ($dong = mysqli_fetch_array($row_list)) {
            ?>
                <tr>
                    <td><?php echo $i; ?> </td>
                    <td><?php echo $dong['MaHD'] ?></td>
                    <td><?php echo $dong['NguoiNhan'] ?></td>
                    <td><?php echo $dong['SDT'] ?></td>
                    <td><?php echo $dong['DiaChi'] ?></td>
                    <td><?php echo $dong['PhuongThucTT'] ?></td>
                    <td><?php echo $dong['TongTien'] ?></td>
                    <td><?php echo $dong['NgayLap'] ?></td>
                    <form method="post" action="index.php?quanly=quanlydonhang">
                        <td>
                            <select name="trangthai" style="width: 100%;">
                                <?php
                                $option = array(0 => 'Chưa xác nhận', 1 => 'Đã xác nhận', 2 => 'Đã giao hàng', 3 => 'Hoàn thành');
                                //null or 0 : chưa xác nhận
                                // 1: đã xác nhận
                                // 2: đã giao hàng
                                // 3: đã hoàn thành
                                foreach ($option as $key => $val) {
                                    if ($dong['TrangThai'] == $key || ($dong['TrangThai'] == null && $key == 0))
                                        echo '<option value="' . $key . '" selected="selected" >' . $val . '</option>';
                                    else
                                        echo '<option value="' . $key . '" >' . $val . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $dong['MaHD'] ?>" />
                            <button type="submit" name="change">Update</button>
                        </td>

                    </form>
                    <td>
                        <form method="post" action="index.php?quanly=quanlydonhang" onSubmit="return confirm('Bạn có chắc chắn xoá?')">
                            <input type="hidden" name="id" value="<?php echo $dong['MaHD'] ?>" />
                            <button type="submit" name="delete" style="">Xoá</button>
                        </form>
                    </td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>