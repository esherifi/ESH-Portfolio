<?php
include_once('config.php');
include("login.php");
if ((isset($_SESSION['username']) != '')) 
{
  header('Location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>ESH - Portfolio</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
		<?php include('header2.php')?>
		<!-- Header -->

		<section id="three" class="wrapper style3 style44 special">
<div class="container 50%">

<h2>Admin</h2>

<form enctype="multipart/form-data"  action="" method="post"  class="form-admini">
        <div class="row uniform">
        <div class="12u$">
            
            <input name="username"  style="float: left" placeholder="Username" type="text">
            </div>
        
            
            <div class="12u$">
                <input name="password"   type="password"    placeholder="Password" >
                
            </div>
           
                
            </div>
            <div class="12u$ btn-admins">
                <ul class="actions">
                    <li><input value="Login" name="submit" class="special big" type="submit"></li>
                </ul>
            </div>
        </div>
    </form>
    </section>


		

		</body>
	</html>
