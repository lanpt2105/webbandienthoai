<?php
	$sql="select * from loaisanpham order by MaLSP desc";
	$run=mysqli_query($conn,$sql);
?>
<table width="90%" border="1" style="margin-left: 20px;margin-bottom:5px;">
  <tbody>
    <tr>
      <th>Mã loại SP</th>
      <th>Tên loại SP</th>
      <th>Hình ảnh</th>
      <th>Mô tả</th>
      <th colspan="2">Quản lý</th>
      
    </tr>
	  <?php
	  $i=0;
	  while ( $dong=mysqli_fetch_array($run))
	  {
	  ?>
    <tr>
      <td ><?php echo $i; ?> </td>
      <td><?php echo $dong['TenLSP'] ?></td>
      <td><?php echo $dong['HinhAnh'] ?></td>
      <td><?php echo $dong['Mota'] ?></td>
      <td><a href="index.php?quanly=quanlyloaisanpham&ac=sua&id=<?php echo $dong['MaLSP'] ?>">Sửa</a></td>
      <td><a href="modules/Quanlyloaisp/Xuly.php?id=<?php echo $dong['MaLSP'] ?>">Xóa</a></td>
    </tr>
	  <?php
		  $i++;
	  }
	  ?>
	 
	  
  </tbody>
</table>
