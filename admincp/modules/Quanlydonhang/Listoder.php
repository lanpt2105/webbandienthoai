<?php
    $sql = 'SELECT * FROM hoadon ORDER BY NgayLap asc';
    $row_list = mysqli_query($conn,$sql);
?>
<table width="90%" border="1" style="margin-left: 20px;margin-bottom:5px;">
       <tbody>
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
            </tr>
            <?php
                $i = 0;
                while($dong = mysqli_fetch_array($row_list)){
            ?>
            <tr>
                <td><?php echo $i; ?> </td>
                <th><?php echo $dong['MaHD'] ?></th>
                <th><?php echo $dong['NguoiNhan'] ?></th>
                <th><?php echo $dong['SDT'] ?></th>
                <th><?php echo $dong['DiaChi'] ?></th>
                <th><?php echo $dong['PhuongThucTT'] ?></th>
                <th><?php echo $dong['TongTien'] ?></th>
                <th><?php echo $dong['NgayLap'] ?></th>
                <th><?php echo $dong['TrangThai'] ?></th>
            </tr>
            <?php
                $i++;
                }
            ?>
        </tbody>
    </table>