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
	VALUES (';
	if(isset($_SESSION['dangnhap']))
		$sql = 'INSERT INTO hoadon(MaND, NgayLap, NguoiNhan, SDT, DiaChi, PhuongThucTT, TongTien)
		VALUES ('.$_SESSION['dangnhap']['id'].',\''.date("Y-m-d").'\',\''.$_POST['receiver'].'\',\''.$_POST['phone'].'\',\''.$_POST['address'].'\',\''.$_POST['type_payment'].'\','.$_POST['tongtien'].')';
	else
		$sql = 'INSERT INTO hoadon(NgayLap, NguoiNhan, SDT, DiaChi, PhuongThucTT, TongTien)
		VALUES (\''.date("Y-m-d").'\',\''.$_POST['receiver'].'\',\''.$_POST['phone'].'\',\''.$_POST['address'].'\',\''.$_POST['type_payment'].'\','.$_POST['tongtien'].')';

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
			$sqlUpdateSL = 'UPDATE sanpham set SoLuong = (( SELECT SoLuong from sanpham where MaSP = '.$id.' ) - '.$value['quantity'].') WHERE MaSP = '.$id;
			
			$query = mysqli_query($conn,$sql);
			$queryUpdate = mysqli_query($conn, $sqlUpdateSL);
		}
		 echo '<script language="javascript">';
            echo 'alert("Đặt hàng thành công!")';
            echo '</script>';
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
		echo '<div class="tieude"> <span style="font-size: 23px;">Xin chào:<strong><em>  ' . $_SESSION['dangnhap']['ten'] . '</em></strong></span></div>
		<p style="font-size: 25px; font-weight:bold;">Danh sách sản phẩm của bạn: </p>
		';
	} else {
		echo '<p style="font-size: 25px; font-weight:bold;padding-top: 10px;">Sản phẩm có trong giỏ hàng:</p>';
	}

	echo '<div class="box_giohang">';
	echo '  <table width="60%" border="0" style="border-collapse:collapse; margin:5px; text-align:center;">';

	echo '  <tr style="background:purple; height:50px; border-radius:5px;color:white;">';
	echo '<td>STT</td>';
	echo '<td>Tên sản phẩm</td>';
	echo '<td>Hình ảnh</td>';
	echo '<td>Giá sản phẩm</td>';
	echo '<td>SL</td>';
	echo '<td>Tổng tiền</td>';
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
			echo '<tr  style="font-size: 22px;background: #DBB4B5; ">';
			echo '<td>' . $stt . '</td>';
			echo '<td>' . $row['TenSP'] . '</td>';
			echo '<td><img src="' . $row['HinhAnh'] . '" alt="" width="100px" /></td>';
			echo '<td>' . $row['DonGia'] . '</td>';
			echo '<td>' . $_SESSION['cart'][$row['MaSP']]['quantity'] . '</td>';
			echo '<td>' . number_format($_SESSION['cart'][$row['MaSP']]['quantity'] * $row['DonGia']) . '</td>';
			echo'</tr>';
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
		
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				
				<td  style="font-weight:bold; font-size: 22px; padding-top:10px;">Thành tiền : </a>	
				
				</td>
				
				
				<td style="font-size:23px; font-weight:bold;"><i><input type="hidden" name="tongtien" value="' .(string)$thanhtien.'" />'. number_format($thanhtien) . 'VNĐ' . '</i></td>
				
			
			</tr>';
} else {

	echo '<p style="font-size: 25px; font-weight: bold;color:blue;">Giỏ hàng của bạn trống<p>';
}





?>





	<table border="0">
		<p style="font-size:30px;font-weight:bold;padding-bottom: 10px;padding-top: 30px;color: #E14D1C;">Thông tin đặt hàng</p>
		<tr>
			<td style="font-size:20px;font-weight:bold">Người nhận:</td>
			<td><input type="text" name="receiver" /></td>
		</tr>
		<tr>
			<td style="font-size:20px;font-weight:bold">Địa chỉ:</td>
			<td><input type="text" name="address" /></td>
		</tr>
		<tr>
			<td style="font-size:20px;font-weight:bold">Số điện thoại:</td>
			<td><input type="text" name="phone" /></td>
		</tr>
		<tr>
			<td style="font-size:20px;font-weight:bold">Phương thức thanh toán:</td>
			<td><input type="text" name="type_payment" /></td>
		</tr>
	</table>
	<ul class="control">
		
		<!-- <?php
		if (!isset($_SESSION['dangnhap'])) {
			echo '
		<p style="font-size:25px;">Bạn chưa đăng nhập.Bạn có muốn đăng nhập hoặc đăng ký tài khoản để có thêm nhiều ưu đãi không?<br> <a href="index.php?xem=dangkymoi">Đăng ký mới?</a> hoặc <a href="index.php?xem=dangnhap">Đăng nhập</a></p>';
		
		}
		?> -->
		<?php
		if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
		?>

			<span style="padding-left: 120px;margin: 20px;"><button type="submit" name="submit" style="padding: 10px; background-color:greenyellow; border-radius:10px;align-content: center;">Đặt hàng</button></span>
			<!-- <p style="float:right; background:#FF0;text-decoration:none;"><a href="thanhtoan.php" style="color:#000;margin:5px;">Thanh toán</a></p> -->

		<?php
		}
		?>
	</ul>
	<p><a href="index.php"><img src="img/smallBanners/shop.png">"</a></p>
</div>
</form>