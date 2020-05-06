
<?php
$sql_chitiettt="select * from tintuc where MaTT=$_GET[id]";
$query_chitiettt=mysqli_query($conn,$sql_chitiettt);
$dong_chitiettt=mysqli_fetch_array($query_chitiettt);
?>

<p style="color:midnightblue; font-family:'abril-fatface' ; font-size: 27px; font-weight:bold;font-style: italic; text-align: center; padding-top: 5px;">Chi tiết tin tức</p>
			<div class="tt">
				
					
					
					
						
						<p style="font-size: 30px; text-align: center;color: black;font-weight: bold;padding-bottom: 5px;"><?php echo $dong_chitiettt['TenTT']?></p>
						<center><img src="<?php echo $dong_chitiettt ['HinhAnh']?>" width="400" height="250"/></center>
						
						
						<p style="font-size: 20px; margin-left: 0px; ;font-weight: bold;width="800""> <?php echo $dong_chitiettt['MoTa']?></p>
						<p style="font-size: 24px;color: black;"> <?php echo $dong_chitiettt['NoiDung']?></p>
			
						
						
				
						
					
</div>