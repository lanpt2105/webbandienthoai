<?php
	$sql_chitiet="select * from sanpham where MaLSP='$_GET[id]'";
	$query=mysqli_query($conn,$sql_chitiet);
	$count=mysqli_num_rows($query);
	
?>
<?php
$sql_loaisp="select * from loaisanpham where MaLSP='$_GET[id]'";
$query_loaisp=mysqli_query($conn,$sql_loaisp);
$dong_loaisp=mysqli_fetch_array($query_loaisp);
?>

<p style="color:midnightblue; font-family:'abril-fatface' ; font-size: 30px; font-weight:bold;font-style: italic; text-align: center; padding-top: 5px;"><?php echo $dong_loaisp['TenLSP']?></p>
			<div class="sanphamall">
				<ul>
					 <?php
					
						while($dong_chitiet=mysqli_fetch_array($query)){
						?>
					
					<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitiet['MaSP'] ?>">
						<img src="<?php echo $dong_chitiet ['HinhAnh']?>" width="200" height="200"/>
						<p style="font-size: 20px; text-align: center;color: black;font-weight: bold;"><?php echo $dong_chitiet['TenSP']?></p>
						<p style="font-size: 18px; margin:left: 0px; color:firebrick;font-weight: bold;">Giá: <?php echo $dong_chitiet['DonGia']?>đ</p>
						<p style="font-size: 20px;color: black">Số lượng còn: <?php echo $dong_chitiet['SoLuong']?></p>
						<p>Chi tiết...</p>
						</a>
					</li>
						
					<?php
					}
						 
	
					?>
					
				</ul>
			</div>


	