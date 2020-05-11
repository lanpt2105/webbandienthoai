<?php
if(isset($_GET['ac'])&&$_GET['ac']=='logout')
{
	unset($_SESSION['dangnhap']);
	header('location:index.php');
}
?>
<div class="menu">
		<ul>
			<li ><a href="index.php?ac=logout" style="background: yellow;border-radius: 5px;font-weight: bold;color: #31CC86;"><img src="../img/smallBanners/login.png">                Đăng xuất</a></li>
			<li><a href="index.php?quanly=trangchu&id=1">Trang chủ</a></li><hr>
			<li><a href="index.php?quanly=quanlyloaisanpham&ac=them">Quản lý loại sản phẩm</a></li><hr>
			<li><a href="index.php?quanly=quanlychitietsanpham&ac=them">Quản lý sản phẩm</a></li><hr>
			<li><a href="index.php?quanly=quanlytintuc&ac=them">Quản lý tin tức</a></li><hr>
			<li><a href="index.php?quanly=quanlydonhang">Quản lý đơn hàng</a></li><hr>
			<li><a href="#">Quản lý liên hệ</a></li><hr>
			<li><a href="#">Quản lý thành viên</a></li><hr>
		</ul></div>