<div class="left">
    <?php
        if(isset($_GET['ac'])){
            $tam=$_GET['ac'];
        }
        else{
            $tam='';
        }
	if($tam=='list')
	{
		include('modules/Quanlydonhang/Listoder.php');
	}
        
    ?>
</div><br/>
<div class="right">
        <?php
            if($tam == '' || $tam == 'list'){
                include('modules/Quanlydonhang/Listoder.php');
            }
            if($tam=='detail')
            {
                include('modules/Quanlydonhang/Detail.php');
            }
        ?>
</div>