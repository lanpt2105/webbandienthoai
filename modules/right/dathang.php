<?php

use function PHPSTORM_META\map;

$tenmaychu = 'localhost';
$tentaikhoan = 'root';
$pass = '';
$csdl = 'dienthoai';
$conn = mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl) or die('Không kết nối được nhaa');

if (session_id() === '') {
	session_start();
}
if (isset($_POST['submit'])) {
	$sql = 'INSERT INTO hoadon(MaND, NgayLap, NguoiNhan, SDT, DiaChi, PhuongThucTT, TongTien)
	VALUES ('.$_SESSION['dangnhap']['id'].',\''.date("Y-m-d").'\',\''.$_POST['receiver'].'\',\''.$_POST['phone'].'\',\''.$_POST['address'].'\',\''.$_POST['type_payment'].'\','.$_POST['tongtien'].')';
	
	// echo '<br/>'.$sql.'<br/>';
	$query = mysqli_query($conn,$sql); //insert vào bảng hoadon
	if($query === TRUE){ //neu insert thanh cong
		$last_id = mysqli_insert_id($conn);
		foreach ($_SESSION['cart'] as $id => $value) {
			$sql = 'INSERT INTO chitiethoadon(MaHD, MaSP, SoLuong, DonGia) VALUES ('.$last_id.','.$id;
			
			foreach ($value as $idSP => $item){
				$sql .= ','.$item;
			}
			$sql .= ')';
			echo $sql.'<br/>';
			$query = mysqli_query($conn,$sql);
		}
		echo "<script type='text/javascript'>alert('message successfully sent');</script>";
		unset($_SESSION['cart']);
	}
}
?>

<form method="post" action="index.php?xem=dathang">
<?php
// print_r($_SESSION['dangnhap']);
if (isset($_SESSION['cart'])) {
	// print_r($_SESSION['cart']);
	if (isset($_SESSION['dangnhap'])) {
		echo '<div class="tieude"><span>Xin chào:<strong><em> ' . $_SESSION['dangnhap']['ho'] . ' ' . $_SESSION['dangnhap']['ten'] . '</em></strong>
		
		<a href="update_cart.php?thoat=1" style="text-decoration:none;color:red; margin-left:10px;">Đăng Xuất</a></span></div>
		<h2>Danh sách sản phẩm của bạn: </h2>';
		
	} else {
		echo '<div class="tieude">Giỏ hàng của bạn</div>';
	}

	echo '<div class="box_giohang">';
	echo '  <table width="60%" border="1" style="border-collapse:collapse; margin:5px; text-align:center;">';

	echo '  <tr>';
	echo '<th>STT</th>';
	echo '<th>Tên SP</th>';
	echo '<th>Hình ảnh</th>';
	echo '<th>Giá sp</th>';
	echo '<th>SL</th>';
	echo '<th>Tổng tiền</th>';
	echo '</tr>';
	$thanhtien = 0;
	$stt = 0;
	$sql = 'SELECT * FROM sanpham WHERE MaSP IN(';
	foreach ($_SESSION['cart'] as $id => $value) {
		$sql .= $id . ',';
	}
	$sql = substr($sql, 0, -1) . ') ORDER BY TenSP ASC';
	$query = mysqli_query($conn, $sql);
	if ($query != null) {
		while ($row = mysqli_fetch_array($query)) {
			$subTotal = $_SESSION['cart'][$row['MaSP']]['quantity'] * $row['DonGia'];
			$thanhtien += $subTotal;
			$stt += 1;
			echo '<tr>';
			echo '<td>' . $stt . '</td>';
			echo '<td>' . $row['TenSP'] . '</td>';
			echo '<td><img src="' . $row['HinhAnh'] . '" alt="" width="100px" /></td>';
			echo '<td>' . $row['DonGia'] . '</td>';
			echo '<td>' . $_SESSION['cart'][$row['MaSP']]['quantity'] . '</td>';
			echo '<td>' . number_format($_SESSION['cart'][$row['MaSP']]['quantity'] * $row['DonGia']) . '</td>';
		}
	}
	// foreach($_SESSION['cart'] as $cart_item){
	// 		$id=$cart_item['id'];
	// 		$sql="select * from sanpham where MaSP='$id'";
	// 		$row=mysqli_query($conn,$sql);
	// 		$dong=mysqli_fetch_array($row);
	// 	 	echo'<tr>';
	// 		echo'<td>'.$dong['MaSP'].'</td>';
	// 		echo'<td>'.$dong['TenSP'].'</td>';
	// 		echo'<td>'.$dong['HinhAnh'].'</td>';
	// 		echo'<td>'.number_format($dong['DonGia']).'</td>';

	// 		echo'<td><a href="update_cart.php?cong='.$cart_item['id'].'" style="margin-right:2px;"><img src="imgs/plus.png" width="20" height="20"></a>'.$cart_item['soluong'].'<a href="update_cart.php?tru='.$cart_item['id'].'" style="margin-left:2px;"><img src="imgs/subtract.png" width="20" height="20"></a></td>';
	// 		$tongtien=0;
	// 		$tongtien=$cart_item['SoLuong']*$cart_item['DonGia'];
	// 		$thanhtien=($thanhtien + $tongtien);
	// 		echo'<td>'.number_format($tongtien).'</td>';
	// 		echo'<td><a href="update_cart.php?xoa='.$cart_item['id'].'"><img src="imgs/deletered.png" width="30" height="30"></a></td>';
	// 		echo'</tr>';
	// 		echo '<tr>';
	// 		echo'</tr>';

	// }
	echo '<tr>
				
				<td colspan="5" style="font-weight:bold">Thành tiền : </a>	
				
				</td>
				
				
				<td><input type="hidden" name="tongtien" value="' .(string)$thanhtien.'" />'. number_format($thanhtien) . 'VNĐ' . '</td>
				
			
			</tr>';
} else {

	echo 'Giỏ hàng của bạn trống';
}


echo '</table>';


?>





	<table border="0">
		<tr>
			<td>Người nhận</td>
			<td><input type="text" name="receiver" /></td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td><input type="text" name="address" /></td>
		</tr>
		<tr>
			<td>Số điện thoại</td>
			<td><input type="text" name="phone" /></td>
		</tr>
		<tr>
			<td>Phương thức thanh toán</td>
			<td><input type="text" name="type_payment" /></td>
		</tr>
	</table>
	<ul class="control">
		<p><a href="../../index.php">Tiếp tục mua hàng</a></p>
		<?php
		if (!isset($_SESSION['dangnhap'])) {
			echo '
		<p>Bạn chưa đăng nhập. <a href="../../index.php?xem=dangkymoi">Đăng ký mới</a> hoặc <a href="../../index.php?xem=dangnhap">Đăng nhập</a></p>';
		}
		?>
		<?php
		if (isset($_SESSION['dangnhap']) && isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
		?>

			<button type="submit" name="submit" style="padding: 10px; background-color:yellow;">Đặt hàng</button>
			<!-- <p style="float:right; background:#FF0;text-decoration:none;"><a href="thanhtoan.php" style="color:#000;margin:5px;">Thanh toán</a></p> -->

		<?php
		}
		?>
	</ul>
</div>
</form>