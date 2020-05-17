<?php
	$sql="select * from user order by MaND asc";
	$run=mysqli_query($conn,$sql);
?>
<table width="90%" border="1" style="margin-left: 20px;margin-bottom:5px;" class="table-hover">
  <tbody>
    <tr>
      <th>STT</th>
      <th>Mã user</th>
      <th >Tên tài khoản</th>
      
      <th >Tên</th>
      <th >Giới tính</th>
      <th >SDT</th>
      <th >Email</th>
      <th >Địa chỉ</th>
      <th >Mã quyền</th>
      <th colspan="2" align="center">Quản lý</th>
      
    </tr>
	  <?php
	  $i=0;
	  while ( $dong=mysqli_fetch_array($run))
	  {
	  ?>
    <tr>
      <td align="center"><?php echo $i; ?> </td>
      <td><?php echo $dong['MaND'] ?></td>
      <td align="center"><?php echo $dong['TaiKhoan'] ?></td>
      
      <td><?php echo $dong['Ten'] ?></td>
      <td><?php echo $dong['GioiTinh'] ?></td>
      <td><?php echo $dong['SDT'] ?></td>
      <td><?php echo $dong['Email'] ?></td>
      <td><?php echo $dong['DiaChi'] ?></td>
      <td><?php echo $dong['MaQuyen'] ?></td>
      <td align="center"><a href="index.php?quanly=Quanlythanhvien&ac=sua&id=<?php echo $dong['MaND'] ?>">Sửa</a></td>
      <td align="center"><a href="modules/Quanlythanhvien/Xuly.php?id=<?php echo $dong['MaND'] ?>">Xóa</a></td>
    </tr>
	  <?php
		  $i++;
	  }
	  ?>
	 
	  
  </tbody>
</table>
