<i class="fa fa-user"></i><i class="fa fa-user"></i><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng nhập trang quản trị</title>
	</head>
	<body>

<div style="width: 500px;
			height: 180px;
			background: pink;
			align-content: center;
			margin-left: 600px;
			margin-top: 100px;">
<form action="" method="post">
<center><table width="400" border="0">
  <tbody>
    <tr>
      <th colspan="2" style="align-content:center; padding-bottom: 18px;padding-top: 5px;font-size: 30px; ">Đăng nhập trang quản trị</th>
      
    </tr>
    <tr>
      <td style="font-size: 25px;" >Tên đăng nhập: </td>
      <td><input type="text" name="username" size="30"></td>
    </tr>
    <tr>
      <td style="font-size: 25px;padiing-bottom: 15px;">Mật khẩu: </td>
      <td><input type="password" name="password" size="30"></td>
    </tr>
    <tr >
      <td colspan="2">
		  
			  <div align="center">
		  <input type="submit" name="login" id="button" value="Login" style=" margin-top: 15px;font-size: 20px;" >
				  </div>
		
      </td>
    </tr>
  </tbody>
</table>
</center>
</form>
	</div>
		</body>
</html>
	<?php
     include('modules/config.php');
	session_start();
    
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from admin where username='$username' and password='$password' limit 1";
		$query=mysqli_query($conn,$sql);
		$nums=mysqli_num_rows($query);
		if($nums>0)
		{
			$_SESSION['dangnhap']=$username;
			header('location:index.php?quanly=trangchu&id=1');
		}
	     else{
			 echo '<script language="javascript">';
            echo 'alert("Tài khoản hoặc mật khẩu không đúng.Vui lòng nhập lại!!!")';
            echo '</script>';
			 
			 
		 }
		
	}
?>
