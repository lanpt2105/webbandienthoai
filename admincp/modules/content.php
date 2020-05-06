<div class="content">
	<?php
	if(isset($_GET['quanly']))
	{
		$tam=$_GET['quanly'];
	}
	else
	{$tam='';}
	if($tam=='quanlyloaisanpham')
	{
		include('modules/Quanlyloaisp/Main.php');
	}
	if($tam=='quanlychitietsanpham')
	{
		include('modules/Quanlychitietsp/Main.php');
	}
	if($tam=='quanlytintuc')
	{
		include('modules/Quanlytintuc/Main.php');
	}
	if($tam=='trangchu')
	{
		include('modules/trangchu.php');
	}
		
	?>
	<div class="clear"></div>
</div>