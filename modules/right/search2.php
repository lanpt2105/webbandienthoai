<?php
if(isset($_GET['khoanggia']))
{
	$khoanggia=$_GET['khoanggia'];
	$khoang=preg_split('[\s]', $khoanggia);
	$from=0;
	$to=0;
	if($khoang[0]=='Trên')
	{
		$from=$khoang[1];
	}
	else
	{
		$khoang1=preg_split('[\-]', $khoang[0]);
		$from=$khoang1[0];
		$to=$khoang1[1];
	}
	$from*=1000000;
	$to*=1000000;
	$query ="select * from sanpham where DonGia >= ".$from;
	if($to!=0)
	{
		$query.=" and DonGia <= ".$to;
	}
	
	$result= mysqli_query($conn,$query);
}

?>
<p style="color:midnightblue; font-family:'abril-fatface' ; font-size: 35px; font-weight:bold;font-style: italic; text-align: center; padding-top: 5px;"> Sản phẩm tìm thấy</p>
			<div class="sanphamall">
				<?php
				if($count=mysqli_num_rows($result)==0)
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
					while($dong_search=mysqli_fetch_array($result))
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
		
			

			
			