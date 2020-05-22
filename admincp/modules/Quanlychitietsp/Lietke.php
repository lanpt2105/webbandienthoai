
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

<div class="tc">
<div class="lk2">
	<center><h1> Danh sách sản phẩm</h1></center>
<input type="button" style="margin-left: 20px;margin-bottom:5px;" class="btn btn-success" onclick="location.href='index.php?quanly=quanlychitietsanpham&ac=them';" value="Thêm" />
<table width="100%" border="1" style="margin-left: 20px;margin-bottom:5px; background: #C87879;" >
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
     
    <td >
      <input type="button" class="btn btn-primary" onclick="location.href='index.php?quanly=quanlychitietsanpham&ac=sua&id=<?php echo $dong['MaSP'] ?>';" value="Sửa" />
    </td>
    <td>
                        <form method="post" action="index.php?quanly=quanlydonhang" onSubmit="return confirm('Bạn có chắc chắn xoá?')">
                            <input type="hidden" name="id" value="<?php echo $dong['MaHD'] ?>" />
                            <button type="submit" name="delete" class="btn btn-danger" style="margin-left: 10px;margin-top: 10px;">Xoá</button>
                        </form>
                    </td>


  </tr>
  <?php
  $i++;
  }
  ?>
</table>
</div>
<p style="float: left;padding-left: 800px; padding-top: 20px;font-weight: bold;">
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