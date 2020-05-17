<?php
	include('../config.php');
	$id=$_GET['id'];
	$tenloaisp=$_POST['tenloaisp'];
	$hinhanh=$_POST['hinhanh'];
	$mota=$_POST['mota'];
if(isset($_POST['them']))
{
	$sql= "insert into loaisanpham(TenLSP,HinhAnh,Mota) value('$tenloaisp','$hinhanh','$mota')";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlyloaisanpham&ac=them');
}
elseif(isset($_POST['sua']))
{
	$sql="Update loaisanpham set (TenLSP='$tenloaisp',HinhAnh='$hinhanh',Mota='$mota') where MaLSP='$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlyloaisanpham&ac=sua&id='.$id);
}
else
{
   $sql="delete from loaisanpham where MaLSP='$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlyloaisanpham&ac=them');
	
		
}

?>