<?php
if(isset($_GET['khoanggia']))
{
	$khoanggia=$_GET['khoanggia'];
	$khoang=preg_split('[\s]', $khoanggia);
	$from=0;
	$to=0;
	if($khoang=='Trên')
	{
		$from=$khoang[1];
	}
	else
	{
		$khoang1=preg_split('[\-]', $khoang[0]);
		$from=$khoang1[0];
		$to=$khoang1[1];
	}
	$from*=1000000;
	$to*=1000000;
	$query.="and DonGia>=$from";
	if($to!=0)
	{
		$query.=" and DonGia<=$to";
	}
	$result=$conn->query($query);
	return $result;
}

?>
<?php
include "chitietsanpham.php";
?>

			
			