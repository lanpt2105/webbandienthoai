
<p style="text-align: center; font-size: 40px; font-family:arizonia; font-weight: bold;">Xin chào!!!</p>
	

<center><div class="dangky">
  <p style="font-size:18px; color:red;margin:20px;">Các mục dấu (*) là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác.</p>
  <form action="" method="post" enctype="multipart/form-data">
	<center><table width="600" border="0"  style="border-collapse:collapse; ">
		<center><p style="font-size: 25px; font-weight: bold; padding-bottom: 5px;">Vui lòng điền thông tin đăng nhập dưới đây</p></center>
  <tr>
    <td width="40%" style="font-size: 22px; ">Tên đăng nhập: <strong style="color:red;"> (*)</strong></td>
    <td width="59%"><input type="text" name="TaiKhoan" size="30" style="height: 25px;" ></td>
  </tr>
	<tr style="padding-top: 3px;">
    <td style="font-size: 22px; ">Mật khẩu : <strong style="color:red;"> (*)</strong></td>
   <td width="59%%"><input type="password" name="pass" size="30" style="height: 25px;" ></td>
  </tr>
  <tr>
    <td colspan="2">
    	 
         <center><p style="font-size: 35px;font-weight: bold;"><input type="submit" name="dangnhap" value="Đăng Nhập" /></p></center>  
         
    </td>
    </tr>
</table>
	  </center>
</form>

</div>
	

	<h3><a href="index.php?xem=dangkymoi&id=1" style="text-decoration:none;color:#FFF;margin:10px;border-radius:10px;padding:10px;;background:#F00;float:right;" >Đăng ký mới?</a></h3>
	<?php
	
	if(isset($_POST['dangnhap'])){
		$TaiKhoan=$_POST['TaiKhoan'];
		$pass=$_POST['pass'];
		$sql="select * from user where TaiKhoan='$TaiKhoan' and MatKhau='$pass' limit 1";
		$query=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($query);
		
		if($count>0){
			$tendangnhap=$_SESSION['dangnhap']=$TaiKhoan;
			echo '<center><p style="text-align:center;width:500px;padding:30px;background:gray;color:#fff;font-size:40px;padding-top: 30px;">Bạn đã đăng nhập thành công.</p></center>';
		
			echo '<a href="index.php?quanly=listcart" style="font-size:20px;"><< Quay lại để thanh toán</a>';
		}else{
			 
				echo '<center><p style="text-align:center;width:500px;padding:30px;background:black;color:white;font-size:30px;">Tài khoản hoặc mật khẩu không đúng</p></center>';
		}
	}
?>

