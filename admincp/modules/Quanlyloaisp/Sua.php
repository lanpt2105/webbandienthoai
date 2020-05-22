
<?php
$sql="select * from loaisanpham where MaLSP=$_GET[id]";
$run=mysqli_query($conn,$sql);
while($dong=mysqli_fetch_array($run))


?>
<form action="modules/Quanlyloaisp/Xuly.php" method="post" enctype="multipart/form-data">
	<table width="500px" border="0 " style="font-size: 20px;margin-top:20px;margin-bottom:10px;margin-left: 200px;background:#A7E98F;">
  <tbody>
    <tr >
		<td colspan="2"><div style="padding-left: 100px; font-size: 25px;color: blue; font-weight: bold;">Sửa loại sản phẩm</div></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Tên loại sản phẩm:</td>
      <td><input type="text" name="tenloaisp" value="<?php echo $dong['TenLSP'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Hình ảnh:</td>
      <td><input type="text" name="hinhanh" value="<?php echo $dong['HinhAnh'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Mô tả:</td>
      <td><input type="text" name="mota" value="<?php echo $dong['Mota'] ?>"/></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"/></div> </td>
      
    </tr>
  </tbody>
</table>
</form>

