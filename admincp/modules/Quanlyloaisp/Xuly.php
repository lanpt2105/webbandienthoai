<?php
	include('../config.php');
	$id=$_GET['MaLSP'];
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
	$sql="UPDATE loaisanpham set (TenLSP='$tenloaisp',HinhAnh='$hinhanh',Mota='$mota') where MaLSP='$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlyloaisanpham&ac=sua&id='.$id);
}
else
{
   $sql="DELETE from loaisanpham where MaLSP='$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlyloaisanpham&ac=them');
	
		
}

?>
 