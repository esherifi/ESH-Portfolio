<?php
include_once('config.php');
session_start();
if (!isset($_SESSION['username'])) {
	header('location: index.php');
	die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>


		<meta charset="UTF-8">
		<title>Admin</title>
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
	</head>
	<body>

<!-- Three -->
    <section>
	<a href="home.php" class="button go-back-btn">Go back</a>
	</section>
<section id="three" class="wrapper style3 style44 special">

<div class="container 50%">

<h2>Add Menu</h2>

<form enctype="multipart/form-data"  action="addmenu.php" method="post" name="form1">
        <div class="row uniform">
        <div class="12u$">
            
            <input name="menu_name"  style="float: left" value="" placeholder="Menu name" type="text">
            </div>
        
            
            <div class="12u$">
                <input name="menu_link"   type="text"    placeholder="Menu link" >
                
            </div>
            <div class="12u$">
                <input name="menu_module"   type="text"    placeholder="Menu module" >
                
            </div>
            <div class="12u$">
                <ul class="actions">
                    <li><input value="Add" name="shto" class="special big" type="submit"></li>
                </ul>
            </div>
        </div>
    </form>
    </section>
</body>
</html>
