
<?php
	if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang='';
	}
	if($trang =='' || $trang =='1'){
		$trang1=0;
	}else{
		$trang1=($trang*5)-5;
	}
	$sql_lietkesp="select * from sanpham,loaisanpham where loaisanpham.MaLSP=sanpham.MaLSP  order by sanpham.MaSP desc limit $trang1,5 ";
	$row_lietkesp=mysqli_query($conn,$sql_lietkesp);

?>

<div class="lietke">
<table width="50%" border="1">
 <tr><th>Mã SP</th>
	  <th>Mã loại SP</th>
      <th>Tên sản phẩm</th>
      <th>Đơn giá</th>
      <th>Số lượng</th>
      <th>Hình ảnh</th>
      <th>Mã khuyến mại</th>
      <th>Màn hình</th>
      <th>Hệ điều hành</th>
      <th>Camera sau</th>
      <th>Camera trước</th>
      <th>CPU</th>
      <th>RAM</th>
      <th>ROM</th>
      <th>SD Card</th>
      <th>PIN</th>
      <th>Số sao</th>
      <th>Số đánh giá</th>
      <th>Trạng thái</th>
      <th colspan="2"></th>
	 
    </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($row_lietkesp)){
  ?>
  <tr>
  	
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['MaLSP'] ?></td>
      <td><?php echo $dong['TenSP'] ?></td>
      <td><?php echo $dong['DonGia'] ?></td>
      <td><?php echo $dong['SoLuong'] ?></td>
      <td><?php echo $dong['HinhAnh'] ?></td>
      <td><?php echo $dong['MaKM'] ?></td>
      <td><?php echo $dong['ManHinh'] ?></td>
      <td><?php echo $dong['HDH'] ?></td>
      <td><?php echo $dong['CamSau'] ?></td>
      <td><?php echo $dong['CamTruoc'] ?></td>
      <td><?php echo $dong['CPU'] ?></td>
      <td><?php echo $dong['Ram'] ?></td>
      <td><?php echo $dong['Rom'] ?></td>
      <td><?php echo $dong['SDCard'] ?></td>
      <td><?php echo $dong['Pin'] ?></td>
      <td><?php echo $dong['SoSao'] ?></td>
      <td><?php echo $dong['SoDanhGia'] ?></td>
      <td><?php echo $dong['TrangThai'] ?></td>
     
    <td width="50"><a href="index.php?quanly=quanlychitietsanpham&ac=sua&id=<?php echo $dong['MaSP'] ?>" >Sửa</a></td>
    <td><a href="modules/Quanlychitietsp/Xuly.php?id=<?php echo $dong['MaSP']?>" class="delete_link">Xóa</a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
	
<p style="width: 600px;float: left;padding-left: 800px; padding-top: 20px;font-weight: bold;"">
	Trang :
    <?php
	$sql1="select * from sanpham";
	$sql_trang=mysqli_query($conn,$sql1);
	$count_trang=mysqli_num_rows($sql_trang);
	$a=ceil($count_trang/5);
	for($b=1;$b<=$a;$b++){
		if($trang==$b){
		echo '<a href="index.php?quanly=quanlychitietsanpham&ac=lietke&trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.''.'</a>';
	}else{
		echo '<a href="index.php?quanly=quanlychitietsanpham&ac=lietke&trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
	}
	}
	?>
</p>
</div>

