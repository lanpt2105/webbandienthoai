

<?php
if(isset($_POST['search']))
{
	$search=$_POST['searchtext'];
	$sql_search="select * from sanpham where TenSP LIKE '%$search%'";
	$query_search=mysqli_query($conn,$sql_search);
}

?>
			<p style="color:midnightblue; font-family:'abril-fatface' ; font-size: 35px; font-weight:bold;font-style: italic; text-align: center; padding-top: 5px;"> Sản phẩm tìm thấy</p>
			<div class="sanphamall">
				<?php
				if($count=mysqli_num_rows($query_search)==0)
				{
					?>
				<p style="font-size: 30px;">Òoooo...Không tìm thấy sản phẩm rùi!!</P>
				<?php
					
				}
				else
				{
				?>
				<ul>
					<?php
					while($dong_search=mysqli_fetch_array($query_search))
					{
					?>
					<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_search ['MaSP']?>">
						<img src="<?php echo $dong_search ['HinhAnh']?>" width="220" height="220"/>
						<p style="font-size: 20px; text-align: center;color: black;font-weight: bold;"><?php echo $dong_search ['TenSP']?></p>
						<p style="font-size: 20px; margin:left: 0px; color: red;font-weight: bold;">Giá: <?php echo $dong_search['DonGia']?>đ</p>
						<p style="font-size: 20px;color: black">Số lượng còn: <?php echo $dong_search ['SoLuong']?></p>
						<p>Chi tiết...</p></a></li>
					<?php
					}
				}
					?>
					
				</ul>
			</div>
			