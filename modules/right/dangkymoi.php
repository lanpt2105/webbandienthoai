
<?php
	if(isset($_POST['gui'])){
		$ho=$_POST['ho'];
		$ten=$_POST['ten'];
		$gioitinh=$_POST['gioitinh'];
		$sdt=$_POST['sdt'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$taikhoan=$_POST['taikhoan'];
		$pass=$_POST['pass'];
		$maquyen=$_POST['maquyen'];
		$trangthai=$_POST['trangthai'];
		$sql_dangky="insert into user (Ho,Ten,GioiTinh,SDT,Email,DiaChi,TaiKhoan,MatKhau,MaQuyen,TrangThai) value('$ho','$ten','$gioitinh','$sdt','$email','$diachi','$taikhoan','$pass','$maquyen','$trangthai')";
		$query_dangky=mysqli_query($conn,$sql_dangky);
		    
	if($query_dangky){
		echo '<h3 style="margin-left:5px;font-size: 20px;font-weight: bold;">Đăng ký thành công</h3>';
		echo '<a href="index.php?xem=dangnhap&id=1" style="margin:20px;text-decoration:none;font-size: 20px;font-weight: bold;">Quay lại để đăng nhập mua hàng</a>';
	}
	}
?>
	

<center><p style="font-size: 28px;font-weight: bold;font-family:'titan-one';color:midnightblue;">ĐĂNG KÝ TÀI KHOẢN</p></center>

<center><div class="dangky">
  <p style="font-size:18px; color:red;margin:5px;">(Các mục dấu * là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác)</p>
  <form action="" method="post" enctype="multipart/form-data" name="login">
	<table width="100%" height="600" border="0" style="border-collapse:collapse;">
  <tr>
    <td width="30%" style="font-size: 20px;font-weight: bold;padding-left: 10px;">Họ<strong style="color:red;"> (*):</strong></td>
    <td width="70%"><input type="text" name="ho" id="ho" size="50" style="height:30px;"></td>
  </tr>
		<tr>
    <td width="40%" style="font-size: 20px;font-weight: bold;padding-left: 10px">Tên<strong style="color:red;"> (*):</strong></td>
    <td width="60%"><input type="text" name="ten" id="ten" size="50" style="height:30px;"></td>
  </tr>
	<tr>
    <td style="font-size: 20px;font-weight: bold;padding-left: 10px">Giới tính:</strong></td>
    <td width="80%"><input type="text" name="gioitinh" id="gioitinh" size="50" style="height:30px;"></td>
  </tr>
	<tr>
    <td style="font-size: 20px;font-weight: bold;padding-left: 10px">Số điện thoại <strong style="color:red;"> (*):</strong></td>
    <td width="80%"><input type="text" name="sdt" id="sdt" size="50" style="height:30px;"></td>
  </tr>
  <tr>
    <td style="font-size: 20px;font-weight: bold;padding-left: 10px"> Email <strong style="color:red;"> (*):</strong></td>
    <td width="80%"><input type="text" name="email" id="email" size="50" style="height:30px;"></td>
  </tr>
		<tr>
    <td style="font-size: 20px;font-weight: bold;padding-left: 10px">Địa chỉ nhận hàng <strong style="color:red;"> (*)</strong></td>
   <td width="80%"><input type="text" name="diachi" id="diachi" size="50" style="height:30px;"></td>
  </tr>
		 <tr>
    <td style="font-size: 20px;font-weight: bold;padding-left: 10px">Tài Khoản  <strong style="color:red;"> (*):</strong></td>
    <td width="80%"><input type="text" name="taikhoan" id="taikhoan" size="50" style="height:30px;"></td>
  </tr>
  <tr>
    <td style="font-size: 20px;font-weight: bold;padding-left: 10px">Mật khẩu  <strong style="color:red;"> (*):</strong></td>
    <td width="80%"><input type="password" name="pass" id="pass" size="50" style="height:30px;"></td>
  </tr>
 
		<td style="font-size: 20px;font-weight: bold;padding-left: 10px">Mã quyền:<strong style="color:red;"></strong></td>
     <td width="80%"><input type="text" name="maquyen" id="maquyen" size="50" style="height:30px;"></td>
  </tr>
	  <td style="font-size: 20px;font-weight: bold;padding-left: 10px">Trạng thái <strong style="color:red;"> (*):</strong></td>
     <td width="80%" ><input type="text" name="trangthai" id="trangthai" size="50" style="height:30px;"></td>
  </tr>
  
  <tr>
    <td colspan="2">
    	 	
           <center><span><a href="index.php"><input type="submit" name="huy" value="Hủy" style="height:40px;font-size: 22px;padding-right: 5px;" /></span><span> </span></a><input type="submit" name="gui" value="Đăng ký"  onclick="valid()" style="height:40px;font-size: 22px;padding-left: 5px;" /></center>
         
    </td>
    </tr>
</table>
</form>
</div>
<script type="text/javascript">
		function valid() {
			var ho = document.login.ho.value;
			var ten = document.login.ten.value;
			var sdt = document.login.sdt.value;
			var diachi= document.login.diachi.value;
			var taikhoan= document.login.taikhoan.value;
			var email = document.login.email.value;
			var pass= document.login.pass.value;
			var trangthai= document.login.trangthai.value;
			var em = email.indexOf("@");
			var emc = email.slice(em,email.length);
			var emd = emc.indexOf(".");
			var emdl = emc.lastIndexOf(".");
			var check = true;

			//Validate Họ và tên
			if (ho=="" || ho == null) {
				document.getElementById('ho').innerHTML = "Tên không được để trống.";
				check = false;
			}
			else if (!isNaN(ho)) {
				document.getElementById('ho').innerHTML = "Tên phải là kiểu kí tự.";
				check = false;
			}
			else document.getElementById('ten').innerHTML = "";
			
			if (ten=="" || ten== null) {
				document.getElementById('ten').innerHTML = "Tên không được để trống.";
				check = false;
			}
			else if (!isNaN(ten)) {
				document.getElementById('ten').innerHTML = "Tên phải là kiểu kí tự.";
				check = false;
			}
			else document.getElementById('ten').innerHTML = "";
			
			if (sdt=="" || sdt== null) {
				document.getElementById('sdt').innerHTML = "Tên không được để trống.";
				check = false;
			}
			else if (isNaN(sdt)) {
				document.getElementById('sdt').innerHTML = "Số điện thoại phải là số";
				check = false;
			}
			else document.getElementById('sdt').innerHTML = "";

			
			//Validate Email
			if (email=="") {
				document.getElementById('email').innerHTML = "Email không được để trống.";
				check = false;
			}
			else if (em < 1 || emd < 2 || (emdl + 2)>=email.length) {
				document.getElementById('email').innerHTML = "Không đúng định dạng email.";
				check = false;
			}
			else document.getElementById('email').innerHTML = "";

			if (diachi=="" || diachi== null) {
				document.getElementById('diachi').innerHTML = "Tên không được để trống.";
				check = false;
			}
			else document.getElementById('diachi').innerHTML = "";
			
			if (taikhoan=="" || taikhoan== null) {
				document.getElementById('taikhoan').innerHTML = "Tên không được để trống.";
				check = false;
			}
			else document.getElementById('taikhoan').innerHTML = "";
			
			if (pass=="" || pass== null) {
				document.getElementById('pass').innerHTML = "Tên không được để trống.";
				check = false;
			}
			else document.getElementById('pass').innerHTML = "";
			
			if (trangthai=="" || trangthai== null) {
				document.getElementById('trangthai').innerHTML = "Tên không được để trống.";
				check = false;
			}
			else document.getElementById('trangthai').innerHTML = "";
			
			
			//Check
			if (check == true) {
				alert('Đăng kí thành công.');
			}
		}
	</script>
</center>


