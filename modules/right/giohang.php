
<?php
$tenmaychu='localhost';
$tentaikhoan='root';
$pass='';
$csdl='dienthoai';
$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được nhaa');
if(isset($_GET['add']))
{
	$id=intval($_GET['add']);
	if(session_id() === ''){
		session_start();
	}
	if(isset($_SESSION['cart'][$id])){ 
              
		$_SESSION['cart'][$id]['quantity']++; 
		header("location:../../index.php?xem=listcart");
		  
	}
	else{ 
              
		$sql="SELECT * FROM sanpham WHERE MaSP={$id}"; 
		$query_s=mysqli_query($conn,$sql);
		if(mysqli_num_rows($query_s)!=0){ 
			$row_s=mysqli_fetch_array($query_s); 
			  
			$_SESSION['cart'][$row_s['MaSP']]=array( 
					"quantity" => 1, 
					"price" => $row_s['DonGia'] 
				); 
				header("location:../../index.php?xem=listcart");
		}else{ 
			  
			$message="This product id it's invalid!"; 
			  
		} 
		  
	} 
	// $sql="Select * from sanpham where MaSP=".$id;
	// $result=mysqli_query($conn,$sql);
	// $data=mysqli_fetch_array($result);
	// if(!empty($_SESSION["cart"]))
	// {
	// 	if(array_key_exists($id,$cart))
	// 	{
	// 		$cart[$id] = [
	// 			"amount"    => (int)$cart[$id]["amount"]+1,
	// 			"cost"     => $data[3],
	// 			"name"=> $data[2]

	// 			];
	// 	}
	// 	else
	// 	{
	// 		$cart[$id]=array(
	// 	"amount"=>1,
	// 	"cost"=>$data[3],
	// 	"name"=>$data[2]
	// 	);
	// 	}
	// }
	// else
	// {
	// 	$cart[$id]=array(
	// 	"amount"=>1,
	// 	"cost"=>$data[3],
	// 	"name"=>$data[2]
	// 	);
	// }
	// $_SESSION['cart']=$cart;

}
// else
// {
// 	header('location:index.php');
// }

    // if(isset($message)){ 
    //     echo "<h2>$message</h2>"; 
    // } 
// echo '<p style="font-size:30px; height:50px;line-height:50px; background:pink;color:blue;width:500px; ">Thêm sản phẩm vào giỏ hàng thành công</p>';
// echo '<br>';
// echo '<span style="font-size:20px;font-weight:bold;padding-bottom:4px;">Tên sản phẩm: <span>';
// echo  $data[2];echo '<br>';
// echo '<span style="font-size:20px;font-weight:bold;">Đơn giá: <span>';
// echo  $data[3];echo 'đ';
// setcookie('cart', serialize($cart), time() + 3600, '/');
// setcookie('mess', 'Thêm sản phẩm thành công!', time() + 6, '/');
// header('location: http://localhost/WebDienThoai');
?>