
		<div class="content">
			
			<div class="left">
				<?php
				include('modules/left/danhsach.php');
				?>
			</div>
			<div class="right">	
				
				<?php
				if (isset($_GET['xem']))
				{
					$tam=$_GET['xem'];
				}
				else
				{
					$tam='';
				}
				if($tam=='chitietloaisanpham')
				{
					include('modules/right/chitietloaisanpham.php');
				}
				elseif($tam=='chitietsanpham')
				{
					include('modules/right/chitietsanpham.php');
				}
				elseif($tam=='sanphammoi')
				{
					include('modules/right/sanphammoi.php');
				}
				elseif($tam=='dangnhap')
				{
					include('modules/right/dangnhap.php');
				}
				elseif($tam=='dangkymoi')
				{
					include('modules/right/dangkymoi.php');
				}
				elseif($tam=='tintuc')
				{
					include('modules/right/tintuc.php');
				}
				elseif($tam=='chitiettintuc')
				{
					include('modules/right/chitiettintuc.php');
				}
				elseif($tam=='listcart')
				{
					include('modules/right/listcart.php');
				}
				elseif($tam=='dathang')
				{
					include('modules/right/dathang.php');
				}
				elseif($tam=='lienhe')
				{
					include('modules/right/lienhe.php');
				}
				elseif($tam=='huongdan')
				{
					include('modules/right/huongdan.php');
				}
				elseif(isset($_POST['search']))
				{
					include('modules/right/search.php');
				}
				elseif($tam=='search2')
				{
					include('modules/right/search2.php');
				}
				else
				{
					include('modules/right/tatcasp.php');
				}
				?>
			</div>
		</div>
<div class="clear"></div>