
<?php
$sql="select * from tintuc where MaTT=$_GET[id]";
$run=mysqli_query($conn,$sql);
$dong=mysqli_fetch_array($run);

?>
<form action="modules/Quanlytintuc/Xuly.php" method="post" enctype="multipart/form-data">
	<table width="1000px" border="0 " style="font-size: 20px;margin-top:20px;margin-bottom:10px;margin-left: 200px;background:#A7E98F;">
  <tbody>
    <tr >
		<td colspan="2"><div style="padding-left: 100px; font-size: 30px;font-weight: bold;padding-bottom: 4px;color: #080C49;">Sửa tin tức</div></td>
    </tr>
    <tr>
      <td width="300px" style="padding-left: 10px;">Mã loại tin tức</td>
      <td style="padding-bottom: 5px;"><input type="text" name="tenloaisp" value="<?php echo $dong['MaLTT'] ?>"/></td>
    </tr>
	  <tr>
      <td style="padding-left: 10px;">Tên tin tức</td>
      <td style="padding-bottom: 5px;"><input type="text" name="tentt" value="<?php echo $dong['TenTT'] ?>"/></td>
    </tr>
	  <tr>
      <td style="padding-left: 10px;">Mô tả</td>
      <td style="padding-bottom: 5px;"><input type="text" name="mota" value="<?php echo $dong['MoTa'] ?>"/></td>
    </tr>
	  <tr>
      <td style="padding-left: 10px;">Nội dung</td>
      <td style="padding-bottom: 5px;"><input type="text" name="noidung" value="<?php echo $dong['NoiDung'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 10px;">Hình ảnh</td>
      <td style="padding-bottom: 5px;"><input type="text" name="hinhanh" value="<?php echo $dong['HinhAnh'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 10px;">Tin Hot</td>
      <td style="padding-bottom: 5px;"><input type="text" name="tinhot" value="<?php echo $dong['TinHot'] ?>"/></td>
    </tr>
	  <tr>
      <td style="padding-left: 10px;">Ngày</td>
      <td style="padding-bottom: 5px;"><input type="datetime" name="ngay" value="<?php echo $dong['Ngay'] ?>"/></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa" style="border-radius: 6px;background:yellow;"/></div> </td>
      
    </tr>
  </tbody>
</table>
</form>