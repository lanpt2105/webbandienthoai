<?php 
if (isset($_COOKIE['cart'])) {
	$cart = unserialize($_COOKIE['cart'], ["allowed_classes" => false]);
}
?>
<div class="row">
	<div class="danhsach">
		<h3>Danh sách sản phẩm</h3>
		<table class="table table-bordered">
			<tr>
				<th>STT</th>
				<th>Tên sản phẩm</th>
				
				<th>Giá</th>
				<th>Số lượng</th>
				<th>Thành tiền</th>
				<th>Action</th>
			</tr>
			<?php
			if(isset($cart) && !empty($cart))
			{
				$i=0;
				foreach($cart as $key => $value) 
				{
					$i++;
				
			?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $value["name"] ?></td>
				
				<td><?php echo $value["cost"] ?></td>
				<td><?php echo $value["amount"] ?></td>
				<td>
					<?php
							echo $total=$value["amount"]*$value["cost"] 
					?>
					
				
				</td>
				<td></td>
			</tr>
			
			<?php
				}
			}
			?>
		</table>
	</div>
</div>