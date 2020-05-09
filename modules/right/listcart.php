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
<form method="post" action="listcart.php">
	<div class="row">
		<div class="danhsach">
			<h3>Sản phẩm trong giỏ</h3>
			<table class="table table-bordered">
				<tr>
					<th>STT</th>
					<th>Tên sản phẩm</th>

					<th>Giá</th>
					<th>Số lượng</th>
					<th>Thành tiền</th>
					<th>Action</th>
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
							<tr>
								<td><?php echo $stt ?></td>
								<td><?php echo $row['TenSP'] ?></td>
								<td><?php echo $row['DonGia'] ?>$</td>
								<td><input type="text" name="quantity[<?php echo $row['MaSP'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['MaSP']]['quantity'] ?>" /></td>
								<td><?php echo number_format($_SESSION['cart'][$row['MaSP']]['quantity'] * $row['DonGia']) ?> VND</td>
								<td></td>
							</tr>
				<?php

						}
					}
				}
				?>
				<tr>
					<td colspan="6">Tổng tiền: <?php echo number_format($totalprice) ?> VND</td>
				</tr>
			</table>
			<br />
			<a href="../../index.php">Quay lại</>
				<button type="submit" name="submit">Update Cart</button>
				<a href="dathang.php">Đặt hàng</>
		</div>
	</div>
</form>