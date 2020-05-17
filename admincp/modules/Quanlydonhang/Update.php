<?php
$sql="select * from loaisanpham where MaLSP=$_GET[id]";
$run=mysqli_query($conn,$sql);
while($dong=mysqli_fetch_array($run));

?>