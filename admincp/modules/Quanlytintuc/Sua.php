
<?php
$sql="select * from tintuc where MaTT=$_GET[id]";
$run=mysqli_query($conn,$sql);
$dong=mysqli_fetch_array($run);

?>
<form action="modules/Quanlytintuc/Xuly.php" method="post" enctype="multipart/form-data">
	<table width="1000px" border="0 " style="font-size: 20px;margin-top:20px;margin-left: 20px;">
  <tbody>
    <tr >
		<td colspan="2"><div style="padding-left: 100px; font-size: 30px;font-weight: bold;padding-bottom: 4px;color: #080C49;">Sửa tin tức</div></td>
    </tr>
    <tr>
      <td width="300px">Mã loại tin tức</td>
      <td><input type="text" name="tenloaisp" value="<?php echo $dong['MaLTT'] ?>"/></td>
    </tr>
	  <tr>
      <td>Tên tin tức</td>
      <td><input type="text" name="tentt" value="<?php echo $dong['TenTT'] ?>"/></td>
    </tr>
	  <tr>
      <td>Mô tả</td>
      <td><input type="text" name="mota" value="<?php echo $dong['MoTa'] ?>"/></td>
    </tr>
	  <tr>
      <td>Nội dung</td>
      <td><input type="text" name="noidung" value="<?php echo $dong['NoiDung'] ?>"/></td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="text" name="hinhanh" value="<?php echo $dong['HinhAnh'] ?>"/></td>
    </tr>
    <tr>
      <td>Tin Hot</td>
      <td><input type="text" name="tinhot" value="<?php echo $dong['TinHot'] ?>"/></td>
    </tr>
	  <tr>
      <td>Ngày</td>
      <td><input type="datetime" name="ngay" value="<?php echo $dong['Ngay'] ?>"/></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"/></div> </td>
      
    </tr>
  </tbody>
</table>
</form>