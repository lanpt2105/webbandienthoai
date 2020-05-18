<?php
include('../config.php');
$id=$_GET['MaSP'];
	$maloaisp=$_POST['maloaisp'];
	$tensp=$_POST['tensp'];
	$gia=$_POST['gia'];
    $soluong=$_POST['soluong'];
	$hinhanh=$_POST['hinhanh'];
	$makhuyenmai=$_POST['makhuyenmai'];
	$manhinh=$_POST['manhinh'];
	$hdh=$_POST['hdh'];
	$camsau=$_POST['camsau'];
	$camtruoc=$_POST['camtruoc'];
	$cpu=$_POST['cpu'];
	$ram=$_POST['ram'];
	$rom=$_POST['rom'];
	$sdcard=$_POST['sdcard'];
	$pin=$_POST['pin'];
	$sosao=$_POST['sosao'];
	$sodanhgia=$_POST['sodanhgia'];
	$trangthai=$_POST['trangthai'];
	
if(isset($_POST['them']))
{
	$sql= "INSERT into sanpham(MaLSP,TenSP,DonGia,SoLuong,HinhAnh,MaKM,ManHinh,HDH,CamSau,CamTruoc,CPU,Ram,Rom,SDCard,Pin,SoSao,SoDanhGia,TrangThai) value('$maloaisp','$tensp',$gia','$soluong','$hinhanh','$makhuyenmai','$manhinh','$hdh','$camsau','$camtruoc','$cpu','$ram','$rom','$sdcard','$pin','$sosao','$sodanhgia','$trangthai')";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlychitietsanpham&ac=them');
}
elseif(isset($_POST['sua']))
{
	$sql="UPDATE sanpham set MaLSP='$maloaisp',TenSP='$tensp',DonGia='$gia',SoLuong='$soluong',HinhAnh='$hinhanh',MaKM='$makhuyenmai',ManHinh='$manhinh',HDH='$hdh',CamSau='$camsau',CamTruoc='$camtruoc',CPU='$cpu',Ram='$ram',Rom='$rom',SDCard='$sdcard',Pin='$pin',SoSao='$sosao',SoDanhGia='$sodanhgia',TrangThai='$trangthai' where MaSP='$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlychitietsanpham&ac=them&id='.$id);
}
else
{
   $sql="DELETE from sanpham where MaSP='$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlychitietsanpham&ac=them');
}
?>
