<?php
include('../config.php');
$id=$_GET['id'];

$sql="delete from hoadon where MaHD='$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlydonhang');


?>
