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
		include('modules/Quanlyloaisp/Them.php');
	}
	if($tam=='sua')
	{
		include('modules/Quanlyloaisp/Sua.php');
	}
	if($tam=='lietke')
	{
		include('modules/Quanlyloaisp/Lietke.php');
	}
	?>
</div><br>
<div class="right">
	<?php
	    include('modules/Quanlyloaisp/Lietke.php');
	?>
</div>