<?php
$sql = 'SELECT * FROM hoadon ORDER BY NgayLap asc';
$row_list = mysqli_query($conn, $sql);

if (isset($_POST['change'])) {
    try {
        $sql = 'UPDATE hoadon SET TrangThai = ' . $_POST["trangthai"] . ' WHERE MaHD = ' . $_POST["id"];
        $result = mysqli_query($conn, $sql);
        if ($result == true) {
            
            header("Refresh:0");
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
                
                header("Refresh:0");
            }
        }
    } catch (Exception $e) {
    }
}

?>
<div>

    <table width="100%" border="1" style="margin-left: 100px;margin-bottom:5px;float: left;margin-top: 70px;" class="table-hover">
        <caption style="font-size: 30px;font-weight: bold;color: green;padding-left: 300px; padding-bottom: 30px;">Quản lý thông tin đơn hàng</caption>
        <thead>
            <tr style="background: purple;font-size: 18px; font-weight: bold;color: white;" align="center">
                <th>STT</th>
                <th>Mã hoá đơn</th>
                <th>Người nhận</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ nhận hàng</th>
                <th>Phương thức TT</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt</th>
                <th>Trạng thái</th>
                <th colspan="3">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            while ($dong = mysqli_fetch_array($row_list)) {
            ?>
                <tr  style="background: pink;" align="center">
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
                <!-- <a style="width: 50px;" href="index.php?quanly=quanlydonhang&ac=detail&id=<?php echo $dong['MaHD'] ?>"> -->
                        <td>
                        <input type="button" onclick="location.href='index.php?quanly=quanlydonhang&ac=detail&id=<?php echo $dong['MaHD'] ?>';" value="Xem" />
                        </td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $dong['MaHD'] ?>" />
<<<<<<< HEAD
                            <button type="submit" name="change" class="btn btn-success" style="margin-left: 10px;margin-top: 10px;">Update</button>
=======
                            <?php
                                if($dong['TrangThai'] != 3)
                                    echo '<button type="submit" name="change">Update</button>'
                            ?>
>>>>>>> 4b4b5ea7a75cf53c227e74532f32f755c10a4845
                        </td>

                    </form>
                    <td>
                        <form method="post" action="index.php?quanly=quanlydonhang" onSubmit="return confirm('Bạn có chắc chắn xoá?')">
                            <input type="hidden" name="id" value="<?php echo $dong['MaHD'] ?>" />
                            <button type="submit" name="delete" class="btn btn-danger" style="margin-left: 10px;margin-top: 10px;">Xoá</button>
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