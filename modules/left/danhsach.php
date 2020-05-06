<?php
$sql_loaisp="select * from loaisanpham";
$query=mysqli_query($conn,$sql_loaisp);

?>
				<p style="color:midnightblue; font-family:'abril-fatface' ; font-size: 27px; font-weight:bold;font-style: italic; text-align: center; padding-top: 5px;">Loại sản phẩm</p>
				<ul class="Loaisp">
					<?php
					while($dong_sp=mysqli_fetch_array($query))
					{
					?>
					<li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_sp['MaLSP']?>"><?php echo $dong_sp['TenLSP']?></a></li>
					<?php
					}
						?>
					
				</ul>
