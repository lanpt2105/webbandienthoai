<i class="fa fa-user"></i><i class="fa fa-user"></i><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang quản trị</title>
	<style>
	*{ padding: 0px; margin: 0px;}		
	.wrapper
	{
		widtht: auto;
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
		height: 1590px;
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
			.copy-right
	{
		text-align: center;
		background: #777575;
		color: white;
		height: 50px;
		
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
			style="font-size: 22px;font-weight: bold;"
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
			height: 1590px;
			background-image: url("../img/banners/unnamed.jpg");
			
			
		}
		.login
		{
			width: 200px;
			height: 100px;
			background: #A34D4F;
			
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