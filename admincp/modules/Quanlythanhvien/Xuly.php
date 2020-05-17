<?php
	include('../config.php');
	$id=$_GET['id'];
	$Ten=$_POST['Ten'];
	$GioiTinh=$_POST['GioiTinh'];
	$SDT=$_POST['SDT'];
	$Email=$_POST['Email'];
	$DiaChi=$_POST['DiaChi'];
	$TaiKhoan=$_POST['TaiKhoan'];
	$MatKhau=$_POST['MatKhau'];
	$MaQuyen=$_POST['MaQuyen'];
if(isset($_POST['them']))
{
	$sql= "insert into user(Ten,GioiTinh,SDT,Email,DiaChi,TaiKhoan,MatKhau,MaQuyen) value('$Ten','$GioiTinh','$SDT','$Email','$DiaChi','$TaiKhoan','$MatKhau','$MaQuyen')";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlythanhvien&ac=them');
}
elseif(isset($_POST['sua']))
{
	$sql="Update user set Ten='$Ten',GioiTinh='$GioiTinh',SDT='$SDT',Email='$Email',DiaChi='$DiaChi',TaiKhoan='$TaiKhoan',MatKhau='$MatKhau',MaQuyen='$MaQuyen' where MaND='$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlythanhvien&ac=sua&id='.$id);
}
else
{
   $sql="delete from user where MaND='$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlythanhvien&ac=them');
	
		
}

?>