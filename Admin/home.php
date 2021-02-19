<?php
include_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<style>
	.mainballinaction {
			width: 100%;
			display: flex;
			flex-direction: row;
			justify-content: center;
		}
		.block {
			width: 18.5%;
			}
			</style>
	<script src="js/f.js"></script>
		<meta charset="UTF-8">
		<title>ESH-Portfolio_Admin</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/f/css/fontawesome.css" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<style>
		.wrapper {
			padding: 0 0 0 0 !important;
		}
		</style>
	</head>
	<body>
	

			<!-- Three -->
			<section id="three" class="wrapper style3 special">
			<br>
			<a href="logout.php" class="button log-out-btn">Logout</a>
			<p style="margin-left:82%; font-size:20px; text-decoration:underline white;"></p>
			
			<div class="mainballinaction">
							<div class="block" >
							<a href="adddmenu.php">
							<i class="fa fa-plus-square-o fa-5x" style="color:white; margin-left: 0.1em"></i>
							<p style="padding-left: 2%;">Add menu</p>
							</a>
							</div>
							<div class="block" style="margin-right:1em;">
							<a href="editmenu.php">
							<i class="fa fa-edit fa-5x" style="color:white; margin-left: 0.3em"></i>
							<p  style="padding-left: 5%;">Edit or delete</p>
							</a>
							</div>
							</div>
							<hr style="border-top: 0.5px solid #444444;">
							<br>
						
			<div class="mainballinaction">
							<div class="block">
							<a href="add_main.php">
							<i class="fa fa-plus-square-o fa-5x" style="color:white; margin-left: 0.1em"></i>
							<p style="padding-left: 3%;">Add main</p>
							</a>
							</div>
							<div class="block" style="margin-right:1em;">
							<a href="edit_main.php">
							<i class="fa fa-edit fa-5x" style="color:white; margin-left: 0.3em"></i>
							<p style="padding-left: 7%;">Edit or delete</p>
							</a>
							</div>
							</div>
							
							
						
							<hr style="border-top: 0.5px solid #444444;">
							<br>
			<div class="mainballinaction">
							<div class="block">
							<a href="add_contwo.php">
							<i class="fa fa-plus-square-o fa-5x" style="color:white; margin-left: 0.1em"></i>
							<p style="margin-left: 2%;">Add container-two</p>
							</a>
							</div>
							<div class="block" style="margin-right:1em;">
							<a href="edit_contwo.php">
							<i class="fa fa-edit fa-5x" style="color:white; margin-left: 0.3em"></i>
							<p style="padding-left: 7%;">Edit or delete</p>
							</a>
							</div>
							</div>
							
							
		
			

							</div>
							</div>
							<hr style="border-top: 0.5px solid #444444;">
							<br>

							<div class="mainballinaction" style="display:inline-block">
							<div class="block">
							<a href="add_titles.php">
							<i class="" style="color:white; margin-left: 0.1em"></i>
							<p style="margin-left:2%;"></p>
							</a>
							</div>
							<div class="block" style="margin-right:1em;">
							<a href="edit_titles.php">
							<i class="" style="color:white; margin-left: 0.3em"></i>
							<p style="padding-left: 7%;"></p>
							</a>
							</div>
							</div>
							</form>
</section>
							



		</body>
	</html>
