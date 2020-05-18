<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Trang quản trị</title>
	<style>
	*{ padding: 0px; margin: 0px;}		
	.wrapper
	{
		width: auto;
		height: auto;		
		margin: auto;
		
	}
	.heading
	{
		width: 100%;
		
		height: 90px;
		background: #CF4B4D;
		
		
	}
	.menu
	{
		width: 250px;;
		height: auto;
	    background: #D4B0B0;
		float: left;
		
	}
	
	.content
	{
		width: auto;
	    height: auto;
	    
		float: left;
		
		}
	
	.footer
	{
		width: 100%;
		height: 50px;
			
		float: left;
	}
	.menu ul li
	{
			list-style-type: none;
		background: #D4B0B0;
		border-radius: 10px;
		
		   
	}
		a
	{
			
		text-decoration: none;
		    width: 240px;
			height: 50px;
			line-height: 50px;
			display: block;
		    padding-left: 10px;
		    font-size: 20px;
		    color: rebeccapurple;
	}
	.menu ul li a:hover
		{
			color:antiquewhite;
			background:#4A5CEC;
			
		}
		
		.left
		{
			width: auto;
			height: auto;
			float: left;
			
		}
		.right
		{
			width: auto;
			height: auto;
			padding-top: 0px;
			float: left;
			
			
		}
		table
		{
			border-collapse: collapse;
		}
		.them
		{
			font-size: 22px;font-weight: bold;
			padding-top: 10px;
		}
		.lietke
		{
			float: left;
			padding-left: 300px;
			padding-top: 0px;
			margin-top: -920px;
		}
		.add
		{
			float: left;
		}
		.lk2
		{
			float: left;
		}
		.tc
		{
			width: 1427px;
			height:960px;
			background-image: url("../img/banners/unnamed.jpg");
			
			
		}
		.login
		{
			width: 200px;
			height: 100px;
			background: #A34D4F;
			
		}
		.copyright
	{
		text-align: center;
		background:#4985B7;
		color: white;
		float: left;
		width: 100%;
		height: 60px;
		
		font-size: 18px;
		
	}
		
	</style>
	
</head>
<body>

	
	<?php
	session_start();
	if(!isset($_SESSION['dangnhap']))
	{
		 header('location:login.php');
	}
	?>
	<div class="wrapper">
		
		<?php
		   
			include('modules/config.php');
		 	include('modules/heading.php');
			include('modules/menu.php');
			include('modules/content.php');
			include('modules/footer.php');
		?>
		
	</div>
</body>
</html>