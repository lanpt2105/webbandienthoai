<?php
	include('../config.php');
	$id=$_GET['id'];
	$maloaitt=$_POST['maloaitt'];
	$tentt=$_POST['tentt'];
	$hinhanh=$_POST['hinhanh'];
	$mota=$_POST['mota'];
	$noidung=$_POST['noidung'];
	$tinhot=$_POST['tinhot'];
	$ngay=$_POST['ngay'];
if(isset($_POST['them']))
{
	$sql= "INSERT into tintuc(MaLTT,TenTT,MoTa,NoiDung,HinhAnh,TinHot,Ngay) value('$maloaitt','$tentt','$mota','$noidung','$hinhanh','$tinhot','$ngay')";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlytintuc&ac=them');
}
elseif(isset($_POST['sua']))
{
	$sql="UPDATE loaisanpham set MaLTT='$maloaitt',TenTT='$tentt',MoTa='$mota',NoiDung='$noidung',HinhAnh='$hinhanh',TinHot='$tinhot',Ngay='$ngay' where MaLSP='$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlytintuc&ac=sua&id='.$id);
}
else
{
   $sql="DELETE from tintuc where MaTT='$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlytintuc&ac=them');
}

?>