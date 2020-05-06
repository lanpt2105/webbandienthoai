<?php  ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cửa hàng điện thoại Phùng Lan</title>
<style>
	*{ padding: 0px; margin: 0px;}
	.wrapper
	{
		widtht: 1000px;
		height: auto;
		
		margin: auto;
	}
	.heading
	{
		width: 100%;
		height: 200px;
		border: 1px solid black;
		
	}
	.menu
	{
		width: 100%;
		height: 60px;
		
		
		
	}
	.timkiem
	{
		width: 100%;
		height: 100px;
		
		float: left;
	}
	.content
	{
		width: 100%;
	    height: auto;
		background:#F3F3F3;
	    float: left;}
	
	.footer
	{
		width: 100%;
		height: 50px;
		
	}
	.menu ul
	{
		width: 100%;
		list-style-type: none;
		background: #2895D1;
		height: 60px;
	}
	.menu ul li
	{
		float: left;
		margin-left: 30px;
		height: 60px;
		line-height: 60px;
		font-size: 20px;
		width: 140px;
	}
	.menu ul li a
	{
		text-decoration: none;
		color: black;
		text-align: center;
		display: block;
		
		
		
	}
	.menu ul li a:hover
	{
		width:150px;
		background-color: yellow;
		color: red;
		font-size: 22px;
	}
	.menu1
	{
		background-color: #C36868;
		position: relative;
		display: none;
		
	}
	.menu ul li:hover .menu1
	{
		display: inline-table;
		position: absolute;
		width: 800px;
	}
	.left
	{
		width: 200px;
		height: 690px;
		
		float: left;
	}
	.right
	{
	     width: 85%;
		height: auto;
		
		float:right;
		margin-left: 10px;
		
	}
	.clear
	{
		clear: both;
	}
	.Loaisp
	{
		float: left;
	}
	 .Loaisp ul 
	{
	    height: 30px;
		
	}
	.Loaisp a
	{
		width: 185px;
		text-decoration:none;
		font-size: 23px;
		padding-left: 15px;
		height: 25px;
		line-height: 25px;
		display: block;
		
		color: teal;
		padding-top: 10px;
		
	}
	.Loaisp li a:hover
	{
		width:185px;
		background-color:beige;
		color: red;
		
	}
	.sanphamall ul li
	{
		width: 200px;
		height: auto;
		list-style-type: none;
		text-align: center;
		float: left;
		padding-left: 60px;
		padding-top: 30px;
	}
	.sanphamall ul li a
	{
		text-decoration: none;
		
	}
	.header {
		position: sticky;
		position: -webkit-sticky; /* Safari */
		top: 0;
		z-index: 12;
		
		padding: 28px 0 5px 0 ;
		
	}
	.header .logo {
			width: 250px;
			height: 60px;
			float: left;
			transition-duration: .1s;
		}
		.header .logo:hover {
			transform: scale(1.05)
		}
		.header .logo img {
			width: 100%;
			height: 100%;
			vertical-align: middle;
			animation: example 5s infinite ease-in-out;
		}

		/* Standard syntax */
		@keyframes example {
			35%, 100% {
				transform: scale(1);
			}
			10% {
				transform: rotateX(360deg) scale(1.15);
			}
		}
	.header .smallmenu {
		display: none;
	}
	.header .content1
	{
			width: calc(100% - 200px);
			float: left;
		
	}
	.search-header {float: left;}
	form.input-search {
		
				margin-left: 20px;
				background: #ddd;
				
				border-radius: 10px;
				height: 40px;
				width: 300px;
				
			}
	.input-search input {
				float: left;
				padding-left: 15px;
				border: none;
				border-radius: 10px 0 0 10px;
				height: 39px;
				width: calc(100% - 95px - 20px);
				
			}
			.input-search button {
				float: right;
				font-size: 14px;
				font-weight: bold;
				padding: 0 10px;
				color: #888;
				background: none;
				width: 100px;
				height: 39px;
				border: none;
				cursor: pointer;
				-webkit-transition-duration: .3s;
				     -o-transition-duration: .3s;
				        transition-duration: .3s;
			}
			.input-search button:hover {
				color: #000;
			}
	       .tags a {
				color: gray;
				padding: 0 5px;
			}
			.tags a:hover {
				color: black;
				text-decoration: underline;
			}
	.tools-member {
				float: right;
				display: table;
				margin-left: 10px;
				font-size: 14px;
			}

			.tools-member a {
				position: relative;
				padding: 5px 0;
				text-align: center;
				font-size: 16px;
				font-weight: bold;
				color: #565;
				cursor: pointer;
			}
			.tools-member a:hover > i {
				border: 1px solid #fff;
				background-color: rgb(161, 161, 161);
				color: #fff;
			}

			.tools-member i { /* icon */
				padding: 10px;
				border-radius: 50%;
				border: 1px solid #ccc;
				background-color: #fff;
				color: #000;
				-webkit-transition: 0.2s;
				-o-transition: 0.2s;
				transition: 0.2s;
			}
			.tools-member .fa-user {
				padding: 10px 12.5px;
			}
			.tools-member .fa-shopping-cart {
				padding: 10px 11px;
			}
			
				.member {
					position: relative;
					float: left;
					display: table-cell;
				}
				.member:hover > .menuMember{
					z-index: 20;
					transform: translateX(-40%) scale(1);
				}
				.member .menuMember {
					position: absolute;
					left: 0;
					text-align: center;
					border-radius: 5px;
					background-color: #eee;
					min-width: 170px;
					transition-duration: .15s;
					transform: translateX(-40%) scale(0);
				}
				.member .menuMember a {
					display: block;
					padding: 10px 0;
				}
				.member .menuMember a:hover {
					background-color: #888;
					color: #eee;
				}
				.member .hide {
					display: none;}
	
	         .cart {
					float: left;
					display: table-cell;
					
					margin: 0 15px; 
					padding-left: 5px;
				}
				.cart-number {
					position: absolute;
					left: 1.4em;
					bottom: -1em;
					font-weight: bold;
					font-size: 1em;
					color: red;
					border-radius: 50%;
					width: 2em;
					height: 2em;
					line-height: 2em;
					text-align: center;
				}
				.cart .cart-number {
					transition-duration: .4s; 
				}
			
				.check-order {
					float: left;
					display: table-cell;
					
					margin-left: 5px;
					padding-left: 5px; 
				}
		.copy-right
	{
		text-align: center;
		background: #777575;
		color: white;
	}
	.dangky
	{
		width: 700px;
		background-image:url("img/smallBanners/images.jfif");
	}
	
   .tt
	{
		width: 750px;
		padding-left: 250px;
	}
	.lienhe
	{
		background-image:url("img/banners/unnamed.jpg");
		width: 1200px;
		height: 700px;
		font-size: 25px;
		padding-top: 25px;
		padding-left: 70px;
	}
	.hd
	{
		background-image:url("img/banners/unnamed.jpg");
		width: 1200px;
		height: 700px;
		font-size: 25px;
		padding-top: 25px;
		padding-left: 70px;
	}
</style>
</head>

<body>
	<div class="wrapper">
		<?php
			include('admincp/modules/config.php');
		 	include('modules/heading.php');
			include('modules/menu.php');
			include('modules/timkiem.php');
			include('modules/content.php');
			include('modules/footer.php');
		?>
	
		
		
	</div>
	
</body>
</html>