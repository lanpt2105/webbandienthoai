<?php
    $sql = 'SELECT * FROM hoadon ORDER BY NgayLap asc';
    $row_list = mysqli_query($conn,$sql);
?>
<div class="">
<table width="80%" border="1" style="margin-left: 20px;margin-bottom:5px;float: left;" class="table-hover">
       <tbody>
            <tr>
                <th>STT</th>
                <th >Mã hoá đơn</th>
                <th class="col-sm-1">Người nhận</th>
                <th>Số điện thoại</th>
                <th >Địa chỉ người nhận</th>
                <th>Phương thức thanh toán</th>
                <th>Tổng tiền</th>
                <th >Ngày đặt</th>
                <th>Trạng thái</th>
                <th>Xóa</th>
            </tr>
            <?php
                $i = 0;
                while($dong = mysqli_fetch_array($row_list)){
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
                <td><?php echo $dong['TrangThai'] ?></td>
                <td style="font-size: 15px;"><a href="modules/Quanlydonhang/Xuly.php?id=<?php echo $dong['MaHD']?>">Xóa</a></td>
            </tr>
            <?php
                $i++;
                }
            ?>
        </tbody>
    </table>
    </div>