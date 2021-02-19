<?php
include_once("config.php");

if(isset($_POST['update_menu']))
{	
	$id_menu = mysqli_real_escape_string($conn,$_POST['id_menu']);
	
	$menu_name=mysqli_real_escape_string($conn,$_POST['menu_name']);
    $menu_link=mysqli_real_escape_string($conn,$_POST['menu_link']);
    $menu_module=mysqli_real_escape_string($conn,$_POST['menu_module']);
	
	if(empty($menu_name) || empty($menu_link) || empty($menu_module)) {	
			
		if(empty($menu_name)) {
			echo "<font color='red'>menu_name field is empty.</font><br/>";
		}
		
		if(empty($menu_link)) {
			echo "<font color='red'>menu_link field is empty.</font><br/>";
        }
        if(empty($menu_module)) {
			echo "<font color='red'>menu_module field is empty.</font><br/>";
		}
	} else {	

		
        $result = mysqli_query($conn,"UPDATE menu 
		SET
		menu_name = '$menu_name',
		menu_link = '$menu_link',
		menu_module = '$menu_module'
		WHERE id_menu = '$id_menu'
	
		");
		
		header("Location: editmenu.php");
	}
}
?>
<?php
if(isset($_GET['id_menu'])) { 

$id_menu = $_GET['id_menu'];
}
$result = mysqli_query($conn,"SELECT * FROM menu WHERE id_menu = '$id_menu'");


while($res = mysqli_fetch_array($result))
{
	$menu_name = $res['menu_name'];
    $menu_link = $res['menu_link'];
    $menu_module = $res['menu_module'];
	
}
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

	<!-- Header -->
		<?php include_once("header2.php"); ?>
    <!-- Header -->   


		<section>
	<a href="home.php" class="button go-back-btn">Go back</a>
	</section>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner update-menu-table">
				
				<div class="content">
					
				<div class="row">
<form  action="update_menu.php" name="form1" method="post" enctype="multipart/form-data">
		<table border="0">
			<tr> 
				<td>Menu name</td>
				<td><input type="text" name="menu_name" value='<?php echo $menu_name;?>' required /></td>
			</tr>
			<tr> 
				<td>Menu link</td>
				<td><input type="text" name="menu_link" value='<?php echo $menu_link;?>' required /></td>
			</tr>
            <tr> 
				<td>Menu module</td>
				<td><input type="text" name="menu_module" value='<?php echo $menu_module;?>' required /></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_menu" value='<?php echo $_GET['id_menu'];?>' /></td>
				<td><input type="submit" name="update_menu" value="Update"></td>
			</tr>
		</table>
	</form>


			</section>

      


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php
//include('check.php');
?>