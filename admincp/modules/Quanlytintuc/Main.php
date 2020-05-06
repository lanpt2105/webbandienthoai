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
		include('modules/Quanlytintuc/Them.php');
	}
	if($tam=='sua')
	{
		include('modules/Quanlytintuc/Sua.php');
	}
	?>
</div><br>
<div class="right">
	<?php
	    include('modules/Quanlytintuc/Lietke.php');
	?>
</div>