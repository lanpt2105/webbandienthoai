
<?php
$sql="select * from user where MaND=$_GET[id]";
$run=mysqli_query($conn,$sql);
while($dong=mysqli_fetch_array($run))

?>
<form action="modules/Quanlythanhvien/Xuly.php" method="post" enctype="multipart/form-data">
	<table width="400px" border="0 " style="font-size: 20px;margin-top:20px;margin-left: 20px;">
  <tbody>
    <tr >
		<td colspan="2"><div style="padding-left: 100px;">Sửa thông  tin người dùng</div></td>
    </tr>
    <tr>
      <td>Họ & tên: </td>
      <td><input type="text" name="Ten" value="<?php echo $dong['Ten'] ?>"/></td>
    </tr>
    <tr>
      <td>Giới tính:</td>
      <td><input type="text" name="GioiTinh" value="<?php echo $dong['GioiTinh'] ?>"/></td>
    </tr>
     <tr>
      <td style="padding-left: 5px;" >Địa chỉ: </td>
      <td><input type="text" name="DiaChi" value="<?php echo $dong['DiaChi'] ?>" /></td>
    </tr>
     <tr>
      <td style="padding-left: 5px;" >Tên đăng nhập: </td>
      <td><input type="text" name="TaiKhoan" value="<?php echo $dong['TaiKhoan'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 5px;" >Mật khẩu: </td>
      <td><input type="text" name="MatKhau" value="<?php echo $dong['MatKhau'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 5px;" >Mã quyền: </td>
      <td><input type="text" name="MaQuyen" value="<?php echo $dong['MaQuyen'] ?>"/></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"/></div> </td>
      
    </tr>
  </tbody>
</table>
</form>
