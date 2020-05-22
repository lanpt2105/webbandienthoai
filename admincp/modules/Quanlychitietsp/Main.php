<div class="left">
	<!-- <?php
	    include('modules/Quanlychitietsp/Lietke.php');
	?> -->
</div><br>
<div class="right">
<?php
	if(isset($_GET['ac']))
	{
		$tam=$_GET['ac'];
	}
	else
	{
		$tam='';
	}
	if($tam == ''){
	    include('modules/Quanlychitietsp/Lietke.php');
	}
	if($tam=='sua')
	{
		include('modules/Quanlychitietsp/Sua.php');
	}
	if($tam=='them')
	{
		include('modules/Quanlychitietsp/Them.php');
	}
	?>
	
</div>
