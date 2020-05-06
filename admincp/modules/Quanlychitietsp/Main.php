<div class="left">
	<?php
	if(isset($_GET['ac']))
	{
		$tam=$_GET['ac'];
	}
	else
	{
		$tam='';
	}
	if($tam=='them')
	{
		include('modules/Quanlychitietsp/Them.php');
	}
	if($tam=='sua')
	{
		include('modules/Quanlychitietsp/Sua.php');
	}
	?>
</div><br>
<div class="right">
	<?php
	    include('modules/Quanlychitietsp/Lietke.php');
	?>
</div>