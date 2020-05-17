
	<p style="margin-left: 600px;">
<form action="modules/Quanlychitietsp/Xuly.php" method="post" enctype="multipart/form-data">
<table width="500px" border="0" style="margin-left: 500px;margin-top:-1560px; float: right;background:#A7E98F;">
  <tbody>
    <tr>
      <th colspan="2" style="padding-left: 120px;font-weight: bold;font-size: 22px;">Sửa chi tiết sản phẩm</th>
      
    </tr>
	  <?php
	  $sql="select * from sanpham where MaSP='$_GET[id]'";
	  $run=mysqli_query($conn,$sql);
	  $dong=mysqli_fetch_array($run);
	  
	  ?>
	  <?php
  $sql_loaisp = "select MaLSP from loaisanpham ";
  $row_loaisp=mysqli_query($conn,$sql_loaisp);
	   $dong_loaisp=mysqli_fetch_array($row_loaisp);
  ?>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Mã loại sản phẩm:</td>
      <td><input type="text" name="maloaisp" value="<?php echo $dong_loaisp['MaLSP'] ?>"></td>
		 
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Tên sản phẩm:</td>
      <td><input type="text" name="tensp" value="<?php echo $dong['TenSP'] ?>"></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Đơn giá:</td>
      <td><input type="text" name="gia" value="<?php echo $dong['DonGia'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Số lượng còn:</td>
      <td><input type="text" name="soluong" value="<?php echo $dong['SoLuong'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Hình ảnh:</td>
      <td><input type="text" name="hinhanh" value="<?php echo $dong['HinhAnh'] ?>" /></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Mã khuyến mại:</td>
      <td><input type="text" name="makhuyenmai" value="<?php echo $dong['MaKM'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Màn hình:</td>
      <td><input type="text" name="manhinh" value="<?php echo $dong['ManHinh'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Hệ điều hành:</td>
      <td><input type="text" name="hdh" value="<?php echo $dong['HDH'] ?>" /></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Camera sau:</td>
      <td><input type="text" name="camsau" value="<?php echo $dong['CamSau'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Camera trước:</td>
      <td><input type="text" name="camtruoc" value="<?php echo $dong['CamTruoc'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">CPU: </td>
      <td><input type="text" name="cpu" value="<?php echo $dong['CPU'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">RAM:</td>
      <td><input type="text" name="ram" value="<?php echo $dong['Ram'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">ROM:</td>
      <td><input type="text" name="rom" value="<?php echo $dong['Rom'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">SD Card: </td>
      <td><input type="text" name="sdcard" value="<?php echo $dong['SDCard'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">PIN:</td>
      <td><input type="text" name="pin" value="<?php echo $dong['Pin'] ?>"/></td>
    </tr>
    <tr>
      <td style="padding-left: 20px;font-weight: bold;">Số sao:</td>
      <td><input type="text" name="sosao" value="<?php echo $dong['SoSao'] ?>"/></td>
    </tr>
	  <tr>
      <td style="padding-left: 20px;font-weight: bold;">Số đánh giá:</td>
      <td><input type="text" name="sodanhgia" value="<?php echo $dong['SoDanhGia'] ?>"/></td>
    </tr>
	  <tr>
      <td style="padding-left: 20px;font-weight: bold;">Trạng thái:</td>
      <td><input type="text" name="trangthai" value="<?php echo $dong['TrangThai'] ?>"/></td>
    </tr>
	  <tr>
      <td colspan="2"><div align="center" >
		  <input type="submit" name="sua" id="sua" value="Sửa" style="border-radius: 6px;background:yellow;font-size: 20px;" />
		  </div></td>
      
    </tr>
  </tbody>
</table>
</form>
	</p>
	
