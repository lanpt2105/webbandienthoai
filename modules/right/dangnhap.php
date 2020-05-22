
<head>
	<p style="text-align: center; font-size: 40px; font-family:arizonia; font-weight: bold;">Xin chào!!!</p>
	

<center><div class="dangky">
  <p style="font-size:18px; color:red;margin:20px;">Các mục dấu (*) là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác.</p>
  <form action="" method="post" enctype="multipart/form-data">
	<center><table width="600" border="0"  style="border-collapse:collapse; ">
		<center><p style="font-size: 25px; font-weight: bold; padding-bottom: 5px;">Vui lòng điền thông tin đăng nhập dưới đây</p></center>
  <tr>
    <td width="40%" style="font-size: 22px; ">Tên đăng nhập: <strong style="color:red;"> (*)</strong></td>
    <td width="59%" style="padding-bottom: 10px;"><input type="text" name="TaiKhoan" size="30" style="height: 25px;" ></td>
  </tr>
	<tr style="padding-top: 3px;">
    <td style="font-size: 22px; ">Mật khẩu : <strong style="color:red;"> (*)</strong></td>
   <td width="59%"><input type="password" name="pass" size="30" style="height: 25px;" ></td>
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
			$row_s=mysqli_fetch_array($query);
			$_SESSION['dangnhap']=array(
					'id' => $row_s['MaND'],
					'ten' => $row_s['Ten'],
					
					'gt' => $row_s['GioiTinh'],
					'sdt' => $row_s['SDT'],
					'email' => $row_s['Email'],
					'dc' => $row_s['DiaChi'],
					'username' => $row_s['TaiKhoan'],
				);
				
			 echo '<script language="javascript">';
            echo 'alert("Đăng nhập thành công!!!")';
            echo '</script>';
		
			echo '<a href="index.php?quanly=listcart" style="font-size:20px;"><< Quay lại để thanh toán</a>';
		}else{
			 
				 echo '<script language="javascript">';
            echo 'alert("Tài khoản hoặc mật khẩu không đúng!!!")';
            echo '</script>';
		}
	}
	 
            
?>


