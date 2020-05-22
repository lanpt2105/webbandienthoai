<?php
	include('../config.php');
	if(isset($_GET['id']))
		$id=$_GET['id'];
	else
		$id = $_POST['id'];
	$tenloaisp=$_POST['tenloaisp'];
	$hinhanh=$_POST['hinhanh'];
	$mota=$_POST['mota'];
if(isset($_POST['them']))
{
	$sql= "INSERT  into loaisanpham(TenLSP,HinhAnh,Mota) value('$tenloaisp','$hinhanh','$mota')";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlyloaisanpham&ac=them');
}
elseif(isset($_POST['sua']))
{
	$sql = 'update loaisanpham set TenLSP = \''.$tenloaisp.'\', HinhAnh = \''.$hinhanh.'\', Mota = \''.$mota.'\' where MaLSP = '.$id;
	// echo $sql;
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlyloaisanpham');
}
else
{
   $sql="DELETE from loaisanpham where MaLSP='$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlyloaisanpham&ac=them');
	
		
}

?>
 