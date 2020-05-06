
<?php
$sql_chitietsp="select * from sanpham where MaSp=$_GET[id]";
$query_chitietsp=mysqli_query($conn,$sql_chitietsp);
$dong_chitietsp=mysqli_fetch_array($query_chitietsp);
?>

<p style="color:midnightblue; font-family:'abril-fatface' ; font-size: 27px; font-weight:bold;font-style: italic; text-align: center; padding-top: 5px;">Chi tiết sản phẩm</p>
			<div class="sanphamall">
				<ul>
					
					
					
					<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitietsp ['MaSP']?>">
						<img src="<?php echo $dong_chitietsp ['HinhAnh']?>" width="290" height="300"/>
						
						<p style="font-size: 20px; text-align: center;color: black;font-weight: bold;"><?php echo $dong_chitietsp['TenSP']?></p>
						<p style="font-size: 20px; margin:left: 0px; color: red;font-weight: bold;">Giá: <?php echo $dong_chitietsp['DonGia']?>đ</p>
						<p style="font-size: 20px;color: black">Số lượng còn: <?php echo $dong_chitietsp['SoLuong']?></p></a>
						<a href="modules/right/giohang.php?xem=giohang&add=<?php echo $dong_chitietsp['MaSP'] ?>"><center><img src="img/smallBanners/cart.jpg" width="50" height="50"/></center></a>
						
					</li>
						<table width="450" border="0" style="margin-left: 450px; font-size: 20px;margin-top: 10px;">
							<caption style="font-size: 25px; color: firebrick; font-weight: bold;">Thông số kỹ thuật</caption>
  <tbody>
    
    <tr>
      <td>Mã khuyến mại:</td>
      <td><?php echo $dong_chitietsp['MaKM']?></td>
    </tr>
    <tr>
      <td>Màn hình:</td>
      <td><?php echo $dong_chitietsp['ManHinh']?></td>
    </tr>
    <tr>
      <td>Hệ điều hành:</td>
      <td><?php echo $dong_chitietsp['HDH']?></td>
    </tr>
    <tr>
      <td>Camera sau: </td>
      <td><?php echo $dong_chitietsp['CamSau']?></td>
    </tr>
    <tr>
      <td>Camera trước:</td>
      <td><?php echo $dong_chitietsp['CamTruoc']?></td>
    </tr>
    <tr>
      <td>CPU: </td>
      <td><?php echo $dong_chitietsp['CPU']?></td>
    </tr>
    <tr>
      <td>RAM:</td>
      <td><?php echo $dong_chitietsp['Ram']?></td>
    </tr>
    <tr>
      <td>ROM:</td>
      <td><?php echo $dong_chitietsp['Rom']?></td>
    </tr>
    <tr>
      <td>SD Card: </td>
      <td><?php echo $dong_chitietsp['SDCard']?></td>
    </tr>
    <tr>
      <td>PIN:</td>
      <td><?php echo $dong_chitietsp['Pin']?></td>
    </tr>
    <tr>
      <td>Số sao:</td>
      <td><?php echo $dong_chitietsp['SoSao']?></td>
    </tr>
  </tbody>
	
</table>			
					
</div>