<?php
$tenmaychu = 'localhost';
$tentaikhoan = 'root';
$pass = '';
$csdl = 'dienthoai';
$conn = mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl) or die('Không kết nối được nhaa');
// session_start();
// foreach($_SESSION['cart'] as $value){
// 	print_r($value);
// }
if (session_id() === '') {
	session_start();
}
// if(isset($_SESSION['dangnhap'])){ 
// 	print_r($_SESSION['dangnhap']);
// }
if (isset($_POST['submit'])) {
	foreach ($_POST['quantity'] as $key => $val) {
		if ($val <= 0) {
			unset($_SESSION['cart'][$key]);
		} else {
			$_SESSION['cart'][$key]['quantity'] = $val;
		}
	}
}
?>
<form method="post" action="index.php?xem=listcart">
	<div class="row">
		<div class="danhsach">
			<center><p style="font-size: 35px; padding-top: 20px;padding-bottom: 10px;align-content: center;font-weight: bold; font-family:'titan-one';;color: #1418E3;"> Sản phẩm trong giỏ hàng</p></center>
			<table class="table table-bordered" width="900"; border=1;cell-padding:0;cell-spacing:0;>
				<tr style="font-size: 23px;">
					<th>STT</th>
					<th>Tên sản phẩm</th>

					<th>Giá</th>
					<th>Số lượng</th>
					<th>Thành tiền</th>
					
				</tr>
				<?php
				if ($_SESSION['cart']) {
					$sql = 'SELECT * FROM sanpham WHERE MaSP IN (';
					foreach ($_SESSION['cart'] as $id => $value) {
						$sql .= $id . ",";
					}

					$sql = substr($sql, 0, -1) . ") ORDER BY TenSP ASC";
					$query = mysqli_query($conn, $sql);
					// print_r($query);
					$totalprice = 0;
					$stt = 0;
					if ($query != null) {

						while ($row = mysqli_fetch_array($query)) {
							$subtotal = $_SESSION['cart'][$row['MaSP']]['quantity'] * $row['DonGia'];
							$totalprice += $subtotal;
							$stt += 1;
				?>
							<tr style="font-size: 23px;">
								<td  align="center"><?php echo $stt ?></td>
								<td align="center"><?php echo $row['TenSP'] ?></td>
								<td align="center"><?php echo $row['DonGia'] ?>VND</td>
								<td align="center"><input type="text" name="quantity[<?php echo $row['MaSP'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['MaSP']]['quantity'] ?>" /></td>
								<td align="center"><?php echo number_format($_SESSION['cart'][$row['MaSP']]['quantity'] * $row['DonGia']) ?> VND</td>
							
							</tr>
				
				<?php

						}
					}
				}
				?>
				<tr></tr>
				
				<tr style="padding-top: 10px;" >
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					
					<td style="font-size: 23px;font-weight: bold;">Tổng tiền: <?php echo number_format($totalprice) ?> (VND)</td>
				</tr>
			
			</table>
			<br />
			<center ><button type="submit" name="submit" style="font-size:22px;">Update Cart</button></center>
			<span style="font-size: 25px;"><a href="../../index.php" style="text-decoration: none;"><img src="img/smallBanners/32px.jpeg" width: "20px" height:"20px;"> Quay lại</a></span>
				<span style="font-size: 25px;margin-right: 10px;"><a href="index.php?xem=dathang" style="text-decoration: none;"><img src="img/smallBanners/32px.png" width: "20px" height:"20px;">Đặt hàng</a></span>
		</div>
	</div>
</form>