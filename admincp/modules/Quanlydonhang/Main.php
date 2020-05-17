<div class="left">
    <?php
        if(isset($_GET['ac'])){
            $tam=$_GET['ac'];
        }
        else{
            $tam='';
        }
    if($tam=='update')
	{
		include('modules/Quanlydonhang/Update.php');
	}
	if($tam=='list')
	{
		include('modules/Quanlydonhang/Listoder.php');
	}
        
    ?>
</div><br/>
<div class="right">
        <?php
            include('modules/Quanlydonhang/Listoder.php');
        ?>
</div>