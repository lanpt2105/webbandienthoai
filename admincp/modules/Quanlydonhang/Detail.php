<?php
    if(isset($_GET['id'])){
        $sql = 'SELECT * FROM chitiethoadon LEFT JOIN sanpham on chitiethoadon.MaSP = sanpham.MaSP WHERE MaHD = '.$_GET['id'];
        $row_list = mysqli_query($conn, $sql);
        // print_r(mysqli_fetch_array($row_list));
    }
    // $test = $_GET['id'];
    // echo '========='.$test;
?>
<div class="">
    <table width="80%" border="1" style="margin-left: 20px;margin-bottom:5px;float: left;" class="table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã SP</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Đơn giá</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 0;
                while($dong = mysqli_fetch_array($row_list)){
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $dong['MaSP']?></td>
                    <td><?php echo $dong['TenSP']?></td>
                    <td><img src="../<?php echo $dong['HinhAnh']?>" alt="<?php echo $dong['TenSP']?>" width="100px"></td>
                    <td><?php echo $dong['DonGia']?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <input type="button" onclick="location.href='index.php?quanly=quanlydonhang';" value="Quay lại" />
</div>