<?php
	$sql="select * from loaisanpham order by MaLSP desc";
	$run=mysqli_query($conn,$sql);
?>
<table width="90%" border="1" style="margin-left: 20px;margin-bottom:5px;" class="table-hover">
  <tbody>
    <tr>
      <th>STT</th>
      <th>Mã loại SP</th>
      <th class="col-sm-1">Tên loại SP</th>
      <th class="col-sm-1">Hình ảnh</th>
      <th  >Mô tả</th>
      <th colspan="2" align="center">Quản lý</th>
      
    </tr>
	  <?php
	  $i=0;
	  while ( $dong=mysqli_fetch_array($run))
	  {
	  ?>
    <tr>
      <td align="center"><?php echo $i; ?> </td>
      <td align="center"><?php echo $dong['MaLSP'] ?></td>
      <td><?php echo $dong['TenLSP'] ?></td>
      <td><?php echo $dong['HinhAnh'] ?></td>
      <td><?php echo $dong['Mota'] ?></td>
      <td align="center"><a href="index.php?quanly=quanlyloaisanpham&ac=sua&id=<?php echo $dong['MaLSP'] ?>">Sửa</a></td>
      <td align="center"><a href="modules/Quanlyloaisp/Xuly.php?id=<?php echo $dong['MaLSP'] ?>">Xóa</a></td>
    </tr>
	  <?php
		  $i++;
	  }
	  ?>
	 
	  
  </tbody>
</table>
