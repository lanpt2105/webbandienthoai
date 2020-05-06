<?php
	$sql_chitiet="select * from sanpham where MaKM='5'";
	$query=mysqli_query($conn,$sql_chitiet);
	$count=mysqli_num_rows($query);
	
?>



			<div class="sanphamall">
				<ul>
					 <?php
					
						while($dong_chitiet=mysqli_fetch_array($query)){
						?>
					
					<li>
						
						<a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitiet['MaSP'] ?>">
							<center><img src="img/company/new.png" width="60px height='40px'"/></center>
						<img src="<?php echo $dong_chitiet ['HinhAnh']?>" width="200" height="200"/>
						<p style="font-size: 20px; text-align: center;color: black;font-weight: bold;"><?php echo $dong_chitiet['TenSP']?></p>
						<p style="font-size: 18px; margin:left: 0px; color:firebrick;font-weight: bold;">Giá: <?php echo $dong_chitiet['DonGia']?>đ</p>
						<p style="font-size: 20px;color: black">Số lượng còn: <?php echo $dong_chitiet['SoLuong']?></p>
						<p>Chi tiết...</p>
						
					</li>
						</a>
						
					<?php
					}
						 
	
					?>
					
				</ul>
			</div>


	