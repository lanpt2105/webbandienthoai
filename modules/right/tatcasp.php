<?php
if(isset($_GET['trang']))
{
	$get_trang=$_GET['trang'];
}
else
{
	$get_trang='';
}
if($get_trang==''|| $get_trang==1)
{
	$trang1=0;
}
else
{
	$trang1=($get_trang*10)-10;
}
$sql_all="select * from sanpham where SoLuong > 0 limit $trang1,10";
$query_all=mysqli_query($conn,$sql_all);
?>
			<p style="color:midnightblue; font-family:'abril-fatface' ; font-size: 27px; font-weight:bold;font-style: italic; text-align: center; padding-top: 5px;">Tất cả sản phẩm</p>
			<div class="sanphamall">
				<ul>
					
					<?php
					while($dong_all=mysqli_fetch_array($query_all))
					{
					?>
					<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_all ['MaSP']?>">
						<img src="<?php echo $dong_all ['HinhAnh']?>" width="200" height="200"/>
						<p style="font-size: 20px; text-align: center;color: black;font-weight: bold;"><?php echo $dong_all['TenSP']?></p>
						<p style="font-size: 18px; margin:left: 0px; color:firebrick;font-weight: bold;">Giá: <?php echo $dong_all['DonGia']?>đ</p>
						<p style="font-size: 20px;color: black">Số lượng còn: <?php echo $dong_all['SoLuong']?></p>
						<p>Chi tiết...</p>
						</a>
					</li>
						
					<?php
					}
					?>
					
				</ul>
			</div>
<p style="width: 600px;float: left;padding-left: 350px; padding-top: 20px;font-weight: bold;">
	Trang: 
<?php
$sql_trang=mysqli_query($conn,"select * from sanpham");
$count=mysqli_num_rows($sql_trang);
$a=ceil($count/10);
for($b=1;$b<=$a;$b++)
{
	echo ' <a href="?trang='.$b.'" style="text-decoration:none;color:red;">'.' '.$b.' '.'</a> ';
}

?><br>
	
	Trang hiện tại: <span style="color:darkred; "><?php echo $get_trang ?></span>
</p>
	
			