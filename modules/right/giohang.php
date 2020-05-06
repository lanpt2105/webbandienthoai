
<?php
$tenmaychu='localhost';
$tentaikhoan='root';
$pass='';
$csdl='dienthoai';
$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được nhaa');
if(isset($_GET['add']))
{
	$id=$_GET['add'];
	$sql="Select * from sanpham where MaSP=".$id;
	$result=mysqli_query($conn,$sql);
	$data=mysqli_fetch_array($result);
	if(!empty($_SESSION["cart"]))
	{
		if(array_key_exists($id,$cart))
		{
			$cart[$id] = [
				"amount"    => (int)$cart[$id]["amount"]+1,
				"cost"     => $data[3],
				"name"=> $data[2]

				];
		}
		else
		{
			$cart[$id]=array(
		"amount"=>1,
		"cost"=>$data[3],
		"name"=>$data[2]
		);
		}
	}
	else
	{
		$cart[$id]=array(
		"amount"=>1,
		"cost"=>$data[3],
		"name"=>$data[2]
		);
	}
	$_SESSION['cart']=$cart;

}
else
{
	header('location:index.php');
}

echo '<p style="font-size:30px; height:50px;line-height:50px; background:pink;color:blue;width:500px; ">Thêm sản phẩm vào giỏ hàng thành công</p>';
echo '<br>';
echo '<span style="font-size:20px;font-weight:bold;padding-bottom:4px;">Tên sản phẩm: <span>';
echo  $data[2];echo '<br>';
echo '<span style="font-size:20px;font-weight:bold;">Đơn giá: <span>';
echo  $data[3];echo 'đ';
setcookie('cart', serialize($cart), time() + 3600, '/');
setcookie('mess', 'Thêm sản phẩm thành công!', time() + 6, '/');
header('location: http://localhost/WebDienThoai');
?>