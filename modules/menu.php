<?php
if(isset($_GET['ac'])&&$_GET['ac']=='logout')
{
	unset($_SESSION['dangnhap']);
	header('location:index.php');
}
?>
<div class="menu">
			<ul>
				<li><a href="index.php">Trang chủ</a></li>
				<li><a href="index.php?xem=sanphammoi&id=1">Sản phẩm mới</a></li>
				<li><a href="index.php?xem=tintuc&id=1">Tin tức</a>
				</li>
				<li><a href="index.php?xem=huongdan&id=1">Hướng dẫn</a></li>
				<li><a href="index.php?xem=lienhe&id=1">Liên hệ</a></li>
				<?php 
					if(!isset($_SESSION['dangnhap'])){
						
						echo '<li><a href="index.php?xem=dangnhap&id=1">Đăng nhập</a></li>';
						echo '<li><a href="index.php?xem=dangkymoi&id=1">Đăng ký</a></li>';
					}
				else
				{
					echo '<li ><a href="index.php?ac=logout" style="border-radius: 5px;">              Đăng xuất</a></li>';
				}
				?>
				
			</ul>
			
		</div>