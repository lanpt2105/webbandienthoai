
<?php
	if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang='';
	}
	if($trang =='' || $trang =='1'){
		$trang1=0;
	}else{
		$trang1=($trang*2)-2;
	}
	$sql_lietkesp="select * from tintuc  order by MaTT desc limit $trang1,2 ";
	$row_lietkesp=mysqli_query($conn,$sql_lietkesp);

?>
<div class="tc">
<div class="lk2">
	<center><h1> Liệt kê tin tức</h1></center>
<table width="100%" border="1" style="margin-left: 20px;margin-bottom:5px; background: #C87879;" >
  <tbody>
    <tr>
	<th>Mã TT</th>
      <th>Mã loại TT</th>
      <th class="col-sm-2">Tên TT</th>
      <th class="col-sm-2">Mô tả</th>
	  <th class="col-sm-5">Nội dung</th>
	  <th class="col-sm-1">Hình ảnh</th>
	  <th>Tin hot</th>
	  <th>Ngày</th>
      <th colspan="2">Quản lý</th>
      
    </tr>
	  <?php
	  $i=0;
	  while ( $dong=mysqli_fetch_array($row_lietkesp))
	  {
	  ?>
    <tr>
      <td ><?php echo $i; ?> </td>
      <td><?php echo $dong['MaLTT'] ?></td>
      <td><?php echo $dong['TenTT'] ?></td>
      <td><?php echo $dong['MoTa'] ?></td>
	  <td><?php echo $dong['NoiDung'] ?></td>
      <td><?php echo $dong['HinhAnh'] ?></td>
      <td><?php echo $dong['TinHot'] ?></td>
	  <td><?php echo $dong['Ngay'] ?></td>
      <td width=-20%><a href="index.php?quanly=quanlytintuc&ac=sua&id=<?php echo $dong['MaTT'] ?>">Sửa</a></td>
      <td width=-20%><a href="modules/Quanlytintuc/Xuly.php?id=<?php echo $dong['MaTT'] ?>">Xóa</a></td>
    </tr>
	  <?php
		  $i++;
	  }
	  ?>
	 
	  
  </tbody>
</table>
	</div> 
<p style="width: 600px;float: left;padding-left: 800px; padding-top: 20px;font-weight: bold;"">
	Trang:
    <?php
	$sql1="select * from tintuc";
	$sql_trang=mysqli_query($conn,$sql1);
	$count_trang=mysqli_num_rows($sql_trang);
	$a=ceil($count_trang/2);
	for($b=1;$b<=$a;$b++){
		if($trang==$b){
		echo '<a href="index.php?quanly=quanlytintuc&ac=lietke&trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.' ' .'</a>';
	}else{
		echo '<a href="index.php?quanly=quanlytintuc&ac=lietke&trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
	}
	}
	?>
</p>
 </div>
											
																							  
