
<?php
include_once("config.php");
//include('check.php');
$result = mysqli_query($conn,"SELECT * FROM menu ORDER BY id_menu");
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
		<style>
		table td {
    padding: 0.75em 0.75em !IMPORTANT;
}
		</style>
	</head>

	<body class="is-preload">

	<section>
	<a href="home.php" class="button go-back-btn">Go back</a>
	</section>

        <div class="table-wrapper">
	<form action="" method="post">  
	
	<table>
    <br>
	<tr>
	<h3 style='margin-left:0.8%;'>Search data</h3>
	</tr>
	<tr>

	<td>
	Type:
	</td>
	<td>
	<input style='margin-left:-20%;' type="text" name="term" >
</td>
<td> <input style='margin-left:-38%;' type="submit" value="Submit" /></td>
</tr>
</table> 
</div>
</div>
</form> 
<div class="table-wrapper">
<table width='80%' border=0>
	<div class="table-wrapper">
	<tr bgcolor='#CCCCCC'>
        <td>Menu name</td>
		<td>Menu link</td>
        <td>Menu module</td>
        <td>Edit or delete</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string($conn,$_REQUEST['term']);  
 
$sql = mysqli_query($conn, "SELECT 

id_menu,
menu_name,
menu_link,
menu_module
FROM menu
WHERE menu_name LIKE '%".$term."%'
OR menu_module LIKE '%".$term."%'");
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
        echo "<td>".$row['menu_name']."</td>";
        echo "<td>".$row['menu_link']."</td>";
		echo "<td>".$row['menu_module']."</td>";
		echo "<td><a href='update_menu.php?id_menu=$row[id_menu]\"  class='button' class='button primary'>
		Edit</a> <a href=\"delete_menu.php?id_menu=$row[id_menu]\" onClick=\"return confirm('Are you sure you want to delete this?')\" class='button' class='button primary'>
		Delete</a></td></tr>";		
	}

}

?>
</div>
	</table>


						</div>
				</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
				
				<div class="content">
					
				<div class="row">
			</section>

			


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>