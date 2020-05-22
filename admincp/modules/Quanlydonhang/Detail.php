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
     <p style="font-weight: bold;font-size: 25px;color: blue;margin-left: 450px;">Thông tin chi tiết đơn hàng</p>
    <table width="100%" border="1" style="border-collapse:collapse; margin:5px; text-align:center;margin-left: 300px;" class="table-hover">
       
        <thead>
            <tr style="background:purple; height:50px; border-radius:5px;color:white;">
                <th>STT</th>
                <th>Mã SP</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Đơn giá</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                while($dong = mysqli_fetch_array($row_list)){
                    $find = strpos($dong['HinhAnh'], 'http');
                    if( $find !== false)
                        $image = $dong['HinhAnh'];
                    else
                        $image = '../'.$dong['HinhAnh'];
            ?>
                <tr style="font-size: 18px;background: #DBB4B5; ">
                    <td><?php echo $i; ?></td>
                    <td><?php echo $dong['MaSP']?></td>
                    <td><?php echo $dong['TenSP']?></td>
                    <td>
                        <img src="<?php echo $image ?>" alt="<?php echo $dong['TenSP']?>" width="100p">
                    </td>
                    <td><?php echo $dong['DonGia']?></td>
                </tr>
            <?php
              $i++;
                }
            ?>
        </tbody>
    </table>
    <input type="button" onclick="location.href='index.php?quanly=quanlydonhang';" value="Quay lại" class="btn btn-danger" style="margin-left: 320px;margin-top: 10px;" />
</div>