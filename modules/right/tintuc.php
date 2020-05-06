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
	$trang=0;
}
else
{
	$trang=($get_trang*5)-5;
}
$sql_tt="select * from tintuc limit $trang,5";
$query_tt=mysqli_query($conn,$sql_tt);
?>
			<p style="color:midnightblue; font-family:'abril-fatface' ; font-size: 27px; font-weight:bold;font-style: italic; text-align: center; padding-top: 5px;">Tất cả tin tức</p>
			<div class="sanphamall">
				<ul>
					
					<?php
					while($dong_tt=mysqli_fetch_array($query_tt))
					{
					?>
					<li><a href="index.php?xem=chitiettintuc&id=<?php echo $dong_tt ['MaTT']?>">
						<img src="<?php echo $dong_tt ['HinhAnh']?>" width="200" height="200"/>
						<p style="font-size: 20px; text-align: center;color: black;font-weight: bold;"><?php echo $dong_tt['TenTT']?></p>
						<p style="font-size: 18px; margin:left: 0px; color:firebrick;font-weight: bold;"><?php echo $dong_tt['MoTa']?></p>
						
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
$sql_trang=mysqli_query($conn,"select * from tintuc");
$count=mysqli_num_rows($sql_trang);
$a=ceil($count/5);
for($b=1;$b<=$a;$b++){
		if($trang==$b){
		echo '<a href="index.php?xem=tintuc&trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.''.'</a>';
	}else{
		echo '<a href="index.php?xem=tintuc&trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
	}
	}

?><br>
	
	Trang hiện tại: <span style="color:crimson; "><?php echo $get_trang ?></span>
</p>
	
			